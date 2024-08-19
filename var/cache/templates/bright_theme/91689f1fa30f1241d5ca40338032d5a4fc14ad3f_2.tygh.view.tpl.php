<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:34
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e1062ef320_44695187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91689f1fa30f1241d5ca40338032d5a4fc14ad3f' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/view.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/pagination.tpl' => 4,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl' => 2,
  ),
),false)) {
function content_66b5e1062ef320_44695187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.no_reviews_found','product_reviews.no_reviews_found'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-product-reviews-view" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_product_reviews<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "content", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
        <h4><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>

    <section class="ty-product-reviews-view__main">
        <div class="ty-product-reviews-view__main-content" id="product_reviews_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_count']), 0, false);
?>

            <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
                <div class="ty-product-review-view__posts">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_reviews']->value, 'product_review');
$_smarty_tpl->tpl_vars['product_review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_review']->value) {
$_smarty_tpl->tpl_vars['product_review']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php } else { ?>
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("product_reviews.no_reviews_found");?>
</p>
            <?php }?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, true);
?>
        <!--product_reviews_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value), 0, false);
?>

    </section>

    <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content');?>

    <?php } else { ?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>
</div>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/fallback.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/index.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-product-reviews-view" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_product_reviews<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "content", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, true);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
        <h4><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>

    <section class="ty-product-reviews-view__main">
        <div class="ty-product-reviews-view__main-content" id="product_reviews_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, true);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_count']), 0, true);
?>

            <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
                <div class="ty-product-review-view__posts">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_reviews']->value, 'product_review');
$_smarty_tpl->tpl_vars['product_review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_review']->value) {
$_smarty_tpl->tpl_vars['product_review']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php } else { ?>
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("product_reviews.no_reviews_found");?>
</p>
            <?php }?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, true);
?>
        <!--product_reviews_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value), 0, true);
?>

    </section>

    <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content');?>

    <?php } else { ?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>
</div>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/fallback.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/index.js"),$_smarty_tpl);?>

<?php }
}
}
