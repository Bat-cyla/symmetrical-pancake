<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:02
  from '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/checkout/payment_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbee12d499_99084621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fdc20d7308f8e0394c6f915fbaa36e96881e4b7' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/checkout/payment_extra.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/reward_points/hooks/checkout/payment_options.post.tpl' => 2,
  ),
),false)) {
function content_66b4bbee12d499_99084621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout" && $_smarty_tpl->tpl_vars['cart_products']->value && $_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'] && $_smarty_tpl->tpl_vars['user_info']->value['points'] > 0) {?>
<div class="ty-right">
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/reward_points/hooks/checkout/payment_options.post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/payment_extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/payment_extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout" && $_smarty_tpl->tpl_vars['cart_products']->value && $_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'] && $_smarty_tpl->tpl_vars['user_info']->value['points'] > 0) {?>
<div class="ty-right">
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/reward_points/hooks/checkout/payment_options.post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
}
}
