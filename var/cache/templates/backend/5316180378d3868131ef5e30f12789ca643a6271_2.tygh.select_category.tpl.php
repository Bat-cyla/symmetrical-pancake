<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/common/select_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c19c3d655_35665401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5316180378d3868131ef5e30f12789ca643a6271' => 
    array (
      0 => '/app/www/design/backend/templates/common/select_category.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66aa1c19c3d655_35665401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
\Tygh\Languages\Helper::preloadLangVars(array('all_categories'));
?>
<select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['select_class']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if (!$_smarty_tpl->tpl_vars['hide_root']->value) {?>
    <option value="0" <?php if ($_smarty_tpl->tpl_vars['id']->value == 0) {?>selected="selected"<?php }?>>- <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['root_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("all_categories") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 -</option>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_plain_categories_tree(0,false,(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'',$_smarty_tpl->tpl_vars['storefront_ids']->value), 'cat', false, NULL, 'cat', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_cat']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cat']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_cat']->value['index'];
?>
        <?php if ($_smarty_tpl->tpl_vars['cat']->value['store']) {?>
            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_cat']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cat']->value['first'] : null)) {?>
                </optgroup>
            <?php }?>
            <optgroup label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_assignInScope('close_optgroup', true);?>
        <?php } else { ?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['disabled']) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['id']->value == $_smarty_tpl->tpl_vars['cat']->value['category_id']) {?>selected="selected"<?php }?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
"><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['cat']->value['level']),htmlspecialchars((string)smarty_modifier_truncate($_smarty_tpl->tpl_vars['cat']->value['category'],25,"...",true), ENT_QUOTES, 'UTF-8', true));?>
</option>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['close_optgroup']->value) {?>
        </optgroup>
    <?php }?>
</select><?php }
}
