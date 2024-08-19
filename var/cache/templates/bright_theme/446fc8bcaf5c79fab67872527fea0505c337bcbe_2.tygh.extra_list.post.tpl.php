<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:01
  from '/app/www/design/themes/responsive/templates/addons/gift_certificates/hooks/checkout/extra_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbedc13a50_93443602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '446fc8bcaf5c79fab67872527fea0505c337bcbe' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/gift_certificates/hooks/checkout/extra_list.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl' => 4,
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/price.tpl' => 16,
    'tygh:common/options_info.tpl' => 2,
  ),
),false)) {
function content_66b4bbedc13a50_93443602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('edit','gift_certificate','remove','gift_certificate','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free_products','remove','sku','price','qty','discount','tax','subtotal','price_summary','free','free','free','edit','gift_certificate','remove','gift_certificate','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free_products','remove','sku','price','qty','discount','tax','subtotal','price_summary','free','free','free'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['cart']->value['gift_certificates']) {?>

<?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['gift_certificates'], 'gift', false, 'gift_key', 'f_gift_certificates', array (
));
$_smarty_tpl->tpl_vars['gift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gift_key']->value => $_smarty_tpl->tpl_vars['gift']->value) {
$_smarty_tpl->tpl_vars['gift']->do_else = false;
$_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['gift']->value['object_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['gift_key']->value ?? null : $tmp));
if (!$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'prods')) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "prods", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
<tr>
    <td class="ty-cart-content__product-elem ty-cart-content__image-block">
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "cart" || $_smarty_tpl->tpl_vars['show_images']->value) {?>
            <div class="ty-cart-content__image cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
                    <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, true);
?>
                    </a>
                    <div class="ty-mtb-xs ty-center"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("edit"),'but_href'=>"gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_role'=>"text"), 0, true);
?></div>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, true);
?>
                <?php }?>
            <!--product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
    </td>

    <td class="ty-cart-content__product-elem ty-cart-content__description" style="width: 50%;">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
            <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-cart-content__product-title">
                <?php echo $_smarty_tpl->__("gift_certificate");?>

            </a>
            <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
                <a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-post ty-delete-big" href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
"  data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" title="<?php echo $_smarty_tpl->__("remove");?>
">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-delete-big__icon"),$_smarty_tpl);?>

                </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value == true && $_smarty_tpl->tpl_vars['cart']->value['amount'] != 1) {?>
                <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");?>
            <?php }?>
        <?php } else { ?>
            <strong><?php echo $_smarty_tpl->__("gift_certificate");?>
</strong>
        <?php }?>
        <div class="ty-control-group">
            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label><span class="ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
        <div class="ty-control-group">
            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label><span class="ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
        <div class="ty-control-group">
            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("amount");?>
:</label><span class="ty-control-group__item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0, true);
?></span>
        </div>
        <div class="ty-control-group">
            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("send_via");?>
:</label><span class="ty-control-group__item"><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via'] == "E") {
echo $_smarty_tpl->__("email");
} else {
echo $_smarty_tpl->__("postal_mail");
}?></span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['gift']->value['products'] && $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y" && !$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>

        <a id="sw_gift_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-cart-content__detailed-link"><?php echo $_smarty_tpl->__("free_products");?>
</a>

        <div id="gift_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden">
            <div class="ty-cart-content-products">
            <div class="ty-caret-info"><span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_products']->value, 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']['certificate'] == $_smarty_tpl->tpl_vars['gift_key']->value) {?>
                <div class="ty-cart-content-products__item">
                    <div>
                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']),70,"...",true);?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value == true) {?>
                            <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");?>
                        <?php }?>
                        <a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-delete-big" href="<?php echo htmlspecialchars((string) fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-delete-big__icon"),$_smarty_tpl);?>
</a>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="ty-cart-content__sku ty-sku">
                                <?php echo $_smarty_tpl->__("sku");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>fn_get_selected_product_options_info($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['product_options']),'fields_prefix'=>"cart_products[".((string)$_smarty_tpl->tpl_vars['key']->value)."][product_options]"), 0, true);
?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][extra][parent][certificate]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
                    </div>
                    <div class="ty-control-group">
                        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("price");?>
</strong>
                        <span class="ty-control-group__item">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price']), 0, true);
?>
                        </span>
                    </div>
                    <div class="ty-control-group">
                        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("qty");?>
</strong>
                        <input type="text" size="3" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text-short" <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y") {?>readonly="readonly"<?php }?> />
                        <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>
                    <div class="ty-control-group">
                        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("discount");?>
</strong>
                        <span class="ty-control-group__item">
                            <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount']), 0, true);
} else { ?>-<?php }?>
                        </span>
                    </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
                    <div class="ty-control-group">
                        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("tax");?>
</strong>
                        <span class="ty-control-group__item">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_summary']['total']), 0, true);
?>
                        </span>
                    </div>
                    <?php }?>
                    <div class="ty-control-group">
                        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("subtotal");?>
</strong>
                        <span class="ty-control-group__item">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal']), 0, true);
?>
                        </span>
                    </div>
                </div>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="ty-control-group ty-float-right">
                <strong><?php echo $_smarty_tpl->__("price_summary");?>
