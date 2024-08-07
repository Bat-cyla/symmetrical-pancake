<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:01:25
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions_wrapper.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab8725803f73_66563892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5cf275f5878ac462eefc3e949fc514124eb953' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions_wrapper.pre.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_panel_configurator/config.tpl' => 1,
  ),
),false)) {
function content_66ab8725803f73_66563892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('enable_sticky_scroll', $_smarty_tpl->tpl_vars['enable_sticky_scroll']->value ,false ,2);
}
}
}
