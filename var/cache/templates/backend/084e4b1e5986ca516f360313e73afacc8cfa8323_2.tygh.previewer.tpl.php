<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:46
  from '/app/www/design/backend/templates/common/previewer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec063ecbe1e6_03736221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '084e4b1e5986ca516f360313e73afacc8cfa8323' => 
    array (
      0 => '/app/www/design/backend/templates/common/previewer.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec063ecbe1e6_03736221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);
}
}
