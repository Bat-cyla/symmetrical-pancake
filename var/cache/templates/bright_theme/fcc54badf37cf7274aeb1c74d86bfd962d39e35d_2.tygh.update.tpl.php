<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:16
  from '/app/www/design/themes/responsive/templates/views/profiles/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065caf0bf8_81789717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc54badf37cf7274aeb1c74d86bfd962d39e35d' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/profiles/update.tpl',
      1 => 1724826041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
    'tygh:views/profiles/components/profile_fields.tpl' => 8,
    'tygh:views/profiles/components/profiles_account.tpl' => 4,
    'tygh:common/image_verification.tpl' => 4,
    'tygh:buttons/register_profile.tpl' => 4,
    'tygh:views/profiles/components/multiple_profiles.tpl' => 2,
    'tygh:buttons/save.tpl' => 2,
    'tygh:views/profiles/components/user_action_popup.tpl' => 2,
    'tygh:common/popupbox.tpl' => 2,
    'tygh:common/tabsbox.tpl' => 2,
  ),
),false)) {
function content_66ec065caf0bf8_81789717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('register_new_account','contact_information','text_multiprofile_notice','billing_address','shipping_address','shipping_address','billing_address','revert','delete_my_account_description','delete_my_account','delete_my_account','delete_my_account','usergroup','status','action','active','remove','available','join','declined','join','pending','cancel','profile_details','register_new_account','contact_information','text_multiprofile_notice','billing_address','shipping_address','shipping_address','billing_address','revert','delete_my_account_description','delete_my_account','delete_my_account','delete_my_account','usergroup','status','action','active','remove','available','join','declined','join','pending','cancel','profile_details'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('dispatch', "profiles.update");?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['action']) {?>
    <?php $_smarty_tpl->_assignInScope('dispatch', "profiles.update.".((string)$_smarty_tpl->tpl_vars['runtime']->value['action']));
}?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add" && $_smarty_tpl->tpl_vars['settings']->value['General']['quick_registration'] == smarty_modifier_enum("YesNo::YES")) {?>
    <div class="ty-account">
        <form name="profiles_register_form" enctype="multipart/form-data" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'nothing_extra'=>smarty_modifier_enum("YesNo::YES")), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nothing_extra'=>smarty_modifier_enum("YesNo::YES"),'location'=>"checkout"), 0, false);
?>

            <?php if ($_REQUEST['return_url']) {?>
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:account_update"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"register",'align'=>"left"), 0, false);
$_smarty_tpl->assign('image_verification', ob_get_clean());
?>
            <?php if ($_smarty_tpl->tpl_vars['image_verification']->value) {?>
            <div class="ty-control-group">
                <?php echo $_smarty_tpl->tpl_vars['image_verification']->value;?>

            </div>
            <?php }?>

            <div class="ty-profile-field__buttons buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/register_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]"), 0, false);
?>
            </div>
        </form>
    </div>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("register_new_account");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else { ?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
        <div class="ty-profile-field ty-account form-wrap" id="content_general">
            <form name="profile_form" enctype="multipart/form-data" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <input id="selected_section" type="hidden" value="general" name="selected_section"/>
                <input id="default_card_id" type="hidden" value="" name="default_cc"/>
                <input type="hidden" name="profile_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['profile_id'], ENT_QUOTES, 'UTF-8');?>
" />

                <?php if ($_REQUEST['return_url']) {?>
                    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "group", null, null);?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'title'=>$_smarty_tpl->__("contact_information")), 0, true);
?>

                    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B'] || $_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['user_multiple_profiles'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>
                            <p><?php echo $_smarty_tpl->__("text_multiprofile_notice");?>
</p>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/multiple_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_id'=>$_smarty_tpl->tpl_vars['user_data']->value['profile_id']), 0, false);
?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'] == "billing_first") {?>
                            <?php $_smarty_tpl->_assignInScope('first_section', "B");?>
                            <?php $_smarty_tpl->_assignInScope('first_section_text', $_smarty_tpl->__("billing_address"));?>
                            <?php $_smarty_tpl->_assignInScope('sec_section', "S");?>
                            <?php $_smarty_tpl->_assignInScope('sec_section_text', $_smarty_tpl->__("shipping_address"));?>
                            <?php $_smarty_tpl->_assignInScope('body_id', "sa");?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('first_section', "S");?>
                            <?php $_smarty_tpl->_assignInScope('first_section_text', $_smarty_tpl->__("shipping_address"));?>
                            <?php $_smarty_tpl->_assignInScope('sec_section', "B");?>
                            <?php $_smarty_tpl->_assignInScope('sec_section_text', $_smarty_tpl->__("billing_address"));?>
                            <?php $_smarty_tpl->_assignInScope('body_id', "ba");?>
                        <?php }?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['first_section']->value,'body_id'=>'','ship_to_another'=>true,'title'=>$_smarty_tpl->tpl_vars['first_section_text']->value), 0, true);
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['sec_section']->value,'body_id'=>$_smarty_tpl->tpl_vars['body_id']->value,'ship_to_another'=>$_smarty_tpl->tpl_vars['ship_to_another']->value,'title'=>$_smarty_tpl->tpl_vars['sec_section_text']->value,'address_flag'=>fn_compare_shipping_billing($_smarty_tpl->tpl_vars['profile_fields']->value)), 0, true);
?>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:account_update"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"register",'align'=>"center"), 0, true);
?>

                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'group');?>


                <div class="ty-profile-field__buttons buttons-container">
                    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add") {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/register_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]",'but_id'=>"save_profile_but"), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]",'but_meta'=>"ty-btn__secondary",'but_id'=>"save_profile_but"), 0, false);
