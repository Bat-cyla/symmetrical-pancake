<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:18:03
  from '/app/www/design/backend/templates/views/product_features/groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1d6bea5e39_82503955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9814c5474a8ff1450252cfeb9b6e8d94883687d8' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_features/groups.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/tooltip.tpl' => 1,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/popupbox.tpl' => 3,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:views/product_features/update.tpl' => 1,
    'tygh:views/product_features/components/product_feature_groups_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66aa1d6bea5e39_82503955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','internal_feature_group_name_tooltip','storefront_name','features','categories','status','product_features_groups_of_marketplace_are_not_selectable','product_feature_groups_are_not_selectable_for_context_menu','name','features','categories','delete','view','status','no_data','new_group','new_group','feature_groups'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php $_smarty_tpl->_assignInScope('show_in_popup', false);?>
    <?php $_smarty_tpl->_assignInScope('has_available_features', empty($_smarty_tpl->tpl_vars['runtime']->value['company_id']) || in_array($_smarty_tpl->tpl_vars['runtime']->value['company_id'],array_column($_smarty_tpl->tpl_vars['features']->value,'company_id')));?>

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_product_features_form" id="manage_product_features_form">
    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">

    <div class="items-container<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>" id="update_features_list">
        <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_features_groups_table", null, null);?>
            <div class="table-responsive-wrapper longtap-selection">
                <table width="100%" class="table table-middle table--relative table-responsive">
                    <thead
                            data-ca-bulkedit-default-object="true"
                            data-ca-bulkedit-component="defaultObject"
                    >
                    <tr>
                        <th class="left" width="6%">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>fn_get_default_status_filters('',true),'is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_available_features']->value), 0, false);
?>

                            <input type="checkbox"
                                   class="bulkedit-toggler hide"
                                   data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                   data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <th width="20%"><?php echo $_smarty_tpl->__("name");
$_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->__("internal_feature_group_name_tooltip")), 0, false);
?> / <?php echo $_smarty_tpl->__("storefront_name");?>
</th>
                        <th width="30%"><?php echo $_smarty_tpl->__("features");?>
</th>
                        <th width="30%"><?php echo $_smarty_tpl->__("categories");?>
</th>
                        <th width="5%">&nbsp;</th>
                        <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
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
                        <?php $_smarty_tpl->_assignInScope('non_editable', !$_smarty_tpl->tpl_vars['is_allowed_to_change']->value || !fn_allow_save_object($_smarty_tpl->tpl_vars['p_feature']->value,"product_features"));?>
                        <?php $_smarty_tpl->_assignInScope('feature_category_ids', $_smarty_tpl->tpl_vars['p_feature']->value['categories_path'] ? (explode(",",$_smarty_tpl->tpl_vars['p_feature']->value['categories_path'])) : (array()));?>
                        <?php $_smarty_tpl->_assignInScope('href_edit', "product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value));?>
                        <?php $_smarty_tpl->_assignInScope('href_delete', "product_features.delete?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value));?>
                        <?php $_smarty_tpl->_assignInScope('included_features_href', fn_url("product_features.manage?parent_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'])));?>

                        <?php $_smarty_tpl->_assignInScope('top_features_names', array());?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p_feature']->value['top_features'], 'top_feature', false, 'top_feature_id');
$_smarty_tpl->tpl_vars['top_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['top_feature_id']->value => $_smarty_tpl->tpl_vars['top_feature']->value) {
$_smarty_tpl->tpl_vars['top_feature']->do_else = false;
?>
                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['top_features_names']) ? $_smarty_tpl->tpl_vars['top_features_names']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['top_feature']->value['internal_name'];
$_smarty_tpl->_assignInScope('top_features_names', $_tmp_array);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <tr class="cm-row-item cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['p_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target<?php if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> longtap-selection-disable<?php }?>"
                            data-ct-product_features="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-longtap-action="setCheckBox"
                            data-ca-longtap-target="input.cm-item"
                            data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-category-ids="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['feature_category_ids']->value), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-feature-group="false"
                            <?php if ($_smarty_tpl->tpl_vars['non_editable']->value && $_smarty_tpl->tpl_vars['is_allowed_to_change']->value) {?>
                                <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                                    data-ca-bulkedit-disabled-notice="<?php echo $_smarty_tpl->__("product_features_groups_of_marketplace_are_not_selectable");?>
"
                                <?php } else { ?>
                                    data-ca-bulkedit-disabled-notice="<?php echo $_smarty_tpl->__("product_feature_groups_are_not_selectable_for_context_menu");?>
"
                                <?php }?>
                            <?php }?>
                        >
                            <td width="6%" class="left" data-th="&nbsp;">
                                <input type="checkbox" name="feature_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['p_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                            </td>
                            <td width="20%" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                                <div class="object-group-link-wrap">
                                    <a class="row-status cm-external-click <?php if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> no-underline<?php }?>" data-ca-external-click-id="opener_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
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
                            <td width="30%" data-th="<?php echo $_smarty_tpl->__("features");?>
">
                                <div class="row-status object-group-details">
                                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['top_features_names']->value) > 0) {?>
                                        <span>
                                            <?php echo htmlspecialchars((string) implode(", ",$_smarty_tpl->tpl_vars['top_features_names']->value), ENT_QUOTES, 'UTF-8');
if (smarty_modifier_count($_smarty_tpl->tpl_vars['p_feature']->value['top_features']) < $_smarty_tpl->tpl_vars['p_feature']->value['features_count']) {?>,...<?php }?>
                                        </span>
                                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['included_features_href']->value, ENT_QUOTES, 'UTF-8');?>
">(<?php echo $_smarty_tpl->tpl_vars['p_feature']->value['features_count'];?>
)</a>
                                    <?php }?>
                                </div>
                            </td>
                            <td width="30%" data-th="<?php echo $_smarty_tpl->__("categories");?>
">
                                <div class="row-status object-group-details">
                                    <?php echo $_smarty_tpl->tpl_vars['p_feature']->value['feature_description'];?>

                                </div>
                            </td>
                            <td width="5%" class="nowrap" data-th="&nbsp;">
                                <div class="hidden-tools">
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                        <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                            <li><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']),'text'=>$_smarty_tpl->tpl_vars['p_feature']->value['description'],'act'=>"edit",'href'=>$_smarty_tpl->tpl_vars['href_edit']->value,'no_icon_link'=>true), 0, true);
?></li>
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
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_product_features_form",'object'=>"product_features_groups",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_features_groups_table')), 0, false);
?>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <!--update_features_list--></div>
    </form>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>array(),'in_popup'=>true,'is_group'=>true,'return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_feature",'text'=>$_smarty_tpl->__("new_group"),'title'=>$_smarty_tpl->__("new_group"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"general",'icon'=>"icon-plus"), 0, true);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/product_feature_groups_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"product_features.groups"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("feature_groups"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
