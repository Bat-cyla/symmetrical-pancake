<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:09:01
  from '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/index/analytics_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1b4dbe7987_26203588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd6a78b657893e68b5acb262a5b6a8eb42a3bf73' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/index/analytics_data.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66aa1b4dbe7987_26203588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.dashboard.analytics_card.on_moderation','vendor_data_premoderation.dashboard.analytics_card.disapproved'));
if ((isset($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['require_approval_count'])) || (isset($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['disapproved_count']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['analytics_data']->value, 'analytics_column', false, 'analytics_column_key');
$_smarty_tpl->tpl_vars['analytics_column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['analytics_column_key']->value => $_smarty_tpl->tpl_vars['analytics_column']->value) {
$_smarty_tpl->tpl_vars['analytics_column']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['analytics_column']->value, 'analytics_card', false, 'analytics_card_key');
$_smarty_tpl->tpl_vars['analytics_card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['analytics_card_key']->value => $_smarty_tpl->tpl_vars['analytics_card']->value) {
$_smarty_tpl->tpl_vars['analytics_card']->do_else = false;
if ($_smarty_tpl->tpl_vars['analytics_card']->value['id'] === "analytics_card_products") {
if ((isset($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['require_approval_count']))) {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"), ENT_QUOTES, 'UTF-8');
$_prefixVariable20=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"), ENT_QUOTES, 'UTF-8');
$_prefixVariable21=ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['analytics_column_key']->value][$_smarty_tpl->tpl_vars['analytics_card_key']->value]['resource_list']['content'][] = array('id'=>"vendor_data_premoderation_analytics_card_products_out_of_stock",'name'=>$_smarty_tpl->__("vendor_data_premoderation.dashboard.analytics_card.on_moderation"),'href'=>"products.manage?status=".$_prefixVariable20,'value'=>number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['require_approval_count']),'value_href'=>"products.manage?status=".$_prefixVariable21);
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
if ((isset($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['disapproved_count']))) {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');
$_prefixVariable22=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');
$_prefixVariable23=ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['analytics_column_key']->value][$_smarty_tpl->tpl_vars['analytics_card_key']->value]['resource_list']['content'][] = array('id'=>"vendor_data_premoderation_analytics_card_products_disapproved",'name'=>$_smarty_tpl->__("vendor_data_premoderation.dashboard.analytics_card.disapproved"),'href'=>"products.manage?status=".$_prefixVariable22,'value'=>number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['disapproved_count']),'value_href'=>"products.manage?status=".$_prefixVariable23);
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('analytics_data', $_smarty_tpl->tpl_vars['analytics_data']->value ,false ,2);
}
}
}
