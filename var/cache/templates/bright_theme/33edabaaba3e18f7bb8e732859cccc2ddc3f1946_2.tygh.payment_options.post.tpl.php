<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:02
  from '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/checkout/payment_options.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbee3083a9_43489565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33edabaaba3e18f7bb8e732859cccc2ddc3f1946' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/checkout/payment_options.post.tpl',
      1 => 1722513958,
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
function content_66b4bbee3083a9_43489565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('points_to_use','apply','apply','text_point_in_account','points_lowercase','points_in_use_lowercase','points_to_use','apply','apply','text_point_in_account','points_lowercase','points_in_use_lowercase'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['cart_products']->value && $_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'] && $_smarty_tpl->tpl_vars['user_info']->value['points'] > 0) {?>
<div class="ty-coupons__container">
    <div id="point_payment" class="code-input discount-coupon">
        <form class="cm-ajax" name="point_payment_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <input type="hidden" name="redirect_mode" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="checkout_totals,checkout_steps,litecheckout_form" />
        
        <div class="ty-discount-coupon__control-group ty-input-append ty-inline-block">
            <input type="text" class="ty-input-text ty-valign cm-hint" name="points_to_use" size="40" value="<?php echo $_smarty_tpl->__("points_to_use");?>
" />
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.point_payment",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0, false);
?>
            <input type="submit" class="hidden" name="dispatch[checkout.point_payment]" value="" />
        </div>
        </form>
        <div class="ty-discount-info">
            <span class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
            <span class="ty-reward-points__txt-point"><?php echo $_smarty_tpl->__("text_point_in_account");?>
 <?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['user_info']->value['points']));?>
.</span>
            
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']) {?>
                <?php $_smarty_tpl->_assignInScope('_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {
$_smarty_tpl->_assignInScope('_class', "cm-ajax");
}?>
                <span class="ty-reward-points__points-in-use"><?php echo $_smarty_tpl->__("points_in_use_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
.&nbsp;(<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['cost']), 0, false);
?>)&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout*,cart_status*,subtotal_price_in_points,litecheckout_form"), 0, false);
?></span>
            <?php }?>
        </div>
</div>
    <!--point_payment--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/payment_options.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/payment_options.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart_products']->value && $_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'] && $_smarty_tpl->tpl_vars['user_info']->value['points'] > 0) {?>
<div class="ty-coupons__container">
    <div id="point_payment" class="code-input discount-coupon">
        <form class="cm-ajax" name="point_payment_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <input type="hidden" name="redirect_mode" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="checkout_totals,checkout_steps,litecheckout_form" />
        
        <div class="ty-discount-coupon__control-group ty-input-append ty-inline-block">
            <input type="text" class="ty-input-text ty-valign cm-hint" name="points_to_use" size="40" value="<?php echo $_smarty_tpl->__("points_to_use");?>
" />
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.point_payment",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0, true);
?>
            <input type="submit" class="hidden" name="dispatch[checkout.point_payment]" value="" />
        </div>
        </form>
        <div class="ty-discount-info">
            <span class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
            <span class="ty-reward-points__txt-point"><?php echo $_smarty_tpl->__("text_point_in_account");?>
 <?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['user_info']->value['points']));?>
.</span>
            
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']) {?>
                <?php $_smarty_tpl->_assignInScope('_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {
$_smarty_tpl->_assignInScope('_class', "cm-ajax");
}?>
                <span class="ty-reward-points__points-in-use"><?php echo $_smarty_tpl->__("points_in_use_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
.&nbsp;(<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['cost']), 0, true);
?>)&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout*,cart_status*,subtotal_price_in_points,litecheckout_form"), 0, true);
?></span>
            <?php }?>
        </div>
</div>
    <!--point_payment--></div>
<?php }
}
}
}
