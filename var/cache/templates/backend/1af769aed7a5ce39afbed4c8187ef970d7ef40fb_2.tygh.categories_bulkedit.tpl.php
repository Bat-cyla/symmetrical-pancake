<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/common/select2/categories_bulkedit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c19400653_41374393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1af769aed7a5ce39afbed4c8187ef970d7ef40fb' => 
    array (
      0 => '/app/www/design/backend/templates/common/select2/categories_bulkedit.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/categories/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_66aa1c19400653_41374393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/backend/categories.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"product_data[category_ids][]",'simple_class'=>"cm-field-container",'multiple'=>true,'id'=>((string)$_smarty_tpl->tpl_vars['select_id']->value),'data-ca-picker-id'=>"categories_".((string)$_smarty_tpl->tpl_vars['select2_select_id']->value),'tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'item_ids'=>$_smarty_tpl->tpl_vars['bulk_edit_ids_flat']->value,'meta'=>"object-categories-add object-categories-add--multiple object-categories-add--bulk-edit cm-object-categories-add-container",'select_class'=>"cm-bulk-edit-object-categories-add ".((string)$_smarty_tpl->tpl_vars['select_class']->value),'show_advanced'=>true,'allow_add'=>false,'allow_sorting'=>true,'result_class'=>"object-picker__result--inline",'selection_class'=>"object-picker__selection--product-categories",'required'=>true,'close_on_select'=>false,'allow_multiple_created_objects'=>true,'created_object_holder_selector'=>"[name='product_data[add_new_category][]']",'is_bulk_edit'=>true,'has_selection_controls'=>true,'has_removable_items'=>false,'is_tristate_checkbox'=>true), 0, false);
}
}
