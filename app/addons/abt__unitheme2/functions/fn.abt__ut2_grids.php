<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2023   *
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
use Tygh\BlockManager\Block;
use Tygh\Enum\Addons\Abt_unitheme2\BlockInTabsTypes;
use Tygh\Enum\SiteArea;
use \Tygh\Registry;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}

function fn_abt__unitheme2_render_blocks(&$grid, &$block, $that, &$content)
{
$device = Registry::get('settings.abt__device');
if (AREA === SiteArea::STOREFRONT) {
if (empty($grid['availability'][$device == 'mobile' ? 'phone' : $device])) {
$content = '';
$block['status'] = 'D';
return;
}
$block['abt__ut2_use_lazy_load'] = $grid['abt__ut2_use_lazy_load'] ?? 'N';
if (
in_array($grid['abt__ut2_show_blocks_in_tabs'], [BlockInTabsTypes::TABS_WITHOUT_LAZY_LOAD, BlockInTabsTypes::TABS_WITH_LAZY_LOAD])
&& $block['status'] == 'A'
&& !empty($block['availability'][$device == 'mobile' ? 'phone' : $device])
) {
$block['tab_id'] = 'abt__ut2_grid_tab_' . $grid['grid_id'] . '_' . $block['block_id'];
$block['abt__ut2_show_blocks_in_tabs'] = $grid['abt__ut2_show_blocks_in_tabs'];
$tab_data = ['title' => $block['name']];
if ($grid['abt__ut2_show_blocks_in_tabs'] === BlockInTabsTypes::TABS_WITH_LAZY_LOAD && $block['abt__ut2_use_lazy_load'] !== 'Y') {
$tab_data['ajax'] = true;
$tab_data['block'] = $grid['grid_id'] . '_' . $block['block_id'];
$tab_data['abt__ut2_grid_tabs'] = true;
$snapping = '';
if (!empty($_REQUEST['dispatch'])) {
if ($_REQUEST['dispatch'] == 'products.view' && intval($_REQUEST['product_id'])) {
$snapping = '_' . $block['snapping_id'] . '_products_' . $_REQUEST['product_id'];
} elseif ($_REQUEST['dispatch'] == 'categories.view' && intval($_REQUEST['category_id'])) {
$snapping = '_' . $block['snapping_id'] . '_categories_' . $_REQUEST['category_id'];
}
}
$block['tab_id'] .= $snapping;
$tab_data['block'] .= $snapping;
$block['first'] = empty($content);
} else {
$tab_data['js'] = true;
}
Registry::set("navigation.{$grid['grid_id']}." . $block['tab_id'], $tab_data);
}
}
}

function fn_abt__unitheme2_render_block_content_after($block_schema, $block, &$block_content)
{
if (AREA === 'C' && !empty($block['tab_id'])) {
if (defined('AJAX_REQUEST')) {
$block['abt__ut2_show_blocks_in_tabs'] = BlockInTabsTypes::TABS_WITHOUT_LAZY_LOAD;
}
if (empty(trim(strip_tags($block_content)))) {
$block_content = ABT__UT2_EMPTY_BLOCK_CONTENT;
} elseif ($block['abt__ut2_show_blocks_in_tabs'] !== BlockInTabsTypes::TABS_WITH_LAZY_LOAD || !empty($block['first'])) {
$block_content = '<div id="content_' . $block['tab_id'] . '">' . $block_content . '</div>';
} else {
$block_content = '<div id="content_' . $block['tab_id'] . '"><span></span></div>';
}
}
}

function fn_abt__unitheme2_render_block_post($block, $block_schema, $block_content, $load_block_from_cache, $display_this_block, $params)
{
if (AREA === 'C' && Registry::get('runtime.controller') !== 'abt__ut2_grid_tabs' && !empty($block['tab_id'])) {
if ($block_content === ABT__UT2_EMPTY_BLOCK_CONTENT) {
Registry::del('navigation.' . $block['grid_id'] . '.' . $block['tab_id']);
}
}
}

function fn_abt__unitheme2_render_block_pre($block, $block_schema, $params, &$block_content)
{
if (Registry::ifGet('runtime.layout.theme_name', '') == 'abt__unitheme2') {
$device = fn_abt__ut2_get_device_type();
if (empty($block['availability'][$device == 'mobile' ? 'phone' : $device])) {
$block_content = '';
}
if (isset($block['abt__ut2_use_lazy_load']) && $block['abt__ut2_use_lazy_load'] === 'Y') {
$object_key = fn_encrypt_text(sprintf(
'%s:%s:%s:%s',
$block['block_id'],
$block['snapping_id'],
$block['object_id'],
$block['object_type'] ?: ''
));
$block_content = '<div class="cm-ut2-block-loader"><span class="cm-block-loader--' . $object_key . '">&nbsp;</span></div>';
if (AREA === SiteArea::STOREFRONT && !empty($block['tab_id'])) {
$block_content = '<div id="content_' . $block['tab_id'] . '">' . $block_content . '</div>';
}
}
}
}
