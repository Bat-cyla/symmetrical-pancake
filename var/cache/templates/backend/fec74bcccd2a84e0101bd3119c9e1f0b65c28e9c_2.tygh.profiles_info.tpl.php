<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:14:49
  from '/app/www/design/backend/templates/views/order_management/components/profiles_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac7959dc1e91_22381485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fec74bcccd2a84e0101bd3119c9e1f0b65c28e9c' => 
    array (
      0 => '/app/www/design/backend/templates/views/order_management/components/profiles_info.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profile_fields_info.tpl' => 3,
    'tygh:pickers/users/picker.tpl' => 1,
    'tygh:views/profiles/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_66ac7959dc1e91_22381485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'profile_enter_data_link' => 
  array (
    'compiled_filepath' => '/app/www/var/cache/templates/backend/fec74bcccd2a84e0101bd3119c9e1f0b65c28e9c_2.tygh.profiles_info.tpl.php',
    'uid' => 'fec74bcccd2a84e0101bd3119c9e1f0b65c28e9c',
    'call_name' => 'smarty_template_function_profile_enter_data_link_89827210466ac7959d67968_35557467',
  ),
  'profile_edit_link' => 
  array (
    'compiled_filepath' => '/app/www/var/cache/templates/backend/fec74bcccd2a84e0101bd3119c9e1f0b65c28e9c_2.tygh.profiles_info.tpl.php',
    'uid' => 'fec74bcccd2a84e0101bd3119c9e1f0b65c28e9c',
    'call_name' => 'smarty_template_function_profile_edit_link_89827210466ac7959d67968_35557467',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_data','section_is_not_completed','address_type','no_data','section_is_not_completed','ip_address','phone','fax','company','website','attention','notice_update_customer_details','update_customer_info','change_customer','user_data_required','customer_information','shipping_address','billing_address','billing_address','shipping_address'));
$_smarty_tpl->_assignInScope('profile_fields', fn_get_profile_fields($_smarty_tpl->tpl_vars['location']->value));?>





<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "billing_address", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:profile_billing_address"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:profile_billing_address"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if (!fn_is_empty($_smarty_tpl->tpl_vars['user_data']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_firstname'] || $_smarty_tpl->tpl_vars['user_data']->value['b_lastname']) {?>
                <p class="strong"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['b_firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['b_lastname'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_address']) {?>
                <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['b_address'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_address_2']) {?>
                <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['b_address_2'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_city'] || $_smarty_tpl->tpl_vars['user_data']->value['b_state_descr'] || $_smarty_tpl->tpl_vars['user_data']->value['b_zipcode']) {?>
                <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['b_city'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['user_data']->value['b_city'] && ($_smarty_tpl->tpl_vars['user_data']->value['b_state_descr'] || $_smarty_tpl->tpl_vars['user_data']->value['b_zipcode'])) {?>,<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['b_state_descr'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['b_zipcode'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_country_descr']) {?><p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['b_country_descr'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['B']), 0, false);
?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_phone']) {?>
                <a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['b_phone'], ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['b_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></a>
            <?php }?>
        <?php } else { ?>
            <p class="muted"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <?php } else { ?>
        <p class="muted"><?php echo $_smarty_tpl->__("section_is_not_completed");?>
</p>
        <div class="enter-data">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'profile_enter_data_link', array('scroll_to'=>"profile_fields_b"), true);?>

        </div>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:profile_billing_address"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "shipping_address", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:profile_shipping_address"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:profile_shipping_address"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if (!fn_is_empty($_smarty_tpl->tpl_vars['user_data']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_firstname'] || $_smarty_tpl->tpl_vars['user_data']->value['s_lastname']) {?>
                <p class="strong"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_lastname'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address']) {?>
                <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address_2']) {?>
                <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_address_2'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_city'] || $_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'] || $_smarty_tpl->tpl_vars['user_data']->value['s_zipcode']) {?>
                <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['user_data']->value['s_city'] && ($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'] || $_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'])) {?>,<?php }?>  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr']) {?><p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['S']), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_phone']) {?>
                <a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_phone'], ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address_type']) {?>
                <p><?php echo $_smarty_tpl->__("address_type");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_address_type'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
        <?php } else { ?>
            <p class="muted"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <?php } else { ?>
        <p class="muted"><?php echo $_smarty_tpl->__("section_is_not_completed");?>
</p>
        <div class="enter-data">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'profile_enter_data_link', array('scroll_to'=>"profile_fields_s"), true);?>

        </div>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:profile_shipping_address"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "customer_information", null, null);?>
    <?php if (!fn_is_empty($_smarty_tpl->tpl_vars['user_data']->value)) {?>
        <div class="profile-info__name">
            <?php $_smarty_tpl->_assignInScope('user_full_name', trim(((string)$_smarty_tpl->tpl_vars['user_data']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value['lastname'])));?>
            <?php if ($_smarty_tpl->tpl_vars['user_full_name']->value) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['user_data']->value['user_type'])) && $_smarty_tpl->tpl_vars['user_data']->value['user_type'] !== smarty_modifier_enum("UserTypes::CUSTOMER") && $_smarty_tpl->tpl_vars['auth']->value['user_type'] !== smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['user_data']->value['user_id'] !== $_smarty_tpl->tpl_vars['auth']->value['user_id'] || (!$_smarty_tpl->tpl_vars['user_data']->value['user_id'] && $_smarty_tpl->tpl_vars['user_full_name']->value)) {?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_full_name']->value, ENT_QUOTES, 'UTF-8');?>

                <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?>
                    <a href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_full_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                <?php }?>
            <?php }?>
        </div>
        <div class="profile-info__email">
            <a href="mailto:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['ip_address']) {?>
            <div class="profile-info__ip">
                <div><?php echo $_smarty_tpl->__("ip_address");?>
