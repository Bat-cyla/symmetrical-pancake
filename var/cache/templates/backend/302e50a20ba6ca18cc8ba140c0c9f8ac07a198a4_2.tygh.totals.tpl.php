<?php
/* Smarty version 4.1.1, created on 2024-08-01 10:35:21
  from '/app/www/design/backend/templates/views/order_management/components/totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab3ab925e5b7_59257095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '302e50a20ba6ca18cc8ba140c0c9f8ac07a198a4' => 
    array (
      0 => '/app/www/design/backend/templates/views/order_management/components/totals.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 10,
    'tygh:common/modifier.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_66ab3ab925e5b7_59257095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('totals','subtotal','including_discount','order_discount','manually_set_tax_rates','included','coupon','payment_surcharge','total_cost','recalculate_totals'));
?>
<div class="pull-right order-notes statistic">
    <div class="table-wrapper">
        <table>
            <tr>
                <td class="totals-label">&nbsp;</td>
                <td class="totals"><h4><?php echo $_smarty_tpl->__("totals");?>
</h4></td>
            </tr>
            <tr>
                <td class="statistic-label" width="200px"><?php echo $_smarty_tpl->__("subtotal");?>
:</td>
                <td class="right" width="100px"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_subtotal']), 0, false);
?></td>
            </tr>

            <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['discount']))) {?>
                <tr>
                    <td class="statistic-label"><?php echo $_smarty_tpl->__("including_discount");?>
:</td>
                    <td class="right"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['discount']), 0, true);
?></td>
                </tr>
            <?php }?>

            <tr class="toggle-elm">
                <td class="statistic-label">
                <label><?php echo $_smarty_tpl->__("order_discount");?>

                    <input type="hidden" name="stored_subtotal_discount" value="N" />
                    <input type="checkbox" class="valign cm-combinations" name="stored_subtotal_discount" value="Y" <?php if ($_smarty_tpl->tpl_vars['cart']->value['stored_subtotal_discount'] == "Y" && $_smarty_tpl->tpl_vars['cart']->value['order_id']) {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['cart']->value['order_id']) {?>disabled="disabled"<?php }?> id="sw_manual_subtotal_discount" /></label>
                </td>
                <td class="right">
                <span <?php if ($_smarty_tpl->tpl_vars['cart']->value['stored_subtotal_discount'] == "Y") {?>style="display: none;"<?php }?> data-ca-switch-id="manual_subtotal_discount">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['cart']->value['subtotal_discount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['original_subtotal_discount'] ?? null : $tmp),'show_currency'=>false), 0, true);
?></span>
                    <span <?php if ($_smarty_tpl->tpl_vars['cart']->value['stored_subtotal_discount'] != "Y") {?>style="display: none;"<?php }?> data-ca-switch-id="manual_subtotal_discount">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['cart']->value['subtotal_discount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['original_subtotal_discount'] ?? null : $tmp),'view'=>"input",'input_name'=>"subtotal_discount",'input_val'=>$_smarty_tpl->tpl_vars['cart']->value['subtotal_discount'],'class'=>"input-small"), 0, true);
?>
                    </span>
                </td>
            </tr>

            <tr>
                <td class="statistic-label">
                    <label><?php echo $_smarty_tpl->__("manually_set_tax_rates");?>

                    <input type="hidden" name="stored_taxes" value="N" />
                    <input type="checkbox" class="cm-combinations" name="stored_taxes" value="Y" <?php if ($_smarty_tpl->tpl_vars['cart']->value['stored_taxes'] == "Y") {?>checked="checked"<?php }?> id="sw_manual_taxes" <?php if (!$_smarty_tpl->tpl_vars['cart']->value['order_id']) {?>disabled="disabled"<?php }?> /></label>
                </td>
                <td class="right">&nbsp;</td>
            </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['taxes'], 'tax', false, 'key', 'fet', array (
));
$_smarty_tpl->tpl_vars['tax']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->do_else = false;
?>
            <tr class="toggle-elm nowrap">
                <td class="statistic-label">&nbsp;<span>&middot;</span>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['description'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['tax']->value['price_includes_tax'] == "Y" && $_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] != "Y") {?>&nbsp;<?php echo $_smarty_tpl->__("included");
}?>(<span <?php if ($_smarty_tpl->tpl_vars['cart']->value['stored_taxes'] == "Y") {?>class="hidden"<?php }?> data-ca-switch-id="manual_taxes"><?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->tpl_vars['tax']->value['rate_value'],'mod_type'=>$_smarty_tpl->tpl_vars['tax']->value['rate_type']), 0, true);
?></span><span <?php if ($_smarty_tpl->tpl_vars['cart']->value['stored_taxes'] != "Y") {?>class="hidden"<?php }?> data-ca-switch-id="manual_taxes"><input type="text" class="cm-numeric input-small" size="5" name="taxes[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
]" data-a-sign="% " data-m-dec="3" data-a-pad="false" data-p-sign="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['rate_value'], ENT_QUOTES, 'UTF-8');?>
" /></span>)
                </td>
                <td class="right"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['tax']->value['tax_subtotal']), 0, true);
?></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php if (!empty($_smarty_tpl->tpl_vars['cart']->value['product_groups'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['product_groups'], 'group', false, 'group_key');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['group']->value['chosen_shippings'])) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['chosen_shippings'], 'shipping', false, 'shipping_key');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_key']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['cart']->value['stored_shipping'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_key']->value]))) {?>
                                <?php $_smarty_tpl->_assignInScope('custom_ship_exists', true);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('custom_ship_exists', false);?>
                            <?php }?>
                            <tr>
                                <td class="right nowrap">
                                    <label><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>

                                    <input type="hidden" name="stored_shipping[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                                    <input type="checkbox" class="valign cm-combinations" name="stored_shipping[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['custom_ship_exists']->value) {?>checked="checked"<?php }?> id="sw_manual_shipping_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_key']->value, ENT_QUOTES, 'UTF-8');?>
" /></label>
                                </td>
                                <td class="right">
                                    <span <?php if ($_smarty_tpl->tpl_vars['custom_ship_exists']->value) {?>style="display: none;"<?php }?> data-ca-switch-id="manual_shipping_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] === smarty_modifier_enum("YesNo::YES")) {?>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['shipping']->value['taxed_price'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), 0, true);
?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['shipping']->value['rate'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), 0, true);
?>
                                        <?php }?>
                                    </span>
                                    <span <?php if (!$_smarty_tpl->tpl_vars['custom_ship_exists']->value) {?>style="display: none;"<?php }?> data-ca-switch-id="manual_shipping_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cart']->value['stored_shipping'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_key']->value]))) {?>
                                            <?php $_smarty_tpl->_assignInScope('stored_shipping_cost', fn_format_price($_smarty_tpl->tpl_vars['cart']->value['stored_shipping'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_key']->value],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false));?>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] === smarty_modifier_enum("YesNo::YES")) {?>
                                                <?php $_smarty_tpl->_assignInScope('stored_shipping_cost', fn_format_price($_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false));?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('stored_shipping_cost', fn_format_price($_smarty_tpl->tpl_vars['shipping']->value['rate'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false));?>
                                            <?php }?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['stored_shipping_cost']->value,'view'=>"input",'input_name'=>"stored_shipping_cost[".((string)$_smarty_tpl->tpl_vars['group_key']->value)."][".((string)$_smarty_tpl->tpl_vars['shipping_key']->value)."]",'class'=>"input-small"), 0, true);
?>
                                    </span>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['cart']->value['coupons'] && empty($_smarty_tpl->tpl_vars['cart']->value['disable_promotions'])) {?>
            <input type="hidden" name="c_id" value="0" id="c_id" />
            <tr>
                <td class="statistic-label muted strong"><?php echo $_smarty_tpl->__("coupon");?>
:</td>
                <td>&nbsp;</td>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['coupons'], 'coupon', false, 'key');
$_smarty_tpl->tpl_vars['coupon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['coupon']->value) {
$_smarty_tpl->tpl_vars['coupon']->do_else = false;
?>
                <tr>
                    <td class="statistic-label"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
&nbsp;
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"order_management.delete_coupon?c_id=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['key']->value))),'but_icon'=>"icon-trash",'but_role'=>"delete_item",'but_meta'=>"cm-ajax cm-post",'but_target_id'=>$_smarty_tpl->tpl_vars['result_ids']->value), 0, true);
?></td>
                    <td class="right">&nbsp;</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>

        <tr id="payment_surcharge_line">
            <td class="statistic-label"><?php echo $_smarty_tpl->__("payment_surcharge");?>
</td>
            <td class="right"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'],'span_id'=>"payment_surcharge_value",'class'=>"list_price"), 0, true);
?></td>
        </tr>

                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['cart']) ? $_smarty_tpl->tpl_vars['cart']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['total'] = $_smarty_tpl->tpl_vars['cart']->value['total']+$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'];
$_smarty_tpl->_assignInScope('cart', $_tmp_array);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:totals"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:totals"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:totals"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <tr class="total nowrap cm-om-totals-price">
                <td class="statistic-label"><h4><?php echo $_smarty_tpl->__("total_cost");?>
</h4></td>
                <td class="right price">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['total'],'span_id'=>"cart_total"), 0, true);
?>
                </td>
            </tr>

            <tr class="hidden cm-om-totals-recalculate">
                <td colspan="2">
                    <button class="btn cm-ajax" type="submit" name="dispatch[order_management.update_totals]" value="Recalculate" data-ca-check-filter="#om_ajax_update_totals"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-refresh"),$_smarty_tpl);
echo $_smarty_tpl->__("recalculate_totals");?>
</button>
                </td>
            </tr>

        </table>
    </div>
</div>
<?php }
}
