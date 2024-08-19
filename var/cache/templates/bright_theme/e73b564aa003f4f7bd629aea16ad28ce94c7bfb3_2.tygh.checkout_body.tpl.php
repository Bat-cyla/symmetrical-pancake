<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:01
  from '/app/www/design/themes/responsive/templates/addons/gift_certificates/views/checkout/components/checkout_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbeda2a410_83017648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e73b564aa003f4f7bd629aea16ad28ce94c7bfb3' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/gift_certificates/views/checkout/components/checkout_body.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4bbeda2a410_83017648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','gift_certificate'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['in_use_certificate']) {?>
    (<?php echo $_smarty_tpl->__("gift_certificate");?>
:<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['in_use_certificate'], 'c', false, 'c_key', 'f_gciu', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_key']->value => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['total'];
?>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c_key']->value, ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['last'] : null)) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>)
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/views/checkout/components/checkout_body.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/views/checkout/components/checkout_body.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['in_use_certificate']) {?>
    (<?php echo $_smarty_tpl->__("gift_certificate");?>
:<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['in_use_certificate'], 'c', false, 'c_key', 'f_gciu', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_key']->value => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['total'];
?>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c_key']->value, ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_gciu']->value['last'] : null)) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>)
<?php }
}
}
}
