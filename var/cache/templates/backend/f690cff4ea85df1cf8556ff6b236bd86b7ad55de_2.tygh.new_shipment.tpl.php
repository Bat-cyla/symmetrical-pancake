<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:47
  from '/app/www/design/backend/templates/views/shipments/components/new_shipment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde39fd45332_42487623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f690cff4ea85df1cf8556ff6b236bd86b7ad55de' => 
    array (
      0 => '/app/www/design/backend/templates/views/shipments/components/new_shipment.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/options_info.tpl' => 2,
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/carriers.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_66bde39fd45332_42487623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','packages','product','quantity','product','deleted_product','sku','quantity','no_products_for_shipment','options','shipping_method','tracking_number','carrier','comments','order_status','do_not_change','text_order_status_notification','send_shipment_notification_to_customer','text_shipping_packages_info','package','weight','shipping_method'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    var packages = [];
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="shipments_form" class="form-horizontal form-edit">
<input type="hidden" name="shipment_data[order_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping', false, 'shipping_id');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['packages_info']['packages']) {?>
        <?php $_smarty_tpl->_assignInScope('has_packages', true);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['has_packages']->value) {?>
    <div class="tabs cm-j-tabs">
        <ul>
            <li id="tab_general" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
            <li id="tab_packages_info" class="cm-js"><a><?php echo $_smarty_tpl->__("packages");?>
</a></li>
        </ul>
    </div>
<?php }?>

<div class="cm-tabs-content" id="tabs_content">
    <div id="content_tab_general">

        <div class="table-responive-wrapper">
            <table class="table table-middle table--relative table-responive">
            <thead>
                <tr>
                    <th><?php echo $_smarty_tpl->__("product");?>
</th>
                    <th width="5%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                </tr>
            </thead>

            <?php $_smarty_tpl->_assignInScope('shipment_products', false);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['products'], 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['shipment_amount'] > 0 && (!(isset($_smarty_tpl->tpl_vars['product']->value['extra']['group_key'])) || $_smarty_tpl->tpl_vars['product']->value['extra']['group_key'] == $_smarty_tpl->tpl_vars['group_key']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('shipment_products', true);?>

                <tr>
                    <td data-th="<?php echo $_smarty_tpl->__("product");?>
">
                        <?php $_smarty_tpl->_assignInScope('may_display_product_update_link', fn_check_view_permissions("products.update"));?>

                        <?php if ($_smarty_tpl->tpl_vars['may_display_product_update_link']->value && !$_smarty_tpl->tpl_vars['product']->value['deleted_product']) {?>
                            <a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>

                        <?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") ?? null : $tmp);?>


                        <?php if ($_smarty_tpl->tpl_vars['may_display_product_update_link']->value) {?>
                            </a>
                        <?php }?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shipments:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shipments:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                            <p class="products-hint__code"><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shipments:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                            <div class="options-info">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options']), 0, true);
?>
                            </div>
                        <?php }?>
                    </td>
                    <td class="center" nowrap="nowrap" data-th="<?php echo $_smarty_tpl->__("quantity");?>
">
                            <?php echo smarty_function_math(array('equation'=>"amount + 1",'amount'=>$_smarty_tpl->tpl_vars['product']->value['shipment_amount'],'assign'=>"loop_amount"),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['loop_amount']->value <= 100) {?>
                                <select id="shipment_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-small cm-shipments-product" name="shipment_data[products][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
]">
                                    <option value="0">0</option>
                                <?php
$__section_amount_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['loop_amount']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_amount_0_start = min(1, $__section_amount_0_loop);
$__section_amount_0_total = min(($__section_amount_0_loop - $__section_amount_0_start), $__section_amount_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_amount'] = new Smarty_Variable(array());
if ($__section_amount_0_total !== 0) {
for ($__section_amount_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_amount']->value['index'] = $__section_amount_0_start; $__section_amount_0_iteration <= $__section_amount_0_total; $__section_amount_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_amount']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_amount']->value['last'] = ($__section_amount_0_iteration === $__section_amount_0_total);
?>
                                    <option value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_section_amount']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_amount']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_amount']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_amount']->value['last'] : null)) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_section_amount']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_amount']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php
}
}
?>
                                </select>
                            <?php } else { ?>
                                <input id="shipment_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" class="input-text" size="3" name="shipment_data[products][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['shipment_amount'], ENT_QUOTES, 'UTF-8');?>
" />&nbsp;of&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['shipment_amount'], ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                    </td>
                </tr>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php if (!$_smarty_tpl->tpl_vars['shipment_products']->value) {?>
                <tr>
                    <td colspan="2" data-th=""><?php echo $_smarty_tpl->__("no_products_for_shipment");?>
</td>
                </tr>
            <?php }?>

            </table>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("options")), 0, false);
?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shipments:new_shipment_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shipments:new_shipment_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <fieldset>
            <div class="control-group">
                <label class="control-label" for="shipping_name"><?php echo $_smarty_tpl->__("shipping_method");?>
