<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:04
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49ee0cfe099_48895387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baa961f628a51d3da6aea7febc2c46e58fdb877c' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b49ee0cfe099_48895387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.company_reply','product_reviews.admin_reply','product_reviews.company_reply','product_reviews.admin_reply'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product_review']->value['reply']) {?>
    <blockquote class="ty-product-review-post-vendor-reply ty-blockquote">
        <dl class="ty-product-review-post-vendor-reply__content ty-dl">
            <dt class="ty-product-review-post-vendor-reply__title ty-dt ty-strong">
                <?php if ($_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']) {?>
                    <?php echo $_smarty_tpl->__("product_reviews.company_reply",array('[company_name]'=>$_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']));?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("product_reviews.admin_reply");?>

                <?php }?>
            </dt>
            <dd class="ty-product-review-post-vendor-reply__body ty-dd ty-dialog-caret">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['reply']['reply'], ENT_QUOTES, 'UTF-8');?>

            </dd>
        </dl>
    </blockquote>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product_review']->value['reply']) {?>
    <blockquote class="ty-product-review-post-vendor-reply ty-blockquote">
        <dl class="ty-product-review-post-vendor-reply__content ty-dl">
            <dt class="ty-product-review-post-vendor-reply__title ty-dt ty-strong">
                <?php if ($_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']) {?>
                    <?php echo $_smarty_tpl->__("product_reviews.company_reply",array('[company_name]'=>$_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']));?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("product_reviews.admin_reply");?>

                <?php }?>
            </dt>
            <dd class="ty-product-review-post-vendor-reply__body ty-dd ty-dialog-caret">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['reply']['reply'], ENT_QUOTES, 'UTF-8');?>

            </dd>
        </dl>
    </blockquote>
<?php }
}
}
}
