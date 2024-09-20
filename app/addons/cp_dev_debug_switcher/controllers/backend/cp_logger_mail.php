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

$params = $_REQUEST;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $suffix = '';

    if ($mode == 'm_delete' && !empty($params['mail_delay_ids'])) {
        fn_cp_dev_delete_mail_from_logs($params['mail_delay_ids']);
    }

    if ($mode == 'delete') {
        fn_cp_dev_delete_mail_from_logs([$params['mail_delay_id']]);
        
        return array(CONTROLLER_STATUS_REDIRECT);
    }


    return array(CONTROLLER_STATUS_OK, 'cp_logger_mail.' . $suffix);
}

if ($mode == 'manage') {
    list($mail_logs, $search) = fn_cp_dev_debuger_get_mail_logs($params, Registry::get('settings.Appearance.admin_elements_per_page'), true);

    Tygh::$app['view']->assign([
        'mail_logs' => $mail_logs,
        'search' => $search
    ]);

} elseif ($mode == 'preview' && !empty($params['mail_delay_id'])) {

    $email_html = fn_cp_debug_switch_get_email_preview($params['mail_delay_id']);
    $view = Tygh::$app['view'];

    $view->assign('email_html', $email_html);
    $view->display('addons/cp_dev_debug_switcher/views/cp_logger_mail/preview.tpl');

    exit();
}