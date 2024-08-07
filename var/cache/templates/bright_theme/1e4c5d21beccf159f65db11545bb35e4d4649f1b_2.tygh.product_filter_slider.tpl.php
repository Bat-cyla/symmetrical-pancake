<?php
/* Smarty version 4.1.1, created on 2024-08-06 10:01:34
  from '/app/www/design/themes/responsive/templates/blocks/product_filters/components/product_filter_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b1ca4e545b25_13801722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e4c5d21beccf159f65db11545bb35e4d4649f1b' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/product_filters/components/product_filter_slider.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b1ca4e545b25_13801722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/lib/jqueryuitouch/jquery.ui.touch-punch.min.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('min', $_smarty_tpl->tpl_vars['filter']->value['min']);
$_smarty_tpl->_assignInScope('max', $_smarty_tpl->tpl_vars['filter']->value['max']);
$_smarty_tpl->_assignInScope('left', (($tmp = $_smarty_tpl->tpl_vars['filter']->value['left'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['min']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('right', (($tmp = $_smarty_tpl->tpl_vars['filter']->value['right'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['max']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('disable_slider', $_smarty_tpl->tpl_vars['filter']->value['disable']);?>

<?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>
    <?php $_smarty_tpl->_assignInScope('value', ((string)$_smarty_tpl->tpl_vars['filter']->value['current_left']).((string)(defined('FILTERS_HASH_FEATURE_SEPARATOR') ? constant('FILTERS_HASH_FEATURE_SEPARATOR') : null)).((string)$_smarty_tpl->tpl_vars['filter']->value['current_right']));?>

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['extra']) {?>
        <?php $_smarty_tpl->_assignInScope('value', ((string)$_smarty_tpl->tpl_vars['value']->value).((string)(defined('FILTERS_HASH_FEATURE_SEPARATOR') ? constant('FILTERS_HASH_FEATURE_SEPARATOR') : null)).((string)$_smarty_tpl->tpl_vars['filter']->value['extra']));?>
    <?php }
}?>

<div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-product-filters-checkbox-container ty-price-slider <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <p class="ty-price-slider__inputs">
        <bdi class="ty-price-slider__bidi-container">
            <span class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
</span>
            <input type="text"
                class="ty-price-slider__input-text"
                id="slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_left"
                name="left_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?>
                    disabled="disabled"
                <?php }?>
                data-ca-previous-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <span class="ty-price-slider__filter-suffix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
        </bdi>
        &nbsp;–&nbsp;
        <bdi class="ty-price-slider__bidi-container">
            <span class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
</span>
            <input type="text"
                class="ty-price-slider__input-text"
                id="slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_right"
                name="right_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?>
                    disabled="disabled"
                <?php }?>
                data-ca-previous-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <span class="ty-price-slider__filter-suffix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
        </bdi>
    </p>
        <div id="slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-range-slider cm-range-slider">
            <ul class="ty-range-slider__wrapper">
                <li class="ty-range-slider__item" style="left: 0%;">
                    <span class="ty-range-slider__num">
                        <span><bdi><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</bdi></span>
                    </span>
                </li>
                <li class="ty-range-slider__item" style="left: 100%;">
                    <span class="ty-range-slider__num">
                        <span><bdi><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</bdi></span>
                    </span>
                </li>
            </ul>
        </div>

        <input id="elm_checkbox_slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-product-filters-checkbox hidden" type="checkbox" name="product_filters[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>checked="checked"<?php }?> />

                <input type="hidden" id="slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_json" value='{
            "disabled": <?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['disable_slider']->value), ENT_QUOTES, 'UTF-8');?>
,
            "min": <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'UTF-8');?>
,
            "max": <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'UTF-8');?>
,
            "left": <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');?>
,
            "right": <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');?>
,
            "step": <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['round_to'], ENT_QUOTES, 'UTF-8');?>
,
            "extra": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['extra'], ENT_QUOTES, 'UTF-8');?>
"
        }' />
        </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/components/product_filter_slider.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/components/product_filter_slider.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/lib/jqueryuitouch/jquery.ui.touch-punch.min.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('min', $_smarty_tpl->tpl_vars['filter']->value['min']);
$_smarty_tpl->_assignInScope('max', $_smarty_tpl->tpl_vars['filter']->value['max']);
$_smarty_tpl->_assignInScope('left', (($tmp = $_smarty_tpl->tpl_vars['filter']->value['left'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['min']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('right', (($tmp = $_smarty_tpl->tpl_vars['filter']->value['right'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['max']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('disable_slider', $_smarty_tpl->tpl_vars['filter']->value['disable']);?>

<?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>
    <?php $_smarty_tpl->_assignInScope('value', ((string)$_smarty_tpl->tpl_vars['filter']->value['current_left']).((string)(defined('FILTERS_HASH_FEATURE_SEPARATOR') ? constant('FILTERS_HASH_FEATURE_SEPARATOR') : null)).((string)$_smarty_tpl->tpl_vars['filter']->value['current_right']));?>

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['extra']) {?>
        <?php $_smarty_tpl->_assignInScope('value', ((string)$_smarty_tpl->tpl_vars['value']->value).((string)(defined('FILTERS_HASH_FEATURE_SEPARATOR') ? constant('FILTERS_HASH_FEATURE_SEPARATOR') : null)).((string)$_smarty_tpl->tpl_vars['filter']->value['extra']));?>
    <?php }
}?>

<div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-product-filters-checkbox-container ty-price-slider <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <p class="ty-price-slider__inputs">
        <bdi class="ty-price-slider__bidi-container">
            <span class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
</span>
            <input type="text"
                class="ty-price-slider__input-text"
                id="slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_left"
                name="left_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?>
                    disabled="disabled"
                <?php }?>
                data-ca-previous-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <span class="ty-price-slider__filter-suffix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
        </bdi>
        &nbsp;–&nbsp;
        <bdi class="ty-price-slider__bidi-container">
            <span class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
</span>
            <input type="text"
                class="ty-price-slider__input-text"
                id="slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_right"
                name="right_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?>
                    disabled="disabled"
                <?php }?>
                data-ca-previous-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <span class="ty-price-slider__filter-suffix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
        </bdi>
    </p>
        <div id="slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-range-slider cm-range-slider">
            <ul class="ty-range-slider__wrapper">
                <li class="ty-range-slider__item" style="left: 0%;">
                    <span class="ty-range-slider__num">
                        <span><bdi><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</bdi></span>
                    </span>
                </li>
                <li class="ty-range-slider__item" style="left: 100%;">
                    <span class="ty-range-slider__num">
                        <span><bdi><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</bdi></span>
                    </span>
                </li>
            </ul>
        </div>

        <input id="elm_checkbox_slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-product-filters-checkbox hidden" type="checkbox" name="product_filters[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>checked="checked"<?php }?> />

                <input type="hidden" id="slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_json" value='{
            "disabled": <?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['disable_slider']->value), ENT_QUOTES, 'UTF-8');?>
,
            "min": <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'UTF-8');?>
,
            "max": <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'UTF-8');?>
,
            "left": <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');?>
,
            "right": <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');?>
,
            "step": <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['round_to'], ENT_QUOTES, 'UTF-8');?>
,
            "extra": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['extra'], ENT_QUOTES, 'UTF-8');?>
"
        }' />
        </div>
<?php }
}
}
