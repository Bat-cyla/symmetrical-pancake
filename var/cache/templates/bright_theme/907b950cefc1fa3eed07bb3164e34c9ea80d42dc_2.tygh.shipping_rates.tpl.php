<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:15
  from '/app/www/design/themes/responsive/templates/views/checkout/components/shipping_rates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eeb33ebc9_16922383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '907b950cefc1fa3eed07bb3164e34c9ea80d42dc' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/shipping_rates.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 4,
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66b49eeb33ebc9_16922383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.click_here_to_update_shipping','lite_checkout.shipping_method_for','na','free','lite_checkout.not_available','no_shipping_required','text_no_shipping_methods','text_no_shipping_methods','lite_checkout.click_here_to_update_shipping','lite_checkout.shipping_method_for','na','free','lite_checkout.not_available','no_shipping_required','text_no_shipping_methods','text_no_shipping_methods'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><label for="shipping_rates_list" class="cm-required cm-multiple-radios cm-shipping-available-label hidden"></label>
<div class="litecheckout__group litecheckout__shippings"
     data-ca-lite-checkout-overlay-message="<?php echo $_smarty_tpl->__("lite_checkout.click_here_to_update_shipping");?>
"
     data-ca-lite-checkout-overlay-class="litecheckout__overlay--active"
     data-ca-lite-checkout-element="shipping-methods"
     id="shipping_rates_list">
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_rates"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <input type="hidden"
           name="additional_result_ids[]"
           value="litecheckout_final_section,litecheckout_step_payment,checkout*"
    />

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_groups']->value, 'group', false, 'group_key');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['group']->value['shipping_by_marketplace']) {?>
            <?php continue 1;?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('show_content', true);?>
        <?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['show_vendor_info_if_shipping_no_required']->value === smarty_modifier_enum("YesNo::NO")) {?>
            <?php if (!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping'] && !$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                <?php $_smarty_tpl->_assignInScope('show_content', true);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('show_content', false);?>
            <?php }?>
        <?php }?>
        
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value) > 1 && $_smarty_tpl->tpl_vars['show_content']->value) {?>
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title">
                        <?php echo $_smarty_tpl->__("lite_checkout.shipping_method_for",array("[group_name]"=>$_smarty_tpl->tpl_vars['group']->value['name']));?>

                    </h2>
                </div>
            </div>
        <?php }?>

        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping_disabled'] = false;
$_smarty_tpl->_assignInScope('group', $_tmp_array);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_methods_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_methods_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="litecheckout__group">
                        <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings'] && !$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping'] && !$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_shippings']->value[$_smarty_tpl->tpl_vars['group_key']->value], 'item', false, 'shipping_id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings'][$_smarty_tpl->tpl_vars['shipping_id']->value]) {?>
                        <?php $_smarty_tpl->_assignInScope('shipping', $_smarty_tpl->tpl_vars['group']->value['shippings'][$_smarty_tpl->tpl_vars['shipping_id']->value]);?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['shipping']) ? $_smarty_tpl->tpl_vars['shipping']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['service_delivery_time'] = $_smarty_tpl->tpl_vars['item']->value['service_delivery_time'];
$_smarty_tpl->_assignInScope('shipping', $_tmp_array);?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['shipping']) ? $_smarty_tpl->tpl_vars['shipping']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping'] = $_smarty_tpl->tpl_vars['item']->value['shipping'];
$_smarty_tpl->_assignInScope('shipping', $_tmp_array);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('shipping', $_smarty_tpl->tpl_vars['item']->value);?>
                        <?php if ($_smarty_tpl->tpl_vars['show_unavailable_shippings']->value) {?>
                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['shipping']) ? $_smarty_tpl->tpl_vars['shipping']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['rate_disabled'] = true;
$_smarty_tpl->_assignInScope('shipping', $_tmp_array);?>
                        <?php } else { ?>
                            <?php continue 1;?>
                        <?php }?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_disabled'] && $_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping_disabled'] = true;
