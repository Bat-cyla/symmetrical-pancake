<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:16
  from '/app/www/design/themes/responsive/templates/common/modifier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eec7b50d5_48069226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80a99c4406d7e91ee8ac7e47ed7ed79fbf18fbd2' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/common/modifier.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_66b49eec7b50d5_48069226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['is_integer']->value == true) {
$_smarty_tpl->_assignInScope('mod_value', round($_smarty_tpl->tpl_vars['mod_value']->value));
}
if ($_smarty_tpl->tpl_vars['display_sign']->value) {
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['mod_value']->value > 0) {?>+<?php } else { ?>-<?php }
if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
}
if ($_smarty_tpl->tpl_vars['mod_type']->value == "A" || $_smarty_tpl->tpl_vars['mod_type']->value == "F") {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>abs($_smarty_tpl->tpl_vars['mod_value']->value)), 0, false);
} else {
if (($_smarty_tpl->tpl_vars['span_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) || $_smarty_tpl->tpl_vars['class']->value) {?><span id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['span_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) abs($_smarty_tpl->tpl_vars['mod_value']->value), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->tpl_vars['span_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) || $_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>%<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/modifier.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/modifier.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['is_integer']->value == true) {
$_smarty_tpl->_assignInScope('mod_value', round($_smarty_tpl->tpl_vars['mod_value']->value));
}
if ($_smarty_tpl->tpl_vars['display_sign']->value) {
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['mod_value']->value > 0) {?>+<?php } else { ?>-<?php }
if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
}
if ($_smarty_tpl->tpl_vars['mod_type']->value == "A" || $_smarty_tpl->tpl_vars['mod_type']->value == "F") {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>abs($_smarty_tpl->tpl_vars['mod_value']->value)), 0, true);
} else {
if (($_smarty_tpl->tpl_vars['span_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) || $_smarty_tpl->tpl_vars['class']->value) {?><span id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['span_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) abs($_smarty_tpl->tpl_vars['mod_value']->value), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->tpl_vars['span_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) || $_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>%<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
}
}
}
}
