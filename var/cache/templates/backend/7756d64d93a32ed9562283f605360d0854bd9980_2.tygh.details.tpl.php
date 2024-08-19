<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:47
  from '/app/www/design/backend/templates/views/orders/details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde39fccaf18_27829157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7756d64d93a32ed9562283f605360d0854bd9980' => 
    array (
      0 => '/app/www/design/backend/templates/views/orders/details.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/shipments/components/new_shipment.tpl' => 2,
    'tygh:common/popupbox.tpl' => 4,
    'tygh:common/image.tpl' => 1,
    'tygh:common/options_info.tpl' => 1,
    'tygh:common/price.tpl' => 12,
    'tygh:common/modifier.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/subheader.tpl' => 3,
    'tygh:common/status.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:views/profiles/components/picker/picker.tpl' => 1,
    'tygh:common/carriers.tpl' => 1,
    'tygh:common/calendar.tpl' => 1,
    'tygh:views/orders/components/promotions.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:views/order_management/components/profiles_info.tpl' => 1,
    'tygh:common/view_tools.tpl' => 1,
    'tygh:buttons/save_changes.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66bde39fccaf18_27829157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),4=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('new_shipment','new_shipment','product','price','quantity','discount','tax','subtotal','product','sku','price','free','quantity','shipped','discount','tax','subtotal','free','totals','subtotal','shipping_cost','including_discount','order_discount','discount_coupon','taxes','included','tax_exempt','payment_surcharge','total','customer_notes','staff_only_notes','status','payment_information','method','credit_card','expiry_date','remove_cc_info','manager','assign_to_me','shipping_information','none','method','track_on_carrier_site','tracking_number','edit','tracking_number','carrier','new_shipment','create_detailed_shipment','shipments','shipments','new_shipment','shipments','filename','activation_mode','downloads_max_left','download_key_expiry','active','manually','immediately','after_full_payment','none','time_unlimited_download','download_key_expiry','prolongate_download_key','file_doesnt_have_key','active','not_active','order','total','invoice','credit_memo','print_invoice','print_credit_memo','print_order_details','edit_and_send_invoice','print_packing_slip','edit_order','copy','delete','notify_customer','notify_orders_department','notify_vendor'));
if ($_smarty_tpl->tpl_vars['order_info']->value['shipping']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping', false, 'shipping_id', 'f_shipp', array (
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
        <?php if (fn_check_view_permissions("shipments.add")) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/shipments/components/new_shipment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('group_key'=>$_smarty_tpl->tpl_vars['shipping']->value['group_key'],'current_shipping_id'=>$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']), 0, true);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_shipment_".((string)$_smarty_tpl->tpl_vars['shipping']->value['group_key']),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'text'=>$_smarty_tpl->__("new_shipment"),'act'=>"hidden"), 0, true);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['product_groups'], 'group', false, 'group_id');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_id']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']) {?>
            <?php if (fn_check_view_permissions("shipments.add")) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/shipments/components/new_shipment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('group_key'=>0), 0, true);
?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_shipment_0",'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'text'=>$_smarty_tpl->__("new_shipment"),'act'=>"hidden"), 0, true);
?>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="order_info_form" id="order_info_form" class="form-horizontal form-edit order-info-form">
<input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) $_REQUEST['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="order_status" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['status'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="result_ids" value="content_general" />
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />

<div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "general") {?>hidden<?php }?>" id="content_general">
    <div class="row-fluid">
        <div class="span8">
                        <div class="table-responsive-wrapper">
                <table width="100%" class="table table-middle table--relative table-responsive table--order-details-products">
                <thead>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:items_list_head"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:items_list_head"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <tr>
                            <th width="50%"><?php echo $_smarty_tpl->__("product");?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->__("price");?>
</th>
                            <th class="center" width="10%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                            <th width="5%"><?php echo $_smarty_tpl->__("discount");?>
</th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
                            <th width="10%">&nbsp;<?php echo $_smarty_tpl->__("tax");?>
</th>
                            <?php }?>
                            <th width="10%" class="right">&nbsp;<?php echo $_smarty_tpl->__("subtotal");?>
</th>
                        </tr>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:items_list_head"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['products'], 'oi', false, 'key');
