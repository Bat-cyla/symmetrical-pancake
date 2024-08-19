<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:02
  from '/app/www/design/themes/responsive/templates/views/checkout/components/checkout_totals_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbee367c71_49936925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b4415f4ab24288b01010677b49bb83bd754f476' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/checkout_totals_info.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 12,
    'tygh:common/modifier.tpl' => 2,
  ),
),false)) {
function content_66b4bbee367c71_49936925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('subtotal','shipping_cost','including_discount','order_discount','taxes','included','payment_surcharge','subtotal','shipping_cost','including_discount','order_discount','taxes','included','payment_surcharge'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><ul class="ty-cart-statistic ty-statistic-list">
    <li class="ty-cart-statistic__item ty-statistic-list-subtotal">
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("subtotal");?>
</span>
        <span class="ty-cart-statistic__value"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_subtotal']), 0, false);
?></span>
    </li>
    
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:checkout_totals"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:checkout_totals"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_assignInScope('show_shipping_estimation', ($_smarty_tpl->tpl_vars['location']->value != "cart" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['estimate_shipping_cost'] == smarty_modifier_enum("YesNo::YES")));?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping_required'] == true) {?>
            <li class="ty-cart-statistic__item ty-statistic-list-shipping-method">
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {?>
                <span class="ty-cart-statistic__title">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['shipping'], 'shipping', false, 'shipping_id', 'f_shipp', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['total'];
?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] : null)) {?>, <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
                        <span class="ty-nowrap">(<?php echo trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_estimation'));?>
)</span>
                    <?php }?>
                </span>
                <span class="ty-cart-statistic__value"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost']), 0, true);
?></span>
            <?php } elseif ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
                <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("shipping_cost");?>
</span>
                <span class="ty-cart-statistic__value"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_estimation');?>
</span>
            <?php }?>
            </li>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:checkout_totals"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    
    <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['discount']))) {?>
    <li class="ty-cart-statistic__item ty-statistic-list-discount">
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("including_discount");?>
</span>
        <span class="ty-cart-statistic__value discount-price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['discount'])), 0, true);
?></span>
    </li>
    
    <?php }?>

    <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['subtotal_discount']))) {?>
    <li class="ty-cart-statistic__item ty-statistic-list-subtotal-discount">
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("order_discount");?>
</span>
        <span class="ty-cart-statistic__value discount-price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['subtotal_discount'])), 0, true);
?></span>
    </li>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:checkout_discount"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:checkout_discount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:checkout_discount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes']) {?>
    <li class="ty-cart-statistic__item ty-statistic-list-taxes ty-cart-statistic__group">
        <span class="ty-cart-statistic__title ty-cart-statistic_title_main"><?php echo $_smarty_tpl->__("taxes");?>
</span>
    </li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['taxes'], 'tax');
$_smarty_tpl->tpl_vars['tax']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->do_else = false;
?>
    <li class="ty-cart-statistic__item ty-statistic-list-tax">
        <span class="ty-cart-statistic__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->tpl_vars['tax']->value['rate_value'],'mod_type'=>$_smarty_tpl->tpl_vars['tax']->value['rate_type']), 0, true);
if ($_smarty_tpl->tpl_vars['tax']->value['price_includes_tax'] == "Y" && ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] != "Y" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] == "subtotal")) {?>&nbsp;<?php echo $_smarty_tpl->__("included");
}?>)</span>
        <span class="ty-cart-statistic__value"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['tax']->value['tax_subtotal']), 0, true);
?></span>
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'] && !$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
    <li class="ty-cart-statistic__item ty-statistic-list-payment-surcharge" id="payment_surcharge_line">
        <?php $_smarty_tpl->_assignInScope('payment_data', fn_get_payment_method_data($_smarty_tpl->tpl_vars['cart']->value['payment_id']));?>
        <span class="ty-cart-statistic__title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cart']->value['payment_surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['payment_data']->value['payment']) {?>&nbsp;(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment_data']->value['payment'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>:</span>
        <span class="ty-cart-statistic__value"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'],'span_id'=>"payment_surcharge_value"), 0, true);