?>
                        <input class="ty-profile-field__reset ty-btn ty-btn__tertiary" type="reset" name="reset" value="<?php echo $_smarty_tpl->__("revert");?>
" id="shipping_address_reset"/>

                        <?php echo '<script'; ?>
>
                        (function(_, $) {
                            var address_switch = $('input:radio:checked', '.ty-address-switch');
                            $("#shipping_address_reset").on("click", function(e) {
                                setTimeout(function() {
                                    address_switch.click();
                                }, 50);
                            });
                        }(Tygh, Tygh.$));
                        <?php echo '</script'; ?>
>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['show_delete_account_button'] === smarty_modifier_enum("YesNO::YES") && $_smarty_tpl->tpl_vars['user_data']->value['user_type'] === smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "delete_my_account", null, null);?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/user_action_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"anonymization_request",'description'=>$_smarty_tpl->__("delete_my_account_description"),'title'=>$_smarty_tpl->__("delete_my_account"),'id'=>$_smarty_tpl->tpl_vars['block']->value['block_id']), 0, false);
?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link_text'=>$_smarty_tpl->__("delete_my_account"),'title'=>$_smarty_tpl->__("delete_my_account"),'id'=>"anonymization_request_dialog_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'delete_my_account'),'link_meta'=>"ty-ml-s"), 0, false);
?>
                        <?php }?>
                    <?php }?>
                </div>
            </form>
        </div>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "additional_tabs", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>
                <?php if ($_smarty_tpl->tpl_vars['usergroups']->value && !fn_check_user_type_admin_area($_smarty_tpl->tpl_vars['user_data']->value)) {?>
                    <div id="content_usergroups">
                        <table class="ty-table">
                            <thead>
                                <tr>
                                    <th style="width: 30%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
                                    <th style="width: 30%"><?php echo $_smarty_tpl->__("status");?>
</th>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['allow_usergroup_signup'] == smarty_modifier_enum("YesNo::YES")) {?>
                                        <th style="width: 40%"><?php echo $_smarty_tpl->__("action");?>
</th>
                                    <?php }?>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usergroups']->value, 'usergroup');
$_smarty_tpl->tpl_vars['usergroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['usergroups'][$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']]) {?>
                                        <?php $_smarty_tpl->_assignInScope('ug_status', $_smarty_tpl->tpl_vars['user_data']->value['usergroups'][$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']]['status']);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('ug_status', "F");?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['allow_usergroup_signup'] == smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['settings']->value['General']['allow_usergroup_signup'] != smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['ug_status']->value == "A") {?>
                                        <tr>
                                            <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['ug_status']->value == "A") {?>
                                                    <?php echo $_smarty_tpl->__("active");?>

                                                    <?php $_smarty_tpl->_assignInScope('_link_text', $_smarty_tpl->__("remove"));?>
                                                    <?php $_smarty_tpl->_assignInScope('_req_type', "cancel");?>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['ug_status']->value == "F") {?>
                                                    <?php echo $_smarty_tpl->__("available");?>

                                                    <?php $_smarty_tpl->_assignInScope('_link_text', $_smarty_tpl->__("join"));?>
                                                    <?php $_smarty_tpl->_assignInScope('_req_type', "join");?>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['ug_status']->value == "D") {?>
                                                    <?php echo $_smarty_tpl->__("declined");?>

                                                    <?php $_smarty_tpl->_assignInScope('_link_text', $_smarty_tpl->__("join"));?>
                                                    <?php $_smarty_tpl->_assignInScope('_req_type', "join");?>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['ug_status']->value == "P") {?>
                                                    <?php echo $_smarty_tpl->__("pending");?>

                                                    <?php $_smarty_tpl->_assignInScope('_link_text', $_smarty_tpl->__("cancel"));?>
                                                    <?php $_smarty_tpl->_assignInScope('_req_type', "cancel");?>
                                                <?php }?>
                                            </td>
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['allow_usergroup_signup'] == smarty_modifier_enum("YesNo::YES")) {?>
                                                <td>
                                                    <a class="cm-ajax" data-ca-target-id="content_usergroups" href="<?php echo htmlspecialchars((string) fn_url("profiles.usergroups?usergroup_id=".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'])."&type=".((string)$_smarty_tpl->tpl_vars['_req_type']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_link_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                                                </td>
                                            <?php }?>
                                        </tr>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    <!--content_usergroups--></div>
                <?php }?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_tabs');?>


    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_tabs')) != '') {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0, false);
