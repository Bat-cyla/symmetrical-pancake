<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:04
  from '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49ee07d78d2_23653810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5fb7142b245229ca2aae359aea68a5357923909' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_customer.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b49ee07d78d2_23653810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),4=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('anonymous','product_reviews.verified_purchase','anonymous','product_reviews.verified_purchase'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <?php $_smarty_tpl->_assignInScope('date_machine_format', "%Y-%m-%dT%H:%M:%S");?>

    <section class="ty-product-review-post-customer">

        <address class="ty-product-review-post-customer__address ty-address">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_reviews:post_customer"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_reviews:post_customer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                <div class="ty-product-review-post-customer__name">
                    <?php if ($_smarty_tpl->tpl_vars['product_review']->value['user_data']['name']) {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['user_data']['name'], ENT_QUOTES, 'UTF-8');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->__("anonymous");?>

                    <?php }?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['product_review']->value['user_data']['is_buyer'] === smarty_modifier_enum("YesNo::YES")) {?>
                    <div class="ty-product-review-post-customer__verified">
                        <?php echo $_smarty_tpl->__("product_reviews.verified_purchase");?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] !== "none") {?>
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] === "country" && ($_smarty_tpl->tpl_vars['product_review']->value['user_data']['country_code'] || $_smarty_tpl->tpl_vars['product_review']->value['user_data']['country'])) {?>
                        <div class="ty-product-review-post-customer__location">
                            <div class="ty-product-review-post-customer__location-flag">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-flag ty-flag-".((string)(mb_strtolower($_smarty_tpl->tpl_vars['product_review']->value['user_data']['country_code'], 'UTF-8')))." ty-product-review-post-customer__location-flag-content"),$_smarty_tpl);?>

                            </div>

                            <div class="ty-product-review-post-customer__location-text">
                                <div class="ty-product-review-post-customer__location-country ty-muted"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['user_data']['country'], ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] === "city") {?>
                        <div class="ty-product-review-post-customer__location">
                            <div class="ty-product-review-post-customer__location-text">
                                <div class="ty-product-review-post-customer__location-city ty-muted"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['user_data']['city'], ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                        </div>
                    <?php }?>

                <?php }?>

            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_reviews:post_customer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </address>

        <?php if ($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp']) {?>
            <time class="ty-product-review-post-customer__date" datetime="<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp'],$_smarty_tpl->tpl_vars['date_machine_format']->value), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

            </time>
        <?php }?>

    </section>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_customer.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_customer.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <?php $_smarty_tpl->_assignInScope('date_machine_format', "%Y-%m-%dT%H:%M:%S");?>

    <section class="ty-product-review-post-customer">

        <address class="ty-product-review-post-customer__address ty-address">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_reviews:post_customer"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_reviews:post_customer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                <div class="ty-product-review-post-customer__name">
                    <?php if ($_smarty_tpl->tpl_vars['product_review']->value['user_data']['name']) {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['user_data']['name'], ENT_QUOTES, 'UTF-8');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->__("anonymous");?>

                    <?php }?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['product_review']->value['user_data']['is_buyer'] === smarty_modifier_enum("YesNo::YES")) {?>
                    <div class="ty-product-review-post-customer__verified">
                        <?php echo $_smarty_tpl->__("product_reviews.verified_purchase");?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] !== "none") {?>
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] === "country" && ($_smarty_tpl->tpl_vars['product_review']->value['user_data']['country_code'] || $_smarty_tpl->tpl_vars['product_review']->value['user_data']['country'])) {?>
                        <div class="ty-product-review-post-customer__location">
                            <div class="ty-product-review-post-customer__location-flag">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-flag ty-flag-".((string)(mb_strtolower($_smarty_tpl->tpl_vars['product_review']->value['user_data']['country_code'], 'UTF-8')))." ty-product-review-post-customer__location-flag-content"),$_smarty_tpl);?>

                            </div>

                            <div class="ty-product-review-post-customer__location-text">
                                <div class="ty-product-review-post-customer__location-country ty-muted"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['user_data']['country'], ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] === "city") {?>
                        <div class="ty-product-review-post-customer__location">
                            <div class="ty-product-review-post-customer__location-text">
                                <div class="ty-product-review-post-customer__location-city ty-muted"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['user_data']['city'], ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                        </div>
                    <?php }?>

                <?php }?>

            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_reviews:post_customer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </address>

        <?php if ($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp']) {?>
            <time class="ty-product-review-post-customer__date" datetime="<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp'],$_smarty_tpl->tpl_vars['date_machine_format']->value), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

            </time>
        <?php }?>

    </section>
<?php }
}
}
}
