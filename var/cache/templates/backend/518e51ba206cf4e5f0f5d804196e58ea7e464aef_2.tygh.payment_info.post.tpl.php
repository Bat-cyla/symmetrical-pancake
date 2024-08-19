<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:48
  from '/app/www/design/backend/templates/addons/rus_payments/hooks/orders/payment_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde3a06c7a76_45616298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '518e51ba206cf4e5f0f5d804196e58ea7e464aef' => 
    array (
      0 => '/app/www/design/backend/templates/addons/rus_payments/hooks/orders/payment_info.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bde3a06c7a76_45616298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('addons.rus_payments.refund','send','rus_payments.print_invoice.sbrf','send','rus_payments.print_invoice.account'));
if ($_smarty_tpl->tpl_vars['show_refund']->value) {?>
    <div class="btn-group">
        <a class="btn cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="rus_payments_refund_dialog"><?php echo $_smarty_tpl->__("addons.rus_payments.refund");?>
</a>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['processor_script']->value === "sbrf.php") {?>
    <div class="btn-group">
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['pdf_documents']['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
            <a class="btn-small cm-ajax" href="<?php echo htmlspecialchars((string) fn_url("orders.send_sbrf_receipt?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("send");?>
</a>
        <?php }?>
        <a class="btn-small cm-new-window" href="<?php echo htmlspecialchars((string) fn_url("orders.print_sbrf_receipt?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("rus_payments.print_invoice.sbrf");?>
</a>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['processor_script']->value === "account.php") {?>
    <div class="btn-group">
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['pdf_documents']['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
            <a class="btn-small cm-ajax" href="<?php echo htmlspecialchars((string) fn_url("orders.send_account_payment?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("send");?>
</a>
        <?php }?>
        <a class="btn-small cm-new-window" href="<?php echo htmlspecialchars((string) fn_url("orders.print_invoice_payment?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("rus_payments.print_invoice.account");?>
</a>
    </div>
<?php }
}
}
