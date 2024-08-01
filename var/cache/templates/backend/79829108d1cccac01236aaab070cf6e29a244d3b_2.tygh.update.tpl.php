<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/views/product_features/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c19528123_73876796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79829108d1cccac01236aaab070cf6e29a244d3b' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_features/update.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/copy_on_type.tpl' => 1,
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:pickers/categories/picker.tpl' => 1,
    'tygh:views/product_features/components/variants_list.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 2,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66aa1c19528123_73876796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','variants','categories','product_feature.feature_style.','product_feature.filter_style.','product_feature.purpose','product_feature.purpose.','ttc_product_feature.purpose','product_feature.purpose.','product_feature.feature_style','ttc_product_feature.feature_style','product_feature.filter_style','warning_variants_removal','ttc_product_feature.filter_style','group','none','feature_code','position','description','feature_display_on_product','tt_views_product_features_update_feature_display_on_product','feature_display_on_catalog','tt_views_product_features_update_feature_display_on_catalog','feature_display_on_header','prefix','tt_views_product_features_update_prefix','suffix','tt_views_product_features_update_suffix','text_all_categories_included'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/product_feature_purpose.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/product_features.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('selectable_group', smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"));
$_smarty_tpl->_assignInScope('selectable_group', (smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")).($_smarty_tpl->tpl_vars['selectable_group']->value));
$_smarty_tpl->_assignInScope('selectable_group', (smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")).($_smarty_tpl->tpl_vars['selectable_group']->value));
$_smarty_tpl->_assignInScope('selectable_group', (smarty_modifier_enum("ProductFeatures::EXTENDED")).($_smarty_tpl->tpl_vars['selectable_group']->value));?>

<?php if ($_smarty_tpl->tpl_vars['feature']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['feature']->value['feature_id']);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['is_group']->value == true) {?>
        <?php $_smarty_tpl->_assignInScope('id', (defined('NEW_FEATURE_GROUP_ID') ? constant('NEW_FEATURE_GROUP_ID') : null));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('id', 0);?>
    <?php }
}?>

<?php if ($_REQUEST['selected_section']) {?>
    <?php $_smarty_tpl->_assignInScope('active_tab', $_REQUEST['selected_section']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('active_tab', "tab_feature_details_".((string)$_smarty_tpl->tpl_vars['id']->value));
}?>

<?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['feature']->value,"product_features"));?>

<?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
    <?php $_smarty_tpl->_assignInScope('disable_company_picker', true);
}?>

<?php $_smarty_tpl->_assignInScope('hide_inputs_class', '');?>

<?php if (fn_check_form_permissions('') || !$_smarty_tpl->tpl_vars['allow_save']->value) {?>
    <?php $_smarty_tpl->_assignInScope('hide_inputs_class', "cm-hide-inputs");?>
    <?php $_smarty_tpl->_assignInScope('hide_categories_delete', true);
}?>

<?php $_smarty_tpl->_assignInScope('action_context', (($tmp = $_smarty_tpl->tpl_vars['action_context']->value ?? null)===null||$tmp==='' ? $_REQUEST['_action_context'] ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<div id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
      method="post"
      name="update_features_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
      class="<?php if ($_smarty_tpl->tpl_vars['ajax_mode']->value) {?>cm-ajax <?php }?>form-horizontal form-edit cm-disable-empty-files <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hide_inputs_class']->value, ENT_QUOTES, 'UTF-8');?>
"
      enctype="multipart/form-data"
      <?php if ($_smarty_tpl->tpl_vars['action_context']->value) {?>data-ca-ajax-done-event="ce.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['action_context']->value, ENT_QUOTES, 'UTF-8');?>
.product_feature_save"<?php }?>
>
<input type="hidden" class="cm-no-hide-input" name="feature_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if (!$_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<input type="hidden" class="cm-no-hide-input" name="redirect_url" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['return_url']->value ?? null)===null||$tmp==='' ? $_REQUEST['return_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs cm-track">
    <ul class="nav nav-tabs">
        <li id="tab_feature_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js <?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "tab_feature_details_".((string)$_smarty_tpl->tpl_vars['id']->value)) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <li id="tab_feature_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] && strpos($_smarty_tpl->tpl_vars['selectable_group']->value,$_smarty_tpl->tpl_vars['feature']->value['feature_type']) === false || !$_smarty_tpl->tpl_vars['feature']->value) {?>hidden<?php }?> <?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "tab_feature_variants_".((string)$_smarty_tpl->tpl_vars['id']->value)) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("variants");?>
</a></li>
        <li id="tab_feature_categories_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?> hidden<?php }?> <?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "tab_feature_categories_".((string)$_smarty_tpl->tpl_vars['id']->value)) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("categories");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <div id="content_tab_feature_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <fieldset>
        <?php $_smarty_tpl->_subTemplateRender("tygh:components/copy_on_type.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('source_value'=>$_smarty_tpl->tpl_vars['feature']->value['internal_name'],'source_name'=>"feature_data[internal_name]",'target_value'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'target_name'=>"feature_data[description]",'type'=>"feature_name"), 0, false);
?>

        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <?php $_smarty_tpl->_assignInScope('zero_company_id_name_lang_var', "none");?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"feature_data[company_id]",'id'=>"elm_feature_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'disable_company_picker'=>$_smarty_tpl->tpl_vars['disable_company_picker']->value,'selected'=>(($tmp = $_smarty_tpl->tpl_vars['feature']->value['company_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company_id']->value ?? null : $tmp),'zero_company_id_name_lang_var'=>$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['is_group']->value || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::GROUP")) {?>
            <input type="hidden" name="feature_data[feature_type]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFeatures::GROUP"), ENT_QUOTES, 'UTF-8');?>
