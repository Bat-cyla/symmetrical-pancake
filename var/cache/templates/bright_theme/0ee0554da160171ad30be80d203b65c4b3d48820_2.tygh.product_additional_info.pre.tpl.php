<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:04
  from '/app/www/design/themes/responsive/templates/addons/product_variations/hooks/products/product_additional_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49ee027c6e0_49653406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ee0554da160171ad30be80d203b65c4b3d48820' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_variations/hooks/products/product_additional_info.pre.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/components/variation_features.tpl' => 2,
  ),
),false)) {
function content_66b49ee027c6e0_49653406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_secondary'=>true), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/product_additional_info.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/product_additional_info.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_secondary'=>true), 0, true);
}
}
}
}
