<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:49:34
  from '/app/www/design/themes/responsive/templates/addons/product_bundles/components/common/product_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdeb4ecf24e7_46112526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdb358d3dc6204c431fd02d80a5e430d04511864' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_bundles/components/common/product_item.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:addons/product_bundles/components/options/variation_options.tpl' => 2,
    'tygh:common/price.tpl' => 6,
  ),
),false)) {
function content_66bdeb4ecf24e7_46112526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('inc_tax','including_tax','product_bundles.specify_options','product_bundles.specify_options','inc_tax','including_tax','product_bundles.specify_options','product_bundles.specify_options'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['bundle']->value && $_smarty_tpl->tpl_vars['bundle_product']->value) {?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_coefficient', (($tmp = $_smarty_tpl->tpl_vars['thumbnail_coefficient']->value ?? null)===null||$tmp==='' ? "0.75" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value);?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value);?>

    <div class="ty-product-bundles-product-item ty-scroller__item"
        style="--ty-product-lists-thumbnail-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_width']->value, ENT_QUOTES, 'UTF-8');?>
px;
            --ty-product-lists-thumbnail-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_height']->value, ENT_QUOTES, 'UTF-8');?>
px;"
        id="product_bundles_product_item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

        <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />

        <div class="ty-product-bundles-product-item__content">

                        <div class="ty-product-bundles-product-item__image"
                id="product_bundles_product_item_image_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">

                <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                    class="ty-product-bundles-product-item__image-link"
                >
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['thumbnail_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['thumbnail_height']->value,'obj_id'=>((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['bundle_product']->value['main_pair'],'class'=>"ty-product-bundles-product-item__image-content"), 0, false);
?>
                </a>
            <!--product_bundles_product_item_image_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

                        <div class="ty-product-bundles-product-item__info">

                                <div class="ty-product-bundles-product-item__name">
                    <bdi>
                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                            class="ty-product-bundles-product-item__name-link"
                        >
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['product_name'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </bdi>
                </div>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/options/variation_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'bundle_product'=>$_smarty_tpl->tpl_vars['bundle_product']->value,'bundle_product_key'=>$_smarty_tpl->tpl_vars['bundle_product_key']->value), 0, false);
?>

                                <div class="ty-product-bundles-product-item__price"
                    id="product_bundles_product_item_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

                    <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['amount'] > 1) {?>
                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span>
                    <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] !== "hide_price_and_add_to_cart") {?>
                        <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['price'] !== $_smarty_tpl->tpl_vars['bundle_product']->value['discounted_price']) {?>
                            <span class="ty-list-price ty-nowrap ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle_product']->value['price'],'class'=>"ty-list-price ty-nowrap"), 0, false);
?></span>
                        <?php }?>
                        <span class="ty-price">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle_product']->value['discounted_price'],'class'=>"ty-price-num"), 0, true);
?>
                        </span>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['auth']->value['tax_exempt'] !== smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['bundle_product']->value['taxes']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['discounted_price'] != $_smarty_tpl->tpl_vars['bundle_product']->value['taxed_price']) {?>
                                <span class="ty-list-price ty-nowrap" id="line_product_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">(<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle_product']->value['taxed_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?> <?php echo $_smarty_tpl->__("inc_tax");?>
)</span>
                            <?php } else { ?>
                                <span class="ty-list-price ty-nowrap ty-tax-include">(<?php echo $_smarty_tpl->__("including_tax");?>
)</span>
                            <?php }?>
                        <?php }?>
                    <?php }?>
                <!--product_bundles_product_item_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_bundles_control", null, null);?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_bundles:product_control"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_bundles:product_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['product_options'] && $_smarty_tpl->tpl_vars['bundle_product']->value['aoc'] === smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->_assignInScope('selected_options', array("selected_options"=>array_column($_smarty_tpl->tpl_vars['bundle_product']->value['product_options'],"value","option_id")));?>
                            <a id="opener_product_bundle_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                class="cm-dialog-opener cm-dialog-auto-size ty-product-bundles-product-item__control-link
                                    <?php if ($_smarty_tpl->tpl_vars['has_required_options']->value) {?>ty-product-bundles-product-item__control-link--required<?php }?>"
                                href="<?php echo htmlspecialchars((string) fn_url("product_bundles.get_option_variants?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])."&bundle_product_key=".((string)$_smarty_tpl->tpl_vars['bundle_product_key']->value)."&".((string)(http_build_query($_smarty_tpl->tpl_vars['selected_options']->value)))."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])))), ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-target-id="content_product_bundle_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-dialog-title="<?php echo $_smarty_tpl->__("product_bundles.specify_options");?>
