<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/views/product_features/components/context_menu/group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c193db7b2_84997013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc3ff5b5b8d63d41989933a9fad3321e0b84bd73' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_features/components/context_menu/group.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66aa1c193db7b2_84997013 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('group','group','none','reset','apply'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--group dropleft-mod">
            <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--group" data-toggle=".bulk-edit__content--group">
                <?php echo $_smarty_tpl->__("group");?>

                <span class="caret mobile-hide"></span>
            </span>

    <div class="bulk-edit--reset-dropdown-menu bulk-edit__content bulk-edit__content--group">
        <div class="bulk-edit-inner bulk-edit-inner--group">
            <div class="bulk-edit-inner__header">
                <span><?php echo $_smarty_tpl->__("group");?>
</span>
            </div>
            <div class="bulk-edit-inner__body">
                <select name="feature_data[parent_id]"
                        id="elm_feature_group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-feature-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-bulkedit-group-changer
                        class="cm-feature-group"
                >
                    <option value="0">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_features']->value, 'group_feature');
$_smarty_tpl->tpl_vars['group_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_feature']->value) {
$_smarty_tpl->tpl_vars['group_feature']->do_else = false;
?>
                        <option data-ca-display-on-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['display_on_product'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-catalog="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['display_on_catalog'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-header="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['display_on_header'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_feature']->value['feature_id'] == $_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div class="bulk-edit-inner__footer">
                <button class="btn bulk-edit-inner__btn bulkedit-group-cancel"
                        role="button"
                        data-ca-bulkedit-group-cancel
                        data-ca-bulkedit-group-reset-changer="[data-ca-bulkedit-group-changer]"
                ><?php echo $_smarty_tpl->__("reset");?>
</button>
                <button class="btn btn-primary bulk-edit-inner__btn bulkedit-group-update"
                        role="button"
                        data-ca-bulkedit-group-update
                        data-ca-bulkedit-group-values="[data-ca-bulkedit-group-changer]"
                        data-ca-bulkedit-group-target-form="[name=manage_product_features_form]"
                        data-ca-bulkedit-group-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                        data-ca-bulkedit-group-dispatch="product_features.m_set_group"
                ><?php echo $_smarty_tpl->__("apply");?>
</button>
            </div>
        </div>
    </div>

    <div class="bulk-edit--overlay"></div>
</li><?php }
}
