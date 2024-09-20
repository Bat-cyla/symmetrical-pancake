<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:51
  from '/app/www/design/themes/responsive/templates/addons/ab__video_gallery/hooks/ab__stickers/product_stickers_pre.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec067f764ab7_70716500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8130377499e120d6444eff19adeee1bb3b19034' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/ab__video_gallery/hooks/ab__stickers/product_stickers_pre.override.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec067f764ab7_70716500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('ab__vg_videos', fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']));
$_smarty_tpl->_assignInScope('total_count', (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])+smarty_modifier_count($_smarty_tpl->tpl_vars['ab__vg_videos']->value)+1));
$_smarty_tpl->_assignInScope('is_vertical', (($_smarty_tpl->tpl_vars['runtime']->value['mode'] != "quick_view") && ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['vertical'] == smarty_modifier_enum("YesNo::YES"))));
$_smarty_tpl->_assignInScope('th_size', min((($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['th_size'] ?? null)===null||$tmp==='' ? 35 ?? null : $tmp),100));
if ($_smarty_tpl->tpl_vars['is_vertical']->value) {
if ($_smarty_tpl->tpl_vars['total_count']->value == 0 || $_smarty_tpl->tpl_vars['total_count']->value == 1) {
$_smarty_tpl->_assignInScope('gal_width', 0);
} elseif ($_smarty_tpl->tpl_vars['total_count']->value >= 6 && $_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery'] == smarty_modifier_enum("YesNo::NO")) {
$_smarty_tpl->_assignInScope('gal_width', ($_smarty_tpl->tpl_vars['th_size']->value*2+18+5));
} else {
$_smarty_tpl->_assignInScope('gal_width', ($_smarty_tpl->tpl_vars['th_size']->value+12+5));
}
} else {
$_smarty_tpl->_assignInScope('gal_width', $_smarty_tpl->tpl_vars['th_size']->value+10);
}
$_smarty_tpl->_assignInScope('left_or_right', "left");
if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {
$_smarty_tpl->_assignInScope('left_or_right', "right");
}
if ($_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['total_count']->value > 1 && $_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?><!-- This wrapper was overrated by ab__video_gallery add-on --><div class="ab-stickers-wrapper ab-hidden" style="<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?>width:calc(100% - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px);<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_or_right']->value, ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px;bottom<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_or_right']->value, ENT_QUOTES, 'UTF-8');
}?>:0"><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/ab__stickers/product_stickers_pre.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/hooks/ab__stickers/product_stickers_pre.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('ab__vg_videos', fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']));
$_smarty_tpl->_assignInScope('total_count', (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])+smarty_modifier_count($_smarty_tpl->tpl_vars['ab__vg_videos']->value)+1));
$_smarty_tpl->_assignInScope('is_vertical', (($_smarty_tpl->tpl_vars['runtime']->value['mode'] != "quick_view") && ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['vertical'] == smarty_modifier_enum("YesNo::YES"))));
$_smarty_tpl->_assignInScope('th_size', min((($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['th_size'] ?? null)===null||$tmp==='' ? 35 ?? null : $tmp),100));
if ($_smarty_tpl->tpl_vars['is_vertical']->value) {
if ($_smarty_tpl->tpl_vars['total_count']->value == 0 || $_smarty_tpl->tpl_vars['total_count']->value == 1) {
$_smarty_tpl->_assignInScope('gal_width', 0);
} elseif ($_smarty_tpl->tpl_vars['total_count']->value >= 6 && $_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery'] == smarty_modifier_enum("YesNo::NO")) {
$_smarty_tpl->_assignInScope('gal_width', ($_smarty_tpl->tpl_vars['th_size']->value*2+18+5));
} else {
$_smarty_tpl->_assignInScope('gal_width', ($_smarty_tpl->tpl_vars['th_size']->value+12+5));
}
} else {
$_smarty_tpl->_assignInScope('gal_width', $_smarty_tpl->tpl_vars['th_size']->value+10);
}
$_smarty_tpl->_assignInScope('left_or_right', "left");
if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {
$_smarty_tpl->_assignInScope('left_or_right', "right");
}
if ($_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['total_count']->value > 1 && $_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?><!-- This wrapper was overrated by ab__video_gallery add-on --><div class="ab-stickers-wrapper ab-hidden" style="<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?>width:calc(100% - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px);<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_or_right']->value, ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px;bottom<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_or_right']->value, ENT_QUOTES, 'UTF-8');
}?>:0"><?php }
}
}
}
