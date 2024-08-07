<div class="cp-phone-verified-wrap" id="phone_verification_info_{$obj_id}">
    {$placeholder = $placeholder|default:$addons.cp_otp_registration.no_mask_placeholder}
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
    {if $addons.cp_otp_registration.use_country_prefix == "Y" && $addons.cp_otp_registration.default_country}
        {$cntr_code=true}
    {else}
        {$cntr_code=false}
    {/if}
    <div class="ty-control-group ty-shipping-phone cm-phone">
        <label for="phone" class="ty-control-group__title cm-required cm-mask-phone-label cm-trim">{__("phone")}</label>
        <input type="text" id="phone" class="ty-input-text cm-focus cm-mask-phone cp-phone" maxlength="25" value="{if $phone}{$phone}{elseif !$placeholder}{elseif $cntr_code}{else}+{/if}" data-ca-verification="phone_verification_info_{$obj_id}" name="company_data[phone]" autocomplete="n" {if $placeholder}placeholder="{$placeholder}"{/if}>
        
        {if "cp_otp"|fn_needs_image_verification == true}
            {$cp_btn_href="cp_otp.pre_verification?otp_type=register&obj_id=`$obj_id`&phone=`$phone`&redir_dispatch=companies"|fn_url}
        {else}
            {$cp_btn_href="companies.cp_phone_verification?otp_type=register&obj_id=`$obj_id`&phone=`$phone`"|fn_url}
        {/if}
        
        <div class="cp-verification-wrap">
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
            <a class="ty-btn ty-btn__primary cp-verification-link cm-dialog-auto-size cm-dialog-opener cm-ajax {if $send_in_ses_dif && !$phone_verified}cp-otp__hard-hidden{/if} {if $code_valid}cp-otp__run-again-timer{/if}" 
                style="{if $phone_verified}display: none;{/if}" id="otp_verification_link_{$obj_id}"
                href="{$cp_btn_href}"
                object_id="{$obj_id}"
                data-ca-dialog-title="{__("cp_otp_phone_verification")}"
                data-ca-target-id="phone_verification_{$obj_id}">
                {__("cp_otp_phone_confirm")}
            </a>
            <div class="cp__otp-new-send {if !$send_in_ses_dif || $phone_verified}hidden{else}cp-otp__run-separately{/if}" id="cp_otp_new_send_{$obj_id}" object_id="{$obj_id}">{__("cp_otp_send_again_after")}: <span data-cp-total="{$code_valid}" class="cp-otp-timer-again">{$timer_str}</span></div>
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