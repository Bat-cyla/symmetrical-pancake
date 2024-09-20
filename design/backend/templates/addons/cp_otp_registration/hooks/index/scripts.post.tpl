{if $runtime.controller == "profiles"}
    {$c_url = $config.current_url|escape:url}
    <script type="text/javascript">
        (function (_, $) {
            $.ceEvent('on', 'ce.commoninit', function(context) {
                {if $addons.cp_otp_registration.auth_by_email =="make_required"}
                $('label[for="email"]').addClass('cm-required');
                {/if}
                {if $addons.cp_otp_registration.phone_optional =="Y"}
                $('label[for="phone"]').removeClass('cm-required');
                {/if}
            });
        }(Tygh, Tygh.$));
    </script>
{/if}