?></span>
    </li>
    <?php echo smarty_function_math(array('equation'=>"x+y",'x'=>$_smarty_tpl->tpl_vars['cart']->value['total'],'y'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'],'assign'=>"_total"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "_total", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_total']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>
</ul><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/checkout_totals_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/checkout_totals_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><ul class="ty-cart-statistic ty-statistic-list">
    <li class="ty-cart-statistic__item ty-statistic-list-subtotal">
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("subtotal");?>
</span>
        <span class="ty-cart-statistic__value"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_subtotal']), 0, true);
?></span>
    </li>
    
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:checkout_totals"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:checkout_totals"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_assignInScope('show_shipping_estimation', ($_smarty_tpl->tpl_vars['location']->value != "cart" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['estimate_shipping_cost'] == smarty_modifier_enum("YesNo::YES")));?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping_required'] == true) {?>
            <li class="ty-cart-statistic__item ty-statistic-list-shipping-method">
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {?>
                <span class="ty-cart-statistic__title">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['shipping'], 'shipping', false, 'shipping_id', 'f_shipp', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['total'];
?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] : null)) {?>, <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
                        <span class="ty-nowrap">(<?php echo trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_estimation'));?>
)</span>
                    <?php }?>
                </span>
                <span class="ty-cart-statistic__value"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost']), 0, true);
?></span>
            <?php } elseif ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
                <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("shipping_cost");?>
</span>
                <span class="ty-cart-statistic__value"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_estimation');?>
</span>
            <?php }?>
            </li>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:checkout_totals"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    
    <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['discount']))) {?>
    <li class="ty-cart-statistic__item ty-statistic-list-discount">
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("including_discount");?>
</span>
        <span class="ty-cart-statistic__value discount-price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['discount'])), 0, true);
?></span>
    </li>
    
    <?php }?>

    <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['subtotal_discount']))) {?>
    <li class="ty-cart-statistic__item ty-statistic-list-subtotal-discount">
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("order_discount");?>
</span>
        <span class="ty-cart-statistic__value discount-price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['subtotal_discount'])), 0, true);
?></span>
    </li>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:checkout_discount"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:checkout_discount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:checkout_discount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes']) {?>
    <li class="ty-cart-statistic__item ty-statistic-list-taxes ty-cart-statistic__group">
        <span class="ty-cart-statistic__title ty-cart-statistic_title_main"><?php echo $_smarty_tpl->__("taxes");?>
</span>
    </li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['taxes'], 'tax');
$_smarty_tpl->tpl_vars['tax']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->do_else = false;
?>
    <li class="ty-cart-statistic__item ty-statistic-list-tax">
        <span class="ty-cart-statistic__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->tpl_vars['tax']->value['rate_value'],'mod_type'=>$_smarty_tpl->tpl_vars['tax']->value['rate_type']), 0, true);
if ($_smarty_tpl->tpl_vars['tax']->value['price_includes_tax'] == "Y" && ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] != "Y" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] == "subtotal")) {?>&nbsp;<?php echo $_smarty_tpl->__("included");
}?>)</span>
        <span class="ty-cart-statistic__value"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['tax']->value['tax_subtotal']), 0, true);
?></span>
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'] && !$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
    <li class="ty-cart-statistic__item ty-statistic-list-payment-surcharge" id="payment_surcharge_line">
        <?php $_smarty_tpl->_assignInScope('payment_data', fn_get_payment_method_data($_smarty_tpl->tpl_vars['cart']->value['payment_id']));?>
        <span class="ty-cart-statistic__title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cart']->value['payment_surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['payment_data']->value['payment']) {?>&nbsp;(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment_data']->value['payment'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>:</span>
        <span class="ty-cart-statistic__value"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'],'span_id'=>"payment_surcharge_value"), 0, true);
?></span>
    </li>
    <?php echo smarty_function_math(array('equation'=>"x+y",'x'=>$_smarty_tpl->tpl_vars['cart']->value['total'],'y'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'],'assign'=>"_total"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "_total", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_total']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>
</ul><?php }
}
}
