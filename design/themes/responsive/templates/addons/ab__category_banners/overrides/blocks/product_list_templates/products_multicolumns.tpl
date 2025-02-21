{** template-description:tmpl_grid **}

{capture name="products_grid_html"}
    {include file="blocks/list_templates/grid_list.tpl"
    show_name=true
    show_old_price=true
    show_price=true
    show_rating=true
    show_clean_price=true
    show_list_discount=true
    show_add_to_cart=$show_add_to_cart|default:false
    but_role="action"
    show_features=true
    show_product_labels=true
    show_discount_label=true
    show_shipping_label=true}
{/capture}

{if $ab__cb_banner_exists}
    {capture name="products_grid_html"}
        {$smarty.capture.products_grid_html|fn_ab__cb_insert_category_banner:'products_multicolumns' nofilter}
    {/capture}
{/if}

{$smarty.capture.products_grid_html nofilter}