<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:16
  from '/app/www/design/themes/responsive/templates/addons/recaptcha/overrides/common/image_verification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065c43bad8_74809503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da4837b347aa3b3fec4cf33c9d6e49daefac7a54' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/recaptcha/overrides/common/image_verification.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec065c43bad8_74809503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('image_verification_label','image_verification_label','image_verification_label','image_verification_label','image_verification_label','image_verification_label'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (fn_needs_image_verification($_smarty_tpl->tpl_vars['option']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('id', uniqid("recaptcha_"));?>
    <?php if (get_class($_smarty_tpl->tpl_vars['app']->value['antibot']->getDriver()) == "Tygh\Addons\Recaptcha\RecaptchaDriver") {?>
        <?php $_smarty_tpl->_assignInScope('recaptcha_type', fn_recaptcha_get_recaptcha_type_by_scenario($_smarty_tpl->tpl_vars['option']->value));?>
        <?php if ($_smarty_tpl->tpl_vars['recaptcha_type']->value == smarty_modifier_enum("Addons\\Recaptcha\\RecaptchaTypes::RECAPTCHA_TYPE_V2")) {?>
            <div class="captcha ty-control-group">
                <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-recaptcha ty-captcha__label"><?php echo $_smarty_tpl->__("image_verification_label");?>
</label>
                <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-recaptcha"></div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['recaptcha_type']->value == smarty_modifier_enum("Addons\\Recaptcha\\RecaptchaTypes::RECAPTCHA_TYPE_V3")) {?>
            <input type="hidden" data-recaptcha-v3-action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-recaptcha-v3" name=<?php echo htmlspecialchars((string) constant("\Tygh\Addons\Recaptcha\RecaptchaDriver::RECAPTCHA_V3_TOKEN_PARAM_NAME"), ENT_QUOTES, 'UTF-8');?>
 id="g_recaptcha_v3_token_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <?php } else { ?>
        <div class="native-captcha<?php if (!$_smarty_tpl->tpl_vars['full_width']->value) {?> native-captcha--short<?php }?>">
            <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required ty-captcha__label"><?php echo $_smarty_tpl->__("image_verification_label");?>
</label>
            <div class="native-captcha__image-container">
                <img src="<?php echo htmlspecialchars((string) $_SESSION['native_captcha']['image'], ENT_QUOTES, 'UTF-8');?>
" class="native-captcha__image"/>
            </div>
            <input
                type="text"
                id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="input-text native-captcha__answer form-control"
                name="native_captcha_response"
                autocomplete="off"
                placeholder="<?php echo $_smarty_tpl->__("image_verification_label");?>
"
            >
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/app/www/design/themes/responsive/templates/addons/recaptcha/overrides/common/image_verification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/app/www/design/themes/responsive/templates/addons/recaptcha/overrides/common/image_verification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (fn_needs_image_verification($_smarty_tpl->tpl_vars['option']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('id', uniqid("recaptcha_"));?>
    <?php if (get_class($_smarty_tpl->tpl_vars['app']->value['antibot']->getDriver()) == "Tygh\Addons\Recaptcha\RecaptchaDriver") {?>
        <?php $_smarty_tpl->_assignInScope('recaptcha_type', fn_recaptcha_get_recaptcha_type_by_scenario($_smarty_tpl->tpl_vars['option']->value));?>
        <?php if ($_smarty_tpl->tpl_vars['recaptcha_type']->value == smarty_modifier_enum("Addons\\Recaptcha\\RecaptchaTypes::RECAPTCHA_TYPE_V2")) {?>
            <div class="captcha ty-control-group">
                <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-recaptcha ty-captcha__label"><?php echo $_smarty_tpl->__("image_verification_label");?>
</label>
                <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-recaptcha"></div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['recaptcha_type']->value == smarty_modifier_enum("Addons\\Recaptcha\\RecaptchaTypes::RECAPTCHA_TYPE_V3")) {?>
            <input type="hidden" data-recaptcha-v3-action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-recaptcha-v3" name=<?php echo htmlspecialchars((string) constant("\Tygh\Addons\Recaptcha\RecaptchaDriver::RECAPTCHA_V3_TOKEN_PARAM_NAME"), ENT_QUOTES, 'UTF-8');?>
 id="g_recaptcha_v3_token_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <?php } else { ?>
        <div class="native-captcha<?php if (!$_smarty_tpl->tpl_vars['full_width']->value) {?> native-captcha--short<?php }?>">
            <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required ty-captcha__label"><?php echo $_smarty_tpl->__("image_verification_label");?>
</label>
            <div class="native-captcha__image-container">
                <img src="<?php echo htmlspecialchars((string) $_SESSION['native_captcha']['image'], ENT_QUOTES, 'UTF-8');?>
" class="native-captcha__image"/>
            </div>
            <input
                type="text"
                id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="input-text native-captcha__answer form-control"
                name="native_captcha_response"
                autocomplete="off"
                placeholder="<?php echo $_smarty_tpl->__("image_verification_label");?>
"
            >
        </div>
    <?php }
}
}
}
}
