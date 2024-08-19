<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:41
  from '/app/www/design/themes/responsive/templates/views/checkout/components/profile_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e10d350631_51883457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d7e8afe985563ca831ce19d891600a137b7c8d9' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/profile_fields.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/profile_fields/field.tpl' => 2,
  ),
),false)) {
function content_66b5e10d350631_51883457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.sort_by.php','function'=>'smarty_modifier_sort_by',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]) {?>
    <?php $_smarty_tpl->_assignInScope('disable_all_fields', (($tmp = $_smarty_tpl->tpl_vars['disable_all_fields']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('fields', array());?>
    <?php $_smarty_tpl->_assignInScope('name_fields', array());?>
    <?php $_smarty_tpl->_assignInScope('name_field_names', array("firstname","lastname","s_firstname","s_lastname","b_firstname","b_lastname"));?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value], 'field', false, 'field_id');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_id']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['exclude']->value && in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['exclude']->value) || $_smarty_tpl->tpl_vars['include']->value && !in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['include']->value)) {?>
            <?php continue 1;?>
        <?php }?>

        <?php if (in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['name_field_names']->value)) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['name_fields']) ? $_smarty_tpl->tpl_vars['name_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;
$_smarty_tpl->_assignInScope('name_fields', $_tmp_array);?>
        <?php } else { ?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fields']) ? $_smarty_tpl->tpl_vars['fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;
$_smarty_tpl->_assignInScope('fields', $_tmp_array);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_assignInScope('prefix', '');?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value == smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")) {?>
        <?php $_smarty_tpl->_assignInScope('prefix', "s_");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['section']->value == smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS")) {?>
        <?php $_smarty_tpl->_assignInScope('prefix', "b_");?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('fullname_exists', smarty_modifier_count($_smarty_tpl->tpl_vars['name_fields']->value) == 2);?>
    <?php if ($_smarty_tpl->tpl_vars['fullname_exists']->value) {?>
        <?php $_smarty_tpl->_assignInScope('fullname_field', reset($_smarty_tpl->tpl_vars['name_fields']->value));?>
        <?php $_smarty_tpl->_assignInScope('name_field_id', key($_smarty_tpl->tpl_vars['name_fields']->value));?>
        <?php $_smarty_tpl->_assignInScope('fullname_field_lastname_first', in_array($_smarty_tpl->tpl_vars['fullname_field']->value['field_name'],array("lastname","s_lastname","b_lastname")));?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullname_field']) ? $_smarty_tpl->tpl_vars['fullname_field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["field_name"] = ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname";
$_smarty_tpl->_assignInScope('fullname_field', $_tmp_array);?>
        <?php if ($_smarty_tpl->tpl_vars['fullname_field_lastname_first']->value) {?>
            <?php $_smarty_tpl->_assignInScope('fullname_field_value', trim(((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."lastname"])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."firstname"])));?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullname_field']) ? $_smarty_tpl->tpl_vars['fullname_field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['description'] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['prefix']->value)."last_name_and_first_name");
$_smarty_tpl->_assignInScope('fullname_field', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullname_field']) ? $_smarty_tpl->tpl_vars['fullname_field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes'] = array("data-ca-fullname-format"=>"lastname_first");
$_smarty_tpl->_assignInScope('fullname_field', $_tmp_array);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('fullname_field_value', trim(((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."firstname"])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."lastname"])));?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullname_field']) ? $_smarty_tpl->tpl_vars['fullname_field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['description'] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['prefix']->value)."first_name_and_last_name");
$_smarty_tpl->_assignInScope('fullname_field', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullname_field']) ? $_smarty_tpl->tpl_vars['fullname_field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes'] = array("data-ca-fullname-format"=>"firstname_first");
$_smarty_tpl->_assignInScope('fullname_field', $_tmp_array);?>
        <?php }?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fields']) ? $_smarty_tpl->tpl_vars['fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['name_field_id']->value] = $_smarty_tpl->tpl_vars['fullname_field']->value;
