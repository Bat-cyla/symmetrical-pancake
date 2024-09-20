<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:45
  from '/app/www/design/backend/templates/addons/ab__addons_manager/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec063d8489f3_61575113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40fb313a3a549ff138f5ebfc8b2fef348847b3b8' => 
    array (
      0 => '/app/www/design/backend/templates/addons/ab__addons_manager/hooks/index/styles.post.tpl',
      1 => 1726723206,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec063d8489f3_61575113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/ab__addons_manager/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/ab__addons_manager/icons.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/ab__addons_manager/upgrade_center.less"),$_smarty_tpl);
}
}
