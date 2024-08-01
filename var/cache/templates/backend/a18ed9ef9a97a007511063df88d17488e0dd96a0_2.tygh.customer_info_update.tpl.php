<?php
/* Smarty version 4.1.1, created on 2024-08-01 10:35:20
  from '/app/www/design/backend/templates/views/order_management/components/customer_info_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab3ab8959be0_43198502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a18ed9ef9a97a007511063df88d17488e0dd96a0' => 
    array (
      0 => '/app/www/design/backend/templates/views/order_management/components/customer_info_update.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:views/profiles/components/profile_fields.tpl' => 5,
    'tygh:views/profiles/components/profiles_account.tpl' => 1,
    'tygh:pickers/users/picker.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_66ab3ab8959be0_43198502 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('customer_info','select_profile','contact_information','shipping_address','billing_address','billing_address','shipping_address','cancel','choose_user','update'));
$_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('enable_required', (($tmp = $_smarty_tpl->tpl_vars['enable_required']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_email_required_contacts', (($tmp = $_smarty_tpl->tpl_vars['allow_email_required_contacts']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_email_required_profile', (($tmp = $_smarty_tpl->tpl_vars['allow_email_required_profile']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<div title="<?php echo $_smarty_tpl->__("customer_info");?>
" id="customer_info">
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal form-edit cm-ajax cm-form-dialog-closer" name="om_customer_info_form">

<input type="hidden" name="result_ids" value="customer_info,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['customer_auth']->value['user_id'] && $_smarty_tpl->tpl_vars['settings']->value['General']['user_multiple_profiles'] == "Y") {?>     <?php $_smarty_tpl->_assignInScope('current_profile_id', (($tmp = $_smarty_tpl->tpl_vars['user_data']->value['profile_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['profile_id'] ?? null : $tmp));?>
    <div class="control-group">
        <label class="control-label" for="profile_id"><?php echo $_smarty_tpl->__("select_profile");?>
</label>
        <div class="controls">
            <select name="profile_id" id="profile_id" class="select-expanded">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_profiles']->value, 'user_profile');
$_smarty_tpl->tpl_vars['user_profile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user_profile']->value) {
$_smarty_tpl->tpl_vars['user_profile']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_profile']->value['profile_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_profile_id']->value == $_smarty_tpl->tpl_vars['user_profile']->value['profile_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_profile']->value['profile_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
<?php }?>

<div id="profile_fields_c">
<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'section'=>"C",'title'=>$_smarty_tpl->__("contact_information"),'enable_required'=>$_smarty_tpl->tpl_vars['enable_required']->value,'allow_email_required'=>$_smarty_tpl->tpl_vars['allow_email_required_contacts']->value), 0, false);
?>
</div>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'] == 'shipping_first') {?>
    <div id="profile_fields_s">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'section'=>"S",'title'=>$_smarty_tpl->__("shipping_address"),'enable_required'=>$_smarty_tpl->tpl_vars['enable_required']->value,'allow_email_required'=>$_smarty_tpl->tpl_vars['allow_email_required_profile']->value), 0, true);
?>
    </div>
    <div id="profile_fields_b">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'section'=>"B",'title'=>$_smarty_tpl->__("billing_address"),'body_id'=>"bi",'shipping_flag'=>fn_compare_shipping_billing($_smarty_tpl->tpl_vars['profile_fields']->value),'ship_to_another'=>$_smarty_tpl->tpl_vars['cart']->value['ship_to_another'],'enable_required'=>$_smarty_tpl->tpl_vars['enable_required']->value,'allow_email_required'=>$_smarty_tpl->tpl_vars['allow_email_required_profile']->value), 0, true);
?>
    </div>
<?php } else { ?>
    <div id="profile_fields_b">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'section'=>"B",'title'=>$_smarty_tpl->__("billing_address"),'enable_required'=>$_smarty_tpl->tpl_vars['enable_required']->value,'allow_email_required'=>$_smarty_tpl->tpl_vars['allow_email_required_profile']->value), 0, true);
?>
    </div>
    <div id="profile_fields_s">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'section'=>"S",'title'=>$_smarty_tpl->__("shipping_address"),'body_id'=>"sa",'shipping_flag'=>fn_compare_shipping_billing($_smarty_tpl->tpl_vars['profile_fields']->value),'ship_to_another'=>$_smarty_tpl->tpl_vars['cart']->value['ship_to_another'],'enable_required'=>$_smarty_tpl->tpl_vars['enable_required']->value,'allow_email_required'=>$_smarty_tpl->tpl_vars['allow_email_required_profile']->value), 0, true);
?>
    </div>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['customer_auth']->value['user_id'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['disable_anonymous_checkout'] == "Y") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('redirect_denied'=>true), 0, false);
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:customer_info_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:customer_info_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="buttons-container">
    <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('extra_var'=>"order_management.select_customer?page=".((string)$_REQUEST['page'])."&order_id=".((string)$_smarty_tpl->tpl_vars['cart']->value['order_id']),'display'=>"radio",'but_text'=>$_smarty_tpl->__("choose_user"),'no_container'=>true,'but_meta'=>"btn",'shared_force'=>$_smarty_tpl->tpl_vars['users_shared_force']->value), 0, false);
?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("update"),'but_meta'=>'','but_name'=>"dispatch[order_management.customer_info]",'but_role'=>"button_main"), 0, false);
?>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:customer_info_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</form>
<!--customer_info--></div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    $(_.doc).on('change', '#profile_id', function() {
        var data = {
            'result_ids' : 'customer_info'
        };

        $.ceAjax('request', '<?php echo fn_url("order_management.customer_info?profile_id=");?>
' + $(this).val(), data);
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
