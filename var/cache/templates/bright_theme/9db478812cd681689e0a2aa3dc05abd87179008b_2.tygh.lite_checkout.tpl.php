<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:17
  from '/app/www/design/themes/responsive/templates/blocks/grid_wrappers/lite_checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eed008064_70699067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9db478812cd681689e0a2aa3dc05abd87179008b' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/grid_wrappers/lite_checkout.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/auth/login_form.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:views/checkout/components/final_section.tpl' => 2,
  ),
),false)) {
function content_66b49eed008064_70699067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','checkout','sign_in','checkout'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>
 <?php echo smarty_function_script(array('src'=>"js/tygh/checkout/lite_checkout.js"),$_smarty_tpl);?>
 <?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_selector.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_search.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/search_pickup_points.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <div id="litecheckout_login_block" class="hidden" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
        <div class="ty-login-popup">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"litecheckout_login_block_inner"), 0, false);
?>
        </div>
    </div>
<?php }?>

<div class="litecheckout litecheckout__form" id="litecheckout_form">
    <h1 class="litecheckout__page-title"><?php echo $_smarty_tpl->__("checkout");?>
</h1>
    <div data-ca-lite-checkout-element="form">
        <form name="litecheckout_payments_form"
            id="litecheckout_payments_form"
            action="<?php echo htmlspecialchars((string) fn_url("checkout.place_order"), ENT_QUOTES, 'UTF-8');?>
"
            method="post"
            data-ca-lite-checkout-element="checkout-form"
            data-ca-lite-checkout-ready-for-checkout="false"
            class="litecheckout__payment-methods"
        >
            <input
                type="hidden"
                value="1"
                name="ship_to_another"
                data-ca-lite-checkout-field="ship_to_another"
                data-ca-lite-checkout-auto-save-on-change="true"
            >
            <div
                class="litecheckout__group
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                    bm-block-manager__blocks-place
                <?php }?>"
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                    data-ca-block-manager-blocks-place="true"
                <?php }?>
            ><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "image_verification", null, null);
$_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"checkout"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'image_verification')) {?>
                <div class="litecheckout__group">
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'image_verification');?>

                </div>
            <?php }?>

            <div class="litecheckout__group litecheckout__submit-order" id="litecheckout_final_section">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/final_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_payment_step'=>true,'suffix'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0, false);
?>
            <!--litecheckout_final_section--></div>
        <!--litecheckout_payments_form--></form>
    </div>
<!--litecheckout_form--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/grid_wrappers/lite_checkout.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/grid_wrappers/lite_checkout.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>
 <?php echo smarty_function_script(array('src'=>"js/tygh/checkout/lite_checkout.js"),$_smarty_tpl);?>
 <?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_selector.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_search.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/search_pickup_points.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <div id="litecheckout_login_block" class="hidden" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
        <div class="ty-login-popup">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"litecheckout_login_block_inner"), 0, true);
?>
        </div>
    </div>
<?php }?>

<div class="litecheckout litecheckout__form" id="litecheckout_form">
    <h1 class="litecheckout__page-title"><?php echo $_smarty_tpl->__("checkout");?>
</h1>
    <div data-ca-lite-checkout-element="form">
        <form name="litecheckout_payments_form"
            id="litecheckout_payments_form"
            action="<?php echo htmlspecialchars((string) fn_url("checkout.place_order"), ENT_QUOTES, 'UTF-8');?>
"
            method="post"
            data-ca-lite-checkout-element="checkout-form"
            data-ca-lite-checkout-ready-for-checkout="false"
            class="litecheckout__payment-methods"
        >
            <input
                type="hidden"
                value="1"
                name="ship_to_another"
                data-ca-lite-checkout-field="ship_to_another"
                data-ca-lite-checkout-auto-save-on-change="true"
            >
            <div
                class="litecheckout__group
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                    bm-block-manager__blocks-place
                <?php }?>"
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                    data-ca-block-manager-blocks-place="true"
                <?php }?>
            ><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "image_verification", null, null);
$_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"checkout"), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'image_verification')) {?>
                <div class="litecheckout__group">
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'image_verification');?>

                </div>
            <?php }?>

            <div class="litecheckout__group litecheckout__submit-order" id="litecheckout_final_section">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/final_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_payment_step'=>true,'suffix'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0, true);
?>
            <!--litecheckout_final_section--></div>
        <!--litecheckout_payments_form--></form>
    </div>
<!--litecheckout_form--></div>
<?php }
}
}
