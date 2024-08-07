<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:21:21
  from '/app/www/design/backend/templates/common/multiple_checkboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac7ae1f12dd3_37550153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f7fe227c44a3b3472eb237212326e2afab8c95' => 
    array (
      0 => '/app/www/design/backend/templates/common/multiple_checkboxes.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac7ae1f12dd3_37550153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'k');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['id_field']->value) {?>
        <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['id_field']->value]);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['k']->value);?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['name_field']->value) {?>
        <?php $_smarty_tpl->_assignInScope('item_name', $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name_field']->value]);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('item_name', $_smarty_tpl->tpl_vars['item']->value);?>
    <?php }?>

    <label class="checkbox <?php if (!$_smarty_tpl->tpl_vars['list_mode']->value) {?>inline<?php }?>" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input 
            type="checkbox" 
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
]" 
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['item_ids']->value)) {?>
                checked="checked"
            <?php }?> 
        />
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>

    </label>
<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
    <?php echo $_smarty_tpl->__("no_items");?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
