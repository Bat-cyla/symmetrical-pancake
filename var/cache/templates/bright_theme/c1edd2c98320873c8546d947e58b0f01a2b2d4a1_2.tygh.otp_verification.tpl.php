<?php
/* Smarty version 4.1.1, created on 2024-08-06 17:25:22
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/otp_verification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b23252bd22d7_28578650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1edd2c98320873c8546d947e58b0f01a2b2d4a1' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/components/otp_verification.tpl',
      1 => 1722954124,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/cp_otp_registration/components/otp_code.tpl' => 2,
    'tygh:addons/cp_otp_registration/components/otp_fail_message.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
    'tygh:buttons/login.tpl' => 2,
  ),
),false)) {
function content_66b23252bd22d7_28578650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','cp_otp_get_code','register','cp_otp_get_code','email','cp_otp_get_code','create_account','create_account','cp_otp_send_again_after','register','sign_in','continue','remember_me','sign_in','cp_otp_get_code','register','cp_otp_get_code','email','cp_otp_get_code','create_account','create_account','cp_otp_send_again_after','register','sign_in','continue','remember_me'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="otp_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_assignInScope('login_type', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['login_type']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['login_type'] ?? null : $tmp) ?? null)===null||$tmp==='' ? "password" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('cp_location', (($tmp = $_smarty_tpl->tpl_vars['cp_location']->value ?? null)===null||$tmp==='' ? $_REQUEST['cp_location'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('otp_action', (($tmp = $_smarty_tpl->tpl_vars['otp_action']->value ?? null)===null||$tmp==='' ? $_REQUEST['otp_action'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('next_dispatch', '');?>
    <?php if ($_smarty_tpl->tpl_vars['otp_type']->value == "login") {?>
        <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("sign_in"));?>
        <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "otp" || $_smarty_tpl->tpl_vars['login_type']->value == "two_factor") {?>
            <?php $_smarty_tpl->_assignInScope('next_dispatch', "profiles.cp_otp_login");?>
            <?php $_smarty_tpl->_assignInScope('but_name', "dispatch[profiles.cp_check_otp]");?>
            <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("cp_otp_get_code"));?>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['otp_type']->value == "register") {?>
        <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("register"));?>
        <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "otp" || $_smarty_tpl->tpl_vars['login_type']->value == "two_factor") {?>
            <?php $_smarty_tpl->_assignInScope('next_dispatch', "profiles.update");?>
            <?php $_smarty_tpl->_assignInScope('but_name', "dispatch[profiles.cp_check_otp]");?>
            <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("cp_otp_get_code"));?>
        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('code_valid', $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['new_send_time']);?>
    <?php if ($_smarty_tpl->tpl_vars['code_valid']->value) {?>
        <?php $_smarty_tpl->_assignInScope('cur_time', time());?>
        <?php if ($_SESSION['cp_otp'][$_smarty_tpl->tpl_vars['otp_type']->value]['time'] && $_smarty_tpl->tpl_vars['cur_time']->value > intval($_SESSION['cp_otp'][$_smarty_tpl->tpl_vars['otp_type']->value]['time'])) {?>
            <?php $_smarty_tpl->_assignInScope('send_in_ses_dif', $_smarty_tpl->tpl_vars['cur_time']->value-$_SESSION['cp_otp'][$_smarty_tpl->tpl_vars['otp_type']->value]['time']);?>
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
    <?php if ($_smarty_tpl->tpl_vars['show_email']->value) {?>
        <?php $_smarty_tpl->_assignInScope('login_email', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['email']->value ?? null)===null||$tmp==='' ? $_REQUEST['email'] ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['demo_username'] ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('otp_type', "login");?>
        <?php $_smarty_tpl->_assignInScope('otp_action', "register");?>
        <div class="ty-control-group cp-otp-auth-field">
            <label for="login_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email"><?php echo $_smarty_tpl->__("email");?>
</label>
            <input type="text" id="login_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_data[email]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['login_email']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input cm-focus" />
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_otp']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/otp_code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('otp_content_id'=>"otp_block_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'return_dispatch'=>$_smarty_tpl->tpl_vars['next_dispatch']->value), 0, false);
?>
    <?php } elseif (!fn_cp_otp_allow_fast_registration()) {?>
        <div class="cp-otp-register-wrap <?php if ($_smarty_tpl->tpl_vars['send_in_ses_dif']->value && $_smarty_tpl->tpl_vars['but_text']->value == $_smarty_tpl->__("cp_otp_get_code")) {?>hidden<?php }?>" id="otp_verification_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "otp") {?>
                <a data-ca-dispatch="dispatch[profiles.cp_check_otp]" data-ca-check-filter=".cp-otp-auth-field" data-ca-otp-action="register" class="cp-otp-register-link cm-submit cm-ajax cm-ajax-full-render" rel="nofollow"><?php echo $_smarty_tpl->__("create_account");?>
</a>
            <?php } else { ?>
                <a href="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" class="cp-otp-register-link" rel="nofollow"><?php echo $_smarty_tpl->__("create_account");?>
</a>
            <?php }?>
        </div>
        <div class="cp__otp-new-send <?php if (!$_smarty_tpl->tpl_vars['send_in_ses_dif']->value) {?>hidden<?php } else { ?>cp-otp__run-separately<?php }?>" id="cp_otp_new_send_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" object_id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_otp_send_again_after");?>
: <span data-cp-total="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code_valid']->value, ENT_QUOTES, 'UTF-8');?>
" class="cp-otp-timer-again"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['timer_str']->value, ENT_QUOTES, 'UTF-8');?>
</span></div>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/otp_fail_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['return_dispatch']->value) {?>
        <?php $_smarty_tpl->_assignInScope('but_name', "dispatch[".((string)$_smarty_tpl->tpl_vars['return_dispatch']->value)."]");?>
        <?php if ($_smarty_tpl->tpl_vars['otp_type']->value == "register" || $_smarty_tpl->tpl_vars['otp_action']->value == "register") {?>
            <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("register"));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['otp_type']->value == "login") {?>
            <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("sign_in"));?>
        <?php }?>
    <?php }?>

    <input type="hidden" name="return_dispatch" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next_dispatch']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="obj_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="otp_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['otp_type']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="show_email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_email']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="need_register" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['need_register']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="otp_action" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['otp_action']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="cp_location" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_location']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="result_ids" value="otp_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "continue_btn", null, null);?>
        <div class="ty-float-left">
            <a href="#" class="cm-dialog-closer ty-btn ty-btn__primary" rel="nofollow"><?php echo $_smarty_tpl->__("continue");?>
</a>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "otp" || $_smarty_tpl->tpl_vars['login_type']->value == "two_factor") {?>
        <div class="buttons-container clearfix <?php if ($_smarty_tpl->tpl_vars['send_in_ses_dif']->value) {?>hidden<?php }?>" id="otp_verification_link2_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-float-right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>"cm-ajax ty-btn__secondary",'but_role'=>"submit"), 0, false);
?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['cp_location']->value == "checkout") {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'continue_btn');?>

            <?php }?>
        </div>
    <?php } else { ?>
        <input type="hidden" name="result_ids" value="cp_auth_form_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:login_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:login_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="buttons-container clearfix">
                <div class="ty-float-right">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[auth.login]",'but_role'=>"submit"), 0, false);
?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['cp_location']->value == "checkout") {?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'continue_btn');?>

                <?php } else { ?>
                    <div class="ty-login__remember-me">
                        <label for="remember_me_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" /><?php echo $_smarty_tpl->__("remember_me");?>
</label>
                    </div>
                <?php }?>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:login_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
<!--otp_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/components/otp_verification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/components/otp_verification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="otp_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_assignInScope('login_type', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['login_type']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['login_type'] ?? null : $tmp) ?? null)===null||$tmp==='' ? "password" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('cp_location', (($tmp = $_smarty_tpl->tpl_vars['cp_location']->value ?? null)===null||$tmp==='' ? $_REQUEST['cp_location'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('otp_action', (($tmp = $_smarty_tpl->tpl_vars['otp_action']->value ?? null)===null||$tmp==='' ? $_REQUEST['otp_action'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('next_dispatch', '');?>
    <?php if ($_smarty_tpl->tpl_vars['otp_type']->value == "login") {?>
        <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("sign_in"));?>
        <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "otp" || $_smarty_tpl->tpl_vars['login_type']->value == "two_factor") {?>
            <?php $_smarty_tpl->_assignInScope('next_dispatch', "profiles.cp_otp_login");?>
            <?php $_smarty_tpl->_assignInScope('but_name', "dispatch[profiles.cp_check_otp]");?>
            <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("cp_otp_get_code"));?>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['otp_type']->value == "register") {?>
        <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("register"));?>
        <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "otp" || $_smarty_tpl->tpl_vars['login_type']->value == "two_factor") {?>
            <?php $_smarty_tpl->_assignInScope('next_dispatch', "profiles.update");?>
            <?php $_smarty_tpl->_assignInScope('but_name', "dispatch[profiles.cp_check_otp]");?>
            <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("cp_otp_get_code"));?>
        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('code_valid', $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['new_send_time']);?>
    <?php if ($_smarty_tpl->tpl_vars['code_valid']->value) {?>
        <?php $_smarty_tpl->_assignInScope('cur_time', time());?>
        <?php if ($_SESSION['cp_otp'][$_smarty_tpl->tpl_vars['otp_type']->value]['time'] && $_smarty_tpl->tpl_vars['cur_time']->value > intval($_SESSION['cp_otp'][$_smarty_tpl->tpl_vars['otp_type']->value]['time'])) {?>
            <?php $_smarty_tpl->_assignInScope('send_in_ses_dif', $_smarty_tpl->tpl_vars['cur_time']->value-$_SESSION['cp_otp'][$_smarty_tpl->tpl_vars['otp_type']->value]['time']);?>
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
    <?php if ($_smarty_tpl->tpl_vars['show_email']->value) {?>
        <?php $_smarty_tpl->_assignInScope('login_email', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['email']->value ?? null)===null||$tmp==='' ? $_REQUEST['email'] ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['demo_username'] ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('otp_type', "login");?>
        <?php $_smarty_tpl->_assignInScope('otp_action', "register");?>
        <div class="ty-control-group cp-otp-auth-field">
            <label for="login_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email"><?php echo $_smarty_tpl->__("email");?>
</label>
            <input type="text" id="login_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_data[email]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['login_email']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input cm-focus" />
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_otp']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/otp_code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('otp_content_id'=>"otp_block_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'return_dispatch'=>$_smarty_tpl->tpl_vars['next_dispatch']->value), 0, true);
?>
    <?php } elseif (!fn_cp_otp_allow_fast_registration()) {?>
        <div class="cp-otp-register-wrap <?php if ($_smarty_tpl->tpl_vars['send_in_ses_dif']->value && $_smarty_tpl->tpl_vars['but_text']->value == $_smarty_tpl->__("cp_otp_get_code")) {?>hidden<?php }?>" id="otp_verification_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "otp") {?>
                <a data-ca-dispatch="dispatch[profiles.cp_check_otp]" data-ca-check-filter=".cp-otp-auth-field" data-ca-otp-action="register" class="cp-otp-register-link cm-submit cm-ajax cm-ajax-full-render" rel="nofollow"><?php echo $_smarty_tpl->__("create_account");?>
</a>
            <?php } else { ?>
                <a href="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" class="cp-otp-register-link" rel="nofollow"><?php echo $_smarty_tpl->__("create_account");?>
</a>
            <?php }?>
        </div>
        <div class="cp__otp-new-send <?php if (!$_smarty_tpl->tpl_vars['send_in_ses_dif']->value) {?>hidden<?php } else { ?>cp-otp__run-separately<?php }?>" id="cp_otp_new_send_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" object_id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_otp_send_again_after");?>
: <span data-cp-total="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code_valid']->value, ENT_QUOTES, 'UTF-8');?>
" class="cp-otp-timer-again"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['timer_str']->value, ENT_QUOTES, 'UTF-8');?>
</span></div>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/otp_fail_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php if ($_smarty_tpl->tpl_vars['return_dispatch']->value) {?>
        <?php $_smarty_tpl->_assignInScope('but_name', "dispatch[".((string)$_smarty_tpl->tpl_vars['return_dispatch']->value)."]");?>
        <?php if ($_smarty_tpl->tpl_vars['otp_type']->value == "register" || $_smarty_tpl->tpl_vars['otp_action']->value == "register") {?>
            <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("register"));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['otp_type']->value == "login") {?>
            <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("sign_in"));?>
        <?php }?>
    <?php }?>

    <input type="hidden" name="return_dispatch" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next_dispatch']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="obj_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="otp_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['otp_type']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="show_email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_email']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="need_register" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['need_register']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="otp_action" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['otp_action']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="cp_location" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_location']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="result_ids" value="otp_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "continue_btn", null, null);?>
        <div class="ty-float-left">
            <a href="#" class="cm-dialog-closer ty-btn ty-btn__primary" rel="nofollow"><?php echo $_smarty_tpl->__("continue");?>
</a>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['login_type']->value == "otp" || $_smarty_tpl->tpl_vars['login_type']->value == "two_factor") {?>
        <div class="buttons-container clearfix <?php if ($_smarty_tpl->tpl_vars['send_in_ses_dif']->value) {?>hidden<?php }?>" id="otp_verification_link2_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-float-right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>"cm-ajax ty-btn__secondary",'but_role'=>"submit"), 0, true);
?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['cp_location']->value == "checkout") {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'continue_btn');?>

            <?php }?>
        </div>
    <?php } else { ?>
        <input type="hidden" name="result_ids" value="cp_auth_form_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:login_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:login_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="buttons-container clearfix">
                <div class="ty-float-right">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[auth.login]",'but_role'=>"submit"), 0, true);
?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['cp_location']->value == "checkout") {?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'continue_btn');?>

                <?php } else { ?>
                    <div class="ty-login__remember-me">
                        <label for="remember_me_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" /><?php echo $_smarty_tpl->__("remember_me");?>
</label>
                    </div>
                <?php }?>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:login_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
<!--otp_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php }
}
}
