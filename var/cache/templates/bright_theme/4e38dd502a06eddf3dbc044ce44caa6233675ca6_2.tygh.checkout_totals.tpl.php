<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:01
  from '/app/www/design/themes/responsive/templates/views/checkout/components/checkout_totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbedc6a018_02850085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e38dd502a06eddf3dbc044ce44caa6233675ca6' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/checkout_totals.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/shipping_estimation.tpl' => 2,
    'tygh:views/checkout/components/promotion_coupon.tpl' => 2,
    'tygh:views/checkout/components/checkout_totals_info.tpl' => 2,
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_66b4bbedc6a018_02850085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('calculate_shipping_cost','change','calculate','calculate_shipping_cost','total_cost','calculate_shipping_cost','change','calculate','calculate_shipping_cost','total_cost'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['location']->value == "cart" && $_smarty_tpl->tpl_vars['cart']->value['shipping_required'] == true && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['estimate_shipping_cost'] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "shipping_estimation", null, null);?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-flight ty-cart-total__icon-estimation"),$_smarty_tpl);?>
<a id="opener_shipping_estimation_block" class="cm-dialog-opener cm-dialog-auto-size ty-cart-total__a-estimation" data-ca-target-id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
" href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {
echo $_smarty_tpl->__("change");
} else {
echo $_smarty_tpl->__("calculate");
}?></a>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <div class="hidden" id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
">
        <div class="ty-cart-content__estimation">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"popup",'result_ids'=>"shipping_estimation_link"), 0, false);
?>
        </div>
    </div>
<?php }?>
<div class="ty-cart-total">
    <div class="ty-cart-total__wrapper clearfix" id="checkout_totals">
        <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
            <div class="ty-coupons__container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/promotion_coupon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/checkout_totals_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="clearfix"></div>
        <ul class="ty-cart-statistic__total-list">
            <li class="ty-cart-statistic__item ty-cart-statistic__total">
                <span class="ty-cart-statistic__total-title"><?php echo $_smarty_tpl->__("total_cost");?>
</span>
                <span class="ty-cart-statistic__total-value">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = (($tmp = $_smarty_tpl->tpl_vars['_total']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, '_total') ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] ?? null : $tmp),'span_id'=>"cart_total",'class'=>"ty-price"), 0, false);
?>
                </span>
            </li>
        </ul>
    <!--checkout_totals--></div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/checkout_totals.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/checkout_totals.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['location']->value == "cart" && $_smarty_tpl->tpl_vars['cart']->value['shipping_required'] == true && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['estimate_shipping_cost'] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "shipping_estimation", null, null);?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-flight ty-cart-total__icon-estimation"),$_smarty_tpl);?>
<a id="opener_shipping_estimation_block" class="cm-dialog-opener cm-dialog-auto-size ty-cart-total__a-estimation" data-ca-target-id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
" href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {
echo $_smarty_tpl->__("change");
} else {
echo $_smarty_tpl->__("calculate");
}?></a>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <div class="hidden" id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
">
        <div class="ty-cart-content__estimation">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"popup",'result_ids'=>"shipping_estimation_link"), 0, true);
?>
        </div>
    </div>
<?php }?>
<div class="ty-cart-total">
    <div class="ty-cart-total__wrapper clearfix" id="checkout_totals">
        <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
            <div class="ty-coupons__container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/promotion_coupon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/checkout_totals_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <div class="clearfix"></div>
        <ul class="ty-cart-statistic__total-list">
            <li class="ty-cart-statistic__item ty-cart-statistic__total">
                <span class="ty-cart-statistic__total-title"><?php echo $_smarty_tpl->__("total_cost");?>
</span>
                <span class="ty-cart-statistic__total-value">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = (($tmp = $_smarty_tpl->tpl_vars['_total']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, '_total') ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] ?? null : $tmp),'span_id'=>"cart_total",'class'=>"ty-price"), 0, true);
?>
                </span>
            </li>
        </ul>
    <!--checkout_totals--></div>
</div>
<?php }
}
}
