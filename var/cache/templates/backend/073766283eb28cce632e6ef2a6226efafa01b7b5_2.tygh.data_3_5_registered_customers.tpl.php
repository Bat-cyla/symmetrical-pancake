<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:39
  from '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_5_registered_customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec0673e1a8e2_92626725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '073766283eb28cce632e6ef2a6226efafa01b7b5' => 
    array (
      0 => '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_5_registered_customers.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec0673e1a8e2_92626725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.registered_customers','dashboard.analytics_card.view_customers'));
if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['customers'])) {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("UserTypes::CUSTOMER"), ENT_QUOTES, 'UTF-8');
$_prefixVariable17=ob_get_clean();
$_smarty_tpl->_assignInScope('data_3_5_registered_customers', array('id'=>"analytics_card_registered_customers",'title'=>$_smarty_tpl->__("dashboard.analytics_card.registered_customers"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.analytics_card.view_customers"),'href'=>"profiles.manage?user_type=".$_prefixVariable17),'number'=>number_format($_smarty_tpl->tpl_vars['general_stats']->value['customers']['registered_customers'])));
$_smarty_tpl->_assignInScope('data_3_5_registered_customers', $_smarty_tpl->tpl_vars['data_3_5_registered_customers']->value ,false ,2);
}
}
}
