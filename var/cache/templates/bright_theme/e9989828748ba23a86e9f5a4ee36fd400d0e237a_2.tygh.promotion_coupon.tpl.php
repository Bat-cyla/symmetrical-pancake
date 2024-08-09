<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:16
  from '/app/www/design/themes/responsive/templates/views/checkout/components/promotion_coupon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eec977913_77924536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9989828748ba23a86e9f5a4ee36fd400d0e237a' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/promotion_coupon.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/go.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
    'tygh:views/checkout/components/applied_promotions.tpl' => 2,
  ),
),false)) {
function content_66b49eec977913_77924536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('promo_code','promo_code','apply','apply','coupon','promo_code','promo_code','apply','apply','coupon'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (fn_display_promotion_input_field($_smarty_tpl->tpl_vars['cart']->value)) {?>
<div>
    <form class="cm-ajax cm-ajax-force cm-ajax-full-render" name="coupon_code_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="coupon_code_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="checkout*,cart_status*,cart_items,payment-methods,litecheckout_form" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:discount_coupons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:discount_coupons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ty-discount-coupon__control-group ty-input-append">
                <label for="coupon_field<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-required"><?php echo $_smarty_tpl->__("promo_code");?>
</label>
                <input type="text" class="ty-input-text cm-hint" id="coupon_field<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" name="coupon_code" size="40" value="<?php echo $_smarty_tpl->__("promo_code");?>
" />
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.apply_coupon",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0, false);
?>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:discount_coupons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </form>
</div>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:applied_discount_coupons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:applied_discount_coupons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "promotion_info", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:applied_coupons_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:applied_coupons_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['coupons'], 'coupon', false, 'coupon_code');
$_smarty_tpl->tpl_vars['coupon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coupon_code']->value => $_smarty_tpl->tpl_vars['coupon']->value) {
$_smarty_tpl->tpl_vars['coupon']->do_else = false;
?>
            <li class="ty-coupons__item">
                <?php echo $_smarty_tpl->__("coupon");?>
 "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['coupon_code']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php $_smarty_tpl->_assignInScope('_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                <?php $_smarty_tpl->_assignInScope('coupon_code', rawurlencode((string)$_smarty_tpl->tpl_vars['coupon_code']->value));?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_coupon?coupon_code=".((string)$_smarty_tpl->tpl_vars['coupon_code']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_role'=>"delete",'but_meta'=>"ty-coupons__item-delete cm-ajax cm-ajax-full-render",'but_target_id'=>"checkout*,cart_status*,cart_items,litecheckout_form"), 0, true);
?>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['applied_promotions']) {?>
                <li class="ty-coupons__item">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/applied_promotions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </li>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:applied_coupons_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'promotion_info'))) {?>
        <ul class="ty-coupons__list ty-discount-info">
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['has_coupons']) {?>
                <li class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></li>
            <?php }?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'promotion_info');?>

        </ul>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:applied_discount_coupons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/promotion_coupon.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/promotion_coupon.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (fn_display_promotion_input_field($_smarty_tpl->tpl_vars['cart']->value)) {?>
<div>
    <form class="cm-ajax cm-ajax-force cm-ajax-full-render" name="coupon_code_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="coupon_code_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="checkout*,cart_status*,cart_items,payment-methods,litecheckout_form" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:discount_coupons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:discount_coupons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ty-discount-coupon__control-group ty-input-append">
                <label for="coupon_field<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-required"><?php echo $_smarty_tpl->__("promo_code");?>
</label>
                <input type="text" class="ty-input-text cm-hint" id="coupon_field<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" name="coupon_code" size="40" value="<?php echo $_smarty_tpl->__("promo_code");?>
" />
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.apply_coupon",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0, true);
?>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:discount_coupons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </form>
</div>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:applied_discount_coupons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:applied_discount_coupons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "promotion_info", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:applied_coupons_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:applied_coupons_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['coupons'], 'coupon', false, 'coupon_code');
$_smarty_tpl->tpl_vars['coupon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coupon_code']->value => $_smarty_tpl->tpl_vars['coupon']->value) {
$_smarty_tpl->tpl_vars['coupon']->do_else = false;
?>
            <li class="ty-coupons__item">
                <?php echo $_smarty_tpl->__("coupon");?>
 "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['coupon_code']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php $_smarty_tpl->_assignInScope('_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                <?php $_smarty_tpl->_assignInScope('coupon_code', rawurlencode((string)$_smarty_tpl->tpl_vars['coupon_code']->value));?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_coupon?coupon_code=".((string)$_smarty_tpl->tpl_vars['coupon_code']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_role'=>"delete",'but_meta'=>"ty-coupons__item-delete cm-ajax cm-ajax-full-render",'but_target_id'=>"checkout*,cart_status*,cart_items,litecheckout_form"), 0, true);
?>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['applied_promotions']) {?>
                <li class="ty-coupons__item">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/applied_promotions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </li>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:applied_coupons_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'promotion_info'))) {?>
        <ul class="ty-coupons__list ty-discount-info">
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['has_coupons']) {?>
                <li class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></li>
            <?php }?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'promotion_info');?>

        </ul>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:applied_discount_coupons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
