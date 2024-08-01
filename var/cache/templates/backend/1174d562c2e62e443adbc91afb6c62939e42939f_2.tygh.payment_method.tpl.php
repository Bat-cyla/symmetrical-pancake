<?php
/* Smarty version 4.1.1, created on 2024-08-01 10:35:21
  from '/app/www/design/backend/templates/views/order_management/components/payment_method.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab3ab93e9d06_91810025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1174d562c2e62e443adbc91afb6c62939e42939f' => 
    array (
      0 => '/app/www/design/backend/templates/views/order_management/components/payment_method.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_66ab3ab93e9d06_91810025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('payment_information','method','text_min_order_amount_required'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:payment_method"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:payment_method"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('enable_required', (($tmp = $_smarty_tpl->tpl_vars['enable_required']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('required', $_smarty_tpl->tpl_vars['enable_required']->value ? "cm-required" : " ");?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['min_order_amount'] <= $_smarty_tpl->tpl_vars['cart']->value['total']) {?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['total'] != 0) {?>
        <div class="control-group">
            <div class="control-label">
                <h4 class="subheader"><?php echo $_smarty_tpl->__("payment_information");?>
</h4>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="payment_methods"><?php echo $_smarty_tpl->__("method");?>
</label>
            <div class="controls">
            <select name="payment_id" id="payment_methods" class="cm-submit cm-ajax cm-skip-validation" data-ca-dispatch="dispatch[order_management.update_payment]">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'pm', false, NULL, 'pay', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['pm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pm']->value) {
$_smarty_tpl->tpl_vars['pm']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_pay']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_pay']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_pay']->value['index'];
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pm']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_id'] == $_smarty_tpl->tpl_vars['pm']->value['payment_id'] || (!$_smarty_tpl->tpl_vars['cart']->value['payment_id'] && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_pay']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pay']->value['first'] : null))) {
$_smarty_tpl->_assignInScope('selected_payment_id', $_smarty_tpl->tpl_vars['pm']->value['payment_id']);?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pm']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['payment_method']->value['template']) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "payment_details", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['payment_method']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('payment_id'=>$_smarty_tpl->tpl_vars['payment_method']->value['payment_id'],'enable_required'=>$_smarty_tpl->tpl_vars['enable_required']->value,'required'=>$_smarty_tpl->tpl_vars['required']->value), 0, true);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'payment_details'))) {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'payment_details');?>

            <?php }?>
        <?php }?>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['min_order_amount'] > $_smarty_tpl->tpl_vars['cart']->value['total']) {?>
        <label class="text-error">
            <?php echo $_smarty_tpl->__("text_min_order_amount_required");?>
&nbsp;<span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['settings']->value['Checkout']['min_order_amount']), 0, false);
?></span>
        </label>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:payment_method"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
