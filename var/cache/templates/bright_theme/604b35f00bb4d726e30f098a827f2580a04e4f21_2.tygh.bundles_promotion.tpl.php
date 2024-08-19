<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:15:03
  from '/app/www/design/themes/responsive/templates/addons/product_bundles/components/pages/bundles_promotion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49aa76a4018_72766690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '604b35f00bb4d726e30f098a827f2580a04e4f21' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_bundles/components/pages/bundles_promotion.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66b49aa76a4018_72766690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('avail_till','avail_till'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['bundle']->value) {?>
    <div class="ty-column3 ty-product-bundles-bundles-promotion">
        <div class="ty-grid-list__item ty-grid-promotions__item">
            <?php if (is_array($_smarty_tpl->tpl_vars['bundle']->value['main_pair'])) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['bundle']->value['main_pair'],'image_id'=>((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id']),'class'=>"ty-grid-promotions__image",'image_width'=>(($tmp = $_smarty_tpl->tpl_vars['promotion_image_width']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'image_height'=>(($tmp = $_smarty_tpl->tpl_vars['promotion_image_height']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), 0, false);
?>
            <?php }?>

            <div class="ty-grid-promotions__content">
                <a id="opener_product_bundle_promotions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-dialog-opener"
                    href="<?php echo htmlspecialchars((string) fn_url("product_bundles.get_product_bundles?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&in_popup=1&return_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])))), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-id="content_product_bundle_promotions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-dialog-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['storefront_name'], ENT_QUOTES, 'UTF-8');?>
"
                    rel="nofollow"
                >
                    <h2 class="ty-product-bundles-bundles-promotion__header ty-grid-promotions__header"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['storefront_name'], ENT_QUOTES, 'UTF-8');?>
</h2>
                </a>

                <?php if ($_smarty_tpl->tpl_vars['bundle']->value['date_to']) {?>
                    <div class="ty-grid-list__available">
                        <?php echo $_smarty_tpl->__("avail_till");?>
: <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['bundle']->value['date_to'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                    </div>
                <?php }?>

                <?php if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['company_name']->value || $_smarty_tpl->tpl_vars['bundle']->value['company_id'])) {?>
                    <div class="ty-grid-promotions__company">
                        <a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-grid-promotions__company-link">
                            <?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['bundle']->value['company_id']), ENT_QUOTES, 'UTF-8');
}?>
                        </a>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['bundle']->value['description']) {?>
                    <div class="ty-wysiwyg-content ty-grid-promotions__description">
                        <?php echo $_smarty_tpl->tpl_vars['bundle']->value['description'];?>

                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/pages/bundles_promotion.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/pages/bundles_promotion.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['bundle']->value) {?>
    <div class="ty-column3 ty-product-bundles-bundles-promotion">
        <div class="ty-grid-list__item ty-grid-promotions__item">
            <?php if (is_array($_smarty_tpl->tpl_vars['bundle']->value['main_pair'])) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['bundle']->value['main_pair'],'image_id'=>((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id']),'class'=>"ty-grid-promotions__image",'image_width'=>(($tmp = $_smarty_tpl->tpl_vars['promotion_image_width']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'image_height'=>(($tmp = $_smarty_tpl->tpl_vars['promotion_image_height']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), 0, true);
?>
            <?php }?>

            <div class="ty-grid-promotions__content">
                <a id="opener_product_bundle_promotions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-dialog-opener"
                    href="<?php echo htmlspecialchars((string) fn_url("product_bundles.get_product_bundles?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&in_popup=1&return_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])))), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-id="content_product_bundle_promotions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-dialog-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['storefront_name'], ENT_QUOTES, 'UTF-8');?>
"
                    rel="nofollow"
                >
                    <h2 class="ty-product-bundles-bundles-promotion__header ty-grid-promotions__header"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['storefront_name'], ENT_QUOTES, 'UTF-8');?>
</h2>
                </a>

                <?php if ($_smarty_tpl->tpl_vars['bundle']->value['date_to']) {?>
                    <div class="ty-grid-list__available">
                        <?php echo $_smarty_tpl->__("avail_till");?>
: <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['bundle']->value['date_to'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                    </div>
                <?php }?>

                <?php if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['company_name']->value || $_smarty_tpl->tpl_vars['bundle']->value['company_id'])) {?>
                    <div class="ty-grid-promotions__company">
                        <a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-grid-promotions__company-link">
                            <?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['bundle']->value['company_id']), ENT_QUOTES, 'UTF-8');
}?>
                        </a>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['bundle']->value['description']) {?>
                    <div class="ty-wysiwyg-content ty-grid-promotions__description">
                        <?php echo $_smarty_tpl->tpl_vars['bundle']->value['description'];?>

                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php }
}
}
}
