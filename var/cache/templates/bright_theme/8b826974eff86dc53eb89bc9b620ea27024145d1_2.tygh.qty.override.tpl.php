<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:50
  from '/app/www/design/themes/responsive/templates/addons/product_variations/hooks/products/qty.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec067ee45a37_06620009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b826974eff86dc53eb89bc9b620ea27024145d1' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_variations/hooks/products/qty.override.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec067ee45a37_06620009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_select_variations_button', (($tmp = $_smarty_tpl->tpl_vars['show_select_variations_button']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['has_child_variations'] && $_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    &nbsp;
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/qty.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/qty.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_select_variations_button', (($tmp = $_smarty_tpl->tpl_vars['show_select_variations_button']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['has_child_variations'] && $_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    &nbsp;
<?php }
}
}
}
