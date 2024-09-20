<?php
/* Smarty version 4.1.1, created on 2024-09-20 07:36:02
  from '/app/www/design/backend/templates/views/products/components/picker/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ecfbb2508692_10078826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85186ff38319cb7caa68692c0d4d877f15fadda' => 
    array (
      0 => '/app/www/design/backend/templates/views/products/components/picker/picker.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/products/picker.tpl' => 1,
    'tygh:views/products/components/picker/skeleton_external.tpl' => 2,
    'tygh:views/products/components/picker/item_extended.tpl' => 2,
    'tygh:views/products/components/picker/item_position.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:views/products/components/picker/item.tpl' => 1,
  ),
),false)) {
function content_66ecfbb2508692_10078826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),));
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search_or_click_button','none','advanced_products_search','no_data','delete'));
?>

<?php $_smarty_tpl->_assignInScope('picker_id', (($tmp = $_smarty_tpl->tpl_vars['picker_id']->value ?? null)===null||$tmp==='' ? uniqid() ?? null : $tmp));
$_smarty_tpl->_assignInScope('picker_text_key', (($tmp = $_smarty_tpl->tpl_vars['picker_text_key']->value ?? null)===null||$tmp==='' ? "value" ?? null : $tmp));
$_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('multiple', (($tmp = $_smarty_tpl->tpl_vars['multiple']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_advanced', (($tmp = $_smarty_tpl->tpl_vars['show_advanced']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('autofocus', (($tmp = $_smarty_tpl->tpl_vars['autofocus']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('autoopen', (($tmp = $_smarty_tpl->tpl_vars['autoopen']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_clear', (($tmp = $_smarty_tpl->tpl_vars['allow_clear']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_positions', (($tmp = $_smarty_tpl->tpl_vars['show_positions']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_ids', array_filter((($tmp = $_smarty_tpl->tpl_vars['item_ids']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)));
$_smarty_tpl->_assignInScope('for_current_storefront', (($tmp = $_smarty_tpl->tpl_vars['for_current_storefront']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('advanced_picker_id', (($tmp = $_smarty_tpl->tpl_vars['advanced_picker_id']->value ?? null)===null||$tmp==='' ? "object_picker_advanced_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('additional_query_params', (($tmp = $_smarty_tpl->tpl_vars['additional_query_params']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_in_stock', (($tmp = $_smarty_tpl->tpl_vars['show_in_stock']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value && $_smarty_tpl->tpl_vars['show_advanced']->value) {?>
    <?php $_smarty_tpl->_assignInScope('empty_variant_text', (($tmp = $_smarty_tpl->tpl_vars['empty_variant_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search_or_click_button") ?? null : $tmp));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('empty_variant_text', (($tmp = $_smarty_tpl->tpl_vars['empty_variant_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp));
}?>

<?php $_smarty_tpl->_assignInScope('meta', "cm-object-product-add-container ".((string)$_smarty_tpl->tpl_vars['meta']->value));?>

<div class="object-picker <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "external") {?>object-picker--external<?php }?> object-picker--product <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--products <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_group_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>
            <div class="object-picker__advanced object-picker__advanced--products <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['advanced_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php ob_start();
echo $_smarty_tpl->__("advanced_products_search");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('picker_id'=>((string)$_smarty_tpl->tpl_vars['advanced_picker_id']->value),'data_id'=>"om",'no_container'=>true,'icon'=>"icon-reorder",'but_text'=>$_prefixVariable1,'show_but_text'=>false,'view_mode'=>"button",'meta'=>"object-picker__advanced-btn object-picker__advanced-btn--products ".((string)$_smarty_tpl->tpl_vars['object_picker_advanced_btn_class']->value),'segment'=>$_smarty_tpl->tpl_vars['segment']->value,'additional_query_params'=>$_smarty_tpl->tpl_vars['additional_query_params']->value), 0, false);
?>
            </div>
        <?php }?>
        <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value == "list") {?>object-picker__simple--list<?php }?> <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> object-picker__simple--products <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-object-picker object-picker__select object-picker__select--products <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="product"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php ob_start();
if ($_smarty_tpl->tpl_vars['additional_query_params']->value) {
echo (string)$_smarty_tpl->tpl_vars['additional_query_params']->value;
}
$_prefixVariable2=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['for_current_storefront']->value) {
echo "&for_current_storefront=";
echo (string)$_smarty_tpl->tpl_vars['for_current_storefront']->value;
}
$_prefixVariable3=ob_get_clean();
echo htmlspecialchars((string) fn_url("products.get_products_list?".$_prefixVariable2.$_prefixVariable3), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-template-result-selector="#object_picker_result_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-selector="#object_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-load-selector="#object_picker_selection_load_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autoopen="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['submit_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['submit_form']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder="<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['empty_variant_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder-value=""
                    data-ca-object-picker-width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['advanced_picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-text-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_text_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "external") {?>
                        data-ca-object-picker-external-container-selector="#object_picker_selected_external_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
                        data-ca-object-picker-allow-clear="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['allow_clear']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-predefined-variants="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['empty_variant_text']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
echo htmlspecialchars((string) smarty_modifier_to_json(array(array("id"=>0,"text"=>$_prefixVariable4))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
            >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'item_id');
$_smarty_tpl->tpl_vars['item_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "external") {?>
        <div id="object_picker_selected_external_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="object-picker__selected-external <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_external_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'item_id');
$_smarty_tpl->tpl_vars['item_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->do_else = false;
?>
                <div class="object-picker__skeleton object-picker__skeleton--products <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selection_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-data="<?php echo htmlspecialchars((string) smarty_modifier_to_json(array("id"=>$_smarty_tpl->tpl_vars['item_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/skeleton_external.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <p class="no-items object-picker__selected-external-not-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
</div>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_result_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result object-picker__result--products <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_class']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['show_simple_product']->value) {?> object-picker__result--simple-products<?php }?>">
        <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_title_pre']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_title_post']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/item_extended.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"result",'title_pre'=>$_prefixVariable5,'title_post'=>$_prefixVariable6), 0, false);
?>
    </div>
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "external") {?>
    <?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
        <div class="cm-object-picker-object object-picker__selection-extended object-picker__selection-extended--products">
            <?php if ($_smarty_tpl->tpl_vars['show_positions']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/item_position.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
            <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selection_title_pre']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selection_title_post']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/item_extended.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"selection",'title_pre'=>$_prefixVariable7,'title_post'=>$_prefixVariable8), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"button-icon",'but_meta'=>"btn cm-object-picker-remove-object object-picker__products-delete",'but_icon'=>"icon-remove object-picker__products-delete-icon",'title'=>$_smarty_tpl->__("delete")), 0, false);
?>
        </div>
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
        <div class="cm-object-picker-object object-picker__selection object-picker__selection--products<?php if ($_smarty_tpl->tpl_vars['show_simple_product']->value) {?> object-picker__selection--simple-products<?php }?>">
            <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selection_title_pre']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable9 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selection_title_post']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable10 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"selection",'title_pre'=>$_prefixVariable9,'title_post'=>$_prefixVariable10), 0, false);
?>
        </div>
    <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_load_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton object-picker__skeleton--products">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/skeleton_external.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
<?php echo '</script'; ?>
><?php }
}
