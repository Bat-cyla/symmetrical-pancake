(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        $('.cp-otp-timer').each(function () {
            if ($(this).data('caTimerActive') == true) {
                return;
            }
            $(this).data('caTimerActive', true);
            var start_time = $(this).html().split(':');
            var seconds = 0;
            if (typeof start_time[0] != 'undefined') {
                seconds += Number(start_time[0]) * 60;
            }
            if (typeof start_time[1] != 'undefined') {
                seconds += Number(start_time[1]);
            }
            var timer = $(this);
            var parent = $(this).closest('.cp-otp-timer-wrap');
            
            var countdown = setInterval(function() {
                var current = cpConvertSecondsToTime(seconds);
                timer.html(current);
                if (seconds <= 0) {
                    clearInterval(countdown);

                    cpShowNewCodeBtn(parent);
                    cpClearCodeFields($(this));
                }
                seconds--;
            }, 1000);
        });

        $.ceEvent('on', 'ce.formpost_litecheckout_payments_form', function(form,elm) {
            if (!_.user_id)
            {
            let phone = $('#litecheckout_phone').val()
            let main_container = form[0];
            $('#phone_verification_').remove();
            let container = $('<div id="phone_verification"></div>').appendTo(main_container);
            $(container).ceDialog('open', {
                'href': fn_url('checkout.cp_phone_verification?phone=' + phone),
                'title': _.tr('cp_otp_phone_verification'),
                'width': 400,
                'height': 'auto',
                onClose: function () {
                    fn_cp_otp_registration_close_popup();
                }
            });
            return false
        }
        });

        if (typeof _.cp_otp_registration != 'undefined') {
            var countries = (typeof _.cp_otp_registration.countries_list != 'undefined') ? _.cp_otp_registration.countries_list : [];
            var defaultCountry = (typeof _.cp_otp_registration.default_country != 'undefined') ? _.cp_otp_registration.default_country : '';
            setTimeout(function() {
                $('.cp-phone').intlTelInput({
                    nationalMode: false,
                    autoHideDialCode: false,
                    onlyCountries: countries,
                    initialCountry: defaultCountry
                });
            }, 200);
        }
    });

    $.ceEvent('on', 'ce.ajaxdone', function(context, scripts, params, data) {

        if (typeof data.cp_otp_fail != "undefined"
            && typeof params.form != "undefined"
        ) {
            if (data.cp_otp_fail == 'time' || data.cp_otp_fail == 'attempts') {
                cpShowNewCodeBtn(params.form.find('.cp-otp-timer-wrap'));
            }
            cpClearCodeFields(params.form);
            params.form.find('[type="submit"]').data('clicked', false); // fix for form btn
        }
        setTimeout(function(){
            $('.cp-phone').trigger('click');
            if (data.cp_show_code_popup) {
                var pop_link = $('#otp_verification_link_');
                if (pop_link && pop_link.length > 0) {
                    pop_link.click();
                }
            }
        }, 200);
    });


    // change popup link
    $(_.doc).on('blur keydown', '.cp-phone', function(e) {

        var phone = $(this).val().replace(/[^0-9,+]/gim, '');

        console.log(phone)
        var verificationBlock = $(this).data('caVerification');
        if (typeof verificationBlock != 'undefined' && $('#' + verificationBlock).length) {
            var link = $('#' + verificationBlock).find('.cp-verification-link');
            if (typeof link == 'undefined') {
                return;
            }
            var verPhone = $('#' + verificationBlock).find('.cp-phone-confirmed');
            if (verPhone && verPhone.length > 0 && verPhone.data('caPhone')) {
                var ca_phone = verPhone.data('caPhone').toString().replace(/[^0-9,+]/gim, '');
            } else {
                var ca_phone = '';
            }
            var ca_phone="+" + ca_phone

            //console.log(phone)
            //console.log(ca_phone)
            if (ca_phone != phone && link.is(':hidden')) {
                verPhone.hide();
                link.show();
            } else if (phone != '' && ca_phone == phone && link.not(':hidden')) {
                verPhone.show();
                link.hide();
            }
            if (phone != '') {
                var linkParams = link.attr('href').split('&');
                var newLink = '';
                $.each(linkParams, function(index, value) {
                    if (value.indexOf('phone=') != 0) {
                        newLink += (index != 0) ? '&' : '';
                        newLink += value;
                    }
                });
                newLink =  $.attachToUrl(newLink, 'phone=' + phone);
                link.attr('href', newLink);
            }
        }
    });


    $(_.doc).on('click', '.cp-get-auth-field', function(e) {
        var url = $(this).attr('href');
        if (typeof url != 'undefined') {
            var data = {
                result_ids: $(this).data('caTargetId')
            }
            if ($(this).data('caInputPhone')) {
                data.phone = $('#' + $(this).data('caInputPhone')).val();
            } else if ($(this).data('caInputEmail')) {
                data.email = $('#' + $(this).data('caInputEmail')).val();
            }
            $.ceAjax('request', url, {
                method: 'post',
                caching: false,
                hidden: false,
                data: data
            });
        }
    });

    $(_.doc).on('input', '#cp_otp_code', function(e) {
        var value = $(this).val();
        var last_char = $('#cp_otp_code_last_num').val();
        var total_chars = $(this).data('caCount');
        if (last_char && total_chars > 0 && value.replace(/ /g,'').length == total_chars) {
            var btn = $(this).closest('form').find('button[type="submit"]');
            if (btn.length) {
                btn.click();
            }
        }
    });

    $.ceEvent('on', 'ce.formajaxpost_phone_verification_form', function(data, params, response_text) {
        if (typeof data.cp_otp_fail == 'undefined' || data.cp_otp_fail == '') {
            var container = params.form.closest('div.ui-dialog-content');
            if (container.length) {
                container.ceDialog('close');
                container.find('.object-container').remove();
                $.popupStack.remove(container.prop('id'));
            }
        }
    });

    $.ceEvent('on', 'ce.dialogshow', function ($context) {
        if ($('.cp-auth-field-wrap', $context).length && $('.cm-focus', $context).length) {
            $('.cm-focus:visible', $context).focus().click();
            
            //if ($('.iti__flag-container', $context).length && $context.parent('.ui-dialog').length) {
                $context.parent('.ui-dialog').addClass('cp-otp-show-overflow');
            //}
        }
    });
    $.ceEvent('on', 'ce.ajaxdone', function (elms, inline_scripts, params, data) {
        if (data.cp_otp_code_sended && data.obj_id != 'undefined') {
            var btn_elm = $('#otp_verification_link_' + data.obj_id);
            var btn_elm2 = $('#otp_verification_link2_' + data.obj_id);
            if (btn_elm && btn_elm.length > 0) {
                var obj_id = btn_elm.attr('object_id');
                var again_timer = $('#cp_otp_new_send_' + obj_id + ' .cp-otp-timer-again');
                if (again_timer && again_timer.length > 0) {
                    btn_elm.hide();
                    $('#cp_otp_new_send_' + obj_id).show();
                    fn_cp_otp_run_again_timer(again_timer, btn_elm, btn_elm2,obj_id);
                }
            }
        }
    });
    $('.cp-otp__run-separately').each(function () {
        var obj_id = $(this).attr('object_id');
        var again_timer = $('.cp-otp-timer-again', $(this));
        var btn_elm = $('#otp_verification_link_' + obj_id);
        var btn_elm2 = $('#otp_verification_link2_' + obj_id);
        if (again_timer && again_timer.length > 0) {
            fn_cp_otp_run_again_timer(again_timer, btn_elm, btn_elm2, obj_id);
        }
        
    });

    function ajaxGetModal(data)
    {
        $.ceAjax('request', fn_url('checkout.cp_phone_verification'), {
            method: 'get',
            caching: false,
            hidden: true,
            data: {'phone': data},
            force_exec: true,
            callback: function() {
                let main_container = $("#litecheckout_payments_form")[0];
                $('#phone_verification_').remove();
                let container = $('<div id="phone_verification"></div>').appendTo(main_container);
                $(container).ceDialog('open', {
                    'href': fn_url('checkout.cp_phone_verification'),
                    'title': _.tr('cp_otp_phone_verification'),
                    'width': 400,
                    'height': 'auto',
                    onClose: function () {
                        fn_cp_otp_registration_close_popup();
                    }
                });
            }
        });

    }
    function fn_cp_otp_registration_close_popup() {
        $('#phone_verification_').remove()
    }
})(Tygh, Tygh.$);





