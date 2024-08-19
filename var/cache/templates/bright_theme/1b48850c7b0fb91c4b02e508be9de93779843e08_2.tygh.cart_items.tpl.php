<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:01
  from '/app/www/design/themes/responsive/templates/views/checkout/components/cart_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbed1e3138_40112523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b48850c7b0fb91c4b02e508be9de93779843e08' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/cart_items.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:views/products/components/product_options.tpl' => 2,
    'tygh:common/price.tpl' => 12,
    'tygh:views/companies/components/product_company_data.tpl' => 2,
    'tygh:common/mainbox_cart.tpl' => 2,
  ),
),false)) {
function content_66b4bbed1e3138_40112523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product','unit_price','quantity','total_price','remove','sku','free','discount','taxes','price','quantity','discount','tax','subtotal','cart_items','product','unit_price','quantity','total_price','remove','sku','free','discount','taxes','price','quantity','discount','tax','subtotal','cart_items'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('default_minimal_qty', 1);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cartbox", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
    <?php if (floatval($_smarty_tpl->tpl_vars['cart']->value['coupons'])) {?><input type="hidden" name="c_id" value="" /><?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:form_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:form_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:form_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<div id="cart_items">
    <table class="ty-cart-content ty-table">

    <?php $_smarty_tpl->_assignInScope('prods', false);?>

    <thead>
        <tr>
            <th class="ty-cart-content__title ty-left"><?php echo $_smarty_tpl->__("product");?>
</th>
            <th class="ty-cart-content__title ty-left">&nbsp;</th>
            <th class="ty-cart-content__title ty-right"><?php echo $_smarty_tpl->__("unit_price");?>
</th>
            <th class="ty-cart-content__title quantity-cell"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th class="ty-cart-content__title ty-right"><?php echo $_smarty_tpl->__("total_price");?>
</th>
        </tr>
    </thead>

    <tbody>
    <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_products']->value, 'product', false, 'key', 'cart_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['product']->value['object_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value ?? null : $tmp));?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:items_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:items_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']) {?>
                    <tr>
                        <td class="ty-cart-content__product-elem ty-cart-content__image-block">
                            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "cart" || $_smarty_tpl->tpl_vars['show_images']->value) {?>
                                <div class="ty-cart-content__image cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_icon"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['key']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, true);
?></a>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <!--product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                            <?php }?>
                        </td>

                        <td class="ty-cart-content__product-elem ty-cart-content__description" style="width: 50%;">
                            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-cart-content__product-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-cart-content__product-delete ty-delete-big" href="<?php echo htmlspecialchars((string) fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" title="<?php echo $_smarty_tpl->__("remove");?>
">&nbsp;<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-delete-big__icon"),$_smarty_tpl);?>
</a><?php }?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="ty-cart-content__sku ty-sku cm-hidden-wrapper<?php if (!$_smarty_tpl->tpl_vars['product']->value['product_code']) {?> hidden<?php }?>" id="sku_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo $_smarty_tpl->__("sku");?>
: <span class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_code_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
<!--product_code_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
                                </div>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                                        <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 ty-cart-content__options" id="options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <input type="hidden" name="no_cache" value="no_cache" />
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'product'=>$_smarty_tpl->tpl_vars['product']->value,'name'=>"cart_products",'id'=>$_smarty_tpl->tpl_vars['key']->value,'location'=>"cart",'disable_ids'=>$_smarty_tpl->tpl_vars['disable_ids']->value,'form_name'=>"checkout_form"), 0, true);
?>
                                        <!--options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                    <?php }?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php $_smarty_tpl->_assignInScope('name', "product_options_".((string)$_smarty_tpl->tpl_vars['key']->value));?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value, null, null);?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_info_update", null, null);?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                        <strong><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span></strong>
                                    <?php } elseif (floatval($_smarty_tpl->tpl_vars['product']->value['discount']) || ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal")) {?>
                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?>
                                            <?php $_smarty_tpl->_assignInScope('price_info_title', $_smarty_tpl->__("discount"));?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('price_info_title', $_smarty_tpl->__("taxes"));?>
                                        <?php }?>
                                        <p><a data-ca-target-id="discount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
