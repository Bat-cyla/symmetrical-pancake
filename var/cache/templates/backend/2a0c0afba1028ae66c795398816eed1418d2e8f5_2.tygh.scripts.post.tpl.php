<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:49
  from '/app/www/design/backend/templates/addons/hybrid_auth/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec06416f5f36_25760353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a0c0afba1028ae66c795398816eed1418d2e8f5' => 
    array (
      0 => '/app/www/design/backend/templates/addons/hybrid_auth/hooks/index/scripts.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec06416f5f36_25760353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/hybrid_auth/func.js"),$_smarty_tpl);
}
}
