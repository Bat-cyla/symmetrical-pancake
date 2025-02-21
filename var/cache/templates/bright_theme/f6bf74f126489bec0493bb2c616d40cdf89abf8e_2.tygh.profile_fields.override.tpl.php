<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:16
  from '/app/www/design/themes/responsive/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065cbfe954_55181411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6bf74f126489bec0493bb2c616d40cdf89abf8e' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl',
      1 => 1726744067,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_66ec065cbfe954_55181411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == (defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
<div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['vendor_plans']->value) {?> hidden<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['pref_field_name']->value != $_smarty_tpl->tpl_vars['field']->value['description'] || $_smarty_tpl->tpl_vars['field']->value['required'] == "Y") {?>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-profile-field"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('default_plan', $_smarty_tpl->tpl_vars['company_data']->value['plan_id']);?>
    <?php if (!$_smarty_tpl->tpl_vars['default_plan']->value) {?>
        <?php $_smarty_tpl->_assignInScope('default_plan', $_REQUEST['plan_id']);?>
    <?php }?>

    <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['plans'], 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ((!$_smarty_tpl->tpl_vars['default_plan']->value && $_smarty_tpl->tpl_vars['plan']->value['is_default']) || $_smarty_tpl->tpl_vars['plan']->value['plan_id'] == $_smarty_tpl->tpl_vars['default_plan']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
 (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0, true);
?>)</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_plans/hooks/profiles/profile_fields.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_plans/hooks/profiles/profile_fields.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == (defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
<div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['vendor_plans']->value) {?> hidden<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['pref_field_name']->value != $_smarty_tpl->tpl_vars['field']->value['description'] || $_smarty_tpl->tpl_vars['field']->value['required'] == "Y") {?>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-profile-field"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('default_plan', $_smarty_tpl->tpl_vars['company_data']->value['plan_id']);?>
    <?php if (!$_smarty_tpl->tpl_vars['default_plan']->value) {?>
        <?php $_smarty_tpl->_assignInScope('default_plan', $_REQUEST['plan_id']);?>
    <?php }?>

    <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['plans'], 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ((!$_smarty_tpl->tpl_vars['default_plan']->value && $_smarty_tpl->tpl_vars['plan']->value['is_default']) || $_smarty_tpl->tpl_vars['plan']->value['plan_id'] == $_smarty_tpl->tpl_vars['default_plan']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
 (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0, true);
?>)</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>
<?php }
}
}
}
