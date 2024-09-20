<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:50
  from '/app/www/design/themes/responsive/templates/addons/ab__deal_of_the_day/components/promotion_label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec067ea5d554_62638644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afa95459bf9c474523cfd252bd7a003d13af21ed' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/ab__deal_of_the_day/components/promotion_label.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/product_label.tpl' => 2,
  ),
),false)) {
function content_66ec067ea5d554_62638644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__dotd_product_label','ab__dotd_product_label'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['promotions'] && fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array('show_label_in_products_lists'=>true,'exclude_hidden'=>true))) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value,'label_meta'=>"ab_dotd_product_label",'label_text'=>$_smarty_tpl->__("ab__dotd_product_label")), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/components/promotion_label.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/components/promotion_label.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['promotions'] && fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array('show_label_in_products_lists'=>true,'exclude_hidden'=>true))) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value,'label_meta'=>"ab_dotd_product_label",'label_text'=>$_smarty_tpl->__("ab__dotd_product_label")), 0, true);
}
}
}
}
