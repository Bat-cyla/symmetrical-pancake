<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:03:52
  from '/app/www/design/backend/templates/addons/cp_addons_manager/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab87b847c4e8_87376762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baca134b2da40a5a700ff71797cee548084c5563' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_addons_manager/hooks/index/styles.post.tpl',
      1 => 1722517426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab87b847c4e8_87376762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/cp_addons_manager/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/cp_addons_manager/cp_icons.css"),$_smarty_tpl);?>

<?php }
}