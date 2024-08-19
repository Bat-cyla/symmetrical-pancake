<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:47
  from '/app/www/design/backend/templates/common/carriers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde39fe82757_24503038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29685eda9b2371582a34d3dcae405a8492dbd805' => 
    array (
      0 => '/app/www/design/backend/templates/common/carriers.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bde39fe82757_24503038 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['capture']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "carrier_field", null, null);
}?>

<select <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?> form-control">
    <option value="">--</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'carrier_data', false, 'code');
$_smarty_tpl->tpl_vars['carrier_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['carrier_data']->value) {
$_smarty_tpl->tpl_vars['carrier_data']->do_else = false;
?>
    	<option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['carrier']->value == $_smarty_tpl->tpl_vars['code']->value) {
$_smarty_tpl->_assignInScope('carrier_name', $_smarty_tpl->tpl_vars['carrier_data']->value['name']);?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['carrier_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<?php if ($_smarty_tpl->tpl_vars['capture']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "carrier_name", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['carrier_name']->value, ENT_QUOTES, 'UTF-8');?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
