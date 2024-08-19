<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:43
  from '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/checkout/applied_discount_coupons.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e10f5c98d8_83374826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a347ab356154cb8f558fefc4814b3f9cd0d18f2' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/checkout/applied_discount_coupons.post.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/go.tpl' => 2,
    'tygh:common/price.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66b5e10f5c98d8_83374826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('points','points_to_use','apply','apply','text_point_in_account','points_lowercase','points_in_use_lowercase','points','points_to_use','apply','apply','text_point_in_account','points_lowercase','points_in_use_lowercase'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward']) {?>
    <div class="ty-reward-points__info clearfix">
        <span><?php echo $_smarty_tpl->__("points");?>
</span>
        <span class="ty-float-right"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout" && $_smarty_tpl->tpl_vars['cart_products']->value && $_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'] && $_smarty_tpl->tpl_vars['user_info']->value['points'] > 0) {?>
    <form class="cm-ajax cm-ajax-full-render" name="point_payment_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <input type="hidden" name="redirect_mode" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="checkout*,cart_status*,litecheckout_form" />

        <div class="ty-discount-coupon__control-group ty-reward-points__coupon ty-input-append ty-inline-block">
            <input type="text" class="ty-input-text ty-valign cm-hint" name="points_to_use" size="40" value="<?php echo $_smarty_tpl->__("points_to_use");?>
" />
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.point_payment",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0, false);
?>
            <input type="submit" class="hidden" name="dispatch[checkout.point_payment]" value="" />
        </div>
    </form>

    <?php if ($_smarty_tpl->tpl_vars['user_info']->value['points']) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:reward_points"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:reward_points"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ty-discount-info">
                <span class="ty-caret-info">
                    <span class="ty-caret-outer"></span>
                    <span class="ty-caret-inner"></span>
                </span>
                <span class="ty-reward-points__txt-point"><?php echo $_smarty_tpl->__("text_point_in_account");?>
&nbsp;<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['user_info']->value['points']));?>
.</span>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']) {?>
                    <?php $_smarty_tpl->_assignInScope('_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                    <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {
$_smarty_tpl->_assignInScope('_class', "cm-ajax");
}?>
                    <span class="ty-reward-points__points-in-use">
                        <?php echo $_smarty_tpl->__("points_in_use_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
.
                        (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['cost']), 0, false);
?>)
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value)." ",'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout*,cart_status*,subtotal_price_in_points,litecheckout_form"), 0, false);
?>
                    </span>
                <?php }?>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:reward_points"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/applied_discount_coupons.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/applied_discount_coupons.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward']) {?>
    <div class="ty-reward-points__info clearfix">
        <span><?php echo $_smarty_tpl->__("points");?>
</span>
        <span class="ty-float-right"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout" && $_smarty_tpl->tpl_vars['cart_products']->value && $_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'] && $_smarty_tpl->tpl_vars['user_info']->value['points'] > 0) {?>
    <form class="cm-ajax cm-ajax-full-render" name="point_payment_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <input type="hidden" name="redirect_mode" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="checkout*,cart_status*,litecheckout_form" />

        <div class="ty-discount-coupon__control-group ty-reward-points__coupon ty-input-append ty-inline-block">
            <input type="text" class="ty-input-text ty-valign cm-hint" name="points_to_use" size="40" value="<?php echo $_smarty_tpl->__("points_to_use");?>
" />
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.point_payment",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0, true);
?>
            <input type="submit" class="hidden" name="dispatch[checkout.point_payment]" value="" />
        </div>
    </form>

    <?php if ($_smarty_tpl->tpl_vars['user_info']->value['points']) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:reward_points"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:reward_points"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ty-discount-info">
                <span class="ty-caret-info">
                    <span class="ty-caret-outer"></span>
                    <span class="ty-caret-inner"></span>
                </span>
                <span class="ty-reward-points__txt-point"><?php echo $_smarty_tpl->__("text_point_in_account");?>
&nbsp;<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['user_info']->value['points']));?>
.</span>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']) {?>
                    <?php $_smarty_tpl->_assignInScope('_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                    <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {
$_smarty_tpl->_assignInScope('_class', "cm-ajax");
}?>
                    <span class="ty-reward-points__points-in-use">
                        <?php echo $_smarty_tpl->__("points_in_use_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
.
                        (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['cost']), 0, true);
?>)
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value)." ",'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout*,cart_status*,subtotal_price_in_points,litecheckout_form"), 0, true);
?>
                    </span>
                <?php }?>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:reward_points"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
}
}