" />
        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purposes']->value, 'purpose_data', false, 'purpose');
$_smarty_tpl->tpl_vars['purpose_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['purpose']->value => $_smarty_tpl->tpl_vars['purpose_data']->value) {
$_smarty_tpl->tpl_vars['purpose_data']->do_else = false;
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purpose_data']->value['styles_map'], 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['feature_type'] === smarty_modifier_enum("ProductFeatures::NUMBER_FIELD") && $_smarty_tpl->tpl_vars['feature']->value['feature_type'] != smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['purposes']) ? $_smarty_tpl->tpl_vars['purposes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['purpose']->value]['styles_map'][$_smarty_tpl->tpl_vars['key']->value] = null;
$_smarty_tpl->_assignInScope('purposes', $_tmp_array);?>
                        <?php continue 1;?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['feature_style']) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['purposes']) ? $_smarty_tpl->tpl_vars['purposes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['purpose']->value]['styles_map'][$_smarty_tpl->tpl_vars['key']->value]['feature_style_text'] = $_smarty_tpl->__("product_feature.feature_style.".((string)$_smarty_tpl->tpl_vars['item']->value['feature_style']));
$_smarty_tpl->_assignInScope('purposes', $_tmp_array);?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['filter_style']) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['purposes']) ? $_smarty_tpl->tpl_vars['purposes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['purpose']->value]['styles_map'][$_smarty_tpl->tpl_vars['key']->value]['filter_style_text'] = $_smarty_tpl->__("product_feature.filter_style.".((string)$_smarty_tpl->tpl_vars['item']->value['filter_style']));
$_smarty_tpl->_assignInScope('purposes', $_tmp_array);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div
                class="control-group cm-feature-purpose control-group-feature-purpose"
                data-ca-feature-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-feature-purpose="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['feature']->value['purpose'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_purpose']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-feature-purposes="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['purposes']->value), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-feature-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_type'], ENT_QUOTES, 'UTF-8');?>
"
                data-ca-feature-type-elem-id="elm_feature_feature_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-feature-style="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_style'], ENT_QUOTES, 'UTF-8');?>
"
                data-ca-feature-style-elem-id="elm_feature_feature_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-filter-style="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['filter_style'], ENT_QUOTES, 'UTF-8');?>
"
                data-ca-filter-style-elem-id="elm_feature_filter_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-variants-list-elem-id="content_tab_feature_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-variants-remove-warning-elem-id="warning_feature_change_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

                <label class="control-label cm-required cm-multiple-radios" for="elm_feature_purpose_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("product_feature.purpose");?>
</label>
                <div class="controls">
                    <div class="row-fluid">
                        <div class="span6">
                            <ul class="unstyled">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purposes']->value, 'purpose_data', false, 'purpose');
$_smarty_tpl->tpl_vars['purpose_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['purpose']->value => $_smarty_tpl->tpl_vars['purpose_data']->value) {
$_smarty_tpl->tpl_vars['purpose_data']->do_else = false;
?>
                                    <li>

                                        <label for="elm_feature_purpose_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['purpose']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio inline"><?php echo $_smarty_tpl->__("product_feature.purpose.".((string)$_smarty_tpl->tpl_vars['purpose']->value));?>
<input
                                                type="radio"
                                                name="feature_data[purpose]"
                                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['purpose']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                id="elm_feature_purpose_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['purpose']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                data-ca-purpose-description-elem-id="elm_feature_purpose_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['purpose']->value, ENT_QUOTES, 'UTF-8');?>
