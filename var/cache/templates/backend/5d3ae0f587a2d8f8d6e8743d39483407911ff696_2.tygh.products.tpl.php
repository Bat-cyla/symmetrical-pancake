<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:14:50
  from '/app/www/design/backend/templates/views/order_management/components/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac795a0b3f48_96059112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d3ae0f587a2d8f8d6e8743d39483407911ff696' => 
    array (
      0 => '/app/www/design/backend/templates/views/order_management/components/products.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/image.tpl' => 1,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/price.tpl' => 4,
    'tygh:views/products/components/select_product_options.tpl' => 1,
    'tygh:views/products/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_66ac795a0b3f48_96059112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('product','price','discount','quantity','options','product','delete','sku','price','free','discount','quantity','options','expand_collapse_list','expand_collapse_list','show_options','expand_collapse_list','expand_collapse_list','hide_options','nocombination'));
?>
<table width="100%" class="table table--relative table-responsive table-middle order-management-products">
<thead>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:items_list_head"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:items_list_head"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <tr>
            <th class="left">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></th>
            <th width="50%"><?php echo $_smarty_tpl->__("product");?>
</th>
            <th width="20%" colspan="2"><?php echo $_smarty_tpl->__("price");?>
&nbsp;(<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']);?>
)</th>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>
            <th width="10%"><?php echo $_smarty_tpl->__("discount");?>
&nbsp;(<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']);?>
)</th>
            <?php }?>
            <th class="center"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th width="3%"><?php echo $_smarty_tpl->__("options");?>
</th>
        </tr>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:items_list_head"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</thead>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "extra_items", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:products_extra_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:products_extra_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:products_extra_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_products']->value, 'cp', false, 'key');
$_smarty_tpl->tpl_vars['cp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cp']->value) {
$_smarty_tpl->tpl_vars['cp']->do_else = false;
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<tr>
    <td class="left order-management-product-check">
        <input type="checkbox" name="cart_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
    <td data-th="<?php echo $_smarty_tpl->__("product");?>
">
        <div class="order-product-image">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>(($tmp = $_smarty_tpl->tpl_vars['cp']->value['main_pair']['icon'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cp']->value['main_pair']['detailed'] ?? null : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['cp']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['cp']->value['product_id']))), 0, true);
?>
        </div>
        <div class="order-product-info">
            <a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['cp']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['cp']->value['product'];?>
</a>
            <a class="cm-confirm cm-post hidden-tools icon-remove-sign order-management-delete" href="<?php echo htmlspecialchars((string) fn_url("order_management.delete?cart_ids[]=".((string)$_smarty_tpl->tpl_vars['key']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("delete");?>
"></a>
            <div class="products-hint">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['cp']->value['product_code']) {?><p class="products-hint__code"><?php echo $_smarty_tpl->__("sku");?>
:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['cp']->value), 0, true);
?>
        </div>
    </td>
    <td data-th="<?php echo $_smarty_tpl->__("price");?>
" width="3%" class="order-management-price-check">
        <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate']) {?>
            <?php echo $_smarty_tpl->__("free");?>

            <?php } else { ?>
            <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][stored_price]" value="N" />
            <input class="inline order-management-price-check-checkbox" type="checkbox" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][stored_price]" value="Y" <?php if ($_smarty_tpl->tpl_vars['cp']->value['stored_price'] == "Y") {?>checked="checked"<?php }?> onchange="Tygh.$('#db_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
,#manual_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
').toggle();"/>
        <?php }?>
    </td>
    <td class="left order-management-price">
    <?php if (!$_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate']) {?>
        <?php if ($_smarty_tpl->tpl_vars['cp']->value['stored_price'] == "Y") {?>
            <?php echo smarty_function_math(array('equation'=>"price - modifier",'price'=>$_smarty_tpl->tpl_vars['cp']->value['original_price'],'modifier'=>(($tmp = $_smarty_tpl->tpl_vars['cp']->value['modifiers_price'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'assign'=>"original_price"),$_smarty_tpl);?>

        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('original_price', $_smarty_tpl->tpl_vars['cp']->value['price']);?>
        <?php }?>
        <span class="<?php if ($_smarty_tpl->tpl_vars['cp']->value['stored_price'] == "Y") {?>hidden<?php }?>" id="db_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['original_price']->value), 0, true);
?></span>
        <div class="<?php if ($_smarty_tpl->tpl_vars['cp']->value['stored_price'] != "Y") {?>hidden<?php }?>" id="manual_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cp']->value['base_price'],'view'=>"input",'input_name'=>"cart_products[".((string)$_smarty_tpl->tpl_vars['key']->value)."][price]",'class'=>"input-hidden input-full",'product_id'=>$_smarty_tpl->tpl_vars['cp']->value['product_id'],'show_currency'=>false), 0, true);
?>
        </div>
    <?php }?>
    </td>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>
    <td data-th="<?php echo $_smarty_tpl->__("discount");?>
" class="no-padding nowrap">
    <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>''), 0, true);
?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']) {?>
        <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][stored_discount]" value="Y" />
        <input type="text" class="input-hidden input-mini cm-numeric" size="5" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][discount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['discount'], ENT_QUOTES, 'UTF-8');?>
