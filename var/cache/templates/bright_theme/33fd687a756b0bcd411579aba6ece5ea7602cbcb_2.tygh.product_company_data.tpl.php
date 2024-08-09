<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:01
  from '/app/www/design/themes/responsive/templates/views/companies/components/product_company_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49edd912380_49507543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33fd687a756b0bcd411579aba6ece5ea7602cbcb' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/companies/components/product_company_data.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b49edd912380_49507543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor','vendor'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['company_name']->value || $_smarty_tpl->tpl_vars['company_id']->value) && $_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor'] == "Y") {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:product_company_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
            <span class="ty-control-group__item ty-company-name"><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');
}?></a></span>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/components/product_company_data.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/components/product_company_data.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['company_name']->value || $_smarty_tpl->tpl_vars['company_id']->value) && $_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor'] == "Y") {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:product_company_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
            <span class="ty-control-group__item ty-company-name"><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');
}?></a></span>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php }
}
}
}
