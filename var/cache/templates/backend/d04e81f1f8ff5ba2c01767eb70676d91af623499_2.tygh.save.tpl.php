<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:21:22
  from '/app/www/design/backend/templates/buttons/save.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac7ae22f3934_57608088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd04e81f1f8ff5ba2c01767eb70676d91af623499' => 
    array (
      0 => '/app/www/design/backend/templates/buttons/save.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_66ac7ae22f3934_57608088 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('save'));
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0, false);
}
}
