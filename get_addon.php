<?php

$php_value = phpversion();
if (version_compare($php_value, '5.3.0') == -1) {
    echo 'Currently installed PHP version (' . $php_value . ') is not supported. Minimal required PHP version is  5.3.0.';
    die();
}

define('AREA', 'A');
define('ACCOUNT_TYPE', 'admin');
require(dirname(__FILE__) . '/init.php');

function full_copy($source, $target) {
  if (is_dir($source))  {
    fn_mkdir($target);
    $d = dir($source);
    while (FALSE !== ($entry = $d->read())) {
      if ($entry == '.' || $entry == '..') continue;
      full_copy("$source/$entry", "$target/$entry");
    }
    $d->close();
  }
  else fn_copy($source, $target);
}

$themes = array();
$dir_list = scandir(DIR_ROOT . '/design/themes');
foreach ($dir_list as $v) {
    if (is_dir(DIR_ROOT . '/design/themes/' . $v) && strpos($v, '.') === false) {
        $themes[] = $v;
    }
}

if (empty($_REQUEST['addon'])) {
    fn_print_die('Enter addon name. You can specify addons with comma delimiter.');
}

$scan_dirs = array(
    '/app/addons/',
    '/js/addons/',
    '/design/backend/templates/addons/',
    '/design/backend/css/addons/',
    '/design/backend/mail/templates/addons/',
    '/design/backend/media/images/addons/',
);

$dir_themes = array(
    '/design/themes/[name]/templates/addons/',
    '/design/themes/[name]/css/addons/',
    '/design/themes/[name]/mail/templates/addons/',
    '/design/themes/[name]/media/images/addons/',
    
);
foreach ($dir_themes as $v) {
    foreach ($themes as $name) {
        $dir_for_scan = str_replace('[name]', $name, $v);
        $scan_dirs[] = $dir_for_scan;
    }
}



$addons = explode(',', $_REQUEST['addon']);

foreach ($addons as $addon_name) {
    $addon_name = trim($addon_name);
    if (file_exists(DIR_ROOT . '/app/addons/' . $addon_name . '/addon.xml')) {
        $to_dir = DIR_ROOT . '/get_addons/' . $addon_name;
        fn_mkdir($to_dir);
        foreach ($scan_dirs as $v) {
            $from = DIR_ROOT . $v . $addon_name;
            $to = $to_dir . str_replace('design/themes', 'var/themes_repository', $v  . $addon_name);
            if (file_exists($from)) {
                full_copy($from, $to);
            }
        }
        $dir_list = scandir(DIR_ROOT . '/var/langs');
        foreach ($dir_list as $v) {
            if (is_dir(DIR_ROOT . '/var/langs/' . $v) && strpos($v, '.') === false) {
                $from = DIR_ROOT . '/var/langs/' . $v .  '/addons/' . $addon_name . '.po';
                $to = $to_dir . '/var/langs/' . $v .  '/addons/' . $addon_name . '.po';
                if (file_exists($from)) {
                    fn_mkdir($to_dir . '/var/langs/' . $v .  '/addons/');
                    fn_copy($from, $to);
                }
            }
        }
       
    } else {
        fn_echo("Add-on '" . $addon_name . "' doesn't exist on this site <br/>");
    }
}

fn_print_die('DONE');
