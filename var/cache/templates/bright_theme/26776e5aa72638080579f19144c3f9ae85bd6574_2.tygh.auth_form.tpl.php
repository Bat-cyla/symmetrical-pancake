<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:16
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/auth_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065c49e248_72279285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26776e5aa72638080579f19144c3f9ae85bd6574' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/auth_form.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:components/phone.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:addons/cp_otp_registration/components/otp_verification.tpl' => 2,
  ),
),false)) {
function content_66ec065c49e248_72279285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('returning_customer','cp_otp_by_','cp_otp_fast_register_email_text','cp_otp_fast_register_phone_text','email','password','forgot_password_question','forgot_password_question','returning_customer','cp_otp_by_','cp_otp_fast_register_email_text','cp_otp_fast_register_phone_text','email','password','forgot_password_question','forgot_password_question'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="cp-auth-form-wrap" id="cp_auth_form_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['style']->value == "checkout") {?>
        <div class="ty-checkout-login-form"><?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("returning_customer")), 0, false);
?>
    <?php }?>
    <div class="cp-auth-field-wrap">
        <?php $_smarty_tpl->_assignInScope('login_email', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['email']->value ?? null)===null||$tmp==='' ? $_REQUEST['email'] ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['demo_username'] ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('login_phone', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['phone']->value ?? null)===null||$tmp==='' ? $_REQUEST['phone'] ?? null : $tmp) ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('cp_location', (($tmp = $_smarty_tpl->tpl_vars['cp_location']->value ?? null)===null||$tmp==='' ? $_REQUEST['cp_location'] ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('otp_action', (($tmp = $_smarty_tpl->tpl_vars['otp_action']->value ?? null)===null||$tmp==='' ? $_REQUEST['otp_action'] ?? null : $tmp));?>
        <?php if (!$_smarty_tpl->tpl_vars['cp_location']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "checkout" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
                <?php $_smarty_tpl->_assignInScope('cp_location', "checkout");?>
            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['auth_by_email'] === 'forbid') {?>
            <?php $_smarty_tpl->_assignInScope('no_email', true);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['auth_by_email'] === 'make_optional') {?>
            <?php $_smarty_tpl->_assignInScope('email_optional', true);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['phone_optional'] === 'N') {?>
            <?php $_smarty_tpl->_assignInScope('phone_required', true);?>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['no_email']->value) {?>
            <?php $_smarty_tpl->_assignInScope('auth_methods', array("phone","email"));?>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_auth_method'] == "email") {?>
                <?php $_smarty_tpl->_assignInScope('auth_methods', array("email","phone"));?>
            <?php }?>
            <div class="ty-tabs clearfix">
                <ul class="ty-tabs__list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['auth_methods']->value, 'method');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
                        <li class="ty-tabs__item <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['method']->value, ENT_QUOTES, 'UTF-8');?>
 active">
                            <a class="ty-tabs__a cm-ajax cm-ajax-full-render" data-ca-target-id="cp_auth_form_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url("auth.login_form?auth_field=".((string)$_smarty_tpl->tpl_vars['method']->value)."&custom_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&cp_location=".((string)$_smarty_tpl->tpl_vars['cp_location']->value)."&otp_action=".((string)$_smarty_tpl->tpl_vars['otp_action']->value)."&email=".((string)$_smarty_tpl->tpl_vars['login_email']->value)."&phone=".((string)$_smarty_tpl->tpl_vars['login_phone']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_otp_by_".((string)$_smarty_tpl->tpl_vars['method']->value));?>
</a>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "otp" && $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['fast_registration'] == "Y") {?>
            <div class="cp-auth-fast-register-text">
                <?php if ($_smarty_tpl->tpl_vars['auth_field']->value == "email") {?>
                    <?php echo $_smarty_tpl->__("cp_otp_fast_register_email_text");?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("cp_otp_fast_register_phone_text");?>

                <?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['auth_field']->value == "email" && !$_smarty_tpl->tpl_vars['no_email']->value) {?>
            <div class="ty-control-group cp-otp-auth-field">
                <label for="login_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label <?php if (!$_smarty_tpl->tpl_vars['email_optional']->value) {?>cm-required<?php }?> cm-trim cm-email"><?php echo $_smarty_tpl->__("email");?>
</label>
                <input type="text" id="login_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_data[email]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['login_email']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input cm-focus" />
            </div>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('placeholder', (($tmp = $_smarty_tpl->tpl_vars['placeholder']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['no_mask_placeholder'] ?? null : $tmp));?>
            <div class="ty-control-group cm-phone cp-otp-auth-field">
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['phone_required']->value) {
echo "true";
}
$_prefixVariable4=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['placeholder']->value) {
echo (string)$_smarty_tpl->tpl_vars['placeholder']->value;
}
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"login_phone_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'name'=>"user_data[phone]",'required'=>$_prefixVariable4,'value'=>((string)$_smarty_tpl->tpl_vars['login_phone']->value),'placeholder'=>$_prefixVariable5,'class'=>"ty-login__input cm-focus cm-mask-phone cp-phone"), 0, false);
?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['login_type']->value != "otp") {?>
            <div class="ty-control-group ty-password-forgot">
                <label for="psw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required"><?php echo $_smarty_tpl->__("password");?>
</label>
                <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "password") {?>
                    <a data-ca-dispatch="dispatch[profiles.cp_check_otp]" data-ca-check-filter=".cp-otp-auth-field" data-ca-otp-action="recover" class="cp-recover-pass ty-password-forgot__a cm-submit cm-ajax cm-ajax-full-render" rel="nofollow" tabindex="5"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
                <?php } else { ?>
                    <a href="<?php echo htmlspecialchars((string) fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="ty-password-forgot__a"  tabindex="5"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
                <?php }?>
                <input type="password" id="psw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="password" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input" maxlength="32" />
            </div>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['style']->value == "checkout") {?>
        </div>
    <?php }?>
    
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"login",'align'=>"left"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/otp_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('otp_type'=>"login"), 0, false);
?>
<!--cp_auth_form_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/components/auth_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/components/auth_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="cp-auth-form-wrap" id="cp_auth_form_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['style']->value == "checkout") {?>
        <div class="ty-checkout-login-form"><?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("returning_customer")), 0, true);
