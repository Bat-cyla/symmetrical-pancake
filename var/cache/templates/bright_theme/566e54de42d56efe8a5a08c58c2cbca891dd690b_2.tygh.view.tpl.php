<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:30
  from '/app/www/design/themes/responsive/templates/views/products/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e102e91725_68798756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '566e54de42d56efe8a5a08c58c2cbca891dd690b' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/products/view.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b5e102e91725_68798756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_hide_form", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_options_vs_qty", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_buttons", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_no_ajax", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:layout_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:layout_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php $_smarty_tpl->_subTemplateRender(fn_get_product_details_view($_smarty_tpl->tpl_vars['product']->value['product_id']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_sku'=>true,'show_rating'=>true,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_clean_price'=>true,'details_page'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_product_options'=>true,'hide_form'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_hide_form'),'min_qty'=>true,'show_edp'=>true,'capture_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_buttons'),'capture_options_vs_qty'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_options_vs_qty'),'separate_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_separate_buttons'),'show_add_to_cart'=>(($tmp = $_smarty_tpl->tpl_vars['show_add_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp),'show_list_buttons'=>true,'but_role'=>"action",'block_width'=>true,'no_ajax'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_no_ajax'),'show_product_tabs'=>true), 0, true);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:layout_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_hide_form", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_options_vs_qty", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_buttons", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_no_ajax", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:layout_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:layout_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php $_smarty_tpl->_subTemplateRender(fn_get_product_details_view($_smarty_tpl->tpl_vars['product']->value['product_id']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_sku'=>true,'show_rating'=>true,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_clean_price'=>true,'details_page'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_product_options'=>true,'hide_form'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_hide_form'),'min_qty'=>true,'show_edp'=>true,'capture_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_buttons'),'capture_options_vs_qty'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_options_vs_qty'),'separate_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_separate_buttons'),'show_add_to_cart'=>(($tmp = $_smarty_tpl->tpl_vars['show_add_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp),'show_list_buttons'=>true,'but_role'=>"action",'block_width'=>true,'no_ajax'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_no_ajax'),'show_product_tabs'=>true), 0, true);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:layout_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
