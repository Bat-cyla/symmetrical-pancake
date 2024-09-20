<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:49
  from '/app/www/design/backend/templates/addons/ab__category_banners/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec06416ab1b0_38282918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e8b2e55ef8484c816a5f48e5b2774208fe8dba' => 
    array (
      0 => '/app/www/design/backend/templates/addons/ab__category_banners/hooks/index/scripts.post.tpl',
      1 => 1726723238,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec06416ab1b0_38282918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__cb.validator.wrong_time_format'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function (_, $) {
_.tr({
ab__cb_wrong_time_format: '<?php echo strtr((string)$_smarty_tpl->__("ab__cb.validator.wrong_time_format"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
});
$(document).ready(function () {

$.ceFormValidator('registerValidator', {
class_name: 'cm-ab-cb-time',
message: _.tr('ab__cb_wrong_time_format'),
func: function (elm_id, elm) {
re = /^(\d{1,2}):(\d{2})?$/;
let elmVal = elm.val();
if (elmVal === '') {
return true;
}
if (regs = elmVal.match(re)) {
return regs[1] <= 23 && regs[2] <= 59;
}
return false;
}
});
});

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
