<?php
/* Smarty version 4.1.1, created on 2024-08-16 15:42:12
  from '/app/www/design/themes/responsive/templates/views/checkout/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bf4924062481_81370470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a794c3ca18735e796d5e7af52838df5cd8f9017' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/checkout.tpl',
      1 => 1723811646,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/auth/login_form.tpl' => 2,
    'tygh:views/checkout/components/steps/customer.tpl' => 4,
    'tygh:views/checkout/components/steps/shipping.tpl' => 2,
    'tygh:views/checkout/components/steps/payment.tpl' => 2,
    'tygh:views/checkout/components/final_section.tpl' => 2,
  ),
),false)) {
function content_66bf4924062481_81370470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','sign_in'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>
 <?php echo smarty_function_script(array('src'=>"js/tygh/checkout/lite_checkout.js"),$_smarty_tpl);?>
 <?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_selector.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_search.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/search_pickup_points.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('contact_info_section_position', $_smarty_tpl->tpl_vars['profile_field_sections']->value[smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")]["position"]);
$_smarty_tpl->_assignInScope('shipping_section_position', $_smarty_tpl->tpl_vars['profile_field_sections']->value[smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")]["position"]);
$_smarty_tpl->_assignInScope('show_customer_fields_first', $_smarty_tpl->tpl_vars['contact_info_section_position']->value < $_smarty_tpl->tpl_vars['shipping_section_position']->value);?>


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
    <h1 class="litecheckout__page-title"><?php echo $_smarty_tpl->__('checkout');?>
</h1>
    <div data-ca-lite-checkout-element="form">
        <form name="litecheckout_payments_form"
              id="litecheckout_payments_form"
              action="<?php echo htmlspecialchars((string) fn_url("checkout.place_order"), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
              data-ca-lite-checkout-element="checkout-form"
              data-ca-lite-checkout-ready-for-checkout="false"
              class="litecheckout__group litecheckout__payment-methods"
        >

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/steps/customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_title'=>$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_information'=>$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_address'=>false,'show_notes'=>false), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/steps/shipping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/steps/customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_title'=>!$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_information'=>!$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_address'=>true,'show_notes'=>true), 0, true);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/steps/payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="litecheckout__group litecheckout__submit-order" id="litecheckout_final_section">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/final_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_payment_step'=>true,'suffix'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0, false);
?>
            </div>
        <!--litecheckout_payments_form--></form>
    </div>
<!--litecheckout_form--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/checkout.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/checkout.tpl"),$_smarty_tpl);?>
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


<?php $_smarty_tpl->_assignInScope('contact_info_section_position', $_smarty_tpl->tpl_vars['profile_field_sections']->value[smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")]["position"]);
$_smarty_tpl->_assignInScope('shipping_section_position', $_smarty_tpl->tpl_vars['profile_field_sections']->value[smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")]["position"]);
$_smarty_tpl->_assignInScope('show_customer_fields_first', $_smarty_tpl->tpl_vars['contact_info_section_position']->value < $_smarty_tpl->tpl_vars['shipping_section_position']->value);?>


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
    <h1 class="litecheckout__page-title"><?php echo $_smarty_tpl->__('checkout');?>
</h1>
    <div data-ca-lite-checkout-element="form">
        <form name="litecheckout_payments_form"
              id="litecheckout_payments_form"
              action="<?php echo htmlspecialchars((string) fn_url("checkout.place_order"), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
              data-ca-lite-checkout-element="checkout-form"
              data-ca-lite-checkout-ready-for-checkout="false"
              class="litecheckout__group litecheckout__payment-methods"
        >

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/steps/customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_title'=>$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_information'=>$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_address'=>false,'show_notes'=>false), 0, true);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/steps/shipping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/steps/customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_title'=>!$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_information'=>!$_smarty_tpl->tpl_vars['show_customer_fields_first']->value,'show_address'=>true,'show_notes'=>true), 0, true);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/steps/payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <div class="litecheckout__group litecheckout__submit-order" id="litecheckout_final_section">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/final_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_payment_step'=>true,'suffix'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0, true);
?>
            </div>
        <!--litecheckout_payments_form--></form>
    </div>
<!--litecheckout_form--></div>
<?php }
}
}