</a></p>

                                        <div class="ty-group-block hidden" id="discount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <table class="ty-cart-content__more-info ty-table">
                                                <thead>
                                                    <tr>
                                                        <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("price");?>
</th>
                                                        <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("discount");?>
</th><?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?><th><?php echo $_smarty_tpl->__("tax");?>
</th><?php }?>
                                                        <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price'],'span_id'=>"original_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td>
                                                        <td class="ty-center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount'],'span_id'=>"discount_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td><?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?><td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_summary']['total'],'span_id'=>"tax_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td><?php }?>
                                                        <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('span_id'=>"product_subtotal_2_".((string)$_smarty_tpl->tpl_vars['key']->value),'value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'class'=>"none"), 0, true);
?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0, true);
?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_info_update'))) {?>
                                <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_info_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_info_update');?>

                                <!--product_info_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value))) {?>
                            <div id="options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-options ty-group-block">
                                <div class="ty-group-block__arrow">
                                    <span class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                                </div>
                                <bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi>
                            </div>
                            <?php }?>
                        </td>

                        <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"ty-sub-price"), 0, true);
?>
                        <!--price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>

                        <td class="ty-cart-content__product-elem ty-cart-content__qty <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?> quantity-disabled<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value == true && $_smarty_tpl->tpl_vars['cart']->value['amount'] != 1) {?>
                                <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");?>
                            <?php }?>

                            <div class="quantity cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?> changer<?php }?>" id="quantity_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][extra][exclude_from_calculate]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>

                                <label for="amount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"></label>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>

                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                                        <div class="ty-center ty-value-changer cm-value-changer">
                                        <a class="cm-increase ty-value-changer__increase">&#43;</a>
                                    <?php }?>
                                    <input type="text" size="3" id="amount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="ty-value-changer__input cm-amount cm-value-decimal"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step'] > 1) {?> data-ca-step="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-min-qty="<?php if (!$_smarty_tpl->tpl_vars['product']->value['min_qty']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_minimal_qty']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['min_qty'], ENT_QUOTES, 'UTF-8');
}?>" />
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                                        <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                                        </div>
                                    <?php }?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                    <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y") {?>
                                    <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][is_edp]" value="Y" />
                                <?php }?>
                            <!--quantity_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                        </td>

                        <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'span_id'=>"product_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"price"), 0, true);
?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A") {?>
                                <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][price]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['base_price'], ENT_QUOTES, 'UTF-8');?>
" />
                            <?php }?>
                        <!--price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
                    </tr>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:items_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:extra_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:extra_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:extra_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </tbody>
    </table>
<!--cart_items--></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("cart_items"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cartbox')), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/cart_items.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/cart_items.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('default_minimal_qty', 1);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cartbox", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
    <?php if (floatval($_smarty_tpl->tpl_vars['cart']->value['coupons'])) {?><input type="hidden" name="c_id" value="" /><?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:form_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:form_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:form_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<div id="cart_items">
    <table class="ty-cart-content ty-table">

    <?php $_smarty_tpl->_assignInScope('prods', false);?>

    <thead>
        <tr>
            <th class="ty-cart-content__title ty-left"><?php echo $_smarty_tpl->__("product");?>
</th>
            <th class="ty-cart-content__title ty-left">&nbsp;</th>
            <th class="ty-cart-content__title ty-right"><?php echo $_smarty_tpl->__("unit_price");?>
</th>
            <th class="ty-cart-content__title quantity-cell"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th class="ty-cart-content__title ty-right"><?php echo $_smarty_tpl->__("total_price");?>
</th>
        </tr>
    </thead>

    <tbody>
    <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_products']->value, 'product', false, 'key', 'cart_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['product']->value['object_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value ?? null : $tmp));?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:items_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:items_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']) {?>
                    <tr>
                        <td class="ty-cart-content__product-elem ty-cart-content__image-block">
                            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "cart" || $_smarty_tpl->tpl_vars['show_images']->value) {?>
                                <div class="ty-cart-content__image cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_icon"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['key']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, true);
?></a>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <!--product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                            <?php }?>
                        </td>

                        <td class="ty-cart-content__product-elem ty-cart-content__description" style="width: 50%;">
                            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-cart-content__product-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-cart-content__product-delete ty-delete-big" href="<?php echo htmlspecialchars((string) fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" title="<?php echo $_smarty_tpl->__("remove");?>
">&nbsp;<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-delete-big__icon"),$_smarty_tpl);?>
</a><?php }?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="ty-cart-content__sku ty-sku cm-hidden-wrapper<?php if (!$_smarty_tpl->tpl_vars['product']->value['product_code']) {?> hidden<?php }?>" id="sku_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo $_smarty_tpl->__("sku");?>
: <span class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_code_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
<!--product_code_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
                                </div>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                                        <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 ty-cart-content__options" id="options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <input type="hidden" name="no_cache" value="no_cache" />
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'product'=>$_smarty_tpl->tpl_vars['product']->value,'name'=>"cart_products",'id'=>$_smarty_tpl->tpl_vars['key']->value,'location'=>"cart",'disable_ids'=>$_smarty_tpl->tpl_vars['disable_ids']->value,'form_name'=>"checkout_form"), 0, true);
?>
                                        <!--options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                    <?php }?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php $_smarty_tpl->_assignInScope('name', "product_options_".((string)$_smarty_tpl->tpl_vars['key']->value));?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value, null, null);?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_info_update", null, null);?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                        <strong><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span></strong>
                                    <?php } elseif (floatval($_smarty_tpl->tpl_vars['product']->value['discount']) || ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal")) {?>
                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?>
                                            <?php $_smarty_tpl->_assignInScope('price_info_title', $_smarty_tpl->__("discount"));?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('price_info_title', $_smarty_tpl->__("taxes"));?>
                                        <?php }?>
                                        <p><a data-ca-target-id="discount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
