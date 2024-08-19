<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:32
  from '/app/www/design/themes/responsive/templates/addons/product_variations/hooks/products/product_option_content.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e10416a050_26148449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22fbbb99d65b3fed865c09a7f121d63b1011fa29' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_variations/hooks/products/product_option_content.pre.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66b5e10416a050_26148449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants'] && $_smarty_tpl->tpl_vars['product']->value['detailed_params']['info_type'] === "D") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/picker_features.js"),$_smarty_tpl);?>

    <div id="features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC">
        <?php $_smarty_tpl->_assignInScope('container', "product_detail_page");?>
        <?php $_smarty_tpl->_assignInScope('product_url', "products.view");?>
        <?php $_smarty_tpl->_assignInScope('show_all_possible_feature_variants', $_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants'] === smarty_modifier_enum("YesNo::YES"));?>
        <?php $_smarty_tpl->_assignInScope('allow_negative_amount', (($tmp = $_smarty_tpl->tpl_vars['allow_negative_amount']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount'] ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"));?>
        <?php $_smarty_tpl->_assignInScope('is_buy_in_advance', $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] === smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"));?>
        <?php $_smarty_tpl->_assignInScope('show_out_of_stock_products', $_smarty_tpl->tpl_vars['settings']->value['General']['show_out_of_stock_products'] === smarty_modifier_enum("YesNo::YES"));?>

        <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>
            <?php $_smarty_tpl->_assignInScope('container', "product_main_info_form_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['quick_view_additional_container']->value));?>
            <?php $_smarty_tpl->_assignInScope('product_url', trim("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value)));?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['is_microstore']->value) {?>
            <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"is_microstore=Y"));?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['company_id']) {?>
                <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"microstore_company_id=".((string)$_smarty_tpl->tpl_vars['product']->value['company_id'])));?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['detailed_params']['is_preview']) {?>
            <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"action=preview"));?>
        <?php }?>

        <div class="cm-picker-product-variation-features ty-product-options">
            <?php $_smarty_tpl->_assignInScope('feature_style_dropdown', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN"));?>
            <?php $_smarty_tpl->_assignInScope('feature_style_images', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_IMAGES"));?>
            <?php $_smarty_tpl->_assignInScope('feature_style_labels', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_LABELS"));?>
            <?php $_smarty_tpl->_assignInScope('purpose_create_variations', constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"));?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features_variants'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('is_feature_default_style', !in_array($_smarty_tpl->tpl_vars['feature']->value['feature_style'],array($_smarty_tpl->tpl_vars['feature_style_images']->value,$_smarty_tpl->tpl_vars['feature_style_labels']->value,$_smarty_tpl->tpl_vars['feature_style_dropdown']->value)));?>

                <div class="ty-control-group ty-product-options__item clearfix">
                    <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                    <bdi>
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] != $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                    <?php continue 1;?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id'] || $_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                    <div class="ty-product-option-container ty-product-option-container--feature-style-images">
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                                            <div class="ty-product-option-child"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php }?>
                                        <div class="ty-product-option-child"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                                            <div class="ty-product-option-child"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_dropdown']->value || $_smarty_tpl->tpl_vars['is_feature_default_style']->value) {?>
                            <div class="ty-product-option-container">
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                                <div class="ty-product-option-child"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</div>
                            <?php }?>
                                <div class="ty-product-option-child">
                                    <select class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-history<?php }?> cm-ajax-force" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                                <option
                                                    data-ca-variant-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                    data-ca-product-url="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] == $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                                                >
                                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                                </option>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                                <option disabled><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                                <div class="ty-product-option-child"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</div>
                            <?php }?>
                            </div>
                        <?php }?>
                    </bdi>

                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variant_images", null, null);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['showed_product_id']) {?>
                                    <?php $_smarty_tpl->_assignInScope('variant_product_id', $_smarty_tpl->tpl_vars['variant']->value['showed_product_id']);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('variant_product_id', $_smarty_tpl->tpl_vars['variant']->value['product']['product_id']);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant_product_id']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['amount'] || $_smarty_tpl->tpl_vars['allow_negative_amount']->value || $_smarty_tpl->tpl_vars['is_buy_in_advance']->value || $_smarty_tpl->tpl_vars['show_out_of_stock_products']->value && !$_smarty_tpl->tpl_vars['variant']->value['product']['disabled']) {?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant_product_id']->value))), ENT_QUOTES, 'UTF-8');?>
