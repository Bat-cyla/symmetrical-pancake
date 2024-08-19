<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:01
  from '/app/www/design/themes/responsive/templates/addons/product_variations/hooks/checkout/product_options.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbed817d49_23644391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf14d7230493bbabfda6b9fcb54f052d9d01d746' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_variations/hooks/checkout/product_options.pre.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4bbed817d49_23644391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/picker_features.js"),$_smarty_tpl);?>

    <div class="cm-picker-cart-product-variation-features ty-product-options">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features_variants'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
            <div class="ty-control-group ty-product-options__item clearfix">
                <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                <bdi>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                    <select class="cm-ajax" data-ca-target-id="checkout*,cart*">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']) {?>
                                <option data-ca-variant-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['product']['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-change-url="<?php echo htmlspecialchars((string) fn_url("checkout.change_variation?cart_item_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] == $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                                >
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                </option>
                            <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants'] === smarty_modifier_enum("YesNo::YES")) {?>
                                <option disabled><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                </bdi>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/checkout/product_options.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/checkout/product_options.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/picker_features.js"),$_smarty_tpl);?>

    <div class="cm-picker-cart-product-variation-features ty-product-options">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features_variants'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
            <div class="ty-control-group ty-product-options__item clearfix">
                <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                <bdi>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                    <select class="cm-ajax" data-ca-target-id="checkout*,cart*">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']) {?>
                                <option data-ca-variant-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['product']['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-change-url="<?php echo htmlspecialchars((string) fn_url("checkout.change_variation?cart_item_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] == $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                                >
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                </option>
                            <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants'] === smarty_modifier_enum("YesNo::YES")) {?>
                                <option disabled><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                </bdi>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}
