<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:41
  from '/app/www/design/themes/responsive/templates/views/checkout/components/profile_fields/field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e10dcdd374_51624060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7798a5d5c9729f92d724bc8f0b98673c413ec471' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/profile_fields/field.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/calendar.tpl' => 2,
    'tygh:components/phone.tpl' => 2,
  ),
),false)) {
function content_66b5e10dcdd374_51624060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('select_state','select_country','address_residential','address_commercial','select_state','select_country','address_residential','address_commercial'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_label', (($tmp = $_smarty_tpl->tpl_vars['show_label']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
<div class="litecheckout__field cm-field-container <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_type_class_postfix']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-error-message-target-method="append" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['wrapper_attributes']->value);?>
>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
        <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country']);?>
        <?php $_smarty_tpl->_assignInScope('_state', (($tmp = $_smarty_tpl->tpl_vars['field_value']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'] ?? null : $tmp));?>

        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-state litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required'] !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['states']->value && $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['_state']->value == $_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>

        <input
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            type="text"
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_d"
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            size="32"
            maxlength="64"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
"
            disabled="disabled"
            class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text litecheckout__input hidden<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
        />

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->_assignInScope('_country', (($tmp = $_smarty_tpl->tpl_vars['field_value']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] ?? null : $tmp));?>

        <select
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="ty-profile-field__select-country cm-country litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:country_selectbox_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required'] !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['_country']->value == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </select>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
              id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
              autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
              name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
              placeholder=" "
              data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
              data-ca-lite-checkout-auto-save="true"
              aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
              <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['is_disabled']) {?>disabled="disabled"<?php }?> />
        <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
               id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="checkbox"
               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['field_value']->value == smarty_modifier_enum("YesNo::YES")) {?>checked<?php }?>
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        />
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
        <?php ob_start();
echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('extra', "data-ca-lite-checkout-field=".((string)$_smarty_tpl->tpl_vars['field_name_helper']->value)." data-ca-lite-checkout-auto-save=true data-ca-lite-checkout-auto-save-on-change=true ".$_prefixVariable1);?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['field']->value['class']) {
echo " ";
echo (string)$_smarty_tpl->tpl_vars['field']->value['class'];
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('date_meta', "litecheckout__input".$_prefixVariable2.((string)$_smarty_tpl->tpl_vars['input_meta']->value));?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['field_id']->value),'date_name'=>$_smarty_tpl->tpl_vars['field_name']->value,'date_val'=>$_smarty_tpl->tpl_vars['field_value']->value,'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value,'extra'=>$_smarty_tpl->tpl_vars['extra']->value), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['values'], 'name', false, 'value');
$_smarty_tpl->tpl_vars['name']->index = -1;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->index++;
$_smarty_tpl->tpl_vars['name']->first = !$_smarty_tpl->tpl_vars['name']->index;
$__foreach_name_20_saved = $_smarty_tpl->tpl_vars['name'];
?>
            <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                   type="radio"
                   id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                   name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-auto-save-on-change="true"
                   <?php if ((!$_smarty_tpl->tpl_vars['field_value']->value && $_smarty_tpl->tpl_vars['name']->first) || $_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['value']->value) {?>checked<?php }?>
                   <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

                />
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>

            </label>
        <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_20_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
        <select class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        >
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required'] == smarty_modifier_enum("YesNo::NO")) {?>
                <option value="">--</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['values'], 'name', false, 'value');
$_smarty_tpl->tpl_vars['name']->index = -1;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->index++;
$_smarty_tpl->tpl_vars['name']->first = !$_smarty_tpl->tpl_vars['name']->index;
$__foreach_name_21_saved = $_smarty_tpl->tpl_vars['name'];
?>
                <option <?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['value']->value) {?>selected<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_21_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="radio"
               id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential"
               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="residential"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save-on-change="true"
               <?php if (!$_smarty_tpl->tpl_vars['field_value']->value || $_smarty_tpl->tpl_vars['field_value']->value == "residential") {?>checked<?php }?>
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            />
            <?php echo $_smarty_tpl->__("address_residential");?>

        </label>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                type="radio"
                id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial"
                name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                value="commercial"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                <?php if ($_smarty_tpl->tpl_vars['field_value']->value == "commercial") {?>checked<?php }?>
                <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            />
            <?php echo $_smarty_tpl->__("address_commercial");?>

        </label>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checkout'=>true,'id'=>$_smarty_tpl->tpl_vars['field_id']->value,'name'=>$_smarty_tpl->tpl_vars['field_name']->value,'value'=>$_smarty_tpl->tpl_vars['field_value']->value,'attrs'=>$_smarty_tpl->tpl_vars['field']->value['attributes'],'class'=>((string)$_smarty_tpl->tpl_vars['field']->value['class'])." ".((string)$_smarty_tpl->tpl_vars['input_meta']->value),'aria_label'=>$_smarty_tpl->tpl_vars['field']->value['description'],'autocomplete'=>$_smarty_tpl->tpl_vars['field']->value['autocomplete'],'label_text'=>$_smarty_tpl->tpl_vars['field']->value['description'],'label_class'=>$_smarty_tpl->tpl_vars['label_meta']->value,'title'=>$_smarty_tpl->tpl_vars['field']->value['description'],'show_control_group'=>false,'width'=>"full"), 0, false);
?>
        <?php $_smarty_tpl->_assignInScope('show_label', false);?>
    <?php } else { ?>
        <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
               placeholder=" "
               id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"
               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['show_label']->value) {?>
        <label class="litecheckout__label <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');?>
" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
    <?php }?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields/field.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/profile_fields/field.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_label', (($tmp = $_smarty_tpl->tpl_vars['show_label']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
