<?php
/* Smarty version 4.1.1, created on 2024-08-01 10:35:21
  from '/app/www/design/backend/templates/addons/gift_certificates/hooks/order_management/totals.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab3ab92cea76_96419120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b748c6ab34e816b199b09cc683be31271b90274f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/gift_certificates/hooks/order_management/totals.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_66ab3ab92cea76_96419120 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','remove'));
if ($_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates']) {?>
<input type="hidden" name="cert_code" value="" />
    <tr>
        <td class="right muted strong"><?php echo $_smarty_tpl->__("gift_certificate");?>
:</td>
        <td class="right">&nbsp;</td>
    </tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates'], 'ugc', false, 'ugc_key');
$_smarty_tpl->tpl_vars['ugc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ugc_key']->value => $_smarty_tpl->tpl_vars['ugc']->value) {
$_smarty_tpl->tpl_vars['ugc']->do_else = false;
?>
    <tr>
        <td class="right nowrap">
            <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['ugc']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ugc_key']->value, ENT_QUOTES, 'UTF-8');?>
</a>
            <a href="<?php echo htmlspecialchars((string) fn_url("order_management.delete_use_certificate?gift_cert_code=".((string)$_smarty_tpl->tpl_vars['ugc_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="icon-trash cm-tooltip cm-post" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>:
        </td>
        <td class="right text-success"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['ugc']->value['cost'])), 0, true);
?></td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
