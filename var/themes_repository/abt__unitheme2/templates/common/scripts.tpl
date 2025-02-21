{script src="js/lib/jquery/jquery-{"main"|fn_abt__ut2_get_jquery_version}.min.js" no-defer=true}

{scripts}
    {script src="js/lib/jqueryui/jquery-ui.custom.min.js" no-defer=true}

    {script src="js/lib/modernizr/modernizr.custom.js"}
    {script src="js/tygh/core.js"}
    {script src="js/tygh/ajax.js"}
    {script src="js/tygh/history.js"}
    {script src="js/lib/autonumeric/autoNumeric.js"}
    {script src="js/lib/appear/jquery.appear-1.1.1.js"}

{if !$runtime.customization_mode.live_editor}
    {script src="js/lib/tools/tooltip.min.js"}
{/if}

{script src="js/tygh/editors/`$settings.Appearance.default_wysiwyg_editor`.editor.js"}

{script src="js/tygh/responsive.js"}

{if $runtime.customization_mode.live_editor}
    {script src="js/lib/autosize/jquery.autosize.js"}
    {script src="js/tygh/live_editor_mode.js"}
{/if}

<script>
(function(_, $) {

    _.tr({
        cannot_buy: '{__("cannot_buy")|escape:"javascript"}',
        no_products_selected: '{__("no_products_selected")|escape:"javascript"}',
        error_no_items_selected: '{__("error_no_items_selected")|escape:"javascript"}',
        delete_confirmation: '{__("delete_confirmation")|escape:"javascript"}',
        text_out_of_stock: '{__("text_out_of_stock")|escape:"javascript"}',
        items: '{__("items")|escape:"javascript"}',
        text_required_group_product: '{__("text_required_group_product")|escape:"javascript"}',
        save: '{__("save")|escape:"javascript"}',
        close: '{__("close")|escape:"javascript"}',
        notice: '{__("notice")|escape:"javascript"}',
        warning: '{__("warning")|escape:"javascript"}',
        error: '{__("error")|escape:"javascript"}',
        empty: '{__("empty")|escape:"javascript"}',
        text_are_you_sure_to_proceed: '{__("text_are_you_sure_to_proceed")|escape:"javascript"}',
        text_invalid_url: '{__("text_invalid_url")|escape:"javascript"}',
        error_validator_email: '{__("error_validator_email")|escape:"javascript"}',
        error_validator_phone: '{__("error_validator_phone")|escape:"javascript"}',
        error_validator_phone_mask: '{__("error_validator_phone_mask")|escape:"javascript"}',
        error_validator_phone_mask_with_phone: '{__("error_validator_phone_mask_with_phone")|escape:"javascript"}',
        error_validator_phone_phone_number_with_country_selection: '{__("error_validator_phone_phone_number_with_country_selection")|escape:"javascript"}',
        error_validator_integer: '{__("error_validator_integer")|escape:"javascript"}',
        error_validator_multiple: '{__("error_validator_multiple")|escape:"javascript"}',
        error_validator_password: '{__("error_validator_password")|escape:"javascript"}',
        error_validator_required: '{__("error_validator_required")|escape:"javascript"}',
        error_validator_zipcode: '{__("error_validator_zipcode")|escape:"javascript"}',
        error_validator_message: '{__("error_validator_message")|escape:"javascript"}',
        text_page_loading: '{__("text_page_loading")|escape:"javascript"}',
        error_ajax: '{__("error_ajax")|escape:"javascript"}',
        text_changes_not_saved: '{__("text_changes_not_saved")|escape:"javascript"}',
        text_data_changed: '{__("text_data_changed")|escape:"javascript"}',
        placing_order: '{__("placing_order")|escape:"javascript"}',
        order_was_not_placed: '{__("order_was_not_placed")|escape:"javascript"}',
        file_browser: '{__("file_browser")|escape:"javascript"}',
        browse: '{__("browse")|escape:"javascript"}',
        more: '{__("more")|escape:"javascript"}',
        text_no_products_found: '{__("text_no_products_found")|escape:"javascript"}',
        cookie_is_disabled: '{__("cookie_is_disabled")|escape:"javascript"}',
        insert_image: '{__("insert_image")|escape:"javascript"}',
        image_url: '{__("image_url")|escape:"javascript"}',
        loading: '{__("loading")|escape:"javascript"}',
        product_in_wishlist:'{__("product_in_wishlist")|escape:"javascript"}',
        'abt__ut2.add_to_wishlist.tooltip':'{__("abt__ut2.add_to_wishlist.tooltip")|escape:"javascript"}',
        product_added_to_cl:'{__("product_added_to_cl")|escape:"javascript"}',
        add_to_comparison_list:'{__("add_to_comparison_list")|escape:"javascript"}',
        text_editing_raw: '{__("text_editing", ['skip_live_editor' => true])|escape:"javascript"}',
        save_raw: '{__("save", ['skip_live_editor' => true])|escape:"javascript"}',
        cancel_raw: '{__("cancel", ['skip_live_editor' => true])|escape:"javascript"}',

        abt__ut2_of: '{__("of")}'
    });

    $.extend(_, {
        index_script: '{$config.customer_index|escape:javascript nofilter}',
        changes_warning: /*'{$settings.Appearance.changes_warning|escape:javascript nofilter}'*/'N',
        currencies: {
            'primary': {
                'decimals_separator': '{$currencies.$primary_currency.decimals_separator|escape:javascript nofilter}',
                'thousands_separator': '{$currencies.$primary_currency.thousands_separator|escape:javascript nofilter}',
                'decimals': '{$currencies.$primary_currency.decimals|escape:javascript nofilter}'
            },
            'secondary': {
                'decimals_separator': '{$currencies.$secondary_currency.decimals_separator|escape:javascript nofilter}',
                'thousands_separator': '{$currencies.$secondary_currency.thousands_separator|escape:javascript nofilter}',
                'decimals': '{$currencies.$secondary_currency.decimals|escape:javascript nofilter}',
                'coefficient': '{$currencies.$secondary_currency.coefficient}'
            }
        },
        default_editor: '{$settings.Appearance.default_wysiwyg_editor}',
        default_previewer: '{$settings.Appearance.default_image_previewer}',
        current_path: '{$config.current_path|escape:javascript nofilter}',
        current_location: '{$config.current_location|escape:javascript nofilter}',
        images_dir: '{$images_dir}',
        notice_displaying_time: {if $settings.Appearance.notice_displaying_time}{$settings.Appearance.notice_displaying_time}{else}0{/if},
        cart_language: '{$smarty.const.CART_LANGUAGE}',
        language_direction: '{$language_direction}',
        default_language: '{$smarty.const.DEFAULT_LANGUAGE}',
        default_country: '{$settings.Checkout.default_country|escape:javascript}',
        cart_prices_w_taxes: {if ($settings.Appearance.cart_prices_w_taxes == 'Y')}true{else}false{/if},
        regexp: [],
        current_url: '{$config.current_url|fn_url|escape:javascript nofilter}',
        current_host: '{$config.current_host|escape:javascript nofilter}',
        init_context: '{$smarty.request.init_context|escape:javascript nofilter}',
        phone_validation_mode: '{$settings.Appearance.phone_validation_mode}',
        hash_of_available_countries: '{$hash_of_available_countries}',
        hash_of_phone_masks: '{$hash_of_phone_masks}',
        deferred_scripts: []
    });

    {if $live_editor_objects}
        $.extend(_, {
            live_editor_mode: true,
            live_editor_objects: {$live_editor_objects|json_encode nofilter}
        });
    {/if}

    {if !$smarty.request.init_context}

        $(document).ready(function(){
            turnOffPhoneSafariAutofill();

            $.runCart('C');
        });

        $.ceEvent('on', 'ce.commoninit', function () {
            turnOffPhoneSafariAutofill();
        });

        function turnOffPhoneSafariAutofill () {
            if ($.browser.safari) {
                $('[x-autocompletetype="tel"]').removeAttr('x-autocompletetype');
                var $maskPhoneLabel =  $('.cm-mask-phone-label:not(.autofill-on)');
                if (!$maskPhoneLabel.length || $('[data-ca-validator="ignore"]', $maskPhoneLabel).length) {
                    return;
                }
                $maskPhoneLabel.append('<span data-ca-validator="ignore" style="position: absolute; overflow: hidden; width: 1px; height: 1px;">search</span>');
            }
        }

    {/if}

    {if $config.tweaks.anti_csrf}
        _.security_hash = '{""|fn_generate_security_hash}';
    {/if}
}(Tygh, Tygh.$));
</script>

{script src="js/lib/maskedinput/jquery.maskedinput.min.js"}

{script src="js/lib/inputmask/jquery.inputmask.min.js"}
{script src="js/lib/jquery-bind-first/jquery.bind-first-0.2.3.js"}
{script src="js/lib/inputmask-multi/jquery.inputmask-multi.js"}
{script src="js/lib/libphonenumber-js/libphonenumber-max.js"}
{script src="js/lib/owlcarousel/owl.carousel.min.js"}

{script src="js/tygh/phone_mask.js"}


{hook name="index:scripts"}
{/hook}

{/scripts}