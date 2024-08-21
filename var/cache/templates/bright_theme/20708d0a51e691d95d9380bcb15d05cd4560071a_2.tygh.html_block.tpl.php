<?php
/* Smarty version 4.1.1, created on 2024-08-20 09:48:48
  from '/app/www/design/themes/responsive/templates/blocks/html_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66c43c500b0e69_25214710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20708d0a51e691d95d9380bcb15d05cd4560071a' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/html_block.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c43c500b0e69_25214710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'input_type'=>"wysiwyg"),$_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/html_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/html_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'input_type'=>"wysiwyg"),$_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div><?php }
}
}
