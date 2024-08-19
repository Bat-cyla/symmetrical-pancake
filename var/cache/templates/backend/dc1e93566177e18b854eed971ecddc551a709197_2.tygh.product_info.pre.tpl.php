<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:47
  from '/app/www/design/backend/templates/addons/product_variations/hooks/shipments/product_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde39fdedb98_80805328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc1e93566177e18b854eed971ecddc551a709197' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/shipments/product_info.pre.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/variation_features.tpl' => 1,
  ),
),false)) {
function content_66bde39fdedb98_80805328 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['oi']->value['variation_features'] || $_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>

    <?php if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']) {?>
                <?php $_smarty_tpl->_assignInScope('variation_features', $_smarty_tpl->tpl_vars['oi']->value['variation_features']);?>
    <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('variation_features', $_smarty_tpl->tpl_vars['product']->value['variation_features']);?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variation_features'=>$_smarty_tpl->tpl_vars['variation_features']->value,'features_secondary'=>true), 0, false);
}
}
}
