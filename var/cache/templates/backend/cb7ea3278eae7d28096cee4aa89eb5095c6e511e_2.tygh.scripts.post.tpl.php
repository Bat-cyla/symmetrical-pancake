<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:49
  from '/app/www/design/backend/templates/addons/vendor_rating/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec0641616406_89181165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb7ea3278eae7d28096cee4aa89eb5095c6e511e' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_rating/hooks/index/scripts.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec0641616406_89181165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/vendor_rating/formula.js"),$_smarty_tpl);?>

<?php }
}