$_smarty_tpl->_assignInScope('fields', $_tmp_array);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('fields', $_smarty_tpl->tpl_vars['fields']->value+$_smarty_tpl->tpl_vars['name_fields']->value);?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('fields', smarty_modifier_sort_by($_smarty_tpl->tpl_vars['fields']->value,"#position"));?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field', false, 'field_id');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_id']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('type', "text");?>
        <?php $_smarty_tpl->_assignInScope('input_meta', '');?>
        <?php $_smarty_tpl->_assignInScope('label_meta', '');?>

        <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', "litecheckout__field--");?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>
            <?php $_smarty_tpl->_assignInScope('type', "tel");?>
            <?php $_smarty_tpl->_assignInScope('label_meta', " cm-mask-phone-label");?>
            <?php $_smarty_tpl->_assignInScope('input_meta', " cm-mask-phone");?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>
            <?php $_smarty_tpl->_assignInScope('type', "text");?>
            <?php $_smarty_tpl->_assignInScope('label_meta', " cm-email");?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."state");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."country");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."checkbox");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."date");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::INPUT")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PASSWORD")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."password");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."selectbox");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."textarea");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio");?>
        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['field_type_class_postfix']->value === "litecheckout__field--") {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."custom");?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['checkout_required'] == "Y" || $_smarty_tpl->tpl_vars['field']->value['checkout_required'] == "1") {?>
            <?php $_smarty_tpl->_assignInScope('label_meta', ((string)$_smarty_tpl->tpl_vars['label_meta']->value)." cm-required cm-trim");?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["required"] = true;
$_smarty_tpl->_assignInScope('field', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["data-ca-custom-validation"] = true;
$_smarty_tpl->_assignInScope('field', $_tmp_array);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['is_default'] == smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->_assignInScope('field_name', "user_data[".((string)$_smarty_tpl->tpl_vars['field']->value['field_name'])."]");?>
            <?php $_smarty_tpl->_assignInScope('field_value', $_smarty_tpl->tpl_vars['user_data']->value[$_smarty_tpl->tpl_vars['field']->value['field_name']]);?>
            <?php $_smarty_tpl->_assignInScope('field_name_helper', "user_data.".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('field_name', "user_data[fields][".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."]");?>
            <?php $_smarty_tpl->_assignInScope('field_value', $_smarty_tpl->tpl_vars['user_data']->value["fields"][$_smarty_tpl->tpl_vars['field']->value['field_id']]);?>
            <?php $_smarty_tpl->_assignInScope('field_name_helper', "user_data.fields.".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']));?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] == ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname") {?>
            <?php $_smarty_tpl->_assignInScope('field_value', $_smarty_tpl->tpl_vars['fullname_field_value']->value);?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('wrapper_class', $_smarty_tpl->tpl_vars['field']->value['wrapper_class']);?>
        <?php if (!$_smarty_tpl->tpl_vars['wrapper_class']->value) {?>
            <?php $_smarty_tpl->_assignInScope('wrapper_class', "litecheckout__field--small");?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
                <?php $_smarty_tpl->_assignInScope('wrapper_class', "litecheckout__field--full");?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['is_disabled'] || $_smarty_tpl->tpl_vars['disable_all_fields']->value) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['is_disabled'] = true;
$_smarty_tpl->_assignInScope('field', $_tmp_array);?>
            <?php $_smarty_tpl->_assignInScope('input_meta', ((string)$_smarty_tpl->tpl_vars['input_meta']->value)." disabled");?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["disabled"] = "disabled";
$_smarty_tpl->_assignInScope('field', $_tmp_array);?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('field_id', "litecheckout_".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']));?>

        <?php $_smarty_tpl->_assignInScope('wrapper_attributes', array());?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::PHONE") || $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full") {?>
            <?php $_smarty_tpl->_assignInScope('wrapper_class', ((string)$_smarty_tpl->tpl_vars['wrapper_class']->value)." cm-mask-phone-group");?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['wrapper_attributes']) ? $_smarty_tpl->tpl_vars['wrapper_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-phone-mask-group-id"] = $_smarty_tpl->tpl_vars['field_id']->value;
$_smarty_tpl->_assignInScope('wrapper_attributes', $_tmp_array);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['template']) {?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['field']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_required'=>$_smarty_tpl->tpl_vars['field']->value['profile_required']), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/profile_fields/field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/profile_fields.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]) {?>
    <?php $_smarty_tpl->_assignInScope('disable_all_fields', (($tmp = $_smarty_tpl->tpl_vars['disable_all_fields']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('fields', array());?>
    <?php $_smarty_tpl->_assignInScope('name_fields', array());?>
    <?php $_smarty_tpl->_assignInScope('name_field_names', array("firstname","lastname","s_firstname","s_lastname","b_firstname","b_lastname"));?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value], 'field', false, 'field_id');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_id']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['exclude']->value && in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['exclude']->value) || $_smarty_tpl->tpl_vars['include']->value && !in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['include']->value)) {?>
            <?php continue 1;?>
        <?php }?>

        <?php if (in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['name_field_names']->value)) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['name_fields']) ? $_smarty_tpl->tpl_vars['name_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;
$_smarty_tpl->_assignInScope('name_fields', $_tmp_array);?>
        <?php } else { ?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fields']) ? $_smarty_tpl->tpl_vars['fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;
$_smarty_tpl->_assignInScope('fields', $_tmp_array);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_assignInScope('prefix', '');?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value == smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")) {?>
        <?php $_smarty_tpl->_assignInScope('prefix', "s_");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['section']->value == smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS")) {?>
        <?php $_smarty_tpl->_assignInScope('prefix', "b_");?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('fullname_exists', smarty_modifier_count($_smarty_tpl->tpl_vars['name_fields']->value) == 2);?>
    <?php if ($_smarty_tpl->tpl_vars['fullname_exists']->value) {?>
        <?php $_smarty_tpl->_assignInScope('fullname_field', reset($_smarty_tpl->tpl_vars['name_fields']->value));?>
        <?php $_smarty_tpl->_assignInScope('name_field_id', key($_smarty_tpl->tpl_vars['name_fields']->value));?>
        <?php $_smarty_tpl->_assignInScope('fullname_field_lastname_first', in_array($_smarty_tpl->tpl_vars['fullname_field']->value['field_name'],array("lastname","s_lastname","b_lastname")));?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullname_field']) ? $_smarty_tpl->tpl_vars['fullname_field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["field_name"] = ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname";
$_smarty_tpl->_assignInScope('fullname_field', $_tmp_array);?>
        <?php if ($_smarty_tpl->tpl_vars['fullname_field_lastname_first']->value) {?>
            <?php $_smarty_tpl->_assignInScope('fullname_field_value', trim(((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."lastname"])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."firstname"])));?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullname_field']) ? $_smarty_tpl->tpl_vars['fullname_field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['description'] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['prefix']->value)."last_name_and_first_name");
$_smarty_tpl->_assignInScope('fullname_field', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullname_field']) ? $_smarty_tpl->tpl_vars['fullname_field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes'] = array("data-ca-fullname-format"=>"lastname_first");
$_smarty_tpl->_assignInScope('fullname_field', $_tmp_array);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('fullname_field_value', trim(((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."firstname"])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."lastname"])));?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullname_field']) ? $_smarty_tpl->tpl_vars['fullname_field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['description'] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['prefix']->value)."first_name_and_last_name");
$_smarty_tpl->_assignInScope('fullname_field', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullname_field']) ? $_smarty_tpl->tpl_vars['fullname_field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes'] = array("data-ca-fullname-format"=>"firstname_first");
$_smarty_tpl->_assignInScope('fullname_field', $_tmp_array);?>
        <?php }?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fields']) ? $_smarty_tpl->tpl_vars['fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['name_field_id']->value] = $_smarty_tpl->tpl_vars['fullname_field']->value;
