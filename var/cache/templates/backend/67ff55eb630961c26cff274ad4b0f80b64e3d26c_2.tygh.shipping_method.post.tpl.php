<?php
/* Smarty version 4.1.1, created on 2024-09-20 07:36:02
  from '/app/www/design/backend/templates/addons/store_locator/hooks/order_management/shipping_method.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ecfbb2e67774_33862463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67ff55eb630961c26cff274ad4b0f80b64e3d26c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/store_locator/hooks/order_management/shipping_method.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_66ecfbb2e67774_33862463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('store_locator.work_time','delivery_time','store_locator.work_time','delivery_time'));
if ($_smarty_tpl->tpl_vars['product_groups']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_groups']->value, 'group', false, 'group_key');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings'] && !$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['shippings'], 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                
                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']) {?>

                        <?php $_smarty_tpl->_assignInScope('old_store_id', $_smarty_tpl->tpl_vars['old_ship_data']->value[$_smarty_tpl->tpl_vars['group_key']->value]['store_location_id']);?>
                        <?php $_smarty_tpl->_assignInScope('shipping_id', $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']);?>
                        <?php $_smarty_tpl->_assignInScope('select_id', $_smarty_tpl->tpl_vars['select_store']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]);?>
                        <?php $_smarty_tpl->_assignInScope('store_count', smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']));?>

                        <?php if ($_smarty_tpl->tpl_vars['store_count']->value == 1) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
                            <div class="sidebar-row">
                                <input type="hidden"
                                    name="select_store[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    id="store_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    class="cm-submit cm-ajax cm-skip-validation"
                                    data-ca-dispatch="dispatch[order_management.update_shipping]"
                                    data-ca-pickup-select-store="true"
                                    data-ca-shipping-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-group-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-location-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']) {?>(<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0, true);
?>)<?php }?>
                                <p class="muted">
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['city'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');?>
,
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
<br/>
                                <?php echo $_smarty_tpl->__("store_locator.work_time");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_time'], ENT_QUOTES, 'UTF-8');?>

                                <br/>
                                <?php if ($_smarty_tpl->tpl_vars['store']->value['delivery_time']) {
echo $_smarty_tpl->__("delivery_time");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['delivery_time'], ENT_QUOTES, 'UTF-8');
}?>
                                </p>
                            </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
                            <div class="sidebar-row">
                                <div class="control-group">
                                    <div id="pickup_stores" class="controls">
                                        <label for="store_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="radio">
                                            <input type="radio"
                                                name="select_store[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['select_id']->value == $_smarty_tpl->tpl_vars['store']->value['store_location_id'] || (!$_smarty_tpl->tpl_vars['select_id']->value && $_smarty_tpl->tpl_vars['old_store_id']->value == $_smarty_tpl->tpl_vars['store']->value['store_location_id'])) {?>checked="checked"<?php }?>
                                                id="store_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                class="cm-submit cm-ajax cm-skip-validation"
                                                data-ca-dispatch="dispatch[order_management.update_shipping]"
                                                data-ca-pickup-select-store="true"
                                                data-ca-shipping-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                data-ca-group-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                data-ca-location-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']) {?>(<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0, true);
?>)<?php }?>
                                        </label>
                                        <p class="muted">                                
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['city'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');?>
,
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
<br/>
                                            <?php echo $_smarty_tpl->__("store_locator.work_time");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['pickup_time'], ENT_QUOTES, 'UTF-8');?>

                                            <br/>
                                            <?php if ($_smarty_tpl->tpl_vars['store']->value['delivery_time']) {
echo $_smarty_tpl->__("delivery_time");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['delivery_time'], ENT_QUOTES, 'UTF-8');
}?>
                                        </p>
                                    </div>    
                                </div> 
                            </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
