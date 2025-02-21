<a href="javascript:void(0);" rel="nofollow" onclick="$(this).parent().next().toggleClass('hidden');$(this).next().toggleClass('view');$(this).toggleClass('hidden');" class="ut2-btn-search"><i class="ut2-icon-search"></i></a>

<div class="ty-search-block">
    <form action="{""|fn_url}" name="search_form" method="get">
        <input type="hidden" name="match" value="all" />
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />

        {hook name="search:additional_fields"}{/hook}

        {strip}
            {if $settings.General.search_objects}
                {assign var="search_title" value=__("storefront_search_general")}
            {else}
                {assign var="search_title" value=__("search_products")}
            {/if}
            <input type="text" name="q" value="{$search.q}" id="search_input{$smarty.capture.search_input_id}" title="{$search_title}" class="ty-search-block__input cm-hint" />
            {if $settings.General.search_objects}
                {include file="buttons/magnifier.tpl" but_name="search.results" alt=__("storefront_search_general")}
            {else}
                {include file="buttons/magnifier.tpl" but_name="products.search" alt=__("storefront_search_general")}
            {/if}
        {/strip}

        {capture name="search_input_id"}{$block.snapping_id}{/capture}

    </form>
</div>
