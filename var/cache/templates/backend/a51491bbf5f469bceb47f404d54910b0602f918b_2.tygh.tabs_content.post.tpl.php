<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:41
  from '/app/www/design/backend/templates/addons/vendor_categories_fee/hooks/categories/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd95082a5_55705672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51491bbf5f469bceb47f404d54910b0602f918b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_categories_fee/hooks/categories/tabs_content.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab5bd95082a5_55705672 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan','vendor_categories_fee.percent_fee','vendor_plan','vendor_categories_fee.percent_fee'));
?>
<div id="content_vendor_fee" class="hidden">
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive">
            <thead class="cm-first-sibling">
            <tr>
                <th width="50%"><?php echo $_smarty_tpl->__("vendor_plan");?>
</th>
                <th width="50%"><?php echo $_smarty_tpl->__("vendor_categories_fee.percent_fee");?>
</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vendor_plans']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('plan_id', $_smarty_tpl->tpl_vars['plan']->value['plan_id']);?>
                <?php $_smarty_tpl->_assignInScope('percent_fee', $_smarty_tpl->tpl_vars['category_fee']->value[$_smarty_tpl->tpl_vars['plan_id']->value]["percent_fee"]);?>

                <?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value && !(isset($_smarty_tpl->tpl_vars['percent_fee']->value))) {?>
                    <?php $_smarty_tpl->_assignInScope('percent_fee', $_smarty_tpl->tpl_vars['parent_fee']->value[$_smarty_tpl->tpl_vars['plan_id']->value]["percent_fee"]);?>
                <?php }?>

                <tr>
                    <td data-th="<?php echo $_smarty_tpl->__("vendor_plan");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td data-th="<?php echo $_smarty_tpl->__("vendor_categories_fee.percent_fee");?>
">
                        <input type="text" name="category_data[vendor_fee][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan_id']->value, ENT_QUOTES, 'UTF-8');?>
][percent_fee]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['percent_fee']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!(isset($_smarty_tpl->tpl_vars['percent_fee']->value))) {?> placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_fee']->value[$_smarty_tpl->tpl_vars['plan_id']->value]["percent_fee"], ENT_QUOTES, 'UTF-8');?>
"<?php }?>></td>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div>
<?php }
}
