<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:45
  from '/app/www/design/backend/templates/addons/advanced_import/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec063d8841e5_26989549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c31ebb4a91105ebaef7342fb0c3e984d9f0cc6f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/advanced_import/hooks/index/styles.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec063d8841e5_26989549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/advanced_import/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/advanced_import/read_more.less"),$_smarty_tpl);
}
}
