<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:48
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/first_level.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec0640e33cb0_56167778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a0d579febbd24a693ed297bca25ac16f4be93e1' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/first_level.pre.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec0640e33cb0_56167778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('first_level_class', smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['first_level_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"nav__menu-item--root-hidden",'') ,false ,2);
if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR") && (defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null) && $_smarty_tpl->tpl_vars['m']->value['root_hidden']) {?>
    <?php $_smarty_tpl->_assignInScope('first_level_class', ((string)$_smarty_tpl->tpl_vars['first_level_class']->value)." nav__menu-item--root-hidden" ,false ,2);
}?>

<?php $_smarty_tpl->_assignInScope('first_level_class', smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['first_level_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"nav__menu-item--hidden-by-permissions",'') ,false ,2);
if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR") && (defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null) && $_smarty_tpl->tpl_vars['m']->value['hidden_by_permissions']) {?>
    <?php $_smarty_tpl->_assignInScope('first_level_class', ((string)$_smarty_tpl->tpl_vars['first_level_class']->value)." nav__menu-item--hidden-by-permissions" ,false ,2);
}
}
}
