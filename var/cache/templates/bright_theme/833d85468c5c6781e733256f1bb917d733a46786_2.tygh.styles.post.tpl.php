<?php
/* Smarty version 4.1.1, created on 2024-08-06 17:25:22
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b2325208cc97_22817252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '833d85468c5c6781e733256f1bb917d733a46786' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/hooks/index/styles.post.tpl',
      1 => 1722954124,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b2325208cc97_22817252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['use_country_prefix'] == "Y") {?>
    <?php echo smarty_function_style(array('src'=>"addons/cp_otp_registration/intlTelInput.min.css"),$_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['login_type'] == "otp" && $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['fast_registration'] == "Y") {?>
<style type="text/css">
    a[href^="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"] {
        display: none !important;
    }
</style>
<?php }?>

<?php echo smarty_function_style(array('src'=>"addons/cp_otp_registration/styles.less"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['use_country_prefix'] == "Y") {?>
    <?php echo smarty_function_style(array('src'=>"addons/cp_otp_registration/intlTelInput.min.css"),$_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['login_type'] == "otp" && $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['fast_registration'] == "Y") {?>
<style type="text/css">
    a[href^="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"] {
        display: none !important;
    }
</style>
<?php }?>

<?php echo smarty_function_style(array('src'=>"addons/cp_otp_registration/styles.less"),$_smarty_tpl);?>

<?php }
}
}
