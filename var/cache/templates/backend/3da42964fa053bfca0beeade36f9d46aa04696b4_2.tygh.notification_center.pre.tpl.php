<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:08:56
  from '/app/www/design/backend/templates/addons/help_center/hooks/menu/notification_center.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1b481f5ba3_58404832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3da42964fa053bfca0beeade36f9d46aa04696b4' => 
    array (
      0 => '/app/www/design/backend/templates/addons/help_center/hooks/menu/notification_center.pre.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/component/help_center_popup.tpl' => 1,
  ),
),false)) {
function content_66aa1b481f5ba3_58404832 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <li class="dropdown dropdown-top-menu-item cm-dropdown-skip-processing help-center-menu">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </li>
<?php }
}
}