" data-a-dec="," data-a-sep="." />
        <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cp']->value['discount']), 0, true);
?>
        <?php }?>
    <?php }?>
    </td>
    <?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:product_quantity"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:product_quantity"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <td data-th="<?php echo $_smarty_tpl->__("quantity");?>
" class="center order-management-quantity">
            <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate']) {?>
            <input type="hidden" size="3" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            <span class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" id="amount_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input class="input-hidden input-micro cm-value-decimal" type="text" size="3" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate']) {?>disabled="disabled"<?php }?> />
            <!--amount_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
        </td>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:product_quantity"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <td data-th="<?php echo $_smarty_tpl->__("options");?>
" width="3%" class="nowrap order-management-options">
        <?php if ($_smarty_tpl->tpl_vars['cp']->value['product_options']) {?>
        <div id="on_product_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combination-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="order-management-options-desktop">
                <div class="icon-list-ul cm-external-click" data-ca-external-click-id="on_product_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"></div>
            </div>
            <div class="order-management-options-mobile">
                <div class="btn cm-external-click" data-ca-external-click-id="on_product_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("show_options");?>
</div>
            </div>
        </div>
        <div id="off_product_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combination-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="order-management-options-desktop">
                <div class="icon-list-ul cm-external-click" data-ca-external-click-id="off_product_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"></div>
            </div>
            <div class="order-management-options-mobile">
                <div class="btn cm-external-click"  data-ca-external-click-id="off_product_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("hide_options");?>
</div>
            </div>
        </div>
        <?php }?>
    </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['cp']->value['product_options']) {?>
<tr id="product_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-ex-op hidden row-more row-gray order-management-options-content">
    <td class="mobile-hide">&nbsp;</td>
    <td colspan="<?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>9<?php } else { ?>8<?php }?>">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/select_product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['cp']->value['product_options'],'name'=>"cart_products",'id'=>$_smarty_tpl->tpl_vars['key']->value,'use_exceptions'=>"Y",'product'=>$_smarty_tpl->tpl_vars['cp']->value,'additional_class'=>"option-item"), 0, true);
?>
        <div id="warning_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="pull-left notification-title-e hidden">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->__("nocombination");?>
</div>
    </td>
</tr>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<tr>
    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->_assignInScope('company_id_for_picker', $_smarty_tpl->tpl_vars['order_company_id']->value);?>
    <?php }?>
    <td colspan="7" class="mixed-controls">
        <div class="form-inline object-product-add cm-object-product-add-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"product_data",'multiple'=>true,'select_class'=>"cm-object-product-add",'autofocus'=>$_smarty_tpl->tpl_vars['autofocus']->value,'view_mode'=>"simple",'display'=>"options_price",'extra_var'=>"order_management.add",'company_id'=>$_smarty_tpl->tpl_vars['order_company_id']->value,'dialog_opener_meta'=>"cm-dialog-destroy-on-close cm-dialog-destroy-nested-on-close",'additional_query_params'=>"company_id=".((string)$_smarty_tpl->tpl_vars['company_id_for_picker']->value)), 0, false);
?>
        </div>
    </td>
</tr>

    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'extra_items');?>

</table><?php }
}
