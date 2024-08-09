<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:01
  from '/app/www/design/themes/responsive/templates/views/checkout/components/shipping_estimation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbedd18805_00676991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f6f85fc4079b944edcbffa7e2f0906c2dd3a5f8' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/shipping_estimation.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
    'tygh:buttons/button.tpl' => 10,
    'tygh:common/price.tpl' => 6,
  ),
),false)) {
function content_66b4bbedd18805_00676991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('calculate_shipping_cost','country','select_country','state','select_state','city','zip_postal_code','get_rates','select_shipping_method','none','free_shipping','no_shipping_required','free_shipping','text_no_shipping_methods','total','select','text_no_shipping_methods','recalculate_rates','select_shipping_method','get_rates','calculate_shipping_cost','country','select_country','state','select_state','city','zip_postal_code','get_rates','select_shipping_method','none','free_shipping','no_shipping_required','free_shipping','text_no_shipping_methods','total','select','text_no_shipping_methods','recalculate_rates','select_shipping_method','get_rates'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['location']->value == "sidebox") {?>
    <?php $_smarty_tpl->_assignInScope('prefix', "sidebox_");
}
if ($_smarty_tpl->tpl_vars['location']->value == "popup") {?>
    <?php $_smarty_tpl->_assignInScope('buttons_class', "hidden");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('buttons_class', "buttons-container");
}
if ($_smarty_tpl->tpl_vars['additional_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('class_suffix', "-".((string)$_smarty_tpl->tpl_vars['additional_id']->value));?>
    <?php $_smarty_tpl->_assignInScope('id_suffix', "_".((string)$_smarty_tpl->tpl_vars['additional_id']->value));
}?>

<?php if (!$_smarty_tpl->tpl_vars['cart']->value) {?>
    <?php $_smarty_tpl->_assignInScope('cart', $_SESSION['cart']);
}?>

<?php if ($_smarty_tpl->tpl_vars['location']->value != "sidebox" && $_smarty_tpl->tpl_vars['location']->value != "popup") {?>

<div id="est_box<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-estimation-box">
    <h3 class="ty-subheader"><?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
</h3>
<?php }?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['location']->value == "sidebox") {
echo "_sidebox";
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('shipping_estimation_block_id', "shipping_estimation".$_prefixVariable1.((string)$_smarty_tpl->tpl_vars['id_suffix']->value));?>

        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->_assignInScope('countries', fn_get_simple_countries(true));?>
            <?php $_smarty_tpl->_assignInScope('states', fn_get_all_states(true));?>
            <?php if (!$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'states_built')) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>$_smarty_tpl->tpl_vars['states']->value), 0, false);
?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "states_built", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>

            <form class="cm-ajax" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
estimation_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <?php if ($_smarty_tpl->tpl_vars['location']->value == "sidebox") {?><input type="hidden" name="location" value="sidebox" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?><input type="hidden" name="additional_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
,shipping_estimation_buttons,shipping_estimation_rates<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" />

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_estimation_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_assignInScope('_state', $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state']);?>
                <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']);?>

                <?php if (!(isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']))) {?>
                    <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country']);?>
                <?php }?>

                <?php if (!(isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state'])) && $_smarty_tpl->tpl_vars['_country']->value == $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country']) {?>
                    <?php $_smarty_tpl->_assignInScope('_state', $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state']);?>
                <?php }?>

                <div class="ty-control-group">
                    <label class="ty-control-group__label cm-required" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("country");?>
</label>
                    <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-country cm-location-estimation<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium" name="customer_location[country]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_country']->value == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("state");?>
</label>
                    <select class="cm-state cm-location-estimation<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?> ty-input-text-medium" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[state]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value['code'] == $_smarty_tpl->tpl_vars['_state']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                    <input 
                        type="text" 
                        class="cm-state cm-location-estimation<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?>" 
                        id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>_d<?php }?>" 
                        name="customer_location[state]" 
                        size="20" 
                        maxlength="64" 
                        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" 
                        <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>disabled="disabled"<?php }?> 
                    />
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("city");?>
</label>
                    <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[city]" size="32" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
                    <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[zipcode]" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("get_rates"),'but_name'=>"dispatch[checkout.shipping_estimation.get_rates]",'but_role'=>"text",'but_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value)), 0, false);
?>
                </div>

            </form>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "shipping_estimation" || $_REQUEST['show_shippings'] == "Y") {?>
                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed'] && !$_smarty_tpl->tpl_vars['cart']->value['company_shipping_failed']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['location']->value == "popup") {?>
                        <div class="ty-estimation__title"><?php echo $_smarty_tpl->__("select_shipping_method");?>
</div>
                    <?php }?>

                    <div id="shipping_estimation_rates<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <form class="cm-ajax" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
select_shipping_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                    <input type="hidden" name="redirect_mode" value="cart" />
                    <input type="hidden" name="result_ids" value="checkout_totals" />
                    <input type="hidden" name="suffix" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" />

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_estimation"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_groups']->value, 'group', false, 'group_key', 's', array (
));
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['group']->value['shipping_by_marketplace']) {?>
                            <?php continue 1;?>
                        <?php }?>
                                                <?php if (!fn_allowed_for("ULTIMATE") || smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value) > 1) {?>
                            <p>
                                <strong><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['group']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</strong>
                            </p>
                        <?php }?>
                        <?php if (!fn_allowed_for("ULTIMATE") || smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value) > 1) {?>
                            <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                    <?php } else { ?>
                                        <?php echo htmlspecialchars((string) fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings'] && !$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping'] && !$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['shippings'], 'shipping', false, NULL, 'estimate_group_shipping', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_estimate_group_shipping']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_estimate_group_shipping']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_estimate_group_shipping']->value['index'];
