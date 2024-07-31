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

namespace Tygh\Addons\TinkoffMultiparty\Payments;

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Addons\RusTaxes\ReceiptFactory;
use Tygh\Addons\TinkoffMultiparty\Client\EACQApiClient;
use Tygh\Addons\TinkoffMultiparty\Enum\TinkoffMultipartyAgentTypes;
use Tygh\Addons\TinkoffMultiparty\Services\PayoutsManagerService;
use Tygh\Enum\NotificationSeverity;
use Tygh\Enum\YesNo;
use Tygh\Http;
use Tygh\Registry;
use Tygh\Tygh;

/**
 * @phpcs:disable SlevomatCodingStandard.TypeHints.DisallowMixedTypeHint
 */
class EACQMultipartyClient extends EACQApiClient
{
    /** @var string $terminal_key */
    protected $terminal_key;

    /** @var string $password */
    protected $password;

    /**
     * @var ReceiptFactory
     */
    private $receipt_factory;

    /** @var \Tygh\Addons\TinkoffMultiparty\Services\PayoutsManagerService */
    protected $payouts_manager_service;

    /**
     * Constructor of EACQMultipartyClient class.
     *
     * @param string         $terminal_key    Terminal key.
     * @param string         $password        Terminal password.
     * @param ReceiptFactory $receipt_factory Receipt factory.
     */
    public function __construct($terminal_key, $password, ReceiptFactory $receipt_factory, PayoutsManagerService $payouts_manager_service)
    {
        $this->terminal_key = $terminal_key;
        $this->password = $password;
        $this->receipt_factory = $receipt_factory;
        $this->payouts_manager_service = $payouts_manager_service;
    }

    /**
     * Method for initialize payment at Tinkoff Multiparty API.
     *
     * @param array<string, int|string|array<string, string>>                      $order_info       Order information.
     * @param array{send_receipt: string, pay_type: string, is_recurrent?: string} $processor_params Payment processor parameters.
     * @param string                                                               $mode             The current mode causing initialization.
     *
     * @return array<string, string>|string
     *
     * @psalm-suppress InvalidArgument
     */
    public function init(array $order_info, array $processor_params, $mode)
    {
        $method = 'Init';

        $amount = fn_format_price_by_currency($order_info['total'], CART_PRIMARY_CURRENCY, 'RUB') * 100;
        $data = [
            'TerminalKey' => $this->terminal_key,
            'Amount'      => (string) $amount,
            'OrderId'     => $order_info['order_id'],
        ];

        /** @var \Tygh\Storefront\Repository $repository */
        $repository = Tygh::$app['storefront.repository'];
        $storefront = $repository->findById((int) $order_info['storefront_id']);
        if ($storefront) {
            $protocol = fn_get_storefront_protocol() . '://';
            $storefront_url = $protocol . $storefront->url;
            $data['NotificationURL'] = $storefront_url . '/index.php?dispatch=tinkoff_multiparty.get_notification';
            $data['SuccessURL']      = $storefront_url . '/index.php?dispatch=tinkoff_multiparty.success&OrderId=${OrderId}&PaymentId=${PaymentId}';
            $data['FailURL']         = $storefront_url . '/index.php?dispatch=tinkoff_multiparty.fail&OrderId=${OrderId}&Message=${Message}';
        }

        $is_multiple = $mode !== 'repay';
        $data['Shops'] = $this->getShops($order_info, $is_multiple);
        if (YesNo::toBool($processor_params['send_receipt'])) {
            $data['Receipt'] = $this->generateReceipt($order_info, $processor_params);
        }

        /** @var array<string, string> $optional_data */
        $optional_data = [
            'IP'              => $order_info['ip_address'],
            'Language'        => CART_LANGUAGE,
            'Recurrent'       => $processor_params['is_recurrent'] ?? YesNo::NO,
            'PayType'         => $processor_params['pay_type'],
        ];
        if (YesNo::toBool($optional_data['Recurrent'])) {
            unset($optional_data['Recurrent'], $optional_data['CustomerKey']); //TODO For recurrent payments this has to be changed.
        }
        $data = array_merge($data, $optional_data);
        $data['Token'] = $this->generateRequestToken($data, $this->password);
        return $this->execute($method, Http::POST, $data);
    }

