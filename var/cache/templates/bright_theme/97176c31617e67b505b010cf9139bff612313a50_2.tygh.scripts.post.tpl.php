<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:17
  from '/app/www/design/themes/responsive/templates/addons/ab__stickers/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065d38bfe8_22250465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97176c31617e67b505b010cf9139bff612313a50' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/ab__stickers/hooks/index/scripts.post.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec065d38bfe8_22250465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>(function (_, $) {$.extend(_, {ab__stickers: {timeouts: { },runtime: {controller_mode: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',caching: Boolean(<?php echo htmlspecialchars((string) fn_ab__stickers_sticker_is_cache_allowed(), ENT_QUOTES, 'UTF-8');?>
),cache_key: 'ab__stickers_<?php echo htmlspecialchars((string) fn_get_storage_data("cache_id"), ENT_QUOTES, 'UTF-8');?>
',},},});})(Tygh, Tygh.$);<?php echo '</script'; ?>
><?php echo smarty_function_script(array('src'=>"js/addons/ab__stickers/func.js"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>(function (_, $) {$.extend(_, {ab__stickers: {timeouts: { },runtime: {controller_mode: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',caching: Boolean(<?php echo htmlspecialchars((string) fn_ab__stickers_sticker_is_cache_allowed(), ENT_QUOTES, 'UTF-8');?>
),cache_key: 'ab__stickers_<?php echo htmlspecialchars((string) fn_get_storage_data("cache_id"), ENT_QUOTES, 'UTF-8');?>
',},},});})(Tygh, Tygh.$);<?php echo '</script'; ?>
><?php echo smarty_function_script(array('src'=>"js/addons/ab__stickers/func.js"),$_smarty_tpl);
}
}
}
