<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:14
  from '/app/www/design/themes/responsive/templates/views/checkout/components/customer/location.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eea99d612_78803702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e9a93684f82c0d2e3b87538bf260fee8fb40ec' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/customer/location.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
    'tygh:views/checkout/components/profile_fields.tpl' => 2,
  ),
),false)) {
function content_66b49eea99d612_78803702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.deliver_to','lite_checkout.deliver_to'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_city', false);?>
    <?php $_smarty_tpl->_assignInScope('show_state', false);?>
    <?php $_smarty_tpl->_assignInScope('show_country', false);?>
    <?php $_smarty_tpl->_assignInScope('exclude_fields', array());?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value], 'profile_field', false, 'key');
$_smarty_tpl->tpl_vars['profile_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['profile_field']->value) {
$_smarty_tpl->tpl_vars['profile_field']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['profile_field']->value['field_name'] == "s_city") {?>
            <?php $_smarty_tpl->_assignInScope('show_city', true);?>
            <?php if ($_smarty_tpl->tpl_vars['city_autocomplete']->value) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['profile_fields']) ? $_smarty_tpl->tpl_vars['profile_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_city_autocomplete.tpl";
$_smarty_tpl->_assignInScope('profile_fields', $_tmp_array);?>
            <?php } else { ?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['profile_fields']) ? $_smarty_tpl->tpl_vars['profile_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_city.tpl";
$_smarty_tpl->_assignInScope('profile_fields', $_tmp_array);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['profile_field']->value['field_name'] == "s_state") {?>
            <?php $_smarty_tpl->_assignInScope('show_state', true);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['profile_fields']) ? $_smarty_tpl->tpl_vars['profile_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_state.tpl";
$_smarty_tpl->_assignInScope('profile_fields', $_tmp_array);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['profile_field']->value['field_name'] == "s_country") {?>
            <?php $_smarty_tpl->_assignInScope('show_country', true);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['profile_fields']) ? $_smarty_tpl->tpl_vars['profile_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_country.tpl";
$_smarty_tpl->_assignInScope('profile_fields', $_tmp_array);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['show_city']->value && $_smarty_tpl->tpl_vars['city_autocomplete']->value) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['exclude_fields']) ? $_smarty_tpl->tpl_vars['exclude_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "s_state";
$_smarty_tpl->_assignInScope('exclude_fields', $_tmp_array);?>
    <?php }?>

    <div class="litecheckout__container">
        <div class="litecheckout__group" id="litecheckout_step_location">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.deliver_to") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
                </div>

                <?php if ((($tmp = $_smarty_tpl->tpl_vars['show_city']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp) || (($tmp = $_smarty_tpl->tpl_vars['show_state']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>$_smarty_tpl->tpl_vars['exclude_fields']->value), 0, false);
?>
            </div>

            <div id="litecheckout_autocomplete_dropdown" class="litecheckout__autocomplete-dropdown"></div>
        <!--litecheckout_step_location--></div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/location.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/location.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_city', false);?>
    <?php $_smarty_tpl->_assignInScope('show_state', false);?>
    <?php $_smarty_tpl->_assignInScope('show_country', false);?>
    <?php $_smarty_tpl->_assignInScope('exclude_fields', array());?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value], 'profile_field', false, 'key');
$_smarty_tpl->tpl_vars['profile_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['profile_field']->value) {
$_smarty_tpl->tpl_vars['profile_field']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['profile_field']->value['field_name'] == "s_city") {?>
            <?php $_smarty_tpl->_assignInScope('show_city', true);?>
            <?php if ($_smarty_tpl->tpl_vars['city_autocomplete']->value) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['profile_fields']) ? $_smarty_tpl->tpl_vars['profile_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_city_autocomplete.tpl";
$_smarty_tpl->_assignInScope('profile_fields', $_tmp_array);?>
            <?php } else { ?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['profile_fields']) ? $_smarty_tpl->tpl_vars['profile_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_city.tpl";
$_smarty_tpl->_assignInScope('profile_fields', $_tmp_array);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['profile_field']->value['field_name'] == "s_state") {?>
            <?php $_smarty_tpl->_assignInScope('show_state', true);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['profile_fields']) ? $_smarty_tpl->tpl_vars['profile_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_state.tpl";
$_smarty_tpl->_assignInScope('profile_fields', $_tmp_array);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['profile_field']->value['field_name'] == "s_country") {?>
            <?php $_smarty_tpl->_assignInScope('show_country', true);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['profile_fields']) ? $_smarty_tpl->tpl_vars['profile_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_country.tpl";
$_smarty_tpl->_assignInScope('profile_fields', $_tmp_array);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['show_city']->value && $_smarty_tpl->tpl_vars['city_autocomplete']->value) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['exclude_fields']) ? $_smarty_tpl->tpl_vars['exclude_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "s_state";
$_smarty_tpl->_assignInScope('exclude_fields', $_tmp_array);?>
    <?php }?>

    <div class="litecheckout__container">
        <div class="litecheckout__group" id="litecheckout_step_location">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.deliver_to") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
                </div>

                <?php if ((($tmp = $_smarty_tpl->tpl_vars['show_city']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp) || (($tmp = $_smarty_tpl->tpl_vars['show_state']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>$_smarty_tpl->tpl_vars['exclude_fields']->value), 0, true);
?>
            </div>

            <div id="litecheckout_autocomplete_dropdown" class="litecheckout__autocomplete-dropdown"></div>
        <!--litecheckout_step_location--></div>
    </div>
<?php }
}
}
}
