<?php
/* Smarty version 4.1.1, created on 2024-08-01 10:35:20
  from '/app/www/design/backend/templates/addons/yml_export/hooks/order_management/profile_shipping_address.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab3ab8cc1e63_72572196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab23da2987c969958b998e5352778740f9c6b961' => 
    array (
      0 => '/app/www/design/backend/templates/addons/yml_export/hooks/order_management/profile_shipping_address.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab3ab8cc1e63_72572196 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('yml2_address','yml2_address_'));
if ($_smarty_tpl->tpl_vars['user_data']->value['yml_export']) {?>
    <br />
    <p><a class="cm-combination" id="sw_ym_addr"><?php echo $_smarty_tpl->__("yml2_address");?>
</a></p>
    <div class="hidden" id="ym_addr">
        <?php $_smarty_tpl->_assignInScope('_skip', array('country_code','state_code','address'));?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['yml_export']['address'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value && !in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['_skip']->value)) {?>
                <p><?php echo $_smarty_tpl->__("yml2_address_".((string)$_smarty_tpl->tpl_vars['key']->value));?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

<?php }
}
}
