<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:01:25
  from '/app/www/design/backend/templates/buttons/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab87255d4b92_20557285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '278a57cb0eddffe78552e194292c8588e7ce4654' => 
    array (
      0 => '/app/www/design/backend/templates/buttons/search.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_66ab87255d4b92_20557285 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_button'));
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("admin_search_button"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value), 0, false);
}
}
