<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:48
  from '/app/www/design/backend/templates/addons/vendor_communication/hooks/orders/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde3a0b94061_05528488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee056fcb6f6baec5852ecab83d3df38af22398d4' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_communication/hooks/orders/tabs_extra.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/thread_view.tpl' => 2,
  ),
),false)) {
function content_66bde3a0b94061_05528488 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/thread_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value,'is_user_can_manage_order_thread'=>$_smarty_tpl->tpl_vars['is_user_can_manage_customer_order_thread']->value,'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0, false);
}
if ($_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/thread_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value,'is_user_can_manage_order_thread'=>$_smarty_tpl->tpl_vars['is_user_can_manage_vendor_order_thread']->value,'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0, true);
}
}
}