$_smarty_tpl->_assignInScope('group', $_tmp_array);?>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_rate"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_assignInScope('delivery_time', '');?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] || $_smarty_tpl->tpl_vars['shipping']->value['rate_info']['delivery_time']) {?>
                            <?php $_smarty_tpl->_assignInScope('delivery_time', "(".((string)((($tmp = $_smarty_tpl->tpl_vars['shipping']->value['rate_info']['delivery_time'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] ?? null : $tmp))).")");?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "rate", null);
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                                <?php $_smarty_tpl->_assignInScope('rate', ((string)$_smarty_tpl->tpl_vars['rate']->value)." (");?>
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price'] && $_smarty_tpl->tpl_vars['shipping']->value['taxed_price'] != $_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "tax", null);
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"ty-nowrap"), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                    <?php $_smarty_tpl->_assignInScope('rate', ((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['tax']->value)." ");?>
                                <?php }?>
                                <?php $_smarty_tpl->_assignInScope('inc_tax_lang', $_smarty_tpl->__('inc_tax'));?>
                                <?php $_smarty_tpl->_assignInScope('rate', ((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")");?>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['shipping']->value['rate_disabled']) {?>
                            <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->__("na"));?>
                        <?php } elseif (fn_is_lang_var_exists("free")) {?>
                            <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->__("free"));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('rate', '');?>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <div class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">
                        <input
                            type="radio"
                            class="litecheckout__shipping-method__radio hidden"
                            id="sh_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            name="shipping_ids[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            onclick="fn_calculate_total_shipping_cost(); $.ceLiteCheckout('toggleAddress', <?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required'] == "Y") {?>true<?php } else { ?>false<?php }?>);"
                            data-ca-lite-checkout-element="shipping-method"
                            data-ca-lite-checkout-is-address-required="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required'] == "Y") {?>true<?php } else { ?>false<?php }?>"
                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>checked<?php }?>
                            data-ca-lite-checkout-shipping-method-disabled="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_disabled']) {?>true<?php } else { ?>false<?php }?>"
                        />

                        <label
                            for="sh_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            class="litecheckout__shipping-method__wrapper
                                js-litecheckout-activate
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_disabled']) {?>litecheckout__shipping-method__wrapper--disabled<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['shipping_rates_changed']->value) {?>litecheckout__shipping-method__wrapper--highlight<?php }?>"
                            data-ca-activate="sd_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['image']) {?>
                                <div class="litecheckout__shipping-method__logo">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['shipping_id']->value,'images'=>$_smarty_tpl->tpl_vars['shipping']->value['image'],'class'=>"shipping-method__logo-image litecheckout__shipping-method__logo-image"), 0, true);
?>
                                </div>
                            <?php }?>
                            <p class="litecheckout__shipping-method__title">
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_shippings']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']]['shipping'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['rate']->value && !$_smarty_tpl->tpl_vars['shipping']->value['rate_disabled']) {?> — <?php echo $_smarty_tpl->tpl_vars['rate']->value;
}?>
                            </p>
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_disabled']) {?>
                                <p class="litecheckout__shipping-method__status litecheckout__shipping-method__status--error"><?php echo $_smarty_tpl->__("lite_checkout.not_available");?>
</p>
                            <?php } else { ?>
                                <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                            <?php }?>
                        </label>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div class="litecheckout__item litecheckout__item--full">
                    <?php if ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping'] || $_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['show_content']->value) {?>
                            <p class="litecheckout__shipping-method__text ty-error-text">
                                <?php if (!empty(trim($_smarty_tpl->tpl_vars['content']->value))) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->__("no_shipping_required");?>

                                <?php }?>
                            </p>
                        <?php }?>
                    <?php } else { ?>
                        <p class="litecheckout__shipping-method__text ty-error-text">
                            <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                        </p>
                    <?php }?>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['all_shippings_disabled'] || $_smarty_tpl->tpl_vars['group']->value['shipping_disabled']) {?>
                <div class="litecheckout__item litecheckout__item--full">
                    <p class="litecheckout__shipping-method__text ty-error-text">
                        <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                    </p>
                </div>
            <?php }?>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_methods_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <div class="litecheckout__group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['shippings'], 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_method"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_method"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_method"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="litecheckout__item">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['shippings'], 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                        <div class="litecheckout__shipping-method__description">
                            <?php echo $_smarty_tpl->tpl_vars['all_shippings']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']]['description'];?>

                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<!--shipping_rates_list--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/shipping_rates.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/shipping_rates.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><label for="shipping_rates_list" class="cm-required cm-multiple-radios cm-shipping-available-label hidden"></label>
