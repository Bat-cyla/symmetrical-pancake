<?php
/* Smarty version 4.1.1, created on 2024-08-16 10:20:53
  from '/app/www/design/themes/responsive/templates/addons/bestsellers/views/products/components/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66befdd5314870_29595971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '470956691d0fee210507065a59efd8e4dcf2915e' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/bestsellers/views/products/components/products.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66befdd5314870_29595971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('products_found','text_no_matching_products_found','products_found','text_no_matching_products_found'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['search']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("products_found");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('title_extra', $_prefixVariable1.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']));?>
        <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
            <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['category_data']->value['product_columns']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value,'show_qty'=>true), 0, true);
?>
        <?php }?>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_products_found");?>
</p>
    <?php }
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?>
    <span class="ty-mainbox-title__left"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/bestsellers/views/products/components/products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/bestsellers/views/products/components/products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['search']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("products_found");
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('title_extra', $_prefixVariable2.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']));?>
        <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
            <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['category_data']->value['product_columns']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value,'show_qty'=>true), 0, true);
?>
        <?php }?>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_products_found");?>
</p>
    <?php }
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?>
    <span class="ty-mainbox-title__left"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