"
                                        class="ty-product-options__image--wrapper <?php if ($_smarty_tpl->tpl_vars['variant']->value['variant_id'] == $_smarty_tpl->tpl_vars['feature']->value['variant_id']) {?>ty-product-options__image--wrapper--active<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax cm-ajax-cache<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-history<?php }?>"
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        >
                                    <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['amount'] || $_smarty_tpl->tpl_vars['allow_negative_amount']->value || $_smarty_tpl->tpl_vars['is_buy_in_advance']->value || $_smarty_tpl->tpl_vars['show_out_of_stock_products']->value && !$_smarty_tpl->tpl_vars['variant']->value['product']['disabled']) {?>
                                            <?php $_smarty_tpl->_assignInScope('image_class', "ty-product-options__image");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('image_class', "ty-product-variations-image-disabled");?>
                                        <?php }?>

                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id'])."_".((string)$_smarty_tpl->tpl_vars['variant']->value['variant_id'])."_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>$_smarty_tpl->tpl_vars['image_class']->value,'images'=>$_smarty_tpl->tpl_vars['variant']->value['product']['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_height'],'image_additional_attrs'=>array("width"=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_width'],"height"=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_height'])), 0, true);
?>
                                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['amount'] || $_smarty_tpl->tpl_vars['allow_negative_amount']->value || $_smarty_tpl->tpl_vars['is_buy_in_advance']->value || $_smarty_tpl->tpl_vars['show_out_of_stock_products']->value && !$_smarty_tpl->tpl_vars['variant']->value['product']['disabled']) {?>
                                        </a>
                                    <?php }?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images'))) {?>
                            <div class="ty-clear-both">
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images');?>

                            </div>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_labels']->value) {?>
                        <div class="ty-clear-both">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id'] && ($_smarty_tpl->tpl_vars['variant']->value['product']['amount'] || $_smarty_tpl->tpl_vars['allow_negative_amount']->value || $_smarty_tpl->tpl_vars['is_buy_in_advance']->value || $_smarty_tpl->tpl_vars['show_out_of_stock_products']->value && !$_smarty_tpl->tpl_vars['variant']->value['product']['disabled'])) {?>
                                    <input type="radio"
                                           name="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] == $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                               checked
                                           <?php }?>
                                           id="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-variant-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-product-url="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                           class="hidden ty-product-options__radio <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-history<?php }?> cm-ajax-force" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    />
                                    <label for="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-product-options__radio--label"
                                    >
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
<span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>
                                <?php } elseif ($_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                    <label class="ty-product-options__radio--label ty-product-options__radio--label--disabled">
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
<span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/product_option_content.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/product_option_content.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants'] && $_smarty_tpl->tpl_vars['product']->value['detailed_params']['info_type'] === "D") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/picker_features.js"),$_smarty_tpl);?>

    <div id="features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC">
        <?php $_smarty_tpl->_assignInScope('container', "product_detail_page");?>
        <?php $_smarty_tpl->_assignInScope('product_url', "products.view");?>
        <?php $_smarty_tpl->_assignInScope('show_all_possible_feature_variants', $_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants'] === smarty_modifier_enum("YesNo::YES"));?>
        <?php $_smarty_tpl->_assignInScope('allow_negative_amount', (($tmp = $_smarty_tpl->tpl_vars['allow_negative_amount']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount'] ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"));?>
        <?php $_smarty_tpl->_assignInScope('is_buy_in_advance', $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] === smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"));?>
        <?php $_smarty_tpl->_assignInScope('show_out_of_stock_products', $_smarty_tpl->tpl_vars['settings']->value['General']['show_out_of_stock_products'] === smarty_modifier_enum("YesNo::YES"));?>

        <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>
            <?php $_smarty_tpl->_assignInScope('container', "product_main_info_form_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['quick_view_additional_container']->value));?>
            <?php $_smarty_tpl->_assignInScope('product_url', trim("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value)));?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['is_microstore']->value) {?>
            <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"is_microstore=Y"));?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['company_id']) {?>
                <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"microstore_company_id=".((string)$_smarty_tpl->tpl_vars['product']->value['company_id'])));?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['detailed_params']['is_preview']) {?>
            <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"action=preview"));?>
        <?php }?>

        <div class="cm-picker-product-variation-features ty-product-options">
            <?php $_smarty_tpl->_assignInScope('feature_style_dropdown', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN"));?>
            <?php $_smarty_tpl->_assignInScope('feature_style_images', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_IMAGES"));?>
            <?php $_smarty_tpl->_assignInScope('feature_style_labels', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_LABELS"));?>
            <?php $_smarty_tpl->_assignInScope('purpose_create_variations', constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"));?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features_variants'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('is_feature_default_style', !in_array($_smarty_tpl->tpl_vars['feature']->value['feature_style'],array($_smarty_tpl->tpl_vars['feature_style_images']->value,$_smarty_tpl->tpl_vars['feature_style_labels']->value,$_smarty_tpl->tpl_vars['feature_style_dropdown']->value)));?>

                <div class="ty-control-group ty-product-options__item clearfix">
                    <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                    <bdi>
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] != $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                    <?php continue 1;?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id'] || $_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                    <div class="ty-product-option-container ty-product-option-container--feature-style-images">
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                                            <div class="ty-product-option-child"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php }?>
                                        <div class="ty-product-option-child"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                                            <div class="ty-product-option-child"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_dropdown']->value || $_smarty_tpl->tpl_vars['is_feature_default_style']->value) {?>
                            <div class="ty-product-option-container">
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                                <div class="ty-product-option-child"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</div>
                            <?php }?>
                                <div class="ty-product-option-child">
                                    <select class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-history<?php }?> cm-ajax-force" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                                <option
                                                    data-ca-variant-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                    data-ca-product-url="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] == $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                                                >
                                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                                </option>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                                <option disabled><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                                <div class="ty-product-option-child"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</div>
                            <?php }?>
                            </div>
                        <?php }?>
                    </bdi>

                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variant_images", null, null);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['showed_product_id']) {?>
                                    <?php $_smarty_tpl->_assignInScope('variant_product_id', $_smarty_tpl->tpl_vars['variant']->value['showed_product_id']);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('variant_product_id', $_smarty_tpl->tpl_vars['variant']->value['product']['product_id']);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant_product_id']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['amount'] || $_smarty_tpl->tpl_vars['allow_negative_amount']->value || $_smarty_tpl->tpl_vars['is_buy_in_advance']->value || $_smarty_tpl->tpl_vars['show_out_of_stock_products']->value && !$_smarty_tpl->tpl_vars['variant']->value['product']['disabled']) {?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant_product_id']->value))), ENT_QUOTES, 'UTF-8');?>
