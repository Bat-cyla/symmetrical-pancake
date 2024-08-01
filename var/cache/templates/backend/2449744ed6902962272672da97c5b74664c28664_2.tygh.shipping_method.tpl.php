<?php
/* Smarty version 4.1.1, created on 2024-08-01 10:35:21
  from '/app/www/design/backend/templates/views/order_management/components/shipping_method.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab3ab945b168_77283239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2449744ed6902962272672da97c5b74664c28664' => 
    array (
      0 => '/app/www/design/backend/templates/views/order_management/components/shipping_method.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_66ab3ab945b168_77283239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('shipping_method','none','no_shipping_required','text_no_shipping_methods','text_no_shipping_methods'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:shipping_method"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:shipping_method"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="control-group">
    <div class="control-label">
        <h4 class="subheader"><?php echo $_smarty_tpl->__("shipping_method");?>
</h4>
    </div>
</div>
    <?php if ($_smarty_tpl->tpl_vars['product_groups']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_groups']->value, 'group', false, 'group_key');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['shipping_by_marketplace']) {?>
                <?php continue 1;?>
            <?php }?>
            <div class="control-group">
            <label class="control-label"> <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['group']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</label>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings'] && !$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                <div class="controls">
                    <select name="shipping_ids[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]" class="cm-submit cm-ajax cm-skip-validation" data-ca-dispatch="dispatch[order_management.update_shipping]">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['shippings'], 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
) - <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0, true);
?></option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                <?php echo $_smarty_tpl->__("no_shipping_required");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                <?php $_smarty_tpl->_assignInScope('is_empty_rates', "Y");?>
            <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <span class="text-error"><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</span>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:shipping_method"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