<div class="litecheckout__group litecheckout__shippings"
     data-ca-lite-checkout-overlay-message="<?php echo $_smarty_tpl->__("lite_checkout.click_here_to_update_shipping");?>
"
     data-ca-lite-checkout-overlay-class="litecheckout__overlay--active"
     data-ca-lite-checkout-element="shipping-methods"
     id="shipping_rates_list">
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_rates"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <input type="hidden"
           name="additional_result_ids[]"
           value="litecheckout_final_section,litecheckout_step_payment,checkout*"
    />

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_groups']->value, 'group', false, 'group_key');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['group']->value['shipping_by_marketplace']) {?>
            <?php continue 1;?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('show_content', true);?>
        <?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['show_vendor_info_if_shipping_no_required']->value === smarty_modifier_enum("YesNo::NO")) {?>
            <?php if (!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping'] && !$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                <?php $_smarty_tpl->_assignInScope('show_content', true);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('show_content', false);?>
            <?php }?>
        <?php }?>
        
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value) > 1 && $_smarty_tpl->tpl_vars['show_content']->value) {?>
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title">
                        <?php echo $_smarty_tpl->__("lite_checkout.shipping_method_for",array("[group_name]"=>$_smarty_tpl->tpl_vars['group']->value['name']));?>

                    </h2>
                </div>
            </div>
        <?php }?>

        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping_disabled'] = false;
$_smarty_tpl->_assignInScope('group', $_tmp_array);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_methods_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_methods_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="litecheckout__group">
                        <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings'] && !$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping'] && !$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_shippings']->value[$_smarty_tpl->tpl_vars['group_key']->value], 'item', false, 'shipping_id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings'][$_smarty_tpl->tpl_vars['shipping_id']->value]) {?>
                        <?php $_smarty_tpl->_assignInScope('shipping', $_smarty_tpl->tpl_vars['group']->value['shippings'][$_smarty_tpl->tpl_vars['shipping_id']->value]);?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['shipping']) ? $_smarty_tpl->tpl_vars['shipping']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['service_delivery_time'] = $_smarty_tpl->tpl_vars['item']->value['service_delivery_time'];
$_smarty_tpl->_assignInScope('shipping', $_tmp_array);?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['shipping']) ? $_smarty_tpl->tpl_vars['shipping']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping'] = $_smarty_tpl->tpl_vars['item']->value['shipping'];
$_smarty_tpl->_assignInScope('shipping', $_tmp_array);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('shipping', $_smarty_tpl->tpl_vars['item']->value);?>
                        <?php if ($_smarty_tpl->tpl_vars['show_unavailable_shippings']->value) {?>
                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['shipping']) ? $_smarty_tpl->tpl_vars['shipping']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['rate_disabled'] = true;
$_smarty_tpl->_assignInScope('shipping', $_tmp_array);?>
                        <?php } else { ?>
                            <?php continue 1;?>
                        <?php }?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_disabled'] && $_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping_disabled'] = true;