$_smarty_tpl->tpl_vars['oi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['oi']->value) {
$_smarty_tpl->tpl_vars['oi']->do_else = false;
?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if (!$_smarty_tpl->tpl_vars['oi']->value['extra']['parent']) {?>
                <tr>
                    <td data-th="<?php echo $_smarty_tpl->__("product");?>
">
                        <div class="order-product-image">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>(($tmp = $_smarty_tpl->tpl_vars['oi']->value['main_pair']['icon'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oi']->value['main_pair']['detailed'] ?? null : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['oi']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id']))), 0, true);
?>
                        </div>
                        <div class="order-product-info">
                            <?php if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo $_smarty_tpl->tpl_vars['oi']->value['product'];
if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?></a><?php }?>
                            <div class="products-hint">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_code']) {?><p class="products-hint__code"><?php echo $_smarty_tpl->__("sku");?>
:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><div class="options-info"><?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0, true);
?></div><?php }?>
                        </div>
                    </td>
                    <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("price");?>
">
                        <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['original_price']), 0, true);
}?></td>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:product_quantity"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:product_quantity"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <td class="center" data-th="<?php echo $_smarty_tpl->__("quantity");?>
">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
<br />
                            <?php if ($_smarty_tpl->tpl_vars['oi']->value['shipped_amount'] > 0) {?>
                                <span class="muted"><small>(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['shipped_amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("shipped");?>
)</small></span>
                            <?php }?>
                        </td>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:product_quantity"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                    <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("discount");?>
">
                        <?php if (floatval($_smarty_tpl->tpl_vars['oi']->value['extra']['discount'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['extra']['discount']), 0, true);
} else { ?>-<?php }?></td>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
                    <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("tax");?>
">
                        <?php if (floatval($_smarty_tpl->tpl_vars['oi']->value['tax_value'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['tax_value']), 0, true);
} else { ?>-<?php }?></td>
                    <?php }?>
                    <td class="right" data-th="<?php echo $_smarty_tpl->__("subtotal");?>
"><span><?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['display_subtotal']), 0, true);
}?></span></td>
                </tr>
                <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:extra_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:extra_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:extra_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </table>
            </div>

            <!---->
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:totals"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:totals"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="order-notes statistic">

            <div class="clearfix">
                <div class="table-wrapper">
                    <table class="pull-right">
                        <tr class="totals">
                            <td class="totals-label">&nbsp;</td>
                            <td class="totals" width="100px"><h4><?php echo $_smarty_tpl->__("totals");?>
</h4></td>
                        </tr>

                        <tr>
                            <td class="statistic-label"><?php echo $_smarty_tpl->__("subtotal");?>
:</td>
                            <td class="right" data-ct-totals="subtotal"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_subtotal']), 0, true);
?></td>
                        </tr>

                        <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost'])) {?>
                            <tr>
                                <td class="statistic-label"><?php echo $_smarty_tpl->__("shipping_cost");?>
:</td>
                                <td class="right" data-ct-totals="shipping_cost"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost']), 0, true);
?></td>
                            </tr>
                        <?php }?>

                        <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['discount'])) {?>
                            <tr>
                                <td class="statistic-label"><?php echo $_smarty_tpl->__("including_discount");?>
:</td>
                                <td class="right" data-ct-totals="including_discount"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['discount']), 0, true);
?></td>
                            </tr>
                        <?php }?>

                        <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount'])) {?>
                            <tr>
                                <td class="statistic-label"><?php echo $_smarty_tpl->__("order_discount");?>
:</td>
                                <td class="right" data-ct-totals="order_discount"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount']), 0, true);
?></td>
                            </tr>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['order_info']->value['coupons']) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['coupons'], '_c', false, 'coupon');
$_smarty_tpl->tpl_vars['_c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coupon']->value => $_smarty_tpl->tpl_vars['_c']->value) {
$_smarty_tpl->tpl_vars['_c']->do_else = false;
?>
                                <tr>
                                    <td class="statistic-label"><?php echo $_smarty_tpl->__("discount_coupon");?>
:</td>
                                    <td class="right" data-ct-totals="discount_coupon"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['coupon']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']) {?>
                            <tr>
                                <td class="statistic-label"><?php echo $_smarty_tpl->__("taxes");?>
:</td>
                                <td class="right"></td>
                            </tr>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['taxes'], 'tax_data');
