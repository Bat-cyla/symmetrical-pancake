<?php
/* Smarty version 4.1.1, created on 2024-08-15 08:58:39
  from '/app/www/design/backend/templates/views/profiles/components/profile_fields_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bd990f41fc42_05346800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a8ca1dc5fc487f9faa1e64949675b89388cb770' => 
    array (
      0 => '/app/www/design/backend/templates/views/profiles/components/profile_fields_info.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bd990f41fc42_05346800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('first_field', true);?>
<p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field', false, NULL, 'fields', array (
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php if (!$_smarty_tpl->tpl_vars['field']->value['field_name'] || $_smarty_tpl->tpl_vars['field']->value['is_default'] == 'N') {?>
            <?php $_smarty_tpl->_assignInScope('value', fn_get_profile_field_value($_smarty_tpl->tpl_vars['user_data']->value,$_smarty_tpl->tpl_vars['field']->value));?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['customer_info']->value) {?>
                    <?php if (!$_smarty_tpl->tpl_vars['first_field']->value) {?>, <?php }?><span class="additional-fields">
                <?php } else { ?>
                    <div class="control-group">
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('first_field', false);?>
                <label><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>


                <?php if ($_smarty_tpl->tpl_vars['customer_info']->value) {?>
                    </span>
                <?php } else { ?>
                    </div>
                <?php }?>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</p><?php }
}
