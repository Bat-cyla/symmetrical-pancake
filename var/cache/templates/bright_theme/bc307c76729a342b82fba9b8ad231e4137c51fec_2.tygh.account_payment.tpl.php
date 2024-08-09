<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:36:53
  from '/app/www/design/themes/responsive/templates/addons/rus_payments/views/orders/components/payments/account_payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49fc5388fa5_08063050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc307c76729a342b82fba9b8ad231e4137c51fec' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/rus_payments/views/orders/components/payments/account_payment.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/phone.tpl' => 2,
  ),
),false)) {
function content_66b49fc5388fa5_08063050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('address','zip_postal_code','addons.rus_payments.organization_customer','inn_customer','addons.rus_payments.bank_details','address','zip_postal_code','addons.rus_payments.organization_customer','inn_customer','addons.rus_payments.bank_details'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__group">
    <div class="litecheckout__field litecheckout__field--xlarge">
        <input type="text" class="litecheckout__input" name="payment_info[address]" id="address_customer" <?php if ($_smarty_tpl->tpl_vars['account_params']->value['address']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['account_params']->value['address'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>value=""<?php }?> size="20" placeholder=" " />
        <label for="address_customer" class="ty-control-group__title litecheckout__label"><?php echo $_smarty_tpl->__("address");?>
</label>
    </div>

    <div class="litecheckout__field litecheckout__field--xsmall">
        <input type="text" class="litecheckout__input" name="payment_info[zip_postal_code]" id="zip_postal_code" <?php if ($_smarty_tpl->tpl_vars['account_params']->value['zip_postal_code']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['account_params']->value['zip_postal_code'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>value=""<?php }?> size="6" placeholder=" " />
        <label for="zip_postal_code" class="ty-control-group__title litecheckout__label"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checkout'=>true,'id'=>"phone_customer",'name'=>"payment_info[phone]",'value'=>$_smarty_tpl->tpl_vars['account_params']->value['phone'] ? $_smarty_tpl->tpl_vars['account_params']->value['phone'] : '','control_group_class'=>"litecheckout__field--small",'width'=>"full"), 0, false);
?>

    <div class="litecheckout__field litecheckout__field--small">
        <input type="text" class="litecheckout__input" name="payment_info[organization_customer]" id="organization_customer" <?php if ($_smarty_tpl->tpl_vars['account_params']->value['organization_customer']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['account_params']->value['organization_customer'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>value=""<?php }?> size="20" placeholder=" " />
        <label for="organization_customer" class="ty-control-group__title litecheckout__label"><?php echo $_smarty_tpl->__("addons.rus_payments.organization_customer");?>
</label>
    </div>

    <div class="litecheckout__field litecheckout__field--small">
        <input type="text" class="litecheckout__input" name="payment_info[inn_customer]" id="inn_customer" <?php if ($_smarty_tpl->tpl_vars['account_params']->value['inn_customer']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['account_params']->value['inn_customer'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>value=""<?php }?> size="20" maxlength="12" placeholder=" " />
        <label for="inn_customer" class="ty-control-group__title litecheckout__label"><?php echo $_smarty_tpl->__("inn_customer");?>
</label>
    </div>

    <div class="litecheckout__field">
        <textarea id="bank_details" size="35"  cols="30" rows="5" name="payment_info[bank_details]" value="" class="ty-input-textarea cm-autocomplete-off litecheckout__input litecheckout__input--textarea" placeholder=" "><?php if ($_smarty_tpl->tpl_vars['account_params']->value['bank_details']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['account_params']->value['bank_details'], ENT_QUOTES, 'UTF-8');
}?></textarea>
        <label for="bank_details" class="ty-control-group__title litecheckout__label"><?php echo $_smarty_tpl->__("addons.rus_payments.bank_details");?>
</label>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_payments/views/orders/components/payments/account_payment.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_payments/views/orders/components/payments/account_payment.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__group">
    <div class="litecheckout__field litecheckout__field--xlarge">
        <input type="text" class="litecheckout__input" name="payment_info[address]" id="address_customer" <?php if ($_smarty_tpl->tpl_vars['account_params']->value['address']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['account_params']->value['address'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>value=""<?php }?> size="20" placeholder=" " />
        <label for="address_customer" class="ty-control-group__title litecheckout__label"><?php echo $_smarty_tpl->__("address");?>
</label>
    </div>

    <div class="litecheckout__field litecheckout__field--xsmall">
        <input type="text" class="litecheckout__input" name="payment_info[zip_postal_code]" id="zip_postal_code" <?php if ($_smarty_tpl->tpl_vars['account_params']->value['zip_postal_code']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['account_params']->value['zip_postal_code'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>value=""<?php }?> size="6" placeholder=" " />
        <label for="zip_postal_code" class="ty-control-group__title litecheckout__label"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checkout'=>true,'id'=>"phone_customer",'name'=>"payment_info[phone]",'value'=>$_smarty_tpl->tpl_vars['account_params']->value['phone'] ? $_smarty_tpl->tpl_vars['account_params']->value['phone'] : '','control_group_class'=>"litecheckout__field--small",'width'=>"full"), 0, true);
?>

    <div class="litecheckout__field litecheckout__field--small">
        <input type="text" class="litecheckout__input" name="payment_info[organization_customer]" id="organization_customer" <?php if ($_smarty_tpl->tpl_vars['account_params']->value['organization_customer']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['account_params']->value['organization_customer'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>value=""<?php }?> size="20" placeholder=" " />
        <label for="organization_customer" class="ty-control-group__title litecheckout__label"><?php echo $_smarty_tpl->__("addons.rus_payments.organization_customer");?>
</label>
    </div>

    <div class="litecheckout__field litecheckout__field--small">
        <input type="text" class="litecheckout__input" name="payment_info[inn_customer]" id="inn_customer" <?php if ($_smarty_tpl->tpl_vars['account_params']->value['inn_customer']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['account_params']->value['inn_customer'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>value=""<?php }?> size="20" maxlength="12" placeholder=" " />
        <label for="inn_customer" class="ty-control-group__title litecheckout__label"><?php echo $_smarty_tpl->__("inn_customer");?>
</label>
    </div>

    <div class="litecheckout__field">
        <textarea id="bank_details" size="35"  cols="30" rows="5" name="payment_info[bank_details]" value="" class="ty-input-textarea cm-autocomplete-off litecheckout__input litecheckout__input--textarea" placeholder=" "><?php if ($_smarty_tpl->tpl_vars['account_params']->value['bank_details']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['account_params']->value['bank_details'], ENT_QUOTES, 'UTF-8');
}?></textarea>
        <label for="bank_details" class="ty-control-group__title litecheckout__label"><?php echo $_smarty_tpl->__("addons.rus_payments.bank_details");?>
</label>
    </div>
</div>
<?php }
}
}
