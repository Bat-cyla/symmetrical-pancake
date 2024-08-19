<?php
/* Smarty version 4.1.1, created on 2024-08-14 12:33:57
  from '/app/www/design/themes/responsive/templates/views/checkout/components/payments/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bc7a05b07cb7_32403919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3733db38df406cca3d19374909f8e232b4cb58b5' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/payments/checkout.tpl',
      1 => 1723628017,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66bc7a05b07cb7_32403919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_no_payments_required','checkout_terms_n_conditions_alert','skip_payment','text_no_payments_required','checkout_terms_n_conditions_alert','skip_payment'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__group">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payments"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payments"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
        <div class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">

            <input type="radio"
                   name="selected_payment_method"
                   id="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-target-form="litecheckout_payments_form"
                   data-ca-url="checkout.checkout"
                   data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,litecheckout_terms,checkout*"
                   class="litecheckout__shipping-method__radio cm-select-payment hidden"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_id'] == $_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>checked<?php }?>
            />

            <label id="payments_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   class="litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                   for="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-toggling="payments_form_wrapper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-hide-all-in=".litecheckout__payment-methods"
            >
                <?php if ($_smarty_tpl->tpl_vars['payment']->value['image']) {?>
                    <div class="litecheckout__shipping-method__logo">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id'],'images'=>$_smarty_tpl->tpl_vars['payment']->value['image'],'class'=>"litecheckout__shipping-method__logo-image"), 0, true);
?>
                    </div>
                <?php }?>
                <p class="litecheckout__shipping-method__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</p>
                <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            </label>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <div class="litecheckout__item">
            <p>
                <?php echo $_smarty_tpl->__("text_no_payments_required");?>

            </p>
        </div>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payments"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="litecheckout__group litecheckout__payment-methods">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_id'] != $_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
            <?php continue 1;?>
        <?php }?>
        <div class="litecheckout__group litecheckout__payment-method"
             data-ca-toggling-by="payments_form_wrapper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-hideble="true"
        >
            <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="dispatch" value="checkout.place_order"/>
            <input type="hidden" name="customer_notes" value=""/>

            <?php if ($_smarty_tpl->tpl_vars['order_id']->value) {?>
                <input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <?php }?>

            <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"/>

            <?php if ($_smarty_tpl->tpl_vars['payment']->value['template']) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "payment_template", null, null);?>
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['payment']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('card_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0, true);
?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['payment']->value['instructions']) {?>
                <div class="litecheckout__item litecheckout__payment-instructions">
                    <?php echo $_smarty_tpl->tpl_vars['payment']->value['instructions'];?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['payment']->value['template'] && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'payment_template')) != '') {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'payment_template');?>

            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
            <div class="ty-payment-method-iframe__box">
                <iframe width="100%" height="700" id="order_iframe_<?php echo htmlspecialchars((string) (defined('TIME') ? constant('TIME') : null), ENT_QUOTES, 'UTF-8');?>
"
                        src="<?php echo htmlspecialchars((string) fn_checkout_url("checkout.process_payment",(defined('AREA') ? constant('AREA') : null)), ENT_QUOTES, 'UTF-8');?>
"
                        style="border: 0px" frameBorder="0"
                ></iframe>
                <?php if ($_smarty_tpl->tpl_vars['is_terms_and_conditions_agreement_required']->value) {?>
                    <div id="payment_method_iframe_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                         class="ty-payment-method-iframe"
                    >
                        <div class="ty-payment-method-iframe__label">
                            <div class="ty-payment-method-iframe__text"><?php echo $_smarty_tpl->__("checkout_terms_n_conditions_alert");?>
</div>
                        </div>
                    </div>
                <?php }?>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php if (defined("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null) && $_smarty_tpl->tpl_vars['auth']->value['act_as_user']) {?>
    <div class="litecheckout__group">
        <div class="litecheckout__item">
            <label>
                <input type="checkbox" id="skip_payment" name="skip_payment" value="Y"
                       class="checkbox"
                />
                <?php echo $_smarty_tpl->__("skip_payment");?>

            </label>
        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/payments/checkout.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/payments/checkout.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__group">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payments"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payments"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
        <div class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">

            <input type="radio"
                   name="selected_payment_method"
                   id="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-target-form="litecheckout_payments_form"
                   data-ca-url="checkout.checkout"
                   data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,litecheckout_terms,checkout*"
                   class="litecheckout__shipping-method__radio cm-select-payment hidden"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_id'] == $_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>checked<?php }?>
            />

            <label id="payments_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   class="litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                   for="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-toggling="payments_form_wrapper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-hide-all-in=".litecheckout__payment-methods"
            >
                <?php if ($_smarty_tpl->tpl_vars['payment']->value['image']) {?>
                    <div class="litecheckout__shipping-method__logo">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id'],'images'=>$_smarty_tpl->tpl_vars['payment']->value['image'],'class'=>"litecheckout__shipping-method__logo-image"), 0, true);
?>
                    </div>
                <?php }?>
                <p class="litecheckout__shipping-method__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</p>
                <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            </label>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <div class="litecheckout__item">
            <p>
                <?php echo $_smarty_tpl->__("text_no_payments_required");?>

            </p>
        </div>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payments"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="litecheckout__group litecheckout__payment-methods">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_id'] != $_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
            <?php continue 1;?>
        <?php }?>
        <div class="litecheckout__group litecheckout__payment-method"
             data-ca-toggling-by="payments_form_wrapper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-hideble="true"
        >
            <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="dispatch" value="checkout.place_order"/>
            <input type="hidden" name="customer_notes" value=""/>

            <?php if ($_smarty_tpl->tpl_vars['order_id']->value) {?>
                <input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <?php }?>

            <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"/>

            <?php if ($_smarty_tpl->tpl_vars['payment']->value['template']) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "payment_template", null, null);?>
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['payment']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('card_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0, true);
?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['payment']->value['instructions']) {?>
                <div class="litecheckout__item litecheckout__payment-instructions">
                    <?php echo $_smarty_tpl->tpl_vars['payment']->value['instructions'];?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['payment']->value['template'] && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'payment_template')) != '') {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'payment_template');?>

            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
            <div class="ty-payment-method-iframe__box">
                <iframe width="100%" height="700" id="order_iframe_<?php echo htmlspecialchars((string) (defined('TIME') ? constant('TIME') : null), ENT_QUOTES, 'UTF-8');?>
"
                        src="<?php echo htmlspecialchars((string) fn_checkout_url("checkout.process_payment",(defined('AREA') ? constant('AREA') : null)), ENT_QUOTES, 'UTF-8');?>
"
                        style="border: 0px" frameBorder="0"
                ></iframe>
                <?php if ($_smarty_tpl->tpl_vars['is_terms_and_conditions_agreement_required']->value) {?>
                    <div id="payment_method_iframe_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                         class="ty-payment-method-iframe"
                    >
                        <div class="ty-payment-method-iframe__label">
                            <div class="ty-payment-method-iframe__text"><?php echo $_smarty_tpl->__("checkout_terms_n_conditions_alert");?>
</div>
                        </div>
                    </div>
                <?php }?>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php if (defined("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null) && $_smarty_tpl->tpl_vars['auth']->value['act_as_user']) {?>
    <div class="litecheckout__group">
        <div class="litecheckout__item">
            <label>
                <input type="checkbox" id="skip_payment" name="skip_payment" value="Y"
                       class="checkbox"
                />
                <?php echo $_smarty_tpl->__("skip_payment");?>

            </label>
        </div>
    </div>
<?php }
}
}
}
