<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:17:52
  from '/app/www/design/backend/templates/components/notifications_center/popup_notification_wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1d60415d12_94430327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a03ead98be84674639291a3e60a1d79190ed7d19' => 
    array (
      0 => '/app/www/design/backend/templates/components/notifications_center/popup_notification_wrapper.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66aa1d60415d12_94430327 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cc-popup" data-notification-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['notification_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['message_html']->value;?>

</div><?php }
}
