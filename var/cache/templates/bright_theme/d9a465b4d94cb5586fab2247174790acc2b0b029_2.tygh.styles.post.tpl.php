<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:15
  from '/app/www/design/themes/responsive/templates/addons/ab__deal_of_the_day/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065b44d340_63324130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9a465b4d94cb5586fab2247174790acc2b0b029' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/ab__deal_of_the_day/hooks/index/styles.post.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec065b44d340_63324130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"addons/ab__deal_of_the_day/vars.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/ab__deal_of_the_day/styles.less"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['language_direction']->value == 'rtl') {
echo smarty_function_style(array('src'=>"addons/ab__deal_of_the_day/rtl.less"),$_smarty_tpl);
}?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['countdown_type'] === "flipclock") {?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__deal_of_the_day/flipclock.less"),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__deal_of_the_day/jscounter.less"),$_smarty_tpl);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"addons/ab__deal_of_the_day/vars.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/ab__deal_of_the_day/styles.less"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['language_direction']->value == 'rtl') {
echo smarty_function_style(array('src'=>"addons/ab__deal_of_the_day/rtl.less"),$_smarty_tpl);
}?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['countdown_type'] === "flipclock") {?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__deal_of_the_day/flipclock.less"),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__deal_of_the_day/jscounter.less"),$_smarty_tpl);?>

<?php }
}
}
}
