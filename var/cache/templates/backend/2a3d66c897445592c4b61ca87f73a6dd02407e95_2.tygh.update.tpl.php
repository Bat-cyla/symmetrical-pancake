<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:02
  from '/app/www/design/backend/templates/views/order_management/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e0e6d97e33_23444021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3d66c897445592c4b61ca87f73a6dd02407e95' => 
    array (
      0 => '/app/www/design/backend/templates/views/order_management/update.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/order_management/components/customer_info_update.tpl' => 1,
    'tygh:views/order_management/components/profiles_info.tpl' => 1,
    'tygh:views/order_management/components/products.tpl' => 1,
    'tygh:views/order_management/components/discounts.tpl' => 1,
    'tygh:views/order_management/components/totals.tpl' => 1,
    'tygh:views/storefronts/components/picker/picker.tpl' => 1,
    'tygh:views/order_management/components/status.tpl' => 1,
    'tygh:views/order_management/components/payment_method.tpl' => 1,
    'tygh:views/order_management/components/shipping_method.tpl' => 1,
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/price.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66b5e0e6d97e33_23444021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('products_required','storefront','customer_notes','staff_only_notes','notify_customer','notify_orders_department','notify_vendor','create','create_process_payment','create_new_order','save','save_process_payment','editing_order','cancel','add_new_order','editing_order','total','invoice','credit_memo','by'));
$_smarty_tpl->_assignInScope('result_ids', "om_ajax_*");
$_smarty_tpl->_assignInScope('enable_required', false);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/order_management.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/order_management_events.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<div class="hidden">
    <?php $_smarty_tpl->_assignInScope('users_shared_force', false);?>
    <?php if (fn_allowed_for("ULTIMATE")) {?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Stores']['share_users'] == "Y") {?>
            <?php $_smarty_tpl->_assignInScope('users_shared_force', true);?>
        <?php }
}?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/order_management/components/customer_info_update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('enable_required'=>$_smarty_tpl->tpl_vars['enable_required']->value,'allow_email_required_contacts'=>true,'allow_email_required_profile'=>false), 0, false);
?>
</div>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="admin-content-external-form" name="om_cart_form" enctype="multipart/form-data">
<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ORDER_MANAGEMENT']->value, ENT_QUOTES, 'UTF-8');?>

<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id'] || $_smarty_tpl->tpl_vars['cart']->value['user_data']) {?>
        <?php $_smarty_tpl->_assignInScope('is_edit', true);?>
    <?php }?>
    <div id="om_ajax_customer_info">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/order_management/components/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tabindex'=>"2",'user_data'=>$_smarty_tpl->tpl_vars['cart']->value['user_data'],'location'=>"O",'is_edit'=>$_smarty_tpl->tpl_vars['is_edit']->value,'allow_reselect_customer'=>!$_smarty_tpl->tpl_vars['cart']->value['order_id']), 0, false);
?>
    <!--om_ajax_customer_info--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<div class="row-fluid orders-wrap">
    <div class="span8">
        <div class="buttons-container">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:buttons_container"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:buttons_container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="inline-block mobile-hide" id="button_trash_products">
                    <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"delete_selected",'dispatch'=>"dispatch[order_management.delete]",'form'=>"om_cart_form",'class'=>"cm-skip-validation",'icon'=>"icon-trash"), true);?>

                    <?php }?>
                <!--button_trash_products--></div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:buttons_container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>

        <div class="cm-om-totals" id="om_ajax_update_totals">
        <?php if ($_smarty_tpl->tpl_vars['is_empty_cart']->value) {?>
        <label class="hidden cm-required" for="products_required"><?php echo $_smarty_tpl->__("products_required");?>
</label>
        <input type="hidden" id="products_required" name="products_required" value="" />
        <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/order_management/components/products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tabindex'=>"1",'autofocus'=>"true"), 0, false);
?>
        <hr>
        <div class="row-fluid">
            <div class="span6">
            <?php if (empty($_smarty_tpl->tpl_vars['cart']->value['disable_promotions'])) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/order_management/components/discounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:totals_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:totals_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:totals_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>

            <div class="span6">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/order_management/components/totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
        <!--om_ajax_update_totals--></div>

        <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE")) {?>
            <div class="clearfix">
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("storefront");?>
</label>
                    <div class="controls">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"storefront_id",'item_ids'=>array($_smarty_tpl->tpl_vars['selected_storefront_id']->value),'show_advanced'=>false), 0, false);
?>
                    </div>
                </div>
            </div>
        <?php }?>

        <div class="note clearfix">
            <div class="span6">
                <label for="customer_notes"><?php echo $_smarty_tpl->__("customer_notes");?>
