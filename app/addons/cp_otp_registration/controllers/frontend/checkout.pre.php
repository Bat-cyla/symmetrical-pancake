<?php
/*****************************************************************************
*                                                        © 2013 Cart-Power   *
*           __   ______           __        ____                             *
*          / /  / ____/___ ______/ /_      / __ \____ _      _____  _____    *
*      __ / /  / /   / __ `/ ___/ __/_____/ /_/ / __ \ | /| / / _ \/ ___/    *
*     / // /  / /___/ /_/ / /  / /_/_____/ ____/ /_/ / |/ |/ /  __/ /        *
*    /_//_/   \____/\__,_/_/   \__/     /_/    \____/|__/|__/\___/_/         *
*                                                                            *
*                                                                            *
* -------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license *
* and  accept to the terms of the License Agreement can install and use this *
* program.                                                                   *
* -------------------------------------------------------------------------- *
* website: https://store.cart-power.com                                      *
* email:   sales@cart-power.com                                              *
******************************************************************************/

use Tygh\Registry;
use Tygh\Storage;
use Tygh\Session;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if (empty(Tygh::$app['session']['cart'])) {
    fn_clear_cart(Tygh::$app['session']['cart']);
}
$cart = & Tygh::$app['session']['cart'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'place_order'
        && Registry::get('addons.step_by_step_checkout.status') == 'A' 
    ) {
        if (empty($cart['user_data']['email'])) {
            $cart['user_data']['email'] = fn_checkout_generate_fake_email_address($cart['user_data'], TIME);
        }
        return;
    }

    if (
        $mode == 'create_profile'
        || $mode == 'add_profile'
        || $mode == 'customer_info'
        || $mode == 'place_order'
    ) {
        if (empty($_REQUEST['user_data']['email'])) {
            if (!empty($auth['user_id'])) {
                $user_email = db_get_field("SELECT email FROM ?:users WHERE user_id = ?i", $auth['user_id']);
                if (!empty($user_email)) {
                    $_REQUEST['user_data']['email'] = $user_email;
                }
            }
            if (empty($_REQUEST['user_data']['email'])) {
                $_REQUEST['user_data']['email'] = fn_checkout_generate_fake_email_address($cart['user_data'], TIME);
            }
        }
    }

    return;
}

if (empty($cart['user_data']['email']) || fn_checkout_is_email_address_fake($cart['user_data']['email'])) {
    $cart['user_data']['email'] = '';
}

if ($mode == 'cp_phone_verification') {
    if (defined('AJAX_REQUEST')) {
        $phone = !empty($_REQUEST['phone']) ? $_REQUEST['phone'] : '';
        $send_result = fn_cp_otp_send_code(['phone' => $phone], 'register');
        if (empty($send_result)) {
            fn_set_notification('E', __('error'), __('cp_otp_send_fail'));
            return fn_cp_otp_controller_do_redirect('checkout.checkout', true, false);
        }
        Registry::get('view')->display('addons/cp_otp_registration/views/profiles/cp_phone_verification.tpl');
        exit;
    }
}