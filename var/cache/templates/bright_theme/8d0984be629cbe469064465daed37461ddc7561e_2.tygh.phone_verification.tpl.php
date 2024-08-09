<?php
/* Smarty version 4.1.1, created on 2024-08-08 14:13:44
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/phone_verification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4a8686f4539_30834274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d0984be629cbe469064465daed37461ddc7561e' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/phone_verification.tpl',
      1 => 1723105479,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/cp_otp_registration/components/otp_code.tpl' => 2,
    'tygh:addons/cp_otp_registration/components/otp_fail_message.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66b4a8686f4539_30834274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cp_otp_confirm','cp_otp_confirm'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="phone_verification_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="cp-otp-send-wrap" id="phone_verification_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <form name="phone_verification_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="result_ids" value="phone_verification_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="obj_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="otp_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['otp_type']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="phone" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/otp_code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/otp_fail_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="buttons-container ty-center clearfix">
                <?php ob_start();
if (!$_REQUEST['cp_guest_order']) {
echo "cm-ajax";
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary ".$_prefixVariable1." ",'but_text'=>$_smarty_tpl->__("cp_otp_confirm"),'but_name'=>((string)$_smarty_tpl->tpl_vars['but_name']->value),'but_role'=>"submit"), 0, false);
?>
            </div>
        </form>
    <!--phone_verification_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<!--phone_verification_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/components/phone_verification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/components/phone_verification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="phone_verification_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="cp-otp-send-wrap" id="phone_verification_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <form name="phone_verification_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="result_ids" value="phone_verification_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="obj_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="otp_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['otp_type']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="phone" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/otp_code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/otp_fail_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <div class="buttons-container ty-center clearfix">
                <?php ob_start();
if (!$_REQUEST['cp_guest_order']) {
echo "cm-ajax";
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary ".$_prefixVariable2." ",'but_text'=>$_smarty_tpl->__("cp_otp_confirm"),'but_name'=>((string)$_smarty_tpl->tpl_vars['but_name']->value),'but_role'=>"submit"), 0, true);
?>
            </div>
        </form>
    <!--phone_verification_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<!--phone_verification_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
