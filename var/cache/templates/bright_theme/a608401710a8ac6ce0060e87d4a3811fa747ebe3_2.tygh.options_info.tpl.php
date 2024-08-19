<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:42
  from '/app/www/design/themes/responsive/templates/common/options_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e10ec788e8_30044624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a608401710a8ac6ce0060e87d4a3811fa747ebe3' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/common/options_info.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/modifier.tpl' => 2,
  ),
),false)) {
function content_66b5e10ec788e8_30044624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('options','options'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_options_title', (($tmp = $_smarty_tpl->tpl_vars['show_options_title']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('option_value', trim($_smarty_tpl->tpl_vars['po']->value['value']));?>
        <?php if ((isset($_smarty_tpl->tpl_vars['option_value']->value)) && strlen($_smarty_tpl->tpl_vars['option_value']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('has_option', true);?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['has_option']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
            <div class="ty-control-group ty-product-options__info clearfix">
            <?php if ($_smarty_tpl->tpl_vars['show_options_title']->value) {?>
                <label class="ty-product-options__title"><?php echo $_smarty_tpl->__("options");?>
:</label>
            <?php }?>
        <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'po', false, NULL, 'po_opt', array (
));
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
if (($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP")) && !$_smarty_tpl->tpl_vars['po']->value['value']) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['po']->value['variants']) {
$_smarty_tpl->_assignInScope('var', $_smarty_tpl->tpl_vars['po']->value['variants'][$_smarty_tpl->tpl_vars['po']->value['value']]);
} else {
$_smarty_tpl->_assignInScope('var', $_smarty_tpl->tpl_vars['po']->value);
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "options_content", null, null);
if (!$_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['var']->value['variant_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['var']->value['value'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']], 'file', false, NULL, 'po_files', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['total'];
$_smarty_tpl->_assignInScope('filename', rawurlencode((string)$_smarty_tpl->tpl_vars['file']->value['name']));?><a class="cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("orders.get_custom_file?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&file=".((string)$_smarty_tpl->tpl_vars['file']->value['file'])."&filename=".((string)$_smarty_tpl->tpl_vars['filename']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['name'],"40"), ENT_QUOTES, 'UTF-8');?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers'] == "Y") {
if (floatval($_smarty_tpl->tpl_vars['var']->value['modifier'])) {?>&nbsp;(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['var']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['var']->value['modifier'],'display_sign'=>true), 0, true);
?>)<?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'options_content')) != '&nbsp;') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"options:options_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"options:options_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="ty-product-options clearfix"><span class="ty-product-options-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</span><span class="ty-product-options-content"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'options_content');
if ($_smarty_tpl->tpl_vars['inline_option']->value) {?>;<?php }?>&nbsp;</span></span><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"options:options_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['fields_prefix']->value) {?><input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fields_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
" /><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
        </div>
        <?php }?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/options_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/options_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_options_title', (($tmp = $_smarty_tpl->tpl_vars['show_options_title']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('option_value', trim($_smarty_tpl->tpl_vars['po']->value['value']));?>
        <?php if ((isset($_smarty_tpl->tpl_vars['option_value']->value)) && strlen($_smarty_tpl->tpl_vars['option_value']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('has_option', true);?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['has_option']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
            <div class="ty-control-group ty-product-options__info clearfix">
            <?php if ($_smarty_tpl->tpl_vars['show_options_title']->value) {?>
                <label class="ty-product-options__title"><?php echo $_smarty_tpl->__("options");?>
:</label>
            <?php }?>
        <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'po', false, NULL, 'po_opt', array (
));
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
if (($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP")) && !$_smarty_tpl->tpl_vars['po']->value['value']) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['po']->value['variants']) {
$_smarty_tpl->_assignInScope('var', $_smarty_tpl->tpl_vars['po']->value['variants'][$_smarty_tpl->tpl_vars['po']->value['value']]);
} else {
$_smarty_tpl->_assignInScope('var', $_smarty_tpl->tpl_vars['po']->value);
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "options_content", null, null);
if (!$_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['var']->value['variant_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['var']->value['value'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']], 'file', false, NULL, 'po_files', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['total'];
$_smarty_tpl->_assignInScope('filename', rawurlencode((string)$_smarty_tpl->tpl_vars['file']->value['name']));?><a class="cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("orders.get_custom_file?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&file=".((string)$_smarty_tpl->tpl_vars['file']->value['file'])."&filename=".((string)$_smarty_tpl->tpl_vars['filename']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['name'],"40"), ENT_QUOTES, 'UTF-8');?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers'] == "Y") {
if (floatval($_smarty_tpl->tpl_vars['var']->value['modifier'])) {?>&nbsp;(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['var']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['var']->value['modifier'],'display_sign'=>true), 0, true);
?>)<?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'options_content')) != '&nbsp;') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"options:options_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"options:options_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="ty-product-options clearfix"><span class="ty-product-options-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</span><span class="ty-product-options-content"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'options_content');
if ($_smarty_tpl->tpl_vars['inline_option']->value) {?>;<?php }?>&nbsp;</span></span><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"options:options_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['fields_prefix']->value) {?><input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fields_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
" /><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
        </div>
        <?php }?>
    <?php }
}
}
}
}
