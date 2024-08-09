<?php
/* Smarty version 4.1.1, created on 2024-08-08 16:08:04
  from '/app/www/design/themes/responsive/templates/addons/product_bundles/addons/product_variations/hooks/product_bundles/variation_options.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4c33474b1a1_19532818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f47d51ada3523a9197b08a04ce8668cf863d831c' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_bundles/addons/product_variations/hooks/product_bundles/variation_options.pre.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4c33474b1a1_19532818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['bundle_product']->value['any_variation'] === smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['bundle_product']->value['parent_variation_product'] || ($_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features_variants']))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] !== constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM")) {?>
            <?php continue 1;?>
        <?php }?>

        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['variants']) ? $_smarty_tpl->tpl_vars['variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['feature']->value['variant'];
$_smarty_tpl->_assignInScope('variants', $_tmp_array);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->_assignInScope('variants', $_smarty_tpl->tpl_vars['variants']->value ,false ,2);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/addons/product_variations/hooks/product_bundles/variation_options.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/addons/product_variations/hooks/product_bundles/variation_options.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['bundle_product']->value['any_variation'] === smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['bundle_product']->value['parent_variation_product'] || ($_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features_variants']))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] !== constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM")) {?>
            <?php continue 1;?>
        <?php }?>

        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['variants']) ? $_smarty_tpl->tpl_vars['variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['feature']->value['variant'];
$_smarty_tpl->_assignInScope('variants', $_tmp_array);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->_assignInScope('variants', $_smarty_tpl->tpl_vars['variants']->value ,false ,2);
}
}
}
}
