<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/views/product_features/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c1904ab10_47454291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a67f236fabf45a96b7350662e5fb806fbfcb4406' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_features/manage.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/table_col_head.tpl' => 5,
    'tygh:common/tooltip.tpl' => 1,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/popupbox.tpl' => 4,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:views/product_features/update.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/product_features/components/product_features_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66aa1c1904ab10_47454291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('name_short','internal_feature_name_tooltip','storefront_name_short','storefront_name','product_features_of_marketplace_are_not_selectable','product_features_are_not_selectable_for_context_menu','feature','group','view','categories','edit','delete','view','status','no_data','new_feature','new_feature','features'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/product_features_bulk_edit.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>
    <?php $_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('product_feature_statuses', fn_get_default_statuses('',true));?>
    <?php $_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("product_features","update","admin","POST"));?>
    <?php $_smarty_tpl->_assignInScope('has_available_features', empty($_smarty_tpl->tpl_vars['runtime']->value['company_id']) || in_array($_smarty_tpl->tpl_vars['runtime']->value['company_id'],array_column($_smarty_tpl->tpl_vars['features']->value,'company_id')));?>

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_product_features_form" id="manage_product_features_form">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_features_table", null, null);?>
            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="items-container<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?> longtap-selection" id="update_features_list">
                <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
                    <div class="table-responsive-wrapper">
                        <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden">
                            <thead 
                                data-ca-bulkedit-default-object="true" 
                                data-ca-bulkedit-component="defaultObject"
                            >
                            <tr>
                                <th class="left mobile-hide table__check-items-column">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['product_feature_statuses']->value,'is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_available_features']->value,'meta'=>"table__check-items"), 0, false);
?>
                                    <input type="checkbox"
                                        class="bulkedit-toggler hide"
                                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                </th>
                                <th width="29%">
                                    <div class="th-text-overflow-wrapper">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"name",'text'=>$_smarty_tpl->__("name_short")), 0, false);
?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->__("internal_feature_name_tooltip")), 0, false);
?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"storefront_name",'text'=>$_smarty_tpl->__("storefront_name_short"),'title'=>$_smarty_tpl->__("storefront_name")), 0, true);
?>
                                    </div>
                                </th>
                                <th width="20%">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"group"), 0, true);
?>
                                </th>
                                <th class="mobile-hide" width="33%">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"categories"), 0, true);
?>
                                </th>
                                <th class="mobile-hide" width="8%">&nbsp;</th>
                                <th width="10%" class="right">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"status"), 0, true);
?>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'p_feature');
$_smarty_tpl->tpl_vars['p_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p_feature']->value) {
$_smarty_tpl->tpl_vars['p_feature']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['p_feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>
                                    <?php $_smarty_tpl->_assignInScope('show_in_popup', false);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('show_in_popup', true);?>
                                <?php }?>

                                <?php $_smarty_tpl->_assignInScope('non_editable', !$_smarty_tpl->tpl_vars['has_permission']->value || !fn_allow_save_object($_smarty_tpl->tpl_vars['p_feature']->value,"product_features"));?>

                                <?php if ($_smarty_tpl->tpl_vars['p_feature']->value['parent_id'] && (isset($_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['p_feature']->value['parent_id']]))) {?>
                                    <?php $_smarty_tpl->_assignInScope('group_feature', $_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['p_feature']->value['parent_id']]);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('group_feature', false);?>
                                <?php }?>
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['show_in_popup']->value) {
echo "&return_url=";
echo (string)$_smarty_tpl->tpl_vars['r_url']->value;
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('href_edit', "product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']).$_prefixVariable1);?>
                                <?php $_smarty_tpl->_assignInScope('href_delete', "product_features.delete?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value));?>
                                <?php $_smarty_tpl->_assignInScope('feature_category_ids', $_smarty_tpl->tpl_vars['p_feature']->value['categories_path'] ? (explode(",",$_smarty_tpl->tpl_vars['p_feature']->value['categories_path'])) : (array()));?>

                                <tr class="cm-row-item cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['p_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['has_permission']->value) {?> cm-longtap-target<?php }
if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> longtap-selection-disable<?php }?>" 
                                    data-ct-product_features="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-longtap-action="setCheckBox"
                                    data-ca-longtap-target="input.cm-item"
                                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-category-ids="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value ? (smarty_modifier_to_json(array())) : (smarty_modifier_to_json($_smarty_tpl->tpl_vars['feature_category_ids']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-feature-group="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value ? "true" : "false", ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['non_editable']->value && $_smarty_tpl->tpl_vars['has_permission']->value) {?>
                                        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                                            data-ca-bulkedit-disabled-notice="<?php echo $_smarty_tpl->__("product_features_of_marketplace_are_not_selectable");?>
"
                                        <?php } else { ?>
                                            data-ca-bulkedit-disabled-notice="<?php echo $_smarty_tpl->__("product_features_are_not_selectable_for_context_menu");?>
"
                                        <?php }?>
                                    <?php }?>
                                >
                                    <td class="left mobile-hide table__check-items-cell">
                                        <input type="checkbox" name="feature_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
