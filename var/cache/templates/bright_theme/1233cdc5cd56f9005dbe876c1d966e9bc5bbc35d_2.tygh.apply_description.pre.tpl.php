<?php
/* Smarty version 4.1.1, created on 2024-08-20 09:48:47
  from '/app/www/design/themes/responsive/templates/addons/vendor_plans/hooks/vendors/apply_description.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66c43c4ff364a7_96555409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1233cdc5cd56f9005dbe876c1d966e9bc5bbc35d' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/vendor_plans/hooks/vendors/apply_description.pre.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c43c4ff364a7_96555409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['vendor_plans']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_plan_list', true);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_fields']->value, 'fields');
$_smarty_tpl->tpl_vars['fields']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] == "plan_id") {?>
                <?php $_smarty_tpl->_assignInScope('show_plan_list', false);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['show_plan_list']->value) {?>
        <input type="hidden" name="company_data[plan_id]" id="company_plan" value="<?php echo htmlspecialchars((string) $_REQUEST['plan_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_plans/hooks/vendors/apply_description.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_plans/hooks/vendors/apply_description.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['vendor_plans']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_plan_list', true);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_fields']->value, 'fields');
$_smarty_tpl->tpl_vars['fields']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] == "plan_id") {?>
                <?php $_smarty_tpl->_assignInScope('show_plan_list', false);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['show_plan_list']->value) {?>
        <input type="hidden" name="company_data[plan_id]" id="company_plan" value="<?php echo htmlspecialchars((string) $_REQUEST['plan_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }
}
}
}
}