$_smarty_tpl->tpl_vars['tax_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax_data']->value) {
$_smarty_tpl->tpl_vars['tax_data']->do_else = false;
?>
                                <tr>
                                    <td class="statistic-label">&nbsp;<span>&middot;</span>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->tpl_vars['tax_data']->value['rate_value'],'mod_type'=>$_smarty_tpl->tpl_vars['tax_data']->value['rate_type']), 0, true);
if ($_smarty_tpl->tpl_vars['tax_data']->value['price_includes_tax'] == "Y" && ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] != "Y" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] == "subtotal")) {?>&nbsp;<?php echo $_smarty_tpl->__("included");
}
if ($_smarty_tpl->tpl_vars['tax_data']->value['regnumber']) {?>&nbsp;(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax_data']->value['regnumber'], ENT_QUOTES, 'UTF-8');?>
)<?php }?></td>
                                    <td class="right" data-ct-totals="taxes-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['tax_data']->value['tax_subtotal']), 0, true);
?></td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['order_info']->value['tax_exempt'] == "Y") {?>
                            <tr>
                                <td class="statistic-label"><?php echo $_smarty_tpl->__("tax_exempt");?>
</td>
                                <td class="right">&nbsp;</td>
                            </tr>
                        <?php }?>

                        <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge']) && !$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
                            <tr>
                                <td class="statistic-label"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
:</td>
                                <td class="right" data-ct-totals="payment_surcharge"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge']), 0, true);
?></td>
                            </tr>
                        <?php }?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:totals_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:totals_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:totals_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <tr>
                            <td class="statistic-label"><h4><?php echo $_smarty_tpl->__("total");?>
:</h4></td>
                            <td class="price right" data-ct-totals="total"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['total']), 0, true);
?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="note clearfix">
                <div class="span6">
                    <label for="notes"><?php echo $_smarty_tpl->__("customer_notes");?>
</label>
                    <textarea class="span12" name="update_order[notes]" id="notes" cols="40" rows="5"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['notes'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                </div>
                <div class="span6">
                    <label for="details"><?php echo $_smarty_tpl->__("staff_only_notes");?>
</label>
                    <textarea class="span12" name="update_order[details]" id="details" cols="40" rows="5"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['details'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                </div>
            </div>

            </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:totals"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <!---->

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:staff_only_note"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:staff_only_note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:staff_only_note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </div>
        <div class="span4">
            <div class="well orders-right-pane form-horizontal">
                <div class="control-group">
                    <div class="control-label"><h4 class="subheader"><?php echo $_smarty_tpl->__("status");?>
</h4></div>
                    <div class="controls">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:order_status"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:order_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_assignInScope('get_additional_statuses', true);?>
                            <?php $_smarty_tpl->_assignInScope('order_status_descr', fn_get_simple_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null),$_smarty_tpl->tpl_vars['get_additional_statuses']->value,true));?>
                            <?php $_smarty_tpl->_assignInScope('extra_status', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                                <?php $_smarty_tpl->_assignInScope('notify_vendor', true);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('notify_vendor', false);?>
                            <?php }?>

                            <?php $_smarty_tpl->_assignInScope('statuses', array());?>
                            <?php $_smarty_tpl->_assignInScope('order_statuses', fn_get_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null),$_smarty_tpl->tpl_vars['statuses']->value,$_smarty_tpl->tpl_vars['get_additional_statuses']->value,true));?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('suffix'=>"o",'id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'status'=>$_smarty_tpl->tpl_vars['order_info']->value['status'],'items_status'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'update_controller'=>"orders",'notify'=>true,'notify_department'=>true,'notify_vendor'=>$_smarty_tpl->tpl_vars['notify_vendor']->value,'status_target_id'=>"content_downloads",'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['extra_status']->value),'statuses'=>$_smarty_tpl->tpl_vars['order_statuses']->value,'popup_additional_class'=>"dropleft",'text_wrap'=>true), 0, false);
?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:order_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                </div>

                <div class="control-group shift-top">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("payment_information")), 0, false);
?>
                </div>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:payment_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:payment_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id']) {?>
                    <div class="control-group">
                        <div class="control-label"><?php echo $_smarty_tpl->__("method");?>
