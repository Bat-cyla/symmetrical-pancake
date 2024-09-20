{capture name="mainbox"}
    <form action="{""|fn_url}" method="post" target="_self" name="mail_delays_list_form">

        {include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}

        {$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
        {$c_icon="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
        {$c_dummy="<i class=\"icon-dummy\"></i>"}
        {$rev=$smarty.request.content_id|default:"pagination_contents"}

        {if $incompleted_view}
            {$page_title=__("incompleted_mail_delays")}
            {$get_additional_statuses=true}
        {else}
            {$page_title=__("mail_logs")}
            {$get_additional_statuses=false}
        {/if}
        {$order_status_descr=$smarty.const.STATUSES_ORDER|fn_get_simple_statuses:$get_additional_statuses:true}
        {$extra_status=$config.current_url|escape:"url"}
        {$statuses = []}
        {$order_statuses=$smarty.const.STATUSES_ORDER|fn_get_statuses:$statuses:$get_additional_statuses:true}

        {if $mail_logs}
            <table width="100%" class="table table-middle table-responsive" width="100%">
                <thead>
                    <tr>
                        <th width="5%" class="left">{include file="common/check_items.tpl"}</th>

                        <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=email&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("cp_dev_debug_switcher.mail_to")}{if $search.sort_by == "email"}{$c_icon nofilter}{/if}</a></th>
                        <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=from_mail&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("cp_dev_debug_switcher.mail_from")}{if $search.sort_by == "from_mail"}{$c_icon nofilter}{/if}</a></th>
                        <th width="15%"><span>{__("subject")}</span></th>
                        {if fn_allowed_for('MULTIVENDOR')}
                            <th width="5%"><a class="cm-ajax" href="{"`$c_url`&sort_by=company&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("vendor")}{if $search.sort_by == "company"}{$c_icon nofilter}{/if}</a></span></th>
                        {/if}
                        <th width="10%"><a class="cm-ajax" href="{"`$c_url`&sort_by=timestamp&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("date")}{if $search.sort_by == "timestamp"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                        <th width="5%">&nbsp;</th>

                    </tr>
                </thead>
                <tbody>
                    {foreach from=$mail_logs item="o"}
                        
                        <tr {if $o.invalid_email == "Y"}style="background: #fba4a4;"{/if}>
                            <td class="left mobile-hide"><input type="checkbox" name="mail_delay_ids[]" value="{$o.mail_delay_id}" class="cm-item cm-item-status-{$o.status|lower}" /></td>
                            
                            <td data-th="{__("cp_dev_debug_switcher.mail_to")}">
                                <a href="mailto:{$o.email}">{$o.email}</a>
                            </td>
                            <td data-th="{__("cp_dev_debug_switcher.mail_from")}"><a href="mailto:{$o.from_mail}">{$o.from_mail}</a></td>
                            <td data-th="{__("subject")}">{$o.subject}</td>
                            {if fn_allowed_for('MULTIVENDOR')}
                                <th data-th="{__("vendor")}"><span>{$o.company}</span></th>
                            {/if}
                            <td data-th="{__("date")}" class="">{$o.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</td>

                            <td class="center">
                                {capture name="tools_items"}
                                    {assign var="current_redirect_url" value=$config.current_url|escape:url}
                                    <li>{btn type="list" href="cp_logger_mail.delete?mail_delay_id=`$o.mail_delay_id`&redirect_url=`$current_redirect_url`" class="cm-confirm" text={__("delete")} method="POST"}</li>
                                    <li>{btn type="text" href="cp_logger_mail.preview?mail_delay_id=`$o.mail_delay_id`" class="" text=__("preview") method="GET" data=["target" => "_blank"]}</li>
                                {/capture}
                                <div class="hidden-tools">
                                    {dropdown content=$smarty.capture.tools_items}
                                </div>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        {else}
            <p class="no-items">{__("no_data")}</p>
        {/if}
        {include file="common/pagination.tpl" div_id=$smarty.request.content_id}
    </form>
{/capture}

{capture name="sidebar"}
    {include file="common/saved_search.tpl" dispatch="cp_logger_mail.manage" view_type="cp_logger_mail"}
    {include file="addons/cp_dev_debug_switcher/views/cp_logger_mail/components/mail_delays_search_form.tpl" dispatch="cp_logger_mail.manage"}
{/capture}

{capture name="buttons"}
    {capture name="tools_list"}
        {if $mail_logs}
            <li>{btn type="delete_selected" dispatch="dispatch[cp_logger_mail.m_delete]" form="mail_delays_list_form"}</li>
        {/if}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
{/capture}

{include file="common/mainbox.tpl" title=__("cp_dev_debug_switcher.logs") sidebar=$smarty.capture.sidebar content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons content_id="manage_mail_delays"}
