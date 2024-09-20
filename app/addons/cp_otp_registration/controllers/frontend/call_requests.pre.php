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

defined('BOOTSTRAP') or die('Access denied');

/**
 * @var array $auth
 * @var string $mode
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $return_url = !empty($_REQUEST['return_url']) ? $_REQUEST['return_url'] : '';
    if ($mode === 'request') {
        $call_data = $_REQUEST['call_data'];
        if(!isset($call_data['phone']) && isset($_REQUEST['user_data']['phone'])) {
            $call_data['phone'] = $_REQUEST['user_data']['phone'];
            $product_data = !empty($_REQUEST['product_data']) ? $_REQUEST['product_data'] : [];
            if ($res = fn_do_call_request($call_data, $product_data, Tygh::$app['session']['cart'], Tygh::$app['session']['auth'])) {
                if (!empty($res['error'])) {
                    fn_set_notification('E', __('error'), $res['error']);
                } elseif (!empty($res['notice'])) {
                    fn_set_notification('N', __('notice'), $res['notice']);
                }
                exit;
            }
        }
    }
}
if ($mode === 'request') {
    if(!empty($auth)){
        $user_data=Tygh::$app['session']['cart']['user_data'];
        Tygh::$app['view']->assign('phone',$user_data['phone']);
    }
}