</div>
                        <div id="tygh_payment_info" class="controls"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['payment'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description']) {?>(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>
                        </div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_info']) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['payment_info'], 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <div class="control-group">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value && $_smarty_tpl->tpl_vars['key']->value != "expiry_year") {?>
                                <div class="control-label">
                                <?php if ($_smarty_tpl->tpl_vars['key']->value == "card_number") {
$_smarty_tpl->_assignInScope('cc_exists', true);
echo $_smarty_tpl->__("credit_card");
} elseif ($_smarty_tpl->tpl_vars['key']->value == "expiry_month") {
echo $_smarty_tpl->__("expiry_date");
} else {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['key']->value);
}?>
                                </div>
                                <div class="controls">
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value == "order_status") {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['item']->value,'display'=>"view",'status_type'=>''), 0, true);
?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == "reason_text") {?>
                                        <?php echo htmlspecialchars((string) nl2br($_smarty_tpl->tpl_vars['item']->value), ENT_QUOTES, 'UTF-8');?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == "expiry_month") {?>
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['payment_info']['expiry_year'], ENT_QUOTES, 'UTF-8');?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == "card_number" || $_smarty_tpl->tpl_vars['key']->value == "cvv" || $_smarty_tpl->tpl_vars['key']->value == "cvv2") {?>
                                        <div class="wrap"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</div>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:payment_info_text_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:payment_info_text_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</bdi>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:payment_info_text_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php }?>
                                </div>
                            <?php }?>
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php if ($_smarty_tpl->tpl_vars['cc_exists']->value) {?>
                        <div class="control-group">
                            <div class="control-label">
                                <input type="hidden" name="order_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("remove_cc_info"),'but_meta'=>"cm-ajax cm-comet",'but_name'=>"dispatch[orders.remove_cc_info]"), 0, false);
?>
                            </div>
                        </div>
                        <?php }?>
                    <?php }?>
                   <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:payment_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("manager")), 0, true);
?>
                <div class="control-group shift-top" id="select_manager">
                    <div class="control">
                        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                            <?php $_smarty_tpl->_assignInScope('extra_url', "&user_type=V");?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('extra_url', "&user_type=A");?>
                        <?php }?>

                        <div class="order-manager">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"update_order[issuer_id]",'item_ids'=>array($_smarty_tpl->tpl_vars['order_info']->value['issuer_data']['user_id']),'company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0, false);
?>
                            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] != $_smarty_tpl->tpl_vars['order_info']->value['issuer_id']) {?>
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'title'=>$_smarty_tpl->__("assign_to_me"),'href'=>"orders.assign_manager?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'class'=>"btn cm-ajax cm-post order-manager-assign-btn",'data'=>array("data-ca-target-id"=>"select_manager"),'icon'=>"icon-user"), true);?>

                            <?php }?>
                        </div>
                    </div>
                <!--select_manager--></div>

                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:shipping_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:shipping_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['shipping']) {?>
                        <div class="control-group shift-top">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("shipping_information")), 0, true);
?>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('is_group_shippings', count($_smarty_tpl->tpl_vars['order_info']->value['shipping']) > 1);?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping', false, 'shipping_id', 'f_shipp', array (
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>

                            <div class="control-group" >
                                <span> <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['shipping']->value['group_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>

                            <div class="control-group">
                                <div class="control-label"><?php echo $_smarty_tpl->__("method");?>
</div>
                                <div id="tygh_shipping_info" class="controls">
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>

                                </div>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['shipment_keys']) {?>
                                                                <p>
                                    <strong><?php echo $_smarty_tpl->__("track_on_carrier_site");?>
</strong>
                                </p>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping']->value['shipment_keys'], 'shipment_key');
$_smarty_tpl->tpl_vars['shipment_key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipment_key']->value) {
$_smarty_tpl->tpl_vars['shipment_key']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('shipment', $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipment_key']->value]);?>

                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:data_shipping"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:data_shipping"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <div class="control-label">
                                            <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']) {?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['name'], ENT_QUOTES, 'UTF-8');?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->__("tracking_number");?>

                                            <?php }?>
                                        </div>
                                        <div class="controls">
                                            <a class="hand cm-tooltip icon-edit cm-combination tracking-number-edit-link" title="<?php echo $_smarty_tpl->__("edit");?>
" id="sw_tracking_number_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment_key']->value, ENT_QUOTES, 'UTF-8');?>
"></a>
                                            <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url']) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url'];?>
