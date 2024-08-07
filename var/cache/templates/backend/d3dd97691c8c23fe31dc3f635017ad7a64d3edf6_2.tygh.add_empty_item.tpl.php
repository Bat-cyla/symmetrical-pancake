<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:53:39
  from '/app/www/design/backend/templates/buttons/add_empty_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac8273db33d6_64169754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3dd97691c8c23fe31dc3f635017ad7a64d3edf6' => 
    array (
      0 => '/app/www/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac8273db33d6_64169754 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="btn btn-add" name="add" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add");?>
</a>&nbsp;<?php }
}
