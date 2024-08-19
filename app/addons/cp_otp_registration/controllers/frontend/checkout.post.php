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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'cp_phone_verification') {
        if (fn_cp_otp_validate_code($_REQUEST['cp_otp_code'], 'register')) {
            $cart = Tygh::$app['session']['cart'];
            if (empty($cart['user_data']['email'])){
                $cart['user_data']['email'] = fn_checkout_generate_fake_email_address($cart['user_data'], TIME);
            }
            if(empty($cart['user_data']['phone'])){
                $cart['user_data']['phone']=$_REQUEST['phone'];
            }
            $status = fn_checkout_place_order($cart, $auth, $_REQUEST);

            if($status=PLACE_ORDER_STATUS_OK) {
                return [CONTROLLER_STATUS_REDIRECT, 'checkout.complete?order_id='];
            }
        } else { 
            fn_set_notification('E', __('error'), __('cp_otp_fail_verification'));
            return [CONTROLLER_STATUS_REDIRECT, 'checkout.checkout'];
        }
    }
    return;
}

if ($mode == 'checkout') {
    if (defined('AJAX_REQUEST') && Tygh::$app['session']['cart']['user_data']['user_id']!==0) {
        $ajax_vars = Tygh::$app['ajax']->getAssignedVars();
        if (!empty($ajax_vars['cp_show_login'])) {
            Tygh::$app['session']['cart']['user_data']['user_exists'] = false;
            fn_delete_notification('default_checkout_exists_popup');
        }
    }
}
if (defined('AJAX_REQUEST') && Tygh::$app['session']['cart']['user_data']['user_id']!==0) {
    if (fn_notification_exists('extra', 'error_checkout_user_exists')) {
        fn_delete_notification('error_checkout_user_exists');
        fn_set_notification('E', __('error'), __('cp_otp_phone_mail_exists'));
    }
}