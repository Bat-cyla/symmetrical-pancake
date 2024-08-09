<script type="text/javascript">
    (function(_, $) {
        var fast_reg_selector = 'select[id*="cp_otp_registration_login_type"]';
        var excl_email_selector = 'input[id*="cp_otp_registration_exclude_email"]';
        var phone_optional= 'select[id*="cp_otp_registration_auth_by_email"]';


        $.ceEvent('on', 'ce.commoninit', function(context) {
            context.find(fast_reg_selector).each(function (index, item) {
                fn_cp_otp_check_fast_reg_setting($(item));
            });
            context.find(excl_email_selector).each(function (index, item) {
                fn_cp_otp_check_excl_email_setting($(item));
            });
            context.find(phone_optional).each(function(index, item){
                fn_cp_otp_check_phone_optional_setting($(item));
            });
        });

        $(_.doc).on('change', fast_reg_selector, function (e) {
            fn_cp_otp_check_fast_reg_setting($(this));
        });

        $(_.doc).on('click', excl_email_selector, function (e) {
            fn_cp_otp_check_excl_email_setting($(this));
        });
        $(_.doc).on('change', phone_optional, function (e){
            fn_cp_otp_check_phone_optional_setting($(this));
        })

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

        function fn_cp_otp_check_phone_optional_setting(elm){
            var child = $('div.control-group[id*="cp_otp_registration_phone_optional"]');
            var checkbox = $('input[id*="addon_option_cp_otp_registration_phone_optional"]');
            if(elm.val()=='make_required'){
                child.show();
            }else{
                checkbox.prop('checked', false);
                child.hide();
            }
        }
    })(Tygh, Tygh.$);
</script>
