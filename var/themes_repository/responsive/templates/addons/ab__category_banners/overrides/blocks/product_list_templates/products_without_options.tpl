{** template-description:tmpl_list_without_options **}

{capture name="products_list_html"}
    {include file="blocks/list_templates/products_list.tpl"
    show_name=true
    show_sku=false
    show_rating=true
    show_features=true
    show_prod_descr=true
    show_old_price=true
    show_price=true
    show_clean_price=true
    show_list_discount=true
    show_discount_label=true
    show_product_amount=true
    show_product_edp=true
    show_add_to_cart=true
    show_list_buttons=true
    show_descr=true
    but_role="action"}
{/capture}

{if $ab__cb_banner_exists}
    {capture name="products_list_html"}
        {$smarty.capture.products_list_html|fn_ab__cb_insert_category_banner:'products_without_options' nofilter}
    {/capture}
{/if}

{$smarty.capture.products_list_html nofilter}