function cpConvertSecondsToTime(num) {
    var mins = Math.floor(num / 60);
    var secs = num % 60;
    var timerOutput = (mins < 10 ? "0" : "") + mins + ":" + (secs < 10 ? "0" : "") + secs;
    return timerOutput;
}

function cpValidatePhone(evt, area) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    if (area == 'C') {
        var regex = /[-\[\]\(\)0-9]/;
    } else {
        var regex = /[+-\[\]\(\)0-9]/;
    }
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}


function cpChangePhone(val, key) {
    var cpReference = "+", prevVal = '';

    if (val != undefined) {
        var ind = val.indexOf(cpReference);

        if (ind !== 0) {
            key.prop("value", prevVal || cpReference);
        }
    }
}

function cpInput() {
    if ($(this).hasClass('cm-focus')) {
        $(this).get(0).selectionStart = $(this).val().length;
    }

    $(this).on("input", function () {
        var val = $(this).prop("value");
        cpChangePhone(val, $(this));
    });
}

function cpShowNewCodeBtn(parent) {
    var timerInfo = parent.find('.cp-otp-timer-info');
    var newCodeBtn = parent.find('.cp-new-code-btn');
    if (timerInfo.length && newCodeBtn.length) {
        timerInfo.hide();
        newCodeBtn.show();
    }
}

