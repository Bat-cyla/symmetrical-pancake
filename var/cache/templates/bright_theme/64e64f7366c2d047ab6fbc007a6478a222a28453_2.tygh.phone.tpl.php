<?php
/* Smarty version 4.1.1, created on 2024-08-06 17:25:31
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/phone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b2325b1d02a3_89515568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64e64f7366c2d047ab6fbc007a6478a222a28453' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/phone.tpl',
      1 => 1722954124,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b2325b1d02a3_89515568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('phone','cp_otp_phone_verification','cp_otp_phone_confirm','cp_otp_phone_need_confirm','cp_otp_phone_verification','cp_phone_confirmed','phone','cp_otp_phone_verification','cp_otp_phone_confirm','cp_otp_phone_need_confirm','cp_otp_phone_verification','cp_phone_confirmed'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="cp-phone-verified-wrap" id="phone_verification_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['inp_name']->value) {?>
        <?php $_smarty_tpl->_assignInScope('inp_name', "user_data");?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('placeholder', (($tmp = $_smarty_tpl->tpl_vars['placeholder']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['no_mask_placeholder'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('phone', '');?>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['phone']) {?>
        <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['user_data']->value['phone']);?>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['cp_phone_verified'] == "Y") {?>
            <?php $_smarty_tpl->_assignInScope('phone_verified', true);?>
        <?php }?>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['phone_verified']->value && $_SESSION['cp_otp']['register']) {?>
        <?php $_smarty_tpl->_assignInScope('otp_data', $_SESSION['cp_otp']['register']);?>
        <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['otp_data']->value['to']);?>
        <?php $_smarty_tpl->_assignInScope('phone_verified', $_smarty_tpl->tpl_vars['otp_data']->value['verified']);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['use_country_prefix'] == "Y" && $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_country']) {?>
        <?php $_smarty_tpl->_assignInScope('cntr_code', true);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('cntr_code', false);?>
    <?php }?>
    <div class="ty-control-group ty-shipping-phone cm-phone">
        <label for="phone" class="ty-control-group__title cm-required cm-mask-phone-label cm-trim"><?php echo $_smarty_tpl->__("phone");?>
</label>
        <input type="text" id="phone" class="ty-input-text cm-focus cm-mask-phone cp-phone" maxlength="25" value="<?php if ($_smarty_tpl->tpl_vars['phone']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');
} elseif (!$_smarty_tpl->tpl_vars['placeholder']->value) {
} elseif ($_smarty_tpl->tpl_vars['cntr_code']->value) {
} else { ?>+<?php }?>" data-ca-verification="phone_verification_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['inp_name']->value, ENT_QUOTES, 'UTF-8');?>
[phone]" autocomplete="n" <?php if ($_smarty_tpl->tpl_vars['placeholder']->value) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['inp_name']->value == "call_data") {?>
            <?php $_smarty_tpl->_assignInScope('from_call', true);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('from_call', false);?>
        <?php }?>
        <?php if (fn_needs_image_verification("cp_otp") == true) {?>
            <?php $_smarty_tpl->_assignInScope('cp_btn_href', fn_url("cp_otp.pre_verification?otp_type=register&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&phone=".((string)$_smarty_tpl->tpl_vars['phone']->value)."&go_skip_exist=".((string)$_smarty_tpl->tpl_vars['from_call']->value)));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('cp_btn_href', fn_url("profiles.cp_phone_verification?otp_type=register&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&phone=".((string)$_smarty_tpl->tpl_vars['phone']->value)."&go_skip_exist=".((string)$_smarty_tpl->tpl_vars['from_call']->value)));?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('code_valid', $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['new_send_time']);?>
        <?php if ($_smarty_tpl->tpl_vars['code_valid']->value) {?>
            <?php $_smarty_tpl->_assignInScope('cur_time', time());?>
            <?php if ($_SESSION['cp_otp']['register']['time'] && $_smarty_tpl->tpl_vars['cur_time']->value > intval($_SESSION['cp_otp']['register']['time'])) {?>
                <?php $_smarty_tpl->_assignInScope('send_in_ses_dif', $_smarty_tpl->tpl_vars['cur_time']->value-$_SESSION['cp_otp']['register']['time']);?>
                <?php if ($_smarty_tpl->tpl_vars['send_in_ses_dif']->value >= ($_smarty_tpl->tpl_vars['code_valid']->value*60)) {?>
                    <?php $_smarty_tpl->_assignInScope('send_in_ses_dif', 0);?>
                <?php }?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('send_in_ses_dif', 0);?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['send_in_ses_dif']->value) {?>
                <?php $_smarty_tpl->_assignInScope('time_end', ($_smarty_tpl->tpl_vars['code_valid']->value*60)-$_smarty_tpl->tpl_vars['send_in_ses_dif']->value);?>
                <?php $_smarty_tpl->_assignInScope('mins', intdiv($_smarty_tpl->tpl_vars['time_end']->value,"60"));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('mins', intval($_smarty_tpl->tpl_vars['code_valid']->value));?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('secs', 0);?>
            <?php if ($_smarty_tpl->tpl_vars['mins']->value < $_smarty_tpl->tpl_vars['code_valid']->value) {?>
                <?php $_smarty_tpl->_assignInScope('secs', ($_smarty_tpl->tpl_vars['code_valid']->value-$_smarty_tpl->tpl_vars['mins']->value)*60-$_smarty_tpl->tpl_vars['send_in_ses_dif']->value);?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('timer_m', sprintf("%02d",$_smarty_tpl->tpl_vars['mins']->value));?>
            <?php $_smarty_tpl->_assignInScope('timer_s', sprintf("%02d",$_smarty_tpl->tpl_vars['secs']->value));?>
            <?php $_smarty_tpl->_assignInScope('timer_str', ((string)$_smarty_tpl->tpl_vars['timer_m']->value).":".((string)$_smarty_tpl->tpl_vars['timer_s']->value));?>
        <?php }?>
        <div class="cp-verification-wrap">
            <a class="ty-btn ty-btn__primary cp-verification-link cm-dialog-auto-size cm-dialog-opener cm-ajax <?php if ($_smarty_tpl->tpl_vars['code_valid']->value) {?>cp-otp__run-again-timer<?php }?>" 
                style="<?php if ($_smarty_tpl->tpl_vars['phone_verified']->value) {?>display: none;<?php }?>" id="otp_verification_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_btn_href']->value, ENT_QUOTES, 'UTF-8');?>
"
                object_id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-dialog-title="<?php echo $_smarty_tpl->__("cp_otp_phone_verification");?>
"
                data-ca-target-id="phone_verification_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->__("cp_otp_phone_confirm");?>

            </a>
            
            <label for="cp_otp_verified" class="hidden cm-regexp" data-ca-regexp="Y" data-ca-message="<?php echo $_smarty_tpl->__("cp_otp_phone_need_confirm");?>
">
                <?php echo $_smarty_tpl->__("cp_otp_phone_verification");?>

            </label>
            <input type="hidden" id="cp_otp_verified" value="<?php if ($_smarty_tpl->tpl_vars['phone_verified']->value) {?>Y<?php }?>" />
        </div>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['phone_verified']->value) {?>
        <input type="hidden" name="verified_phone" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="cp-phone-confirmed" data-ca-phone="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
">
            <span class="cp-phone-status cp-confirmed"><i class="ty-icon-ok"></i>&nbsp;<?php echo $_smarty_tpl->__("cp_phone_confirmed");?>
</span>
        </div>
    <?php }?>
<!--phone_verification_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/components/phone.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/components/phone.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="cp-phone-verified-wrap" id="phone_verification_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['inp_name']->value) {?>
        <?php $_smarty_tpl->_assignInScope('inp_name', "user_data");?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('placeholder', (($tmp = $_smarty_tpl->tpl_vars['placeholder']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['no_mask_placeholder'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('phone', '');?>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['phone']) {?>
        <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['user_data']->value['phone']);?>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['cp_phone_verified'] == "Y") {?>
            <?php $_smarty_tpl->_assignInScope('phone_verified', true);?>
        <?php }?>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['phone_verified']->value && $_SESSION['cp_otp']['register']) {?>
        <?php $_smarty_tpl->_assignInScope('otp_data', $_SESSION['cp_otp']['register']);?>
        <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['otp_data']->value['to']);?>
        <?php $_smarty_tpl->_assignInScope('phone_verified', $_smarty_tpl->tpl_vars['otp_data']->value['verified']);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['use_country_prefix'] == "Y" && $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_country']) {?>
        <?php $_smarty_tpl->_assignInScope('cntr_code', true);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('cntr_code', false);?>
    <?php }?>
    <div class="ty-control-group ty-shipping-phone cm-phone">
        <label for="phone" class="ty-control-group__title cm-required cm-mask-phone-label cm-trim"><?php echo $_smarty_tpl->__("phone");?>
</label>
        <input type="text" id="phone" class="ty-input-text cm-focus cm-mask-phone cp-phone" maxlength="25" value="<?php if ($_smarty_tpl->tpl_vars['phone']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');
} elseif (!$_smarty_tpl->tpl_vars['placeholder']->value) {
} elseif ($_smarty_tpl->tpl_vars['cntr_code']->value) {
} else { ?>+<?php }?>" data-ca-verification="phone_verification_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['inp_name']->value, ENT_QUOTES, 'UTF-8');?>
[phone]" autocomplete="n" <?php if ($_smarty_tpl->tpl_vars['placeholder']->value) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['inp_name']->value == "call_data") {?>
            <?php $_smarty_tpl->_assignInScope('from_call', true);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('from_call', false);?>
        <?php }?>
        <?php if (fn_needs_image_verification("cp_otp") == true) {?>
            <?php $_smarty_tpl->_assignInScope('cp_btn_href', fn_url("cp_otp.pre_verification?otp_type=register&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&phone=".((string)$_smarty_tpl->tpl_vars['phone']->value)."&go_skip_exist=".((string)$_smarty_tpl->tpl_vars['from_call']->value)));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('cp_btn_href', fn_url("profiles.cp_phone_verification?otp_type=register&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&phone=".((string)$_smarty_tpl->tpl_vars['phone']->value)."&go_skip_exist=".((string)$_smarty_tpl->tpl_vars['from_call']->value)));?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('code_valid', $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['new_send_time']);?>
        <?php if ($_smarty_tpl->tpl_vars['code_valid']->value) {?>
            <?php $_smarty_tpl->_assignInScope('cur_time', time());?>
            <?php if ($_SESSION['cp_otp']['register']['time'] && $_smarty_tpl->tpl_vars['cur_time']->value > intval($_SESSION['cp_otp']['register']['time'])) {?>
                <?php $_smarty_tpl->_assignInScope('send_in_ses_dif', $_smarty_tpl->tpl_vars['cur_time']->value-$_SESSION['cp_otp']['register']['time']);?>
                <?php if ($_smarty_tpl->tpl_vars['send_in_ses_dif']->value >= ($_smarty_tpl->tpl_vars['code_valid']->value*60)) {?>
                    <?php $_smarty_tpl->_assignInScope('send_in_ses_dif', 0);?>
                <?php }?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('send_in_ses_dif', 0);?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['send_in_ses_dif']->value) {?>
                <?php $_smarty_tpl->_assignInScope('time_end', ($_smarty_tpl->tpl_vars['code_valid']->value*60)-$_smarty_tpl->tpl_vars['send_in_ses_dif']->value);?>
                <?php $_smarty_tpl->_assignInScope('mins', intdiv($_smarty_tpl->tpl_vars['time_end']->value,"60"));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('mins', intval($_smarty_tpl->tpl_vars['code_valid']->value));?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('secs', 0);?>
            <?php if ($_smarty_tpl->tpl_vars['mins']->value < $_smarty_tpl->tpl_vars['code_valid']->value) {?>
                <?php $_smarty_tpl->_assignInScope('secs', ($_smarty_tpl->tpl_vars['code_valid']->value-$_smarty_tpl->tpl_vars['mins']->value)*60-$_smarty_tpl->tpl_vars['send_in_ses_dif']->value);?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('timer_m', sprintf("%02d",$_smarty_tpl->tpl_vars['mins']->value));?>
            <?php $_smarty_tpl->_assignInScope('timer_s', sprintf("%02d",$_smarty_tpl->tpl_vars['secs']->value));?>
            <?php $_smarty_tpl->_assignInScope('timer_str', ((string)$_smarty_tpl->tpl_vars['timer_m']->value).":".((string)$_smarty_tpl->tpl_vars['timer_s']->value));?>
        <?php }?>
        <div class="cp-verification-wrap">
            <a class="ty-btn ty-btn__primary cp-verification-link cm-dialog-auto-size cm-dialog-opener cm-ajax <?php if ($_smarty_tpl->tpl_vars['code_valid']->value) {?>cp-otp__run-again-timer<?php }?>" 
                style="<?php if ($_smarty_tpl->tpl_vars['phone_verified']->value) {?>display: none;<?php }?>" id="otp_verification_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_btn_href']->value, ENT_QUOTES, 'UTF-8');?>
"
                object_id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-dialog-title="<?php echo $_smarty_tpl->__("cp_otp_phone_verification");?>
"
                data-ca-target-id="phone_verification_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->__("cp_otp_phone_confirm");?>

            </a>
            
            <label for="cp_otp_verified" class="hidden cm-regexp" data-ca-regexp="Y" data-ca-message="<?php echo $_smarty_tpl->__("cp_otp_phone_need_confirm");?>
">
                <?php echo $_smarty_tpl->__("cp_otp_phone_verification");?>

            </label>
            <input type="hidden" id="cp_otp_verified" value="<?php if ($_smarty_tpl->tpl_vars['phone_verified']->value) {?>Y<?php }?>" />
        </div>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['phone_verified']->value) {?>
        <input type="hidden" name="verified_phone" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="cp-phone-confirmed" data-ca-phone="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
">
            <span class="cp-phone-status cp-confirmed"><i class="ty-icon-ok"></i>&nbsp;<?php echo $_smarty_tpl->__("cp_phone_confirmed");?>
</span>
        </div>
    <?php }?>
<!--phone_verification_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
