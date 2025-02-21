{if $but_role == "action"}
    {assign var="suffix" value="-action"}
    {assign var="file_prefix" value="action_"}
{elseif $but_role == "act"}
    {assign var="suffix" value="-act"}
    {assign var="file_prefix" value="action_"}
{elseif $but_role == "disabled_big"}
    {assign var="suffix" value="-disabled-big"}
{elseif $but_role == "big"}
    {assign var="suffix" value="-big"}
{elseif $but_role == "delete"}
    {assign var="suffix" value="-delete"}
{elseif $but_role == "tool"}
    {assign var="suffix" value="-tool"}
{else}
    {assign var="suffix" value=""}
{/if}

{if $but_name && $but_role != "text" && $but_role != "act" && $but_role != "delete"} {* SUBMIT BUTTON *}
    <button {if $but_id}id="{$but_id}"{/if} class="{$but_meta} ty-btn" type="submit" name="{$but_name}" {if $but_onclick}onclick="{$but_onclick nofilter}"{/if}><span>{if $but_icon}<i class="{$but_icon}"></i>{/if}<bdi>{$but_text}</bdi></span></button>

{elseif $but_role == "text" || $but_role == "act" || $but_role == "edit"} {* TEXT STYLE *}
    <a {$but_extra} class="ty-btn {if $but_meta}{$but_meta} {/if}{if $but_name}cm-submit {/if}text-button{$suffix} {if $but_scroll}cm-scroll {/if}{if $but_tooltip && !$runtime.customization_mode.live_editor} cm-tooltip{/if}"{if $but_id} id="{$but_id}"{/if}{if $but_name} data-ca-dispatch="{$but_name}"{/if}{if $but_href} href="{$but_href|fn_url}"{/if}{if $but_scroll} data-ca-scroll="{$but_scroll}"{/if}{if $but_onclick} onclick="{$but_onclick nofilter} return false;"{/if}{if $but_target} target="{$but_target}"{/if}{if $but_rel} rel="{$but_rel}"{/if}{if $but_external_click_id} data-ca-external-click-id="{$but_external_click_id}"{/if}{if $but_target_form} data-ca-target-form="{$but_target_form}"{/if}{if $but_target_id} data-ca-target-id="{$but_target_id}"{/if}{if $but_title}title="{$but_title}"{/if}>{if $but_icon}{include_ext file="common/icon.tpl" class=$but_icon}{/if}{if $btn_nofilter}{$but_text nofilter}{else}<bdi>{$but_text}</bdi>{/if}</a>

{elseif $but_role == "delete"}
    <a {$but_extra} {if $but_id}id="{$but_id}"{/if}{if $but_name} data-ca-dispatch="{$but_name}"{/if} {if $but_href}href="{$but_href|fn_url}"{/if}{if $but_onclick} onclick="{$but_onclick nofilter} return false;"{/if}{if $but_meta} class="{$but_meta}"{/if}{if $but_target} target="{$but_target}"{/if}{if $but_rel} rel="{$but_rel}"{/if}{if $but_external_click_id} data-ca-external-click-id="{$but_external_click_id}"{/if}{if $but_target_form} data-ca-target-form="{$but_target_form}"{/if}{if $but_target_id} data-ca-target-id="{$but_target_id}"{/if}{if $but_title}title="{$but_title}"{/if}>{include_ext file="common/icon.tpl" class="ty-icon-cancel-circle" title=__("remove")}</a>

{elseif $but_role == "icon"} {* LINK WITH ICON *}
    <a {$but_extra} {if $but_id}id="{$but_id}"{/if}{if $but_href} href="{$but_href|fn_url}"{/if} {if $but_onclick}onclick="{$but_onclick nofilter};{if !$allow_href} return false;{/if}"{/if} {if $but_target}target="{$but_target}"{/if} {if $but_rel} rel="{$but_rel}"{/if}{if $but_external_click_id} data-ca-external-click-id="{$but_external_click_id}"{/if}{if $but_target_form} data-ca-target-form="{$but_target_form}"{/if}{if $but_target_id} data-ca-target-id="{$but_target_id}"{/if} class="ty-btn {if $but_meta}{$but_meta}{/if}"{if $but_title} title="{$but_title}"{/if}><bdi>{$but_text}</bdi></a>

{else} {* BUTTON STYLE *}

    <a {if $but_href}href="{$but_href|fn_url}"{/if}{if $but_onclick} onclick="{$but_onclick nofilter} return false;"{/if} {if $but_target}target="{$but_target}"{/if} class="ty-btn {if $but_meta}{$but_meta} {/if}" {if $but_rel} rel="{$but_rel}"{/if}{if $but_external_click_id} data-ca-external-click-id="{$but_external_click_id}"{/if}{if $but_target_form} data-ca-target-form="{$but_target_form}"{/if}{if $but_target_id} data-ca-target-id="{$but_target_id}"{/if}{if $but_title} title="{$but_title}"{/if}>{if $but_icon}{include_ext file="common/icon.tpl" class=$but_icon}{/if}<bdi>{$but_text}</bdi></a>
{/if}
