<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:45
  from '/app/www/design/backend/templates/addons/ab__motivation_block/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec063d8cf209_52550790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd029c13414b40e81d735ceacfa67cead0593477f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/ab__motivation_block/hooks/index/styles.post.tpl',
      1 => 1726723965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec063d8cf209_52550790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
echo smarty_function_style(array('src'=>"addons/ab__motivation_block/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/responsive_icons.less"),$_smarty_tpl);?>

<?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'],array('abt__youpitheme'))) {
echo smarty_function_style(array('src'=>"addons/ab__motivation_block/".((string)$_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'])."_icons.less"),$_smarty_tpl);?>

<?php }
}
}
