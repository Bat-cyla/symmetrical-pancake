{$device_prefix=''}
{if $device}
{$device_prefix="_`$device`"}
<div class="abt-ut2-doc">{__('abt__ut2.banner.warning')}</div>
{/if}
<h4 class="ty-subheader">{__("abt__ut2.banner.params_of_block")}</h4>
{$field="color_scheme"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach ['light', 'dark'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="content_valign"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
<option value="top" {if $banner.$elm == 'top'} selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.top")}</option>
<option value="center" {if $banner.$elm == 'center' || !$banner.$elm} selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.center")}</option>
<option value="bottom" {if $banner.$elm == 'bottom'} selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.bottom")}</option>
</select>
</div>
</div>
{$field="content_align"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
<option value="left" {if $banner.$elm == 'left'} selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.left")}</option>
<option value="center" {if $banner.$elm == 'center' || !$banner.$elm} selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.center")}</option>
<option value="right" {if $banner.$elm == 'right'} selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.right")}</option>
</select>
</div>
</div>
{$field="padding"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls cm-trim abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm|default:"20px 20px 20px 20px"}" size="25"/>
</div>
</div>
{$field="content_full_width"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="hidden" name="banner_data[{$elm}]" value="N"/>
<input type="checkbox" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="Y" {if $banner.$elm == "YesNo::YES"|enum}checked="checked"{/if}/>
</div>
</div>
<hr>
<h4 class="ty-subheader">{__("abt__ut2.banner.params_of_title")}</h4>
{$field="title"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls cm-trim abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm}" size="25" class="span10"/>
</div>
</div>
{$field="title_font_size"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls cm-trim abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm|default:"18px"}" size="25" class="input-mini"/>
</div>
</div>
{$field="title_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>
{$field="title_font_weight"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach ['300', '400', '700', '900'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="title_tag"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach ['div', 'h1', 'h2', 'h3'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="title_shadow"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="hidden" name="banner_data[{$elm}]" value="N"/>
<input type="checkbox" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="Y" {if $banner.$elm == "YesNo::YES"|enum}checked="checked"{/if}/>
</div>
</div>
<hr>
<h4 class="ty-subheader">{__("abt__ut2.banner.params_of_description")}</h4>
{$field="description"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls cm-trim abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<textarea id="elm_banner_{$elm}" name="banner_data[{$elm}]" cols="35" rows="6" class="span10">{$banner.$elm}</textarea>
</div>
</div>
{$field="description_font_size"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls cm-trim abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm|default:"13px"}" size="25" class="input-small"/>
</div>
</div>
{$field="description_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>
{$field="description_bg_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>
{if $banner.banner_id}
<hr/>
<h4 class="ty-subheader">{__("image")}</h4>
{** Control the type of internal image **}
<script>
function fn_change_object_type{$device_prefix}(v) {
var img_obj = $('.control-group.object-image{$device_prefix}');
var vd_obj = $('.control-group.object-video{$device_prefix}');
switch (v){
case 'image':
img_obj.removeClass('hidden');
vd_obj.addClass('hidden');
break;
case 'video':
img_obj.addClass('hidden');
vd_obj.removeClass('hidden');
break;
}
}
</script>
{$field="object"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}" onchange="fn_change_object_type(this.value);">
{foreach ['image', 'video'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="main_image"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner.abt__ut2_object != 'image'} hidden{/if} object-image{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<div id="elm_banner_{$elm}">
{include file="common/attach_images.tpl" image_name=$elm image_object_type="abt__ut2_banners" image_type="ImagePairTypes::MAIN"|enum image_pair=$banner.$elm image_object_id=$banner.abt__ut2_banner_image_id no_detailed=true hide_titles=true}
</div>
</div>
</div>
{$field="youtube_id"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner.abt__ut2_object != 'video'} hidden{/if} object-video{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label cm-trim">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm}" size="25" class="span4"/>
</div>
</div>
{$field="youtube_autoplay"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
{*Value 0 (default): The video will not play automatically when the player loads.*}
{*Value 1: The video will play automatically when the player loads.*}
<div class="control-group{if $banner.abt__ut2_object != 'video'} hidden{/if} object-video{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="hidden" name="banner_data[{$elm}]" value="N"/>
<input type="checkbox" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="Y" {if $banner.$elm == "YesNo::YES"|enum}checked="checked"{/if}/>
</div>
</div>
{$field="youtube_hide_controls"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
{*Value 0: Player controls does not display.*}
{*Value 1 (default): Player controls display.*}
<div class="control-group{if $banner.abt__ut2_object != 'video'} hidden{/if} object-video{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="hidden" name="banner_data[{$elm}]" value="N"/>
<input type="checkbox" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="Y" {if $banner.$elm == "YesNo::YES"|enum}checked="checked"{/if}/>
</div>
</div>
{$field="background_type"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
{$bg_type_field = $elm}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}" onchange="fn_ab__ut2_change_bg_type(this)">
<option value="image"{if $banner.{$bg_type_field}|default:"image" == "image"} selected{/if}>{__("ab__ut2.banners.background_type.image")}</option>
<option value="mp4_video"{if $banner.{$bg_type_field} == "mp4_video"} selected{/if}>{__("ab__ut2.banners.background_type.mp4_video")}</option>
</select>
</div>
</div>
<script>
function fn_ab__ut2_change_bg_type(elem)
{
var val = elem.value;
var clear_id_part = elem.id.slice(0, -('background_type'.length));
var image_wrap = $('#' + clear_id_part + 'background_image').parents('.control-group');
var mp4_wrap = $('#' + clear_id_part + 'background_mp4_video').parents('.control-group');
if (val === 'image') {
image_wrap.removeClass('hidden');
mp4_wrap.addClass('hidden');
} else if (val === 'mp4_video') {
image_wrap.addClass('hidden');
mp4_wrap.removeClass('hidden');
}
}
</script>
{$field="background_image"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner.{$bg_type_field}|default:"image" != "image"} hidden{/if}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<div id="elm_banner_{$elm}">
{include file="common/attach_images.tpl" image_name=$elm image_object_type="abt__ut2_banners" image_type="ImagePairTypes::ADDITIONAL"|enum image_pair=$banner.$elm image_object_id=$banner.abt__ut2_banner_image_id no_detailed=true hide_alt=true hide_titles=true}
</div>
</div>
</div>
{$field="background_mp4_video"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner.{$bg_type_field}|default:"image" != "mp4_video"} hidden{/if}">
<label class="control-label">{__("abt__ut2.banner.params.background_mp4_video")}:</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="elm_banner_{$elm}" class="controls">
{if $banner.$elm}
<div style="width: 100%;" class="upload-file-section">
<p>
{$video_path = urlencode($banner.$elm)}
<a href="{"banners.delete_ut2_video?video_path=$video_path&banner_id=`$banner.banner_id`&type=$elm&redirect_url={$config.current_url|urlencode}"|fn_url}" class="image-delete cm-confirm cm-post delete cm-delete-image-link cm-tooltip" title="{__("delete")}"><span class="cs-icon icon-remove-sign"></span></a>
<span class="upload-filename">{$banner.$elm}</span>
</p>
</div>
{/if}
{include file="common/fileuploader.tpl" var_name="`$elm`[0]" prefix=$elm allowed_ext="mp4"}
</div>
</div>
{$field="background_image_size"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach ['cover', 'contain'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="background_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>
{/if}
<hr>
<h4 class="ty-subheader">{__("abt__ut2.banner.params_of_button")}</h4>
{** Buttons control **}
<script language="javascript">
function fn_button_use{$device_prefix}(el) {
if (!el.checked){
Tygh.$('#abt__ut2{$device_prefix}_button_text,#abt__ut2{$device_prefix}_button_text_color,#abt__ut2{$device_prefix}_button_color').addClass('hidden');
}else{
Tygh.$('#abt__ut2{$device_prefix}_button_text,#abt__ut2{$device_prefix}_button_text_color,#abt__ut2{$device_prefix}_button_color').removeClass('hidden');
}
}
</script>
{$field="button_use"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="hidden" name="banner_data[{$elm}]" value="N"/>
<input type="checkbox" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="Y" {if $banner.$elm == "YesNo::YES"|enum}checked="checked"{/if} onclick="fn_button_use{$device_prefix}(this);"/>
</div>
</div>
{$field="button_text"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_button_use"] == 'N'} hidden{/if}" id="{$elm}">
<label for="elm_banner_{$elm}" class="control-label cm-trim">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm}" size="25"/>
</div>
</div>
{$field="button_text_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_button_use"] == 'N'} hidden{/if}" id="{$elm}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>
{$field="button_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_button_use"] == 'N'} hidden{/if}" id="{$elm}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>
<hr>
<h4 class="ty-subheader">{__("abt__ut2.banner.params_additional")}</h4>
{** content_bg **}
<script language="javascript">
function fn_change_content_bg(e) {
var $ = Tygh.$;
var position = $('.content_bg_position');
var opacity = $('.content_bg_opacity');
var color = $('.content_bg_color');
switch (e.val()) {
case 'none':
position.addClass('hidden');
opacity.addClass('hidden');
color.addClass('hidden');
break;
case 'transparent':
position.removeClass('hidden');
opacity.removeClass('hidden');
color.addClass('hidden');
break;
case 'transparent_blur':
position.removeClass('hidden');
opacity.removeClass('hidden');
color.addClass('hidden');
break;
case 'colored':
position.addClass('hidden');
opacity.addClass('hidden');
color.removeClass('hidden');
break;
}
}
</script>
{$field="content_bg"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
{$content_bg = $banner.$elm}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}" onchange="fn_change_content_bg($(this));">
{foreach ['none', 'transparent', 'transparent_blur', 'colored'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="content_bg_position"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group {$field} {if !in_array($content_bg, ['transparent', 'transparent_blur'])}hidden{/if}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach ['only_under_content', 'full_height', 'whole_banner'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="content_bg_opacity"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group {$field} {if !in_array($content_bg, ['transparent', 'transparent_blur'])}hidden{/if}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach range(10, 80, 5) as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{$e}%</option>
{/foreach}
</select>
</div>
</div>
{$field="content_bg_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group {$field} {if !in_array($content_bg, ['colored'])}hidden{/if}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>
{$field="how_to_open"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{$how_to_opens=['in_this_window', 'in_new_window']}
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach $how_to_opens as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{** Set banner activity period **}
<script language="javascript">
function fn_activate_calendar(el) {
Tygh.$('#elm_banner_abt__ut2_avail_from').prop('disabled', !el.checked);
Tygh.$('#elm_banner_abt__ut2_avail_till').prop('disabled', !el.checked);
if (!el.checked){
Tygh.$('#period_abt__ut2_avail_from,#period_abt__ut2_avail_till').addClass('hidden');
}else{
Tygh.$('#period_abt__ut2_avail_from,#period_abt__ut2_avail_till').removeClass('hidden');
}
}
</script>
{$field="use_avail_period"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="hidden" name="banner_data[{$elm}]" value="N"/>
<input type="checkbox" name="banner_data[{$elm}]" id="elm_banner_{$elm}" {if $banner.$elm == "YesNo::YES"|enum}checked="checked"{/if} value="Y" onclick="fn_activate_calendar(this);"/>
</div>
</div>
{capture name="calendar_disable"}{if $banner.$elm != "YesNo::YES"|enum}disabled="disabled"{/if}{/capture}
{$field="avail_from"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group {if $banner.abt__ut2_use_avail_period == 'N'}hidden{/if}" id="period_{$elm}">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="common/calendar.tpl" date_id="elm_banner_{$elm}" date_name="banner_data[{$elm}]" date_val=$banner.$elm start_year=$settings.Company.company_start_year extra=$smarty.capture.calendar_disable}
</div>
</div>
{$field="avail_till"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group {if $banner.abt__ut2_use_avail_period == 'N'}hidden{/if}" id="period_{$elm}">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="common/calendar.tpl" date_id="elm_banner_{$elm}" date_name="banner_data[{$elm}]" date_val=$banner.$elm start_year=$settings.Company.company_start_year extra=$smarty.capture.calendar_disable}
</div>
</div>
<hr>
{$field="class"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div class="controls cm-trim"><div id="overlay_{$elm}" class="abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}"></div>
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm}" size="25" class="span10"/>
</div>
</div>
<hr>
{$field="data_type"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}" onchange="Tygh.$('div[id*=data_type_]').addClass('hidden');Tygh.$('div[id*=data_type_' + this.value + ']').removeClass('hidden');">
{foreach ['url'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{* data type - URL ***************************************************}
<div id="data_type_url" class="{if $banner.abt__ut2_data_type|default:'url' != 'url'}hidden{/if}">
{$field="url"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label cm-trim {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm}" size="25" class="span10"/>
</div>
</div>
</div>