?>
    <?php }?>
    <div class="cp-auth-field-wrap">
        <?php $_smarty_tpl->_assignInScope('login_email', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['email']->value ?? null)===null||$tmp==='' ? $_REQUEST['email'] ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['demo_username'] ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('login_phone', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['phone']->value ?? null)===null||$tmp==='' ? $_REQUEST['phone'] ?? null : $tmp) ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('cp_location', (($tmp = $_smarty_tpl->tpl_vars['cp_location']->value ?? null)===null||$tmp==='' ? $_REQUEST['cp_location'] ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('otp_action', (($tmp = $_smarty_tpl->tpl_vars['otp_action']->value ?? null)===null||$tmp==='' ? $_REQUEST['otp_action'] ?? null : $tmp));?>
        <?php if (!$_smarty_tpl->tpl_vars['cp_location']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "checkout" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
                <?php $_smarty_tpl->_assignInScope('cp_location', "checkout");?>
            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['auth_by_email'] === 'forbid') {?>
            <?php $_smarty_tpl->_assignInScope('no_email', true);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['auth_by_email'] === 'make_optional') {?>
            <?php $_smarty_tpl->_assignInScope('email_optional', true);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['phone_optional'] === 'N') {?>
            <?php $_smarty_tpl->_assignInScope('phone_required', true);?>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['no_email']->value) {?>
            <?php $_smarty_tpl->_assignInScope('auth_methods', array("phone","email"));?>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_auth_method'] == "email") {?>
                <?php $_smarty_tpl->_assignInScope('auth_methods', array("email","phone"));?>
            <?php }?>
            <div class="ty-tabs clearfix">
                <ul class="ty-tabs__list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['auth_methods']->value, 'method');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
                        <li class="ty-tabs__item <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['method']->value, ENT_QUOTES, 'UTF-8');?>
 active">
                            <a class="ty-tabs__a cm-ajax cm-ajax-full-render" data-ca-target-id="cp_auth_form_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url("auth.login_form?auth_field=".((string)$_smarty_tpl->tpl_vars['method']->value)."&custom_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&cp_location=".((string)$_smarty_tpl->tpl_vars['cp_location']->value)."&otp_action=".((string)$_smarty_tpl->tpl_vars['otp_action']->value)."&email=".((string)$_smarty_tpl->tpl_vars['login_email']->value)."&phone=".((string)$_smarty_tpl->tpl_vars['login_phone']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_otp_by_".((string)$_smarty_tpl->tpl_vars['method']->value));?>
</a>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "otp" && $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['fast_registration'] == "Y") {?>
            <div class="cp-auth-fast-register-text">
                <?php if ($_smarty_tpl->tpl_vars['auth_field']->value == "email") {?>
                    <?php echo $_smarty_tpl->__("cp_otp_fast_register_email_text");?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("cp_otp_fast_register_phone_text");?>

                <?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['auth_field']->value == "email" && !$_smarty_tpl->tpl_vars['no_email']->value) {?>
            <div class="ty-control-group cp-otp-auth-field">
                <label for="login_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label <?php if (!$_smarty_tpl->tpl_vars['email_optional']->value) {?>cm-required<?php }?> cm-trim cm-email"><?php echo $_smarty_tpl->__("email");?>
</label>
                <input type="text" id="login_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_data[email]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['login_email']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input cm-focus" />
            </div>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('placeholder', (($tmp = $_smarty_tpl->tpl_vars['placeholder']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['no_mask_placeholder'] ?? null : $tmp));?>
            <div class="ty-control-group cm-phone cp-otp-auth-field">
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['phone_required']->value) {
echo "true";
}
$_prefixVariable6=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['placeholder']->value) {
echo (string)$_smarty_tpl->tpl_vars['placeholder']->value;
}
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"login_phone_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'name'=>"user_data[phone]",'required'=>$_prefixVariable6,'value'=>((string)$_smarty_tpl->tpl_vars['login_phone']->value),'placeholder'=>$_prefixVariable7,'class'=>"ty-login__input cm-focus cm-mask-phone cp-phone"), 0, true);
?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['login_type']->value != "otp") {?>
            <div class="ty-control-group ty-password-forgot">
                <label for="psw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required"><?php echo $_smarty_tpl->__("password");?>
</label>
                <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "password") {?>
                    <a data-ca-dispatch="dispatch[profiles.cp_check_otp]" data-ca-check-filter=".cp-otp-auth-field" data-ca-otp-action="recover" class="cp-recover-pass ty-password-forgot__a cm-submit cm-ajax cm-ajax-full-render" rel="nofollow" tabindex="5"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
                <?php } else { ?>
                    <a href="<?php echo htmlspecialchars((string) fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="ty-password-forgot__a"  tabindex="5"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
                <?php }?>
                <input type="password" id="psw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="password" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input" maxlength="32" />
            </div>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['style']->value == "checkout") {?>
        </div>
    <?php }?>
    
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"login",'align'=>"left"), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/otp_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('otp_type'=>"login"), 0, true);
?>
<!--cp_auth_form_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
