<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

use Tygh\Addons\TinkoffMultiparty\Client\SMRegisterApiClient;
use Tygh\Addons\TinkoffMultiparty\Enum\AddressesTypes;
use Tygh\Addons\TinkoffMultiparty\Enum\PaymentSessionStatuses;
use Tygh\Addons\TinkoffMultiparty\Payments\EACQMultipartyClient;
use Tygh\Enum\NotificationSeverity;
use Tygh\Enum\OrderStatuses;
use Tygh\Enum\UserTypes;
use Tygh\Enum\YesNo;
use Tygh\Models\VendorPlan;
use Tygh\Registry;

defined('BOOTSTRAP') or die('Access denied');

/** @var array $auth */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /** @var string $mode */
    if (
        $mode === 'transfer_funds'
        && !empty($_REQUEST['order_id'])
    ) {
        if (!UserTypes::isAdmin($auth['user_type'])) {
            return [CONTROLLER_STATUS_NO_CONTENT];
        }

        $order_info = fn_get_order_info($_REQUEST['order_id']);
        if (empty($order_info)) {
            return [CONTROLLER_STATUS_NO_CONTENT];
        }

        $client = new EACQMultipartyClient(
            $order_info['payment_method']['processor_params']['terminal_key'],
            $order_info['payment_method']['processor_params']['password'],
            Tygh::$app['addons.rus_taxes.receipt_factory'],
            Tygh::$app['addons.tinkoff_multiparty.payouts_manager_service']
        );

        $client->transferFunds($order_info);

        if (isset($_REQUEST['redirect_url'])) {
            return [CONTROLLER_STATUS_REDIRECT, $_REQUEST['redirect_url']];
        }
        return [CONTROLLER_STATUS_REDIRECT, 'orders.details?order_id=' . $order_info['order_id']];
    }

    /** @var string $mode */
    if (
        $mode === 'cancel_funds'
        && !empty($_REQUEST['order_id'])
    ) {
        if (!UserTypes::isAdmin($auth['user_type']) || YesNo::isFalse($auth['is_root'])) {
            return [CONTROLLER_STATUS_NO_CONTENT];
        }

        $order_info = fn_get_order_info($_REQUEST['order_id']);
        if (empty($order_info)) {
            return [CONTROLLER_STATUS_NO_CONTENT];
        }

        $processor_params = $order_info['payment_method']['processor_params'];

        $client = new EACQMultipartyClient(
            $processor_params['terminal_key'],
            $processor_params['password'],
            Tygh::$app['addons.rus_taxes.receipt_factory'],
            Tygh::$app['addons.tinkoff_multiparty.payouts_manager_service']
        );

        $response = $client->cancel($order_info, $processor_params);
        if (empty($response['Success'])) {
            $client->handleError($response);
        } else {
            fn_set_notification(NotificationSeverity::NOTICE, __('notice'), __('addons.tinkoff_multiparty.funds_were_refunded'));

            if (
                in_array($response['Status'], PaymentSessionStatuses::getStatusesWereRefunded())
                && in_array($order_info['status'], fn_get_settled_order_statuses())
            ) {
                fn_change_order_status($_REQUEST['order_id'], OrderStatuses::CANCELED);
            }

            fn_update_order_payment_info(
                $order_info['order_id'],
                [
                    'addons.tinkoff_multiparty.payment_status' => $response['Status'],
                    'addons.tinkoff_multiparty.funds_were_transferred' => '',
                    'addons.tinkoff_multiparty.funds_were_refunded' => __('yes')
                ]
            );
        }

        if (isset($_REQUEST['redirect_url'])) {
            return [CONTROLLER_STATUS_REDIRECT, $_REQUEST['redirect_url']];
        }
        return [CONTROLLER_STATUS_REDIRECT, 'orders.details?order_id=' . $order_info['order_id']];
    }

    if (
        $mode === 'register_shopcode'
        && !empty($_REQUEST['company_id'])
    ) {
        $company_id = $_REQUEST['company_id'];
        /** @var array<string, string> $company_data */
        $company_data = fn_get_company_data($company_id);

        if (
            empty($company_data)
            || empty($company_data['tinkoff_multiparty_shop_data'])
        ) {
            return;
        }

        $shop_data = unserialize($company_data['tinkoff_multiparty_shop_data']);
        unset($shop_data['phone_organization']);
        if (!empty($shop_data['ceo']) && !is_object($shop_data['ceo'])) {
            $shop_data['ceo'] = (object) $shop_data['ceo'];
        }

        $processor_params = db_get_row('SELECT p.processor_params FROM ?:payment_processors pp JOIN ?:payments p ON pp.processor_id = p.processor_id WHERE pp.processor_script = ?s AND p.status = ?s ORDER BY payment_id ASC', 'tinkoff_multiparty.php', 'A');
        if (empty($processor_params)) {
            fn_set_notification(NotificationSeverity::ERROR, __('error'), __('addons.tinkoff_multiparty.enable_tinkoff_multiparty_payment'));
            return;
        }
        $processor_params = unserialize(reset($processor_params));

        if (!empty($shop_data['bankAccount']) && !is_object($shop_data['bankAccount'])) {
            $date_agreement = DateTime::createFromFormat('Y-m-d', $processor_params['date_agreement_with_bank'])->format('d.m.Y');
            $shop_data['bankAccount']['details'] = 'Перевод средств по договору № ' . $processor_params['number_agreement_with_bank'] . ' от ' . $date_agreement . ' по Реестру Операций от ${date}. Сумма комиссии ${rub} руб. ${kop} коп., НДС не облагается.';
            $shop_data['bankAccount'] = (object) $shop_data['bankAccount'];
        }

        $client = new SMRegisterApiClient($processor_params['sm_register_username'], $processor_params['sm_register_password']);
        /** @var array $response */
        $response = $client->registerShopCode($shop_data);
        if (empty($response['shopCode'])) {
            fn_set_notification(
                NotificationSeverity::ERROR,
                __('error'),
                !empty($response['message']) ? $response['message'] : __('addons.tinkoff_multiparty.shopcode_is_not_registered')
            );
            return;
        }

        $tinkoff_multiparty_data = [
            'tinkoff_multiparty_shopcode' => $response['shopCode'],
            'tinkoff_multiparty_code' => $response['code']
        ];
        db_query('UPDATE ?:companies SET ?u WHERE company_id = ?i', $tinkoff_multiparty_data, $company_id);
        fn_set_notification(NotificationSeverity::NOTICE, __('notice'), __('addons.tinkoff_multiparty.shopcode_is_registered'));

        $redirect_url = !empty($_REQUEST['redirect_url'])
            ? $_REQUEST['redirect_url']
            : 'companies.manage?company_id=' . $company_id;

        return [CONTROLLER_STATUS_REDIRECT, $redirect_url];
    }

    if ($mode === 'update_form_sm_register' && !empty($_REQUEST['shop_data'])) {
        $shop_data = $_REQUEST['shop_data'];
        $company_id = Registry::get('runtime.company_id');
        /** @var array<string, string> $company_data */
        $company_data = fn_get_company_data($company_id);

        if (!array_filter($shop_data['bankAccount'])) {
            unset($shop_data['bankAccount']);
        } else {
            /** @var VendorPlan $current_vendor_plan */
            $current_vendor_plan = VendorPlan::model()->find($company_data['plan_id'], ['get_companies_count' => true]);
            $shop_data['bankAccount']['tax'] = !empty($current_vendor_plan) ? $current_vendor_plan->commission : '0';
        }

        $tinkoff_multiparty_shop_data = ['tinkoff_multiparty_shop_data' => serialize($shop_data)];
        db_query('UPDATE ?:companies SET ?u WHERE company_id = ?i', $tinkoff_multiparty_shop_data, $company_id);

        return [CONTROLLER_STATUS_REDIRECT, $_REQUEST['redirect_url']];
    }

    return [CONTROLLER_STATUS_OK];
}

