<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:03:53
  from '/app/www/design/backend/templates/addons/cp_addons_manager/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab87b9aee9b0_15676744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f49ef53f382fa3104cbbe4dc341245f77dd6d594' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_addons_manager/hooks/index/scripts.post.tpl',
      1 => 1722517426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab87b9aee9b0_15676744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/cp_addons_manager/func.js"),$_smarty_tpl);?>

<?php }
}