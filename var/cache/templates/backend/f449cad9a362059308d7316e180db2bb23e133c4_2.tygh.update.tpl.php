<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:35:23
  from '/app/www/design/backend/templates/views/profiles/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab8f1b239437_90662508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f449cad9a362059308d7316e180db2bb23e133c4' => 
    array (
      0 => '/app/www/design/backend/templates/views/profiles/update.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:views/profiles/components/profiles_account.tpl' => 1,
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:views/storefronts/components/picker/picker.tpl' => 1,
    'tygh:buttons/helpdesk.tpl' => 3,
    'tygh:views/profiles/components/profile_fields.tpl' => 4,
    'tygh:common/subheader.tpl' => 1,
    'tygh:views/profiles/components/multiple_profiles.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/switcher.tpl' => 1,
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:views/profiles/components/profile_orders.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66ab8f1b239437_90662508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('storefront','all_storefronts','helpdesk_account.helpdesk_account','helpdesk_account.activate_free_license_message','activate','helpdesk_account.helpdesk_account','helpdesk_account.signed_in_message','helpdesk_account.sign_out','helpdesk_account.signed_out_message','helpdesk_account.sign_in','contact_information','user_profile_info','text_multiprofile_notice','billing_address','shipping_address','shipping_address','usergroup','status','usergroup','status','notify_user','no_data','api_access_for_user','api_key','generate_new_api_key','please_copy_api_key','new_profile','view_all_orders','log_in_as_user','text_anonymize_question','anonymize','delete','create','notify_user'));
if ($_smarty_tpl->tpl_vars['user_data']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['user_data']->value['user_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php $_smarty_tpl->_assignInScope('show_storefront_picker', (($tmp = $_smarty_tpl->tpl_vars['show_storefront_picker']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form name="profile_form" enctype="multipart/form-data" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="admin-content-external-form form-horizontal form-edit <?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['user_data']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['id']->value != $_smarty_tpl->tpl_vars['auth']->value['user_id']) || $_smarty_tpl->tpl_vars['hide_inputs']->value) {?> cm-hide-inputs<?php }?>">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
    <?php $_smarty_tpl->_assignInScope('hide_inputs', false);?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type'] == $_smarty_tpl->tpl_vars['auth']->value['user_type'] && $_smarty_tpl->tpl_vars['user_data']->value['is_root'] == 'Y' && $_smarty_tpl->tpl_vars['user_data']->value['user_id'] != $_smarty_tpl->tpl_vars['auth']->value['user_id'] && (!$_smarty_tpl->tpl_vars['user_data']->value['company_id'] || $_smarty_tpl->tpl_vars['user_data']->value['company_id'] == $_smarty_tpl->tpl_vars['auth']->value['company_id'])) {?>
        <?php $_smarty_tpl->_assignInScope('hide_inputs', true);?>
    <?php }?>

    <?php if (fn_allowed_for("ULTIMATE") && !fn_allow_save_object($_smarty_tpl->tpl_vars['user_data']->value,"users") && $_smarty_tpl->tpl_vars['id']->value && !Tygh\SmartyEngine\Filters::smartyHandlerProcessing($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['user_data']->value['user_id'] != $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php $_smarty_tpl->_assignInScope('hide_inputs', true);?>
    <?php }?>

    <?php if (fn_allowed_for("MULTIVENDOR") && (!fn_allow_save_object($_smarty_tpl->tpl_vars['user_data']->value,"users") || $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && ($_REQUEST['user_type'] == 'C' || fn_string_not_empty($_smarty_tpl->tpl_vars['user_data']->value['company_id']) && $_smarty_tpl->tpl_vars['user_data']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id'])) && $_smarty_tpl->tpl_vars['user_data']->value['user_id'] != $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php $_smarty_tpl->_assignInScope('hide_inputs', true);?>
    <?php }?>

    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" class="cm-no-hide-input" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" class="cm-no-hide-input" name="user_type" value="<?php echo htmlspecialchars((string) $_REQUEST['user_type'], ENT_QUOTES, 'UTF-8');?>
" />

    <div id="content_general">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:general_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:general_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if ((fn_allowed_for("ULTIMATE") || $_smarty_tpl->tpl_vars['user_type']->value == "V") && $_smarty_tpl->tpl_vars['id']->value != $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>

                <?php $_smarty_tpl->_assignInScope('zero_company_id_name_lang_var', false);?>
                <?php if (fn_allowed_for("ULTIMATE") && fn_check_user_type_admin_area($_smarty_tpl->tpl_vars['user_type']->value)) {?>
                    <?php $_smarty_tpl->_assignInScope('zero_company_id_name_lang_var', 'all_vendors');?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"user_data[company_id]",'id'=>"user_data_company_id",'selected'=>$_smarty_tpl->tpl_vars['user_data']->value['company_id'],'zero_company_id_name_lang_var'=>$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value,'disable_company_picker'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, false);
?>

            <?php } else { ?>
                <input type="hidden" name="user_data[company_id]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['user_data']->value['company_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_storefront_picker']->value) {?>
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("storefront");?>
:</label>
                    <div class="controls">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"user_data[storefront_id]",'picker_id'=>"elm_user_data_storefront_id",'item_ids'=>array($_smarty_tpl->tpl_vars['user_data']->value['storefront_id']),'show_advanced'=>false,'show_empty_variant'=>fn_allowed_for("MULTIVENDOR"),'empty_variant_text'=>$_smarty_tpl->__("all_storefronts"),'allow_clear'=>true,'disabled'=>$_smarty_tpl->tpl_vars['hide_inputs']->value,'select_class'=>"cm-no-hide-input"), 0, false);
?>
                    </div>
                </div>
            <?php } else { ?>
                <input type="hidden" name="user_data[storefront_id]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['user_data']->value['storefront_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['user_data']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['id']->value == $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                <?php if (fn_allowed_for("ULTIMATE:FREE") && $_smarty_tpl->tpl_vars['is_activated_free']->value !== smarty_modifier_enum("YesNo::YES")) {?>
                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['is_root'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['auth']->value['company_id'] && $_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number']) {?>
                        <div class="control-group">
                            <label for="helpdesk_account_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("helpdesk_account.helpdesk_account");?>
</label>
                            <div class="controls">
                                <p><?php echo $_smarty_tpl->__("helpdesk_account.activate_free_license_message");?>
</p>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('btn_href'=>"helpdesk_connector.activate_license_mail_request",'btn_text'=>$_smarty_tpl->__("activate"),'btn_class'=>"cm-ajax"), 0, false);
?>
                            </div>
                        </div>
                    <?php }?>
                <?php } else { ?>
                    <div class="control-group">
                        <label for="helpdesk_account_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("helpdesk_account.helpdesk_account");?>
</label>
                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['helpdesk_user_id']) {?>
                            <div class="controls">
                                <p><?php echo $_smarty_tpl->__("helpdesk_account.signed_in_message");?>
</p>
                                <p>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('btn_href'=>fn_url($_smarty_tpl->tpl_vars['helpdesk_disconnect_url']->value),'btn_text'=>$_smarty_tpl->__("helpdesk_account.sign_out")), 0, true);
?>
                                </p>
                            </div>
                        <?php } else { ?>
                            <div class="controls">
                                <p><?php echo $_smarty_tpl->__("helpdesk_account.signed_out_message");?>
</p>
                                <p>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('btn_href'=>fn_url($_smarty_tpl->tpl_vars['helpdesk_connect_url']->value),'btn_text'=>$_smarty_tpl->__("helpdesk_account.sign_in")), 0, true);
