<div class="well help-block">
    <p style="text-align: center;"><strong>{__("cp_dev_debug_switcher.current_server_time")}:</strong> {time()|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</p>
    <p style="text-align: center;"><strong>{__("cp_dev_debug_switcher.php_info")}:</strong> <a href="{"tools.phpinfo"|fn_url}">phpinfo</a></p>
</div>
{$dev_true = "green"}
{$dev_false = "red"}
<div class="control-group setting-wide">
    <label class="control-label" for="enable_debug_mode">{__("cp_dev_debug_switcher.enable_debug_mode")}: 
        <div class="muted description">{__("cp_dev_debug_switcher.enable_debug_mode_desc")}
        	<div>{__("cp_dev_debug_switcher.current_state")}:
                <var><u style="color: {if defined('DEBUG_MODE')}{$dev_true}{else}{$dev_false}{/if};">{if defined('DEBUG_MODE')}defined{else}undefined{/if}</u></var>,
                <var><u style="color: {if $debug_already_enabled}{$dev_true}{else}{$dev_false}{/if};">{if $debug_already_enabled}true{else}false{/if}</u></var>.</li>
            </div>
        </div>
    </label>
    <div class="controls">
        <label class="checkbox">
            <input type="hidden" name="enable_debug_mode" value="{"YesNo::NO"|enum}" />
            <input type="checkbox"
                   class="settings"
                   name="enable_debug_mode"
                   id="enable_debug_mode"
                   data-target="works_from_ip_field"
                   {if $enable_debug_mode === "YesNo::NO"|enum && $debug_already_enabled || $debug_already_enabled_but_false}disabled{/if}
                   value="{"YesNo::YES"|enum}"
                   {if $enable_debug_mode === "YesNo::YES"|enum}
                       checked="checked"
                   {/if}
            />
            {if $enable_debug_mode === "YesNo::NO"|enum && $debug_already_enabled || $debug_already_enabled_but_false}
                <div class="alert alert-warning" style="margin-left: 20px;">
                   <strong>{__("attention")}</strong>
                   <span>{__("cp_dev_debug_switcher.enable_debug_mode_desc_notice")}</span>
                </div>
            {/if}
        </label>
    </div>
</div>

<div class="control-group setting-wide">
    <label class="control-label" for="enable_development_mode">{__("cp_dev_debug_switcher.enable_development_mode")}: 
        <div class="muted description">{__("cp_dev_debug_switcher.enable_development_mode_desc")}
        	<div>{__("cp_dev_debug_switcher.current_state")}:
        	
        	<ul style="float: right;">
        		<li>DEVELOPMENT - 
                    <var><u style="color: {if defined('DEVELOPMENT')}{$dev_true}{else}{$dev_false}{/if};">{if defined('DEVELOPMENT')}defined{else}undefined{/if}</u></var>,
                    <var><u style="color: {if $development_already_enabled}{$dev_true}{else}{$dev_false}{/if};">{if $development_already_enabled}true{else}false{/if}</u></var>;
                </li> 
                <li>display_errors - 
                    <var><var><u style="color: {if $display_errors_enabled}{$dev_true}{else}{$dev_false}{/if};">{if $display_errors_enabled}true{else}false{/if}</u></var>;
                </li>
                <li>display_startup_errors - 
                    <var><var><u style="color: {if $display_startup_errors_enabled}{$dev_true}{else}{$dev_false}{/if};">{if $display_startup_errors_enabled}true{else}false{/if}</u></var>.
                </li>
        	</ul>
		</div>
        </div>
    </label>
    <div class="controls">
        <label class="checkbox">
            <input type="hidden" name="enable_development_mode" value="{"YesNo::NO"|enum}" />
            <input type="checkbox"
                   class="settings"
                   name="enable_development_mode"
                   id="enable_development_mode"
                   data-target="works_from_ip_field"
                   value="{"YesNo::YES"|enum}"
                   {if $enable_development_mode === "YesNo::YES"|enum}
                       checked="checked"
                   {/if}
            />
            {if $enable_development_mode === "YesNo::NO"|enum && $development_already_enabled || $development_already_enabled_but_false}
                <div class="alert alert-warning" style="margin-left: 20px;">
                   <strong>{__("attention")}</strong>
                   <span>{__("cp_dev_debug_switcher.enable_development_mode_notice")}</span>
                </div>
            {/if}
        </label>
    </div>
</div>

<div class="control-group setting-wide" id="works_from_ip_field"
                   {if ($enable_debug_mode === "YesNo::NO"|enum) && ($enable_development_mode === "YesNo::NO"|enum)}
                       style="display: none;"
                   {/if}>
    <label class="control-label" for="works_from_ip">{__("cp_dev_debug_switcher.works_from_ip")}:
        <div class="muted description"> {__("cp_dev_debug_switcher.works_from_ip_desc")}</div>
    </label>
    <div class="controls">
        <div style="
                 position: relative;
                 display: inline-block;
             ">
            <input type="text"
                name="works_from_ip"
                id="works_from_ip"
                value="{$works_from_ip}"
            />
            {if !empty($works_from_ip)}
                {if fn_cp_dev_debuger_check_ip()}
                <a style="padding-inline: 10px;">
                    <i class="cs-icon icon-check cm-tooltip" title="{__("cp_dev_debug_switcher.ip_matches")}" style="
                        position: absolute;
                        top: 50%;
                        transform: translateY(-50%);
                        color: green;
                        font-size: 20px;"
                    ></i>
                </a>
                {else}
                <a style="padding-inline: 10px;">
                    <i class="cs-icon icon-warning-sign cm-tooltip" title="{__("cp_dev_debug_switcher.ip_not_matches")}" style="
                        position: absolute;
                        top: 50%;
                        transform: translateY(-50%);
                        color: orange;
                        font-size: 20px;"
                    ></i>
                {/if}
                </a>
            {/if}
        </div>
        <p class="muted description">{__("cp_dev_debug_switcher.works_from_ip_help_desc")}</p>
    </div>
</div>

<div class="control-group setting-wide">
    <label class="control-label" for="enable_error_logging">{__("cp_dev_debug_switcher.enable_error_logging")}: 
        <div class="muted description">{__("cp_dev_debug_switcher.enable_error_logging_desc")}</div>
        {if file_exists($fn_cp_dev_debug_switcher_get_log_file_path)}
            <a class="btn cm-tooltip" id="download_log_file" data-ca-target-id="download_log_file" href="{"cp_error_logging.download?return_url=`$config.current_url|escape:url`&selected_section=settings"|fn_url}" style="width: 158px;">
                <span class="cs-icon icon-download"></span>
                {__("cp_dev_debug_switcher.download_log_file")}
            </a>

            <a class="btn cm-tooltip" id="delete_log_file" data-ca-target-id="delete_log_file" href="{"cp_error_logging.delete?return_url=`$config.current_url|escape:url`&selected_section=settings"|fn_url}" style="margin-top: 5px; color: red; width: 158px;">
                <span class="cs-icon icon-trash"></span>
                {__("cp_dev_debug_switcher.delete_log_file")}
            </a>
        {/if}
    </label>

    <div class="controls">
        <label class="checkbox">
            <input type="hidden" name="enable_error_logging" value="{"YesNo::NO"|enum}" />
            <input type="checkbox"
                name="enable_error_logging"
                id="enable_error_logging"
                value="{"YesNo::YES"|enum}"
                {if $enable_error_logging === "YesNo::YES"|enum}
                    checked="checked"
                {/if}
            />
        </label>
    </div>
</div>

<div class="control-group setting-wide">
    <label class="control-label" for="save_mail_message">{__("cp_dev_debug_switcher.save_mail_message")}: 
        <div class="muted description">{__("cp_dev_debug_switcher.save_mail_message_desc")}</div>
    </label>

    <div class="controls">
        <label class="checkbox">
            <input type="hidden" name="save_mail_message" value="{"YesNo::NO"|enum}" />
            <input type="checkbox"
                name="save_mail_message"
                id="save_mail_message"
                value="{"YesNo::YES"|enum}"
                {if $save_mail_message === "YesNo::YES"|enum}
                    checked="checked"
                {/if}
            />
        </label>
    </div>
</div>

<script>
$('.settings').change(function() {
  var isAnyChecked = $('.settings:checked').length > 0;
  var targetId = $(this).data('target');
  var $inputField = $('#' + targetId);

  if (isAnyChecked) {
    $inputField.show();
  } else {
    $inputField.hide();
  }
});
</script>