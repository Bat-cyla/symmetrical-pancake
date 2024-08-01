<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:08:55
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/bottom_panel/bottom_panel_main.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1b4774a292_68481785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fb6e0678f6b693ee76dbbc057098a291ece2f66' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/bottom_panel/bottom_panel_main.pre.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66aa1b4774a292_68481785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('is_demo_mode', (($tmp = $_smarty_tpl->tpl_vars['config']->value['demo_mode'] ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_theme_editor', ((defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::ADMIN_PANEL") && $_smarty_tpl->tpl_vars['auth']->value['act_as_area'] && $_smarty_tpl->tpl_vars['auth']->value['act_as_area'] === smarty_modifier_enum("UserTypes::VENDOR") || $_smarty_tpl->tpl_vars['is_demo_mode']->value) ,false ,2);
}
}
