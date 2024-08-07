<?php
/* Smarty version 4.1.1, created on 2024-08-06 10:45:44
  from '/app/www/design/themes/responsive/templates/addons/sms_notifications/views/sms/components/new_profile_sms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b1d4a8dda781_11714840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0adbbaf0a9b96672b796ed929cc968d6f92d673' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/sms_notifications/views/sms/components/new_profile_sms.tpl',
      1 => 1722579387,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b1d4a8dda781_11714840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sms_customer_registered','sms_customer_registered'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->__("sms_customer_registered",array("[name]"=>$_smarty_tpl->tpl_vars['customer']->value));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sms_notifications/views/sms/components/new_profile_sms.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sms_notifications/views/sms/components/new_profile_sms.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->__("sms_customer_registered",array("[name]"=>$_smarty_tpl->tpl_vars['customer']->value));
}
}
}
