<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:03
  from '/app/www/design/backend/templates/views/profiles/components/picker/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e0e72f98c9_30762318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b4edb7bd78dbeb1a2489605498c4c7739d92ee' => 
    array (
      0 => '/app/www/design/backend/templates/views/profiles/components/picker/picker.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/users/picker.tpl' => 1,
  ),
),false)) {
function content_66b5e0e72f98c9_30762318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),));
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search_or_click_button','type_to_search'));
?>

<?php $_smarty_tpl->_assignInScope('picker_id', (($tmp = $_smarty_tpl->tpl_vars['picker_id']->value ?? null)===null||$tmp==='' ? uniqid() ?? null : $tmp));
$_smarty_tpl->_assignInScope('picker_text_key', (($tmp = $_smarty_tpl->tpl_vars['picker_text_key']->value ?? null)===null||$tmp==='' ? "value" ?? null : $tmp));
$_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('multiple', (($tmp = $_smarty_tpl->tpl_vars['multiple']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_advanced', (($tmp = $_smarty_tpl->tpl_vars['show_advanced']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('autofocus', (($tmp = $_smarty_tpl->tpl_vars['autofocus']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('autoopen', (($tmp = $_smarty_tpl->tpl_vars['autoopen']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_ids', array_filter((($tmp = $_smarty_tpl->tpl_vars['item_ids']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)));
$_smarty_tpl->_assignInScope('ids', implode("ids[]=",$_smarty_tpl->tpl_vars['item_ids']->value));
$_smarty_tpl->_assignInScope('url', (($tmp = $_smarty_tpl->tpl_vars['url']->value ?? null)===null||$tmp==='' ? "profiles.get_manager_list?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)."&ids[]=".((string)$_smarty_tpl->tpl_vars['ids']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('dropdown_css_class', (($tmp = $_smarty_tpl->tpl_vars['dropdown_css_class']->value ?? null)===null||$tmp==='' ? "select2-dropdown-profiles" ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value && $_smarty_tpl->tpl_vars['show_advanced']->value) {?>
    <?php $_smarty_tpl->_assignInScope('empty_variant_text', (($tmp = $_smarty_tpl->tpl_vars['empty_variant_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search_or_click_button") ?? null : $tmp));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('empty_variant_text', (($tmp = $_smarty_tpl->tpl_vars['empty_variant_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search") ?? null : $tmp));
}?>

<?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['predefined_variants']) ? $_smarty_tpl->tpl_vars['predefined_variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array("id"=>0,"text"=>$_smarty_tpl->tpl_vars['empty_variant_text']->value);
$_smarty_tpl->_assignInScope('predefined_variants', $_tmp_array);
}?>

<div class="object-picker <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "external") {?>object-picker--external<?php }?> object-picker--profiles <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--profiles <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_group_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>
            <div class="object-picker__advanced object-picker__advanced--profiles <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['advanced_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>"radio",'but_meta'=>"object-picker__advanced-btn object-picker__advanced-btn--profiles ".((string)$_smarty_tpl->tpl_vars['object_picker_advanced_btn_class']->value)." btn",'but_icon'=>"icon-reorder",'extra_url'=>$_smarty_tpl->tpl_vars['extra_url']->value,'view_mode'=>"button",'user_info'=>$_smarty_tpl->tpl_vars['order_info']->value['issuer_data'],'data_id'=>"issuer_info",'input_name'=>"update_order[issuer_id]",'show_but_text'=>false,'picker_id'=>"object_picker_advanced_".((string)$_smarty_tpl->tpl_vars['picker_id']->value),'extra_var'=>(($tmp = $_smarty_tpl->tpl_vars['extra_var']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'shared_force'=>$_smarty_tpl->tpl_vars['users_shared_force']->value,'no_container'=>(($tmp = $_smarty_tpl->tpl_vars['no_container']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)), 0, false);
?>
            </div>
        <?php }?>
        
        <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value == "list") {?>object-picker__simple--list<?php }?> <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> object-picker__simple--profiles <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-object-picker object-picker__select object-picker__select--profiles <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="profiles"
                    data-ca-object-picker-dropdown-css-class=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_css_class']->value, ENT_QUOTES, 'UTF-8');?>

                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
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
                    data-ca-object-picker-extended-picker-id="object_picker_advanced_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-text-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_text_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['predefined_variants']->value) {?>
                        data-ca-object-picker-predefined-variants="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['predefined_variants']->value), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "external") {?>
                        data-ca-object-picker-external-container-selector="#object_picker_external_seleceted_profiles_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
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
</div><?php }
}
