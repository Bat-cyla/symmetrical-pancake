<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:48
  from '/app/www/design/backend/templates/addons/rus_payments/hooks/orders/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde3a0bcd109_31774183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cba887c890e80d5528b3d11c6354051d87e64a3e' => 
    array (
      0 => '/app/www/design/backend/templates/addons/rus_payments/hooks/orders/tabs_extra.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/options_info.tpl' => 1,
    'tygh:common/price.tpl' => 4,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_66bde3a0bcd109_31774183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('addons.rus_payments.refund','product','price','qty','free','shipping','payment_surcharge','gift_certificate','addons.rus_payments.amount','addons.rus_payments.amount','addons.rus_payments.cause','cancel','refund'));
if ($_smarty_tpl->tpl_vars['show_refund']->value) {?>
    <div class="hidden orders-right-pane form-horizontal" title="<?php echo $_smarty_tpl->__("addons.rus_payments.refund");?>
" id="rus_payments_refund_dialog">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="rus-payments-refund-form cm-form-dialog-closer" name="refund_form">
            <input type="hidden" name="refund_data[order_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <div class="control-group">
                <?php if ($_smarty_tpl->tpl_vars['show_detailed_refund']->value) {?>
                <table class="table" id="yandex_checkpoint_detailed_refund_content">
                    <thead>
                    <tr>
                        <th width="1%"><?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"yc-refund-recalculator"), 0, false);
?></th>
                        <th><?php echo $_smarty_tpl->__("product");?>
</th>
                        <th width="1%" class="right"><?php echo $_smarty_tpl->__("price");?>
</th>
                        <th width="1%"><?php echo $_smarty_tpl->__("qty");?>
</th>
                    </tr>
                    <tbody>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"yandex_checkpoint:return_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"yandex_checkpoint:return_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['returned_order_info']->value['products'], 'oi', false, 'key');
$_smarty_tpl->tpl_vars['oi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['oi']->value) {
$_smarty_tpl->tpl_vars['oi']->do_else = false;
?>
                        <tr>
                            <td width="1%" class="left">
                                <input type="hidden"
                                       name="refund_data[products][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][is_returned]"
                                       value="N"
                                />
                                <input type="checkbox"
                                       name="refund_data[products][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][is_returned]"
                                       value="Y"
                                       class="cm-item yc-refund-recalculator"
                                       data-ca-refund-value="<?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {?>0<?php } else {
echo htmlspecialchars((string) fn_format_price($_smarty_tpl->tpl_vars['oi']->value['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,true), ENT_QUOTES, 'UTF-8');
}?>"
                                       data-ca-cart-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       checked="checked"
                                />
                            </td>
                            <td>
                                <a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['oi']->value['product'];?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?>
                                    <div class="options-info">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0, true);
?>
                                    </div>
                                <?php }?>
                            </td>
                            <td class="right nowrap">
                                <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {?>
                                    <?php echo $_smarty_tpl->__("free");?>

                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('secondary_currency'=>$_smarty_tpl->tpl_vars['primary_currency']->value,'value'=>$_smarty_tpl->tpl_vars['oi']->value['price']), 0, true);
?>
                                <?php }?>
                            </td>
                            <td>
                                <input type="hidden" name="returns[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][available_amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
                                <select name="refund_data[products][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][amount]"
                                        class="yc-refund-recalculator input-small"
                                        id="elm_refund_amount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-refund-amount-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>

                                >
                                    <?php
$_smarty_tpl->tpl_vars['amount'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['amount']->step = 1;$_smarty_tpl->tpl_vars['amount']->total = (int) ceil(($_smarty_tpl->tpl_vars['amount']->step > 0 ? $_smarty_tpl->tpl_vars['oi']->value['amount']+1 - (1) : 1-($_smarty_tpl->tpl_vars['oi']->value['amount'])+1)/abs($_smarty_tpl->tpl_vars['amount']->step));
if ($_smarty_tpl->tpl_vars['amount']->total > 0) {
for ($_smarty_tpl->tpl_vars['amount']->value = 1, $_smarty_tpl->tpl_vars['amount']->iteration = 1;$_smarty_tpl->tpl_vars['amount']->iteration <= $_smarty_tpl->tpl_vars['amount']->total;$_smarty_tpl->tpl_vars['amount']->value += $_smarty_tpl->tpl_vars['amount']->step, $_smarty_tpl->tpl_vars['amount']->iteration++) {
$_smarty_tpl->tpl_vars['amount']->first = $_smarty_tpl->tpl_vars['amount']->iteration === 1;$_smarty_tpl->tpl_vars['amount']->last = $_smarty_tpl->tpl_vars['amount']->iteration === $_smarty_tpl->tpl_vars['amount']->total;?>
                                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['amount']->value == $_smarty_tpl->tpl_vars['oi']->value['amount']) {?>selected="selected"<?php }?>
                                        ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                    <?php }
}
?>
                                </select>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if (floatval($_smarty_tpl->tpl_vars['returned_order_info']->value['shipping_cost'])) {?>
                        <tr>
                            <td class="left">
                                <input type="hidden" name="refund_data[refund_shipping]" value="N"/>
                                <input type="checkbox"
                                       name="refund_data[refund_shipping]"
                                       value="Y"
                                       class="cm-item yc-refund-recalculator"
                                       data-ca-refund-value="<?php echo htmlspecialchars((string) fn_format_price($_smarty_tpl->tpl_vars['returned_order_info']->value['shipping_cost'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,true), ENT_QUOTES, 'UTF-8');?>
"
                                       data-ca-cart-id="shipping_cost"
                                       checked="checked"
                                />
                            </td>
                            <td><?php echo $_smarty_tpl->__("shipping");?>
</td>
                            <td class="right nowrap">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['returned_order_info']->value['shipping_cost'],'secondary_currency'=>$_smarty_tpl->tpl_vars['primary_currency']->value), 0, true);