</label>
                <textarea class="span12" name="customer_notes" id="customer_notes" cols="40" rows="5"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['notes'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
            <div class="span6">
                <label for="order_details"><?php echo $_smarty_tpl->__("staff_only_notes");?>
</label>
                <textarea class="span12" name="update_order[details]" id="order_details" cols="40" rows="5"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['details'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="clearfix">
            <?php $_smarty_tpl->_assignInScope('notify_customer_status', false);?>
            <?php $_smarty_tpl->_assignInScope('notify_department_status', false);?>
            <?php $_smarty_tpl->_assignInScope('notify_vendor_status', false);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:notify_checkboxes"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:notify_checkboxes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group">
                    <label for="notify_user" class="checkbox"><?php echo $_smarty_tpl->__("notify_customer");?>

                    <input type="checkbox" class="" <?php if ($_smarty_tpl->tpl_vars['notify_customer_status']->value == true) {?> checked="checked" <?php }?> name="notify_user" id="notify_user" value="Y" /></label>
                </div>
                <div class="control-group">
                    <label for="notify_department" class="checkbox"><?php echo $_smarty_tpl->__("notify_orders_department");?>

                    <input type="checkbox" class="" <?php if ($_smarty_tpl->tpl_vars['notify_department_status']->value == true) {?> checked="checked" <?php }?> name="notify_department" id="notify_department" value="Y" /></label>
                </div>
                <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <div class="control-group">
                    <label for="notify_vendor" class="checkbox"><?php echo $_smarty_tpl->__("notify_vendor");?>

                    <input type="checkbox" class="" <?php if ($_smarty_tpl->tpl_vars['notify_vendor_status']->value == true) {?> checked="checked" <?php }?> name="notify_vendor" id="notify_vendor" value="Y" /></label>
                </div>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:notify_checkboxes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    </div>

    <div class="span4">
        <div class="well orders-right-pane form-horizontal">
                        <div class="statuses">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/order_management/components/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

                        <div class="payments" id="om_ajax_update_payment">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/order_management/components/payment_method.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('enable_required'=>$_smarty_tpl->tpl_vars['enable_required']->value), 0, false);
?>
            <!--om_ajax_update_payment--></div>

                        <div class="shippings" id="om_ajax_update_shipping">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/order_management/components/shipping_method.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!--om_ajax_update_shipping--></div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id'] == '') {?>
        <?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->__("create"));?>
        <?php $_smarty_tpl->_assignInScope('but_text_', $_smarty_tpl->__("create_process_payment"));?>
        <?php $_smarty_tpl->_assignInScope('_title', $_smarty_tpl->__("create_new_order"));?>
        <?php $_smarty_tpl->_assignInScope('_tabindex', "3");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->__("save"));?>
        <?php $_smarty_tpl->_assignInScope('but_text_', $_smarty_tpl->__("save_process_payment"));?>
        <?php $_smarty_tpl->_assignInScope('title_start', $_smarty_tpl->__("editing_order"));?>
        <?php $_smarty_tpl->_assignInScope('title_end', "#".((string)$_smarty_tpl->tpl_vars['cart']->value['order_id']));?>
        <?php $_smarty_tpl->_assignInScope('_tabindex', "3");?>
    <?php }?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:update_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:update_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:update_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


    <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id'] != '') {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("cancel"),'but_role'=>"action",'but_href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['cart']->value['order_id'])), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_name'=>"dispatch[order_management.place_order.save]",'but_role'=>"button_main",'tabindex'=>$_smarty_tpl->tpl_vars['_tabindex']->value), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id'] == '') {?>
        <?php echo $_smarty_tpl->__("add_new_order");?>

    <?php } else { ?>

        <?php echo $_smarty_tpl->__("editing_order");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <span class="f-middle"><?php echo $_smarty_tpl->__("total");?>
: <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['total']), 0, false);
?></span><?php if ($_smarty_tpl->tpl_vars['cart']->value['company_id']) {?>, <?php echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['cart']->value['company_id']), ENT_QUOTES, 'UTF-8');
}?></span>

        <span class="f-small">
        /<?php if ($_smarty_tpl->tpl_vars['cart']->value['company_id']) {
echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['cart']->value['company_id']), ENT_QUOTES, 'UTF-8');?>
)<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type'] == "I" && $_smarty_tpl->tpl_vars['cart']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
        (<?php echo $_smarty_tpl->__("invoice");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']], ENT_QUOTES, 'UTF-8');?>
)
        <?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type'] == "C" && $_smarty_tpl->tpl_vars['cart']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
        (<?php echo $_smarty_tpl->__("credit_memo");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']], ENT_QUOTES, 'UTF-8');?>
)
        <?php }?>
        <?php echo $_smarty_tpl->__("by");?>
 <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['user_id']) {
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['user_data']['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['user_data']['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['user_id']) {
}?>
        / <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['cart']->value['order_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['cart']->value['order_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

        </span>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div id="order_update">
<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title_start'=>$_smarty_tpl->tpl_vars['title_start']->value,'title_end'=>$_smarty_tpl->tpl_vars['title_end']->value,'title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox_title'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar_position'=>"left",'sidebar_icon'=>"icon-user"), 0, false);
?>
<!--order_update--></div>

</form>
<?php }
}
