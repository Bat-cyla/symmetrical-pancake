<?php
/* Smarty version 4.1.1, created on 2024-08-05 08:22:33
  from '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_data/get_analytics_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b06199050875_21029659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ef10e0d3ee222b2a54e4e6aa74eb12cf4f696b8' => 
    array (
      0 => '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_data/get_analytics_data.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/analytics_section/analytics_data/data_1_1_sales.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_data/data_1_2_products.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_data/data_2_1_orders.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_data/data_2_3_recent_orders.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_data/data_3_1_vendor_current_balance.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_data/data_3_3_vendors_with_sales.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_data/data_3_4_stores.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_data/data_3_5_registered_customers.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_data/data_3_6_activity.tpl' => 1,
  ),
),false)) {
function content_66b06199050875_21029659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.unset_key.php','function'=>'smarty_modifier_unset_key',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:analytics_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:analytics_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_data/data_1_1_sales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphs'=>$_smarty_tpl->tpl_vars['graphs']->value,'time_from'=>$_smarty_tpl->tpl_vars['time_from']->value,'time_to'=>$_smarty_tpl->tpl_vars['time_to']->value), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_data/data_1_2_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('general_stats'=>$_smarty_tpl->tpl_vars['general_stats']->value), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_data/data_2_1_orders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphs'=>$_smarty_tpl->tpl_vars['graphs']->value,'time_from'=>$_smarty_tpl->tpl_vars['time_from']->value,'time_to'=>$_smarty_tpl->tpl_vars['time_to']->value), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_data/data_2_3_recent_orders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('orders'=>$_smarty_tpl->tpl_vars['orders']->value,'order_statuses'=>$_smarty_tpl->tpl_vars['order_statuses']->value), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_data/data_3_1_vendor_current_balance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('current_balance'=>$_smarty_tpl->tpl_vars['current_balance']->value), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_data/data_3_3_vendors_with_sales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dashboard_vendors_activity'=>$_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value,'time_from'=>$_smarty_tpl->tpl_vars['time_from']->value,'time_to'=>$_smarty_tpl->tpl_vars['time_to']->value), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_data/data_3_4_stores.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('general_stats'=>$_smarty_tpl->tpl_vars['general_stats']->value), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_data/data_3_5_registered_customers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('general_stats'=>$_smarty_tpl->tpl_vars['general_stats']->value), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_data/data_3_6_activity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logs'=>$_smarty_tpl->tpl_vars['logs']->value), 0, false);
if ($_smarty_tpl->tpl_vars['data_1_1_sales']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['primary'][] = $_smarty_tpl->tpl_vars['data_1_1_sales']->value;
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['data_1_2_products']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['primary'][] = $_smarty_tpl->tpl_vars['data_1_2_products']->value;
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['data_2_1_orders']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['secondary'][] = $_smarty_tpl->tpl_vars['data_2_1_orders']->value;
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['data_2_3_recent_orders']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['secondary'][] = $_smarty_tpl->tpl_vars['data_2_3_recent_orders']->value;
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['data_3_1_vendor_current_balance']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['tertiary'][] = $_smarty_tpl->tpl_vars['data_3_1_vendor_current_balance']->value;
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['data_3_3_vendors_with_sales']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['tertiary'][] = $_smarty_tpl->tpl_vars['data_3_3_vendors_with_sales']->value;
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['tertiary'][] = array();
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
if ($_smarty_tpl->tpl_vars['data_3_4_stores']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['tertiary'][] = $_smarty_tpl->tpl_vars['data_3_4_stores']->value;
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['data_3_5_registered_customers']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['tertiary'][] = $_smarty_tpl->tpl_vars['data_3_5_registered_customers']->value;
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['data_3_6_activity']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['tertiary'][] = $_smarty_tpl->tpl_vars['data_3_6_activity']->value;
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:analytics_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (smarty_modifier_count($_smarty_tpl->tpl_vars['analytics_data']->value['tertiary']) === 1 && empty($_smarty_tpl->tpl_vars['analytics_data']->value['tertiary'][0])) {
$_smarty_tpl->_assignInScope('analytics_data', smarty_modifier_unset_key($_smarty_tpl->tpl_vars['analytics_data']->value,"tertiary"));
}
$_smarty_tpl->_assignInScope('analytics_data', $_smarty_tpl->tpl_vars['analytics_data']->value ,false ,2);
}
}
