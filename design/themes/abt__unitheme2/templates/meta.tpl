{hook name="index:meta"}
{if $display_base_href}
<base href="{$config.current_location}/" />
{/if}
<meta http-equiv="Content-Type" content="text/html; charset={$smarty.const.CHARSET}" data-ca-mode="{$store_trigger}" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover" />
{hook name="index:meta_description"}
<meta name="description" content="{$meta_description|default:$location_data.meta_description|html_entity_decode:$smarty.const.ENT_COMPAT:"UTF-8"}" />
{/hook}
{hook name="index:meta_keywords"}
    <meta name="keywords" content="{$meta_keywords|default:$location_data.meta_keywords}" />
{/hook}
<meta name="format-detection" content="telephone=no">
{/hook}
{$location_data.custom_html nofilter}
