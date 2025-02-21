{assign var="show_old_price" value=true}
{assign var="show_clean_price" value=true}
{assign var="show_rating" value=true}

{if $product}
    {assign var="obj_id" value=$obj_id|default:$product.product_id}
    {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
    {include file="common/product_data.tpl" obj_id=$obj_id product=$product show_labels_in_title=$show_labels_in_title}
    
    <div class="ty-simple-list clearfix">
        {assign var="form_open" value="form_open_`$obj_id`"}
        {$smarty.capture.$form_open nofilter}
            {if $item_number == "YesNo::YES"|enum}<strong>{$smarty.foreach.products.iteration}.&nbsp;</strong>{/if}

            {assign var="product_labels" value="product_labels_`$obj_prefix``$obj_id`"}
            {$smarty.capture.$product_labels nofilter}

            {include file="blocks/product_list_templates/components/average_rating.tpl"}

            {assign var="name" value="name_$obj_id"}<bdi>{$smarty.capture.$name nofilter}</bdi>
            {assign var="sku" value="sku_$obj_id"}{$smarty.capture.$sku nofilter}
                
            {if !$hide_price}
            <div class="ty-simple-list__price pr-{$settings.abt__ut2.product_list.price_display_format}{if $product.list_discount || $product.discount} pr-color{/if}" style="min-height: {$t6|default:48}px;">
                <div>
                    {assign var="old_price" value="old_price_`$obj_id`"}
                    {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}

                    {assign var="price" value="price_`$obj_id`"}
                    {$smarty.capture.$price nofilter}
				</div>
				{if $show_old_price || $show_clean_price || $show_list_discount}
                    {assign var="clean_price" value="clean_price_`$obj_id`"}
                    {$smarty.capture.$clean_price nofilter}
                    
                    {assign var="list_discount" value="list_discount_`$obj_id`"}
                    {$smarty.capture.$list_discount nofilter}
                {/if}
            </div>
            {/if}

            {if $capture_options_vs_qty}{capture name="product_options"}{/if}
            {assign var="product_amount" value="product_amount_`$obj_id`"}
            {$smarty.capture.$product_amount nofilter}

            {if $show_features || $show_descr}
                <div class="ty-simple-list__feature">{assign var="product_features" value="product_features_`$obj_id`"}{$smarty.capture.$product_features nofilter}</div>
                <div class="ty-simple-list__descr">{assign var="prod_descr" value="prod_descr_`$obj_id`"}{$smarty.capture.$prod_descr nofilter}</div>
            {/if}

            {assign var="product_options" value="product_options_`$obj_id`"}
            {$smarty.capture.$product_options nofilter}
            
            {if !$hide_qty}
                {assign var="qty" value="qty_`$obj_id`"}
                {$smarty.capture.$qty nofilter}
            {/if}

            {assign var="advanced_options" value="advanced_options_`$obj_id`"}
            {$smarty.capture.$advanced_options nofilter}
            {if $capture_options_vs_qty}{/capture}{/if}
            
            {assign var="min_qty" value="min_qty_`$obj_id`"}
            {$smarty.capture.$min_qty nofilter}

            {assign var="product_edp" value="product_edp_`$obj_id`"}
            {$smarty.capture.$product_edp nofilter}

            {if $capture_buttons}{capture name="buttons"}{/if}
            {if $show_add_to_cart}
                <div class="ty-simple-list__buttons">
                    {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                    {$smarty.capture.$add_to_cart nofilter}

                    {assign var="list_buttons" value="list_buttons_`$obj_id`"}
                    {$smarty.capture.$list_buttons nofilter}
                </div>
            {/if}
            {if $capture_buttons}{/capture}{/if}
        {hook name="products:product_list_form_close_tag"}
            {assign var="form_close" value="form_close_`$obj_id`"}
            {$smarty.capture.$form_close nofilter}
        {/hook}
    </div>
{/if}