" class="hide cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['p_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
                                    </td>
                                    <td width="29%" data-th="<?php echo $_smarty_tpl->__("feature");?>
">
                                        <div class="object-group-link-wrap">
                                            <a <?php if (!$_smarty_tpl->tpl_vars['show_in_popup']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href_edit']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="row-status cm-external-click bulkedit-deselect <?php if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> no-underline<?php }?>" data-ca-external-click-id="opener_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>
</a>
                                            <span class="muted"><small> #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
</small></span>
                                            <div><small><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</small></div>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['p_feature']->value), 0, true);
?>
                                        </div>
                                    </td>
                                    <td width="20%" data-th="<?php echo $_smarty_tpl->__("group");?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['group_feature']->value) {?>
                                            <div class="object-group-link-wrap cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['group_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['group_feature']->value['status'] != "A") {?>
                                                    <?php $_smarty_tpl->_assignInScope('group_link_class', "row-status");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('group_link_class', '');?>
                                                <?php }?>
                                                <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link_class'=>((string)$_smarty_tpl->tpl_vars['group_link_class']->value),'id'=>"group".((string)$_smarty_tpl->tpl_vars['group_feature']->value['feature_id']),'link_text'=>$_smarty_tpl->tpl_vars['group_feature']->value['internal_name'],'text'=>$_smarty_tpl->tpl_vars['group_feature']->value['internal_name'],'act'=>"edit",'href'=>"product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['group_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'no_icon_link'=>true), 0, true);
?>
                                                <?php } else { ?>
                                                    <span class="unedited-element block"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['group_feature']->value['internal_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("view") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                                                <?php }?>
                                            </div>
                                        <?php } else { ?>
                                            -
                                        <?php }?>
                                    </td>
                                    <td width="33%" class="mobile-hide" data-th="<?php echo $_smarty_tpl->__("categories");?>
">
                                        <div class="row-status object-group-details">
                                        <?php if ($_smarty_tpl->tpl_vars['group_feature']->value) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['group_feature']->value['feature_description'];?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['p_feature']->value['feature_description'];?>

                                        <?php }?>
                                        </div>
                                    </td>
                                    <td width="8%" class="nowrap mobile-hide">
                                        <div class="hidden-tools">
                                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                                <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                                    <?php if (!$_smarty_tpl->tpl_vars['show_in_popup']->value) {?>
                                                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>$_smarty_tpl->tpl_vars['href_edit']->value), true);?>
</li>
                                                    <?php } else { ?>
                                                        <li><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']),'text'=>$_smarty_tpl->tpl_vars['p_feature']->value['description'],'act'=>"edit",'href'=>$_smarty_tpl->tpl_vars['href_edit']->value,'no_icon_link'=>true), 0, true);
?></li>
                                                    <?php }?>
                                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->__("delete"),'href'=>$_smarty_tpl->tpl_vars['href_delete']->value,'class'=>"cm-confirm cm-ajax cm-ajax-force cm-ajax-full-render cm-delete-row",'data'=>array("data-ca-target-id"=>"pagination_contents"),'method'=>"POST"), true);?>
</li>
                                                <?php } else { ?>
                                                    <li><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']),'text'=>$_smarty_tpl->tpl_vars['p_feature']->value['description'],'act'=>"edit",'link_text'=>$_smarty_tpl->__("view"),'href'=>$_smarty_tpl->tpl_vars['href_edit']->value,'no_icon_link'=>true), 0, true);
?></li>
                                                <?php }?>
                                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                                        </div>
                                    </td>
                                    <td width="10%" class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'],'status'=>$_smarty_tpl->tpl_vars['p_feature']->value['status'],'hidden'=>true,'object_id_name'=>"feature_id",'table'=>"product_features",'update_controller'=>"product_features"), 0, true);
?>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                <?php }?>
            <!--update_features_list--></div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_product_features_form",'context_menu_class'=>"bulk-edit--product-features",'object'=>"product_features",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_features_table'),'has_permission'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0, false);
?>
    </form>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker_2", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>array(),'in_popup'=>true,'return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_feature",'text'=>$_smarty_tpl->__("new_feature"),'title'=>$_smarty_tpl->__("new_feature"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker_2'),'act'=>"general",'icon'=>"icon-plus"), 0, true);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"product_features.manage",'view_type'=>"product_features"), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/product_features_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"product_features.manage"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'class'=>"mobile-hide"), true);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("features"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