</label>
                <div class="controls">
                    <select name="shipment_data[shipping_id]" id="shipping_name">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shippings']->value, 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_shipping_id']->value === $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>selected<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="tracking_number"><?php echo $_smarty_tpl->__("tracking_number");?>
</label>
                <div class="controls">
                    <input type="text" name="shipment_data[tracking_number]" id="tracking_number" size="10" value="" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="carrier_key"><?php echo $_smarty_tpl->__("carrier");?>
</label>
                <div class="controls">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/carriers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"carrier_key",'name'=>"shipment_data[carrier]"), 0, false);
?>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="shipment_comments"><?php echo $_smarty_tpl->__("comments");?>
</label>
                <div class="controls">
                    <textarea id="shipmentcomments" name="shipment_data[comments]" cols="55" rows="8" class="span9"></textarea>
                </div>
            </div>

            <?php if (fn_check_view_permissions("orders.update_status")) {?>
            <div class="control-group">
                <label class="control-label" for="order_status"><?php echo $_smarty_tpl->__("order_status");?>
</label>
                <div class="controls">
                    <select id="order_status" name="shipment_data[order_status]">
                        <option value=""><?php echo $_smarty_tpl->__("do_not_change");?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_simple_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null)), 'status', false, 'key');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <p class="muted description">
                        <?php echo $_smarty_tpl->__("text_order_status_notification");?>

                    </p>
                </div>
            </div>
            <?php }?>
        </fieldset>
        
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shipments:new_shipment_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <div class="cm-toggle-button">
            <div class="control-group select-field notify-customer">
                <div class="controls">
                    <label for="shipment_notify_user" class="checkbox">
                    <input type="checkbox" name="notify_user" id="shipment_notify_user" value="Y" />
                    <?php echo $_smarty_tpl->__("send_shipment_notification_to_customer");?>
</label>
                </div>
            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['has_packages']->value) {?>
        <div id="content_tab_packages_info">
            <span class="packages-info"><?php echo $_smarty_tpl->__("text_shipping_packages_info");?>
</span>
            <?php $_smarty_tpl->_assignInScope('package_num', "1");?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping', false, 'shipping_id');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping']->value['packages_info']['packages'], 'package', false, 'package_id');
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['package_id']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('allowed', true);?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "package_container", null, null);?>
                    <div class="package-container">
                                                
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
                            packages['package_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['package_id']->value, ENT_QUOTES, 'UTF-8');?>
'] = [];
                        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <h3>
                        <?php echo $_smarty_tpl->__("package");?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['package_num']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['package']->value['shipping_params']) {?>(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['package']->value['shipping_params']['box_length'], ENT_QUOTES, 'UTF-8');?>
 x <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['package']->value['shipping_params']['box_width'], ENT_QUOTES, 'UTF-8');?>
 x <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['package']->value['shipping_params']['box_height'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>                        </h3>
                        <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['package']->value['products'], 'amount', false, 'cart_id');
$_smarty_tpl->tpl_vars['amount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart_id']->value => $_smarty_tpl->tpl_vars['amount']->value) {
$_smarty_tpl->tpl_vars['amount']->do_else = false;
?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
                                packages['package_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['package_id']->value, ENT_QUOTES, 'UTF-8');?>
']['<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_id']->value, ENT_QUOTES, 'UTF-8');?>
'] = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
';
                            <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['cart_id']->value]) {?>
                                <li><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
</span> x <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['cart_id']->value]['product'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['cart_id']->value]['product_options']) {?>(<?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['cart_id']->value]['product_options']), 0, true);
?>)<?php }?></li>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('allowed', false);?>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <span class="strong"><?php echo $_smarty_tpl->__("weight");?>
:</span> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['package']->value['weight'], ENT_QUOTES, 'UTF-8');?>
<br />
                        <span class="strong"><?php echo $_smarty_tpl->__("shipping_method");?>
:</span> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                    <?php if ($_smarty_tpl->tpl_vars['allowed']->value) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'package_container');?>

                    <?php }?>

                    <?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['package_num']->value,'assign'=>"package_num"),$_smarty_tpl);?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
</div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[shipments.add]",'cancel_action'=>"close"), 0, false);
?>
</div>


</form>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    function fn_calculate_packages()
    {
        var products = [];

        Tygh.$('.cm-shipments-package:checked').each(function(id, elm) {
            jelm = Tygh.$(elm);
            id = jelm.prop('id');

            for (var i in packages[id]) {
                if (typeof(products[i]) == 'undefined') {
                    products[i] = parseInt(packages[id][i]);
                } else {
                    products[i] += parseInt(packages[id][i]);
                }
            }
        });

        // Set the values of the ship products to 0. We will change the values to the correct variants after
        Tygh.$('.cm-shipments-product').each(function() {
            Tygh.$(this).val(0);
        });

        if (products.length > 0) {
            for (var i in products) {
                Tygh.$('#shipment_data_' + i).val(products[i]);
            }
        }
    }
    Tygh.$(document).ready(function() {
        Tygh.$('.cm-shipments-package').on('change', fn_calculate_packages);
    });
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
