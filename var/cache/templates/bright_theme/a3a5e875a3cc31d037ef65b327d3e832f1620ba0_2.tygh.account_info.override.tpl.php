<?php
/* Smarty version 4.1.1, created on 2024-08-06 17:25:31
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/hooks/profiles/account_info.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b2325b17f442_93521261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3a5e875a3cc31d037ef65b327d3e832f1620ba0' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/hooks/profiles/account_info.override.tpl',
      1 => 1722954124,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/cp_otp_registration/components/phone.tpl' => 2,
  ),
),false)) {
function content_66b2325b17f442_93521261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('password','confirm_password','email','password','confirm_password','email'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('login_type', (($tmp = $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['login_type'] ?? null)===null||$tmp==='' ? "password" ?? null : $tmp));?>

<?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['login_type']->value != "otp") {?>
    <div class="ty-control-group">
        <label for="password1" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("password");?>
</label>
        <input type="password" id="password1" name="user_data[password1]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>

    <div class="ty-control-group">
        <label for="password2" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("confirm_password");?>
</label>
        <input type="password" id="password2" name="user_data[password2]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>
<?php }?>

<?php $_smarty_tpl->_assignInScope('email_required', false);
if ($_smarty_tpl->tpl_vars['addons']->value['step_by_step_checkout']['status'] == "A" && $_smarty_tpl->tpl_vars['runtime']->value['controller'] == "checkout" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
    <?php $_smarty_tpl->_assignInScope('email_required', true);
}
if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['required_email'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('email_required', true);
}?>

<div class="ty-control-group">
    <label for="email" class="ty-control-group__title cm-email cm-trim <?php if ($_smarty_tpl->tpl_vars['email_required']->value) {?>cm-required<?php }?>"><?php echo $_smarty_tpl->__("email");?>
</label>
    <input type="text" id="email" x-autocompletetype="email" name="user_data[email]" size="32" maxlength="128" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-focus" />
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/hooks/profiles/account_info.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/hooks/profiles/account_info.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('login_type', (($tmp = $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['login_type'] ?? null)===null||$tmp==='' ? "password" ?? null : $tmp));?>

<?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['login_type']->value != "otp") {?>
    <div class="ty-control-group">
        <label for="password1" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("password");?>
</label>
        <input type="password" id="password1" name="user_data[password1]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>

    <div class="ty-control-group">
        <label for="password2" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("confirm_password");?>
</label>
        <input type="password" id="password2" name="user_data[password2]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>
<?php }?>

<?php $_smarty_tpl->_assignInScope('email_required', false);
if ($_smarty_tpl->tpl_vars['addons']->value['step_by_step_checkout']['status'] == "A" && $_smarty_tpl->tpl_vars['runtime']->value['controller'] == "checkout" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
    <?php $_smarty_tpl->_assignInScope('email_required', true);
}
if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['required_email'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('email_required', true);
}?>

<div class="ty-control-group">
    <label for="email" class="ty-control-group__title cm-email cm-trim <?php if ($_smarty_tpl->tpl_vars['email_required']->value) {?>cm-required<?php }?>"><?php echo $_smarty_tpl->__("email");?>
</label>
    <input type="text" id="email" x-autocompletetype="email" name="user_data[email]" size="32" maxlength="128" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-focus" />
</div>
<?php }
}
}