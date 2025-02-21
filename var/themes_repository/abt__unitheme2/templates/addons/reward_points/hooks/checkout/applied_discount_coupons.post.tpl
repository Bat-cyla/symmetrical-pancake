{if $runtime.mode == "checkout" && $cart_products && $cart.points_info.total_price && $user_info.points > 0}
    <form class="cm-ajax cm-ajax-full-render" name="point_payment_form" action="{""|fn_url}" method="post" id="point_payment_form">
        <input type="hidden" name="redirect_mode" value="{$location}" />
        <input type="hidden" name="result_ids" value="checkout*,cart_status*,litecheckout_form" />

        <div class="ty-discount-coupon__control-group ty-reward-points__coupon ty-input-append ty-inline-block">
            <input type="text" class="ty-input-text ty-valign cm-hint" name="points_to_use" size="40" value="{__("points_to_use")}" />
            {include file="buttons/go.tpl" but_name="checkout.point_payment" alt=__("apply") but_text=__("apply")}
            <input type="submit" class="hidden" name="dispatch[checkout.point_payment]" value="" />
        </div>
    </form>

    {if $user_info.points}
        {hook name="checkout:reward_points"}
            <div class="ty-coupons__item ty-discount-info ut2_points-info">
                <span class="ty-caret-info">
                    <span class="ty-caret-outer"></span>
                    <span class="ty-caret-inner"></span>
                </span>
                <span class="ty-reward-points__txt-point">{__("text_point_in_account")}&nbsp;{__("points_lowercase", [$user_info.points])}.</span>
                {if $cart.points_info.in_use.points}
                    {$_redirect_url = $config.current_url|escape:url}
                    {if $use_ajax}{$_class = "cm-ajax"}{/if}
                    <span class="ty-reward-points__points-in-use">
                        {__("points_in_use_lowercase", [$cart.points_info.in_use.points])}.
                        ({include file="common/price.tpl" value=$cart.points_info.in_use.cost})
                        {include file="buttons/button.tpl"
                        but_href="checkout.delete_points_in_use?redirect_url=`$_redirect_url` "
                        but_meta="cm-post ty-reward-points__delete-icon"
                        but_role="delete"
                        but_target_id="checkout*,cart_status*,subtotal_price_in_points,litecheckout_form"
                        }
                    </span>
                {/if}
            </div>
        {/hook}
    {/if}
{/if}
