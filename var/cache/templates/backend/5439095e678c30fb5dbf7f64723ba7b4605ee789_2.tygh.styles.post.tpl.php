<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:45
  from '/app/www/design/backend/templates/addons/abt__unitheme2/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec063d9712b4_81524042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5439095e678c30fb5dbf7f64723ba7b4605ee789' => 
    array (
      0 => '/app/www/design/backend/templates/addons/abt__unitheme2/hooks/index/styles.post.tpl',
      1 => 1726724127,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec063d9712b4_81524042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/abt__unitheme2/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/abt__unitheme2/front_icons.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/abt__unitheme2/upgrade_notifications.less"),$_smarty_tpl);
}
}
