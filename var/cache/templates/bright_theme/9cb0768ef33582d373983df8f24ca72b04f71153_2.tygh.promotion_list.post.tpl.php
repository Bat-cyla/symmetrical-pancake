<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:15:03
  from '/app/www/design/themes/responsive/templates/addons/product_bundles/hooks/promotions/promotion_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49aa7668d83_79473918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cb0768ef33582d373983df8f24ca72b04f71153' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_bundles/hooks/promotions/promotion_list.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_bundles/components/pages/bundles_promotion.tpl' => 2,
  ),
),false)) {
function content_66b49aa7668d83_79473918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.active_bundles','product_bundles.active_bundles'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['bundles']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_bundles/frontend/func.js"),$_smarty_tpl);?>


    <div class="ty-product-bundles-promotion-list">
        <h2 class="ty-grid-promotions__subtitle"><?php echo $_smarty_tpl->__("product_bundles.active_bundles");?>
</h2>
        <div class="ty-product-bundles-promotion-list__content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundles']->value, 'bundle');
$_smarty_tpl->tpl_vars['bundle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/pages/bundles_promotion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/hooks/promotions/promotion_list.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/hooks/promotions/promotion_list.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['bundles']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_bundles/frontend/func.js"),$_smarty_tpl);?>


    <div class="ty-product-bundles-promotion-list">
        <h2 class="ty-grid-promotions__subtitle"><?php echo $_smarty_tpl->__("product_bundles.active_bundles");?>
</h2>
        <div class="ty-product-bundles-promotion-list__content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundles']->value, 'bundle');
$_smarty_tpl->tpl_vars['bundle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/pages/bundles_promotion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
}
