<?php
/* Smarty version 4.1.1, created on 2024-08-08 16:08:04
  from '/app/www/design/themes/responsive/templates/addons/product_bundles/addons/product_variations/hooks/product_bundles/product_control.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4c3348c6eb0_17904809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0cf6db65c35acd61852e5ff123b93fe08398ee0' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_bundles/addons/product_variations/hooks/product_bundles/product_control.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4c3348c6eb0_17904809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.specify_features','product_bundles.specify_features','product_bundles.specify_features','product_bundles.specify_features'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['bundle_product']->value['any_variation'] === smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['bundle_product']->value['parent_variation_product'] || ($_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features_variants']))) {?>
    <a id="opener_product_bundle_features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="cm-dialog-opener cm-dialog-auto-size ty-product-bundles-product-item__control-link"
        href="<?php echo htmlspecialchars((string) fn_url("product_bundles.get_feature_variants?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])."&bundle_product_key=".((string)$_smarty_tpl->tpl_vars['bundle_product_key']->value)."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])))), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-id="content_product_bundle_features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dialog-title="<?php echo $_smarty_tpl->__("product_bundles.specify_features");?>
"
        rel="nofollow"
    >
        <?php echo $_smarty_tpl->__("product_bundles.specify_features");?>

    </a>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/addons/product_variations/hooks/product_bundles/product_control.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/addons/product_variations/hooks/product_bundles/product_control.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['bundle_product']->value['any_variation'] === smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['bundle_product']->value['parent_variation_product'] || ($_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features_variants']))) {?>
    <a id="opener_product_bundle_features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="cm-dialog-opener cm-dialog-auto-size ty-product-bundles-product-item__control-link"
        href="<?php echo htmlspecialchars((string) fn_url("product_bundles.get_feature_variants?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])."&bundle_product_key=".((string)$_smarty_tpl->tpl_vars['bundle_product_key']->value)."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])))), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-id="content_product_bundle_features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dialog-title="<?php echo $_smarty_tpl->__("product_bundles.specify_features");?>
"
        rel="nofollow"
    >
        <?php echo $_smarty_tpl->__("product_bundles.specify_features");?>

    </a>
<?php }
}
}
}
