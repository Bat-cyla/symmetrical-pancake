<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:15
  from '/app/www/design/themes/responsive/templates/views/checkout/components/customer/billing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eebe4a5b3_19434112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33260a6139c72c08c7d4191ceb18bf0147ed27c7' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/customer/billing.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
    'tygh:views/checkout/components/profile_fields.tpl' => 2,
  ),
),false)) {
function content_66b49eebe4a5b3_19434112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_billing_address_is_different_from_shipping','text_billing_address_is_different_from_shipping'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="litecheckout__group" id="litecheckout_use_billing_address_form">
    <div class="litecheckout__item" style="width: 100%;">
        <?php $_smarty_tpl->_assignInScope('use_billing_address', (($tmp = $_smarty_tpl->tpl_vars['user_data']->value['ship_to_another'] ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

        <div class="ty-profile-field__switch ty-address-switch clearfix litecheckout__address-switch">
            <div class="ty-profile-field__switch-label"><label for="sw_litecheckout_step_billing_address_suffix_no"><?php echo $_smarty_tpl->__("text_billing_address_is_different_from_shipping");?>
</label></div>
            <div class="ty-profile-field__switch-actions">
                <input
                    type="hidden"
                    value="0"
                    name="ship_to_another"
                    data-ca-lite-checkout-field="ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    type="hidden"
                    value="0"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    id="sw_litecheckout_step_billing_address_suffix_no"
                    type="checkbox"
                    value="1"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                    <?php if ($_smarty_tpl->tpl_vars['use_billing_address']->value) {?>checked="checked"<?php }?>
                    class="checkbox cm-switch-availability cm-switch-visibility"
                >
            </div>
        </div>
    </div>
<!--litecheckout_use_billing_address_form--></div>

<div class="litecheckout__container" id="litecheckout_billing_address_wrapper">
    <div class="<?php if (!$_smarty_tpl->tpl_vars['use_billing_address']->value) {?>hidden<?php }?>" id="litecheckout_step_billing_address">
        <div class="litecheckout__group">
            <input
                type="hidden"
                value="1"
                name="ship_to_another"
                data-ca-lite-checkout-field="ship_to_another"
                data-ca-lite-checkout-auto-save-on-change="true"
                <?php if (!$_smarty_tpl->tpl_vars['use_billing_address']->value) {?>disabled="disabled"<?php }?>
            >
            <?php if ($_smarty_tpl->tpl_vars['use_billing_address']->value) {?>
                <?php $_smarty_tpl->_assignInScope('profile_fields_data', $_smarty_tpl->tpl_vars['user_data']->value);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('profile_fields_data', (($tmp = $_smarty_tpl->tpl_vars['current_user_data']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value ?? null : $tmp));?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'disable_all_fields'=>!$_smarty_tpl->tpl_vars['use_billing_address']->value,'user_data'=>$_smarty_tpl->tpl_vars['profile_fields_data']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS"),'exclude'=>array("customer_notes")), 0, false);
?>
        </div>
    <!--litecheckout_step_billing_address--></div>
<!--litecheckout_billing_address_wrapper--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/billing.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/billing.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div class="litecheckout__group" id="litecheckout_use_billing_address_form">
    <div class="litecheckout__item" style="width: 100%;">
        <?php $_smarty_tpl->_assignInScope('use_billing_address', (($tmp = $_smarty_tpl->tpl_vars['user_data']->value['ship_to_another'] ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

        <div class="ty-profile-field__switch ty-address-switch clearfix litecheckout__address-switch">
            <div class="ty-profile-field__switch-label"><label for="sw_litecheckout_step_billing_address_suffix_no"><?php echo $_smarty_tpl->__("text_billing_address_is_different_from_shipping");?>
</label></div>
            <div class="ty-profile-field__switch-actions">
                <input
                    type="hidden"
                    value="0"
                    name="ship_to_another"
                    data-ca-lite-checkout-field="ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    type="hidden"
                    value="0"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    id="sw_litecheckout_step_billing_address_suffix_no"
                    type="checkbox"
                    value="1"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                    <?php if ($_smarty_tpl->tpl_vars['use_billing_address']->value) {?>checked="checked"<?php }?>
                    class="checkbox cm-switch-availability cm-switch-visibility"
                >
            </div>
        </div>
    </div>
<!--litecheckout_use_billing_address_form--></div>

<div class="litecheckout__container" id="litecheckout_billing_address_wrapper">
    <div class="<?php if (!$_smarty_tpl->tpl_vars['use_billing_address']->value) {?>hidden<?php }?>" id="litecheckout_step_billing_address">
        <div class="litecheckout__group">
            <input
                type="hidden"
                value="1"
                name="ship_to_another"
                data-ca-lite-checkout-field="ship_to_another"
                data-ca-lite-checkout-auto-save-on-change="true"
                <?php if (!$_smarty_tpl->tpl_vars['use_billing_address']->value) {?>disabled="disabled"<?php }?>
            >
            <?php if ($_smarty_tpl->tpl_vars['use_billing_address']->value) {?>
                <?php $_smarty_tpl->_assignInScope('profile_fields_data', $_smarty_tpl->tpl_vars['user_data']->value);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('profile_fields_data', (($tmp = $_smarty_tpl->tpl_vars['current_user_data']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value ?? null : $tmp));?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'disable_all_fields'=>!$_smarty_tpl->tpl_vars['use_billing_address']->value,'user_data'=>$_smarty_tpl->tpl_vars['profile_fields_data']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS"),'exclude'=>array("customer_notes")), 0, true);
?>
        </div>
    <!--litecheckout_step_billing_address--></div>
<!--litecheckout_billing_address_wrapper--></div>
<?php }
}
}