?>
                                </p>
                            </div>
                        <?php }?>
                    </div>
                <?php }?>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:general_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'title'=>$_smarty_tpl->__("contact_information")), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['user_multiple_profiles'] == "Y" && $_smarty_tpl->tpl_vars['id']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("user_profile_info")), 0, false);
?>
            <p class="form-note"><?php echo $_smarty_tpl->__("text_multiprofile_notice");?>
</p>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/multiple_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"B",'title'=>$_smarty_tpl->__("billing_address")), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"S",'title'=>$_smarty_tpl->__("shipping_address"),'body_id'=>"sa",'shipping_flag'=>fn_compare_shipping_billing($_smarty_tpl->tpl_vars['profile_fields']->value)), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"S",'title'=>$_smarty_tpl->__("shipping_address"),'shipping_flag'=>false), 0, true);
?>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']['usergroups']) {?>
        <div id="content_usergroups" class="cm-hide-save-button">
            <?php if ($_smarty_tpl->tpl_vars['usergroups']->value) {?>
            <div class="table-responsive-wrapper">
                <table width="100%" class="table table-middle table-responsive">
                <thead>
                <tr>
                    <th width="50%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
                    <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
                </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usergroups']->value, 'usergroup');
$_smarty_tpl->tpl_vars['usergroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->do_else = false;
?>
                    <tr>
                        <td data-th="<?php echo $_smarty_tpl->__("usergroup");?>
"><a href="<?php echo htmlspecialchars((string) fn_url("usergroups.manage#group".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                        <td class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                            <?php $_smarty_tpl->_assignInScope('hide_for_vendor', false);?>
                            <?php if (!fn_check_view_permissions("usergroups.manage","POST")) {?>
                                <?php $_smarty_tpl->_assignInScope('hide_for_vendor', true);?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['usergroups'][$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']]) {?>
                                <?php $_smarty_tpl->_assignInScope('ug_status', $_smarty_tpl->tpl_vars['user_data']->value['usergroups'][$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']]['status']);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('ug_status', "F");?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],'status'=>$_smarty_tpl->tpl_vars['ug_status']->value,'hidden'=>'','items_status'=>fn_get_predefined_statuses("profiles"),'extra'=>"&user_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'update_controller'=>"usergroups",'notify'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value), 0, true);
?>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
            <?php } else { ?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php }?>
        </div>
    <?php }?>

    <div id="content_addons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:detailed_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:detailed_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:detailed_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['show_api_tab']->value) {?>
        <div id="content_api">
            <?php if (!$_smarty_tpl->tpl_vars['hide_api_checkbox']->value) {?>
                <div class="control-group">
                    <label for="sw_api_container" class="control-label"><?php echo $_smarty_tpl->__("api_access_for_user");?>
</label>
                    <div class="controls">
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['user_data']->value['api_key']) {
echo "false";
} else {
echo "true";
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checked'=>$_smarty_tpl->tpl_vars['user_data']->value['api_key'] != '','input_id'=>"sw_api_container",'input_name'=>"user_api_status",'input_value'=>smarty_modifier_enum("YesNo::YES"),'input_attrs'=>array("data-ca-api-key-container-id"=>"api_container","data-ca-show-api-key-warning"=>$_prefixVariable1)), 0, false);
?>
                    </div>
                </div>
            <?php }?>

            <div id="api_container"<?php if ($_smarty_tpl->tpl_vars['user_data']->value['api_key'] === '') {?> class="hidden"<?php }?>>
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("api_key");?>
</label>
                    <div class="controls">
                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['api_key']) {?>
                            <?php ob_start();
echo $_smarty_tpl->__("generate_new_api_key");
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"action",'but_id'=>"refresh_api_key",'but_target'=>"api_key_holder",'but_text'=>$_prefixVariable2,'but_meta'=>"btn-indent"), 0, false);
?>
                            <input type="text" class="input-large" name="user_data[raw_api_key]" value="*************************" disabled id="api_key_holder"/>
                        <?php } else { ?>
                            <input type="text" class="input-large js-new-api-key" name="user_data[raw_api_key]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['new_api_key']->value, ENT_QUOTES, 'UTF-8');?>
" readonly="readonly"  disabled />
                        <?php }?>
                        <div class="well well-small help-block<?php if ($_smarty_tpl->tpl_vars['user_data']->value['api_key']) {?> hidden<?php }?>">
                            <?php echo $_smarty_tpl->__("please_copy_api_key");?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php echo smarty_function_script(array('src'=>"js/tygh/backend/api_access.js"),$_smarty_tpl);?>

    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php if (!fn_allow_save_object($_smarty_tpl->tpl_vars['user_data']->value,"users") && $_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['user_data']->value['user_id'] != $_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
        <?php $_smarty_tpl->_assignInScope('hide_first_button', true);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_smarty_tpl->tpl_vars['selected_section']->value,'track'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('_user_desc', fn_get_user_type_description($_smarty_tpl->tpl_vars['user_type']->value));?>

    <?php ob_start();
echo $_smarty_tpl->__("new_profile");
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('title', $_prefixVariable3.": ".((string)$_smarty_tpl->tpl_vars['_user_desc']->value));
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['firstname']) {?>
        <?php $_smarty_tpl->_assignInScope('title', ((string)$_smarty_tpl->tpl_vars['user_data']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value['lastname']));?>
    <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['b_firstname']) {?>
        <?php $_smarty_tpl->_assignInScope('title', ((string)$_smarty_tpl->tpl_vars['user_data']->value['b_firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value['b_lastname']));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('title', ((string)$_smarty_tpl->tpl_vars['user_data']->value['email']));?>
    <?php }
}?>

<?php $_smarty_tpl->_assignInScope('redirect_url', "profiles.manage%26user_type=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_type']));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profile:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profile:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_orders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profile:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:update_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:update_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type'] == "C") {?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("view_all_orders"),'href'=>"orders.manage?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), true);?>
</li>
        <?php }?>
        <?php if (fn_user_need_login($_smarty_tpl->tpl_vars['user_data']->value['user_type']) && (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['runtime']->value['company_id'] == $_smarty_tpl->tpl_vars['auth']->value['company_id']) && $_smarty_tpl->tpl_vars['user_data']->value['user_id'] != $_smarty_tpl->tpl_vars['auth']->value['user_id'] && !($_smarty_tpl->tpl_vars['user_data']->value['user_type'] == 'A' && $_smarty_tpl->tpl_vars['user_data']->value['is_root'] == 'Y' && !$_smarty_tpl->tpl_vars['user_data']->value['company_id'])) {?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'target'=>"_blank",'text'=>$_smarty_tpl->__("log_in_as_user"),'href'=>"profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), true);?>
</li>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"update_tools_list:anonymization"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"update_tools_list:anonymization"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type'] === smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
                    <li><?php ob_start();
echo $_smarty_tpl->__("text_anonymize_question");
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("anonymize"),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_prefixVariable4),'href'=>"profiles.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"), true);?>
</li>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"update_tools_list:anonymization"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <li class="divider"></li>
            <?php if (!$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"profiles.delete?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['redirect_url']->value),'method'=>"POST"), true);?>
</li>
            <?php }?>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:update_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')) !== '') {?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php }?>
<div class="btn-group btn-hover dropleft">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:update_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:update_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"dropdown-toggle",'but_role'=>"submit-link",'but_name'=>"dispatch[profiles.".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])."]",'but_target_form'=>"profile_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("create"),'but_meta'=>"dropdown-toggle",'but_role'=>"submit-link",'but_name'=>"dispatch[profiles.".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])."]",'but_target_form'=>"profile_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
        <?php }?>
        <ul class="dropdown-menu">
            <li><a><input type="checkbox" name="notify_customer" value="Y" checked="checked"  id="notify_customer" />
                <?php echo $_smarty_tpl->__("notify_user");?>
</a></li>
        </ul>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:update_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
?>
</form>
<?php }
}