"
                                        class="ty-product-options__image--wrapper <?php if ($_smarty_tpl->tpl_vars['variant']->value['variant_id'] == $_smarty_tpl->tpl_vars['feature']->value['variant_id']) {?>ty-product-options__image--wrapper--active<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax cm-ajax-cache<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-history<?php }?>"
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        >
                                    <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['amount'] || $_smarty_tpl->tpl_vars['allow_negative_amount']->value || $_smarty_tpl->tpl_vars['is_buy_in_advance']->value || $_smarty_tpl->tpl_vars['show_out_of_stock_products']->value && !$_smarty_tpl->tpl_vars['variant']->value['product']['disabled']) {?>
                                            <?php $_smarty_tpl->_assignInScope('image_class', "ty-product-options__image");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('image_class', "ty-product-variations-image-disabled");?>
                                        <?php }?>

                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id'])."_".((string)$_smarty_tpl->tpl_vars['variant']->value['variant_id'])."_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>$_smarty_tpl->tpl_vars['image_class']->value,'images'=>$_smarty_tpl->tpl_vars['variant']->value['product']['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_height'],'image_additional_attrs'=>array("width"=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_width'],"height"=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_height'])), 0, true);
?>
                                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['amount'] || $_smarty_tpl->tpl_vars['allow_negative_amount']->value || $_smarty_tpl->tpl_vars['is_buy_in_advance']->value || $_smarty_tpl->tpl_vars['show_out_of_stock_products']->value && !$_smarty_tpl->tpl_vars['variant']->value['product']['disabled']) {?>
                                        </a>
                                    <?php }?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images'))) {?>
                            <div class="ty-clear-both">
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images');?>

                            </div>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_labels']->value) {?>
                        <div class="ty-clear-both">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id'] && ($_smarty_tpl->tpl_vars['variant']->value['product']['amount'] || $_smarty_tpl->tpl_vars['allow_negative_amount']->value || $_smarty_tpl->tpl_vars['is_buy_in_advance']->value || $_smarty_tpl->tpl_vars['show_out_of_stock_products']->value && !$_smarty_tpl->tpl_vars['variant']->value['product']['disabled'])) {?>
                                    <input type="radio"
                                           name="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] == $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                               checked
                                           <?php }?>
                                           id="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-variant-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-product-url="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                           class="hidden ty-product-options__radio <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-history<?php }?> cm-ajax-force" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    />
                                    <label for="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-product-options__radio--label"
                                    >
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
<span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>
                                <?php } elseif ($_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                    <label class="ty-product-options__radio--label ty-product-options__radio--label--disabled">
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
<span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
}
