{** template-description:tmpl_list_without_options **}

{capture name="products_list_html"}
	{$tmpl='products_without_options'}

	{include file="blocks/product_list_templates/default_params/`$tmpl`.tpl"}
	{include file="blocks/list_templates/products_list.tpl"}
{/capture}

{if $ab__cb_banner_exists}
	{capture name="products_list_html"}
    	{$smarty.capture.products_list_html|fn_ab__cb_insert_category_banner:'products_without_options' nofilter}
	{/capture}
{/if}

{$smarty.capture.products_list_html nofilter}