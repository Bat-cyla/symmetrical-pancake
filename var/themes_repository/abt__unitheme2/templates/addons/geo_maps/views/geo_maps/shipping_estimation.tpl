{if
    $addons.geo_maps.show_shippings_on_product === "YesNo::YES"|enum
    && (
        $product.is_edp !== "YesNo::YES"|enum
        || $product.edp_shipping === "YesNo::YES"|enum
    )
    && (
        $product.price|floatval
        || $product.zero_price_action !== "ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART"|enum
    )
}
{if $smarty.request.abt_in_popup}
    {$overload = '_overload'}
{/if}

{capture name="shipping_methods"}
    <div class="ty-geo-maps-shipping__popup">
        <div class="ty-geo-maps-shipping__list-city">
            {__("geo_maps.shipping_time_and_rates")}: {include file="addons/geo_maps/blocks/customer_location.tpl" id="shipping_estimation_{$product_id}{$overload}" location=$location location_detected=true block=null}
        </div>
        {if $shipping_methods}
            <table class="ty-table ty-geo-maps-shipping__list">
                <thead>
                <tr>
                    <th class="ty-geo-maps-shipping__list-head">{__("shipping_method")}</th>
                    <th class="ty-geo-maps-shipping__list-head">{__("geo_maps.shipping_time")}</th>
                    <th class="ty-geo-maps-shipping__list-head ty-geo-maps-shipping__list-head--price">{__("cost")}</th>
                </tr>
                </thead>
                {foreach $shipping_methods as $shipping}
                    <tr class="ty-geo-maps-shipping__list-item">
                        <td class="ty-geo-maps-shipping__list-col">{if $shipping.number_of_pickup_points}{__("geo_maps.from_pickup_points", [$shipping.number_of_pickup_points, "[shipping]" => $shipping.shipping ])}{else}{$shipping.shipping}{/if}</td>
                        <td class="ty-geo-maps-shipping__list-col">{$shipping.service_delivery_time|default:$shipping.delivery_time}</td>
                        <td class="ty-geo-maps-shipping__list-col ty-geo-maps-shipping__list-col--price">{include file="common/price.tpl" value=$shipping.rate class="ty-geo-maps-shipping__price"}</td>
                    </tr>
                {/foreach}
            </table>
        {else}
            <span class="ty-error-text">
                {__("geo_maps.no_shippings")}
            </span>
        {/if}
        <div class="buttons-container">
            {include file="buttons/close.tpl" but_meta="ty-btn__primary cm-form-dialog-closer cm-dialog-closer"}
        </div>
    </div>
{/capture}

{if $smarty.request.abt_in_popup}
    {$smarty.capture.shipping_methods nofilter}
{else}

    {$show_title = $show_title|default:true}

    <div data-ca-geo-maps-shippings-methods-list-id="geo_maps_shipping_methods_list_{$product_id}"
         data-ca-geo-maps-shipping-estimation-product-id="{$product_id}"
         data-ca-geo-maps-shipping-estimation-show-title="{($show_title) ? "1" : "0"}"
         data-ca-geo-maps-shipping-estimation-no-shippings-available-short-text="{($no_shippings_available_short_text) ? "1" : "0"}"
         id="geo_maps_shipping_estimation_{$product_id}">
        <div class="ty-geo-maps-shipping__wrapper" id="shipping_methods_{$product_id}">
            {if $show_title}
            <div class="ty-geo-maps-shipping__title">
                {__("geo_maps.shipping_time_and_rates")}: {include file="addons/geo_maps/blocks/customer_location.tpl" id="shipping_estimation_{$product_id}" location=$location location_detected=true block=null}
            </div>
            {/if}
            {hook name="geo_maps:shipping_estimation"}
                {if $shippings_summary}
                    {foreach $shippings_summary as $shipping_type => $shipping}
                        <div class="ty-geo-maps-shipping__item">
                            <div class="ty-geo-maps-shipping__label">
                                {strip}
                                    <a class="cm-dialog-opener cm-dialog-auto-size ty-geo-maps-shipping__link" href="{"geo_maps.shipping_estimation?product_id={$product_id}&abt_in_popup=1"|fn_url}" data-ca-target-id="geo_maps_shipping_methods_list_{$product_id}_overload">
                                        {if $shipping_type == "pickup"}
                                            {include_ext file="common/icon.tpl" class="ty-geo-maps-shipping__link-icon ty-icon-pointer"}
                                        {elseif $shipping_type == "courier"}
                                            {include_ext file="common/icon.tpl" class="ty-geo-maps-shipping__link-icon ty-icon-courier"}
                                        {else}
                                            {include_ext file="common/icon.tpl" class="ty-geo-maps-shipping__link-icon ty-icon-shipping"}
                                        {/if}
                                        <span class="ty-geo-maps-shipping__link-text">
                                            {__("geo_maps.shipping_group_`$shipping_type`")}
                                        </span>
                                    </a>
                                    {if $shipping.number_of_pickup_points}
                                        {__("geo_maps.from_pickup_points", [$shipping.number_of_pickup_points, "[shipping]" => $shipping.shipping])}
                                    {/if}
                                    <span class="ty-geo-maps-shipping__value-separator">:</span>
                                {/strip}
                            </div>
                            <div class="ty-geo-maps-shipping__value">
                                {if $shipping.delivery_time}
                                    {__("geo_maps.shipping_about")}
                                    {$shipping.delivery_time},
                                {/if}
                                {__("geo_maps.shipping_from")}
                                {include file="common/price.tpl" value=$shipping.rate class="ty-geo-maps-shipping__price"}
                            </div>
                        </div>
                    {/foreach}
                {elseif $no_shippings_available}
                    <span class="ty-error-text">
                        {if $no_shippings_available_short_text}
                            {__("geo_maps.no_shippings_short")}
                        {else}
                            {__("geo_maps.no_shippings")}
                        {/if}
                    </span>
                {else}
                    <div class="ty-geo-maps-shipping__loader"></div>
                {/if}
            {/hook}
        </div>
    <!--geo_maps_shipping_estimation_{$product_id}--></div>

    <div class="hidden" title="{__("shipping_methods")}" id="geo_maps_shipping_methods_list_{$product_id}">
        {$smarty.capture.shipping_methods nofilter}
    <!--geo_maps_shipping_methods_list_{$product_id}--></div>

    {script src="js/addons/geo_maps/shipping_estimation.js"}
    {/if}
{/if}
