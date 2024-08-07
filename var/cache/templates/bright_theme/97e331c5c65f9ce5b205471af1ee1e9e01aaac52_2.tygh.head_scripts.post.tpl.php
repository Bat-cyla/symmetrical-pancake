<?php
/* Smarty version 4.1.1, created on 2024-08-02 10:12:26
  from '/app/www/design/themes/responsive/templates/addons/gdpr/hooks/index/head_scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac86dacf2740_63989814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97e331c5c65f9ce5b205471af1ee1e9e01aaac52' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/gdpr/hooks/index/head_scripts.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac86dacf2740_63989814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['gdpr']['gdpr_cookie_consent'] !== smarty_modifier_enum("Addons\\Gdpr\\CookiesPolicyManager::COOKIE_POLICY_NONE")) {?>
    <?php echo '<script'; ?>
 
        data-no-defer
        type="text/javascript"
        src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) fn_get_rel_dir($_smarty_tpl->tpl_vars['config']->value['dir']['files']), ENT_QUOTES, 'UTF-8');?>
gdpr/klaro/config.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 
        data-no-defer
        data-klaro-config="klaroConfig"
        data-config="klaroConfig"
        type="text/javascript"
        src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/js/addons/gdpr/lib/klaro.js">
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/index/head_scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/hooks/index/head_scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['gdpr']['gdpr_cookie_consent'] !== smarty_modifier_enum("Addons\\Gdpr\\CookiesPolicyManager::COOKIE_POLICY_NONE")) {?>
    <?php echo '<script'; ?>
 
        data-no-defer
        type="text/javascript"
        src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) fn_get_rel_dir($_smarty_tpl->tpl_vars['config']->value['dir']['files']), ENT_QUOTES, 'UTF-8');?>
gdpr/klaro/config.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 
        data-no-defer
        data-klaro-config="klaroConfig"
        data-config="klaroConfig"
        type="text/javascript"
        src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/js/addons/gdpr/lib/klaro.js">
    <?php echo '</script'; ?>
>
<?php }
}
}
}
