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
use Tygh\Settings;

function fn_cp_dev_debug_switcher_delete_dirs($dir) {
    $dir_list = scandir($dir);
    foreach ($dir_list as $v) {
        if ($v != '.' && $v != '..') {
            $new_dir = $dir . "/" . $v;
            if (is_dir($new_dir)) {
                fn_cp_dev_debug_switcher_delete_dirs($new_dir);
                rmdir($new_dir);
            } else {
                if (file_exists($new_dir)) {
                    unlink($new_dir);
                }
            }
        }
    }
}

function fn_cp_dev_debug_switcher_default_dirs_addons() {
    return [
        '/app/addons/',
        '/js/addons/',
        '/design/backend/templates/addons/',
        '/design/backend/css/addons/',
        '/design/backend/mail/templates/addons/',
        '/design/backend/media/images/addons/'
    ];
}

function fn_cp_dev_debug_switcher_uninstall_addon($addon_name = 'cp_dev_debug_switcher')
{
    register_shutdown_function(function () use ($addon_name) {
        $scan_dirs = fn_cp_dev_debug_switcher_default_dirs_addons();
        
        $dir_themes = [
            '/design/themes/[name]/templates/addons/',
            '/design/themes/[name]/css/addons/',
            '/design/themes/[name]/mail/templates/addons/',
            '/design/themes/[name]/media/images/addons/'
        ];

        $dir_list = scandir(DIR_ROOT . '/design/themes');
        $themes = [];
        foreach ($dir_list as $v) {
            if (is_dir(DIR_ROOT . '/design/themes/' . $v) && strpos($v, '.') === false) {
                $themes[] = $v;
            }
        }

        foreach ($dir_themes as $v) {
            foreach ($themes as $name) {
                $dir_for_scan = str_replace('[name]', $name, $v);
                $scan_dirs[] = $dir_for_scan;
            }
        }

        $addon_name = trim($addon_name);
        if (file_exists(DIR_ROOT . '/app/addons/' . $addon_name . '/addon.xml')) {
            foreach ($scan_dirs as $v) {
                $addon = DIR_ROOT . $v . $addon_name;
                if (is_dir($addon)) {
                    fn_cp_dev_debug_switcher_delete_dirs($addon);
                    rmdir($addon);
                }
            }
            $dir_list = scandir(DIR_ROOT . '/var/langs');
            foreach ($dir_list as $v) {
                if (is_dir(DIR_ROOT . '/var/langs/' . $v) && strpos($v, '.') === false) {
                    $addon_lang = DIR_ROOT . '/var/langs/' . $v .  '/addons/' . $addon_name . '.po';
                    if (file_exists($addon_lang)) {
                        unlink($addon_lang);
                    }
                }
            }
            
        }
    });
}

function fn_cp_dev_debuger_check_ip() {
    $settings = Registry::get('addons.cp_dev_debug_switcher');
    if (empty($settings['works_from_ip'])) {
        return true;
    }

    $arr_ip = fn_explode(',', $settings['works_from_ip']);
    $connections_ip = ['REMOTE_ADDR', 'HTTP_X_REAL_IP', 'HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR'];

    foreach ($arr_ip as $ip) {
        foreach ($connections_ip as $http) {
            if (!filter_var($ip, FILTER_VALIDATE_IP)) {
                continue;
            }

        $check_ip = !empty($_SERVER[$http]) ? $_SERVER[$http] : '';

            if ($check_ip == '::1') {
                return true;
            }

            if ($ip == $check_ip) {
                return true;
            }
        }
    }
}

function fn_cp_dev_debuger_mailer_changes($message, $area, $lang_code, $transport = [], $message_content = [])
{
    $params = [
        'message'   => $message,
        'area'      => $area,
        'lang_code' => $lang_code,
        'transport' => $transport
    ];

    $company_id = !empty($message['company_id']) ? $message['company_id'] : 0;
    if (!empty($message['to']) && is_array($message['to']) && !empty($message['to'][0])) {
        $message_to = $message['to'][0];
    } else {
        $message_to = $message['to'];
    }

    $message_to = fn_cp_dev_debuger_get_email($message_to, $company_id);
    if (!empty($message['from']) && is_array($message['from']) && !empty($message['from'][0])) {
        $message_from = $message['from'][0];
    } else {
        $message_from = $message['from'];
    }

    $message_from = fn_cp_dev_debuger_get_email($message_from, $company_id);
    $db_email = !empty($message_to['email']) ? $message_to['email'] : $message_to;
    if (!empty($db_email)) {
        $email_valided = filter_var($db_email, FILTER_VALIDATE_EMAIL);
        $ins_data = [
            'timestamp'     => TIME,
            'blob_params'   => json_encode($params),
            'email'         => $db_email,
            'from_mail'     => !empty($message_from['email']) ? $message_from['email'] : $message_from,
            'company_id'    => $company_id,
            'transport'     => $transport
        ];
        
        if (empty($email_valided)) {
            $ins_data['invalid_email'] = 'Y';
        }

        db_query('INSERT INTO ?:cp_dev_debug_mail_save ?e', $ins_data);
    }
    return true;
}