:&nbsp;</strong>
                <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"ty-price"), 0, true);
} else { ?><span class="ty-price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php }?>
    </td>
    <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"ty-sub-price"), 0, true);
} else { ?><span class="ty-price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?>
    <!--price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
    <td class="ty-cart-content__product-elem ty-cart-content__qty">
    </td>
    <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"price"), 0, true);
} else { ?><span class="ty-price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?>
    <!--price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/checkout/extra_list.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/checkout/extra_list.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['gift_certificates']) {?>

<?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['gift_certificates'], 'gift', false, 'gift_key', 'f_gift_certificates', array (
));
$_smarty_tpl->tpl_vars['gift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gift_key']->value => $_smarty_tpl->tpl_vars['gift']->value) {
$_smarty_tpl->tpl_vars['gift']->do_else = false;
$_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['gift']->value['object_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['gift_key']->value ?? null : $tmp));
if (!$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'prods')) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "prods", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
<tr>
    <td class="ty-cart-content__product-elem ty-cart-content__image-block">
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "cart" || $_smarty_tpl->tpl_vars['show_images']->value) {?>
            <div class="ty-cart-content__image cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
                    <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, true);
?>
                    </a>
                    <div class="ty-mtb-xs ty-center"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("edit"),'but_href'=>"gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_role'=>"text"), 0, true);
?></div>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, true);
?>
                <?php }?>
            <!--product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
    </td>

    <td class="ty-cart-content__product-elem ty-cart-content__description" style="width: 50%;">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
            <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-cart-content__product-title">
                <?php echo $_smarty_tpl->__("gift_certificate");?>

            </a>
            <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
                <a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-post ty-delete-big" href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
"  data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" title="<?php echo $_smarty_tpl->__("remove");?>
">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-delete-big__icon"),$_smarty_tpl);?>

                </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value == true && $_smarty_tpl->tpl_vars['cart']->value['amount'] != 1) {?>
                <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");?>
            <?php }?>
        <?php } else { ?>
            <strong><?php echo $_smarty_tpl->__("gift_certificate");?>
</strong>
        <?php }?>
        <div class="ty-control-group">
            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label><span class="ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
        <div class="ty-control-group">
            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label><span class="ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
        <div class="ty-control-group">
            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("amount");?>
:</label><span class="ty-control-group__item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0, true);
?></span>
        </div>
        <div class="ty-control-group">
            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("send_via");?>
:</label><span class="ty-control-group__item"><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via'] == "E") {
echo $_smarty_tpl->__("email");
} else {
echo $_smarty_tpl->__("postal_mail");
}?></span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['gift']->value['products'] && $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y" && !$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>

        <a id="sw_gift_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-cart-content__detailed-link"><?php echo $_smarty_tpl->__("free_products");?>
</a>

        <div id="gift_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden">
            <div class="ty-cart-content-products">
            <div class="ty-caret-info"><span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_products']->value, 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']['certificate'] == $_smarty_tpl->tpl_vars['gift_key']->value) {?>
                <div class="ty-cart-content-products__item">
                    <div>
                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']),70,"...",true);?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value == true) {?>
                            <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");?>
                        <?php }?>
                        <a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-delete-big" href="<?php echo htmlspecialchars((string) fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-delete-big__icon"),$_smarty_tpl);?>
</a>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="ty-cart-content__sku ty-sku">
                                <?php echo $_smarty_tpl->__("sku");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>fn_get_selected_product_options_info($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['product_options']),'fields_prefix'=>"cart_products[".((string)$_smarty_tpl->tpl_vars['key']->value)."][product_options]"), 0, true);
?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][extra][parent][certificate]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
                    </div>
                    <div class="ty-control-group">
                        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("price");?>
</strong>
                        <span class="ty-control-group__item">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price']), 0, true);
?>
                        </span>
                    </div>
                    <div class="ty-control-group">
                        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("qty");?>
</strong>
                        <input type="text" size="3" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text-short" <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y") {?>readonly="readonly"<?php }?> />
                        <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>
                    <div class="ty-control-group">
                        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("discount");?>
</strong>
                        <span class="ty-control-group__item">
                            <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount']), 0, true);
} else { ?>-<?php }?>
                        </span>
                    </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
                    <div class="ty-control-group">
                        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("tax");?>
</strong>
                        <span class="ty-control-group__item">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_summary']['total']), 0, true);
?>
                        </span>
                    </div>
                    <?php }?>
                    <div class="ty-control-group">
                        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("subtotal");?>
</strong>
                        <span class="ty-control-group__item">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal']), 0, true);
?>
                        </span>
                    </div>
                </div>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="ty-control-group ty-float-right">
                <strong><?php echo $_smarty_tpl->__("price_summary");?>
:&nbsp;</strong>
                <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"ty-price"), 0, true);
} else { ?><span class="ty-price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php }?>
    </td>
    <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"ty-sub-price"), 0, true);
} else { ?><span class="ty-price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?>
    <!--price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
    <td class="ty-cart-content__product-elem ty-cart-content__qty">
    </td>
    <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"price"), 0, true);
} else { ?><span class="ty-price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?>
    <!--price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
}
}
