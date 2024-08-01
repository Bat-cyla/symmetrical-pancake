<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:37
  from '/app/www/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd576d242_72677935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ff752812f8c97720b9896398b5336a511b36cd4' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab5bd576d242_72677935 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }
}