?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox');?>

    <?php }?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("profile_details");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/update.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/profiles/update.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_assignInScope('dispatch', "profiles.update");?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['action']) {?>
    <?php $_smarty_tpl->_assignInScope('dispatch', "profiles.update.".((string)$_smarty_tpl->tpl_vars['runtime']->value['action']));
}?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add" && $_smarty_tpl->tpl_vars['settings']->value['General']['quick_registration'] == smarty_modifier_enum("YesNo::YES")) {?>
    <div class="ty-account">
        <form name="profiles_register_form" enctype="multipart/form-data" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'nothing_extra'=>smarty_modifier_enum("YesNo::YES")), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nothing_extra'=>smarty_modifier_enum("YesNo::YES"),'location'=>"checkout"), 0, true);
?>

            <?php if ($_REQUEST['return_url']) {?>
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:account_update"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"register",'align'=>"left"), 0, true);
$_smarty_tpl->assign('image_verification', ob_get_clean());
?>
            <?php if ($_smarty_tpl->tpl_vars['image_verification']->value) {?>
            <div class="ty-control-group">
                <?php echo $_smarty_tpl->tpl_vars['image_verification']->value;?>

            </div>
            <?php }?>

            <div class="ty-profile-field__buttons buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/register_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]"), 0, true);
?>
            </div>
        </form>
    </div>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("register_new_account");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else { ?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
        <div class="ty-profile-field ty-account form-wrap" id="content_general">
            <form name="profile_form" enctype="multipart/form-data" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <input id="selected_section" type="hidden" value="general" name="selected_section"/>
                <input id="default_card_id" type="hidden" value="" name="default_cc"/>
                <input type="hidden" name="profile_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['profile_id'], ENT_QUOTES, 'UTF-8');?>
" />

                <?php if ($_REQUEST['return_url']) {?>
                    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "group", null, null);?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'title'=>$_smarty_tpl->__("contact_information")), 0, true);
?>

                    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B'] || $_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['user_multiple_profiles'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>
                            <p><?php echo $_smarty_tpl->__("text_multiprofile_notice");?>
</p>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/multiple_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_id'=>$_smarty_tpl->tpl_vars['user_data']->value['profile_id']), 0, true);
?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'] == "billing_first") {?>
                            <?php $_smarty_tpl->_assignInScope('first_section', "B");?>
                            <?php $_smarty_tpl->_assignInScope('first_section_text', $_smarty_tpl->__("billing_address"));?>
                            <?php $_smarty_tpl->_assignInScope('sec_section', "S");?>
                            <?php $_smarty_tpl->_assignInScope('sec_section_text', $_smarty_tpl->__("shipping_address"));?>
                            <?php $_smarty_tpl->_assignInScope('body_id', "sa");?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('first_section', "S");?>
                            <?php $_smarty_tpl->_assignInScope('first_section_text', $_smarty_tpl->__("shipping_address"));?>
                            <?php $_smarty_tpl->_assignInScope('sec_section', "B");?>
                            <?php $_smarty_tpl->_assignInScope('sec_section_text', $_smarty_tpl->__("billing_address"));?>
                            <?php $_smarty_tpl->_assignInScope('body_id', "ba");?>
                        <?php }?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['first_section']->value,'body_id'=>'','ship_to_another'=>true,'title'=>$_smarty_tpl->tpl_vars['first_section_text']->value), 0, true);
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['sec_section']->value,'body_id'=>$_smarty_tpl->tpl_vars['body_id']->value,'ship_to_another'=>$_smarty_tpl->tpl_vars['ship_to_another']->value,'title'=>$_smarty_tpl->tpl_vars['sec_section_text']->value,'address_flag'=>fn_compare_shipping_billing($_smarty_tpl->tpl_vars['profile_fields']->value)), 0, true);
?>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:account_update"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"register",'align'=>"center"), 0, true);
?>

                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'group');?>


                <div class="ty-profile-field__buttons buttons-container">
                    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add") {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/register_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]",'but_id'=>"save_profile_but"), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]",'but_meta'=>"ty-btn__secondary",'but_id'=>"save_profile_but"), 0, true);
