<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:16
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/phone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065cc87bc3_57611557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64e64f7366c2d047ab6fbc007a6478a222a28453' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/phone.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/phone.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66ec065cc87bc3_57611557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cp_otp_phone_verification','cp_otp_phone_confirm','cp_otp_phone_need_confirm','cp_otp_phone_verification','cp_phone_confirmed','cp_otp_phone_verification','cp_otp_phone_confirm','cp_otp_phone_need_confirm','cp_otp_phone_verification','cp_phone_confirmed'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="cp-phone-verified-wrap" id="phone_verification_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['inp_name']->value) {?>
        <?php $_smarty_tpl->_assignInScope('inp_name', "user_data");?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('phone_appearance_setting', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode']);?>
    <?php $_smarty_tpl->_assignInScope('phone_required', ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['phone_optional'] === "N"));?>
    <?php if ($_smarty_tpl->tpl_vars['phone_appearance_setting']->value === 'any_digits' || $_smarty_tpl->tpl_vars['phone_appearance_setting']->value === 'any_symbols') {?>
        <?php $_smarty_tpl->_assignInScope('placeholder', (($tmp = $_smarty_tpl->tpl_vars['placeholder']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['no_mask_placeholder'] ?? null : $tmp));?>
    <?php } elseif ($_smarty_tpl->tpl_vars['phone_appearance_setting']->value === "phone_number_with_country_selection") {?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['use_country_prefix'] == "Y") {?>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_country']) {?>
                <?php $_smarty_tpl->_assignInScope('countries', fn_get_simple_phone_country_codes(1));?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['country']->value['code'] === $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_country']) {?>
                        <?php $_smarty_tpl->_assignInScope('country_code', "+".((string)$_smarty_tpl->tpl_vars['country']->value['phone_code']));?>
                        <?php $_smarty_tpl->_assignInScope('cntr', $_smarty_tpl->tpl_vars['country']->value);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('cp_cntr_code', true);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('cp_cntr_code', false);?>
        <?php }?>
    <?php }?>
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
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['attrs']) ? $_smarty_tpl->tpl_vars['attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-verification'] = "phone_verification_info_".((string)$_smarty_tpl->tpl_vars['obj_id']->value);
$_smarty_tpl->_assignInScope('attrs', $_tmp_array);?>

        <div class="ty-control-group ty-shipping-phone cm-phone">

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['phone']->value) {
echo (string)$_smarty_tpl->tpl_vars['phone']->value;
} else {
ob_start();
if ($_smarty_tpl->tpl_vars['phone_required']->value) {
echo " true ";
}
$_prefixVariable8=ob_get_clean();
if (!$_smarty_tpl->tpl_vars['placeholder']->value) {
}}
$_prefixVariable9=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['placeholder']->value) {
echo (string)$_smarty_tpl->tpl_vars['placeholder']->value;
}
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"phone",'required'=>$_prefixVariable8,'class'=>"ty-input-text cm-focus cm-mask-phone cp-phone",'name'=>((string)$_smarty_tpl->tpl_vars['inp_name']->value)."[phone]",'value'=>$_prefixVariable9,'placeholder'=>$_prefixVariable10), 0, false);
?>

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

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['phone_verified']->value) {
echo "display: none;";
}
$_prefixVariable11=ob_get_clean();
$_smarty_tpl->_assignInScope('but_extra', "style=".$_prefixVariable11);?>

        <div class="cp-verification-wrap">
            <?php ob_start();