?>
                            </td>
                            <td>
                                <input type="hidden"
                                       value="1"
                                       id="elm_refund_amount_shipping_cost"
                                       data-ca-refund-amount-shipping_cost
                                />
                            </td>
                        </tr>
                    <?php }?>
                    <?php if (floatval($_smarty_tpl->tpl_vars['returned_order_info']->value['payment_surcharge'])) {?>
                        <tr>
                            <td class="left">
                                <input type="hidden" name="refund_data[refund_surcharge]" value="N"/>
                                <input type="checkbox"
                                       name="refund_data[refund_surcharge]"
                                       value="Y"
                                       class="cm-item yc-refund-recalculator"
                                       data-ca-refund-value="<?php echo htmlspecialchars((string) fn_format_price($_smarty_tpl->tpl_vars['returned_order_info']->value['payment_surcharge'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,true), ENT_QUOTES, 'UTF-8');?>
"
                                       data-ca-cart-id="payment_surcharge"
                                       checked="checked"
                                />
                            </td>
                            <td><?php echo $_smarty_tpl->__("payment_surcharge");?>
</td>
                            <td class="right nowrap">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['returned_order_info']->value['payment_surcharge'],'secondary_currency'=>$_smarty_tpl->tpl_vars['primary_currency']->value), 0, true);
?>
                            </td>
                            <td>
                                <input type="hidden"
                                       value="1"
                                       id="elm_refund_amount_payment_surcharge"
                                       data-ca-refund-amount-payment_surcharge
                                />
                            </td>
                        </tr>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['status'] == "A" && $_smarty_tpl->tpl_vars['returned_order_info']->value['gift_certificates']) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['returned_order_info']->value['gift_certificates'], 'certificate', false, 'cart_id');
$_smarty_tpl->tpl_vars['certificate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart_id']->value => $_smarty_tpl->tpl_vars['certificate']->value) {
$_smarty_tpl->tpl_vars['certificate']->do_else = false;
?>
                            <tr>
                                <td class="left">
                                    <input type="hidden"
                                           name="refund_data[certificates][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_id']->value, ENT_QUOTES, 'UTF-8');?>
][is_returned]"
                                           value="N"
                                    />
                                    <input type="checkbox"
                                           name="refund_data[certificates][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_id']->value, ENT_QUOTES, 'UTF-8');?>
][is_returned]"
                                           value="Y"
                                           class="cm-item yc-refund-recalculator"
                                           data-ca-refund-value="<?php echo htmlspecialchars((string) fn_format_price($_smarty_tpl->tpl_vars['certificate']->value['amount'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,true), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-cart-id="certificate_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           checked="checked"
                                    />
                                </td>
                                <td><?php echo $_smarty_tpl->__("gift_certificate");?>
</td>
                                <td class="right nowrap">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['certificate']->value['amount'],'secondary_currency'=>$_smarty_tpl->tpl_vars['primary_currency']->value), 0, true);
?>
                                </td>
                                <td>
                                    <input type="hidden"
                                           value="1"
                                           id="elm_refund_amount_certificate_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-refund-amount-certificate_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_id']->value, ENT_QUOTES, 'UTF-8');?>

                                    />
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"yandex_checkpoint:return_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>&nbsp;</td>
                            <td><strong><?php echo $_smarty_tpl->__("addons.rus_payments.amount");?>
</strong></td>
                            <td class="right nowrap">
                                <input
                                        type="text"
                                        name="refund_data[amount]"
                                        id="rus_payments_refund_amount"
                                        class="input-small cm-numeric right"
                                        data-a-sign="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']);?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after'] == "Y") {?>data-p-sign="s"<?php }?>
                                        data-a-dec="."
                                        readonly="readonly"
                                />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </tfoot>
                </table>
                <?php } else { ?>
                <label class="control-label" for="rus_payments_refund_amount"><?php echo $_smarty_tpl->__("addons.rus_payments.amount");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
                <div class="controls">
                    <input type="text" name="refund_data[amount]" id="rus_payments_refund_amount" class="input-small" value="<?php echo htmlspecialchars((string) fn_format_price((($tmp = $_smarty_tpl->tpl_vars['order_info']->value['total'] ?? null)===null||$tmp==='' ? "0.00" ?? null : $tmp),$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <?php }?>
            </div>


            <div class="control-group">
                <label class="control-label" for="rus_payments_refund_cause"><?php echo $_smarty_tpl->__("addons.rus_payments.cause");?>
</label>
                <div class="controls">
                    <textarea name="refund_data[cause]" cols="55" rows="3" id="rus_payments_refund_cause"></textarea>
                </div>
            </div>
            <div class="buttons-container">
                <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("refund"),'but_meta'=>'','but_name'=>"dispatch[orders.rus_payments_refund]",'but_role'=>"button_main"), 0, false);
?>
            </div>
        </form>
    <!--rus_payments_refund_dialog--></div>
<?php }
}
}