$_smarty_tpl->_assignInScope('fields', $_tmp_array);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('fields', $_smarty_tpl->tpl_vars['fields']->value+$_smarty_tpl->tpl_vars['name_fields']->value);?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('fields', smarty_modifier_sort_by($_smarty_tpl->tpl_vars['fields']->value,"#position"));?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field', false, 'field_id');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_id']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('type', "text");?>
        <?php $_smarty_tpl->_assignInScope('input_meta', '');?>
        <?php $_smarty_tpl->_assignInScope('label_meta', '');?>

        <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', "litecheckout__field--");?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>
            <?php $_smarty_tpl->_assignInScope('type', "tel");?>
            <?php $_smarty_tpl->_assignInScope('label_meta', " cm-mask-phone-label");?>
            <?php $_smarty_tpl->_assignInScope('input_meta', " cm-mask-phone");?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>
            <?php $_smarty_tpl->_assignInScope('type', "text");?>
            <?php $_smarty_tpl->_assignInScope('label_meta', " cm-email");?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."state");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."country");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."checkbox");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."date");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::INPUT")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PASSWORD")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."password");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."selectbox");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."textarea");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio");?>
        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['field_type_class_postfix']->value === "litecheckout__field--") {?>
            <?php $_smarty_tpl->_assignInScope('field_type_class_postfix', ((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."custom");?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['checkout_required'] == "Y" || $_smarty_tpl->tpl_vars['field']->value['checkout_required'] == "1") {?>
            <?php $_smarty_tpl->_assignInScope('label_meta', ((string)$_smarty_tpl->tpl_vars['label_meta']->value)." cm-required cm-trim");?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["required"] = true;
$_smarty_tpl->_assignInScope('field', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["data-ca-custom-validation"] = true;
$_smarty_tpl->_assignInScope('field', $_tmp_array);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['is_default'] == smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->_assignInScope('field_name', "user_data[".((string)$_smarty_tpl->tpl_vars['field']->value['field_name'])."]");?>
            <?php $_smarty_tpl->_assignInScope('field_value', $_smarty_tpl->tpl_vars['user_data']->value[$_smarty_tpl->tpl_vars['field']->value['field_name']]);?>
            <?php $_smarty_tpl->_assignInScope('field_name_helper', "user_data.".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('field_name', "user_data[fields][".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."]");?>
            <?php $_smarty_tpl->_assignInScope('field_value', $_smarty_tpl->tpl_vars['user_data']->value["fields"][$_smarty_tpl->tpl_vars['field']->value['field_id']]);?>
            <?php $_smarty_tpl->_assignInScope('field_name_helper', "user_data.fields.".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']));?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] == ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname") {?>
            <?php $_smarty_tpl->_assignInScope('field_value', $_smarty_tpl->tpl_vars['fullname_field_value']->value);?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('wrapper_class', $_smarty_tpl->tpl_vars['field']->value['wrapper_class']);?>
        <?php if (!$_smarty_tpl->tpl_vars['wrapper_class']->value) {?>
            <?php $_smarty_tpl->_assignInScope('wrapper_class', "litecheckout__field--small");?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
                <?php $_smarty_tpl->_assignInScope('wrapper_class', "litecheckout__field--full");?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['is_disabled'] || $_smarty_tpl->tpl_vars['disable_all_fields']->value) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['is_disabled'] = true;
$_smarty_tpl->_assignInScope('field', $_tmp_array);?>
            <?php $_smarty_tpl->_assignInScope('input_meta', ((string)$_smarty_tpl->tpl_vars['input_meta']->value)." disabled");?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["disabled"] = "disabled";
$_smarty_tpl->_assignInScope('field', $_tmp_array);?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('field_id', "litecheckout_".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']));?>

        <?php $_smarty_tpl->_assignInScope('wrapper_attributes', array());?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::PHONE") || $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full") {?>
            <?php $_smarty_tpl->_assignInScope('wrapper_class', ((string)$_smarty_tpl->tpl_vars['wrapper_class']->value)." cm-mask-phone-group");?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['wrapper_attributes']) ? $_smarty_tpl->tpl_vars['wrapper_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-phone-mask-group-id"] = $_smarty_tpl->tpl_vars['field_id']->value;
$_smarty_tpl->_assignInScope('wrapper_attributes', $_tmp_array);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['template']) {?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['field']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_required'=>$_smarty_tpl->tpl_vars['field']->value['profile_required']), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/profile_fields/field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
