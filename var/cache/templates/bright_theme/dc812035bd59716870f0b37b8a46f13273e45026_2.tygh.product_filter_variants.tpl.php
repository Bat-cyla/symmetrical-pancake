<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:25:08
  from '/app/www/design/themes/responsive/templates/blocks/product_filters/components/product_filter_variants.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e0746827f8_28461602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc812035bd59716870f0b37b8a46f13273e45026' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/product_filters/components/product_filter_variants.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b5e0746827f8_28461602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),4=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('storefront_search_field','clear','no_items_found','storefront_search_field','clear','no_items_found'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><ul class="ty-product-filters <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count'] && smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants']) > $_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
    <li>
        <?php echo smarty_function_script(array('src'=>"js/tygh/filter_table.js"),$_smarty_tpl);?>


        <div class="ty-product-filters__search">
        <input type="text" placeholder="<?php echo $_smarty_tpl->__("storefront_search_field");?>
" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" value="" />
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-product-filters__search-icon hidden",'id'=>"elm_search_clear_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value),'title'=>$_smarty_tpl->__("clear")),$_smarty_tpl);?>

        </div>
    </li>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('white_color', "#ffffff");?>

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['variants']) {?>
        <?php if ($_smarty_tpl->tpl_vars['filter']->value['filter_style'] == smarty_modifier_enum("ProductFilterStyles::COLOR")) {?>
            <div class="ty-product-filters__color-filter">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                    <li class="ty-product-filters__color-list-item cm-product-filters-checkbox-container">
                        <label
                            id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                            name="product_filters[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]"
                            class="ty-product-filters__color-filter-item
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-item--selected<?php } else { ?>ty-product-filters__color-filter-item--disabled<?php }
}?>"
                            data-cm-product-color-filter="true"
                            data-ca-product-color-filter-checkbox-id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
">
                            <input
                                class="cm-product-filters-checkbox ty-product-filters__color-filter-checkbox"
                                type="checkbox"
                                data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
"
                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled'] && !$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?> />
                            <?php $_smarty_tpl->_assignInScope('variant_selected_class', $_smarty_tpl->tpl_vars['variant']->value['selected'] ? "ty-product-filters__color-filter-check--selected" : '');?>
                            <?php $_smarty_tpl->_assignInScope('variant_color_class', $_smarty_tpl->tpl_vars['variant']->value['color'] === $_smarty_tpl->tpl_vars['white_color']->value ? "ty-product-filters__color-filter-check--invert" : '');?>
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-product-filters__color-filter-check ".((string)$_smarty_tpl->tpl_vars['variant_selected_class']->value)." ".((string)$_smarty_tpl->tpl_vars['variant_color_class']->value)),$_smarty_tpl);?>

                            <div
                                class="ty-product-filters__color-filter-swatch
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-swatch--selected<?php }?>"
                                style="background-color:<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['variant']->value['color'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['white_color']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            </div>
                        </label>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?>
            <li class="ty-product-filters__item-more">
                <ul id="ranges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>style="max-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['display_count']*2, ENT_QUOTES, 'UTF-8');?>
em;"<?php }?> class="ty-product-filters__variants cm-filter-table" data-ca-input-id="elm_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-clear-id="elm_search_clear_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-empty-id="elm_search_empty_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                        <li class="cm-product-filters-checkbox-container ty-product-filters__group">
                            <label <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {?> class="<?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__empty-result<?php } else { ?>disabled<?php }?>"<?php }?>>
                                <input class="cm-product-filters-checkbox"
                                       type="checkbox"
                                       <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked="checked"<?php }?>
                                       name="product_filters[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                       data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled'] && !$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?>>
                                <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </label>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </li>
        <?php }?>
        <li>
            <p id="elm_search_empty_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__no-items-found hidden"><?php echo $_smarty_tpl->__("no_items_found");?>
</p>
        </li>
    <?php }?>
</ul>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/components/product_filter_variants.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/components/product_filter_variants.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><ul class="ty-product-filters <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count'] && smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants']) > $_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
    <li>
        <?php echo smarty_function_script(array('src'=>"js/tygh/filter_table.js"),$_smarty_tpl);?>


        <div class="ty-product-filters__search">
        <input type="text" placeholder="<?php echo $_smarty_tpl->__("storefront_search_field");?>
" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" value="" />
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-product-filters__search-icon hidden",'id'=>"elm_search_clear_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value),'title'=>$_smarty_tpl->__("clear")),$_smarty_tpl);?>

        </div>
    </li>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('white_color', "#ffffff");?>

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['variants']) {?>
        <?php if ($_smarty_tpl->tpl_vars['filter']->value['filter_style'] == smarty_modifier_enum("ProductFilterStyles::COLOR")) {?>
            <div class="ty-product-filters__color-filter">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                    <li class="ty-product-filters__color-list-item cm-product-filters-checkbox-container">
                        <label
                            id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                            name="product_filters[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]"
                            class="ty-product-filters__color-filter-item
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-item--selected<?php } else { ?>ty-product-filters__color-filter-item--disabled<?php }
}?>"
                            data-cm-product-color-filter="true"
                            data-ca-product-color-filter-checkbox-id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
">
                            <input
                                class="cm-product-filters-checkbox ty-product-filters__color-filter-checkbox"
                                type="checkbox"
                                data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
"
                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled'] && !$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?> />
                            <?php $_smarty_tpl->_assignInScope('variant_selected_class', $_smarty_tpl->tpl_vars['variant']->value['selected'] ? "ty-product-filters__color-filter-check--selected" : '');?>
                            <?php $_smarty_tpl->_assignInScope('variant_color_class', $_smarty_tpl->tpl_vars['variant']->value['color'] === $_smarty_tpl->tpl_vars['white_color']->value ? "ty-product-filters__color-filter-check--invert" : '');?>
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-product-filters__color-filter-check ".((string)$_smarty_tpl->tpl_vars['variant_selected_class']->value)." ".((string)$_smarty_tpl->tpl_vars['variant_color_class']->value)),$_smarty_tpl);?>

                            <div
                                class="ty-product-filters__color-filter-swatch
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-swatch--selected<?php }?>"
                                style="background-color:<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['variant']->value['color'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['white_color']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            </div>
                        </label>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?>
            <li class="ty-product-filters__item-more">
                <ul id="ranges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>style="max-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['display_count']*2, ENT_QUOTES, 'UTF-8');?>
em;"<?php }?> class="ty-product-filters__variants cm-filter-table" data-ca-input-id="elm_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-clear-id="elm_search_clear_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-empty-id="elm_search_empty_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                        <li class="cm-product-filters-checkbox-container ty-product-filters__group">
                            <label <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {?> class="<?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__empty-result<?php } else { ?>disabled<?php }?>"<?php }?>>
                                <input class="cm-product-filters-checkbox"
                                       type="checkbox"
                                       <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked="checked"<?php }?>
                                       name="product_filters[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                       data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled'] && !$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?>>
                                <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </label>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </li>
        <?php }?>
        <li>
            <p id="elm_search_empty_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__no-items-found hidden"><?php echo $_smarty_tpl->__("no_items_found");?>
</p>
        </li>
    <?php }?>
</ul>
<?php }
}
}
