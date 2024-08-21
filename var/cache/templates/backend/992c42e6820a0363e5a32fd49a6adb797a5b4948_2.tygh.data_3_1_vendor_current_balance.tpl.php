<?php
/* Smarty version 4.1.1, created on 2024-08-20 11:56:31
  from '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_1_vendor_current_balance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66c45a3fcb2273_48848084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '992c42e6820a0363e5a32fd49a6adb797a5b4948' => 
    array (
      0 => '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_1_vendor_current_balance.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_66c45a3fcb2273_48848084 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.vendor_current_balance','dashboard.analytics_card.view_accounting'));
if (fn_allowed_for("MULTIVENDOR")) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['current_balance']->value), 0, false);
$_smarty_tpl->assign('vendor_current_balance_value', ob_get_clean());
$_smarty_tpl->_assignInScope('data_3_1_vendor_current_balance', array('id'=>"analytics_card_vendor_current_balance",'title'=>$_smarty_tpl->__("dashboard.analytics_card.vendor_current_balance"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.analytics_card.view_accounting"),'href'=>"companies.balance"),'number'=>$_smarty_tpl->tpl_vars['vendor_current_balance_value']->value));
$_smarty_tpl->_assignInScope('data_3_1_vendor_current_balance', $_smarty_tpl->tpl_vars['data_3_1_vendor_current_balance']->value ,false ,2);
}
}
}
}
