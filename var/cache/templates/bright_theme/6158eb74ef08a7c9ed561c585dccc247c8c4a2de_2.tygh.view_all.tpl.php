<?php
/* Smarty version 4.1.1, created on 2024-08-08 16:16:14
  from '/app/www/design/themes/responsive/templates/views/product_features/view_all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4c51e49a9e2_18550953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6158eb74ef08a7c9ed561c585dccc247c8c4a2de' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/product_features/view_all.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
  ),
),false)) {
function content_66b4c51e49a9e2_18550953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['variants']->value) {
$_smarty_tpl->_assignInScope('size', 4);
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['variants']->value,'size'=>$_smarty_tpl->tpl_vars['size']->value,'assign'=>"splitted_filter",'preverse_keys'=>true),$_smarty_tpl);?>


<div class="ty-features-all">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_filter']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value, 'ranges', false, 'index');
$_smarty_tpl->tpl_vars['ranges']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['ranges']->value) {
$_smarty_tpl->tpl_vars['ranges']->do_else = false;
?>
    <div class="ty-features-all__group ty-column6"><?php if ($_smarty_tpl->tpl_vars['ranges']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['index']->value), 0, true);
?><ul class="ty-features-all__list"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ranges']->value, 'range');
$_smarty_tpl->tpl_vars['range']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['range']->value) {
$_smarty_tpl->tpl_vars['range']->do_else = false;
?><li class="ty-features-all__list-item"><a href="<?php echo htmlspecialchars((string) fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['range']->value['variant_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-features-all__list-a"><?php echo htmlspecialchars((string) fn_text_placeholders($_smarty_tpl->tpl_vars['range']->value['variant']), ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php } else { ?>&nbsp;<?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/product_features/view_all.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/product_features/view_all.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['variants']->value) {
$_smarty_tpl->_assignInScope('size', 4);
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['variants']->value,'size'=>$_smarty_tpl->tpl_vars['size']->value,'assign'=>"splitted_filter",'preverse_keys'=>true),$_smarty_tpl);?>
<div class="ty-features-all"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_filter']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value, 'ranges', false, 'index');
$_smarty_tpl->tpl_vars['ranges']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['ranges']->value) {
$_smarty_tpl->tpl_vars['ranges']->do_else = false;
?><div class="ty-features-all__group ty-column6"><?php if ($_smarty_tpl->tpl_vars['ranges']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['index']->value), 0, true);
?><ul class="ty-features-all__list"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ranges']->value, 'range');
$_smarty_tpl->tpl_vars['range']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['range']->value) {
$_smarty_tpl->tpl_vars['range']->do_else = false;
?><li class="ty-features-all__list-item"><a href="<?php echo htmlspecialchars((string) fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['range']->value['variant_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-features-all__list-a"><?php echo htmlspecialchars((string) fn_text_placeholders($_smarty_tpl->tpl_vars['range']->value['variant']), ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php } else { ?>&nbsp;<?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
}
}