" target="_blank" id="on_tracking_number_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['shipment']->value['tracking_number']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'UTF-8');
} else { ?>&mdash;<?php }?></a>
                                            <?php } else { ?>
                                                <span id="on_tracking_number_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'UTF-8');?>
</span>
                                            <?php }?>
                                            <div class="hidden" id="tracking_number_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <input class="input-small" type="text" name="update_shipping[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'UTF-8');?>
][tracking_number]" size="45" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'UTF-8');?>
" />
                                                <input type="hidden" name="update_shipping[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'UTF-8');?>
][shipping_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                                <input type="hidden" name="update_shipping[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'UTF-8');?>
][carrier]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['carrier'], ENT_QUOTES, 'UTF-8');?>
" />
                                            </div>
                                        </div>
                                    </div>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:data_shipping"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php } else { ?>
                                                                <?php $_smarty_tpl->_assignInScope('shipment_id', 0);?>
                                <?php $_smarty_tpl->_assignInScope('carrier', '');?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:new_shipment"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:new_shipment"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group">
                                    <label class="control-label" for="tracking_number"><?php echo $_smarty_tpl->__("tracking_number");?>
</label>
                                    <div class="controls">
                                        <input id="tracking_number" class="input-full" type="text" name="update_shipping[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment_id']->value, ENT_QUOTES, 'UTF-8');?>
][tracking_number]" size="45" value="" />
                                        <input type="hidden" name="update_shipping[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment_id']->value, ENT_QUOTES, 'UTF-8');?>
][shipping_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="carrier_key"><?php echo $_smarty_tpl->__("carrier");?>
</label>
                                    <div class="controls">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/carriers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"carrier_key",'meta'=>"input-full",'name'=>"update_shipping[".((string)$_smarty_tpl->tpl_vars['shipping']->value['group_key'])."][".((string)$_smarty_tpl->tpl_vars['shipment_id']->value)."][carrier]",'carrier'=>$_smarty_tpl->tpl_vars['carrier']->value), 0, true);
?>
                                    </div>
                                </div>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:new_shipment"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <hr>
                            <?php }?>
                            <div class="clearfix">
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['need_shipment']) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['shipment_keys']) {?>
                                        <?php $_smarty_tpl->_assignInScope('shipment_btn', $_smarty_tpl->__("new_shipment"));?>
                                        <?php $_smarty_tpl->_assignInScope('align', "left");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('shipment_btn', $_smarty_tpl->__("create_detailed_shipment"));?>
                                        <?php $_smarty_tpl->_assignInScope('align', "right");?>
                                    <?php }?>
                                    <div class="clearfix">
                                    <?php if (fn_check_view_permissions("shipments.add")) {?>
                                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-angle-right",'assign'=>'link_text_icon'),$_smarty_tpl);?>

                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_shipment_".((string)$_smarty_tpl->tpl_vars['shipping']->value['group_key']),'content'=>'','link_text'=>((string)$_smarty_tpl->tpl_vars['shipment_btn']->value).((string)$_smarty_tpl->tpl_vars['link_text_icon']->value),'act'=>"link",'href'=>" ",'link_class'=>"pull-".((string)$_smarty_tpl->tpl_vars['align']->value)), 0, true);
?>
                                    <?php }?>
                                    </div>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['is_group_shippings']->value) {?><hr><?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['shipment_keys']) {?>
                                    <?php if (!$_smarty_tpl->tpl_vars['is_group_shippings']->value) {?>
                                        <div class="pull-right">
                                            <a href="<?php echo htmlspecialchars((string) fn_url("shipments.manage?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("shipments");?>
&nbsp;(<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['order_info']->value['shipment_ids']), ENT_QUOTES, 'UTF-8');?>
)</a>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php if ($_smarty_tpl->tpl_vars['is_group_shippings']->value) {?>
                        <div class="clearfix">
                            <a class="pull-right" href="<?php echo htmlspecialchars((string) fn_url("shipments.manage?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("shipments");?>
&nbsp;(<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['order_info']->value['shipment_ids']), ENT_QUOTES, 'UTF-8');?>
)</a>
                        </div>
                        <?php }?>
                    <?php } else { ?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['product_groups'], 'group', false, 'group_id');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_id']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']) {?>
                            <div class="clearfix">
                                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['need_shipping']) {?>
                                    <?php if (fn_check_view_permissions("shipments.add")) {?>
                                        <div class="clearfix">
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_shipment_0",'content'=>'','but_text'=>$_smarty_tpl->__("new_shipment"),'act'=>"create",'but_meta'=>"btn"), 0, true);
?>
                                        </div>
                                    <?php }?>
                                <?php }?>

                                <a class="pull-right" href="<?php echo htmlspecialchars((string) fn_url("shipments.manage?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("shipments");?>
