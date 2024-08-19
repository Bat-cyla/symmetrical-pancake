<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:48
  from '/app/www/design/backend/templates/addons/gift_certificates/views/orders/components/order_details_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde3a01e48d9_82230473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e768e3c73a7692a177b0bd471d1c9032aaa2dd9' => 
    array (
      0 => '/app/www/design/backend/templates/addons/gift_certificates/views/orders/components/order_details_body.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bde3a01e48d9_82230473 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate'));
if ($_smarty_tpl->tpl_vars['oi']->value['extra']['in_use_certificate']) {?>
<div>(<?php echo $_smarty_tpl->__("gift_certificate");?>
:<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oi']->value['extra']['in_use_certificate'], 'c', false, 'c_key', 'f_fciu', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_key']->value => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['total'];
?>&nbsp;<a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates'][$_smarty_tpl->tpl_vars['c_key']->value]['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c_key']->value, ENT_QUOTES, 'UTF-8');?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['last'] : null)) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>)</div>
<?php }
}
}
