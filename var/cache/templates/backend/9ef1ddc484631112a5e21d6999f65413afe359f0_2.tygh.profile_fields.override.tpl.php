<?php
/* Smarty version 4.1.1, created on 2024-08-01 10:35:20
  from '/app/www/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab3ab8a4ce46_62954731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ef1ddc484631112a5e21d6999f65413afe359f0' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab3ab8a4ce46_62954731 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == (defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
    <!--hide vendor plan field in admin area-->
<?php }
}
}