_description"
                                                <?php if ((($tmp = $_smarty_tpl->tpl_vars['feature']->value['purpose'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_purpose']->value ?? null : $tmp) == $_smarty_tpl->tpl_vars['purpose']->value) {?>checked="checked"<?php }?>>
                                        </label>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                            <p class="muted description"><?php echo $_smarty_tpl->__("ttc_product_feature.purpose");?>
</p>
                        </div>
                        <div class="span6">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purposes']->value, 'purpose_data', false, 'purpose');
$_smarty_tpl->tpl_vars['purpose_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['purpose']->value => $_smarty_tpl->tpl_vars['purpose_data']->value) {
$_smarty_tpl->tpl_vars['purpose_data']->do_else = false;
?>
                                <div id="elm_feature_purpose_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['purpose']->value, ENT_QUOTES, 'UTF-8');?>
_description" class="description cm-feature-purpose-description <?php if ((($tmp = $_smarty_tpl->tpl_vars['feature']->value['purpose'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_purpose']->value ?? null : $tmp) != $_smarty_tpl->tpl_vars['purpose']->value) {?>hidden<?php }?>"><small><?php echo $_smarty_tpl->__("product_feature.purpose.".((string)$_smarty_tpl->tpl_vars['purpose']->value).".description");?>
</small></div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label cm-required" for="elm_feature_feature_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("product_feature.feature_style");?>
</label>
                <div class="controls">
                    <select name="feature_data[feature_style]" id="elm_feature_feature_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"></select>
                    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_product_feature.feature_style");?>
</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label cm-required" for="elm_feature_filter_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("product_feature.filter_style");?>
</label>
                <div class="controls">
                    <input type="hidden" name="feature_data[filter_style]" value="" />
                    <select name="feature_data[filter_style]" id="elm_feature_filter_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"></select>

                    <div class="text-error feature_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
 hidden" id="warning_feature_change_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="arrow"></div><div class="message"><p><?php echo $_smarty_tpl->__("warning_variants_removal");?>
</p></div></div>
                    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_product_feature.filter_style");?>
</p>
                </div>
            </div>

            <input type="hidden" name="feature_data[feature_type]" id="elm_feature_feature_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"  class="<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>cm-new-feature<?php }?>" data-ca-default-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_type'], ENT_QUOTES, 'UTF-8');?>
" data-ca-feature-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_type'], ENT_QUOTES, 'UTF-8');?>
" />

            <div class="control-group">
                <label class="control-label" for="elm_feature_group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("group");?>
</label>
                <div class="controls">
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::GROUP")) {?>-<?php } else { ?>
                        <select name="feature_data[parent_id]" id="elm_feature_group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-feature-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-feature-group">
                            <option value="0">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_features']->value, 'group_feature');
$_smarty_tpl->tpl_vars['group_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_feature']->value) {
$_smarty_tpl->tpl_vars['group_feature']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['group_feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::GROUP")) {?>
                                    <option data-ca-display-on-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['display_on_product'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-catalog="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['display_on_catalog'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-header="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['display_on_header'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_feature']->value['feature_id'] == $_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    <?php }?>
                </div>
            </div>
        <?php }?>


        <div class="control-group">
            <label class="control-label" for="elm_feature_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_code");?>
</label>
            <div class="controls">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:feature_code"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:feature_code"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <input type="text" size="3" name="feature_data[feature_code]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_code'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" id="elm_feature_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:feature_code"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        </div>


        <div class="control-group">
            <label class="control-label" for="elm_feature_position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("position");?>
</label>
            <div class="controls">
                <input type="text" size="3" name="feature_data[position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" id="elm_feature_position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
</label>
            <div class="controls">
                <textarea name="feature_data[full_description]" cols="55" rows="4" class="cm-wysiwyg input-textarea-long" id="elm_feature_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['full_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"feature_data[status]",'id'=>"elm_feature_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['feature']->value,'hidden'=>true), 0, false);
?>

        <div class="control-group">
            <label class="control-label" for="elm_feature_display_on_product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_display_on_product");?>
</label>
            <div class="controls">
                <input type="hidden" name="feature_data[display_on_product]" value="N" />
                <input id="elm_feature_display_on_product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="feature_data[display_on_product]" value="Y" data-ca-display-id="OnProduct" <?php if ($_smarty_tpl->tpl_vars['feature']->value['display_on_product'] == "Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id'] && $_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['feature']->value['parent_id']]['display_on_product'] == "Y") {?>disabled="disabled"<?php }?>/>
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_product_features_update_feature_display_on_product");?>
</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_display_on_catalog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_display_on_catalog");?>
</label>
            <div class="controls">
                <input type="hidden" name="feature_data[display_on_catalog]" value="N" />
                <input id="elm_feature_display_on_catalog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="feature_data[display_on_catalog]" value="Y"  data-ca-display-id="OnCatalog" <?php if ($_smarty_tpl->tpl_vars['feature']->value['display_on_catalog'] == "Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id'] && $_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['feature']->value['parent_id']]['display_on_catalog'] == "Y") {?>disabled="disabled"<?php }?> />
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_product_features_update_feature_display_on_catalog");?>
</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_display_on_header_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_display_on_header");?>
</label>
            <div class="controls">
            <input type="hidden" name="feature_data[display_on_header]" value="N" />
            <input id="elm_feature_display_on_header_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="feature_data[display_on_header]" value="Y"  data-ca-display-id="OnHeader" <?php if ($_smarty_tpl->tpl_vars['feature']->value['display_on_header'] == "Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id'] && $_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['feature']->value['parent_id']]['display_on_header'] == "Y") {?>disabled="disabled"<?php }?> />
            </div>
        </div>

        <?php if ((!$_smarty_tpl->tpl_vars['feature']->value && !$_smarty_tpl->tpl_vars['is_group']->value) || ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] && $_smarty_tpl->tpl_vars['feature']->value['feature_type'] != smarty_modifier_enum("ProductFeatures::GROUP"))) {?>
        <div class="control-group">
            <label class="control-label" for="elm_feature_prefix_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("prefix");?>
</label>
            <div class="controls">
                <input type="text" name="feature_data[prefix]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
" id="elm_feature_prefix_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_product_features_update_prefix");?>
</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_suffix_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("suffix");?>
</label>
            <div class="controls">
                <input type="text" name="feature_data[suffix]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
" id="elm_feature_suffix_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_product_features_update_suffix");?>
</p>
            </div>
        </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:properties"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:properties"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:properties"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </fieldset>
    <!--content_tab_feature_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if (!$_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?>

    <div class="hidden" id="content_tab_feature_categories_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['categories_path']) {?>
        <?php $_smarty_tpl->_assignInScope('items', explode(",",$_smarty_tpl->tpl_vars['feature']->value['categories_path']));?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_ids'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value,'multiple'=>true,'input_name'=>"feature_data[categories_path]",'item_ids'=>$_smarty_tpl->tpl_vars['items']->value,'data_id'=>"category_ids_".((string)$_smarty_tpl->tpl_vars['id']->value),'no_item_text'=>$_smarty_tpl->__("text_all_categories_included"),'use_keys'=>"N",'owner_company_id'=>$_smarty_tpl->tpl_vars['feature']->value['company_id'],'but_meta'=>"pull-right",'hide_delete_button'=>(($tmp = $_smarty_tpl->tpl_vars['hide_categories_delete']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)), 0, false);
?>
    <!--content_tab_feature_categories_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>

    <?php if (($_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['id']->value != (defined('NEW_FEATURE_GROUP_ID') ? constant('NEW_FEATURE_GROUP_ID') : null)) || !$_smarty_tpl->tpl_vars['id']->value) {?>
    <div class="hidden" data-ca-variants-list="container" id="content_tab_feature_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature_type'=>$_smarty_tpl->tpl_vars['feature']->value['feature_type'],'feature'=>$_smarty_tpl->tpl_vars['feature']->value), 0, false);
?>
    <!--content_tab_feature_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>

</div>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="buttons-container">
        <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
            <?php $_smarty_tpl->_assignInScope('hide_first_button', true);?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[product_features.update]",'cancel_action'=>"close",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'save'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'cancel_meta'=>"bulkedit-unchanged"), 0, false);
?>
    </div>
<?php } else { ?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit-link",'but_name'=>"dispatch[product_features.update]",'but_target_form'=>"update_features_form_".((string)$_smarty_tpl->tpl_vars['id']->value),'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
<input type="hidden" name="descr_sl" value="<?php echo htmlspecialchars((string) (defined('DESCR_SL') ? constant('DESCR_SL') : null), ENT_QUOTES, 'UTF-8');?>
" />

</form>
<!--content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox');?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_languages'=>true), 0, false);
}
}
}