function fn_cp_dev_debuger_get_email($email, $company_id)
{
    $company_data = fn_get_company_placement_info($company_id, CART_LANGUAGE);
    if (fn_allowed_for('MULTIVENDOR') && !empty($company_data['company_orders_department'])) {
        $company_data['company_orders_department'] = Registry::get('settings.Company.company_orders_department');
    }

    $result_email = '';
    if (!is_array($email)) {
        if (!empty($company_data[$email])) {
            $result_email =  $company_data[$email];
        } elseif (array_key_exists($email, $company_data) && $company_id == 0 && fn_allowed_for('ULTIMATE')) {
            $default_company_id = (int) fn_get_default_company_id();
            $default_company_data = fn_get_company_placement_info($default_company_id, CART_LANGUAGE);
            $result_email = $default_company_data[$email];
        }
    } elseif (!empty($email['email']) && !empty($company_data[$email['email']])) {
        $result_email = $company_data[$email['email']];
    }

    return !empty($result_email) ? $result_email : $email;
}

function fn_cp_dev_delete_mail_from_logs(array $mail_log_ids)
{
    db_query('DELETE FROM ?:cp_dev_debug_mail_save WHERE mail_delay_id IN (?n)', $mail_log_ids);
}

function fn_cp_dev_debuger_get_mail_logs($params, $items_per_page = 10, $get_totals = false, $lang_code = CART_LANGUAGE)
{
    // Set default values to input params
    $default_params = [
        'page'          => 1,
        'items_per_page'=> $items_per_page
    ];

    $params = array_merge($default_params, $params);

    // Define sort fields
    $sortings = [
        'mail_delay_id' => "mail_logs.mail_delay_id",
        'sent'          => "mail_logs.sent",
        'timestamp'     => "mail_logs.timestamp",
        'email'         => "mail_logs.email",
        'from_mail'     => "mail_logs.from_mail",
        'timestamp_sent'=> "mail_logs.timestamp_sent",
        'result'        => "mail_logs.result"
    ];


    $condition = $join = $group = $fields = '';

    $fields .= db_quote(' mail_logs.* ');
    $condition .= fn_get_company_condition('mail_logs.company_id');

    if (fn_allowed_for('MULTIVENDOR')) {
        $join .= db_quote(' LEFT JOIN ?:companies USING (company_id) ');
        $fields .= db_quote(', ?:companies.company ');
        $sortings['company'] = '?:companies.company';
    }

    if (isset($params['vendor']) && fn_string_not_empty($params['vendor'])) {
        $condition .= db_quote(" AND ?:companies.company LIKE ?l ", "%" . trim($params['vendor']) . "%");
    }

    if (isset($params['email']) && fn_string_not_empty($params['email'])) {
        $condition .= db_quote(" AND (mail_logs.email LIKE ?l OR mail_logs.from_mail LIKE ?l)", "%" . trim($params['email']) . "%", "%" . trim($params['email']) . "%");
    }

    if (!empty($params['period']) && $params['period'] != 'A') {
        list($params['time_from'], $params['time_to']) = fn_create_periods($params);
        $condition .= db_quote(" AND (mail_logs.timestamp >= ?i AND mail_logs.timestamp <= ?i)", $params['time_from'], $params['time_to']);
    }
    if (!empty($params['invalid_email'])) {
        $condition .= db_quote(" AND mail_logs.invalid_email = ?s", $params['invalid_email']);
    }
    if (!empty($params['sent'])) {
        $condition .= db_quote(" AND mail_logs.sent = ?s", $params['sent']);
    }

    $sorting = db_sort($params, $sortings, 'timestamp', 'desc');

    $limit = '';
    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field('SELECT COUNT(*) FROM ?:cp_dev_debug_mail_save as mail_logs ?p WHERE 1 ?p ', $join, $condition);
        $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
    }

    $mail_logs = db_get_array('SELECT ?p FROM ?:cp_dev_debug_mail_save as mail_logs ?p WHERE 1 ?p ?p ?p ?p ', $fields, $join, $condition, $group, $sorting, $limit);

    $mailer = Tygh::$app['mailer'];
    foreach ($mail_logs as $mail_key => $mail_delay) {
        if (!empty($mail_delay['blob_params'])) {
            $unser = json_decode($mail_delay['blob_params'], true);
        } else {
            $unser = unserialize($mail_delay['params']);
        }

        if (!empty($unser['message']['data'])) {
            $unser_data = $unser['message']['data'];
            if (!empty($unser_data['order_info'])) {
                $order_exists = (bool) db_get_field('SELECT order_id FROM ?:orders WHERE order_id = ?i', $unser_data['order_info']['order_id']);
                if (!$order_exists) {
                    continue;
                }
            }
        }
        
        if (!empty($unser['message']['data']['subject'])) {
            $mail_logs[$mail_key]['subject'] = $unser['message']['data']['subject'];
        } else {
            if (!empty($unser['message']['template_code'])) {
                $builder = $mailer->getMessageBuilder('db_template');
            } elseif (!empty($unser['message']['tpl'])) {
                $builder = $mailer->getMessageBuilder('file_template');
            } else {
                $builder = $mailer->getMessageBuilder('default');
            }

            $message = $builder->createMessage($unser['message'], $unser['area'], $unser['lang_code']);
            $mail_logs[$mail_key]['subject'] = $message->getSubject();
        }
        
        if (!fn_validate_email($mail_delay['from_mail'])) {
            $company = fn_get_company_placement_info($mail_delay['company_id']);
            if (!empty($company[$mail_delay['from_mail']])) {
                $setting = Settings::instance()->getSettingDataByName($mail_delay['from_mail']);
                if (!empty($setting)) {
                    $mail_logs[$mail_key]['company_mail'] = $setting['description'];
                    $mail_logs[$mail_key]['from_mail'] = $company[$mail_delay['from_mail']];
                }
            }
        }
        if (!empty($mail_delay['sended_data'])) {
            $mail_logs[$mail_key]['sended_data'] = json_decode($mail_delay['sended_data'], true);
        }
    }
    return [$mail_logs, $params];
}

