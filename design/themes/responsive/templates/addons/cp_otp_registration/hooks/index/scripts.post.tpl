<script type="text/javascript">
    (function (_, $) {
        window.localStorage.setItem('availableCountriesHash', _.hash_of_available_countries);
        window.localStorage.setItem('phoneMasksHash', _.hash_of_phone_masks);
        var phone_mask_codes = {$phone_mask_codes|json_encode nofilter};
        phoneMasks = Object.keys(phone_mask_codes).map(function (key) {
            return phone_mask_codes[key];
        });
        window.localStorage.setItem('phoneMasks', JSON.stringify(phoneMasks));
        $(document).on('focus blur', '.ty-input-phone', function(){
            $(this).val($(this).val().replace(/[^0-9,+]/g,""));
        });
    }(Tygh, Tygh.$));
</script>

{if $runtime.controller == "profiles"}
    <script type="text/javascript">
        (function (_, $) {
            $.ceEvent('on', 'ce.commoninit', function(context) {
                {if $addons.cp_otp_registration.auth_by_email =="make_required"}
                    $('label[for="email"]').addClass('cm-required');
                {/if}
            });
        }(Tygh, Tygh.$));
    </script>
{/if}


{if $runtime.controller == "checkout" && $runtime.mode == "checkout"}
    {$c_url = $config.current_url|escape:url}

    <script type="text/javascript">
        (function (_, $) {

            _.tr('cp_otp_phone_verification', '{__("cp_otp_phone_verification")|escape:"javascript"}');
            $.ceEvent('on', 'ce.commoninit', function(context) {

                {if $addons.cp_otp_registration.auth_by_email = "make_required"}
                    $('label[for="litecheckout_email"]').addClass('cm-required');
                {/if}
                $('label[for="litecheckout_phone"]').removeClass('cm-required');
                _.user_id = '{$cart.user_data.user_id}';

                _.phone = '{$cart.user_data.phone}';

            });
            
            $.ceEvent('on', 'ce.ajaxdone', function(context, inline_scripts, params, data) {

                var title = '{__("cp_otp_already_exists_title")}';
                var block_id = 'litecheckout_login_block';
              
                if (!$('#' + block_id).length || !data.cp_show_login
                    || typeof data.notifications == 'undefined' // definition of lite checkout submit
                ) {
                    return false;
                }
                                
                if (data.cp_guest_order) {
                    var title = '{__("cp_otp_phone_verification")}';
                    var target_url = fn_url('checkout.cp_phone_verification?phone=' + data.phone + '&cp_guest_order=1&return_url={$c_url}');
                } else {
                    var target_url = fn_url('auth.login_form?is_popup=1&return_url={$c_url}');
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
    </script>
{/if}

{script src="js/addons/cp_otp_registration/func.js"}