?>
                                <?php if (!$_smarty_tpl->tpl_vars['show_only_first_shipping']->value || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_estimate_group_shipping']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_estimate_group_shipping']->value['first'] : null)) {?>

                                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                                        <?php $_smarty_tpl->_assignInScope('checked', "checked=\"checked\"");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('checked', '');?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] || $_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time']) {?>
                                        <?php $_smarty_tpl->_assignInScope('delivery_time', "(".((string)((($tmp = $_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] ?? null : $tmp))).")");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('delivery_time', '');?>
                                    <?php }?>

                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_estimation_method"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_method"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_rate"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
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
                                            <?php } elseif (fn_is_lang_var_exists("free_shipping")) {?>
                                                <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->__("free_shipping"));?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('rate', '');?>
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <p>
                                        <input
                                            type="radio"
                                            class="ty-valign"
                                            id="sh_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            name="shipping_ids[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                                            onclick="fn_calculate_total_shipping('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
');"
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checked']->value, ENT_QUOTES, 'UTF-8');?>
 />
                                            <label for="sh_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                class="ty-valign" id="shipping_label_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>

                                                <?php if ($_smarty_tpl->tpl_vars['rate']->value) {?> <?php echo $_smarty_tpl->tpl_vars['rate']->value;
}?>
                                            <!--shipping_label_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></label>
                                    </p>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_method"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping'] || $_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                                <p><?php echo $_smarty_tpl->__("no_shipping_required");?>
</p>
                            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping'] || $_smarty_tpl->tpl_vars['group']->value['free_shipping']) {?>
                                <p><?php echo $_smarty_tpl->__("free_shipping");?>
</p>
                            <?php } else { ?>
                                <p><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</p>
                            <?php }?>
                        <?php }?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <div id="shipping_estimation_total<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <p><strong><?php echo $_smarty_tpl->__("total");?>
:</strong>&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost'],'class'=>"ty-price"), 0, true);
?></p>
                    <!--shipping_estimation_total<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("select"),'but_role'=>"text",'but_name'=>"dispatch[checkout.update_shipping]",'but_id'=>"but_select_shipping",'but_meta'=>"cm-dialog-closer"), 0, true);
?>
                    </div>

                    </form>
                    <!--shipping_estimation_rates<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                <?php } else { ?>
                    <p class="ty-error-text">
                        <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                    </p>
                <?php }?>

            <?php }?>
        <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if ($_smarty_tpl->tpl_vars['location']->value != "sidebox" && $_smarty_tpl->tpl_vars['location']->value != "popup") {?>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value == "popup") {?>
<div class="ty-estimation-buttons buttons-container" id="shipping_estimation_buttons">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "shipping_estimation" || $_REQUEST['show_shippings'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("recalculate_rates"),'but_external_click_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value),'but_role'=>"text",'but_meta'=>"ty-btn__secondary cm-external-click ty-float-right ty-estimation-buttons__rate"), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("select_shipping_method"),'but_external_click_id'=>"but_select_shipping",'but_meta'=>"ty-btn__secondary cm-external-click cm-dialog-closer"), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("get_rates"),'but_external_click_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value),'but_meta'=>"ty-btn__secondary cm-external-click"), 0, true);
?>
    <?php }?>
