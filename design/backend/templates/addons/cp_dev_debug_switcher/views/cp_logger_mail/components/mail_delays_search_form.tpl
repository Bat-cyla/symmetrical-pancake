{$in_popup = true}
    <div class="sidebar-row">
    <h6>{__("search")}</h6>

<form action="{""|fn_url}" name="mail_delays_search_form" method="get" class="{$form_meta}">
    {capture name="simple_search"}
        {if $smarty.request.redirect_url}
            <input type="hidden" name="redirect_url" value="{$smarty.request.redirect_url}" />
        {/if}

        {if $selected_section != ""}
            <input type="hidden" id="selected_section" name="selected_section" value="{$selected_section}" />
        {/if}

        {$extra nofilter}

        <div class="sidebar-field">
            <label for="email">{__("email")}</label>
            <input type="text" name="email" id="email" value="{$search.email}" size="30"/>
        </div>
        
        {if fn_allowed_for('MULTIVENDOR')}
            <div class="sidebar-field">
                <label for="vendor">{__("vendor")}</label>
                <input type="text" name="vendor" id="vendor" value="{$search.vendor}" size="30"/>
            </div>
        {/if}

        <div class="sidebar-field">
            <div class="sidebar-field">
                {include file="common/period_selector.tpl" period=$search.period display="form"}
            </div>
        </div>
    {/capture}

    {include file="common/advanced_search.tpl" simple_search=$smarty.capture.simple_search dispatch=$dispatch view_type="mail_delays" in_popup=$in_popup}

</form>

</div><hr>

