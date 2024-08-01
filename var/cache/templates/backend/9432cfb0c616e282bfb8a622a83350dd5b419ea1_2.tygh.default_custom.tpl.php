<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:41
  from '/app/www/design/backend/templates/components/default_custom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd93d54a6_25092426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9432cfb0c616e282bfb8a622a83350dd5b419ea1' => 
    array (
      0 => '/app/www/design/backend/templates/components/default_custom.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab5bd93d54a6_25092426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('default_custom.custom_value','default_custom.custom'));
?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/components/default_custom.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('name', (($tmp = $_smarty_tpl->tpl_vars['name']->value ?? null)===null||$tmp==='' ? "default_custom" ?? null : $tmp));
$_smarty_tpl->_assignInScope('selectbox', array());
$_smarty_tpl->_assignInScope('item_map', array());
$_smarty_tpl->_assignInScope('selected', array());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['variant']) ? $_smarty_tpl->tpl_vars['variant']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['selected'] = ($_smarty_tpl->tpl_vars['variant']->value['value'] === $_smarty_tpl->tpl_vars['value']->value);
$_smarty_tpl->_assignInScope('variant', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['item_map']) ? $_smarty_tpl->tpl_vars['item_map']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['variant']->value['type']][] = $_smarty_tpl->tpl_vars['variant']->value;
$_smarty_tpl->_assignInScope('item_map', $_tmp_array);?>
    <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>
        <?php $_smarty_tpl->_assignInScope('selected', $_smarty_tpl->tpl_vars['variant']->value);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!$_smarty_tpl->tpl_vars['selected']->value) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['item_map']) ? $_smarty_tpl->tpl_vars['item_map']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['custom'][] = array("type"=>"custom","value"=>$_smarty_tpl->tpl_vars['value']->value,"name"=>$_smarty_tpl->__("default_custom.custom_value",array("value"=>$_smarty_tpl->tpl_vars['value']->value)),"selected"=>true);
$_smarty_tpl->_assignInScope('item_map', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['show_custom']->value) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['item_map']) ? $_smarty_tpl->tpl_vars['item_map']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['show_custom'][] = array("type"=>"custom_edit","value"=>null,"name"=>$_smarty_tpl->__("default_custom.custom"));
$_smarty_tpl->_assignInScope('item_map', $_tmp_array);
}?>

<div class="default-custom"
    data-ca-default-custom="main"
    data-ca-default-custom-selected-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-default-custom-selected-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
>
    <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['component_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-default-custom="select"
        <?php if ($_smarty_tpl->tpl_vars['disable_inputs']->value) {?>disabled="disabled"<?php }?>
    >
        <?php $_smarty_tpl->_assignInScope('items_count', 0);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array("disabled","inheritance","custom","variant","show_custom","inheritance_edit"), 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
            <?php if (($_smarty_tpl->tpl_vars['type']->value === "custom" && $_smarty_tpl->tpl_vars['items_count']->value > 0) || ($_smarty_tpl->tpl_vars['type']->value === "inheritance_edit" && !empty($_smarty_tpl->tpl_vars['item_map']->value[$_smarty_tpl->tpl_vars['type']->value]))) {?>
                <option disabled>─────────────</option>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['item_map']->value[$_smarty_tpl->tpl_vars['type']->value]) {?>
                <?php continue 1;?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('items', $_smarty_tpl->tpl_vars['item_map']->value[$_smarty_tpl->tpl_vars['type']->value]);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <option data-ca-default-custom="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['url']) {?>data-ca-default-custom-url="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['url']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['value']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?>selected<?php }?>
                >
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </option>

                <?php $_smarty_tpl->_assignInScope('items_count', $_smarty_tpl->tpl_vars['items_count']->value+1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <?php if ($_smarty_tpl->tpl_vars['show_custom']->value) {?>
        <input type="text"
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['items']->value['custom']['value'], ENT_QUOTES, 'UTF-8');?>
"
            class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_input_styles']->value, ENT_QUOTES, 'UTF-8');?>
 hidden"
            <?php if ($_smarty_tpl->tpl_vars['custom_input_attributes']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_input_attributes']->value, 'data_value', false, 'data_name');
$_smarty_tpl->tpl_vars['data_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_name']->value => $_smarty_tpl->tpl_vars['data_value']->value) {
$_smarty_tpl->tpl_vars['data_value']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['data_value']->value))) {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_value']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            disabled
            data-ca-default-custom="textbox"
        >
    <?php }?>
</div>
<?php }
}
