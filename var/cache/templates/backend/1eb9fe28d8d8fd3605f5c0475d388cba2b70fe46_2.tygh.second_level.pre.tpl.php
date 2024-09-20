<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:49
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/second_level.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec0641029216_82225672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eb9fe28d8d8fd3605f5c0475d388cba2b70fe46' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/second_level.pre.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec0641029216_82225672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('second_level_class', smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['second_level_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"nav__menu-subitem--hidden-by-permissions",'') ,false ,2);
if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR") && (defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null) && $_smarty_tpl->tpl_vars['second_level']->value['hidden_by_permissions']) {?>
    <?php $_smarty_tpl->_assignInScope('second_level_class', ((string)$_smarty_tpl->tpl_vars['second_level_class']->value)." nav__menu-subitem--hidden-by-permissions" ,false ,2);
}
}
}
