<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2024   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and accept    *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
use Tygh\Enum\Addons\Ab_stickers\StickerStyles;
use Tygh\Enum\FileUploadTypes;
use Tygh\Enum\ImagePairTypes;
use Tygh\Registry;
use Tygh\Languages\Languages;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
define('AB__STICKERS_DEMODATA_DEFAULT_LANG_CODE', 'en');
define('AB__STICKERS_DEMODATA_DEFAULT_CURRENCY_CODE', 'USD');
define('AB__STICKERS_DEMODATA_ADDON_NAME', 'ab__stickers');
define('AB__STICKERS_DEMODATA_DEFAULT_STOREFRONT_ID', Tygh::$app['storefront']->storefront_id);
define('AB__STICKERS_DEMODATA_DEFAULT_COMPANY_ID', fn_get_default_company_id());
$ab__stickers_demodata_json = [];

function fn_ab__stickers_install_demo_stickers($status = 'D', $path_part = 'ab__stickers')
{
if (fn_allowed_for('ULTIMATE')) {
Registry::set('runtime.skip_sharing_selection', 1);
}
$demodata_path = str_replace('/', DIRECTORY_SEPARATOR, Registry::get('config.dir.var') . "ab__data/{$path_part}/");
$tmp_directory = str_replace('/', DIRECTORY_SEPARATOR, Registry::get('config.dir.cache_misc') . 'tmp/ab__stickers/');
if (!is_dir($tmp_directory)) {
fn_mkdir($tmp_directory);
}
global $ab__stickers_demodata_json;
$ab__stickers_demodata_json = json_decode(file_get_contents($demodata_path . 'data.json'), true);
$storefront_id = AB__STICKERS_DEMODATA_DEFAULT_STOREFRONT_ID;
$languages = Languages::getAll();
if (!empty($ab__stickers_demodata_json)) {
foreach ($ab__stickers_demodata_json['products'] ?? [] as $product) {
$product_id = 0;
$product_description = $product['raw_description'] ?? [];
$product_images = $product['images'] ?? [];
$product_features = $product['product_features'] ?? [];
if (isset($product['raw_description'])) {
unset($product['raw_description']);
}
if (isset($product['images'])) {
unset($product['images']);
}
if (isset($product['product_features'])) {
unset($product['product_features']);
}
$product['storefront_ids'] = $storefront_id;
$product['company_id'] = AB__STICKERS_DEMODATA_DEFAULT_COMPANY_ID;
if (isset($product['category_ids'])) {
$categories_ids = explode(',', $product['category_ids']);
$new_categories_ids = [];
foreach ($categories_ids as $json_category_id) {
$category_id = fn_ab__stickers_demo_get_category_by_json_id($json_category_id);
if ($category_id) {
$new_categories_ids[] = $category_id;
}
}
$product['category_ids'] = $new_categories_ids;
}
if (isset($product['price'])) {
$product['price'] = $product['price'][CART_PRIMARY_CURRENCY] ?? $product['price'][AB__STICKERS_DEMODATA_DEFAULT_CURRENCY_CODE] ?? 100;
}
foreach ($product_features as $product_feature_id => $product_feature_variant_id) {
$feature_id = fn_ab__stickers_demo_get_feature_by_json_id($product_feature_id);
if ($feature_id && $variant_id = fn_ab__stickers_demo_get_variant_by_json_id($product_feature_id, $product_feature_variant_id)) {
$product['product_features'][$feature_id] = $variant_id;
}
}
foreach ($languages as $language) {
$product = array_replace_recursive($product, $product_description[$language['lang_code']] ?? $product_description[AB__STICKERS_DEMODATA_DEFAULT_LANG_CODE] ?? []);
if ($product_id) {
fn_update_product($product, $product_id, $language['lang_code']);
} else {
unset($product['product_id']);
$product_id = fn_update_product($product, $product_id, $language['lang_code']);
}
if (!$product_id) {
break;
}
}
$is_first_image = true;
foreach ($product_images as $image_key => $image) {
$real_image_path = $demodata_path . str_replace('/', DIRECTORY_SEPARATOR, $image);
if (is_file($real_image_path)) {
$new_image_path = $tmp_directory . basename($real_image_path);
fn_copy($real_image_path, $new_image_path);
$image_data = [
'name' => basename($new_image_path),
'path' => $new_image_path,
'size' => filesize($new_image_path),
'upload_type' => FileUploadTypes::SERVER,
'is_high_res' => '',
];
$product_images_objects[$image_key] = fn_update_image_pairs([$image_data], [$image_data], [[
'pair_id' => '',
'type' => $is_first_image ? ImagePairTypes::MAIN : ImagePairTypes::ADDITIONAL,
'object_id' => $product_images_objects[$image_key] ?? 0,
'image_alt' => '',
]], $product_id, 'product', []);
fn_rm($new_image_path);
$is_first_image = false;
}
}
if (isset($product_images_objects)) {
unset($product_images_objects);
}
}
foreach ($ab__stickers_demodata_json['stickers'] ?? [] as $sticker) {
$sticker_id = 0;
$sticker_description = $sticker['raw_description'] ?? [];
$sticker_pictogram_data = $sticker['pictogram_data'] ?? [];
$sticker_images = $sticker['images'] ?? [];
if (isset($sticker['raw_description'])) {
unset($sticker['raw_description']);
}
if (isset($sticker['pictogram_data'])) {
unset($sticker['pictogram_data']);
}
if (isset($sticker['images'])) {
unset($sticker['images']);
}
if (empty($sticker['status'])) {
$sticker['status'] = $status;
}
$sticker['storefront_ids'] = $storefront_id;
$sticker['name_for_admin'] = $sticker_description[CART_LANGUAGE]['name_for_admin'] ?? $sticker_description[AB__STICKERS_DEMODATA_DEFAULT_LANG_CODE]['name_for_admin'] ?? '';
foreach ($sticker_description as &$description) {
if (isset($description['name_for_admin'])) {
unset($description['name_for_admin']);
}
if (isset($description['lang_code'])) {
unset($description['lang_code']);
}
}
$skip = false;
if (isset($sticker['conditions']) && isset($sticker['conditions']['conditions'])) {
foreach ($sticker['conditions']['conditions'] as &$condition) {
if ($condition['condition'] === 'feature' && isset($condition['condition_element'])) {
$feature_id = fn_ab__stickers_demo_get_feature_by_json_id($condition['condition_element']);
if ($feature_id) {
$json_feature_id = $condition['condition_element'];
$condition['condition_element'] = $feature_id;
if (isset($condition['value'])) {
$variant_id = fn_ab__stickers_demo_get_variant_by_json_id($json_feature_id, $condition['value']);
if ($variant_id) {
$condition['value'] = $variant_id;
} else {
$skip = true;
}
}
} else {
$skip = true;
}
}
}
}
if ($skip) {
break;
}
foreach ($sticker_description as &$s_description) {
if (isset($s_description['pictogram_data'])) {
foreach ($s_description['pictogram_data'] as &$text) {
if (isset($text['text'])) {
$text['text'] = preg_replace_callback('/\[feature_(\d+)/', function ($match) {
$feature_id = fn_ab__stickers_demo_get_feature_by_json_id($match[1]);
if ($feature_id) {
return '[feature_' . $feature_id;
}
return $match[1];
}, $text['text']);
}
}
}
}
$image_object_id = 0;
foreach ($languages as $language) {
$sticker = array_replace_recursive($sticker, $sticker_description[$language['lang_code']] ?? $sticker_description[AB__STICKERS_DEMODATA_DEFAULT_LANG_CODE] ?? []);
if (isset($sticker['pictogram_data'])) {
$sticker_pictogram_data = array_replace_recursive($sticker_pictogram_data, $sticker['pictogram_data']);
unset($sticker['pictogram_data']);
}
$sticker_id = fn_ab__stickers_update_sticker($sticker_id, ['sticker_data' => $sticker], $language['lang_code'], true);
if (!$sticker_id) {
break;
}
if ($sticker['style'] === StickerStyles::PICTOGRAM && !empty($sticker_pictogram_data)) {
foreach ($sticker_pictogram_data as $text_key => $text) {
fn_ab__stickers_pictograms_update_texts($sticker_id, [$text_key => $text], $language['lang_code']);
}
}
$image = $sticker_images[$language['lang_code']] ?? $sticker_images[AB__STICKERS_DEMODATA_DEFAULT_LANG_CODE] ?? false;
if ($image) {
$image_id = db_get_field('SELECT image_id FROM ?:ab__sticker_images WHERE sticker_id=?i AND lang_code=?s', $sticker_id, $language['lang_code']);
$real_image_path = $demodata_path . str_replace('/', DIRECTORY_SEPARATOR, $image);
if (is_file($real_image_path)) {
$new_image_path = $tmp_directory . basename($real_image_path);
fn_copy($real_image_path, $new_image_path);
$image_object_id = fn_update_image_pairs([[
'name' => basename($new_image_path),
'path' => $new_image_path,
'size' => filesize($new_image_path),
'upload_type' => FileUploadTypes::SERVER,
'is_high_res' => '',
]], [], [[
'pair_id' => '',
'type' => ImagePairTypes::MAIN,
'object_id' => $image_object_id ?? 0,
'image_alt' => '',
]], $image_id, 'ab__stickers', []);
fn_rm($new_image_path);
}
}
}
if ($sticker_id && $sticker['style'] === StickerStyles::PICTOGRAM) {
$pictogram_ids[] = $sticker_id;
}
}
if (isset($pictogram_ids) && !empty($pictogram_ids)) {
fn_ab__stickers_generate_links(implode(",", $pictogram_ids), $storefront_id, false);
fn_ab__stickers_pictograms_generate($pictogram_ids, ['storefront_id' => $storefront_id], 0, false, false);
fn_ab__stickers_pictograms_generate($pictogram_ids, ['storefront_id' => $storefront_id], 0, true, false);
}
} else {
fn_set_notification('E', __('error'), 'There is no stickers data');
return false;
}
return __('ab__stickers.demodata.install.success');
}
function fn_ab__stickers_demo_get_feature_by_json_id($json_id)
{
global $ab__stickers_demodata_json;
if (isset($ab__stickers_demodata_json['features'][$json_id])) {
$feature_data = &$ab__stickers_demodata_json['features'][$json_id];
if (isset($feature_data['feature_id']) && $feature_data['feature_id']) {
return $feature_data['feature_id'];
} elseif ($feature_id = fn_ab__stickers_demo_update_feature($feature_data)) {
return $feature_id;
}
}
return false;
}
function fn_ab__stickers_demo_update_feature(&$feature_data)
{
$feature_id = 0;
$feature_description = $feature_data['raw_description'] ?? [];
$feature_variants = $feature_data['variants'];
unset($feature_data['variants']);
if (isset($feature_data['raw_description'])) {
unset($feature_data['raw_description']);
}
$feature_data['storefront_id'] = AB__STICKERS_DEMODATA_DEFAULT_STOREFRONT_ID;
$feature_data['company_id'] = AB__STICKERS_DEMODATA_DEFAULT_COMPANY_ID;
if (isset($feature_data['categories_path'])) {
$categories_ids = explode(',', $feature_data['categories_path']);
$new_categories_ids = [];
foreach ($categories_ids as $json_category_id) {
$category_id = fn_ab__stickers_demo_get_category_by_json_id($json_category_id);
if ($category_id) {
$new_categories_ids[] = $category_id;
}
}
$feature_data['categories_path'] = implode(',', $new_categories_ids);
}
$languages = Languages::getAll();
foreach ($languages as $language) {
$feature_data = array_replace_recursive($feature_data, $feature_description[$language['lang_code']] ?? $feature_description[AB__STICKERS_DEMODATA_DEFAULT_LANG_CODE]);
if ($feature_id) {
fn_update_product_feature($feature_data, $feature_id, $language['lang_code']);
} else {
unset($feature_data['feature_id']);
$feature_id = fn_update_product_feature($feature_data, $feature_id, $language['lang_code']);
if (fn_allowed_for('ULTIMATE')) {
fn_ult_update_share_object($feature_id, 'product_features', AB__STICKERS_DEMODATA_DEFAULT_COMPANY_ID);
}
}
if ($feature_id === false) {
break;
}
foreach ($feature_variants as &$variant) {
fn_ab__stickers_demo_update_feature_variant($feature_id, $feature_data['feature_type'], $variant, $language['lang_code']);
}
}
if ($feature_id !== false) {
$feature_data['feature_id'] = $feature_id;
}
$feature_data['raw_description'] = $feature_description;
$feature_data['variants'] = $feature_variants;
return $feature_id;
}
function fn_ab__stickers_demo_get_category_by_json_id($json_id)
{
global $ab__stickers_demodata_json;
if (isset($ab__stickers_demodata_json['categories'][$json_id])) {
$category_data = &$ab__stickers_demodata_json['categories'][$json_id];
if (isset($category_data['category_id']) && $category_data['category_id']) {
return $category_data['category_id'];
} elseif ($category_id = fn_ab__stickers_demo_update_category($category_data)) {
return $category_id;
}
}
return false;
}
function fn_ab__stickers_demo_update_category(&$category_data)
{
$category_id = 0;
$category_description = $category_data['raw_description'] ?? [];
if (isset($category_data['raw_description'])) {
unset($category_data['raw_description']);
}
$category_data['storefront_id'] = AB__STICKERS_DEMODATA_DEFAULT_STOREFRONT_ID;
$category_data['company_id'] = AB__STICKERS_DEMODATA_DEFAULT_COMPANY_ID;
$languages = Languages::getAll();
foreach ($languages as $language) {
$category_data = array_replace_recursive($category_data, $category_description[$language['lang_code']] ?? $category_description[AB__STICKERS_DEMODATA_DEFAULT_LANG_CODE]);
if ($category_id) {
fn_update_category($category_data, $category_id, $language['lang_code']);
} else {
unset($category_data['category_id']);
$category_id = fn_update_category($category_data, $category_id, $language['lang_code']);
}
if ($category_id === false) {
break;
}
}
if ($category_id !== false) {
$category_data['category_id'] = $category_id;
}
$category_data['raw_description'] = $category_description;
return $category_id;
}
function fn_ab__stickers_demo_get_variant_by_json_id($json_feature_id, $json_variant_id)
{
global $ab__stickers_demodata_json;
return $ab__stickers_demodata_json['features'][$json_feature_id]['variants'][$json_variant_id]['variant_id'] ?? false;
}
function fn_ab__stickers_demo_update_feature_variant($feature_id, $feature_type, &$variant_data, $lang_code)
{
$variant_id = fn_update_product_feature_variant($feature_id, $feature_type, $variant_data, $lang_code);
if ($variant_id !== false) {
$variant_data['variant_id'] = $variant_id;
}
return $variant_id;
}
