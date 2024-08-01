<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:08:55
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/body_content.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1b4765c1e2_72083934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b70e8b708aa7327355059bc6cc716b98113073d5' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/body_content.pre.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66aa1b4765c1e2_72083934 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->_assignInScope('main_container_class', ((string)$_smarty_tpl->tpl_vars['main_container_class']->value)." te-mode" ,false ,2);
}
}
}
