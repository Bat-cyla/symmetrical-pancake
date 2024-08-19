<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:26:47
  from '/app/www/design/backend/templates/addons/cp_addons_manager/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e0d73c17b1_42749220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baca134b2da40a5a700ff71797cee548084c5563' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_addons_manager/hooks/index/styles.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b5e0d73c17b1_42749220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/cp_addons_manager/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/cp_addons_manager/cp_icons.css"),$_smarty_tpl);?>

<?php }
}