&nbsp;(<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['order_info']->value['shipment_ids']), ENT_QUOTES, 'UTF-8');?>
)</a>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:shipping_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:customer_shot_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:customer_shot_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:customer_shot_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    </div>
<!--content_general--></div>

<div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "addons") {?>hidden<?php }?>" id="content_addons">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:customer_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:customer_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:customer_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<!--content_addons--></div>

<?php if ($_smarty_tpl->tpl_vars['downloads_exist']->value) {?>
<div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "downloads") {?>hidden<?php }?>" id="content_downloads">
    <input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) $_REQUEST['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="order_status" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['status'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['products'], 'oi');
$_smarty_tpl->tpl_vars['oi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oi']->value) {
$_smarty_tpl->tpl_vars['oi']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['is_edp'] == "Y") {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:download_products_list_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:download_products_list_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div><a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a></div>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php if ($_smarty_tpl->tpl_vars['oi']->value['files']) {?>
            <input type="hidden" name="files_exists[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <table cellpadding="5" cellspacing="0" border="0" class="table">
            <tr>
                <th><?php echo $_smarty_tpl->__("filename");?>
</th>
                <th><?php echo $_smarty_tpl->__("activation_mode");?>
</th>
                <th><?php echo $_smarty_tpl->__("downloads_max_left");?>
</th>
                <th><?php echo $_smarty_tpl->__("download_key_expiry");?>
</th>
                <th><?php echo $_smarty_tpl->__("active");?>
</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oi']->value['files'], 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
            <tr>
                <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['file']->value['activation_type'] == "M") {
echo $_smarty_tpl->__("manually");?>
</label><?php } elseif ($_smarty_tpl->tpl_vars['file']->value['activation_type'] == "I") {
echo $_smarty_tpl->__("immediately");
} else {
echo $_smarty_tpl->__("after_full_payment");
}?>
                </td>
                <td><?php if ($_smarty_tpl->tpl_vars['file']->value['max_downloads']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['max_downloads'], ENT_QUOTES, 'UTF-8');?>
 / <input type="text" name="edp_downloads[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['ekey'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a-b",'a'=>$_smarty_tpl->tpl_vars['file']->value['max_downloads'],'b'=>(($tmp = $_smarty_tpl->tpl_vars['file']->value['downloads'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)),$_smarty_tpl);?>
" size="3" /><?php } else {
echo $_smarty_tpl->__("none");
}?></td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['unlimited_download'] == 'Y') {?>
                        <?php echo $_smarty_tpl->__("time_unlimited_download");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['file']->value['ekey']) {?>
                    <p><label><?php echo $_smarty_tpl->__("download_key_expiry");?>
: </label><span><?php echo htmlspecialchars((string) (($tmp = smarty_modifier_date_format($_smarty_tpl->tpl_vars['file']->value['ttl'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])) ?? null)===null||$tmp==='' ? "n/a" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span></p>

                    <p><label><?php echo $_smarty_tpl->__("prolongate_download_key");?>
: </label><?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"prolongate_date_".((string)$_smarty_tpl->tpl_vars['file']->value['file_id']),'date_name'=>"prolongate_data[".((string)$_smarty_tpl->tpl_vars['file']->value['ekey'])."]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['file']->value['ttl'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, true);
?></p>
                    <?php } else {
echo $_smarty_tpl->__("file_doesnt_have_key");
}?>
                </td>
                <td>
                    <select name="activate_files[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'UTF-8');?>
]">
                        <option value="Y" <?php if ($_smarty_tpl->tpl_vars['file']->value['active'] == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                        <option value="N" <?php if ($_smarty_tpl->tpl_vars['file']->value['active'] != "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("not_active");?>
</option>
                    </select>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:download_products_list_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!--content_downloads--></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value['promotions']) {?>
<div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "promotions") {?>hidden<?php }?>" id="content_promotions">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/orders/components/promotions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('promotions'=>$_smarty_tpl->tpl_vars['order_info']->value['promotions']), 0, false);
?>
<!--content_promotions--></div>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</form>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_smarty_tpl->tpl_vars['selected_section']->value,'track'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?>
    <?php echo $_smarty_tpl->__("order");?>
 &lrm;#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <span class="f-middle"><?php echo $_smarty_tpl->__("total");?>
: <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['total']), 0, true);
?></span><?php if ($_smarty_tpl->tpl_vars['order_info']->value['company_id']) {?> / <?php echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['order_info']->value['company_id']), ENT_QUOTES, 'UTF-8');
}?></span>

    <span class="f-small">
    <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type'] == "I" && $_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
        (<?php echo $_smarty_tpl->__("invoice");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']], ENT_QUOTES, 'UTF-8');?>
)
    <?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type'] == "C" && $_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
        (<?php echo $_smarty_tpl->__("credit_memo");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']], ENT_QUOTES, 'UTF-8');?>
)
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('timestamp', rawurlencode((string)smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']))));?>
    / <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

    </span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_assignInScope('sidebar_meta', "sidebar--order-details");?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:details_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:details_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/order_management/components/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['order_info']->value,'location'=>"I",'form_id'=>"order_info_form"), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:details_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>"orders.details?order_id="), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('print_order', $_smarty_tpl->__("print_invoice"));?>
    <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type'] == "C" && $_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
        <?php $_smarty_tpl->_assignInScope('print_order', $_smarty_tpl->__("print_credit_memo"));?>
    <?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type'] == "O") {?>
        <?php $_smarty_tpl->_assignInScope('print_order', $_smarty_tpl->__("print_order_details"));?>
    <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:details_tools"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:details_tools"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['print_order']->value,'href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'class'=>"cm-new-window"), true);?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['email_templates'] === "new") {?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit_and_send_invoice"),'href'=>"orders.modify_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), true);?>
