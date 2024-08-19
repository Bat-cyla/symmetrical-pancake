<?php
/* Smarty version 4.1.1, created on 2024-08-09 15:10:37
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b6073dbe2871_26533664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67800833baa7dae7e75ff332dff91163fd6e0f1b' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_message.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl' => 6,
  ),
),false)) {
function content_66b6073dbe2871_26533664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.advantages','product_reviews.disadvantages','comment','product_reviews.advantages','product_reviews.disadvantages','comment'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<blockquote class="ty-product-review-post-message ty-blockquote" id="post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['product_review_id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_fields'] === "advanced") {?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.advantages"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['advantages']), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.disadvantages"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['disadvantages']), 0, true);
?>

    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("comment"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['comment']), 0, true);
?>

</blockquote>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_message.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_message.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<blockquote class="ty-product-review-post-message ty-blockquote" id="post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['product_review_id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_fields'] === "advanced") {?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.advantages"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['advantages']), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.disadvantages"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['disadvantages']), 0, true);
?>

    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("comment"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['comment']), 0, true);
?>

</blockquote>
<?php }
}
}
