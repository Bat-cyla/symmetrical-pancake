<?php
/* Smarty version 4.1.1, created on 2024-08-06 10:01:34
  from '/app/www/design/themes/responsive/templates/common/sorting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b1ca4ed44281_27110412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f448bd63038fe43acf9db396350306ced5f8d5d' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/common/sorting.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b1ca4ed44281_27110412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sort_by_','sort_by_','sort_by_','sort_by_'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-sort-dropdown">
    <a id="sw_elm_sort_fields" class="ty-sort-dropdown__wrapper cm-combination"><?php echo $_smarty_tpl->__("sort_by_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order']));
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-sort-dropdown__icon"),$_smarty_tpl);?>
</a>
    <ul id="elm_sort_fields" class="ty-sort-dropdown__content cm-popup-box hidden">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting']->value, 'value', false, 'option');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == $_smarty_tpl->tpl_vars['option']->value) {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['search']->value['sort_order_rev']);?>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['default_order']) {?>
                    <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['value']->value['default_order']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('sort_order', "asc");?>
                <?php }?>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting_orders']->value, 'sort_order');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] != $_smarty_tpl->tpl_vars['option']->value || $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == $_smarty_tpl->tpl_vars['sort_order']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('sort_class', "sort-by-".((string)$_smarty_tpl->tpl_vars['class_pref']->value).((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
                    <?php $_smarty_tpl->_assignInScope('sort_key', ((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
                    <?php if (!$_smarty_tpl->tpl_vars['avail_sorting']->value || $_smarty_tpl->tpl_vars['avail_sorting']->value[$_smarty_tpl->tpl_vars['sort_key']->value] == 'Y') {?>
                    <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item">
                        <a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item-a" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['option']->value)."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("sort_by_".((string)$_smarty_tpl->tpl_vars['option']->value)."_".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
</a>
                    </li>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/sorting.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/sorting.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-sort-dropdown">
    <a id="sw_elm_sort_fields" class="ty-sort-dropdown__wrapper cm-combination"><?php echo $_smarty_tpl->__("sort_by_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order']));
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-sort-dropdown__icon"),$_smarty_tpl);?>
</a>
    <ul id="elm_sort_fields" class="ty-sort-dropdown__content cm-popup-box hidden">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting']->value, 'value', false, 'option');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == $_smarty_tpl->tpl_vars['option']->value) {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['search']->value['sort_order_rev']);?>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['default_order']) {?>
                    <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['value']->value['default_order']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('sort_order', "asc");?>
                <?php }?>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting_orders']->value, 'sort_order');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] != $_smarty_tpl->tpl_vars['option']->value || $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == $_smarty_tpl->tpl_vars['sort_order']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('sort_class', "sort-by-".((string)$_smarty_tpl->tpl_vars['class_pref']->value).((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
                    <?php $_smarty_tpl->_assignInScope('sort_key', ((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
                    <?php if (!$_smarty_tpl->tpl_vars['avail_sorting']->value || $_smarty_tpl->tpl_vars['avail_sorting']->value[$_smarty_tpl->tpl_vars['sort_key']->value] == 'Y') {?>
                    <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item">
                        <a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item-a" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['option']->value)."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("sort_by_".((string)$_smarty_tpl->tpl_vars['option']->value)."_".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
</a>
                    </li>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
}
