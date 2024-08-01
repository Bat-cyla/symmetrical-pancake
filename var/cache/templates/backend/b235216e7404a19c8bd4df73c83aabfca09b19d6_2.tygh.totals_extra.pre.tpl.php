<?php
/* Smarty version 4.1.1, created on 2024-08-01 10:35:21
  from '/app/www/design/backend/templates/addons/gift_certificates/hooks/order_management/totals_extra.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab3ab921a891_41673545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b235216e7404a19c8bd4df73c83aabfca09b19d6' => 
    array (
      0 => '/app/www/design/backend/templates/addons/gift_certificates/hooks/order_management/totals_extra.pre.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab3ab921a891_41673545 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('gift_cert_code'));
?>
<div class="control-group">
    <div class="controls">
        <select name="gift_cert_code" id="gift_cert_code">
            <option value="" disabled selected hidden><?php echo $_smarty_tpl->__("gift_cert_code");?>
</option>
            <option value=""> -- </option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gift_certificates']->value, 'code');
$_smarty_tpl->tpl_vars['code']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value) {
$_smarty_tpl->tpl_vars['code']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div><?php }
}
