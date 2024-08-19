<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:48
  from '/app/www/design/backend/templates/addons/product_bundles/hooks/promotions/details_link.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde3a09c1ba1_05096682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ad47878a0ca86a79968c566a939890a80d1b950' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_bundles/hooks/promotions/details_link.override.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_bundles/views/product_bundles/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_66bde3a09c1ba1_05096682 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('details','product_bundles.bundle_details'));
if (!$_smarty_tpl->tpl_vars['bundle_promotions']->value || !in_array($_smarty_tpl->tpl_vars['promotion_id']->value,$_smarty_tpl->tpl_vars['bundle_promotions']->value)) {?>
    <p><a href="<?php echo htmlspecialchars((string) fn_url("promotions.update?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("details");?>
</a></p>
<?php } else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundles']->value, 'bundle');
$_smarty_tpl->tpl_vars['bundle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['bundle']->value['linked_promotion_id'] != $_smarty_tpl->tpl_vars['promotion_id']->value) {?>
            <?php continue 1;?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('selected_bundle', $_smarty_tpl->tpl_vars['bundle']->value);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['selected_bundle']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
            <div id="add_new_bundle">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/views/product_bundles/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'item'=>$_smarty_tpl->tpl_vars['selected_bundle']->value), 0, false);
?>
            </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_bundle",'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'link_text'=>$_smarty_tpl->__("product_bundles.bundle_details"),'act'=>"edit"), 0, false);
?>

    <?php }
}
}
}
