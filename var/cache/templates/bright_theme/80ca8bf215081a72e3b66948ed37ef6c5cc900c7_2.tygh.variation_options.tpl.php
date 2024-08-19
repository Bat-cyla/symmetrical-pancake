<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:49:34
  from '/app/www/design/themes/responsive/templates/addons/product_bundles/components/options/variation_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdeb4ede4b84_32712941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ca8bf215081a72e3b66948ed37ef6c5cc900c7' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_bundles/components/options/variation_options.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bdeb4ede4b84_32712941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.specify_options_first','product_bundles.specify_options_first'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('variant_characters_threshold', (($tmp = $_smarty_tpl->tpl_vars['variant_characters_threshold']->value ?? null)===null||$tmp==='' ? 40 ?? null : $tmp));
$_smarty_tpl->_assignInScope('variants', array());
$_smarty_tpl->_assignInScope('has_required_options', false);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_bundles:variation_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_bundles:variation_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['product_options'] || $_smarty_tpl->tpl_vars['variants']->value) {?>

        <div class="ty-product-bundles-variation-options"
            id="product_bundles_product_item_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundle_product']->value['product_options'], 'product_option');
$_smarty_tpl->tpl_vars['product_option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_option']->value) {
$_smarty_tpl->tpl_vars['product_option']->do_else = false;
?>
                <input type="hidden"
                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_option']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                    name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_option']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                />

                                <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['product_option']->value['option_id']]) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundle_product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['product_option']->value['option_id']], 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['variants']) ? $_smarty_tpl->tpl_vars['variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);
$_smarty_tpl->_assignInScope('variants', $_tmp_array);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['product_option']->value['variants'][$_smarty_tpl->tpl_vars['product_option']->value['value']]['variant_name']) {?>
                                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['variants']) ? $_smarty_tpl->tpl_vars['variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_option']->value['variants'][$_smarty_tpl->tpl_vars['product_option']->value['value']]['variant_name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);
$_smarty_tpl->_assignInScope('variants', $_tmp_array);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['product_option']->value['variant_name']) {?>
                                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['variants']) ? $_smarty_tpl->tpl_vars['variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_option']->value['variant_name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);
$_smarty_tpl->_assignInScope('variants', $_tmp_array);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['product_option']->value['required'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['product_option']->value['value']) {?>
                    <?php $_smarty_tpl->_assignInScope('has_required_options', true);?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div class="ty-product-bundles-variation-options__content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                    <span class="ty-product-bundles-variation-options__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

        <!--product_bundles_product_item_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_bundles:variation_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_bundle_options_after", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['has_required_options']->value) {?>
        <label for="product_bundle_options_required_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="cm-required hidden"
                data-ca-validator-error-message="<?php echo $_smarty_tpl->__("product_bundles.specify_options_first");?>
"
                data-ca-product-bundles="optionsRequired"
        ></label>
        <input id="product_bundle_options_required_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                type="hidden"
                value=""
        />
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('has_required_options', $_smarty_tpl->tpl_vars['has_required_options']->value ,false ,2);
$_smarty_tpl->_assignInScope('product_bundle_options_after', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_bundle_options_after') ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/options/variation_options.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/options/variation_options.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('variant_characters_threshold', (($tmp = $_smarty_tpl->tpl_vars['variant_characters_threshold']->value ?? null)===null||$tmp==='' ? 40 ?? null : $tmp));
$_smarty_tpl->_assignInScope('variants', array());
$_smarty_tpl->_assignInScope('has_required_options', false);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_bundles:variation_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_bundles:variation_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['product_options'] || $_smarty_tpl->tpl_vars['variants']->value) {?>

        <div class="ty-product-bundles-variation-options"
            id="product_bundles_product_item_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundle_product']->value['product_options'], 'product_option');
$_smarty_tpl->tpl_vars['product_option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_option']->value) {
$_smarty_tpl->tpl_vars['product_option']->do_else = false;
?>
                <input type="hidden"
                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_option']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                    name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_option']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                />

                                <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['product_option']->value['option_id']]) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundle_product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['product_option']->value['option_id']], 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['variants']) ? $_smarty_tpl->tpl_vars['variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);
$_smarty_tpl->_assignInScope('variants', $_tmp_array);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['product_option']->value['variants'][$_smarty_tpl->tpl_vars['product_option']->value['value']]['variant_name']) {?>
                                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['variants']) ? $_smarty_tpl->tpl_vars['variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_option']->value['variants'][$_smarty_tpl->tpl_vars['product_option']->value['value']]['variant_name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);
$_smarty_tpl->_assignInScope('variants', $_tmp_array);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['product_option']->value['variant_name']) {?>
                                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['variants']) ? $_smarty_tpl->tpl_vars['variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_option']->value['variant_name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);
$_smarty_tpl->_assignInScope('variants', $_tmp_array);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['product_option']->value['required'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['product_option']->value['value']) {?>
                    <?php $_smarty_tpl->_assignInScope('has_required_options', true);?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div class="ty-product-bundles-variation-options__content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                    <span class="ty-product-bundles-variation-options__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

        <!--product_bundles_product_item_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_bundles:variation_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_bundle_options_after", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['has_required_options']->value) {?>
        <label for="product_bundle_options_required_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="cm-required hidden"
                data-ca-validator-error-message="<?php echo $_smarty_tpl->__("product_bundles.specify_options_first");?>
"
                data-ca-product-bundles="optionsRequired"
        ></label>
        <input id="product_bundle_options_required_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                type="hidden"
                value=""
        />
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('has_required_options', $_smarty_tpl->tpl_vars['has_required_options']->value ,false ,2);
$_smarty_tpl->_assignInScope('product_bundle_options_after', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_bundle_options_after') ,false ,2);
}
}
}