:</div>
                <div><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['user_data']->value['ip_address'],":",":<wbr>");?>
</div>
            </div>
        <?php }?>
        <div class="clear">
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['phone']) {?>
                <div class="profile-info__phone">
                    <span><?php echo $_smarty_tpl->__("phone");?>
:</span>
                    <a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></a>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['fax']) {?>
                <div class="profile-info__fax">
                    <span><?php echo $_smarty_tpl->__("fax");?>
:</span>
                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['fax'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['company']) {?>
                <div class="profile-info__company">
                    <span><?php echo $_smarty_tpl->__("company");?>
:</span>
                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['company'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['url']) {?>
                <div class="profile-info__url">
                    <span><?php echo $_smarty_tpl->__("website");?>
:</span>
                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
            <?php }?>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['C'],'customer_info'=>"Y"), 0, true);
?>
        <?php if ($_smarty_tpl->tpl_vars['email_changed']->value) {?>
                <span class="text-warning strong"><?php echo $_smarty_tpl->__("attention");?>
</span>
                <span class="text-warning"><?php echo $_smarty_tpl->__("notice_update_customer_details");?>
</span>

                <label for="update_customer_details" class="checkbox checkbox--multiline">
                    <input type="checkbox" name="update_customer_details" id="update_customer_details" value="Y"<?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?> form=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');
}?> />
                <?php echo $_smarty_tpl->__("update_customer_info");?>
</label>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['allow_reselect_customer']->value) {?>
            <div class="enter-data">
                <div class="clearfix shift-button">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('extra_var'=>"order_management.select_customer?page=".((string)$_REQUEST['page']),'display'=>"radio",'but_text'=>$_smarty_tpl->__("change_customer"),'no_container'=>true,'but_meta'=>"btn",'shared_force'=>$_smarty_tpl->tpl_vars['users_shared_force']->value), 0, false);
