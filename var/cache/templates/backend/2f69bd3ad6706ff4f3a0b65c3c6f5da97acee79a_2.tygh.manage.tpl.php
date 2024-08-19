<?php
/* Smarty version 4.1.1, created on 2024-08-15 11:18:51
  from '/app/www/design/backend/templates/views/profiles/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdb9eba90a61_96988239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f69bd3ad6706ff4f3a0b65c3c6f5da97acee79a' => 
    array (
      0 => '/app/www/design/backend/templates/views/profiles/manage.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/table_col_head.tpl' => 8,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/profiles/components/users_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66bdb9eba90a61_96988239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.format_price.php','function'=>'smarty_modifier_format_price',),4=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('person_name','phone','type','orders','status','view','id','person_name','storefront_admin','main_administrator','main_administrator','email','last_login','phone','orders','type','administrator','vendor_administrator','customer','affiliate','view_all_orders','log_in_as_user','text_anonymize_question','anonymize','edit','delete','status','notify_user','no_data','users','add_user'));
if (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->_assignInScope('no_hide_input', "cm-no-hide-input");
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="userlist_form" id="userlist_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && !fn_allowed_for("ULTIMATE")) {?>cm-hide-inputs<?php }?>">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="user_type" value="<?php echo htmlspecialchars((string) $_REQUEST['user_type'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>

<?php $_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('person_name_col_width', $_REQUEST['user_type'] == smarty_modifier_enum("UserTypes::CUSTOMER") && $_smarty_tpl->tpl_vars['can_view_orders']->value ? "15%" : "23%");
$_smarty_tpl->_assignInScope('email_col_width', $_REQUEST['user_type'] == smarty_modifier_enum("UserTypes::CUSTOMER") && $_smarty_tpl->tpl_vars['can_view_orders']->value ? "15%" : "22%");?>

<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "profiles_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden">
            <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
            <tr>
                <th class="center <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide table__check-items-column">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>fn_get_default_status_filters('',true),'meta'=>"table__check-items"), 0, false);
?>

                    <?php if (fn_check_view_permissions("orders.manage","GET") || fn_check_view_permissions("profiles.export_range","POST") || fn_check_permissions("profiles","m_delete","admin","POST",array("user_type"=>$_REQUEST['user_type'])) || (fn_check_permissions("profiles","m_activate","admin","POST",array("user_type"=>$_REQUEST['user_type'])) && fn_check_permissions("profiles","m_disable","admin","POST",array("user_type"=>$_REQUEST['user_type'])))) {?>
                        <input type="checkbox"
                            class="bulkedit-toggler hide"
                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            data-ca-bulkedit-dispatch-parameter="user_ids[]"
                        />
                    <?php }?>
                </th>
                <th width="10%" class="nowrap">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"id"), 0, false);
?>
                </th>
                <th width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['person_name_col_width']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"name",'text'=>$_smarty_tpl->__("person_name")), 0, true);
?>
                </th>
                <th width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email_col_width']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"email"), 0, true);
?>
                </th>
                <th width="14%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"last_login"), 0, true);
?>
                </th>
                <th width="15%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("phone")), 0, true);
?>
                </th>
                <?php if (!$_smarty_tpl->tpl_vars['search']->value['user_type']) {?>
                    <th width="14%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("type")), 0, true);
?>
                    </th>
                <?php }?>
                <?php if ($_REQUEST['user_type'] === smarty_modifier_enum("UserTypes::CUSTOMER") && $_smarty_tpl->tpl_vars['can_view_orders']->value) {?>
                    <th width="17%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("orders")), 0, true);
?>
                    </th>
                <?php }?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <th width="5%" class="right mobile-hide">
                    &nbsp;
                </th>
                <th width="9%" class="right">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"status",'title'=>$_smarty_tpl->__("status")), 0, true);
?>
                </th>

            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>

            <?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['user']->value,"users"));?>

            <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value && !defined("RESTRICTED_ADMIN") && $_smarty_tpl->tpl_vars['auth']->value['is_root'] != 'Y') {?>
                <?php $_smarty_tpl->_assignInScope('link_text', $_smarty_tpl->__("view"));?>
                <?php $_smarty_tpl->_assignInScope('popup_additional_class', '');?>
            <?php } elseif ($_smarty_tpl->tpl_vars['allow_save']->value || defined("RESTRICTED_ADMIN") || $_smarty_tpl->tpl_vars['auth']->value['is_root'] == 'Y') {?>
                <?php $_smarty_tpl->_assignInScope('link_text', '');?>
                <?php $_smarty_tpl->_assignInScope('popup_additional_class', "cm-no-hide-input");?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('popup_additional_class', '');?>
                <?php $_smarty_tpl->_assignInScope('link_text', '');?>
            <?php }?>

            <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['user']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target <?php if ((fn_allowed_for("ULTIMATE") && (!$_smarty_tpl->tpl_vars['allow_save']->value || ($_smarty_tpl->tpl_vars['user']->value['user_id'] == $_SESSION['auth']['user_id'])))) {?> cm-hide-inputs<?php }?>"
                data-ca-longtap-action="setCheckBox"
                data-ca-longtap-target="input.cm-item"
                data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <td class="center <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide table__check-items-cell">
                    <input type="checkbox" name="user_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['user']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" /></td>
                <td width="10%" data-th="<?php echo $_smarty_tpl->__("id");?>
" class="table__first-column"><a class="row-status" href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&user_type=".((string)$_smarty_tpl->tpl_vars['user']->value['user_type'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                <td width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['person_name_col_width']->value, ENT_QUOTES, 'UTF-8');?>
" class="row-status wrap" data-th="<?php echo $_smarty_tpl->__("person_name");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['firstname'] || $_smarty_tpl->tpl_vars['user']->value['lastname']) {?>
                        <a href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&user_type=".((string)$_smarty_tpl->tpl_vars['user']->value['user_type'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php } else { ?>
                        -
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['user']->value['is_root'] === smarty_modifier_enum("YesNo::YES")) {?>
                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['company_id']) {?>
                                <p class="muted">
                                    <small><?php echo $_smarty_tpl->__("storefront_admin",array("[storefront]"=>fn_get_company_name($_smarty_tpl->tpl_vars['user']->value['company_id'])));?>
</small>
                                </p>
                            <?php }?>

                            <?php if (!$_smarty_tpl->tpl_vars['user']->value['company_id']) {?>
                                <p class="muted">
                                    <small><?php echo $_smarty_tpl->__("main_administrator");?>
</small>
                                </p>
                            <?php }?>
                        <?php } else { ?>
                            <p class="muted">
                                <small><?php echo $_smarty_tpl->__("main_administrator");?>
</small>
                            </p>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['company_id']) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['user']->value), 0, true);
?>
                    <?php }?>
                </td>
                <td width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email_col_width']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("email");?>
"><a class="row-status" href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['user']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                <td width="14%" class="row-status" data-th="<?php echo $_smarty_tpl->__("last_login");?>
"><?php if ($_smarty_tpl->tpl_vars['user']->value['last_login']) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['last_login'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');
} else {
}?></td>
                <td width="15%" class="row-status" data-th="<?php echo $_smarty_tpl->__("phone");?>
">
                    <a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></a>
                </td>
                <?php if ($_REQUEST['user_type'] == smarty_modifier_enum("UserTypes::CUSTOMER") && $_smarty_tpl->tpl_vars['can_view_orders']->value) {?>
                    <td width="17%" class="row-status" data-th="<?php echo $_smarty_tpl->__("orders");?>
"><a href="<?php echo htmlspecialchars((string) fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user']->value['user_id']]['total_orders'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a> / <a href="<?php ob_start();
echo htmlspecialchars((string) http_build_query(array("status"=>array_values($_smarty_tpl->tpl_vars['settled_statuses']->value))), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars((string) fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&".$_prefixVariable1), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user']->value['user_id']]['total_settled_orders'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a> / <a href="<?php ob_start();
echo htmlspecialchars((string) http_build_query(array("status"=>array_values($_smarty_tpl->tpl_vars['settled_statuses']->value))), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string) fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&".$_prefixVariable2), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = smarty_modifier_format_price($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user']->value['user_id']]['total_spend'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]) ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
</a></td>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['search']->value['user_type']) {?>
                <td width="14%" class="row-status" data-th="<?php echo $_smarty_tpl->__("type");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "A") {
echo $_smarty_tpl->__("administrator");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "V") {
echo $_smarty_tpl->__("vendor_administrator");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "C") {
echo $_smarty_tpl->__("customer");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "P") {
echo $_smarty_tpl->__("affiliate");
}?>
                </td>
                <?php }?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <td width="5%" class="right nowrap mobile-hide">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <?php $_smarty_tpl->_assignInScope('list_extra_links', false);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "C") {?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("view_all_orders"),'href'=>"orders.manage?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), true);?>
</li>
                                <?php $_smarty_tpl->_assignInScope('list_extra_links', true);?>
                            <?php }?>
                            <?php if (fn_user_need_login($_smarty_tpl->tpl_vars['user']->value['user_type']) && (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || fn_check_permission_manage_profiles($_smarty_tpl->tpl_vars['user']->value['user_type'])) && $_smarty_tpl->tpl_vars['user']->value['user_id'] != $_smarty_tpl->tpl_vars['auth']->value['user_id'] && !($_smarty_tpl->tpl_vars['user']->value['user_type'] === $_smarty_tpl->tpl_vars['auth']->value['user_type'] && $_smarty_tpl->tpl_vars['user']->value['is_root'] === smarty_modifier_enum("YesNo::YES") && (!$_smarty_tpl->tpl_vars['user']->value['company_id'] || $_smarty_tpl->tpl_vars['user']->value['company_id'] == $_smarty_tpl->tpl_vars['auth']->value['company_id']))) {?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'target'=>"_blank",'text'=>$_smarty_tpl->__("log_in_as_user"),'href'=>"profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), true);?>
</li>
                                <?php $_smarty_tpl->_assignInScope('list_extra_links', true);?>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"list_extra_links:anonymization"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"list_extra_links:anonymization"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value['user_type'] === smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
                                    <li><?php ob_start();
echo $_smarty_tpl->__("text_anonymize_question");
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("anonymize"),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_prefixVariable3),'href'=>"profiles.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'method'=>"POST"), true);?>
</li>
                                <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"list_extra_links:anonymization"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php if ($_smarty_tpl->tpl_vars['list_extra_links']->value) {?>
                            <li class="divider"></li>
                        <?php }?>

                        <?php if ($_REQUEST['user_type']) {?>
                            <?php $_smarty_tpl->_assignInScope('user_edit_link', "profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&user_type=".((string)$_REQUEST['user_type']));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('user_edit_link', "profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&user_type=".((string)$_smarty_tpl->tpl_vars['user']->value['user_type']));?>
                        <?php }?>
                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>$_smarty_tpl->tpl_vars['user_edit_link']->value), true);?>
</li>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_delete", null, null);?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"profiles.delete?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'method'=>"POST"), true);?>
</li>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['user_id'] != $_SESSION['auth']['user_id']) {?>
                            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && !($_smarty_tpl->tpl_vars['user']->value['user_type'] == "A" && $_smarty_tpl->tpl_vars['user']->value['is_root'] == "Y")) {?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_delete');?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                                <?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['user']->value['user_type'] == "V" && $_smarty_tpl->tpl_vars['user']->value['is_root'] == "N") {?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_delete');?>

                                <?php }?>

                                <?php if (fn_allowed_for("ULTIMATE")) {?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_delete');?>

                                <?php }?>
                            <?php }?>
                        <?php }?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <div class="hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                    </div>
                </td>
                <td width="9%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <input type="hidden" name="user_types[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['user_type'], ENT_QUOTES, 'UTF-8');?>
" />
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['is_root'] == "Y" && ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "A" || $_smarty_tpl->tpl_vars['user']->value['user_type'] == "V" && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] == $_smarty_tpl->tpl_vars['user']->value['company_id'])) {?>
                        <?php $_smarty_tpl->_assignInScope('u_id', '');?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('u_id', $_smarty_tpl->tpl_vars['user']->value['user_id']);?>
                    <?php }?>

                    <?php $_smarty_tpl->_assignInScope('non_editable', false);?>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value['is_root'] == "Y" && $_smarty_tpl->tpl_vars['user']->value['user_type'] == $_smarty_tpl->tpl_vars['auth']->value['user_type'] && (!$_smarty_tpl->tpl_vars['user']->value['company_id'] || $_smarty_tpl->tpl_vars['user']->value['company_id'] == $_smarty_tpl->tpl_vars['auth']->value['company_id']) || $_smarty_tpl->tpl_vars['user']->value['user_id'] == $_smarty_tpl->tpl_vars['auth']->value['user_id'] || (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && ($_smarty_tpl->tpl_vars['user']->value['user_type'] == 'C' || $_smarty_tpl->tpl_vars['user']->value['company_id'] && $_smarty_tpl->tpl_vars['user']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id']))) {?>
                        <?php $_smarty_tpl->_assignInScope('non_editable', true);?>
                    <?php }?>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['u_id']->value,'status'=>$_smarty_tpl->tpl_vars['user']->value['status'],'hidden'=>'','update_controller'=>"profiles",'notify'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['popup_additional_class']->value)." dropleft",'non_editable'=>$_smarty_tpl->tpl_vars['non_editable']->value), 0, true);
?>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"userlist_form",'object'=>"profiles",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'profiles_table')), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>$_REQUEST['content_id']), 0, true);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'class'=>"mobile-hide bulkedit-dropdown--legacy hide"), true);?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php if ($_REQUEST['user_type']) {?>
        <?php $_smarty_tpl->_assignInScope('_title', fn_get_user_type_description($_REQUEST['user_type'],true));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_title', $_smarty_tpl->__("users"));?>
    <?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:manage_adv_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:manage_adv_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_REQUEST['user_type']) {?>
            <?php if ($_smarty_tpl->tpl_vars['can_add_user']->value) {?>
                <a class="btn cm-tooltip" href="<?php echo htmlspecialchars((string) fn_url("profiles.add?user_type=".((string)$_REQUEST['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add_user");?>
">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus"),$_smarty_tpl);?>

                </a>
            <?php }?>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:manage_adv_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"profiles.manage",'view_type'=>"users"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/users_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"profiles.manage"), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['_title']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'content_id'=>"manage_users"), 0, false);
}
}
