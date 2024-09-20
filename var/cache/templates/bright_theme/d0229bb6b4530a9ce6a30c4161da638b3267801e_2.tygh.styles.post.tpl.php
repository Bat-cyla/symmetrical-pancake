<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:15
  from '/app/www/design/themes/responsive/templates/addons/ab__stickers/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065b4a6fc1_37421688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0229bb6b4530a9ce6a30c4161da638b3267801e' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/ab__stickers/hooks/index/styles.post.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec065b4a6fc1_37421688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"addons/ab__stickers/styles.less"),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_ab__stickers_sticker_get_ts_appearance_styles(), 'appearance_style');
$_smarty_tpl->tpl_vars['appearance_style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['appearance_style']->key => $_smarty_tpl->tpl_vars['appearance_style']->value) {
$_smarty_tpl->tpl_vars['appearance_style']->do_else = false;
$__foreach_appearance_style_4_saved = $_smarty_tpl->tpl_vars['appearance_style'];
?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__stickers/".((string)$_smarty_tpl->tpl_vars['appearance_style']->key)."_stickers.less"),$_smarty_tpl);?>

<?php
$_smarty_tpl->tpl_vars['appearance_style'] = $__foreach_appearance_style_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo smarty_function_style(array('src'=>"addons/ab__stickers/theme.less"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__stickers/rtl.less"),$_smarty_tpl);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"addons/ab__stickers/styles.less"),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_ab__stickers_sticker_get_ts_appearance_styles(), 'appearance_style');
$_smarty_tpl->tpl_vars['appearance_style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['appearance_style']->key => $_smarty_tpl->tpl_vars['appearance_style']->value) {
$_smarty_tpl->tpl_vars['appearance_style']->do_else = false;
$__foreach_appearance_style_5_saved = $_smarty_tpl->tpl_vars['appearance_style'];
?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__stickers/".((string)$_smarty_tpl->tpl_vars['appearance_style']->key)."_stickers.less"),$_smarty_tpl);?>

<?php
$_smarty_tpl->tpl_vars['appearance_style'] = $__foreach_appearance_style_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo smarty_function_style(array('src'=>"addons/ab__stickers/theme.less"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__stickers/rtl.less"),$_smarty_tpl);?>

<?php }
}
}
}
