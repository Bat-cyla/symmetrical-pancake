<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:48
  from '/app/www/design/backend/templates/addons/yml_export/hooks/orders/payment_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde3a06ae757_82876482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eb8bc88f85f6da3d40eace9110acff9076a9ce9' => 
    array (
      0 => '/app/www/design/backend/templates/addons/yml_export/hooks/orders/payment_info.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bde3a06ae757_82876482 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('method','yml_export','order_id','payment_type','yml2_payment_type_','payment_method','yml2_payment_method_','status','reason','yml2_substatus_'));
if ($_smarty_tpl->tpl_vars['order_info']->value['yml_export']) {?>

    <div class="control-group">
        <div class="control-label"><?php echo $_smarty_tpl->__("method");?>
</div>
        <div id="tygh_payment_info" class="controls"><?php echo $_smarty_tpl->__("yml_export");?>
</div>
    </div>

    <div class="control-group">
        <div class="control-label"><?php echo $_smarty_tpl->__("order_id");?>
</div>
        <div class="controls"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['yml_export']['order_id'], ENT_QUOTES, 'UTF-8');?>
</div>
    </div>

    <div class="control-group">
        <div class="control-label"><?php echo $_smarty_tpl->__("payment_type");?>
</div>
        <?php if ($_smarty_tpl->tpl_vars['order_info']->value['yml_export']['payment_type']) {?>
            <div class="controls"><?php ob_start();
echo htmlspecialchars((string) strtolower($_smarty_tpl->tpl_vars['order_info']->value['yml_export']['payment_type']), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->__("yml2_payment_type_".$_prefixVariable1);?>
</div>
        <?php }?>
    </div>

    <div class="control-group">
        <div class="control-label"><?php echo $_smarty_tpl->__("payment_method");?>
</div>
        <?php if ($_smarty_tpl->tpl_vars['order_info']->value['yml_export']['payment_method']) {?>
            <div class="controls"><?php ob_start();
echo htmlspecialchars((string) strtolower($_smarty_tpl->tpl_vars['order_info']->value['yml_export']['payment_method']), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->__("yml2_payment_method_".$_prefixVariable2);?>
</div>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['yml_export']['status']) {?>
        <div class="control-group">
            <div class="control-label"><?php echo $_smarty_tpl->__("status");?>
</div>
            <div class="controls"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['yml_export']['status'], ENT_QUOTES, 'UTF-8');?>
</div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['yml_export']['substatus']) {?>
        <div class="control-group">
            <div class="control-label"><?php echo $_smarty_tpl->__("reason");?>
</div>
            <div class="controls"><?php ob_start();
echo htmlspecialchars((string) strtolower($_smarty_tpl->tpl_vars['order_info']->value['yml_export']['substatus']), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
echo $_smarty_tpl->__("yml2_substatus_".$_prefixVariable3);?>
</div>
        </div>
    <?php }?>

<?php }
}
}
