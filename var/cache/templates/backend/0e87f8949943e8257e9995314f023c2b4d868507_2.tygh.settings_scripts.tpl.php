<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:21:21
  from '/app/www/design/backend/templates/addons/cp_otp_registration/settings/settings_scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac7ae1f20909_21389287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e87f8949943e8257e9995314f023c2b4d868507' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_otp_registration/settings/settings_scripts.tpl',
      1 => 1722579549,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac7ae1f20909_21389287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        var fast_reg_selector = 'select[id*="cp_otp_registration_login_type"]';
        var excl_email_selector = 'input[id*="cp_otp_registration_exclude_email"]';
        var uniform_input = 'input[id*="addon_option_cp_otp_registration_fast_registration"]';
        
        $.ceEvent('on', 'ce.commoninit', function(context) {
            context.find(uniform_input).each(function (index, item) {
                $(item).change();
            });
            context.find(fast_reg_selector).each(function (index, item) {
                fn_cp_otp_check_fast_reg_setting($(item));
            });
            context.find(excl_email_selector).each(function (index, item) {
                fn_cp_otp_check_excl_email_setting($(item));
            });
        });

        $(_.doc).on('change', fast_reg_selector, function (e) {
            fn_cp_otp_check_fast_reg_setting($(this));
        });

        $(_.doc).on('click', excl_email_selector, function (e) {
            fn_cp_otp_check_excl_email_setting($(this));
        });
        $(_.doc).on('change', uniform_input, function (e) {
            var is_checked = $(this).prop('checked');
            if (is_checked) {
                $('div[id^="container_addon_option_cp_otp_registration_required_email_"]').hide();
            } else {
                $('div[id^="container_addon_option_cp_otp_registration_required_email_"]').show();
            }
        });

        function fn_cp_otp_check_excl_email_setting(elm) {
            var disable = elm.prop('checked');
            var select_elm = $('select[id*="cp_otp_registration_default_auth_method"]');
            if (select_elm.length) {
                select_elm.children('option').each(function() {
                    if ($(this).val() == 'email') {
                        $(this).prop('disabled', disable);
                        if ($(this).prop('selected') && disable) {
                            select_elm.children('option:first').prop('selected', true);
                        }
                    }
                });
            }
        }

        function fn_cp_otp_check_fast_reg_setting(elm) {
            var child = $('div.control-group[id*="cp_otp_registration_fast_registration"]');
            if (elm.val() == 'otp') {
                child.show();
            } else {
                child.hide();
            }
        }
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
