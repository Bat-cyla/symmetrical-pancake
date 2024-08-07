<?php
/* Smarty version 4.1.1, created on 2024-08-06 10:45:45
  from '/app/www/design/themes/responsive/templates/addons/wishlist/hooks/profiles/success_registration.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b1d4a9cb5df9_77558805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd68597f05b44fe32e3e1656fd055f8faf89a34' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/wishlist/hooks/profiles/success_registration.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b1d4a9cb5df9_77558805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('wishlist','wishlist_note','wishlist','wishlist_note'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><li class="ty-success-registration__item">
    <a href="<?php echo htmlspecialchars((string) fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("wishlist");?>
</a>
    <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("wishlist_note");?>
</span>
</li><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/profiles/success_registration.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/profiles/success_registration.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><li class="ty-success-registration__item">
    <a href="<?php echo htmlspecialchars((string) fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("wishlist");?>
</a>
    <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("wishlist_note");?>
</span>
</li><?php }
}
}
