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

use Tygh\Enum\YesNo;
use Tygh\Registry;
    
if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
    'get_addons_post'
);

require_once Registry::get('config.dir.addons') . 'cp_dev_debug_switcher/func.php';

if (Registry::get('addons.cp_mails_delay.status') != 'A') {
    require_once Registry::get('config.dir.addons') . 'cp_dev_debug_switcher/Tygh/Mailer/Mailer.php';
}

$settings = Registry::get('addons.cp_dev_debug_switcher');
if (fn_cp_dev_debuger_check_ip()) {
    // Turning on debug mode
    if ($settings['enable_debug_mode'] === YesNo::YES && !defined('DEBUG_MODE')) {
        define('DEBUG_MODE', true);
    }

    // Turning on debug mode
    if ($settings['enable_development_mode'] === YesNo::YES && !defined('DEVELOPMENT')) {
        define('DEVELOPMENT', true);
        ini_set('display_errors', true);
        ini_set('display_startup_errors', true);
    } elseif ($settings['enable_development_mode'] === YesNo::YES && defined('DEVELOPMENT')) {
        ini_set('display_errors', true);
        ini_set('display_startup_errors', true);
    } elseif ($settings['enable_development_mode'] === YesNo::NO && (defined('DEVELOPMENT') && DEVELOPMENT) ||
          $settings['enable_development_mode'] === YesNo::NO && (defined('DEVELOPMENT') && !DEVELOPMENT)) {
        ini_set('display_errors', false);
        ini_set('display_startup_errors', false);
        error_reporting(0);
    }
}

// Turning on error logging
if ($settings['enable_error_logging'] === YesNo::YES) {
    $path = fn_cp_dev_debug_switcher_get_log_file_path();
    ini_set('log_errors', true);
    ini_set('error_log', $path);
}