<?php
/* Smarty version 4.1.1, created on 2024-08-07 16:34:44
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/otp_fail_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b377f45deef7_34531397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef3ec22305bd13c428a05275689e574a8b05ab4' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/otp_fail_message.tpl',
      1 => 1723034486,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b377f45deef7_34531397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_REQUEST['obj_id'] ?? null : $tmp));?>
<div class="cp-otp-fail-message help-inline" id="cp_otp_fail_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <p><?php echo $_smarty_tpl->tpl_vars['cp_otp_fail_message']->value;?>
</p>
<!--cp_otp_fail_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/components/otp_fail_message.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/components/otp_fail_message.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_REQUEST['obj_id'] ?? null : $tmp));?>
<div class="cp-otp-fail-message help-inline" id="cp_otp_fail_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <p><?php echo $_smarty_tpl->tpl_vars['cp_otp_fail_message']->value;?>
</p>
<!--cp_otp_fail_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
