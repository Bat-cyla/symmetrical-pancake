<?php
/* Smarty version 4.1.1, created on 2024-08-06 16:27:20
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/views/profiles/cp_phone_verification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b224b86fd0d6_96774250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '345b6982a15c390a56f9492de51fb9ddfd663cef' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/views/profiles/cp_phone_verification.tpl',
      1 => 1722933287,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/cp_otp_registration/components/phone_verification.tpl' => 2,
  ),
),false)) {
function content_66b224b86fd0d6_96774250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_REQUEST['cp_guest_order']) {?>
    <?php $_smarty_tpl->_assignInScope('but_name', "dispatch[checkout.cp_phone_verification]");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('but_name', "dispatch[profiles.cp_phone_verification]");
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/phone_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/views/profiles/cp_phone_verification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/views/profiles/cp_phone_verification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_REQUEST['cp_guest_order']) {?>
    <?php $_smarty_tpl->_assignInScope('but_name', "dispatch[checkout.cp_phone_verification]");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('but_name', "dispatch[profiles.cp_phone_verification]");
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/phone_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0, true);
}
}
}