"
                                rel="nofollow"
                            >
                                <?php echo $_smarty_tpl->__("product_bundles.specify_options");?>

                            </a>

                                                        <?php echo $_smarty_tpl->tpl_vars['product_bundle_options_after']->value;?>

                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_bundles:product_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_bundles_control'))) {?>
                    <div class="ty-product-bundles-product-item__control">
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_bundles_control');?>

                    </div>
                <?php }?>

            </div>

        </div>

    <!--product_bundles_product_item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/common/product_item.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/common/product_item.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['bundle']->value && $_smarty_tpl->tpl_vars['bundle_product']->value) {?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_coefficient', (($tmp = $_smarty_tpl->tpl_vars['thumbnail_coefficient']->value ?? null)===null||$tmp==='' ? "0.75" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value);?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value);?>

    <div class="ty-product-bundles-product-item ty-scroller__item"
        style="--ty-product-lists-thumbnail-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_width']->value, ENT_QUOTES, 'UTF-8');?>
px;
            --ty-product-lists-thumbnail-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_height']->value, ENT_QUOTES, 'UTF-8');?>
px;"
        id="product_bundles_product_item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

        <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />

        <div class="ty-product-bundles-product-item__content">

                        <div class="ty-product-bundles-product-item__image"
                id="product_bundles_product_item_image_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">

                <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                    class="ty-product-bundles-product-item__image-link"
                >
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['thumbnail_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['thumbnail_height']->value,'obj_id'=>((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['bundle_product']->value['main_pair'],'class'=>"ty-product-bundles-product-item__image-content"), 0, true);
?>
                </a>
            <!--product_bundles_product_item_image_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

                        <div class="ty-product-bundles-product-item__info">

                                <div class="ty-product-bundles-product-item__name">
                    <bdi>
                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                            class="ty-product-bundles-product-item__name-link"
                        >
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['product_name'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </bdi>
                </div>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/options/variation_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'bundle_product'=>$_smarty_tpl->tpl_vars['bundle_product']->value,'bundle_product_key'=>$_smarty_tpl->tpl_vars['bundle_product_key']->value), 0, true);
?>

                                <div class="ty-product-bundles-product-item__price"
                    id="product_bundles_product_item_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

                    <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['amount'] > 1) {?>
                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span>
                    <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] !== "hide_price_and_add_to_cart") {?>
                        <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['price'] !== $_smarty_tpl->tpl_vars['bundle_product']->value['discounted_price']) {?>
                            <span class="ty-list-price ty-nowrap ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle_product']->value['price'],'class'=>"ty-list-price ty-nowrap"), 0, true);
?></span>
                        <?php }?>
                        <span class="ty-price">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle_product']->value['discounted_price'],'class'=>"ty-price-num"), 0, true);
?>
                        </span>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['auth']->value['tax_exempt'] !== smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['bundle_product']->value['taxes']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['discounted_price'] != $_smarty_tpl->tpl_vars['bundle_product']->value['taxed_price']) {?>
                                <span class="ty-list-price ty-nowrap" id="line_product_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">(<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle_product']->value['taxed_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?> <?php echo $_smarty_tpl->__("inc_tax");?>
)</span>
                            <?php } else { ?>
                                <span class="ty-list-price ty-nowrap ty-tax-include">(<?php echo $_smarty_tpl->__("including_tax");?>
)</span>
                            <?php }?>
                        <?php }?>
                    <?php }?>
                <!--product_bundles_product_item_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_bundles_control", null, null);?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_bundles:product_control"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_bundles:product_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['product_options'] && $_smarty_tpl->tpl_vars['bundle_product']->value['aoc'] === smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->_assignInScope('selected_options', array("selected_options"=>array_column($_smarty_tpl->tpl_vars['bundle_product']->value['product_options'],"value","option_id")));?>
                            <a id="opener_product_bundle_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                class="cm-dialog-opener cm-dialog-auto-size ty-product-bundles-product-item__control-link
                                    <?php if ($_smarty_tpl->tpl_vars['has_required_options']->value) {?>ty-product-bundles-product-item__control-link--required<?php }?>"
                                href="<?php echo htmlspecialchars((string) fn_url("product_bundles.get_option_variants?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])."&bundle_product_key=".((string)$_smarty_tpl->tpl_vars['bundle_product_key']->value)."&".((string)(http_build_query($_smarty_tpl->tpl_vars['selected_options']->value)))."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])))), ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-target-id="content_product_bundle_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-dialog-title="<?php echo $_smarty_tpl->__("product_bundles.specify_options");?>
"
                                rel="nofollow"
                            >
                                <?php echo $_smarty_tpl->__("product_bundles.specify_options");?>

                            </a>

                                                        <?php echo $_smarty_tpl->tpl_vars['product_bundle_options_after']->value;?>

                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_bundles:product_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_bundles_control'))) {?>
                    <div class="ty-product-bundles-product-item__control">
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_bundles_control');?>

                    </div>
                <?php }?>

            </div>

        </div>

    <!--product_bundles_product_item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
}