<div class="litecheckout__field cm-field-container <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_type_class_postfix']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-error-message-target-method="append" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['wrapper_attributes']->value);?>
>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
        <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country']);?>
        <?php $_smarty_tpl->_assignInScope('_state', (($tmp = $_smarty_tpl->tpl_vars['field_value']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'] ?? null : $tmp));?>

        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-state litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required'] !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['states']->value && $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['_state']->value == $_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>

        <input
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            type="text"
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_d"
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            size="32"
            maxlength="64"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
"
            disabled="disabled"
            class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text litecheckout__input hidden<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
        />

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->_assignInScope('_country', (($tmp = $_smarty_tpl->tpl_vars['field_value']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] ?? null : $tmp));?>

        <select
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="ty-profile-field__select-country cm-country litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:country_selectbox_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required'] !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['_country']->value == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </select>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
              id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
              autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
              name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
              placeholder=" "
              data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
              data-ca-lite-checkout-auto-save="true"
              aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
              <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['is_disabled']) {?>disabled="disabled"<?php }?> />
        <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
               id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="checkbox"
               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['field_value']->value == smarty_modifier_enum("YesNo::YES")) {?>checked<?php }?>
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        />
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
        <?php ob_start();
echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('extra', "data-ca-lite-checkout-field=".((string)$_smarty_tpl->tpl_vars['field_name_helper']->value)." data-ca-lite-checkout-auto-save=true data-ca-lite-checkout-auto-save-on-change=true ".$_prefixVariable3);?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['field']->value['class']) {
echo " ";
echo (string)$_smarty_tpl->tpl_vars['field']->value['class'];
}
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('date_meta', "litecheckout__input".$_prefixVariable4.((string)$_smarty_tpl->tpl_vars['input_meta']->value));?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['field_id']->value),'date_name'=>$_smarty_tpl->tpl_vars['field_name']->value,'date_val'=>$_smarty_tpl->tpl_vars['field_value']->value,'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value,'extra'=>$_smarty_tpl->tpl_vars['extra']->value), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['values'], 'name', false, 'value');
$_smarty_tpl->tpl_vars['name']->index = -1;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->index++;
$_smarty_tpl->tpl_vars['name']->first = !$_smarty_tpl->tpl_vars['name']->index;
$__foreach_name_24_saved = $_smarty_tpl->tpl_vars['name'];
?>
            <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                   type="radio"
                   id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                   name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-auto-save-on-change="true"
                   <?php if ((!$_smarty_tpl->tpl_vars['field_value']->value && $_smarty_tpl->tpl_vars['name']->first) || $_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['value']->value) {?>checked<?php }?>
                   <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

                />
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>

            </label>
        <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_24_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
        <select class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        >
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required'] == smarty_modifier_enum("YesNo::NO")) {?>
                <option value="">--</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['values'], 'name', false, 'value');
$_smarty_tpl->tpl_vars['name']->index = -1;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->index++;
$_smarty_tpl->tpl_vars['name']->first = !$_smarty_tpl->tpl_vars['name']->index;
$__foreach_name_25_saved = $_smarty_tpl->tpl_vars['name'];
?>
                <option <?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['value']->value) {?>selected<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_25_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="radio"
               id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential"
               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="residential"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save-on-change="true"
               <?php if (!$_smarty_tpl->tpl_vars['field_value']->value || $_smarty_tpl->tpl_vars['field_value']->value == "residential") {?>checked<?php }?>
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            />
            <?php echo $_smarty_tpl->__("address_residential");?>

        </label>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                type="radio"
                id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial"
                name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                value="commercial"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                <?php if ($_smarty_tpl->tpl_vars['field_value']->value == "commercial") {?>checked<?php }?>
                <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            />
            <?php echo $_smarty_tpl->__("address_commercial");?>

        </label>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] === smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checkout'=>true,'id'=>$_smarty_tpl->tpl_vars['field_id']->value,'name'=>$_smarty_tpl->tpl_vars['field_name']->value,'value'=>$_smarty_tpl->tpl_vars['field_value']->value,'attrs'=>$_smarty_tpl->tpl_vars['field']->value['attributes'],'class'=>((string)$_smarty_tpl->tpl_vars['field']->value['class'])." ".((string)$_smarty_tpl->tpl_vars['input_meta']->value),'aria_label'=>$_smarty_tpl->tpl_vars['field']->value['description'],'autocomplete'=>$_smarty_tpl->tpl_vars['field']->value['autocomplete'],'label_text'=>$_smarty_tpl->tpl_vars['field']->value['description'],'label_class'=>$_smarty_tpl->tpl_vars['label_meta']->value,'title'=>$_smarty_tpl->tpl_vars['field']->value['description'],'show_control_group'=>false,'width'=>"full"), 0, true);
?>
        <?php $_smarty_tpl->_assignInScope('show_label', false);?>
    <?php } else { ?>
        <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
               placeholder=" "
               id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"
               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['show_label']->value) {?>
        <label class="litecheckout__label <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');?>
" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
    <?php }?>
</div><?php }
}
}