</li>
            <?php }?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("print_packing_slip"),'href'=>"orders.print_packing_slip?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'class'=>"cm-new-window"), true);?>
</li>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit_order"),'href'=>"order_management.edit?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), true);?>
</li>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("copy"),'href'=>"order_management.edit?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&copy=1"), true);?>
</li>
            <li>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'href'=>"orders.delete?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&redirect_url=orders.manage",'class'=>"cm-confirm",'method'=>"POST"), true);?>

            </li>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_tools');?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:details_tools"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


    <div class="btn-group btn-hover dropleft">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"cm-no-ajax dropdown-toggle",'but_role'=>"submit-link",'but_target_form'=>"order_info_form",'but_name'=>"dispatch[orders.update_details]",'save'=>true), 0, false);
?>
        <ul class="dropdown-menu">
            <?php $_smarty_tpl->_assignInScope('notify_customer_status', false);?>
            <?php $_smarty_tpl->_assignInScope('notify_department_status', false);?>
            <?php $_smarty_tpl->_assignInScope('notify_vendor_status', false);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:notify_checkboxes"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:notify_checkboxes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <li><a><input type="checkbox" name="notify_user" <?php if ($_smarty_tpl->tpl_vars['notify_customer_status']->value == true) {?> checked="checked" <?php }?> id="notify_user" value="Y" form="order_info_form" />
                    <?php echo $_smarty_tpl->__("notify_customer");?>
</a></li>
                <li><a><input type="checkbox" name="notify_department" <?php if ($_smarty_tpl->tpl_vars['notify_department_status']->value == true) {?> checked="checked" <?php }?> id="notify_department" value="Y" form="order_info_form" />
                    <?php echo $_smarty_tpl->__("notify_orders_department");?>
</a></li>
                <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <li>
                    <a><input type="checkbox" name="notify_vendor" <?php if ($_smarty_tpl->tpl_vars['notify_vendor_status']->value == true) {?> checked="checked" <?php }?> id="notify_vendor" value="Y" form="order_info_form" />
                        <?php echo $_smarty_tpl->__("notify_vendor");?>
</a>
                </li>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:notify_checkboxes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </ul>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox_title'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'sidebar_position'=>"left",'sidebar_icon'=>"icon-user"), 0, false);
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:detailed_after_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:detailed_after_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:detailed_after_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
