<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:42
  from '/app/www/design/backend/templates/views/block_manager/components/device_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bda461d91_68232120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de96a58eafb90a8804c75b6a435867c6b7b794bd' => 
    array (
      0 => '/app/www/design/backend/templates/views/block_manager/components/device_icons.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab5bda461d91_68232120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('devices', (($tmp = $_smarty_tpl->tpl_vars['item']->value['availability'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('all_devices', array_filter($_smarty_tpl->tpl_vars['devices']->value) == $_smarty_tpl->tpl_vars['devices']->value);?>

<div class="device-specific-block__devices <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devices']->value, 'is_available', false, 'device');
$_smarty_tpl->tpl_vars['is_available']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device']->value => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->do_else = false;
?>
        <div class="device-specific-block__devices__device device-specific-block__devices__device--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
 icon-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['all_devices']->value || !$_smarty_tpl->tpl_vars['is_available']->value) {?>hidden<?php }?>"></div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