$_smarty_tpl->_assignInScope('group', $_tmp_array);?>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_rate"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_assignInScope('delivery_time', '');?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] || $_smarty_tpl->tpl_vars['shipping']->value['rate_info']['delivery_time']) {?>
                            <?php $_smarty_tpl->_assignInScope('delivery_time', "(".((string)((($tmp = $_smarty_tpl->tpl_vars['shipping']->value['rate_info']['delivery_time'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] ?? null : $tmp))).")");?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "rate", null);
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                                <?php $_smarty_tpl->_assignInScope('rate', ((string)$_smarty_tpl->tpl_vars['rate']->value)." (");?>
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price'] && $_smarty_tpl->tpl_vars['shipping']->value['taxed_price'] != $_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "tax", null);
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"ty-nowrap"), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                    <?php $_smarty_tpl->_assignInScope('rate', ((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['tax']->value)." ");?>
                                <?php }?>
                                <?php $_smarty_tpl->_assignInScope('inc_tax_lang', $_smarty_tpl->__('inc_tax'));?>
                                <?php $_smarty_tpl->_assignInScope('rate', ((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")");?>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['shipping']->value['rate_disabled']) {?>
                            <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->__("na"));?>
                        <?php } elseif (fn_is_lang_var_exists("free")) {?>
                            <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->__("free"));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('rate', '');?>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <div class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">
                        <input
                            type="radio"
                            class="litecheckout__shipping-method__radio hidden"
                            id="sh_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            name="shipping_ids[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            onclick="fn_calculate_total_shipping_cost(); $.ceLiteCheckout('toggleAddress', <?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required'] == "Y") {?>true<?php } else { ?>false<?php }?>);"
                            data-ca-lite-checkout-element="shipping-method"
                            data-ca-lite-checkout-is-address-required="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required'] == "Y") {?>true<?php } else { ?>false<?php }?>"
                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>checked<?php }?>
                            data-ca-lite-checkout-shipping-method-disabled="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_disabled']) {?>true<?php } else { ?>false<?php }?>"
                        />

                        <label
                            for="sh_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            class="litecheckout__shipping-method__wrapper
                                js-litecheckout-activate
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_disabled']) {?>litecheckout__shipping-method__wrapper--disabled<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['shipping_rates_changed']->value) {?>litecheckout__shipping-method__wrapper--highlight<?php }?>"
                            data-ca-activate="sd_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['image']) {?>
                                <div class="litecheckout__shipping-method__logo">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['shipping_id']->value,'images'=>$_smarty_tpl->tpl_vars['shipping']->value['image'],'class'=>"shipping-method__logo-image litecheckout__shipping-method__logo-image"), 0, true);
?>
                                </div>
                            <?php }?>
                            <p class="litecheckout__shipping-method__title">
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_shippings']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']]['shipping'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['rate']->value && !$_smarty_tpl->tpl_vars['shipping']->value['rate_disabled']) {?> — <?php echo $_smarty_tpl->tpl_vars['rate']->value;
}?>
                            </p>
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_disabled']) {?>
                                <p class="litecheckout__shipping-method__status litecheckout__shipping-method__status--error"><?php echo $_smarty_tpl->__("lite_checkout.not_available");?>
</p>
                            <?php } else { ?>
                                <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                            <?php }?>
                        </label>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div class="litecheckout__item litecheckout__item--full">
                    <?php if ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping'] || $_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['show_content']->value) {?>
                            <p class="litecheckout__shipping-method__text ty-error-text">
                                <?php if (!empty(trim($_smarty_tpl->tpl_vars['content']->value))) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->__("no_shipping_required");?>

                                <?php }?>
                            </p>
                        <?php }?>
                    <?php } else { ?>
                        <p class="litecheckout__shipping-method__text ty-error-text">
                            <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                        </p>
                    <?php }?>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['all_shippings_disabled'] || $_smarty_tpl->tpl_vars['group']->value['shipping_disabled']) {?>
                <div class="litecheckout__item litecheckout__item--full">
                    <p class="litecheckout__shipping-method__text ty-error-text">
                        <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                    </p>
                </div>
            <?php }?>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_methods_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <div class="litecheckout__group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['shippings'], 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_method"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_method"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_method"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="litecheckout__item">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['shippings'], 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                        <div class="litecheckout__shipping-method__description">
                            <?php echo $_smarty_tpl->tpl_vars['all_shippings']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']]['description'];?>

                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<!--shipping_rates_list--></div>
<?php }
}
}