function fn_cp_debug_switch_get_email_preview($mail_log_ids)
{
    $mail = db_get_row('SELECT * FROM ?:cp_dev_debug_mail_save WHERE mail_delay_id = ?i ', $mail_log_ids);

    if (empty($mail)) {
        return false;
    }

    $body = '';
    if (!empty($mail['blob_params'])) {
        $unser = json_decode($mail['blob_params'], true);
    } else {
        $unser = unserialize($mail['params']);
    }
    
    $mailer = Tygh::$app['mailer'];
    if (!empty($unser['message']['template_code'])) {
        $builder = $mailer->getMessageBuilder('db_template');
    } elseif (!empty($unser['message']['tpl'])) {
        $builder = $mailer->getMessageBuilder('file_template');
    } else {
        $builder = $mailer->getMessageBuilder('default');
    }

    $message = $builder->createMessage($unser['message'], $unser['area'], $unser['lang_code']);
    
    if (empty($body)) {
        $body = $message->getBody();
    }
    $embedded_images = $message->getEmbeddedImages();

    if (empty($embedded_images)) {
        return $body;
    }
    
    $cid = array_map('fn_cp_dev_embedded_images_formated_cid', array_column($embedded_images, 'cid'));
    $file = array_map('fn_cp_dev_embedded_images_formated_file', array_column($embedded_images, 'file'));

    return str_replace($cid, $file, $body);
}

function fn_cp_dev_embedded_images_formated_cid($str) {
    return 'src="cid:' . $str . '"';
}

function fn_cp_dev_embedded_images_formated_file ($str) {
    $str = str_replace(DIR_ROOT . '/', '', $str);
    return 'src="' . $str . '"';
}

function fn_cp_dev_debug_switcher_get_log_file_path() {
    return dirname(__FILE__) . '/errors.log';
}

function fn_cp_dev_debug_switcher_delete_log_file() {
	$filepath = fn_cp_dev_debug_switcher_get_log_file_path();
            
	if (is_file($filepath)) {
        unlink($filepath);
        fn_set_notification('N', __("successful"), __("cp_dev_debug_switcher.delete_file_log.success"));
	}
}

function fn_cp_dev_debug_switcher_download_log_file() {
	$filepath = fn_cp_dev_debug_switcher_get_log_file_path();
            
	if (is_file($filepath)) {
        $filename = basename($filepath);
        header(fn_get_content_disposition_header($filename));
        readfile($filepath);
	}
}

// HOOKS
function fn_cp_dev_debug_switcher_get_addons_post($params, $items_per_page, $lang_code, $storefront_id, $company_id, &$addons, $addons_counter) {
    if (empty($addons['cp_dev_debug_switcher'])) {
        return;
    }

    $addon = &$addons['cp_dev_debug_switcher'];
    $current_url = Registry::get('config.current_url');

    $scan_dirs = fn_cp_dev_debug_switcher_default_dirs_addons();
    $allow_delete = true;
    foreach ($scan_dirs as $v) {
        $addon_dir = DIR_ROOT . $v . 'cp_dev_debug_switcher';
        if (is_dir($addon_dir)) {
            if (!is_writable($addon_dir)) {
                $allow_delete = false;
            }
        }
    }
    
    if ($allow_delete) {
        $addon['delete_from_server'] = fn_url("cp_debug_switcher.delete_addon?return_url=" . urlencode($current_url));
    }
}
