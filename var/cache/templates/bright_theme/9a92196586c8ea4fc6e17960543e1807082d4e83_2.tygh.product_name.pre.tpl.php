<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:49
  from '/app/www/design/themes/responsive/templates/addons/ab__video_gallery/hooks/products/product_name.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec067df07414_64586198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a92196586c8ea4fc6e17960543e1807082d4e83' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/ab__video_gallery/hooks/products/product_name.pre.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/video_icon.tpl' => 2,
  ),
),false)) {
function content_66ec067df07414_64586198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('icon_play', 'icon');?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['ab__vg_videos']) {?>
    <?php if ($_smarty_tpl->tpl_vars['icon_play']->value != "icon") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon_width'=>30,'icon_height'=>30,'icon_class'=>"ab__vg-icon-video"), 0, false);
?>
    <?php } else { ?>
        <i class="ab__vg-icon-video <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon"></i>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/products/product_name.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/hooks/products/product_name.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('icon_play', 'icon');?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['ab__vg_videos']) {?>
    <?php if ($_smarty_tpl->tpl_vars['icon_play']->value != "icon") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon_width'=>30,'icon_height'=>30,'icon_class'=>"ab__vg-icon-video"), 0, true);
?>
    <?php } else { ?>
        <i class="ab__vg-icon-video <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon"></i>
    <?php }
}
}
}
}
