<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:04
  from '/app/www/design/themes/responsive/templates/views/products/components/product_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49ee05dec61_71426399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '852bff0cbe2c036673233bb580f841a0671d6451' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/products/components/product_features.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/help.tpl' => 2,
    'tygh:common/subheader.tpl' => 2,
    'tygh:views/products/components/product_features.tpl' => 3,
  ),
),false)) {
function content_66b49ee05dec61_71426399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] != smarty_modifier_enum("ProductFeatures::GROUP")) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-help-circle",'assign'=>'link_text_icon'),$_smarty_tpl);?>

        <div class="ty-product-feature">
        <div class="ty-product-feature__label"><?php echo $_smarty_tpl->tpl_vars['feature']->value['description'];
if (trim($_smarty_tpl->tpl_vars['feature']->value['full_description'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'content'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'show_brackets'=>false,'link_text'=>"<span class=\"ty-tooltip-block\">".((string)$_smarty_tpl->tpl_vars['link_text_icon']->value)."</span>",'wysiwyg'=>true), 0, true);
}?>:</div>

        <?php $_smarty_tpl->_assignInScope('hide_affix', $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX"));?>

        <div class="ty-product-feature__value"><?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix'] && !$_smarty_tpl->tpl_vars['hide_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {?><span class="ty-compare-checkbox"><?php if ($_smarty_tpl->tpl_vars['feature']->value['value'] === smarty_modifier_enum("YesNo::YES")) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);
}?></span><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX") && $_smarty_tpl->tpl_vars['feature']->value['variants']) {?><ul class="ty-product-feature__multiple"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
$_smarty_tpl->_assignInScope('hide_variant_affix', !$_smarty_tpl->tpl_vars['hide_affix']->value);
if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><li class="ty-product-feature__multiple-item"><span class="ty-compare-checkbox"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);?>
</span><?php if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php } elseif (in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],array(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"),smarty_modifier_enum("ProductFeatures::EXTENDED"),smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');
break 1;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((string) (($tmp = floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']) ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['feature']->value['value'] ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['suffix'] && !$_smarty_tpl->tpl_vars['hide_affix']->value) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::GROUP") && $_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
        <div class="ty-product-feature-group">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'tooltip'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'text'=>$_smarty_tpl->tpl_vars['feature']->value['description']), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->tpl_vars['feature']->value['subfeatures']), 0, true);
?>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_features.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_features.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] != smarty_modifier_enum("ProductFeatures::GROUP")) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-help-circle",'assign'=>'link_text_icon'),$_smarty_tpl);?>

        <div class="ty-product-feature">
        <div class="ty-product-feature__label"><?php echo $_smarty_tpl->tpl_vars['feature']->value['description'];
if (trim($_smarty_tpl->tpl_vars['feature']->value['full_description'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'content'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'show_brackets'=>false,'link_text'=>"<span class=\"ty-tooltip-block\">".((string)$_smarty_tpl->tpl_vars['link_text_icon']->value)."</span>",'wysiwyg'=>true), 0, true);
}?>:</div>

        <?php $_smarty_tpl->_assignInScope('hide_affix', $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX"));?>

        <div class="ty-product-feature__value"><?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix'] && !$_smarty_tpl->tpl_vars['hide_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {?><span class="ty-compare-checkbox"><?php if ($_smarty_tpl->tpl_vars['feature']->value['value'] === smarty_modifier_enum("YesNo::YES")) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);
}?></span><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX") && $_smarty_tpl->tpl_vars['feature']->value['variants']) {?><ul class="ty-product-feature__multiple"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
$_smarty_tpl->_assignInScope('hide_variant_affix', !$_smarty_tpl->tpl_vars['hide_affix']->value);
if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><li class="ty-product-feature__multiple-item"><span class="ty-compare-checkbox"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);?>
</span><?php if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php } elseif (in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],array(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"),smarty_modifier_enum("ProductFeatures::EXTENDED"),smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');
break 1;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((string) (($tmp = floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']) ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['feature']->value['value'] ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['suffix'] && !$_smarty_tpl->tpl_vars['hide_affix']->value) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::GROUP") && $_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
        <div class="ty-product-feature-group">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'tooltip'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'text'=>$_smarty_tpl->tpl_vars['feature']->value['description']), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->tpl_vars['feature']->value['subfeatures']), 0, true);
?>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
