<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/views/product_features/components/product_features_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c19c16cf6_64459659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36f3465970fc91a38ca4186d3b47c4feb1e0cb66' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_features/components/product_features_search_form.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/categories/picker.tpl' => 1,
    'tygh:common/select_category.tpl' => 1,
    'tygh:common/select_vendor.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_66aa1c19c16cf6_64459659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','category','all_categories','feature','group','ungroupped_features','storefront_name','type','checkbox','single','checkbox','multiple','selectbox','text','selectbox','number','selectbox','brand_type','others','text','others','number','others','date','updated_last','day_or_days','vendor_features_only','display_on','product','catalog_pages'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="product_features_search_form" method="get">

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
            <div class="sidebar-field">
                <label><?php echo $_smarty_tpl->__("category");?>
:</label>
                <div class="break clear correct-picker-but">
                    <?php if (fn_show_picker("categories",(defined('CATEGORY_THRESHOLD') ? constant('CATEGORY_THRESHOLD') : null))) {?>
                        <?php $_smarty_tpl->_assignInScope('s_cid', (($tmp = $_smarty_tpl->tpl_vars['search']->value['category_ids'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"location_category",'input_name'=>"category_ids",'item_ids'=>$_smarty_tpl->tpl_vars['s_cid']->value,'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("all_categories"),'extra'=>''), 0, false);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"category_ids",'id'=>$_smarty_tpl->tpl_vars['search']->value['category_ids']), 0, false);
?>
                    <?php }?>
                </div>
            </div>
            <div class="sidebar-field">
                <label for="fname"><?php echo $_smarty_tpl->__("feature");?>
:</label>
                <input type="text" name="internal_name" id="fname" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
            </div>
            <div class="control-group">
                <label for="elm_parent_id" class="control-label"><?php echo $_smarty_tpl->__("group");?>
:</label>
                <div class="controls">
                    <select name="parent_id" id="elm_parent_id">
                        <option value="">--</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['parent_id'] === "0") {?>selected="selected"<?php }?> value="0"><?php echo $_smarty_tpl->__("ungroupped_features");?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_features']->value, 'group_feature');
$_smarty_tpl->tpl_vars['group_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_feature']->value) {
$_smarty_tpl->tpl_vars['group_feature']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_feature']->value['feature_id'] == $_smarty_tpl->tpl_vars['search']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>
            <div class="group form-horizontal">
                <div class="control-group">
                    <label for="fname"><?php echo $_smarty_tpl->__("storefront_name");?>
:</label>
                    <input type="text" name="description" id="fname" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['description'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
                </div>
            </div>
            <div class="group form-horizontal">

                <?php echo $_smarty_tpl->__("type");?>


                <div class="table-wrapper">
                    <table width="100%">
                        <tr class="nowrap">
                            <td><label for="elm_checkbox_single" class="checkbox"><input id="elm_checkbox_single"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array(smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX"),$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX"), ENT_QUOTES, 'UTF-8');?>
"/><?php echo $_smarty_tpl->__("checkbox");?>
:&nbsp;<?php echo $_smarty_tpl->__("single");?>
</label></td>
                            <td><label for="elm_checkbox_multiple" class="checkbox"><input id="elm_checkbox_multiple" type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array(smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX"),$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX"), ENT_QUOTES, 'UTF-8');?>
"/><?php echo $_smarty_tpl->__("checkbox");?>
:&nbsp;<?php echo $_smarty_tpl->__("multiple");?>
</label></td>
                            <td><label for="elm_selectbox_text" class="checkbox"><input id="elm_selectbox_text"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"),$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"), ENT_QUOTES, 'UTF-8');?>
"/><?php echo $_smarty_tpl->__("selectbox");?>
:&nbsp;<?php echo $_smarty_tpl->__("text");?>
</label></td>
                            <td><label for="elm_selectbox_number" class="checkbox"><input id="elm_selectbox_number"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array(smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX"),$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX"), ENT_QUOTES, 'UTF-8');?>
