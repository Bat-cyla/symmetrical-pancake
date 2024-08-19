<?php
/* Smarty version 4.1.1, created on 2024-08-15 15:46:02
  from '/app/www/design/themes/responsive/templates/views/products/quick_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdf88a17dcd2_96743037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e07a39b205b654906577b66b2facfe896928750' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/products/quick_view.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/view_tools.tpl' => 2,
    'tygh:common/product_data.tpl' => 2,
    'tygh:views/products/components/product_images.tpl' => 2,
    'tygh:views/products/components/product_features_short_list.tpl' => 2,
  ),
),false)) {
function content_66bdf88a17dcd2_96743037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','add_to_cart'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-quick-view__wrapper">
    <?php $_smarty_tpl->_assignInScope('quick_view', "true");?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_hide_form", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_options_vs_qty", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_buttons", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_no_ajax", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_assignInScope('obj_prefix', (($tmp = $_smarty_tpl->tpl_vars['obj_prefix']->value ?? null)===null||$tmp==='' ? "ajax" ?? null : $tmp));?>
    <div class="ty-product-block" id="product_main_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-product-block__wrapper clearfix">
        <?php $_smarty_tpl->_assignInScope('show_sku', true);?>
        <?php $_smarty_tpl->_assignInScope('show_rating', true);?>
        <?php $_smarty_tpl->_assignInScope('show_old_price', true);?>
        <?php $_smarty_tpl->_assignInScope('show_price', true);?>
        <?php $_smarty_tpl->_assignInScope('show_list_discount', true);?>
        <?php $_smarty_tpl->_assignInScope('show_clean_price', true);?>
        <?php $_smarty_tpl->_assignInScope('show_product_labels', true);?>
        <?php $_smarty_tpl->_assignInScope('show_discount_label', true);?>
        <?php $_smarty_tpl->_assignInScope('show_shipping_label', true);?>
        <?php $_smarty_tpl->_assignInScope('show_product_amount', true);?>
        <?php $_smarty_tpl->_assignInScope('show_product_options', true);?>
        <?php $_smarty_tpl->_assignInScope('min_qty', true);?>
        <?php $_smarty_tpl->_assignInScope('show_edp', true);?>
        <?php $_smarty_tpl->_assignInScope('show_add_to_cart', true);?>
        <?php $_smarty_tpl->_assignInScope('show_list_buttons', true);?>
        <?php $_smarty_tpl->_assignInScope('block_width', true);?>
        <?php $_smarty_tpl->_assignInScope('separate_buttons', true);?>
        <?php $_smarty_tpl->_assignInScope('show_descr', true);?>
        <?php $_smarty_tpl->_assignInScope('hide_form', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_hide_form'));?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:view_main_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>

                <div class="ty-quick-view-tools">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_view'=>true), 0, false);
?>
                </div>

                <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_prefix'=>$_smarty_tpl->tpl_vars['obj_prefix']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart"),'add_to_cart_meta'=>"cm-form-dialog-closer",'show_sku'=>$_smarty_tpl->tpl_vars['show_sku']->value,'show_rating'=>$_smarty_tpl->tpl_vars['show_rating']->value,'show_old_price'=>$_smarty_tpl->tpl_vars['show_old_price']->value,'show_price'=>$_smarty_tpl->tpl_vars['show_price']->value,'show_list_discount'=>$_smarty_tpl->tpl_vars['show_list_discount']->value,'show_clean_price'=>$_smarty_tpl->tpl_vars['show_clean_price']->value,'details_page'=>true,'show_product_labels'=>$_smarty_tpl->tpl_vars['show_product_labels']->value,'show_discount_label'=>$_smarty_tpl->tpl_vars['show_discount_label']->value,'show_shipping_label'=>$_smarty_tpl->tpl_vars['show_shipping_label']->value,'show_product_amount'=>$_smarty_tpl->tpl_vars['show_product_amount']->value,'show_product_options'=>$_smarty_tpl->tpl_vars['show_product_options']->value,'hide_form'=>$_smarty_tpl->tpl_vars['hide_form']->value,'min_qty'=>$_smarty_tpl->tpl_vars['min_qty']->value,'show_edp'=>$_smarty_tpl->tpl_vars['show_edp']->value,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['show_add_to_cart']->value,'show_list_buttons'=>$_smarty_tpl->tpl_vars['show_list_buttons']->value,'capture_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_buttons'),'capture_options_vs_qty'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_options_vs_qty'),'separate_buttons'=>$_smarty_tpl->tpl_vars['separate_buttons']->value,'block_width'=>$_smarty_tpl->tpl_vars['block_width']->value,'no_ajax'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_no_ajax'),'show_descr'=>$_smarty_tpl->tpl_vars['show_descr']->value,'quick_view'=>true), 0, false);
?>

                <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php $_smarty_tpl->_assignInScope('product_detail_view_url', "products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                
                <?php $_smarty_tpl->_assignInScope('thumbnail_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width']);?>
                <?php $_smarty_tpl->_assignInScope('thumbnail_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height']);?>

                <div id="product_main_info_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>


                <div class="ty-product-block__img-wrapper" style="width:<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['thumbnail_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_height']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; max-width:<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['thumbnail_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_height']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['thumbnail_height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_width']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:quick_view_image_wrap"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                            <div class="ty-product-block__img cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" id="product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_update">
                                <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>true,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height']), 0, false);
?>
                            <!--product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_update--></div>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>

                <div class="ty-product-block__left">

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_detail_view_url", null, null);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_detail_view_url"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_detail_view_url']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                    <?php $_smarty_tpl->_assignInScope('product_detail_view_url', trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_detail_view_url')));?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:quick_view_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:quick_view_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                            <h1 class="ty-product-block-title">
                                <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['product_detail_view_url']->value), ENT_QUOTES, 'UTF-8');?>
" class="ty-quick-view__title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></a>
                            </h1>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:quick_view_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:brand"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="ty-brand">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0, false);
?>
                        </div>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value))) {?>
                        <div class="ty-product-block__description"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);?>
</div>
                    <?php }?>

                    <div class="ty-product-block__note">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                    </div>

                    <div class="<?php if ($_smarty_tpl->tpl_vars['old_price']->value && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || $_smarty_tpl->tpl_vars['clean_price']->value && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || $_smarty_tpl->tpl_vars['list_discount']->value && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>prices-container <?php }?>price-wrap clearfix">
                        <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                         <div class="<?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>prices-container <?php }?>price-wrap clearfix">
                            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>
                                <div class="ty-float-left ty-product-prices">
                                    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);?>
&nbsp;<?php }?>
                            <?php }?>

                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:main_price"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:main_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="ty-product-block__price-actual">
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>

                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:main_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                                </div>
                            <?php }?>
                        </div>

                        <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value))) {?>
                            <div class="ty-float-left">
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>

                            </div>
                        <?php }?>

                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                       <div class="ty-product-block__option">
                            <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value);?>

                        </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                    <div class="ty-product-block__advanced-option clearfix">
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                        <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_options']->value);?>

                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                    </div>

                    <div class="ty-product-block__sku">
                        <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                    <div class="ty-product-block__field-group">
                        <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


                        <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>


                        <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['min_qty']->value);?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                    <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_edp']->value);?>


                    <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);
}?>
                    <div class="ty-product-block__button">
                            <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>


                            <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value === "ajax") {?>
                    <input type="hidden" class="cm-no-hide-input" name="security_hash" value="<?php echo htmlspecialchars((string) fn_generate_security_hash(''), ENT_QUOTES, 'UTF-8');?>
">
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                <!--product_main_info_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:view_main_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>

        <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'hide_form_changed') == "Y") {?>
            <?php $_smarty_tpl->_assignInScope('hide_form', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'orig_val_hide_form'));?>
        <?php }?>
    <!--product_main_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/quick_view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/quick_view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-quick-view__wrapper">
    <?php $_smarty_tpl->_assignInScope('quick_view', "true");?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_hide_form", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_options_vs_qty", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_buttons", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_no_ajax", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_assignInScope('obj_prefix', (($tmp = $_smarty_tpl->tpl_vars['obj_prefix']->value ?? null)===null||$tmp==='' ? "ajax" ?? null : $tmp));?>
    <div class="ty-product-block" id="product_main_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-product-block__wrapper clearfix">
        <?php $_smarty_tpl->_assignInScope('show_sku', true);?>
        <?php $_smarty_tpl->_assignInScope('show_rating', true);?>
        <?php $_smarty_tpl->_assignInScope('show_old_price', true);?>
        <?php $_smarty_tpl->_assignInScope('show_price', true);?>
        <?php $_smarty_tpl->_assignInScope('show_list_discount', true);?>
        <?php $_smarty_tpl->_assignInScope('show_clean_price', true);?>
        <?php $_smarty_tpl->_assignInScope('show_product_labels', true);?>
        <?php $_smarty_tpl->_assignInScope('show_discount_label', true);?>
        <?php $_smarty_tpl->_assignInScope('show_shipping_label', true);?>
        <?php $_smarty_tpl->_assignInScope('show_product_amount', true);?>
        <?php $_smarty_tpl->_assignInScope('show_product_options', true);?>
        <?php $_smarty_tpl->_assignInScope('min_qty', true);?>
        <?php $_smarty_tpl->_assignInScope('show_edp', true);?>
        <?php $_smarty_tpl->_assignInScope('show_add_to_cart', true);?>
        <?php $_smarty_tpl->_assignInScope('show_list_buttons', true);?>
        <?php $_smarty_tpl->_assignInScope('block_width', true);?>
        <?php $_smarty_tpl->_assignInScope('separate_buttons', true);?>
        <?php $_smarty_tpl->_assignInScope('show_descr', true);?>
        <?php $_smarty_tpl->_assignInScope('hide_form', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_hide_form'));?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:view_main_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>

                <div class="ty-quick-view-tools">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_view'=>true), 0, true);
?>
                </div>

                <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_prefix'=>$_smarty_tpl->tpl_vars['obj_prefix']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart"),'add_to_cart_meta'=>"cm-form-dialog-closer",'show_sku'=>$_smarty_tpl->tpl_vars['show_sku']->value,'show_rating'=>$_smarty_tpl->tpl_vars['show_rating']->value,'show_old_price'=>$_smarty_tpl->tpl_vars['show_old_price']->value,'show_price'=>$_smarty_tpl->tpl_vars['show_price']->value,'show_list_discount'=>$_smarty_tpl->tpl_vars['show_list_discount']->value,'show_clean_price'=>$_smarty_tpl->tpl_vars['show_clean_price']->value,'details_page'=>true,'show_product_labels'=>$_smarty_tpl->tpl_vars['show_product_labels']->value,'show_discount_label'=>$_smarty_tpl->tpl_vars['show_discount_label']->value,'show_shipping_label'=>$_smarty_tpl->tpl_vars['show_shipping_label']->value,'show_product_amount'=>$_smarty_tpl->tpl_vars['show_product_amount']->value,'show_product_options'=>$_smarty_tpl->tpl_vars['show_product_options']->value,'hide_form'=>$_smarty_tpl->tpl_vars['hide_form']->value,'min_qty'=>$_smarty_tpl->tpl_vars['min_qty']->value,'show_edp'=>$_smarty_tpl->tpl_vars['show_edp']->value,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['show_add_to_cart']->value,'show_list_buttons'=>$_smarty_tpl->tpl_vars['show_list_buttons']->value,'capture_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_buttons'),'capture_options_vs_qty'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_options_vs_qty'),'separate_buttons'=>$_smarty_tpl->tpl_vars['separate_buttons']->value,'block_width'=>$_smarty_tpl->tpl_vars['block_width']->value,'no_ajax'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_no_ajax'),'show_descr'=>$_smarty_tpl->tpl_vars['show_descr']->value,'quick_view'=>true), 0, true);
?>

                <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php $_smarty_tpl->_assignInScope('product_detail_view_url', "products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                
                <?php $_smarty_tpl->_assignInScope('thumbnail_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width']);?>
                <?php $_smarty_tpl->_assignInScope('thumbnail_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height']);?>

                <div id="product_main_info_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>


                <div class="ty-product-block__img-wrapper" style="width:<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['thumbnail_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_height']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; max-width:<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['thumbnail_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_height']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['thumbnail_height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_width']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:quick_view_image_wrap"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                            <div class="ty-product-block__img cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" id="product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_update">
                                <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>true,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height']), 0, true);
?>
                            <!--product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_update--></div>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>

                <div class="ty-product-block__left">

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_detail_view_url", null, null);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_detail_view_url"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_detail_view_url']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                    <?php $_smarty_tpl->_assignInScope('product_detail_view_url', trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_detail_view_url')));?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:quick_view_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:quick_view_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                            <h1 class="ty-product-block-title">
                                <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['product_detail_view_url']->value), ENT_QUOTES, 'UTF-8');?>
" class="ty-quick-view__title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></a>
                            </h1>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:quick_view_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:brand"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="ty-brand">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0, true);
?>
                        </div>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value))) {?>
                        <div class="ty-product-block__description"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);?>
</div>
                    <?php }?>

                    <div class="ty-product-block__note">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                    </div>

                    <div class="<?php if ($_smarty_tpl->tpl_vars['old_price']->value && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || $_smarty_tpl->tpl_vars['clean_price']->value && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || $_smarty_tpl->tpl_vars['list_discount']->value && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>prices-container <?php }?>price-wrap clearfix">
                        <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                         <div class="<?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>prices-container <?php }?>price-wrap clearfix">
                            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>
                                <div class="ty-float-left ty-product-prices">
                                    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);?>
&nbsp;<?php }?>
                            <?php }?>

                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:main_price"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:main_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="ty-product-block__price-actual">
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>

                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:main_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                                </div>
                            <?php }?>
                        </div>

                        <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value))) {?>
                            <div class="ty-float-left">
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>

                            </div>
                        <?php }?>

                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                       <div class="ty-product-block__option">
                            <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value);?>

                        </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                    <div class="ty-product-block__advanced-option clearfix">
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                        <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_options']->value);?>

                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                    </div>

                    <div class="ty-product-block__sku">
                        <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                    <div class="ty-product-block__field-group">
                        <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


                        <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>


                        <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['min_qty']->value);?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                    <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_edp']->value);?>


                    <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);
}?>
                    <div class="ty-product-block__button">
                            <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>


                            <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value === "ajax") {?>
                    <input type="hidden" class="cm-no-hide-input" name="security_hash" value="<?php echo htmlspecialchars((string) fn_generate_security_hash(''), ENT_QUOTES, 'UTF-8');?>
">
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                <!--product_main_info_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:view_main_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>

        <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'hide_form_changed') == "Y") {?>
            <?php $_smarty_tpl->_assignInScope('hide_form', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'orig_val_hide_form'));?>
        <?php }?>
    <!--product_main_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
</div><?php }
}
}
