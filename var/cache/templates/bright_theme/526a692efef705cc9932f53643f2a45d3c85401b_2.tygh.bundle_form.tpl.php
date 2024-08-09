<?php
/* Smarty version 4.1.1, created on 2024-08-08 16:08:04
  from '/app/www/design/themes/responsive/templates/addons/product_bundles/components/common/bundle_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4c3343bd481_92898205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '526a692efef705cc9932f53643f2a45d3c85401b' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_bundles/components/common/bundle_form.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_bundles/components/common/bundle_scroller_init.tpl' => 2,
    'tygh:addons/product_bundles/components/common/product_item.tpl' => 2,
    'tygh:addons/product_bundles/components/common/bundle_total.tpl' => 2,
    'tygh:common/scroller_init.tpl' => 2,
  ),
),false)) {
function content_66b4c3343bd481_92898205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['bundle']->value['products']) {?>
    <?php $_smarty_tpl->_assignInScope('show_header', (($tmp = $_smarty_tpl->tpl_vars['show_header']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_description', (($tmp = $_smarty_tpl->tpl_vars['show_description']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_add_all_to_cart', (($tmp = $_smarty_tpl->tpl_vars['show_add_all_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_coefficient', (($tmp = $_smarty_tpl->tpl_vars['thumbnail_coefficient']->value ?? null)===null||$tmp==='' ? 0.75 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value);?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/common/bundle_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value), 0, false);
?>

        <div class="ty-product-bundles-bundle-form"
        style="--ty-product-lists-thumbnail-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_width']->value, ENT_QUOTES, 'UTF-8');?>
px;
            --ty-product-lists-thumbnail-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_height']->value, ENT_QUOTES, 'UTF-8');?>
px;"
    >
                <?php if ($_smarty_tpl->tpl_vars['show_header']->value && $_smarty_tpl->tpl_vars['bundle']->value['storefront_name']) {?>
            <div class="ty-product-bundles-bundle-form__header ty-subheader">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['storefront_name'], ENT_QUOTES, 'UTF-8');?>

            </div>
        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_description']->value && $_smarty_tpl->tpl_vars['bundle']->value['description']) {?>
            <div class="ty-product-bundles-bundle-form__description ty-wysiwyg-content">
                <?php echo $_smarty_tpl->tpl_vars['bundle']->value['description'];?>

            </div>
        <?php }?>

                <form class="cm-ajax cm-ajax-full-render ty-product-bundles-bundle-form__form"
            action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
            method="post"
            name="bundle_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
            enctype="multipart/form-data"
            id="bundle_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,product_bundles_bundle_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="bundle_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"/>

                        <div class="ty-product-bundles-bundle-form__form-inner"
                data-ca-product-bundles="formInner"
                id="product_bundles_bundle_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">

                                <div id="scroll_list_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
                    class="owl-carousel ty-scroller-list ty-scroller ty-product-bundles-bundle-form__products"
                    data-ca-product-bundles="scroller"
                    <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['scroller_item_attrs']->value);?>

                >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundle']->value['products'], 'bundle_product', false, 'bundle_product_key');
$_smarty_tpl->tpl_vars['bundle_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bundle_product_key']->value => $_smarty_tpl->tpl_vars['bundle_product']->value) {
$_smarty_tpl->tpl_vars['bundle_product']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/common/product_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'bundle_product'=>$_smarty_tpl->tpl_vars['bundle_product']->value,'bundle_product_key'=>$_smarty_tpl->tpl_vars['bundle_product_key']->value), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/common/bundle_total.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'show_add_all_to_cart'=>$_smarty_tpl->tpl_vars['show_add_all_to_cart']->value), 0, false);
?>

            <!--product_bundles_bundle_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
        </form>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block'=>$_smarty_tpl->tpl_vars['bundle_block']->value,'item_quantity_responsive'=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/common/bundle_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/common/bundle_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['bundle']->value['products']) {?>
    <?php $_smarty_tpl->_assignInScope('show_header', (($tmp = $_smarty_tpl->tpl_vars['show_header']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_description', (($tmp = $_smarty_tpl->tpl_vars['show_description']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_add_all_to_cart', (($tmp = $_smarty_tpl->tpl_vars['show_add_all_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_coefficient', (($tmp = $_smarty_tpl->tpl_vars['thumbnail_coefficient']->value ?? null)===null||$tmp==='' ? 0.75 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value);?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/common/bundle_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value), 0, true);
?>

        <div class="ty-product-bundles-bundle-form"
        style="--ty-product-lists-thumbnail-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_width']->value, ENT_QUOTES, 'UTF-8');?>
px;
            --ty-product-lists-thumbnail-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_height']->value, ENT_QUOTES, 'UTF-8');?>
px;"
    >
                <?php if ($_smarty_tpl->tpl_vars['show_header']->value && $_smarty_tpl->tpl_vars['bundle']->value['storefront_name']) {?>
            <div class="ty-product-bundles-bundle-form__header ty-subheader">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['storefront_name'], ENT_QUOTES, 'UTF-8');?>

            </div>
        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_description']->value && $_smarty_tpl->tpl_vars['bundle']->value['description']) {?>
            <div class="ty-product-bundles-bundle-form__description ty-wysiwyg-content">
                <?php echo $_smarty_tpl->tpl_vars['bundle']->value['description'];?>

            </div>
        <?php }?>

                <form class="cm-ajax cm-ajax-full-render ty-product-bundles-bundle-form__form"
            action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
            method="post"
            name="bundle_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
            enctype="multipart/form-data"
            id="bundle_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,product_bundles_bundle_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="bundle_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"/>

                        <div class="ty-product-bundles-bundle-form__form-inner"
                data-ca-product-bundles="formInner"
                id="product_bundles_bundle_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">

                                <div id="scroll_list_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
                    class="owl-carousel ty-scroller-list ty-scroller ty-product-bundles-bundle-form__products"
                    data-ca-product-bundles="scroller"
                    <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['scroller_item_attrs']->value);?>

                >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundle']->value['products'], 'bundle_product', false, 'bundle_product_key');
$_smarty_tpl->tpl_vars['bundle_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bundle_product_key']->value => $_smarty_tpl->tpl_vars['bundle_product']->value) {
$_smarty_tpl->tpl_vars['bundle_product']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/common/product_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'bundle_product'=>$_smarty_tpl->tpl_vars['bundle_product']->value,'bundle_product_key'=>$_smarty_tpl->tpl_vars['bundle_product_key']->value), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/common/bundle_total.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'show_add_all_to_cart'=>$_smarty_tpl->tpl_vars['show_add_all_to_cart']->value), 0, true);
?>

            <!--product_bundles_bundle_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
        </form>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block'=>$_smarty_tpl->tpl_vars['bundle_block']->value,'item_quantity_responsive'=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value), 0, true);
}
}
}
}
