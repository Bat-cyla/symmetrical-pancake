<?php
/* Smarty version 4.1.1, created on 2024-08-06 10:10:50
  from '/app/www/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/thread_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b1cc7a2aaf64_71335556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71673ba1ddb9e4352a86c341b059d5b879903520' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/thread_search_form.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/companies/components/picker/picker.tpl' => 1,
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_66b1cc7a2aaf64_71335556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.array_to_fields.php','function'=>'smarty_function_array_to_fields',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','vendor_communication.customer_name','vendor'));
$_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"vendor_communication.threads",'view_type'=>"vc_threads",'view_additional_parameters'=>"&communication_type=".((string)$_smarty_tpl->tpl_vars['search']->value['communication_type'])), 0, false);
?>

<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
    <form name="thread_search_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php if ($_REQUEST['redirect_url']) {?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php if ($_REQUEST['communication_type']) {?>
            <input type="hidden" name="communication_type" value="<?php echo htmlspecialchars((string) $_REQUEST['communication_type'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
            <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback"),'escape'=>array("data_id")),$_smarty_tpl);?>

        <?php }?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['search']->value['communication_type'] == smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER")) {?>
                <div class="sidebar-field">
                    <label for="elm_customer"><?php echo $_smarty_tpl->__("vendor_communication.customer_name");?>
</label>
                    <div class="break">
                        <input type="text" name="customer_name" id="elm_customer" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['customer_name'], ENT_QUOTES, 'UTF-8');?>
" />
                    </div>
                </div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <div class="sidebar-field">
                    <label for="elm_company"><?php echo $_smarty_tpl->__("vendor");?>
</label>
                    <div class="break">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"elm_company",'input_name'=>"company_ids[]",'multiple'=>true,'show_advanced'=>false,'type'=>"selection",'close_on_select'=>false,'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['company_ids']), 0, false);
?>
                    </div>
                </div>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['period']->value,'display'=>"form"), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"vc_thread",'in_popup'=>false,'but_permission_data'=>((string)$_smarty_tpl->tpl_vars['dispatch']->value)."?communication_type=".((string)$_smarty_tpl->tpl_vars['search']->value['communication_type'])), 0, false);
?>

    </form>
</div><hr>
<?php }
}
