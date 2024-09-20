<div class="cp-phone-verified-wrap" id="phone_verification_info_{$obj_id}">
    {if !$inp_name}
        {$inp_name="user_data"}
    {/if}

    {$phone_appearance_setting=$settings.Appearance.phone_validation_mode}
    {$phone_required = ($addons.cp_otp_registration.phone_optional === "N")}
    {if $phone_appearance_setting==='any_digits' || $phone_appearance_setting === 'any_symbols'}
        {$placeholder = $placeholder|default:$addons.cp_otp_registration.no_mask_placeholder}
    {elseif $phone_appearance_setting==="phone_number_with_country_selection"}
        {if $addons.cp_otp_registration.use_country_prefix == "Y"}
            {if $addons.cp_otp_registration.default_country}
                {$countries = 1|fn_get_simple_phone_country_codes}
                {foreach from=$countries item=country}
                    {if $country.code===$addons.cp_otp_registration.default_country}
                        {$country_code="+`$country.phone_code`"}
                        {$cntr=$country}
                    {/if}
                {/foreach}
            {/if}
            {$cp_cntr_code=true}
        {else}
            {$cp_cntr_code=false}
        {/if}
    {/if}
    {$phone = ""}
    {if $user_data.phone}
        {$phone = $user_data.phone}
        {if $user_data.cp_phone_verified == "Y"}
            {$phone_verified = true}
        {/if}
    {/if}
    {if !$phone_verified && $smarty.session.cp_otp.register}
        {$otp_data = $smarty.session.cp_otp.register}
        {$phone = $otp_data.to}
        {$phone_verified = $otp_data.verified}
    {/if}
    {$attrs['data-ca-verification']="phone_verification_info_{$obj_id}"}

        <div class="ty-control-group ty-shipping-phone cm-phone">

            {include file="components/phone.tpl"
            id="phone"
            required="{if $phone_required} true {/if}"
            class="ty-input-text cm-focus cm-mask-phone cp-phone"
            name="{$inp_name}[phone]"
            value="{if $phone}{$phone}{elseif !$placeholder}{/if}"
            placeholder="{if $placeholder}{$placeholder}{/if}"
            }

        {if $inp_name == "call_data"}
            {$from_call=true}
        {else}
            {$from_call=false}
        {/if}
        {if "cp_otp"|fn_needs_image_verification == true}
            {$cp_btn_href="cp_otp.pre_verification?otp_type=register&obj_id=`$obj_id`&phone=`$phone`&go_skip_exist=`$from_call`"|fn_url}
        {else}
            {$cp_btn_href="profiles.cp_phone_verification?otp_type=register&obj_id=`$obj_id`&phone=`$phone`&go_skip_exist=`$from_call`"|fn_url}
        {/if}
        {$code_valid = $addons.cp_otp_registration.new_send_time}
        {if $code_valid}
            {$cur_time = time()}
            {if $smarty.session.cp_otp.register.time && $cur_time > $smarty.session.cp_otp.register.time|intval}
                {$send_in_ses_dif = $cur_time - $smarty.session.cp_otp.register.time}
                {if $send_in_ses_dif >= ($code_valid*60)}
                    {$send_in_ses_dif=0}
                {/if}
            {else}
                {$send_in_ses_dif=0}
            {/if}

            {if $send_in_ses_dif}
                {$time_end = ($code_valid*60)-$send_in_ses_dif}
                {$mins=$time_end|intdiv:"60"}
            {else}
                {$mins = $code_valid|intval}
            {/if}
            {$secs = 0}
            {if $mins < $code_valid}
                {$secs = ($code_valid - $mins) * 60 - $send_in_ses_dif}
            {/if}
            {$timer_m="%02d"|sprintf:$mins}
            {$timer_s="%02d"|sprintf:$secs}
            {$timer_str="`$timer_m`:`$timer_s`"}
        {/if}

            {$but_extra="style={if $phone_verified}display: none;{/if}"}

        <div class="cp-verification-wrap">
            {include file="buttons/button.tpl"
            id="otp_verification_link_{$obj_id}"
            but_role="submit"
            but_extra="style={if $phone_verified}display: none;{/if}"
            but_meta="ty-btn ty-btn__primary cp-verification-link cm-dialog-auto-size cm-dialog-opener cm-ajax {if $code_valid}cp-otp__run-again-timer{/if}"
            but_target_id="phone_verification_{$obj_id}"
            but_href="{$cp_btn_href}"
            but_title=__("cp_otp_phone_verification")
            but_text=__("cp_otp_phone_confirm")
            }

            <label for="cp_otp_verified" class="hidden cm-regexp" data-ca-regexp="Y" data-ca-message="{__("cp_otp_phone_need_confirm")}">
                {__("cp_otp_phone_verification")}
            </label>
            <input type="hidden" id="cp_otp_verified" value="{if $phone_verified}Y{/if}" />
        </div>
    </div>

    {if $phone_verified}
        <input type="hidden" name="verified_phone" value="{$phone}">
        <div class="cp-phone-confirmed" data-ca-phone="{$phone}">
            <span class="cp-phone-status cp-confirmed"><i class="ty-icon-ok"></i>&nbsp;{__("cp_phone_confirmed")}</span>
        </div>
    {/if}


    <!--phone_verification_info_{$obj_id}--></div>