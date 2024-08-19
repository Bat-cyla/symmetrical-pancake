<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:04
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e0e80d86e3_14449374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4be0aa937405958874fbc89b3f428e3b3e6e47fc' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions.pre.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_panel_configurator/config.tpl' => 1,
  ),
),false)) {
function content_66b5e0e80d86e3_14449374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('navigation_accordion', $_smarty_tpl->tpl_vars['navigation_accordion']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_last_viewed_items', $_smarty_tpl->tpl_vars['show_last_viewed_items']->value ,false ,2);
}
}
}
