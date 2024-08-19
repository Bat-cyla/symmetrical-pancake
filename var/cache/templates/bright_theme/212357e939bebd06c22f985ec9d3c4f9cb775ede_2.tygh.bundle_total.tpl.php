<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:49:35
  from '/app/www/design/themes/responsive/templates/addons/product_bundles/components/common/bundle_total.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdeb4f6cd246_39382698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '212357e939bebd06c22f985ec9d3c4f9cb775ede' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_bundles/components/common/bundle_total.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 8,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66bdeb4f6cd246_39382698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.price_for_all','product_bundles.order_discount','inc_tax','including_tax','product_bundles.add_all_to_cart','product_bundles.sign_in_to_view_price','product_bundles.price_for_all','product_bundles.order_discount','inc_tax','including_tax','product_bundles.add_all_to_cart','product_bundles.sign_in_to_view_price'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_add_all_to_cart', (($tmp = $_smarty_tpl->tpl_vars['show_add_all_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['bundle']->value['total_price']) {?>

    <div class="ty-product-bundles-bundle-form__total">
        <div class="ty-product-bundles-bundle-form__total-inner">
                        <strong class="ty-product-bundles-bundle-form__total-title ty-subheader">
                <?php echo $_smarty_tpl->__("product_bundles.price_for_all");?>

            </strong>

                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] !== "hide_price_and_add_to_cart") {?>

                                <div class="ty-product-bundles-bundle-form__price"
                    id="product_bundles_bundle_total_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
                    
                    <div class="ty-product-bundles-bundle-form__price-discount">
                        <span class="ty-product-bundles-bundle-form__price-discount-title">
                            <?php echo $_smarty_tpl->__("product_bundles.order_discount");?>
:
                        </span>
                        <span class="ty-product-bundles-bundle-form__price-discount-price">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>($_smarty_tpl->tpl_vars['bundle']->value['total_price']-$_smarty_tpl->tpl_vars['bundle']->value['discounted_price'])), 0, false);
?>
                        </span>
                    </div>
                    <span class="ty-product-bundles-bundle-form__price-old ty-strike">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle']->value['total_price']), 0, true);
?>
                    </span>
                    <span class="ty-product-bundles-bundle-form__price-new">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle']->value['discounted_price']), 0, true);
?>
                    </span>
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['auth']->value['tax_exempt'] !== smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['bundle']->value['is_tax_exists']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['bundle']->value['discounted_price'] != $_smarty_tpl->tpl_vars['bundle']->value['taxed_price'] && $_smarty_tpl->tpl_vars['bundle']->value['taxed_price']) {?>
                            <span class="ty-list-price ty-nowrap" id="line_product_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">(<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle']->value['taxed_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?> <?php echo $_smarty_tpl->__("inc_tax");?>
)</span>
                        <?php } else { ?>
                            <span class="ty-list-price ty-nowrap ty-tax-include">(<?php echo $_smarty_tpl->__("including_tax");?>
)</span>
                        <?php }?>
                    <?php }?>
                <!--product_bundles_bundle_total_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

                                <?php if ($_smarty_tpl->tpl_vars['show_add_all_to_cart']->value && ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] !== "hide_add_to_cart_button")) {?>
                    <div class="ty-product-bundles-bundle-form__submit" id="wrap_chain_button_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("product_bundles.add_all_to_cart"),'but_id'=>"bundle_button_".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id']),'but_meta'=>"ty-btn__secondary cm-dialog-closer",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action"), 0, false);
?>
                    </div>
                <?php }?>
            <?php } else { ?>
                                <p><?php echo $_smarty_tpl->__("product_bundles.sign_in_to_view_price");?>
</p>
            <?php }?>
        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/common/bundle_total.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/common/bundle_total.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_add_all_to_cart', (($tmp = $_smarty_tpl->tpl_vars['show_add_all_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['bundle']->value['total_price']) {?>

    <div class="ty-product-bundles-bundle-form__total">
        <div class="ty-product-bundles-bundle-form__total-inner">
                        <strong class="ty-product-bundles-bundle-form__total-title ty-subheader">
                <?php echo $_smarty_tpl->__("product_bundles.price_for_all");?>

            </strong>

                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] !== "hide_price_and_add_to_cart") {?>

                                <div class="ty-product-bundles-bundle-form__price"
                    id="product_bundles_bundle_total_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
                    
                    <div class="ty-product-bundles-bundle-form__price-discount">
                        <span class="ty-product-bundles-bundle-form__price-discount-title">
                            <?php echo $_smarty_tpl->__("product_bundles.order_discount");?>
:
                        </span>
                        <span class="ty-product-bundles-bundle-form__price-discount-price">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>($_smarty_tpl->tpl_vars['bundle']->value['total_price']-$_smarty_tpl->tpl_vars['bundle']->value['discounted_price'])), 0, true);
?>
                        </span>
                    </div>
                    <span class="ty-product-bundles-bundle-form__price-old ty-strike">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle']->value['total_price']), 0, true);
?>
                    </span>
                    <span class="ty-product-bundles-bundle-form__price-new">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle']->value['discounted_price']), 0, true);
?>
                    </span>
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['auth']->value['tax_exempt'] !== smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['bundle']->value['is_tax_exists']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['bundle']->value['discounted_price'] != $_smarty_tpl->tpl_vars['bundle']->value['taxed_price'] && $_smarty_tpl->tpl_vars['bundle']->value['taxed_price']) {?>
                            <span class="ty-list-price ty-nowrap" id="line_product_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">(<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['bundle']->value['taxed_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?> <?php echo $_smarty_tpl->__("inc_tax");?>
)</span>
                        <?php } else { ?>
                            <span class="ty-list-price ty-nowrap ty-tax-include">(<?php echo $_smarty_tpl->__("including_tax");?>
)</span>
                        <?php }?>
                    <?php }?>
                <!--product_bundles_bundle_total_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

                                <?php if ($_smarty_tpl->tpl_vars['show_add_all_to_cart']->value && ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] !== "hide_add_to_cart_button")) {?>
                    <div class="ty-product-bundles-bundle-form__submit" id="wrap_chain_button_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("product_bundles.add_all_to_cart"),'but_id'=>"bundle_button_".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id']),'but_meta'=>"ty-btn__secondary cm-dialog-closer",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action"), 0, true);
?>
                    </div>
                <?php }?>
            <?php } else { ?>
                                <p><?php echo $_smarty_tpl->__("product_bundles.sign_in_to_view_price");?>
</p>
            <?php }?>
        </div>
    </div>
<?php }
}
}
}
