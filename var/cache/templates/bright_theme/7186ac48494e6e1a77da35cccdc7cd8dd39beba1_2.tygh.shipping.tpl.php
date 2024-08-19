<?php
/* Smarty version 4.1.1, created on 2024-08-09 13:57:15
  from '/app/www/design/themes/responsive/templates/views/checkout/components/steps/shipping.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5f60b77b566_15374530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7186ac48494e6e1a77da35cccdc7cd8dd39beba1' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/steps/shipping.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/customer/location.tpl' => 2,
    'tygh:views/checkout/components/shipping_rates.tpl' => 2,
  ),
),false)) {
function content_66b5f60b77b566_15374530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer/location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="litecheckout__group litecheckout__step" id="litecheckout_step_shipping">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/shipping_rates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_form'=>true), 0, false);
?>
    <!--litecheckout_step_shipping--></div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/steps/shipping.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/steps/shipping.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer/location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <div class="litecheckout__group litecheckout__step" id="litecheckout_step_shipping">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/shipping_rates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_form'=>true), 0, true);
?>
    <!--litecheckout_step_shipping--></div>
</div>
<?php }
}
}
