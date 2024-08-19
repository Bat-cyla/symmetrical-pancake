<?php
/* Smarty version 4.1.1, created on 2024-08-15 11:18:43
  from '/app/www/design/themes/responsive/templates/views/profiles/success_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdb9e3a3deb7_57709512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18c89b7e973554976d598c7fb35255141ee4f955' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/profiles/success_add.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bdb9e3a3deb7_57709512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('successfully_registered','success_registration_text','edit_profile','edit_profile_note','orders','track_orders','product_comparison_list','comparison_list_note','successfully_registered','success_registration_text','edit_profile','edit_profile_note','orders','track_orders','product_comparison_list','comparison_list_note'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("successfully_registered");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<span class="ty-success-registration__text"><?php echo $_smarty_tpl->__("success_registration_text");?>
</span>
<ul class="success-registration__list">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:success_registration"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:success_registration"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <li class="ty-success-registration__item">
            <a href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a" rel="nofollow"><?php echo $_smarty_tpl->__("edit_profile");?>
</a>
            <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("edit_profile_note");?>
</span>
        </li>
        <li class="ty-success-registration__item">
            <a href="<?php echo htmlspecialchars((string) fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("orders");?>
</a>
            <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("track_orders");?>
</span>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
            <li class="ty-success-registration__item">
                <a href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("product_comparison_list");?>
</a>
                <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("comparison_list_note");?>
</span>
            </li>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:success_registration"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</ul>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/success_add.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/profiles/success_add.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("successfully_registered");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<span class="ty-success-registration__text"><?php echo $_smarty_tpl->__("success_registration_text");?>
</span>
<ul class="success-registration__list">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:success_registration"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:success_registration"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <li class="ty-success-registration__item">
            <a href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a" rel="nofollow"><?php echo $_smarty_tpl->__("edit_profile");?>
</a>
            <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("edit_profile_note");?>
</span>
        </li>
        <li class="ty-success-registration__item">
            <a href="<?php echo htmlspecialchars((string) fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("orders");?>
</a>
            <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("track_orders");?>
</span>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
            <li class="ty-success-registration__item">
                <a href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("product_comparison_list");?>
</a>
                <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("comparison_list_note");?>
</span>
            </li>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:success_registration"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</ul>
<?php }
}
}
