<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:53:39
  from '/app/www/design/backend/templates/buttons/multiple_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac8273da99b7_19662889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '990dee60d9f78aee23800c2f66c18ab03c57a9f7' => 
    array (
      0 => '/app/www/design/backend/templates/buttons/multiple_buttons.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/add_empty_item.tpl' => 1,
    'tygh:buttons/clone_item.tpl' => 1,
    'tygh:buttons/remove_item.tpl' => 1,
  ),
),false)) {
function content_66ac8273da99b7_19662889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('tag_level', (($tmp = $_smarty_tpl->tpl_vars['tag_level']->value ?? null)===null||$tmp==='' ? "1" ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['only_delete']->value != "Y") {?><div class="btn-group"><?php if (!$_smarty_tpl->tpl_vars['hide_add']->value) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/add_empty_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value)."); ".((string)$_smarty_tpl->tpl_vars['on_add']->value),'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0, false);
}
if (!$_smarty_tpl->tpl_vars['hide_clone']->value) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/clone_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).", true);",'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0, false);
}
}
$_smarty_tpl->_subTemplateRender("tygh:buttons/remove_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('only_delete'=>$_smarty_tpl->tpl_vars['only_delete']->value,'but_class'=>"cm-delete-row"), 0, false);
if ($_smarty_tpl->tpl_vars['only_delete']->value != "Y") {?></div><?php }
}
}