<!--shipping_estimation_buttons--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/shipping_estimation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/shipping_estimation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['location']->value == "sidebox") {?>
    <?php $_smarty_tpl->_assignInScope('prefix', "sidebox_");
}
if ($_smarty_tpl->tpl_vars['location']->value == "popup") {?>
    <?php $_smarty_tpl->_assignInScope('buttons_class', "hidden");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('buttons_class', "buttons-container");
}
if ($_smarty_tpl->tpl_vars['additional_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('class_suffix', "-".((string)$_smarty_tpl->tpl_vars['additional_id']->value));?>
    <?php $_smarty_tpl->_assignInScope('id_suffix', "_".((string)$_smarty_tpl->tpl_vars['additional_id']->value));
}?>

<?php if (!$_smarty_tpl->tpl_vars['cart']->value) {?>
    <?php $_smarty_tpl->_assignInScope('cart', $_SESSION['cart']);
}?>

<?php if ($_smarty_tpl->tpl_vars['location']->value != "sidebox" && $_smarty_tpl->tpl_vars['location']->value != "popup") {?>

<div id="est_box<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-estimation-box">
    <h3 class="ty-subheader"><?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
</h3>
<?php }?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['location']->value == "sidebox") {
echo "_sidebox";
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('shipping_estimation_block_id', "shipping_estimation".$_prefixVariable2.((string)$_smarty_tpl->tpl_vars['id_suffix']->value));?>

        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->_assignInScope('countries', fn_get_simple_countries(true));?>
            <?php $_smarty_tpl->_assignInScope('states', fn_get_all_states(true));?>
            <?php if (!$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'states_built')) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>$_smarty_tpl->tpl_vars['states']->value), 0, true);
?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "states_built", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>

            <form class="cm-ajax" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
estimation_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <?php if ($_smarty_tpl->tpl_vars['location']->value == "sidebox") {?><input type="hidden" name="location" value="sidebox" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?><input type="hidden" name="additional_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
,shipping_estimation_buttons,shipping_estimation_rates<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" />

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_estimation_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_assignInScope('_state', $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state']);?>
                <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']);?>

                <?php if (!(isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']))) {?>
                    <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country']);?>
                <?php }?>

                <?php if (!(isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state'])) && $_smarty_tpl->tpl_vars['_country']->value == $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country']) {?>
                    <?php $_smarty_tpl->_assignInScope('_state', $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state']);?>
                <?php }?>

                <div class="ty-control-group">
                    <label class="ty-control-group__label cm-required" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("country");?>
</label>
                    <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-country cm-location-estimation<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium" name="customer_location[country]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_country']->value == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("state");?>
</label>
                    <select class="cm-state cm-location-estimation<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?> ty-input-text-medium" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[state]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value['code'] == $_smarty_tpl->tpl_vars['_state']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                    <input 
                        type="text" 
                        class="cm-state cm-location-estimation<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?>" 
                        id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>_d<?php }?>" 
                        name="customer_location[state]" 
                        size="20" 
                        maxlength="64" 
                        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" 
                        <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>disabled="disabled"<?php }?> 
                    />
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("city");?>
</label>
                    <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[city]" size="32" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
                    <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[zipcode]" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("get_rates"),'but_name'=>"dispatch[checkout.shipping_estimation.get_rates]",'but_role'=>"text",'but_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value)), 0, true);
?>
                </div>

            </form>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "shipping_estimation" || $_REQUEST['show_shippings'] == "Y") {?>
                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed'] && !$_smarty_tpl->tpl_vars['cart']->value['company_shipping_failed']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['location']->value == "popup") {?>
                        <div class="ty-estimation__title"><?php echo $_smarty_tpl->__("select_shipping_method");?>
</div>
                    <?php }?>

                    <div id="shipping_estimation_rates<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <form class="cm-ajax" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
select_shipping_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                    <input type="hidden" name="redirect_mode" value="cart" />
                    <input type="hidden" name="result_ids" value="checkout_totals" />
                    <input type="hidden" name="suffix" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" />

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_estimation"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_groups']->value, 'group', false, 'group_key', 's', array (
));
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['group']->value['shipping_by_marketplace']) {?>
                            <?php continue 1;?>
                        <?php }?>
                                                <?php if (!fn_allowed_for("ULTIMATE") || smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value) > 1) {?>
                            <p>
                                <strong><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['group']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</strong>
                            </p>
                        <?php }?>
                        <?php if (!fn_allowed_for("ULTIMATE") || smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value) > 1) {?>
                            <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                    <?php } else { ?>
                                        <?php echo htmlspecialchars((string) fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings'] && !$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping'] && !$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['shippings'], 'shipping', false, NULL, 'estimate_group_shipping', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_estimate_group_shipping']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_estimate_group_shipping']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_estimate_group_shipping']->value['index'];
