<?php
/* Smarty version 4.1.1, created on 2024-08-01 10:35:20
  from '/app/www/design/backend/templates/addons/gift_certificates/hooks/order_management/products_extra_items.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab3ab8f0bac9_63168694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '294f45c00763302fefcbafa780e3e63bd20fa401' => 
    array (
      0 => '/app/www/design/backend/templates/addons/gift_certificates/hooks/order_management/products_extra_items.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_66ab3ab8f0bac9_63168694 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate'));
if ($_smarty_tpl->tpl_vars['cart']->value['gift_certificates']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['gift_certificates'], 'certificate');
$_smarty_tpl->tpl_vars['certificate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['certificate']->value) {
$_smarty_tpl->tpl_vars['certificate']->do_else = false;
?>
        <tr>
            <td>&nbsp;</td>
            <td>
                <?php echo $_smarty_tpl->__("gift_certificate");?>
: <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['certificate']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['certificate']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</a>
            </td>
            <td>&nbsp;</td>
            <td colspan="3">&nbsp;
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['certificate']->value['display_subtotal']), 0, true);
?>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