if ($_smarty_tpl->tpl_vars['phone_verified']->value) {
echo "display: none;";
}
$_prefixVariable12=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['code_valid']->value) {
echo "cp-otp__run-again-timer";
}
$_prefixVariable13=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"otp_verification_link_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_role'=>"submit",'but_extra'=>"style=".$_prefixVariable12,'but_meta'=>"ty-btn ty-btn__primary cp-verification-link cm-dialog-auto-size cm-dialog-opener cm-ajax ".$_prefixVariable13,'but_target_id'=>"phone_verification_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_href'=>((string)$_smarty_tpl->tpl_vars['cp_btn_href']->value),'but_title'=>$_smarty_tpl->__("cp_otp_phone_verification"),'but_text'=>$_smarty_tpl->__("cp_otp_phone_confirm")), 0, false);
?>

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
--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
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

    <?php $_smarty_tpl->_assignInScope('phone_appearance_setting', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode']);?>
    <?php $_smarty_tpl->_assignInScope('phone_required', ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['phone_optional'] === "N"));?>
    <?php if ($_smarty_tpl->tpl_vars['phone_appearance_setting']->value === 'any_digits' || $_smarty_tpl->tpl_vars['phone_appearance_setting']->value === 'any_symbols') {?>
        <?php $_smarty_tpl->_assignInScope('placeholder', (($tmp = $_smarty_tpl->tpl_vars['placeholder']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['no_mask_placeholder'] ?? null : $tmp));?>
    <?php } elseif ($_smarty_tpl->tpl_vars['phone_appearance_setting']->value === "phone_number_with_country_selection") {?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['use_country_prefix'] == "Y") {?>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_country']) {?>
                <?php $_smarty_tpl->_assignInScope('countries', fn_get_simple_phone_country_codes(1));?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['country']->value['code'] === $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_country']) {?>
                        <?php $_smarty_tpl->_assignInScope('country_code', "+".((string)$_smarty_tpl->tpl_vars['country']->value['phone_code']));?>
                        <?php $_smarty_tpl->_assignInScope('cntr', $_smarty_tpl->tpl_vars['country']->value);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('cp_cntr_code', true);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('cp_cntr_code', false);?>
        <?php }?>
    <?php }?>
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
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['attrs']) ? $_smarty_tpl->tpl_vars['attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-verification'] = "phone_verification_info_".((string)$_smarty_tpl->tpl_vars['obj_id']->value);
$_smarty_tpl->_assignInScope('attrs', $_tmp_array);?>

        <div class="ty-control-group ty-shipping-phone cm-phone">

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['phone']->value) {
echo (string)$_smarty_tpl->tpl_vars['phone']->value;
} else {
ob_start();
if ($_smarty_tpl->tpl_vars['phone_required']->value) {
echo " true ";
}
$_prefixVariable14=ob_get_clean();
if (!$_smarty_tpl->tpl_vars['placeholder']->value) {
}}
$_prefixVariable15=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['placeholder']->value) {
echo (string)$_smarty_tpl->tpl_vars['placeholder']->value;
}
$_prefixVariable16=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"phone",'required'=>$_prefixVariable14,'class'=>"ty-input-text cm-focus cm-mask-phone cp-phone",'name'=>((string)$_smarty_tpl->tpl_vars['inp_name']->value)."[phone]",'value'=>$_prefixVariable15,'placeholder'=>$_prefixVariable16), 0, true);
?>

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

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['phone_verified']->value) {
echo "display: none;";
}
$_prefixVariable17=ob_get_clean();
$_smarty_tpl->_assignInScope('but_extra', "style=".$_prefixVariable17);?>

        <div class="cp-verification-wrap">
            <?php ob_start();
if ($_smarty_tpl->tpl_vars['phone_verified']->value) {
echo "display: none;";
}
$_prefixVariable18=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['code_valid']->value) {
echo "cp-otp__run-again-timer";
}
$_prefixVariable19=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"otp_verification_link_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_role'=>"submit",'but_extra'=>"style=".$_prefixVariable18,'but_meta'=>"ty-btn ty-btn__primary cp-verification-link cm-dialog-auto-size cm-dialog-opener cm-ajax ".$_prefixVariable19,'but_target_id'=>"phone_verification_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_href'=>((string)$_smarty_tpl->tpl_vars['cp_btn_href']->value),'but_title'=>$_smarty_tpl->__("cp_otp_phone_verification"),'but_text'=>$_smarty_tpl->__("cp_otp_phone_confirm")), 0, true);
?>

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
--></div><?php }
}
}
