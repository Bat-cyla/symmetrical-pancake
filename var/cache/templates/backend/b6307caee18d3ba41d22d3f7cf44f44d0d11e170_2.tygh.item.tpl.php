<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:03
  from '/app/www/design/backend/templates/views/storefronts/components/picker/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e0e7a86db9_24351996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6307caee18d3ba41d22d3f7cf44f44d0d11e170' => 
    array (
      0 => '/app/www/design/backend/templates/views/storefronts/components/picker/item.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b5e0e7a86db9_24351996 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="object-picker__storefronts-main">
    <div class="object-picker__storefronts-name">
        <div class="object-picker__storefronts-name-content"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }
}
