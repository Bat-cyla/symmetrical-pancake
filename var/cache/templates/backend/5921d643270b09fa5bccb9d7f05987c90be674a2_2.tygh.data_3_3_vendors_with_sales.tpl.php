<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:39
  from '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_3_vendors_with_sales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec0673df8084_32746686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5921d643270b09fa5bccb9d7f05987c90be674a2' => 
    array (
      0 => '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_3_vendors_with_sales.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec0673df8084_32746686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.vendors_with_sales','dashboard.analytics_card.view_vendors','dashboard.analytics_card.vendor_activity','dashboard.analytics_card.new_vendors','dashboard.analytics_card.vendors_with_new_products','dashboard.analytics_card.vendors_not_logged','dashboard.analytics_card.new_products'));
if ((isset($_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value))) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "date_range_selected_date", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] === "month_first") {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_from']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_to']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_from']->value,"%d %b %Y"), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_to']->value,"%d %b %Y"), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable8=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable9=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable10=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable11=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable12=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable13=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable14=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable15=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable16=ob_get_clean();
$_smarty_tpl->_assignInScope('data_3_3_vendors_with_sales', array('id'=>"analytics_card_vendors_with_sales",'preheader'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'date_range_selected_date'),'is_selected_date'=>true,'title'=>$_smarty_tpl->__("dashboard.analytics_card.vendors_with_sales"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.analytics_card.view_vendors"),'href'=>"companies.manage?sales_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&sales_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status=".$_prefixVariable8),'number'=>$_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['vendors_with_sales'],'resource_list'=>array('id'=>"analytics_card_vendors_with_sales_list",'title'=>$_smarty_tpl->__("dashboard.analytics_card.vendor_activity"),'content'=>array(array('id'=>"analytics_card_vendors_with_sales_new_vendors",'name'=>$_smarty_tpl->__("dashboard.analytics_card.new_vendors"),'href'=>"companies.manage?created_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&created_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status=".$_prefixVariable9,'value'=>$_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['new_vendors'],'value_href'=>"companies.manage?created_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&created_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status=".$_prefixVariable10),array('id'=>"analytics_card_vendors_with_sales_vendors_with_new_products",'name'=>$_smarty_tpl->__("dashboard.analytics_card.vendors_with_new_products"),'href'=>"companies.manage?extend[]=products&new_products_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&new_products_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status=".$_prefixVariable11,'value'=>$_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['vendors_with_new_products'],'value_href'=>"companies.manage?extend[]=products&new_products_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&new_products_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status=".$_prefixVariable12),array('id'=>"analytics_card_vendors_with_sales_vendors_not_logged",'name'=>$_smarty_tpl->__("dashboard.analytics_card.vendors_not_logged"),'href'=>"companies.manage?not_login_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&not_login_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status=".$_prefixVariable13,'value'=>$_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['vendors_not_logged'],'value_href'=>"companies.manage?not_login_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&not_login_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status=".$_prefixVariable14),array('id'=>"analytics_card_vendors_with_sales_new_products",'name'=>$_smarty_tpl->__("dashboard.analytics_card.new_products"),'href'=>"products.manage?time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&period=C&status[]=A&company_status[]=".$_prefixVariable15,'value'=>$_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['new_products'],'value_href'=>"products.manage?time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&period=C&status[]=A&company_status[]=".$_prefixVariable16)))));
$_smarty_tpl->_assignInScope('data_3_3_vendors_with_sales', $_smarty_tpl->tpl_vars['data_3_3_vendors_with_sales']->value ,false ,2);
}
}
}
