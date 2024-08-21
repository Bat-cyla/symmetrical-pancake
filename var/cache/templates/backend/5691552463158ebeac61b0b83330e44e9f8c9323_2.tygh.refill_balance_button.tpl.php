<?php
/* Smarty version 4.1.1, created on 2024-08-20 11:56:31
  from '/app/www/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66c45a3fe23cb9_16992829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5691552463158ebeac61b0b83330e44e9f8c9323' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c45a3fe23cb9_16992829 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.refill_balance'));
ob_start();
echo $_smarty_tpl->__("vendor_debt_payout.refill_balance");
$_prefixVariable24=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"btn btn-primary cm-new-window",'form'=>"refill_balance",'dispatch'=>"dispatch[debt.refill_balance]",'text'=>$_prefixVariable24), true);
}
}
