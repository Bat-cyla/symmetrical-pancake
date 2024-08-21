<?php
/* Smarty version 4.1.1, created on 2024-08-20 13:31:19
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/views/companies/cp_phone_verification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66c47077f01743_52682811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a50e30fade2d04c99eec2379b70509b1235a44b' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/views/companies/cp_phone_verification.tpl',
      1 => 1724149494,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/cp_otp_registration/components/phone_verification.tpl' => 2,
  ),
),false)) {
function content_66c47077f01743_52682811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/phone_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[companies.cp_phone_verification]"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/views/companies/cp_phone_verification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/views/companies/cp_phone_verification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/phone_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[companies.cp_phone_verification]"), 0, true);
}
}
}
