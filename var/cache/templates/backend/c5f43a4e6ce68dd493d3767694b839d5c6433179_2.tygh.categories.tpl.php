<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/views/product_features/components/context_menu/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c193f3253_14832323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5f43a4e6ce68dd493d3767694b839d5c6433179' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_features/components/context_menu/categories.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select2/categories_bulkedit.tpl' => 1,
  ),
),false)) {
function content_66aa1c193f3253_14832323 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('category','categories','bulk_product_features_warning','view_feature_groups','bulk_edit.what_do_these_checkboxes_mean','show','hide','show','bulk_edit.what_do_these_checkboxes_mean_checked','bulk_edit.what_do_these_checkboxes_mean_unchecked','bulk_edit.what_do_these_checkboxes_mean_indeterminate','reset','apply'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--category dropleft-mod">
            <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--category" data-toggle=".bulk-edit__content--categories">
                <?php echo $_smarty_tpl->__("category");?>

                <span class="caret mobile-hide"></span>
            </span>

    <div class="bulk-edit--reset-dropdown-menu bulk-edit__content bulk-edit__content--categories">
        <div class="bulk-edit-inner bulk-edit-inner--categories">
            <div class="bulk-edit-inner__header">
                <span><?php echo $_smarty_tpl->__("categories");?>
</span>
            </div>

            <div class="bulk-edit-inner__body" id="bulk_edit_categories_list">

                <div class="bulk-edit-inner__hint">
                    <div class="bulk-edit-inner__hint--warning alert alert-warning hidden">
                <span>
                    <?php echo $_smarty_tpl->__("bulk_product_features_warning");?>

                    <a href="<?php echo htmlspecialchars((string) fn_url("product_features.groups"), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("view_feature_groups");?>
</a>
                </span>
                    </div>
                    <p><strong><?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean");?>
 (<a href="#" class="cm-toggle" data-toggle=".bulk-edit-inner--categories .bulk-edit-inner__hint > .bulk-edit--category-hint-wrapper" data-show-text="<?php echo $_smarty_tpl->__("show");?>
" data-hide-text="<?php echo $_smarty_tpl->__("hide");?>
" data-state="show"><?php echo $_smarty_tpl->__("show");?>
</a>)</strong></p>

                    <div class="bulk-edit--category-hint-wrapper hidden">
                        <span><input type="checkbox" class="cm-readonly no-margin" checked="checked" /> <?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean_checked");?>
</span> <br />
                        <span><input type="checkbox" class="cm-readonly no-margin" /> <?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean_unchecked");?>
</span> <br />
                        <span><input type="checkbox" class="cm-readonly no-margin" data-set-indeterminate="true" /> <?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean_indeterminate");?>
</span>

                        <hr>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls" id="bulk_edit_categories_list_content">
                        <?php ob_start();
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['rnd']->value ?? null)===null||$tmp==='' ? uniqid() ?? null : $tmp), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/select2/categories_bulkedit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('select2_multiple'=>true,'select2_select_id'=>"product_features_categories_add_".$_prefixVariable3,'select2_name'=>"product_features[category_ids]",'select2_allow_sorting'=>true,'select2_dropdown_parent'=>"#bulk_edit_categories_list_content",'select2_category_ids'=>$_smarty_tpl->tpl_vars['bulk_edit_ids_flat']->value,'select2_bulk_edit_mode'=>true,'select2_bulk_edit_mode_category_ids'=>$_smarty_tpl->tpl_vars['bulk_edit_ids']->value,'disable_categories'=>true,'select2_wrapper_meta'=>"cm-field-container",'select2_select_meta'=>"input-large bulk-edit__categories-picker"), 0, false);
?>
                        <!--bulk_edit_categories_list_content--></div>
                </div>
                <!--bulk_edit_categories_list--></div>

            <div class="bulk-edit-inner__footer">
                <button class="btn bulk-edit-inner__btn"
                        role="button"
                        data-ca-bulkedit-mod-cat-cancel
                ><?php echo $_smarty_tpl->__("reset");?>
</button>
                <button class="btn btn-primary bulk-edit-inner__btn"
                        role="button"
                        data-ca-bulkedit-mod-result-ids="pagination_contents"
                        data-ca-bulkedit-mod-object-type="features"
                        data-ca-bulkedit-mod-cat-update
                        data-ca-bulkedit-mod-can-all-categories-be-deleted="true"
                        data-ca-bulkedit-mod-target-form="[name=manage_product_features_form]"
                        data-ca-bulkedit-mod-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                        data-ca-bulkedit-mod-dispatch="product_features.m_set_categories"
                ><?php echo $_smarty_tpl->__("apply");?>
</button>
            </div>
        </div>
    </div>

    <div class="bulk-edit--overlay"></div>
</li>
<?php }
}
