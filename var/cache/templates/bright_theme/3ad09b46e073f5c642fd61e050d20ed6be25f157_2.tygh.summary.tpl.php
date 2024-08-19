<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:42
  from '/app/www/design/themes/responsive/templates/blocks/checkout/summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e10ee42032_68447022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ad09b46e073f5c642fd61e050d20ed6be25f157' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/checkout/summary.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 14,
    'tygh:common/modifier.tpl' => 2,
    'tygh:views/checkout/components/promotion_coupon.tpl' => 2,
  ),
),false)) {
function content_66b5e10ee42032_68447022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('items','shipping','including_discount','order_discount','payment_surcharge','taxes','included','order_total','items','shipping','including_discount','order_discount','payment_surcharge','taxes','included','order_total'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-checkout-summary" id="checkout_info_summary_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
    <table class="ty-checkout-summary__block">
        <tbody>
            <tr>
                <td class="ty-checkout-summary__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['amount'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("items");?>
</td>
                <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="items">
                    <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_subtotal']), 0, false);
?></span>
                </td>
            </tr>

            <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed'] && $_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'] && $_smarty_tpl->tpl_vars['cart']->value['shipping_required'] && $_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost']) {?>
            <tr>
                <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->__("shipping");?>
</td>
                <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="shipping">
                    <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost']), 0, true);
?></span>
                </td>
            </tr>
            <?php }?>

            <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['discount']))) {?>
                <tr class="ty-checkout-summary__order_discount">
                    <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->__("including_discount");?>
</td>
                    <td class="ty-checkout-summary__item ty-right discount-price">
                        <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['discount'])), 0, true);
?></span>
                    </td>
                </tr>
            <?php }?>

            <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['subtotal_discount']))) {?>
                <tr class="ty-checkout-summary__order_discount">
                    <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->__("order_discount");?>
</td>
                    <td class="ty-checkout-summary__item ty-right discount-price" data-ct-checkout-summary="order-discount">
                        <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['subtotal_discount'])), 0, true);
?></span>
                    </td>
                </tr>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:discount_summary"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:discount_summary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:discount_summary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
            

            <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'] && !$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
                <tr>
                    <td class="ty-checkout-summary__item"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cart']->value['payment_surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="payment-surcharge">
                        <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge']), 0, true);
?></span>
                    </td>
                </tr>
                <?php echo smarty_function_math(array('equation'=>"x+y",'x'=>$_smarty_tpl->tpl_vars['cart']->value['total'],'y'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'],'assign'=>"_total"),$_smarty_tpl);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes']) {?>
                <tr>
                    <td class="ty-checkout-summary__item ty-checkout-summary__taxes"><?php echo $_smarty_tpl->__("taxes");?>
</td>
                    <td class="ty-checkout-summary__item"></td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['taxes'], 'tax');
$_smarty_tpl->tpl_vars['tax']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->do_else = false;
?>
                    <tr>
                        <td class="ty-checkout-summary__item" data-ct-checkout-summary="tax-name <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['description'], ENT_QUOTES, 'UTF-8');?>
">
                            <div class="ty-checkout-summary__taxes-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['description'], ENT_QUOTES, 'UTF-8');?>
 <bdi>(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->tpl_vars['tax']->value['rate_value'],'mod_type'=>$_smarty_tpl->tpl_vars['tax']->value['rate_type']), 0, true);
if ($_smarty_tpl->tpl_vars['tax']->value['price_includes_tax'] == "Y" && ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] != "Y" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] == "subtotal")) {?> <?php echo $_smarty_tpl->__("included");?>
</bdi><?php }?>)</div>
                        </td>
                        <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="taxes">
                            <span class="ty-checkout-summary__taxes-amount"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['tax']->value['tax_subtotal']), 0, true);