?>
                        <input class="ty-profile-field__reset ty-btn ty-btn__tertiary" type="reset" name="reset" value="<?php echo $_smarty_tpl->__("revert");?>
" id="shipping_address_reset"/>

                        <?php echo '<script'; ?>
>
                        (function(_, $) {
                            var address_switch = $('input:radio:checked', '.ty-address-switch');
                            $("#shipping_address_reset").on("click", function(e) {
                                setTimeout(function() {
                                    address_switch.click();
                                }, 50);
                            });
                        }(Tygh, Tygh.$));
                        <?php echo '</script'; ?>
>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['show_delete_account_button'] === smarty_modifier_enum("YesNO::YES") && $_smarty_tpl->tpl_vars['user_data']->value['user_type'] === smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "delete_my_account", null, null);?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/user_action_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"anonymization_request",'description'=>$_smarty_tpl->__("delete_my_account_description"),'title'=>$_smarty_tpl->__("delete_my_account"),'id'=>$_smarty_tpl->tpl_vars['block']->value['block_id']), 0, true);
?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link_text'=>$_smarty_tpl->__("delete_my_account"),'title'=>$_smarty_tpl->__("delete_my_account"),'id'=>"anonymization_request_dialog_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'delete_my_account'),'link_meta'=>"ty-ml-s"), 0, true);
?>
                        <?php }?>
                    <?php }?>
                </div>
            </form>
        </div>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "additional_tabs", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>
                <?php if ($_smarty_tpl->tpl_vars['usergroups']->value && !fn_check_user_type_admin_area($_smarty_tpl->tpl_vars['user_data']->value)) {?>
                    <div id="content_usergroups">
                        <table class="ty-table">
                            <thead>
                                <tr>
                                    <th style="width: 30%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
                                    <th style="width: 30%"><?php echo $_smarty_tpl->__("status");?>
</th>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['allow_usergroup_signup'] == smarty_modifier_enum("YesNo::YES")) {?>
                                        <th style="width: 40%"><?php echo $_smarty_tpl->__("action");?>
</th>
                                    <?php }?>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usergroups']->value, 'usergroup');
$_smarty_tpl->tpl_vars['usergroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['usergroups'][$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']]) {?>
                                        <?php $_smarty_tpl->_assignInScope('ug_status', $_smarty_tpl->tpl_vars['user_data']->value['usergroups'][$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']]['status']);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('ug_status', "F");?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['allow_usergroup_signup'] == smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['settings']->value['General']['allow_usergroup_signup'] != smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['ug_status']->value == "A") {?>
                                        <tr>
                                            <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['ug_status']->value == "A") {?>
                                                    <?php echo $_smarty_tpl->__("active");?>

                                                    <?php $_smarty_tpl->_assignInScope('_link_text', $_smarty_tpl->__("remove"));?>
                                                    <?php $_smarty_tpl->_assignInScope('_req_type', "cancel");?>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['ug_status']->value == "F") {?>
                                                    <?php echo $_smarty_tpl->__("available");?>

                                                    <?php $_smarty_tpl->_assignInScope('_link_text', $_smarty_tpl->__("join"));?>
                                                    <?php $_smarty_tpl->_assignInScope('_req_type', "join");?>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['ug_status']->value == "D") {?>
                                                    <?php echo $_smarty_tpl->__("declined");?>

                                                    <?php $_smarty_tpl->_assignInScope('_link_text', $_smarty_tpl->__("join"));?>
                                                    <?php $_smarty_tpl->_assignInScope('_req_type', "join");?>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['ug_status']->value == "P") {?>
                                                    <?php echo $_smarty_tpl->__("pending");?>

                                                    <?php $_smarty_tpl->_assignInScope('_link_text', $_smarty_tpl->__("cancel"));?>
                                                    <?php $_smarty_tpl->_assignInScope('_req_type', "cancel");?>
                                                <?php }?>
                                            </td>
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['allow_usergroup_signup'] == smarty_modifier_enum("YesNo::YES")) {?>
                                                <td>
                                                    <a class="cm-ajax" data-ca-target-id="content_usergroups" href="<?php echo htmlspecialchars((string) fn_url("profiles.usergroups?usergroup_id=".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'])."&type=".((string)$_smarty_tpl->tpl_vars['_req_type']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_link_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                                                </td>
                                            <?php }?>
                                        </tr>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    <!--content_usergroups--></div>
                <?php }?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_tabs');?>


    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_tabs')) != '') {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0, true);
?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox');?>

    <?php }?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("profile_details");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
}
