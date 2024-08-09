<?php
/* Smarty version 4.1.1, created on 2024-08-08 11:26:51
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4814b3f0d28_55480670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbe7d08001134bf616609fa33b7bc52af22aeeaf' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/hooks/index/scripts.post.tpl',
      1 => 1723105479,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4814b3f0d28_55480670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cp_otp_already_exists_title','cp_otp_phone_verification','cp_otp_already_exists_title','cp_otp_phone_verification'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
 type="text/javascript">
    (function (_, $) {
        window.localStorage.setItem('availableCountriesHash', _.hash_of_available_countries);
        window.localStorage.setItem('phoneMasksHash', _.hash_of_phone_masks);
        var phone_mask_codes = <?php echo json_encode($_smarty_tpl->tpl_vars['phone_mask_codes']->value);?>
;
        phoneMasks = Object.keys(phone_mask_codes).map(function (key) {
            return phone_mask_codes[key];
        });
        window.localStorage.setItem('phoneMasks', JSON.stringify(phoneMasks));
        $(document).on('focus blur', '.cp-phone', function(){
            $(this).val($(this).val().replace(/[^0-9]/g,""));
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['use_country_prefix'] == "Y") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/cp_otp_registration/intlTelInput-jquery.min.js"),$_smarty_tpl);?>

    <?php $_smarty_tpl->_assignInScope('cp_countries_list', fn_cp_otp_get_avail_countries(''));?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function (_, $) {
            $.extend(_, {
                cp_otp_registration: {
                    'default_country': '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_country'], ENT_QUOTES, 'UTF-8');?>
',
                    <?php if ($_smarty_tpl->tpl_vars['cp_countries_list']->value) {?>'countries_list': <?php echo json_encode($_smarty_tpl->tpl_vars['cp_countries_list']->value);
}?>
                }
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "checkout" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
    <?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function (_, $) {
            $.ceEvent('on', 'ce.commoninit', function(context) {
                <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['required_email'] != "Y") {?>
                    $('label[for="litecheckout_email"]').removeClass('cm-required');
                <?php }?>
                $('label[for="litecheckout_phone"]').addClass('cm-required');
            });
            
            $.ceEvent('on', 'ce.ajaxdone', function(context, inline_scripts, params, data) { 
                var title = '<?php echo $_smarty_tpl->__("cp_otp_already_exists_title");?>
';
                var block_id = 'litecheckout_login_block';
              
                if (!$('#' + block_id).length || !data.cp_show_login
                    || typeof data.notifications == 'undefined' // definition of lite checkout submit
                ) {
                    return false;
                }
                                
                if (data.cp_guest_order) {
                    var title = '<?php echo $_smarty_tpl->__("cp_otp_phone_verification");?>
';
                    var target_url = fn_url('checkout.cp_phone_verification?phone=' + data.phone + '&cp_guest_order=1&return_url=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'UTF-8');?>
');
                } else {
                    var target_url = fn_url('auth.login_form?is_popup=1&return_url=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'UTF-8');?>
');
                }

                if (typeof data.phone != 'undefined') {
                    target_url += '&auth_field=phone&phone=' + data.phone;
                } else if (typeof data.email != 'undefined') {
                    target_url += '&auth_field=email&email=' + data.email;
                }
                
                $('#' + block_id).empty();
                $('#' + block_id).ceDialog('destroy');
                $('#' + block_id).ceDialog('open', {
                    href: target_url,
                    width: 'auto',
                    height: 'auto',
                    dialogClass: 'dialog-auto-sized',
                    title: title
                });
                
                $('.cm-dialog-opener').each(function() {
                    if ($(this).data('caTargetId') == block_id) {
                        $(this).prop('title', title);
                    }
                });
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/addons/cp_otp_registration/func.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
 type="text/javascript">
    (function (_, $) {
        window.localStorage.setItem('availableCountriesHash', _.hash_of_available_countries);
        window.localStorage.setItem('phoneMasksHash', _.hash_of_phone_masks);
        var phone_mask_codes = <?php echo json_encode($_smarty_tpl->tpl_vars['phone_mask_codes']->value);?>
;
        phoneMasks = Object.keys(phone_mask_codes).map(function (key) {
            return phone_mask_codes[key];
        });
        window.localStorage.setItem('phoneMasks', JSON.stringify(phoneMasks));
        $(document).on('focus blur', '.cp-phone', function(){
            $(this).val($(this).val().replace(/[^0-9]/g,""));
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['use_country_prefix'] == "Y") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/cp_otp_registration/intlTelInput-jquery.min.js"),$_smarty_tpl);?>

    <?php $_smarty_tpl->_assignInScope('cp_countries_list', fn_cp_otp_get_avail_countries(''));?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function (_, $) {
            $.extend(_, {
                cp_otp_registration: {
                    'default_country': '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['default_country'], ENT_QUOTES, 'UTF-8');?>
',
                    <?php if ($_smarty_tpl->tpl_vars['cp_countries_list']->value) {?>'countries_list': <?php echo json_encode($_smarty_tpl->tpl_vars['cp_countries_list']->value);
}?>
                }
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "checkout" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
    <?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function (_, $) {
            $.ceEvent('on', 'ce.commoninit', function(context) {
                <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['required_email'] != "Y") {?>
                    $('label[for="litecheckout_email"]').removeClass('cm-required');
                <?php }?>
                $('label[for="litecheckout_phone"]').addClass('cm-required');
            });
            
            $.ceEvent('on', 'ce.ajaxdone', function(context, inline_scripts, params, data) { 
                var title = '<?php echo $_smarty_tpl->__("cp_otp_already_exists_title");?>
';
                var block_id = 'litecheckout_login_block';
              
                if (!$('#' + block_id).length || !data.cp_show_login
                    || typeof data.notifications == 'undefined' // definition of lite checkout submit
                ) {
                    return false;
                }
                                
                if (data.cp_guest_order) {
                    var title = '<?php echo $_smarty_tpl->__("cp_otp_phone_verification");?>
';
                    var target_url = fn_url('checkout.cp_phone_verification?phone=' + data.phone + '&cp_guest_order=1&return_url=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'UTF-8');?>
');
                } else {
                    var target_url = fn_url('auth.login_form?is_popup=1&return_url=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'UTF-8');?>
');
                }

                if (typeof data.phone != 'undefined') {
                    target_url += '&auth_field=phone&phone=' + data.phone;
                } else if (typeof data.email != 'undefined') {
                    target_url += '&auth_field=email&email=' + data.email;
                }
                
                $('#' + block_id).empty();
                $('#' + block_id).ceDialog('destroy');
                $('#' + block_id).ceDialog('open', {
                    href: target_url,
                    width: 'auto',
                    height: 'auto',
                    dialogClass: 'dialog-auto-sized',
                    title: title
                });
                
                $('.cm-dialog-opener').each(function() {
                    if ($(this).data('caTargetId') == block_id) {
                        $(this).prop('title', title);
                    }
                });
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/addons/cp_otp_registration/func.js"),$_smarty_tpl);?>

<?php }
}
}