?></span>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:summary"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:summary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:summary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <tr>
                <td colspan="2" class="ty-checkout-summary__item">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/promotion_coupon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <th class="ty-checkout-summary__total" colspan="2" data-ct-checkout-summary="order-total">
                    <div>
                        <?php echo $_smarty_tpl->__("order_total");?>

                        <span class="ty-checkout-summary__total-sum"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['_total']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] ?? null : $tmp)), 0, true);
?></span>
                    </div>
                </th>
            </tr>
        </tbody>
    </table>
<!--checkout_info_summary_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/checkout/summary.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/checkout/summary.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-checkout-summary" id="checkout_info_summary_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
    <table class="ty-checkout-summary__block">
        <tbody>
            <tr>
                <td class="ty-checkout-summary__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['amount'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("items");?>
</td>
                <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="items">
                    <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_subtotal']), 0, true);
?></span>
                </td>
            </tr>

            <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed'] && $_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'] && $_smarty_tpl->tpl_vars['cart']->value['shipping_required'] && $_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost']) {?>
            <tr>
                <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->__("shipping");?>
</td>
                <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="shipping">
                    <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost']), 0, true);
?></span>
                </td>
            </tr>
            <?php }?>

            <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['discount']))) {?>
                <tr class="ty-checkout-summary__order_discount">
                    <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->__("including_discount");?>
</td>
                    <td class="ty-checkout-summary__item ty-right discount-price">
                        <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['discount'])), 0, true);
?></span>
                    </td>
                </tr>
            <?php }?>

            <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['subtotal_discount']))) {?>
                <tr class="ty-checkout-summary__order_discount">
                    <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->__("order_discount");?>
</td>
                    <td class="ty-checkout-summary__item ty-right discount-price" data-ct-checkout-summary="order-discount">
                        <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['subtotal_discount'])), 0, true);
?></span>
                    </td>
                </tr>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:discount_summary"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:discount_summary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:discount_summary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
            

            <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'] && !$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
                <tr>
                    <td class="ty-checkout-summary__item"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cart']->value['payment_surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="payment-surcharge">
                        <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge']), 0, true);
?></span>
                    </td>
                </tr>
                <?php echo smarty_function_math(array('equation'=>"x+y",'x'=>$_smarty_tpl->tpl_vars['cart']->value['total'],'y'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'],'assign'=>"_total"),$_smarty_tpl);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes']) {?>
                <tr>
                    <td class="ty-checkout-summary__item ty-checkout-summary__taxes"><?php echo $_smarty_tpl->__("taxes");?>
</td>
                    <td class="ty-checkout-summary__item"></td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['taxes'], 'tax');
$_smarty_tpl->tpl_vars['tax']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->do_else = false;
?>
                    <tr>
                        <td class="ty-checkout-summary__item" data-ct-checkout-summary="tax-name <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['description'], ENT_QUOTES, 'UTF-8');?>
">
                            <div class="ty-checkout-summary__taxes-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['description'], ENT_QUOTES, 'UTF-8');?>
 <bdi>(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->tpl_vars['tax']->value['rate_value'],'mod_type'=>$_smarty_tpl->tpl_vars['tax']->value['rate_type']), 0, true);
if ($_smarty_tpl->tpl_vars['tax']->value['price_includes_tax'] == "Y" && ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] != "Y" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] == "subtotal")) {?> <?php echo $_smarty_tpl->__("included");?>
</bdi><?php }?>)</div>
                        </td>
                        <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="taxes">
                            <span class="ty-checkout-summary__taxes-amount"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['tax']->value['tax_subtotal']), 0, true);
?></span>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:summary"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:summary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:summary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <tr>
                <td colspan="2" class="ty-checkout-summary__item">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/promotion_coupon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <th class="ty-checkout-summary__total" colspan="2" data-ct-checkout-summary="order-total">
                    <div>
                        <?php echo $_smarty_tpl->__("order_total");?>

                        <span class="ty-checkout-summary__total-sum"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['_total']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] ?? null : $tmp)), 0, true);
?></span>
                    </div>
                </th>
            </tr>
        </tbody>
    </table>
<!--checkout_info_summary_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
