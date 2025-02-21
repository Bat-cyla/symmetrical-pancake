{hook name="call_requests:call_requests_form"}
<input type="hidden" name="result_ids" value="{$id}" />
<input type="hidden" name="return_url" value="{$config.current_url}" />
<input type="hidden" name="company_id" value="{$company_id}" />

{if $product}
    <input type="hidden" name="call_data[product_id]" value="{$product.product_id}" />
    <div class="ty-cr-product-info-container">
        <div class="ty-cr-product-info-image">
            {include file="common/image.tpl" images=$product.main_pair image_width=$settings.Thumbnails.product_cart_thumbnail_width image_height=$settings.Thumbnails.product_cart_thumbnail_height}
        </div>
        <div class="ty-cr-product-info-header">
            <h3 class="ty-product-block-title"><bdi>{$product.product}</bdi></h3>
        </div>
    </div>
{/if}

<div class="ty-control-group">
    <label class="ty-control-group__title" for="call_data_{$id}_name">{__("your_name")}</label>
    <input id="call_data_{$id}_name" size="50" class="ty-input-text-full" type="text" name="call_data[name]" value="{$call_data.name}" />
</div>
{if $addons.cp_otp_registration.comfirm_on.CR && $addons.cp_otp_registration.comfirm_on.CR == "Y" && $product}
    {include file="addons/cp_otp_registration/components/phone.tpl" obj_id=$id inp_name="call_data"}
{else}
    <div class="ty-control-group">
        <label for="call_data_{$id}_phone" class="ty-control-group__title cm-mask-phone-label{if !$product} cm-required{/if}">{__("phone")}</label>
        <input id="call_data_{$id}_phone" class="ty-input-text-full cm-mask-phone ty-inputmask-bdi" size="50" type="text" name="call_data[phone]" value="{$call_data.phone}" data-enable-custom-mask="true" />
    </div>
{/if}

{if $product}

    <div class="ty-cr-or">— {__("or")} —</div>

    <div class="ty-control-group">
        <label for="call_data_{$id}_email" class="ty-control-group__title cm-email">{__("email")}</label>
        <input id="call_data_{$id}_email" class="ty-input-text-full" size="50" type="text" name="call_data[email]" value="{$call_data.email}" />
    </div>

    <div class="cr-popup-error-box">
        <div class="hidden cm-cr-error-box help-inline">
            <p>{__("call_requests.enter_phone_or_email_text")}</p>
        </div>
    </div>

{else}

    <div class="ty-control-group">
        <label for="call_data_{$id}_convenient_time_from" class="ty-control-group__title">{__("call_requests.convenient_time")}</label>
        <bdi>
            <input id="call_data_{$id}_convenient_time_from" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_from]" value="" placeholder="{$smarty.const.CALL_REQUESTS_DEFAULT_TIME_FROM}" /> -
            <input id="call_data_{$id}_convenient_time_to" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_to]" value="" placeholder="{$smarty.const.CALL_REQUESTS_DEFAULT_TIME_TO}" />
        </bdi>
    </div>

{/if}

{include file="common/image_verification.tpl" option="call_request"}
{/hook}