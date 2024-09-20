<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:49
  from '/app/www/design/backend/templates/addons/ab__scroll_to_top/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec06416c31f3_17927191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdc6a1a6c5b43f728d668cf6c34a86a4cb003095' => 
    array (
      0 => '/app/www/design/backend/templates/addons/ab__scroll_to_top/hooks/index/scripts.post.tpl',
      1 => 1726724283,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec06416c31f3_17927191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ((($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['show_in_admin_panel'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
$.extend(_, {
ab__stt: {
settings: <?php echo json_encode($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']);?>
,
units: '<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['units'] ?? null)===null||$tmp==='' ? 'px' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
',
transition: <?php echo htmlspecialchars((string) intval((($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['transition'] ?? null)===null||$tmp==='' ? 600 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
}
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo smarty_function_script(array('src'=>"js/addons/ab__scroll_to_top/common.js"),$_smarty_tpl);?>

<?php }
}
}
