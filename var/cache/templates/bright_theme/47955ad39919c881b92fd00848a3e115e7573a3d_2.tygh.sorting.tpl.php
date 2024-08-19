<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:25:08
  from '/app/www/design/themes/responsive/templates/views/products/components/sorting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e074c947b7_28044278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47955ad39919c881b92fd00848a3e115e7573a3d' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/products/components/sorting.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/sorting.tpl' => 2,
  ),
),false)) {
function content_66b5e074c947b7_28044278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('per_page','per_page','per_page','per_page'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-sort-container">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");
}?>

<?php $_smarty_tpl->_assignInScope('curl', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids","layout"));
$_smarty_tpl->_assignInScope('sorting', fn_get_products_sorting(''));
$_smarty_tpl->_assignInScope('sorting_orders', fn_get_products_sorting_orders(''));
$_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,false));
$_smarty_tpl->_assignInScope('pagination_id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));
$_smarty_tpl->_assignInScope('avail_sorting', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['available_product_list_sortings']);?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == "asc") {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sorting_text", null, null);?>
        <a><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir"),$_smarty_tpl);?>
</a>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else { ?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sorting_text", null, null);?>
        <a><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir"),$_smarty_tpl);?>
</a>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php if (!((smarty_modifier_count($_smarty_tpl->tpl_vars['category_data']->value['selected_views']) == 1) || (smarty_modifier_count($_smarty_tpl->tpl_vars['category_data']->value['selected_views']) == 0 && smarty_modifier_count(fn_get_products_views('',true)) <= 1)) && !$_smarty_tpl->tpl_vars['hide_layouts']->value) {?>
<div class="ty-sort-container__views-icons">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layouts']->value, 'item', false, 'layout');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
if (($_smarty_tpl->tpl_vars['category_data']->value['selected_views'][$_smarty_tpl->tpl_vars['layout']->value]) || (!$_smarty_tpl->tpl_vars['category_data']->value['selected_views'] && $_smarty_tpl->tpl_vars['item']->value['active'])) {?>
    <?php if ($_smarty_tpl->tpl_vars['layout']->value == $_smarty_tpl->tpl_vars['selected_layout']->value) {?>
        <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['search']->value['sort_order_rev']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['search']->value['sort_order']);?>
    <?php }?>
<a class="ty-sort-container__views-a <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['layout']->value == $_smarty_tpl->tpl_vars['selected_layout']->value) {?>active<?php }?>" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)."&layout=".((string)$_smarty_tpl->tpl_vars['layout']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-".((string)(smarty_modifier_replace($_smarty_tpl->tpl_vars['layout']->value,'_','-')))),$_smarty_tpl);?>

</a>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['avail_sorting']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_assignInScope('pagination', fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value));?>

<?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_items']) {
$_smarty_tpl->_assignInScope('range_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"items_per_page","page"));
$_smarty_tpl->_assignInScope('product_steps', fn_get_product_pagination_steps($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['products_per_page']));?>
<div class="ty-sort-dropdown">
<a id="sw_elm_pagination_steps" class="ty-sort-dropdown__wrapper cm-combination"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['items_per_page'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("per_page");
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-sort-dropdown__icon"),$_smarty_tpl);?>
</a>
    <ul id="elm_pagination_steps" class="ty-sort-dropdown__content cm-popup-box hidden">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_steps']->value, 'step');
$_smarty_tpl->tpl_vars['step']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['step']->value != $_smarty_tpl->tpl_vars['pagination']->value['items_per_page']) {?>
            <li class="ty-sort-dropdown__content-item">
                <a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item-a" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['range_url']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['step']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['step']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("per_page");?>
</a>
            </li>
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/sorting.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/sorting.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-sort-container">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");
}?>

<?php $_smarty_tpl->_assignInScope('curl', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids","layout"));
$_smarty_tpl->_assignInScope('sorting', fn_get_products_sorting(''));
$_smarty_tpl->_assignInScope('sorting_orders', fn_get_products_sorting_orders(''));
$_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,false));
$_smarty_tpl->_assignInScope('pagination_id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));
$_smarty_tpl->_assignInScope('avail_sorting', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['available_product_list_sortings']);?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == "asc") {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sorting_text", null, null);?>
        <a><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir"),$_smarty_tpl);?>
</a>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else { ?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sorting_text", null, null);?>
        <a><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir"),$_smarty_tpl);?>
</a>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php if (!((smarty_modifier_count($_smarty_tpl->tpl_vars['category_data']->value['selected_views']) == 1) || (smarty_modifier_count($_smarty_tpl->tpl_vars['category_data']->value['selected_views']) == 0 && smarty_modifier_count(fn_get_products_views('',true)) <= 1)) && !$_smarty_tpl->tpl_vars['hide_layouts']->value) {?>
<div class="ty-sort-container__views-icons">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layouts']->value, 'item', false, 'layout');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
if (($_smarty_tpl->tpl_vars['category_data']->value['selected_views'][$_smarty_tpl->tpl_vars['layout']->value]) || (!$_smarty_tpl->tpl_vars['category_data']->value['selected_views'] && $_smarty_tpl->tpl_vars['item']->value['active'])) {?>
    <?php if ($_smarty_tpl->tpl_vars['layout']->value == $_smarty_tpl->tpl_vars['selected_layout']->value) {?>
        <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['search']->value['sort_order_rev']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['search']->value['sort_order']);?>
    <?php }?>
<a class="ty-sort-container__views-a <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['layout']->value == $_smarty_tpl->tpl_vars['selected_layout']->value) {?>active<?php }?>" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)."&layout=".((string)$_smarty_tpl->tpl_vars['layout']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-".((string)(smarty_modifier_replace($_smarty_tpl->tpl_vars['layout']->value,'_','-')))),$_smarty_tpl);?>

</a>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['avail_sorting']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php $_smarty_tpl->_assignInScope('pagination', fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value));?>

<?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_items']) {
$_smarty_tpl->_assignInScope('range_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"items_per_page","page"));
$_smarty_tpl->_assignInScope('product_steps', fn_get_product_pagination_steps($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['products_per_page']));?>
<div class="ty-sort-dropdown">
<a id="sw_elm_pagination_steps" class="ty-sort-dropdown__wrapper cm-combination"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['items_per_page'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("per_page");
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-sort-dropdown__icon"),$_smarty_tpl);?>
</a>
    <ul id="elm_pagination_steps" class="ty-sort-dropdown__content cm-popup-box hidden">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_steps']->value, 'step');
$_smarty_tpl->tpl_vars['step']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['step']->value != $_smarty_tpl->tpl_vars['pagination']->value['items_per_page']) {?>
            <li class="ty-sort-dropdown__content-item">
                <a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item-a" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['range_url']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['step']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['step']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("per_page");?>
</a>
            </li>
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }?>
</div>
<?php }
}
}