function cpClearCodeFields(parent) {
    var code_items = parent.find('.cp-otp-code-item');
    if (code_items.length) {
        code_items.val('');
        code_items.first().focus();
    }
}

function fn_cp_otp_run_again_timer (elm, btn, btn_2, obj_id) {
    
    if (elm.data('caTimerActive') == true) {
        return;
    }
    elm.data('caTimerActive', true);
    var setting_time = elm.html();
    var start_time = elm.html().split(':');
    var seconds = 0;
    if (typeof start_time[0] != 'undefined') {
        seconds += Number(start_time[0]) * 60;
    }
    if (typeof start_time[1] != 'undefined') {
        seconds += Number(start_time[1]);
    }
    var timer = elm;
    var parent = elm.closest('.cp-otp-timer-wrap');
    var total_time = elm.attr('data-cp-total');
    var countdown = setInterval(function() {
        var current = cpConvertSecondsToTime(seconds);
        timer.html(current);
        if (seconds <= 0) {
            clearInterval(countdown);
            $('#cp_otp_new_send_' + obj_id).hide();
            if (btn && btn.length > 0) {
                btn.show();
                if (btn.hasClass('cp-otp__hard-hidden')) {
                    btn.removeClass('cp-otp__hard-hidden');
                    btn.css('display','inline-block');
                }
            }
            if (btn_2 && btn_2.length > 0) {
                btn_2.show();
                if (btn_2.hasClass('cp-otp__hard-hidden')) {
                    btn_2.removeClass('cp-otp__hard-hidden');
                    btn_2.css('display','inline-block');
                }
            }
            var popup_h = $('.cp-otp-show-overflow .object-container');
            if (popup_h && popup_h.length > 0) {
                popup_h.css('min-height', '221px');
            }
            elm.html(total_time+':00');
            elm.data('caTimerActive', false);
        }
        seconds--;
    }, 1000);
}
