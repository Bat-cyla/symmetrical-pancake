{if $smarty.request.cp_guest_order}
    {$but_name = "dispatch[checkout.cp_phone_verification]"}
{else}
    {$but_name = "dispatch[profiles.cp_phone_verification]"}
{/if}

{include file="addons/cp_otp_registration/components/phone_verification.tpl" but_name=$but_name}