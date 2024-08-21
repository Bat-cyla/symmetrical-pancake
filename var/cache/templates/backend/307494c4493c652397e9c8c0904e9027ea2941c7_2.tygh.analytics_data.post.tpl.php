<?php
/* Smarty version 4.1.1, created on 2024-08-20 11:56:31
  from '/app/www/design/backend/templates/addons/vendor_plans/hooks/index/analytics_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66c45a3fd9f276_16848425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307494c4493c652397e9c8c0904e9027ea2941c7' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_plans/hooks/index/analytics_data.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c45a3fd9f276_16848425 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.dashboard.analytics_card.vendor_plan','vendor_plans.dashboard.analytics_card.view_plan','vendor_plans.dashboard.analytics_card.vendor_plan_limits'));
if ($_smarty_tpl->tpl_vars['plan_usage']->value) {
$_smarty_tpl->_assignInScope('data_3_2_vendor_plan', array('id'=>"vendor_plans_analytics_card_vendor_plan",'title'=>$_smarty_tpl->__("vendor_plans.dashboard.analytics_card.vendor_plan"),'title_button'=>array('name'=>$_smarty_tpl->__("vendor_plans.dashboard.analytics_card.view_plan"),'href'=>"companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])."&selected_section=plan"),'number'=>((string)$_smarty_tpl->tpl_vars['plan_usage']->value['products']['percentage'])."%",'bar_chart'=>array('id'=>"vendor_plans_analytics_card_vendor_plan_bar_chart",'title'=>$_smarty_tpl->__("vendor_plans.dashboard.analytics_card.vendor_plan_limits",array("[name]"=>$_smarty_tpl->tpl_vars['plan_data']->value['plan'])),'content'=>array(array('id'=>"vendor_plans_analytics_card_vendor_plan_bar_chart_products",'name'=>$_smarty_tpl->tpl_vars['plan_usage']->value['products']['title'],'href'=>"products.manage",'type'=>"primary",'value'=>$_smarty_tpl->tpl_vars['plan_usage']->value['products']['current'],'total'=>$_smarty_tpl->tpl_vars['plan_usage']->value['products']['limit'],'ratio'=>$_smarty_tpl->tpl_vars['plan_usage']->value['products']['percentage']),array('id'=>"vendor_plans_analytics_card_vendor_plan_bar_chart_revenue",'name'=>$_smarty_tpl->tpl_vars['plan_usage']->value['revenue']['title'],'href'=>"companies.balance",'value'=>$_smarty_tpl->tpl_vars['plan_usage']->value['revenue']['current'],'total'=>$_smarty_tpl->tpl_vars['plan_usage']->value['revenue']['limit'],'ratio'=>$_smarty_tpl->tpl_vars['plan_usage']->value['products']['percentage'])))));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_3_2_vendor_plan']->value['bar_chart']['content'], 'content', false, 'content_key');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content_key']->value => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
if ($_smarty_tpl->tpl_vars['content']->value['id'] === "vendor_plans_analytics_card_vendor_plan_bar_chart_revenue") {
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_3_2_vendor_plan']) ? $_smarty_tpl->tpl_vars['data_3_2_vendor_plan']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['bar_chart']['content'][$_smarty_tpl->tpl_vars['content_key']->value]['is_price'] = true;
$_smarty_tpl->_assignInScope('data_3_2_vendor_plan', $_tmp_array);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['tertiary'][2] = $_smarty_tpl->tpl_vars['data_3_2_vendor_plan']->value;
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
$_smarty_tpl->_assignInScope('analytics_data', $_smarty_tpl->tpl_vars['analytics_data']->value ,false ,2);
}
}
}
