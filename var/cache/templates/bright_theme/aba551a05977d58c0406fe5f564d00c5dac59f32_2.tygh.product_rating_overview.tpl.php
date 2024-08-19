<?php
/* Smarty version 4.1.1, created on 2024-08-09 15:10:37
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b6073dcf7d61_99252573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aba551a05977d58c0406fe5f564d00c5dac59f32' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl' => 2,
  ),
),false)) {
function content_66b6073dcf7d61_99252573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.out_of_five','product_reviews.out_of_five'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <?php $_smarty_tpl->_assignInScope('out_of_five', (($tmp = $_smarty_tpl->tpl_vars['out_of_five']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <section class="ty-product-review-product-rating-overview">

        <div class="ty-product-review-product-rating-overview__primary">

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0, false);
?>

            <?php if ($_smarty_tpl->tpl_vars['average_rating']->value) {?>
                <div class="ty-product-review-product-rating-overview__rating">
                    <strong class="ty-product-review-product-rating-overview__rating-current">
                        <?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['average_rating']->value,1), ENT_QUOTES, 'UTF-8');?>

                    </strong>
                    <?php if ($_smarty_tpl->tpl_vars['out_of_five']->value) {?>
                        <span class="ty-product-review-product-rating-overview__rating-out-of-five">
                            <?php echo $_smarty_tpl->__("product_reviews.out_of_five");?>

                        </span>
                    <?php }?>
                </div>
            <?php }?>

        </div>

        <div class="ty-product-review-product-rating-overview__secondary">

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'secondary'=>true), 0, false);
?>

        </div>
    </section>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <?php $_smarty_tpl->_assignInScope('out_of_five', (($tmp = $_smarty_tpl->tpl_vars['out_of_five']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <section class="ty-product-review-product-rating-overview">

        <div class="ty-product-review-product-rating-overview__primary">

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0, true);
?>

            <?php if ($_smarty_tpl->tpl_vars['average_rating']->value) {?>
                <div class="ty-product-review-product-rating-overview__rating">
                    <strong class="ty-product-review-product-rating-overview__rating-current">
                        <?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['average_rating']->value,1), ENT_QUOTES, 'UTF-8');?>

                    </strong>
                    <?php if ($_smarty_tpl->tpl_vars['out_of_five']->value) {?>
                        <span class="ty-product-review-product-rating-overview__rating-out-of-five">
                            <?php echo $_smarty_tpl->__("product_reviews.out_of_five");?>

                        </span>
                    <?php }?>
                </div>
            <?php }?>

        </div>

        <div class="ty-product-review-product-rating-overview__secondary">

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'secondary'=>true), 0, true);
?>

        </div>
    </section>
<?php }
}
}
}
