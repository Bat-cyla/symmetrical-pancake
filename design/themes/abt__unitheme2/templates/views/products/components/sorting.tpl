{ab__hide_content bot_type="ALL"}
<div class="ty-sort-container">
    {if !$config.tweaks.disable_dhtml}
        {assign var="ajax_class" value="cm-ajax"}
    {/if}

    {$smarty.capture.abt__selected_filters nofilter}

    {assign var="curl" value=$config.current_url|fn_query_remove:"sort_by":"sort_order":"result_ids":"layout"}
    {assign var="sorting" value=""|fn_get_products_sorting}
    {assign var="sorting_orders" value=""|fn_get_products_sorting_orders}
    {assign var="layouts" value=""|fn_get_products_views:false:false}
    {assign var="pagination_id" value=$id|default:"pagination_contents"}
    {assign var="avail_sorting" value=$settings.Appearance.available_product_list_sortings}

    {if $search.sort_order_rev == "asc"}
        {capture name="sorting_text"}
            <a>{$sorting[$search.sort_by].description}{include_ext file="common/icon.tpl" class="ty-icon-up-dir"}</a>
        {/capture}
    {else}
        {capture name="sorting_text"}
            <a>{$sorting[$search.sort_by].description}{include_ext file="common/icon.tpl" class="ty-icon-down-dir"}</a>
        {/capture}
    {/if}

    <div class="ut2-sorting-wrap">

        {if $avail_sorting}
            {include file="common/sorting.tpl"}
        {/if}

        {assign var="pagination" value=$search|fn_generate_pagination}

        {if $pagination.total_items}
            {assign var="range_url" value=$config.current_url|fn_query_remove:"items_per_page":"page"}
            {assign var="product_steps" value=$settings.Appearance.columns_in_products_list|fn_get_product_pagination_steps:$settings.Appearance.products_per_page}

            <div class="ty-sort-dropdown">
                <div class="ut2-sort-label">{__('show')}:</div>
                <a id="sw_elm_pagination_steps" class="ty-sort-dropdown__wrapper cm-combination {if !$runtime.customization_mode.live_editor}cm-tooltip{/if}" title="{$pagination.items_per_page} {__("per_page")}"><span>{$pagination.items_per_page}</span><i class="ut2-icon-outline-expand_more"></i></a>

                <div id="elm_pagination_steps" class="ty-sort-dropdown__content cm-popup-box hidden">
                    <span class="ut2-popup-box-title">{$pagination.items_per_page} {__("per_page")}<span class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_elm_pagination_steps"><i class="ut2-icon-baseline-close"></i></span></span>
                    <ul>
                        {foreach from=$product_steps item="step"}
                            {if $step != $pagination.items_per_page}
                                <li class="ty-sort-dropdown__content-item">
                                    <a class="{$ajax_class} cm-ajax-full-render ty-sort-dropdown__content-item-a" href="{"`$range_url`&items_per_page=`$step`"|fn_url}" data-ca-target-id="{$pagination_id}" rel="nofollow">{$step} {__("per_page")}</a>
                                </li>
                            {/if}
                        {/foreach}
                    </ul>
                </div>
            </div>
        {/if}

        {if !(($category_data.selected_views|count == 1) || ($category_data.selected_views|count == 0 && ""|fn_get_products_views:true|count <= 1)) && !$hide_layouts}
            <div class="ty-sort-container__views-icons">
                {foreach from=$layouts key="layout" item="item"}
                    {if ($category_data.selected_views.$layout) || (!$category_data.selected_views && $item.active)}
                        {if $layout == $selected_layout}
                            {$sort_order = $search.sort_order_rev}
                        {else}
                            {$sort_order = $search.sort_order}
                        {/if}
                        <a class="ty-sort-container__views-a cm-ajax-full-render {$ajax_class} {if $layout == $selected_layout}active{/if}" data-ca-target-id="{$pagination_id}" href="{"`$curl`&sort_by=`$search.sort_by`&sort_order=`$sort_order`&layout=`$layout`"|fn_url}" rel="nofollow">
                            {include_ext file="common/icon.tpl" class="ty-icon-`$layout|replace:'_':'-'`"}
                        </a>
                    {/if}
                {/foreach}
            </div>
        {/if}
    </div>
</div>
{/ab__hide_content}