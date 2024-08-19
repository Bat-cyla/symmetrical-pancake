<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:04
  from '/app/www/design/backend/templates/views/companies/components/picker/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e0e8896d88_59006092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a7029c0f1bfc30c59b9b0eafde38ebcc644e296' => 
    array (
      0 => '/app/www/design/backend/templates/views/companies/components/picker/item.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b5e0e8896d88_59006092 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="object-picker__companies-main">
    <div class="object-picker__companies-name">
        <div class="object-picker__companies-name-content"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 <span>${data.name}</span> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }
}
