<?php
/* Smarty version 4.1.1, created on 2024-08-16 10:58:11
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/overrides/views/auth/login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bf06935e89c3_60312022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16eecb0e16d44d49bd66589be3fa0f1611f36f9b' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/overrides/views/auth/login_form.tpl',
      1 => 1723792969,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/cp_otp_registration/components/auth_form.tpl' => 2,
  ),
),false)) {
function content_66bf06935e89c3_60312022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','sign_in'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "main_login" ?? null : $tmp));
if ($_REQUEST['custom_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_REQUEST['custom_id']);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "login", null, null);?>
    <?php $_smarty_tpl->_assignInScope('login_type', (($tmp = $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['login_type'] ?? null)===null||$tmp==='' ? "password" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('auth_field', (($tmp = (($tmp = $_REQUEST['auth_field'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_auth_method'] ?? null : $tmp) ?? null)===null||$tmp==='' ? "phone" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('no_email', false);?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['exclude_email'] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('no_email', true);?>
    <?php }?>

    <form name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax cm-ajax-full-render">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) (($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="custom_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/auth_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('otp_type'=>"login",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
    </form>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {
            $.ceEvent('on', 'ce.formpost_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_form', function(form, clicked_elm) {
                if (clicked_elm.attr('name') == 'dispatch[profiles.cp_check_otp]') {
                    var action = clicked_elm.data('caOtpAction') || '';
                    form.find('input[name="otp_action"]').val(action);
                }
            });
        } (Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['style']->value == "popup") {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'login');?>

<?php } else { ?>
    <div class="ty-login">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'login');?>

    </div>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("sign_in");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/app/www/design/themes/responsive/templates/addons/cp_otp_registration/overrides/views/auth/login_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/app/www/design/themes/responsive/templates/addons/cp_otp_registration/overrides/views/auth/login_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "main_login" ?? null : $tmp));
if ($_REQUEST['custom_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_REQUEST['custom_id']);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "login", null, null);?>
    <?php $_smarty_tpl->_assignInScope('login_type', (($tmp = $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['login_type'] ?? null)===null||$tmp==='' ? "password" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('auth_field', (($tmp = (($tmp = $_REQUEST['auth_field'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_auth_method'] ?? null : $tmp) ?? null)===null||$tmp==='' ? "phone" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('no_email', false);?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['exclude_email'] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('no_email', true);?>
    <?php }?>

    <form name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax cm-ajax-full-render">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) (($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="custom_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_otp_registration/components/auth_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('otp_type'=>"login",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
    </form>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {
            $.ceEvent('on', 'ce.formpost_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_form', function(form, clicked_elm) {
                if (clicked_elm.attr('name') == 'dispatch[profiles.cp_check_otp]') {
                    var action = clicked_elm.data('caOtpAction') || '';
                    form.find('input[name="otp_action"]').val(action);
                }
            });
        } (Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['style']->value == "popup") {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'login');?>

<?php } else { ?>
    <div class="ty-login">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'login');?>

    </div>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("sign_in");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
}
