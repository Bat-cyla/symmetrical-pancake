<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:41
  from '/app/www/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd946a6d4_83373481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a34efd7e44d484d3beccb066e6d844b33634723c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:addons/discussion/views/discussion_manager/components/allow_discussion.tpl' => 1,
  ),
),false)) {
function content_66ab5bd946a6d4_83373481 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('comments_and_reviews','discussion_title_category'));
if (($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE")) || fn_allowed_for("MULTIVENDOR")) {
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("comments_and_reviews"),'target'=>"#discussion_category_setting"), 0, false);
?>
<fieldset>
	<div id="discussion_category_setting" class="in collapse">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"category_data",'object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>"C",'title'=>$_smarty_tpl->__("discussion_title_category"),'discussion_default_type'=>$_smarty_tpl->tpl_vars['addons']->value['discussion']['category_discussion_type']), 0, false);
?>
	</div>
</fieldset>
<?php }
}
}