"/><?php echo $_smarty_tpl->__("selectbox");?>
:&nbsp;<?php echo $_smarty_tpl->__("number");?>
</label></td>
                        </tr>
                        <tr>
                            <td><label for="elm_selectbox_brand_type" class="checkbox"><input id="elm_selectbox_brand_type"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array(smarty_modifier_enum("ProductFeatures::EXTENDED"),$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFeatures::EXTENDED"), ENT_QUOTES, 'UTF-8');?>
"/><?php echo $_smarty_tpl->__("selectbox");?>
:&nbsp;<?php echo $_smarty_tpl->__("brand_type");?>
</label></td>
                            <td><label for="elm_others_text" class="checkbox"><input id="elm_others_text"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array(smarty_modifier_enum("ProductFeatures::TEXT_FIELD"),$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFeatures::TEXT_FIELD"), ENT_QUOTES, 'UTF-8');?>
"/><?php echo $_smarty_tpl->__("others");?>
:&nbsp;<?php echo $_smarty_tpl->__("text");?>
</label></td>
                            <td><label for="elm_others_number" class="checkbox"><input id="elm_others_number"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array(smarty_modifier_enum("ProductFeatures::NUMBER_FIELD"),$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFeatures::NUMBER_FIELD"), ENT_QUOTES, 'UTF-8');?>
"/><?php echo $_smarty_tpl->__("others");?>
:&nbsp;<?php echo $_smarty_tpl->__("number");?>
</label></td>
                            <td><label for="elm_others_date" class="checkbox"><input id="elm_others_date"  type="checkbox" name="feature_types[]" <?php if (smarty_modifier_in_array(smarty_modifier_enum("ProductFeatures::DATE"),$_smarty_tpl->tpl_vars['search']->value['feature_types'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFeatures::DATE"), ENT_QUOTES, 'UTF-8');?>
"/><?php echo $_smarty_tpl->__("others");?>
:&nbsp;<?php echo $_smarty_tpl->__("date");?>
</label></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row-fluid">
                <div class="group span6 form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="elm_updated_in_days"><?php echo $_smarty_tpl->__("updated_last");?>
</label>
                        <div class="controls">
                            <input type="text" name="updated_in_days" id="elm_updated_in_days" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['updated_in_days'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />&nbsp;&nbsp;<?php echo $_smarty_tpl->__("day_or_days");?>

                        </div>
                    </div>
                </div>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "search_form_company", null, null);?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:search_form_company"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:search_form_company"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (fn_string_not_empty((($tmp = $_smarty_tpl->tpl_vars['picker_selected_company']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>
                            <input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_selected_company']->value, ENT_QUOTES, 'UTF-8');?>
" />
                        <?php } else { ?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:search_form_company"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'search_form_company'))) {?>
                    <div class="group span6 form-horizontal">
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'search_form_company');?>

                    </div>
                <?php }?>
            </div>

            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <div class="group form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="elm_vendor_features_only"><?php echo $_smarty_tpl->__("vendor_features_only");?>
</label>
                        <div class="controls">
                            <input type="hidden" name="vendor_features_only" value="N" />
                            <input type="checkbox" value="Y"<?php if ($_smarty_tpl->tpl_vars['search']->value['vendor_features_only'] == smarty_modifier_enum("YesNo::YES")) {?> checked="checked"<?php }?> name="vendor_features_only"  id="elm_vendor_features_only" />
                        </div>
                    </div>
                </div>
            <?php }?>

            <div class="group form-horizontal">
                <div class="control-group">
                    <label class="control-label" for="elm_display_on"><?php echo $_smarty_tpl->__("display_on");?>
:</label>
                    <div class="controls">
                        <select name="display_on" id="elm_display_on">
                            <option value="">--</option>
                            <option value="product" <?php if ($_smarty_tpl->tpl_vars['search']->value['display_on'] == "product") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("product");?>
</option>
                            <option value="catalog" <?php if ($_smarty_tpl->tpl_vars['search']->value['display_on'] == "catalog") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("catalog_pages");?>
</option>
                        </select>
                    </div>
                </div>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:search_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"product_features",'method'=>"GET"), 0, false);
?>
    </form>
</div><?php }
}
