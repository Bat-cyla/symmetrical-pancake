<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:18:04
  from '/app/www/design/backend/templates/views/product_features/components/product_feature_groups_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1d6c0d42b8_69796105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aef2d89a224fc2e187fab46be073a1b0e201124' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_features/components/product_feature_groups_search_form.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/categories/picker.tpl' => 1,
    'tygh:common/select_category.tpl' => 1,
  ),
),false)) {
function content_66aa1d6c0d42b8_69796105 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','category','all_categories','group','admin_search_button'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="product_features_search_form" method="get">

<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("category");?>
:</label>
    <div class="break clear correct-picker-but">
    <?php if (fn_show_picker("categories",(defined('CATEGORY_THRESHOLD') ? constant('CATEGORY_THRESHOLD') : null))) {?>
        <?php if ($_smarty_tpl->tpl_vars['search']->value['category_ids']) {?>
            <?php $_smarty_tpl->_assignInScope('s_cid', $_smarty_tpl->tpl_vars['search']->value['category_ids']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('s_cid', "0");?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"location_category",'input_name'=>"category_ids",'item_ids'=>$_smarty_tpl->tpl_vars['s_cid']->value,'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("all_categories"),'extra'=>''), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"category_ids",'id'=>$_smarty_tpl->tpl_vars['search']->value['category_ids']), 0, false);
?>
    <?php }?>
    </div>
</div>
<div class="sidebar-field">
    <label for="fname"><?php echo $_smarty_tpl->__("group");?>
:</label>
    <input type="text" name="internal_name" id="fname" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
</div>
<div class="sidebar-field">
    <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("admin_search_button");?>
">
</div>
</form>
</div><?php }
}