    /**
     * Method for confirming payment. For 2step payments.
     *
     * @param array<string, string|array<string, string>> $order_info Order information.
     *
     * @return string|string[]
     *
     * @psalm-suppress InvalidArgument
     */
    public function confirm(array $order_info)
    {
        $method = 'Confirm';
        /** @var array<string, array<string, string>> $order_info */
        $query_params = [
            'TerminalKey' => $this->terminal_key,
            'PaymentId'   => $order_info['payment_info']['payment_id'],
        ];

        $is_multiple = YesNo::isTrue($order_info['is_parent_order']);
        $query_params['Shops'] = $this->getShops($order_info, $is_multiple);
        $query_params['Token'] = $this->generateRequestToken($query_params, $this->password);
        return $this->execute($method, Http::POST, $query_params);
    }

    /**
     * Method for canceling payment.
     *
     * @param array<string, string|array<string, string>> $order_info       Order information.
     * @param array{send_receipt: string}                 $processor_params Payment processor parameters.
     *
     * @return string|string[]
     *
     * @psalm-suppress InvalidArgument
     */
    public function cancel(array $order_info, array $processor_params)
    {
        $method = 'Cancel';
        /** @var array<string, array<string, string>> $order_info */
        $query_params = [
            'TerminalKey' => $this->terminal_key,
            'PaymentId'   => $order_info['payment_info']['payment_id'],
        ];

        $query_params['Shops'] = $this->getShops($order_info);
        /** @var array<string, int> $order_info */
        $total = $order_info['total'] * 100;
        $query_params['Amount'] = (string) $total;

        if (YesNo::toBool($processor_params['send_receipt'])) {
            $query_params['Receipt'] = $this->generateReceipt($order_info, $processor_params);
        }
        $query_params['Token'] = $this->generateRequestToken($query_params, $this->password);
        return $this->execute($method, Http::POST, $query_params);
    }

    /**
     * Method for getting state of payment.
     *
     * @param string $payment_id Payment identifier.
     *
     * @return string|string[]
     */
    public function getState($payment_id)
    {
        $method = 'GetState';
        $query_params = [
            'TerminalKey' => $this->terminal_key,
            'PaymentId'   => $payment_id,
        ];

        $query_params['Token'] = $this->generateRequestToken($query_params, $this->password);

        return $this->execute($method, Http::POST, $query_params);
    }

    /**
     * Method for getting state of payment.
     *
     * @param string $order_id Order identifier
     *
     * @return string|string[]
     */
    public function checkOrder($order_id)
    {
        $method = 'CheckOrder';
        $query_params = [
            'TerminalKey' => $this->terminal_key,
            'OrderId'   => $order_id,
        ];

        $query_params['Token'] = $this->generateRequestToken($query_params, $this->password);
        return $this->execute($method, Http::POST, $query_params);
    }

    /**
     * Method for getting notifications about payment states.
     *
     * @return string|string[]
     */
    public function resend()
    {
        $method = 'Resend';
        $query_params = [
            'TerminalKey' => $this->terminal_key,
        ];
        $query_params['Token'] = $this->generateRequestToken($query_params, $this->password);

        return $this->execute($method, Http::POST, $query_params);
    }

    /**
     * Method for sending second receipt. For 2-step payments.
     *
     * @param array<string, string|array<string, string>> $order_info       Order information.
     * @param array{send_receipt: string}                 $processor_params Payment processor parameters.
     *
     * @return string|string[]
     *
     * @psalm-suppress InvalidArgument
     */
    public function sendClosingReceipt(array $order_info, array $processor_params)
    {
        $method = 'SendClosingReceipt';
        /** @var array<string, array<string, string>> $order_info */
        $query_params = [
            'TerminalKey' => $this->terminal_key,
            'PaymentId'   => $order_info['payment_info']['payment_id'],
        ];
        if (YesNo::toBool($processor_params['send_receipt'])) {
            $query_params['Receipt'] = $this->generateReceipt($order_info, $processor_params, 'full_payment', 'commodity');
            /** @var array<string, string|array<string, string|array<string, string>>> $query_params */
            if (!empty($query_params['Receipt']['Payments']['Electronic'])) {
                $query_params['Receipt']['Payments']['AdvancePayment'] = $query_params['Receipt']['Payments']['Electronic'];
                $query_params['Receipt']['Payments']['Electronic'] = 0;
            }
        }
        $query_params['Token'] = $this->generateRequestToken($query_params, $this->password);

        return $this->execute($method, Http::POST, $query_params);
    }

