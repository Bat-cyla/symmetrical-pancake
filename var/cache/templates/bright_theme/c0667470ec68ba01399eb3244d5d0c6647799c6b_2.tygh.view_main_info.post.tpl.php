<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:03
  from '/app/www/design/themes/responsive/templates/addons/vendor_communication/hooks/products/view_main_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49edfef7121_03818582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0667470ec68ba01399eb3244d5d0c6647799c6b' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/vendor_communication/hooks/products/view_main_info.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl' => 2,
    'tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl' => 2,
  ),
),false)) {
function content_66b49edfef7121_03818582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_product'] == "Y") {?>
    <div id="product_vendor_communication_thread_form">
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null),'object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id'],'vendor_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name']), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <!--product_vendor_communication_thread_form--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/products/view_main_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/products/view_main_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_product'] == "Y") {?>
    <div id="product_vendor_communication_thread_form">
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null),'object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id'],'vendor_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name']), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>
    <!--product_vendor_communication_thread_form--></div>
<?php }
}
}
}
