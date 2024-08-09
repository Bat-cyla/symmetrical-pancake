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

define('CP_OTP_MIN_PHONE_NUM', 4); // minimum count of numbers in phone
define('CP_OTP_DEMO_MODE',true);


$http_host = Registry::get('config.http_host');
$https_host = Registry::get('config.https_host');

if ((!empty($http_host) && in_array($http_host, ['demo.cart-power.com','dev-demo.cart-power.com'])) 
    || (!empty($https_host) && in_array($https_host, ['demo.cart-power.com','dev-demo.cart-power.com']))) {
    define('CP_OTP_DEMO_MODE', true);
}