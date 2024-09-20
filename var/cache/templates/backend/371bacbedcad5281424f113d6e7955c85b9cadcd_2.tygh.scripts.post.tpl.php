<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:49
  from '/app/www/design/backend/templates/addons/ab__motivation_block/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec06416cfe74_85621178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '371bacbedcad5281424f113d6e7955c85b9cadcd' => 
    array (
      0 => '/app/www/design/backend/templates/addons/ab__motivation_block/hooks/index/scripts.post.tpl',
      1 => 1726723965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec06416cfe74_85621178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'ab__motivation_block') {
echo smarty_function_script(array('src'=>"js/addons/ab__motivation_block/admin.js"),$_smarty_tpl);?>

<?php }
}
}