?>
                                <?php if (!$_smarty_tpl->tpl_vars['show_only_first_shipping']->value || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_estimate_group_shipping']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_estimate_group_shipping']->value['first'] : null)) {?>

                                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                                        <?php $_smarty_tpl->_assignInScope('checked', "checked=\"checked\"");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('checked', '');?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] || $_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time']) {?>
                                        <?php $_smarty_tpl->_assignInScope('delivery_time', "(".((string)((($tmp = $_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] ?? null : $tmp))).")");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('delivery_time', '');?>
                                    <?php }?>

                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_estimation_method"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_method"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:shipping_rate"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
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
                                            <?php } elseif (fn_is_lang_var_exists("free_shipping")) {?>
                                                <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->__("free_shipping"));?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('rate', '');?>
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <p>
                                        <input
                                            type="radio"
                                            class="ty-valign"
                                            id="sh_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            name="shipping_ids[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                                            onclick="fn_calculate_total_shipping('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
');"
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checked']->value, ENT_QUOTES, 'UTF-8');?>
 />
                                            <label for="sh_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                class="ty-valign" id="shipping_label_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>

                                                <?php if ($_smarty_tpl->tpl_vars['rate']->value) {?> <?php echo $_smarty_tpl->tpl_vars['rate']->value;
}?>
                                            <!--shipping_label_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></label>
                                    </p>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_method"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping'] || $_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                                <p><?php echo $_smarty_tpl->__("no_shipping_required");?>
</p>
                            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping'] || $_smarty_tpl->tpl_vars['group']->value['free_shipping']) {?>
                                <p><?php echo $_smarty_tpl->__("free_shipping");?>
</p>
                            <?php } else { ?>
                                <p><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</p>
                            <?php }?>
                        <?php }?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <div id="shipping_estimation_total<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <p><strong><?php echo $_smarty_tpl->__("total");?>
:</strong>&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost'],'class'=>"ty-price"), 0, true);
?></p>
                    <!--shipping_estimation_total<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("select"),'but_role'=>"text",'but_name'=>"dispatch[checkout.update_shipping]",'but_id'=>"but_select_shipping",'but_meta'=>"cm-dialog-closer"), 0, true);
?>
                    </div>

                    </form>
                    <!--shipping_estimation_rates<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                <?php } else { ?>
                    <p class="ty-error-text">
                        <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                    </p>
                <?php }?>

            <?php }?>
        <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if ($_smarty_tpl->tpl_vars['location']->value != "sidebox" && $_smarty_tpl->tpl_vars['location']->value != "popup") {?>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value == "popup") {?>
<div class="ty-estimation-buttons buttons-container" id="shipping_estimation_buttons">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "shipping_estimation" || $_REQUEST['show_shippings'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("recalculate_rates"),'but_external_click_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value),'but_role'=>"text",'but_meta'=>"ty-btn__secondary cm-external-click ty-float-right ty-estimation-buttons__rate"), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("select_shipping_method"),'but_external_click_id'=>"but_select_shipping",'but_meta'=>"ty-btn__secondary cm-external-click cm-dialog-closer"), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("get_rates"),'but_external_click_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value),'but_meta'=>"ty-btn__secondary cm-external-click"), 0, true);
?>
    <?php }?>
<!--shipping_estimation_buttons--></div>
<?php }
}
}
}