?>
                </div>
            </div>
        <?php }?>
    <?php } else { ?>
        <input type="hidden" name="user_data_required" id="selected_user_id" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['selected']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['customer']->value['user_id'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        <div class="mixed-controls">
            <div class="form-inline object-customer-add cm-object-customer-add-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"customer_data",'select_class'=>"cm-object-customer-add",'item_ids'=>array(),'company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id'],'autofocus'=>$_smarty_tpl->tpl_vars['autofocus']->value,'url'=>"profiles.get_customer_list?lang_code=".((string)$_smarty_tpl->tpl_vars['descr_sl']->value),'dropdown_css_class'=>"select2-dropdown-below-customer-add",'users_shared_force'=>$_smarty_tpl->tpl_vars['users_shared_force']->value,'extra_var'=>"order_management.select_customer?page=".((string)$_REQUEST['page']),'no_container'=>true), 0, false);
?>
            </div>
        </div>
        <div class="enter-data">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'profile_enter_data_link', array('scroll_to'=>"profile_fields_c"), true);?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['is_empty_user_data']->value) {?>
        <div class="text-error">
            <label class="hidden cm-required" for="user_data_required"><?php echo $_smarty_tpl->__("user_data_required");?>
</label>
            <input type="hidden" id="user_data_required" name="user_data_required" value="" />
        </div>
        <?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="sidebar-row">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'profile_edit_link', array('scroll_to'=>"profile_fields_c"), true);?>

    <h6><?php echo $_smarty_tpl->__("customer_information");?>
</h6>
    <div class="profile-info">
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-user"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'customer_information');?>

    </div>
</div>
<hr class="profile-info-delim" />

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'] == 'shipping_first') {?>
    <div class="sidebar-row">
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'profile_edit_link', array('scroll_to'=>"profile_fields_s"), true);?>

        <h6><?php echo $_smarty_tpl->__("shipping_address");?>
</h6>
        <div class="profile-info">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-truck"),$_smarty_tpl);?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_address');?>

        </div>
    </div>
    <hr class="profile-info-delim" />
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
        <div class="sidebar-row">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'profile_edit_link', array('scroll_to'=>"profile_fields_b"), true);?>

            <h6><?php echo $_smarty_tpl->__("billing_address");?>
</h6>
            <div class="profile-info">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-tag"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'billing_address');?>

            </div>
        </div>
        <hr class="profile-info-delim" />
    <?php }
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
        <div class="sidebar-row">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'profile_edit_link', array('scroll_to'=>"profile_fields_b"), true);?>

            <h6><?php echo $_smarty_tpl->__("billing_address");?>
</h6>
            <div class="profile-info">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-tag"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'billing_address');?>

            </div>
        </div>
    <?php }?>
    <hr class="profile-info-delim" />
    <div class="sidebar-row">
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'profile_edit_link', array('scroll_to'=>"profile_fields_s"), true);?>

        <h6><?php echo $_smarty_tpl->__("shipping_address");?>
</h6>
        <div class="profile-info">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-truck"),$_smarty_tpl);?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_address');?>

        </div>
    </div>
    <hr class="profile-info-delim" />
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:profiles_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:profiles_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:profiles_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
\Tygh\Languages\Helper::preloadLangVars(array('enter_data','edit'));
/* smarty_template_function_profile_enter_data_link_89827210466ac7959d67968_35557467 */
if (!function_exists('smarty_template_function_profile_enter_data_link_89827210466ac7959d67968_35557467')) {
function smarty_template_function_profile_enter_data_link_89827210466ac7959d67968_35557467(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div class="btn-group"><a class="btn cm-dialog-opener" data-ca-target-id="customer_info"  data-ca-scroll="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_to']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("enter_data");?>
</a></div>
<?php
}}
/*/ smarty_template_function_profile_enter_data_link_89827210466ac7959d67968_35557467 */
/* smarty_template_function_profile_edit_link_89827210466ac7959d67968_35557467 */
if (!function_exists('smarty_template_function_profile_edit_link_89827210466ac7959d67968_35557467')) {
function smarty_template_function_profile_edit_link_89827210466ac7959d67968_35557467(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if ($_smarty_tpl->tpl_vars['is_edit']->value) {?>
    <div class="pull-right">
        <a class="hand cm-tooltip icon-edit cm-dialog-opener<?php if ($_smarty_tpl->tpl_vars['click_to']->value) {?> cm-external-click<?php }?>" data-ca-target-id="customer_info" data-ca-scroll="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_to']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['click_to']->value) {?>data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['click_to']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo $_smarty_tpl->__("edit");?>
"></a>
    </div>
    <?php }
}}
/*/ smarty_template_function_profile_edit_link_89827210466ac7959d67968_35557467 */
}
