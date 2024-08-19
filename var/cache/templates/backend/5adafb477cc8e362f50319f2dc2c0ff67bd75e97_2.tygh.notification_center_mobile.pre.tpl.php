<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:04
  from '/app/www/design/backend/templates/addons/help_center/hooks/menu/notification_center_mobile.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e0e8c625a1_36959833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5adafb477cc8e362f50319f2dc2c0ff67bd75e97' => 
    array (
      0 => '/app/www/design/backend/templates/addons/help_center/hooks/menu/notification_center_mobile.pre.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/component/help_center_popup_btn_mobile.tpl' => 1,
  ),
),false)) {
function content_66b5e0e8c625a1_36959833 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <li class="dropdown dropdown-top-menu-item cm-dropdown-skip-processing help-center-menu-mobile">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_popup_btn_mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </li>
<?php }
}
}
