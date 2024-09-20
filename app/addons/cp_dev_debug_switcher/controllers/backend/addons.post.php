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
use Tygh\Settings;

defined('BOOTSTRAP') or die('Access denied');

$settings = Settings::instance();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($mode === 'update' && !empty($_REQUEST['addon']) && $_REQUEST['addon'] === 'cp_dev_debug_switcher') {

        $settings->updateValue(
            'enable_debug_mode',
            YesNo::toId($_REQUEST['enable_debug_mode']),
            'cp_dev_debug_switcher'
        );
        $settings->updateValue(
            'enable_development_mode',
            YesNo::toId($_REQUEST['enable_development_mode']),
            'cp_dev_debug_switcher'
        );
        $settings->updateValue(
            'enable_error_logging',
            YesNo::toId($_REQUEST['enable_error_logging']),
            'cp_dev_debug_switcher'
        );
        $settings->updateValue(
            'save_mail_message',
            YesNo::toId($_REQUEST['save_mail_message']),
            'cp_dev_debug_switcher'
        );
        $settings->updateValue(
            'works_from_ip',
            trim($_REQUEST['works_from_ip']),
            'cp_dev_debug_switcher'
        );
    }

    return [CONTROLLER_STATUS_OK];
}

if ($mode === 'update') {
    if (!empty($_REQUEST['addon']) && $_REQUEST['addon'] === 'cp_dev_debug_switcher') {

	    $enable_debug_mode = $settings->getValue(
			'enable_debug_mode',
			'cp_dev_debug_switcher'
	    );
	    $enable_development_mode = $settings->getValue(
			'enable_development_mode',
			'cp_dev_debug_switcher'
	    );
	    $enable_error_logging = $settings->getValue(
			'enable_error_logging',
			'cp_dev_debug_switcher'
	    );
	    $save_mail_message = $settings->getValue(
			'save_mail_message',
			'cp_dev_debug_switcher'
	    );
	    $works_from_ip = $settings->getValue(
			'works_from_ip',
			'cp_dev_debug_switcher'
	    );

	    $view = Tygh::$app['view'];

	    if (defined('DEBUG_MODE') && DEBUG_MODE) {
			$view->assign('debug_already_enabled', DEBUG_MODE);
	    }
	    if (defined('DEBUG_MODE') && !DEBUG_MODE) {
			$view->assign('debug_already_enabled_but_false', !DEBUG_MODE);
	    }
	    if (defined('DEVELOPMENT') && DEVELOPMENT) {
			$view->assign('development_already_enabled', DEVELOPMENT);
	    }
	    if (defined('DEVELOPMENT') && !DEVELOPMENT) {
			$view->assign('development_already_enabled_but_false', !DEVELOPMENT);
	    }
	    if (ini_set('display_errors', true)) {
			$view->assign('display_errors_enabled', true);
	    }
	    if (ini_set('display_startup_errors', true)) {
			$view->assign('display_startup_errors_enabled', true);
	    }

	    $view->assign(array(
			'enable_debug_mode' => $enable_debug_mode,
			'enable_development_mode' => $enable_development_mode,
			'enable_error_logging' => $enable_error_logging,
			'save_mail_message' => $save_mail_message,
			'works_from_ip' => $works_from_ip,
			'fn_cp_dev_debug_switcher_get_log_file_path' => fn_cp_dev_debug_switcher_get_log_file_path()
	    ));
    }
}
