<div class="b--ship-way
    {if $block.properties.abt__ut2_as_select == "YesNo::YES"|enum}
        b--ship-way_mode_select
    {else}
        b--ship-way_mode_radio-list
    {/if}">

    <div class="b--ship-way__in litecheckout__container">
        {if !$group.all_edp_free_shipping && !$group.shipping_no_required}
            {$show_content = true}
        {else}
            {$show_content = false}
        {/if}

        <div class="litecheckout__group litecheckout__step" id="litecheckout_step_shipping">
            <label for="shipping_rates_list"
                   class="cm-required cm-multiple-radios cm-shipping-available-label hidden"></label>
            <div class="litecheckout__group litecheckout__shippings"
                 data-ca-lite-checkout-overlay-message="{__("lite_checkout.click_here_to_update_shipping")}"
                 data-ca-lite-checkout-overlay-class="litecheckout__overlay--active"
                 data-ca-lite-checkout-element="shipping-methods"
                 id="shipping_rates_list">

                {hook name="checkout:shipping_rates"}

                    <input type="hidden"
                           name="additional_result_ids[]"
                           value="litecheckout_final_section,litecheckout_step_payment,checkout*"
                    />

                    {foreach $product_groups as $group_key => $group}

                        {if $group.shipping_by_marketplace}
                            {continue}
                        {/if}

                        <div class="{if $block.properties.abt__ut2_as_select == "YesNo::YES"|enum}b--ship-way__select{/if}">


                            {if $block.properties.abt__ut2_as_select == "YesNo::YES"|enum}
                                <label class="b--ship-way__opted" for="open-ship-way-list-dropdown">
                                    {if $group.shippings[$cart.chosen_shipping.$group_key].image}
                                    <div class="b--ship-way__opted__logo">
                                        {include file="common/image.tpl"  images=$group.shippings[$cart.chosen_shipping.$group_key].image class="shipping-method__logo-image litecheckout__shipping-method__logo-image"}
                                    </div>
                                    {/if}
                                    <div class="b--ship-way__opted__text">
                                        <div class="b--ship-way__opted__text__title">
                                            {$all_shippings.$group_key.{$cart.chosen_shipping.$group_key}.shipping}
                                        </div>
                                    </div>
                                    <div class="b--ship-way__opted__icon ut2-icon-outline-expand_more"></div>
                                </label>
                                {*{fn_print_r($all_shippings.$group_key.{$cart.chosen_shipping.$group_key})}*}
                                <input id="open-ship-way-list-dropdown" type="checkbox"/>
                            {/if}

                            {$show_content = true}

                            {if "MULTIVENDOR"|fn_allowed_for && $show_vendor_info_if_shipping_no_required === "YesNo::NO"|enum}
                                {if !$group.all_edp_free_shipping && !$group.shipping_no_required}
                                    {$show_content = true}
                                {else}
                                    {$show_content = false}
                                {/if}
                            {/if}

                            {if $product_groups|count > 1 && $show_content}
                                <div class="litecheckout__group">
                                    <div class="litecheckout__item">
                                        <h2 class="litecheckout__step-title">
                                            {__("lite_checkout.shipping_method_for", ["[group_name]" => $group.name])}
                                        </h2>
                                    </div>
                                </div>
                            {/if}

                            {$group.shipping_disabled = false}

                            {hook name="checkout:shipping_methods_list"}
                                <div class="b--ship-way__list litecheckout__group">
                                    {* Shippings list *}
                                    {if $group.shippings && !$group.all_edp_free_shipping && !$group.shipping_no_required}

                                        {foreach $all_shippings.$group_key as $shipping_id => $item}
                                            {if $group.shippings.$shipping_id}
                                                {$shipping = $group.shippings.$shipping_id}
                                                {if !$shipping.delivery_time && $shipping.service_delivery_time}
                                                    {$shipping.delivery_time = $shipping.service_delivery_time}
                                                {/if}
                                                {$shipping.shipping = $item.shipping}
                                            {else}
                                                {$shipping = $item}
                                                {if $show_unavailable_shippings}
                                                    {$shipping.rate_disabled = true}
                                                {else}
                                                    {continue}
                                                {/if}
                                            {/if}

                                            {if $shipping.rate_disabled && $cart.chosen_shipping.$group_key == $shipping.shipping_id}
                                                {$group.shipping_disabled = true}
                                            {/if}

                                            {hook name="checkout:shipping_rate"}

                                                {$delivery_time = ""}
                                                {if $shipping.delivery_time || $shipping.rate_info.delivery_time}
                                                    {$delivery_time = "(`$shipping.rate_info.delivery_time|default:$shipping.delivery_time`)"}
                                                {/if}

                                                {if $shipping.rate}
                                                    {capture assign="rate"}{include file="common/price.tpl" value=$shipping.rate}{/capture}
                                                    {if $shipping.inc_tax}
                                                        {$rate = "`$rate` ("}
                                                        {if $shipping.taxed_price && $shipping.taxed_price != $shipping.rate}
                                                            {capture assign="tax"}{include file="common/price.tpl" value=$shipping.taxed_price class="ty-nowrap"}{/capture}
                                                            {$rate = "`$rate``$tax` "}
                                                        {/if}
                                                        {$inc_tax_lang = __('inc_tax')}
                                                        {$rate = "`$rate``$inc_tax_lang`)"}
                                                    {/if}
                                                {elseif $shipping.rate_disabled}
                                                    {$rate = __("na")}
                                                {elseif fn_is_lang_var_exists("free")}
                                                    {$rate = __("free")}
                                                {else}
                                                    {$rate = ""}
                                                {/if}

                                            {/hook}

                                            <div class="b--ship-way__unit
                                                    {if $cart.chosen_shipping.$group_key == $shipping.shipping_id}b--ship-way__unit_active{/if}
                                                    litecheckout__shipping-method
                                                    litecheckout__field
                                                    litecheckout__field--xsmall"
                                            >

                                                <input
                                                        {if $cart.chosen_shipping.$group_key == $shipping.shipping_id} checked{/if}
                                                        type="radio"
                                                        class="litecheckout__shipping-method__radio hidden"
                                                        id="sh_{$group_key}_{$shipping.shipping_id}"
                                                        name="shipping_ids[{$group_key}]"
                                                        value="{$shipping.shipping_id}"
                                                        onclick="fn_calculate_total_shipping_cost(); $.ceLiteCheckout('toggleAddress', {if $shipping.is_address_required == "Y"}true{else}false{/if});"
                                                        data-ca-lite-checkout-element="shipping-method"
                                                        data-ca-lite-checkout-is-address-required="{if $shipping.is_address_required == "Y"}true{else}false{/if}"
                                                        data-ca-lite-checkout-shipping-method-disabled="{if $shipping.rate_disabled}true{else}false{/if}"
                                                />

                                                <label
                                                        for="sh_{$group_key}_{$shipping.shipping_id}"
                                                        class="b--ship-way__unit__label
                                                        litecheckout__shipping-method__wrapper
                                                        js-litecheckout-activate
                                                        {if $shipping.rate_disabled}litecheckout__shipping-method__wrapper--disabled{/if}
                                                        {if $shipping_rates_changed}litecheckout__shipping-method__wrapper--highlight{/if}"
                                                        data-ca-activate="sd_{$group_key}_{$shipping.shipping_id}">

                                                    {if $shipping.image}
                                                        <div class="b--ship-way__unit__label__logo litecheckout__shipping-method__logo">
                                                            {include file="common/image.tpl" obj_id=$shipping_id images=$shipping.image class="shipping-method__logo-image litecheckout__shipping-method__logo-image"}
                                                        </div>
                                                    {/if}

                                                    <div class="b--ship-way__unit__label__text">
                                                        <div class="litecheckout__shipping-method__title">
                                                            {$all_shippings.$group_key[$shipping.shipping_id].shipping}{if $rate && !$shipping.rate_disabled} — {$rate nofilter}{/if}
                                                        </div>
                                                        <div class="b--ship-way__unit__label__text__beside-title">
                                                            {if $shipping.rate_disabled}
                                                                <div class="litecheckout__shipping-method__status litecheckout__shipping-method__status--error">{__("lite_checkout.not_available")}</div>
                                                            {else}
                                                                <div class="litecheckout__shipping-method__delivery-time">{$delivery_time}</div>
                                                            {/if}
                                                        </div>
                                                        <div class="b--ship-way__unit__label__text__pseudo-radio"></div>
                                                    </div>

                                                </label>{* /.b--ship-way__unit__label *}

                                                {if $block.properties.abt__ut2_as_select == "YesNo::NO"|enum}
                                                    <div class="b--ship-way__unit__details">
                                                        <div class="b--ship-way__unit__details__in">
                                                            {if $cart.chosen_shipping.$group_key == $shipping.shipping_id}
                                                                {hook name="checkout:shipping_method"}
                                                                {/hook}
                                                                {if $shipping.description}
                                                                    <div class="ty-wysiwyg-content">
                                                                        {$shipping.description nofilter}
                                                                    </div>
                                                                {/if}
                                                            {/if}
                                                        </div>
                                                    </div>{* /.b--ship-way__unit__details *}
                                                {/if}

                                            </div>{* /.b--ship-way__unit *}
                                        {/foreach}
                                    {else}
                                        <div class="litecheckout__item litecheckout__item--full">
                                            {if $group.all_edp_free_shipping || $group.shipping_no_required}
                                                {if $show_content}
                                                    <p class="litecheckout__shipping-method__text ty-error-text">
                                                        {if $content}
                                                            {$content nofilter}
                                                        {else}
                                                            {__("no_shipping_required")}
                                                        {/if}
                                                    </p>
                                                {/if}
                                            {else}
                                                <p class="litecheckout__shipping-method__text ty-error-text">
                                                    {__("text_no_shipping_methods")}
                                                </p>
                                            {/if}
                                        </div>
                                    {/if}
                                    {if $cart.all_shippings_disabled || $group.shipping_disabled}
                                        <div class="litecheckout__item litecheckout__item--full">
                                            <p class="litecheckout__shipping-method__text ty-error-text">
                                                {__("text_no_shipping_methods")}
                                            </p>
                                        </div>
                                    {/if}
                                </div>{* /.b--ship-way__list *}
                            {/hook}
                        </div>{* /.b--ship-way__select *}

                        {if $block.properties.abt__ut2_as_select == "YesNo::YES"|enum}
                            <div class="b--ship-way__select-details">
                                <div class="b--ship-way__select-details__in">

                                    {foreach $group.shippings as $shipping}
                                        {hook name="checkout:shipping_method"}
                                        {/hook}
                                    {/foreach}

                                    {foreach $group.shippings as $shipping}
                                        {if $cart.chosen_shipping.$group_key == $shipping.shipping_id}
                                            <div class="b--ship-way__select-details__description litecheckout__shipping-method__description">
                                                {$all_shippings.$group_key[$shipping.shipping_id].description nofilter}
                                            </div>
                                        {/if}
                                    {/foreach}

                                </div>
                            </div>
                        {/if}

                    {/foreach}

                {/hook}

            <!--shipping_rates_list--></div>

        </div>{* /#litecheckout_step_shipping *}
    </div>{* /.b--ship-way__in *}
</div>{* /.b--ship-way *}