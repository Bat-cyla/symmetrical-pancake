<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:01
  from '/app/www/design/themes/responsive/templates/addons/discussion/hooks/products/main_info_title.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eddeeca96_78553032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '896bcc0a6773175c6bc74313a370f1608f19e1f8' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/discussion/hooks/products/main_info_title.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/components/new_post_button.tpl' => 2,
  ),
),false)) {
function content_66b49eddeeca96_78553032 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('reviews','write_review','reviews','write_review'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != 'D' && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] !== smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <div class="ty-discussion__rating-wrapper" id="average_rating_product">
        <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>


        <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
        <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0, false);
?>
    <!--average_rating_product--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/products/main_info_title.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/products/main_info_title.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != 'D' && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] !== smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <div class="ty-discussion__rating-wrapper" id="average_rating_product">
        <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>


        <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
        <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0, true);
?>
    <!--average_rating_product--></div>
<?php }
}
}
}
