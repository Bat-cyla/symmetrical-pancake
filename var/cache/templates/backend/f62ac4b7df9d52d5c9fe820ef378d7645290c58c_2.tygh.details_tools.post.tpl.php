<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:49
  from '/app/www/design/backend/templates/addons/vendor_communication/hooks/orders/details_tools.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde3a10419a8_21807041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f62ac4b7df9d52d5c9fe820ef378d7645290c58c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_communication/hooks/orders/details_tools.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 2,
  ),
),false)) {
function content_66bde3a10419a8_21807041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.contact_customer'));
if ($_smarty_tpl->tpl_vars['is_user_can_manage_customer_order_thread']->value && !$_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value && $_smarty_tpl->tpl_vars['order_info']->value['user_id']) {?>
    <?php $_smarty_tpl->_assignInScope('communication_type', smarty_modifier_enum("Addons\VendorCommunication\CommunicationTypes::VENDOR_TO_CUSTOMER"));?>
    <?php $_smarty_tpl->_assignInScope('return_url', fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=vendor_communication_".((string)$_smarty_tpl->tpl_vars['communication_type']->value)));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("vendor_communication.contact_customer"),'communication_type'=>$_smarty_tpl->tpl_vars['communication_type']->value,'object_type'=>(defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null),'object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'menu_button'=>true,'divider'=>true,'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value), 0, false);
}
if ($_smarty_tpl->tpl_vars['is_user_can_manage_vendor_order_thread']->value && !$_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value) {?>
    <?php $_smarty_tpl->_assignInScope('communication_type', smarty_modifier_enum("Addons\VendorCommunication\CommunicationTypes::VENDOR_TO_ADMIN"));?>
    <?php $_smarty_tpl->_assignInScope('return_url', fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=vendor_communication_".((string)$_smarty_tpl->tpl_vars['communication_type']->value)));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('communication_type'=>$_smarty_tpl->tpl_vars['communication_type']->value,'object_type'=>(defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null),'object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'menu_button'=>true,'divider'=>true,'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value), 0, true);
}
}
}