    /**
     * Method for generating receipt information.
     *
     * @param array<string, int|string|array<string, string>> $order_info       Order information.
     * @param array<string, string>                           $processor_params Parameters of payment processor.
     * @param string                                          $payment_method   Payment method for current receipt.
     * @param string                                          $payment_object   Payment object for current receipt.
     *
     * @return array{
     *   AgentData: object,
     *   Email: mixed,
     *   Items: array{
     *     AgentData: object,
     *     Amount: numeric-string,
     *     Name: string,
     *     PaymentMethod: string,
     *     PaymentObject: string,
     *     Price: numeric-string,
     *     Quantity: float,
     *     ShopCode: string,
     *     SupplierInfo: object, Tax: string
     *   },
     *   Payments: array{AdvancePayment: int|string, Cash: int|string, Credit: int|string, Electronic: int|string, Provision: int|string},
     *   Phone: mixed,
     *   SupplierInfo: object,
     *   Taxation: string
     * }|null
     *
     * @psalm-suppress InvalidReturnType
     * @psalm-suppress InvalidReturnStatement
     */
    protected function generateReceipt(array $order_info, array $processor_params, $payment_method = 'full_prepayment', $payment_object = 'payment')
    {
        /** @var array<string, string> $order_info */
        if (YesNo::isTrue($order_info['is_parent_order'])) {
            $orders = fn_get_suborders_info((int) $order_info['order_id']);
        } else {
            $orders = [$order_info];
        }

        $phone_mp = !empty(Registry::get('settings.Company.company_phone'))
            ? $this->normalizePhone(Registry::get('settings.Company.company_phone'))
            : $this->normalizePhone(Registry::get('settings.Company.company_phone_2')) ?? '';

        /** @var array<string, string|array<string, string|array<string, string>>> $order_info */
        $agent_data_mp = [
            'AgentSign'       => TinkoffMultipartyAgentTypes::BANKING_PAYMENT_SUBAGENT,
            'OperationName'   => 'Чек',
            'Phones'          => [$phone_mp],
            'TransferPhones'  => [$phone_mp],
            'OperatorName'    => Registry::get('settings.Company.company_name') ?? '',
            'OperatorAddress' => Registry::get('settings.Company.company_address') ?? '',
            'OperatorInn'     => $order_info['payment_method']['processor_params']['marketplace_inn'] ?? ''
        ];

        $supplier_info_mp = [
            'Phones' => [$phone_mp],
            'Name'   => Registry::get('settings.Company.company_name') ?? '',
            'Inn'    => $order_info['payment_method']['processor_params']['marketplace_inn'] ?? ''
        ];

        $items = [];
        $receipt_sum = 0;
        foreach ($orders as $order) {
            $order_data = fn_get_order_info($order['order_id']);
            if (!$order_data) {
                continue;
            }

            $receipt = $this->receipt_factory->createReceiptFromOrder($order_data, 'RUB');
            if (!$receipt) {
                continue;
            }

            $receipt_items = $receipt->getItems();
            if (empty($receipt_items)) {
                continue;
            }

            $company_data = fn_get_company_data($order_data['company_id']);
            if (empty($company_data)) {
                continue;
            }
            $shop_data  = unserialize($company_data['tinkoff_multiparty_shop_data']);
            $shopcode   = $company_data['tinkoff_multiparty_shopcode'] ?: '';
            $agent_sign = !empty($company_data['agent_type'])
                ? TinkoffMultipartyAgentTypes::getValue($company_data['agent_type'])
                : TinkoffMultipartyAgentTypes::PAYMENT_AGENT;
            $agent_data = [
                'AgentSign'     => $agent_sign,
                'OperationName' => 'Позиция чека',
                'Phones'        => [$this->normalizePhone($shop_data['phone_organization']) ?? '']
            ];
            $supplier_info = [
                'Phones' => [$this->normalizePhone($shop_data['phone_organization']) ?? ''],
                'Name'   => $shop_data['name'],
                'Inn'    => $shop_data['inn']
            ];

            foreach ($receipt_items as $item) {
                $items[] = [
                    'Name'          => $item->getName(),
                    'Price'         => (string) ($item->getPrice() * 100),
                    'Quantity'      => $item->getQuantity(),
                    'Amount'        => (string) ($item->getTotal() * 100),
                    'PaymentMethod' => $payment_method,
                    'PaymentObject' => $payment_object,
                    'Tax'           => empty($item->getTaxType()) ? 'none' : $item->getTaxType(),
                    'ShopCode'      => $shopcode,
                    'AgentData'     => (object) $agent_data,
                    'SupplierInfo'  => (object) $supplier_info
                ];
            }

            $receipt_sum += (float) sprintf('%2f', round((float) $order_data['total'] + 0.00000000001, 2)) * 100;
        }

        /** @var array<array-key, string> $order_info */
        return [
            'Items'         => $items,
            'Email'         => $order_info['email'],
            'Phone'         => $this->normalizePhone($order_info['phone']),
            'Taxation'      => $processor_params['tax_system'],
            'Payments'      => $this->createPayments([
                'electronic' => (string) $receipt_sum,
            ]),
            'AgentData'     => (object) $agent_data_mp,
            'SupplierInfo'  => (object) $supplier_info_mp
        ];
    }

