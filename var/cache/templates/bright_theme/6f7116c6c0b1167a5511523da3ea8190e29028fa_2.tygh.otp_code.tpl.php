<?php
/* Smarty version 4.1.1, created on 2024-08-08 11:27:25
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/otp_code.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4816d977c65_77803430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f7116c6c0b1167a5511523da3ea8190e29028fa' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/otp_code.tpl',
      1 => 1723105479,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4816d977c65_77803430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cp_otp_code_sended_by_call','cp_otp_code_sended_text','cp_otp_email_code_sended_text','cp_otp_enter_code','cp_otp_code_valid','cp_otp_get_new_code','cp_otp_code_sended_by_call','cp_otp_code_sended_text','cp_otp_email_code_sended_text','cp_otp_enter_code','cp_otp_code_valid','cp_otp_get_new_code'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('otp_content_id', (($tmp = $_smarty_tpl->tpl_vars['otp_content_id']->value ?? null)===null||$tmp==='' ? "phone_verification_content_".((string)$_smarty_tpl->tpl_vars['obj_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('digits_count', 4);
$_smarty_tpl->_assignInScope('submit_by_last', false);
if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['last_num_confirm'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('submit_by_last', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['login_type'] == "otp" && $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['call_password'] == "Y" && fn_get_addon_version("cp_sms_services") >= 1.5 && in_array($_smarty_tpl->tpl_vars['addons']->value['cp_sms_services']['service'],array("sms_ru","smsprofi_ru"))) {?>
    <?php $_smarty_tpl->_assignInScope('call_password', true);
}?>

<?php if (!$_smarty_tpl->tpl_vars['no_info_text']->value) {?>
    <div class="cp-code-sended-text"><?php if ($_smarty_tpl->tpl_vars['call_password']->value) {
echo $_smarty_tpl->__("cp_otp_code_sended_by_call");
} elseif ($_smarty_tpl->tpl_vars['phone']->value) {
echo $_smarty_tpl->__("cp_otp_code_sended_text");
} elseif ($_smarty_tpl->tpl_vars['email']->value) {
echo $_smarty_tpl->__("cp_otp_email_code_sended_text");
}?></div>
<?php }?>
<div class="ty-control-group clearfix">
    <label for="cp_otp_code" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("cp_otp_enter_code");?>
</label>
    <div class="cp-otp-code-wrap">
                <input id="cp_otp_code" type="text" value="" name="cp_otp_code" class="" data-ca-count="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['digits_count']->value, ENT_QUOTES, 'UTF-8');?>
" size="12" maxlength="24" />
        <input id="cp_otp_code_last_num" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['submit_by_last']->value, ENT_QUOTES, 'UTF-8');?>
" name="cp_otp_code_last_num" />
    </div>

    <div class="cp-otp-timer-wrap">
        <?php $_smarty_tpl->_assignInScope('code_valid', $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['code_valid_time']);?>
        <?php if ($_smarty_tpl->tpl_vars['code_valid']->value) {?>
            <?php $_smarty_tpl->_assignInScope('mins', intval($_smarty_tpl->tpl_vars['code_valid']->value));?>
            <?php $_smarty_tpl->_assignInScope('secs', 0);?>
            <?php if ($_smarty_tpl->tpl_vars['mins']->value < $_smarty_tpl->tpl_vars['code_valid']->value) {?>
                <?php $_smarty_tpl->_assignInScope('secs', ($_smarty_tpl->tpl_vars['code_valid']->value-$_smarty_tpl->tpl_vars['mins']->value)*60);?>
            <?php }?>
            <span class="cp-otp-timer-info"><?php echo $_smarty_tpl->__("cp_otp_code_valid");?>
: <span class="cp-otp-timer"><?php echo htmlspecialchars((string) sprintf("%02d",$_smarty_tpl->tpl_vars['mins']->value), ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars((string) sprintf("%02d",$_smarty_tpl->tpl_vars['secs']->value), ENT_QUOTES, 'UTF-8');?>
</span></span>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('resend_extra', '');?>
        <?php if ($_smarty_tpl->tpl_vars['phone']->value) {?>
            <?php $_smarty_tpl->_assignInScope('resend_extra', "phone=".((string)$_smarty_tpl->tpl_vars['phone']->value));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['email']->value) {?>
            <?php $_smarty_tpl->_assignInScope('resend_extra', "email=".((string)$_smarty_tpl->tpl_vars['email']->value));?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['return_dispatch']->value) {?>
            <?php $_smarty_tpl->_assignInScope('resend_extra', ((string)$_smarty_tpl->tpl_vars['resend_extra']->value)."&return_dispatch=".((string)$_smarty_tpl->tpl_vars['return_dispatch']->value));?>
        <?php }?>
        <a class="cm-post cm-ajax cm-skip-validation cp-new-code-btn hidden" href="<?php echo htmlspecialchars((string) fn_url("profiles.cp_check_otp?resend=1&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&otp_type=".((string)$_smarty_tpl->tpl_vars['otp_type']->value)."&otp_action=".((string)$_smarty_tpl->tpl_vars['otp_action']->value)."&".((string)$_smarty_tpl->tpl_vars['resend_extra']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['otp_content_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_otp_get_new_code");?>
</a>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/components/otp_code.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/components/otp_code.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('otp_content_id', (($tmp = $_smarty_tpl->tpl_vars['otp_content_id']->value ?? null)===null||$tmp==='' ? "phone_verification_content_".((string)$_smarty_tpl->tpl_vars['obj_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('digits_count', 4);
$_smarty_tpl->_assignInScope('submit_by_last', false);
if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['last_num_confirm'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('submit_by_last', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['login_type'] == "otp" && $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['call_password'] == "Y" && fn_get_addon_version("cp_sms_services") >= 1.5 && in_array($_smarty_tpl->tpl_vars['addons']->value['cp_sms_services']['service'],array("sms_ru","smsprofi_ru"))) {?>
    <?php $_smarty_tpl->_assignInScope('call_password', true);
}?>

<?php if (!$_smarty_tpl->tpl_vars['no_info_text']->value) {?>
    <div class="cp-code-sended-text"><?php if ($_smarty_tpl->tpl_vars['call_password']->value) {
echo $_smarty_tpl->__("cp_otp_code_sended_by_call");
} elseif ($_smarty_tpl->tpl_vars['phone']->value) {
echo $_smarty_tpl->__("cp_otp_code_sended_text");
} elseif ($_smarty_tpl->tpl_vars['email']->value) {
echo $_smarty_tpl->__("cp_otp_email_code_sended_text");
}?></div>
<?php }?>
<div class="ty-control-group clearfix">
    <label for="cp_otp_code" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("cp_otp_enter_code");?>
</label>
    <div class="cp-otp-code-wrap">
                <input id="cp_otp_code" type="text" value="" name="cp_otp_code" class="" data-ca-count="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['digits_count']->value, ENT_QUOTES, 'UTF-8');?>
" size="12" maxlength="24" />
        <input id="cp_otp_code_last_num" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['submit_by_last']->value, ENT_QUOTES, 'UTF-8');?>
" name="cp_otp_code_last_num" />
    </div>

    <div class="cp-otp-timer-wrap">
        <?php $_smarty_tpl->_assignInScope('code_valid', $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['code_valid_time']);?>
        <?php if ($_smarty_tpl->tpl_vars['code_valid']->value) {?>
            <?php $_smarty_tpl->_assignInScope('mins', intval($_smarty_tpl->tpl_vars['code_valid']->value));?>
            <?php $_smarty_tpl->_assignInScope('secs', 0);?>
            <?php if ($_smarty_tpl->tpl_vars['mins']->value < $_smarty_tpl->tpl_vars['code_valid']->value) {?>
                <?php $_smarty_tpl->_assignInScope('secs', ($_smarty_tpl->tpl_vars['code_valid']->value-$_smarty_tpl->tpl_vars['mins']->value)*60);?>
            <?php }?>
            <span class="cp-otp-timer-info"><?php echo $_smarty_tpl->__("cp_otp_code_valid");?>
: <span class="cp-otp-timer"><?php echo htmlspecialchars((string) sprintf("%02d",$_smarty_tpl->tpl_vars['mins']->value), ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars((string) sprintf("%02d",$_smarty_tpl->tpl_vars['secs']->value), ENT_QUOTES, 'UTF-8');?>
</span></span>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('resend_extra', '');?>
        <?php if ($_smarty_tpl->tpl_vars['phone']->value) {?>
            <?php $_smarty_tpl->_assignInScope('resend_extra', "phone=".((string)$_smarty_tpl->tpl_vars['phone']->value));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['email']->value) {?>
            <?php $_smarty_tpl->_assignInScope('resend_extra', "email=".((string)$_smarty_tpl->tpl_vars['email']->value));?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['return_dispatch']->value) {?>
            <?php $_smarty_tpl->_assignInScope('resend_extra', ((string)$_smarty_tpl->tpl_vars['resend_extra']->value)."&return_dispatch=".((string)$_smarty_tpl->tpl_vars['return_dispatch']->value));?>
        <?php }?>
        <a class="cm-post cm-ajax cm-skip-validation cp-new-code-btn hidden" href="<?php echo htmlspecialchars((string) fn_url("profiles.cp_check_otp?resend=1&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&otp_type=".((string)$_smarty_tpl->tpl_vars['otp_type']->value)."&otp_action=".((string)$_smarty_tpl->tpl_vars['otp_action']->value)."&".((string)$_smarty_tpl->tpl_vars['resend_extra']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['otp_content_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_otp_get_new_code");?>
</a>
    </div>
</div>

<?php }
}
}
