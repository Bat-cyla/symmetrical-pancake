<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:08:56
  from '/app/www/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1b48904129_72995842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3738b7d88fb27f064748395681a9e9822e5254b3' => 
    array (
      0 => '/app/www/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66aa1b48904129_72995842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/paypal/integrated_signup.js"),$_smarty_tpl);?>

<?php }
}
