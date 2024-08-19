<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:03
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/object_picker_products_additional_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e0e78290e9_11926319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f4e5d6564b6643340b4c835c8809514b8b23507' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/object_picker_products_additional_info.pre.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b5e0e78290e9_11926319 (Smarty_Internal_Template $_smarty_tpl) {
?>
    ${data.variation_features
        ? `<div class="product-variations__variation-features product-variations__variation-features--inline product-variations__variation-features--secondary">
            ${data.variation_features.map(feature => feature['variant']).join(' • ')}&nbsp;—&nbsp;
           </div>`
        : ''
    }
<?php }
}
