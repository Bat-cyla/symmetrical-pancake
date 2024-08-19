<?php
/* Smarty version 4.1.1, created on 2024-08-06 10:10:50
  from '/app/www/design/backend/templates/addons/vendor_communication/views/vendor_communication/threads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b1cc7a210228_67927076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff1074e1ebc020b12ef92ea8f12b94b74b893d33' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_communication/views/vendor_communication/threads.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/table_col_head.tpl' => 6,
    'tygh:addons/vendor_communication/views/vendor_communication/components/subject_image.tpl' => 1,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:addons/vendor_communication/views/vendor_communication/components/subject.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 1,
    'tygh:addons/vendor_communication/views/vendor_communication/components/thread_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66b1cc7a210228_67927076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),4=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('id','message','subject','customer','date','id','vendor_communication.thread','message','subject','vendor_communication.you','vendor_communication.admin','customer','customer','delete','date','no_data','vendor_communication.message_center'));
echo smarty_function_script(array('src'=>"js/addons/vendor_communication/backend/bulk_edit.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('show_subject_image_column', false);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>
    <?php $_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_vendor_col', $_smarty_tpl->tpl_vars['auth']->value['user_type'] == "A" && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']);?>

    <?php $_smarty_tpl->_assignInScope('message_col_width', $_smarty_tpl->tpl_vars['search']->value['communication_type'] === smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER") ? "35%" : "54%");?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="threads_list_form" id="threads_list_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>cm-hide-inputs<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['threads']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
$_smarty_tpl->tpl_vars['thread']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['thread']->value['object_type'] === (defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null) || $_smarty_tpl->tpl_vars['thread']->value['object_type'] === (defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
                        <?php $_smarty_tpl->_assignInScope('show_subject_image_column', true);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <input type="hidden" name="communication_type" value="<?php echo htmlspecialchars((string) $_REQUEST['communication_type'], ENT_QUOTES, 'UTF-8');?>
"/>
                <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "threads_list_table", null, null);?>
                    <div class="table-responsive-wrapper longtap-selection">
                        <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden">
                            <thead
                                    data-ca-bulkedit-default-object="true"
                                    data-ca-bulkedit-component="defaultObject"
                            >
                            <tr>
                                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                    <th class="left table__check-items-column">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>"table__check-items"), 0, false);
?>

                                        <input type="checkbox"
                                               class="bulkedit-toggler hide"
                                               data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                               data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                        />
                                    </th>
                                <?php }?>
                                <th width="9%" class="status-label">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"&nbsp;"), 0, false);
?>
                                </th>
                                <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                                    <th width="7%">&nbsp;</th>
                                <?php }?>
                                <th width="14%">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"thread",'text'=>$_smarty_tpl->__("id")), 0, true);
?>
                                </th>
                                <th width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['message_col_width']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php ob_start();
echo $_smarty_tpl->__("message");
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("subject");
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'','text'=>$_prefixVariable1." / ".$_prefixVariable2), 0, true);
?>
                                </th>
                                <?php if ($_smarty_tpl->tpl_vars['search']->value['communication_type'] === smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER")) {?>
                                    <th width="19%">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"name",'text'=>$_smarty_tpl->__("customer")), 0, true);
?>
                                    </th>
                                <?php }?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_communication:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <th width="8%">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"&nbsp;"), 0, true);
?>
                                </th>
                                <th width="15%">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"last_updated",'text'=>$_smarty_tpl->__("date")), 0, true);
?>
                                </th>
                            </tr>
                            </thead>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
$_smarty_tpl->tpl_vars['thread']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->do_else = false;
?>
                                <?php $_smarty_tpl->_assignInScope('thread_href', fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])."&communication_type=".((string)$_smarty_tpl->tpl_vars['search']->value['communication_type'])));?>

                                <?php $_smarty_tpl->_assignInScope('has_new_message', $_smarty_tpl->tpl_vars['auth']->value['user_id'] != $_smarty_tpl->tpl_vars['thread']->value['last_message_user_id'] && $_smarty_tpl->tpl_vars['thread']->value['user_status'] == (defined('VC_THREAD_STATUS_HAS_NEW_MESSAGE') ? constant('VC_THREAD_STATUS_HAS_NEW_MESSAGE') : null));?>
                                <tr class="cm-longtap-target"
                                    data-ca-longtap-action="setCheckBox"
                                    data-ca-longtap-target="input.cm-item"
                                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
"
                                >
                                    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['compnay_id'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                        <td class="left mobile-hide table__check-items-cell">
                                            <input type="checkbox" name="thread_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide" />
                                        </td>
                                    <?php }?>
                                    <td width="9%">
                                        <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                                            <span class="status-new__label"></span>
                                        <?php }?>
                                    </td>
                                    <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                                        <td width="7%" class="<?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="&nbsp;">
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/subject_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0, true);
?>
                                        </td>
                                    <?php }?>
                                    <td width="14%" class="<?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("id");?>
">
                                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thread_href']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <bdi><?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id']));?>
</bdi>
                                        </a>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['thread']->value), 0, true);
?>
                                    </td>
                                    <td width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['message_col_width']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("message");?>
 / <?php echo $_smarty_tpl->__("subject");?>
">
                                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thread_href']->value, ENT_QUOTES, 'UTF-8');?>
" class="no-link vendor-communication__message" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thread']->value['last_message'], ENT_QUOTES, 'UTF-8');?>
">
                                            <strong>
                                                <?php if ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_id'] == $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                                                    <?php echo $_smarty_tpl->__("vendor_communication.you");?>
:
                                                <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                                    <?php echo $_smarty_tpl->__("vendor_communication.admin");?>
:
                                                <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type'] === smarty_modifier_enum("UserTypes::VENDOR")) {?>
                                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thread']->value['company'], ENT_QUOTES, 'UTF-8');?>
:
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->__("customer");?>
:
                                                <?php }?>
                                            </strong>
                                            <?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['last_message'],200,"...",true), ENT_QUOTES, 'UTF-8');?>

                                        </a>
                                        <div>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0, true);
?>
                                        </div>
                                    </td>
                                    <?php if ($_smarty_tpl->tpl_vars['search']->value['communication_type'] == smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER")) {?>
                                        <td width="19%" class="<?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("customer");?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == "A") {?>
                                                <?php if ($_smarty_tpl->tpl_vars['thread']->value['customer_email']) {?><a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['thread']->value['customer_email']), ENT_QUOTES, 'UTF-8');?>
">@</a><?php }?>
                                                <a href="<?php echo htmlspecialchars((string) fn_url("profiles.update&user_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thread']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thread']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                                                </a>
                                            <?php } else { ?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thread']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thread']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                                            <?php }?>
                                        </td>
                                    <?php }?>
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_communication:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <td width="8%" class="right">
                                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_delete", null, null);?>
                                                <li>
                                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"vendor_communication.delete_thread?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])."&communication_type=".((string)$_smarty_tpl->tpl_vars['search']->value['communication_type']),'method'=>"POST"), true);?>

                                                </li>
                                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == "A") {?>
                                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_delete');?>

                                            <?php }?>
                                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                        <div class="hidden-tools">
                                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                                        </div>
                                    </td>
                                    <td width="15%" class="nowrap <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("date");?>
">
                                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thread_href']->value, ENT_QUOTES, 'UTF-8');?>
"  class="no-link">
                                            <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                                        </a>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </table>
                    </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"threads_list_form",'object'=>"vendor_communication_threads",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'threads_list_table'),'is_check_all_shown'=>true,'communication_type'=>$_smarty_tpl->tpl_vars['communication_type']->value), 0, false);
?>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

        </form>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>$_REQUEST['content_id']), 0, true);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_smarty_tpl->tpl_vars['communication_type']->value,'track'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->_assignInScope('_title', $_smarty_tpl->__("vendor_communication.message_center"));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['search']->value['communication_type'] == smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_icon'=>"icon-plus",'but_role'=>"text",'but_meta'=>"btn btn-primary cm-dialog-opener"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_communication:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/thread_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"vendor_communication.threads",'period'=>$_smarty_tpl->tpl_vars['search']->value['period']), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['_title']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'content_id'=>"manage_threads"), 0, false);
}
}
