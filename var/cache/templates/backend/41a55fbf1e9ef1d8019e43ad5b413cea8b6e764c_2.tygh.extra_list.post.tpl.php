<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:48
  from '/app/www/design/backend/templates/addons/gift_certificates/hooks/orders/extra_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde3a03999e1_75478390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41a55fbf1e9ef1d8019e43ad5b413cea8b6e764c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/gift_certificates/hooks/orders/extra_list.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:common/price.tpl' => 7,
    'tygh:common/options_info.tpl' => 1,
  ),
),false)) {
function content_66bde3a03999e1_75478390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('collapse_sublist_of_items','gift_certificate','print_card','code','free','free','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','product','price','quantity','discount','tax','subtotal','deleted_product','sku'));
if ($_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['gift_certificates'], 'gift', false, 'gift_key');
$_smarty_tpl->tpl_vars['gift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gift_key']->value => $_smarty_tpl->tpl_vars['gift']->value) {
$_smarty_tpl->tpl_vars['gift']->do_else = false;
?>
<tr <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
>
    <td>
        <div class="pull-left">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-caret-right hand cm-combination",'id'=>"on_gc_".((string)$_smarty_tpl->tpl_vars['gift_key']->value)),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-caret-down hand cm-combination hidden",'id'=>"off_gc_".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'title'=>$_smarty_tpl->__("collapse_sublist_of_items")),$_smarty_tpl);?>

        </div>
        <div class="pull-left">
            <?php echo $_smarty_tpl->__("gift_certificate");?>
&nbsp;
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"gift_certificates.print?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&gift_cert_cart_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_text'=>$_smarty_tpl->__("print_card"),'but_role'=>"text",'but_meta'=>"cm-new-window text-button-simple"), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code']) {?>
            <p><?php echo $_smarty_tpl->__("code");?>
:&nbsp;<a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</a></p>
            <?php }?>
        </div>
    </td>
    <td><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0, true);
} else {
echo $_smarty_tpl->__("free");
}?></td>
    <td class="center">&nbsp;1</td>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
    <td>-</td>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
    <td>-</td>
    <?php }?>
    <td class="right">&nbsp;<span><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0, true);
} else {
echo $_smarty_tpl->__("free");
}?></span></td>
</tr>
<?php $_smarty_tpl->_assignInScope('_colspan', "4");?>
<tr <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
 class="row-more hidden">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
        <?php $_smarty_tpl->_assignInScope('_colspan', $_smarty_tpl->tpl_vars['_colspan']->value+1);?>
        <td>&nbsp;</td>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
        <?php $_smarty_tpl->_assignInScope('_colspan', $_smarty_tpl->tpl_vars['_colspan']->value+1);?>
        <td>&nbsp;</td>
    <?php }?>
    <td>&nbsp;</td>
</tr>

<tr id="gc_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
 hidden row-more row-gray">
    <td colspan="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'UTF-8');?>
">

        <table width="100%" class="table-condensed">
        <tr class="no-border">
            <td class="nowrap"><span><?php echo $_smarty_tpl->__("gift_cert_to");?>
</span>:</td>
            <td>&nbsp;</td>
            <td class="nowrap" width="100%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td class="nowrap"><span><?php echo $_smarty_tpl->__("gift_cert_from");?>
</span>:</td>
            <td>&nbsp;</td>
            <td class="nowrap" width="100%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td class="nowrap"><span><?php echo $_smarty_tpl->__("amount");?>
</span>:</td>
            <td>&nbsp;</td>
            <td class="nowrap" width="100%"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0, true);
?></td>
        </tr>
        <tr>
            <td class="nowrap"><span><?php echo $_smarty_tpl->__("send_via");?>
</span>:</td>
            <td>&nbsp;</td>
            <td class="nowrap" width="100%"><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via'] == "E") {
echo $_smarty_tpl->__("email");
} else {
echo $_smarty_tpl->__("postal_mail");
}?></td>
        </tr>
        </table>
        <?php if ($_smarty_tpl->tpl_vars['gift']->value['products'] && $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
        <table width="100%" class="table-condensed">
        <tr class="no-border">
            <th width="50%"><?php echo $_smarty_tpl->__("product");?>
</th>
            <th width="10%"><?php echo $_smarty_tpl->__("price");?>
</th>
            <th width="10%" class="center"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
            <th width="10%"><?php echo $_smarty_tpl->__("discount");?>
</th>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
            <th width="10%"><?php echo $_smarty_tpl->__("tax");?>
</th>
            <?php }?>
            <th class="right" width="10%"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['products'], 'oi', false, 'sub_key');
$_smarty_tpl->tpl_vars['oi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_key']->value => $_smarty_tpl->tpl_vars['oi']->value) {
$_smarty_tpl->tpl_vars['oi']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['parent']['certificate'] && $_smarty_tpl->tpl_vars['oi']->value['extra']['parent']['certificate'] == $_smarty_tpl->tpl_vars['gift_key']->value) {?>
        <tr valign="top">
            <td>
                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product']) {?>
                    <?php if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['oi']->value['product'],50,"...",true), ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?></a><?php }?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("deleted_product");?>

                <?php }?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_code']) {?>
                <p><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p>
                <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><div class="options-info">&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0, true);
?></div><?php }?>
            </td>
            <td>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['original_price']), 0, true);
?></td>
            <td class="center">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
            <td>
                <?php if (floatval($_smarty_tpl->tpl_vars['oi']->value['extra']['discount'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['extra']['discount']), 0, true);
} else { ?>-<?php }?></td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
            <td>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['tax_value']), 0, true);
?></td>
            <?php }?>
            <td class="nowrap right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['display_subtotal']), 0, true);
?></td>
        </tr>
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <?php }?>
    </td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
}