    /**
     * Creates payment object as part of receipt object.
     *
     * @param array{cash?: int|string, electronic?: int|string, prepayment?: int|string, credit?: int|string, other?: int|string} $values Distribution of funds by types.
     *
     * @return array{Cash: int|string, Electronic: int|string, AdvancePayment: int|string, Credit: int|string, Provision: int|string}
     */
    private function createPayments(array $values): array
    {
        $default_values = [
            'cash'       => 0,
            'electronic' => 0,
            'prepayment' => 0,
            'credit'     => 0,
            'other'      => 0,
        ];
        $values = array_merge($default_values, $values);
        return [
            'Cash'           => $values['cash'],
            'Electronic'     => $values['electronic'],
            'AdvancePayment' => $values['prepayment'],
            'Credit'         => $values['credit'],
            'Provision'      => $values['other']
        ];
    }

    /**
     * Gets shops list
     *
     * @param array<string, int|string|array<string, string>> $order_info  Order information
     * @param bool                                            $is_multiple Support for multiple orders
     *
     * @return array<array-key, object>
     */
    public function getShops(array $order_info, $is_multiple = false)
    {
        $shops = [];
        /** @var array<string, string> $order_info */
        if (YesNo::isTrue($order_info['is_parent_order']) && $is_multiple) {
            $orders = fn_get_suborders_info((int) $order_info['order_id']);
        } else {
            $orders = [$order_info];
        }

        foreach ($orders as $order) {
            $order_id   = (int) $order['order_id'];
            $company_id = (int) $order['company_id'];
            $total      = (float) $order['total'];

            $fee = $this->payouts_manager_service->getManager($company_id)->getOrderFee($order_id);
            if ($fee) {
                $fee = min($fee, $total);
                $total -= $fee;
            }

            if (!$total) {
                continue;
            }

            $company_data = fn_get_company_data($company_id);
            $shopcode     = $company_data['tinkoff_multiparty_shopcode'] ?: null;
            $order_total  = (float) sprintf('%2f', round((float) $order['total'] + 0.00000000001, 2)) * 100;
            $fee          = (float) sprintf('%2f', round($fee + 0.00000000001, 2)) * 100;
            $shop = [
                'ShopCode'          => $shopcode,
                'Amount'            => (string) $order_total,
                'Fee'               => (string) $fee
            ];

            $shops[] = (object) $shop;
        }

        return $shops;
    }

    /**
     * Normalizes the phone number
     *
     * @param string $phone Phone number
     *
     * @return string
     *
     * @psalm-suppress InvalidLiteralArgument
     */
    protected function normalizePhone($phone)
    {
        $phone_normalize = '';

        if (!empty($phone)) {
            $phone = ltrim($phone, '+');

            if ($phone[0] === '8') {
                $phone[0] = '7';
            }
            $phone_normalize = '+' . preg_replace('/\D/', '', $phone);
        }
        return $phone_normalize;
    }

    /**
     * Transfers funds to vendors
     *
     * @param array<string, int|array<string, array<string>>> $order_info Order data
     *
     * @return void
     */
    public function transferFunds($order_info)
    {
        $current_order = $order_info;
        $parent_order = !empty($order_info['parent_order_id'])
            ? fn_get_order_info((int) $order_info['parent_order_id'])
            : [];

        if (
            !empty($parent_order['payment_info']['payment_id'])
            && $parent_order['payment_info']['payment_id'] === $order_info['payment_info']['payment_id']
        ) {
            $current_order = $parent_order;
        }

        /** @var array<string, array<string, string>|string> $current_order */
        $response = $this->confirm($current_order);

        if (empty($response['Success'])) {
            $this->handleError($response);
        } else {
            /** @var array<string, string> $current_order */
            if (YesNo::isTrue($current_order['is_parent_order'])) {
                $orders = fn_get_suborders_info((int) $current_order['order_id']);
            } else {
                fn_set_notification(NotificationSeverity::NOTICE, __('notice'), __('addons.tinkoff_multiparty.funds_were_transferred'));
                $orders = [$current_order];
            }

            foreach ($orders as $order) {
                fn_update_order_payment_info(
                    (int) $order['order_id'],
                    [
                        'addons.tinkoff_multiparty.payment_status' => $response['Status'],
                        'addons.tinkoff_multiparty.funds_were_transferred' => __('yes')
                    ]
                );
            }
        }
    }
}