if ($mode === 'form_sm_register') {
    if (!Registry::get('runtime.company_id')) {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    /** @var \Tygh\SmartyEngine\Core $view */
    $view = Tygh::$app['view'];

    $company_id = Registry::get('runtime.company_id');
    /** @var array<string, string> $company_data */
    $company_data = fn_get_company_data($company_id);
    if (
        empty($company_data)
        || !empty($company_data['tinkoff_multiparty_shopcode'])
    ) {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    /** @var \Tygh\Storefront\Repository $storefronts_repository */
    $storefronts_repository = Tygh::$app['storefront.repository'];
    /** @var \Tygh\Storefront\Storefront $storefront */
    $storefront = ($storefronts_repository->getCount() === 1)
        ? $storefronts_repository->findDefault()
        : $storefronts_repository->findByCompanyId($company_id);

    if (!empty($storefront)) {
        if (!empty($company_data['seo_name'])) {
            $site_url = fn_get_storefront_protocol() . '://' . $storefront->url . '/' . $company_data['seo_name'];
        } else {
            $site_url = fn_get_storefront_protocol() . '://' . $storefront->url . '/index.php?dispatch=companies.products&company_id=' . $company_data['company_id'];
        }
    } else {
        $site_url = $company_data['url'] ?? '';
    }

    $shop_data = !empty($company_data['tinkoff_multiparty_shop_data'])
        ? unserialize($company_data['tinkoff_multiparty_shop_data'])
        : [];

    list($countries, ) = fn_get_countries(['only_avail' => true], 0, DESCR_SL);

    $view->assign([
        'company_data'    => $company_data,
        'addresses_types' => AddressesTypes::getAllValues(),
        'site_url'        => $site_url,
        'shop_data'       => $shop_data,
        'countries'       => $countries
    ]);
}