</a></p>

                                        <div class="ty-group-block hidden" id="discount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <table class="ty-cart-content__more-info ty-table">
                                                <thead>
                                                    <tr>
                                                        <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("price");?>
</th>
                                                        <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("discount");?>
</th><?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?><th><?php echo $_smarty_tpl->__("tax");?>
</th><?php }?>
                                                        <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price'],'span_id'=>"original_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td>
                                                        <td class="ty-center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount'],'span_id'=>"discount_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td><?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?><td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_summary']['total'],'span_id'=>"tax_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td><?php }?>
                                                        <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('span_id'=>"product_subtotal_2_".((string)$_smarty_tpl->tpl_vars['key']->value),'value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'class'=>"none"), 0, true);
?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0, true);
?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_info_update'))) {?>
                                <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_info_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_info_update');?>

                                <!--product_info_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value))) {?>
                            <div id="options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-options ty-group-block">
                                <div class="ty-group-block__arrow">
                                    <span class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                                </div>
                                <bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi>
                            </div>
                            <?php }?>
                        </td>

                        <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"ty-sub-price"), 0, true);
?>
                        <!--price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>

                        <td class="ty-cart-content__product-elem ty-cart-content__qty <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?> quantity-disabled<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value == true && $_smarty_tpl->tpl_vars['cart']->value['amount'] != 1) {?>
                                <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");?>
                            <?php }?>

                            <div class="quantity cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?> changer<?php }?>" id="quantity_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][extra][exclude_from_calculate]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>

                                <label for="amount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"></label>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>

                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                                        <div class="ty-center ty-value-changer cm-value-changer">
                                        <a class="cm-increase ty-value-changer__increase">&#43;</a>
                                    <?php }?>
                                    <input type="text" size="3" id="amount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="ty-value-changer__input cm-amount cm-value-decimal"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step'] > 1) {?> data-ca-step="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-min-qty="<?php if (!$_smarty_tpl->tpl_vars['product']->value['min_qty']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_minimal_qty']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['min_qty'], ENT_QUOTES, 'UTF-8');
}?>" />
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                                        <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                                        </div>
                                    <?php }?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                    <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y") {?>
                                    <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][is_edp]" value="Y" />
                                <?php }?>
                            <!--quantity_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                        </td>

                        <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'span_id'=>"product_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"price"), 0, true);
?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A") {?>
                                <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][price]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['base_price'], ENT_QUOTES, 'UTF-8');?>
" />
                            <?php }?>
                        <!--price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
                    </tr>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:items_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:extra_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:extra_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:extra_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </tbody>
    </table>
<!--cart_items--></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("cart_items"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cartbox')), 0, true);
}
}
}
