<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:15
  from '/app/www/design/themes/responsive/templates/blocks/lite_checkout/customer_notes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eebb67ae7_58609941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '372a23e1f187d4e7d3e08791cca58bd1c6a9fd2f' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/lite_checkout/customer_notes.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/customer_notes.tpl' => 2,
  ),
),false)) {
function content_66b49eebb67ae7_58609941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer_notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field_name'=>$_smarty_tpl->tpl_vars['block']->value['name']), 0, false);
?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/customer_notes.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/customer_notes.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer_notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field_name'=>$_smarty_tpl->tpl_vars['block']->value['name']), 0, true);
?>
</div>
<?php }
}
}
