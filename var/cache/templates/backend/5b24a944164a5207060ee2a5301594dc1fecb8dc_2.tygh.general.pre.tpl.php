<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:01:25
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/general.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab8725baa182_23230853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b24a944164a5207060ee2a5301594dc1fecb8dc' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/general.pre.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_panel_configurator/config.tpl' => 1,
  ),
),false)) {
function content_66ab8725baa182_23230853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('navigation_accordion', $_smarty_tpl->tpl_vars['navigation_accordion']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_company', $_smarty_tpl->tpl_vars['show_company']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_menu_descriptions', $_smarty_tpl->tpl_vars['show_menu_descriptions']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_addon_icon', $_smarty_tpl->tpl_vars['show_addon_icon']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_menu_caret', $_smarty_tpl->tpl_vars['show_menu_caret']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('enable_sticky_scroll', $_smarty_tpl->tpl_vars['enable_sticky_scroll']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('enable_search_collapse', $_smarty_tpl->tpl_vars['enable_search_collapse']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('enable_onclick_menu', $_smarty_tpl->tpl_vars['enable_onclick_menu']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_languages_in_header_menu', $_smarty_tpl->tpl_vars['show_languages_in_header_menu']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_currencies_in_header_menu', $_smarty_tpl->tpl_vars['show_currencies_in_header_menu']->value ,false ,2);
}
}
}
