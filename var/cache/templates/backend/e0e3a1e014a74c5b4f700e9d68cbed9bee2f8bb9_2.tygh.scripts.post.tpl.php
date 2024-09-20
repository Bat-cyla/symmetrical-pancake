<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:49
  from '/app/www/design/backend/templates/addons/ab__stickers/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec06416dc003_87152508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0e3a1e014a74c5b4f700e9d68cbed9bee2f8bb9' => 
    array (
      0 => '/app/www/design/backend/templates/addons/ab__stickers/hooks/index/scripts.post.tpl',
      1 => 1726724045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec06416dc003_87152508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function (_, $) {
$.extend(_, {
ab__stickers: {
functions: { },
settings: {
'theme': '<?php echo htmlspecialchars((string) fn_get_theme_path('[theme]','C'), ENT_QUOTES, 'UTF-8');?>
'
}
}
});
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo smarty_function_script(array('src'=>"js/addons/ab__stickers/admin.js"),$_smarty_tpl);
}
}
