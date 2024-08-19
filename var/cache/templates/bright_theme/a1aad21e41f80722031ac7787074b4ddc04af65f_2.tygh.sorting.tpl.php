<?php
/* Smarty version 4.1.1, created on 2024-08-06 11:09:45
  from '/app/www/design/themes/responsive/templates/views/companies/components/sorting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b1da491a5f74_68327932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1aad21e41f80722031ac7787074b4ddc04af65f' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/companies/components/sorting.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/sorting.tpl' => 2,
  ),
),false)) {
function content_66b1da491a5f74_68327932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-sort-container">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");
}?>

<?php $_smarty_tpl->_assignInScope('curl', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids"));
$_smarty_tpl->_assignInScope('sorting', fn_get_companies_sorting(''));
$_smarty_tpl->_assignInScope('sorting_orders', fn_get_companies_sorting_orders(''));
$_smarty_tpl->_assignInScope('pagination_id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>

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

<div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_pref'=>"company-"), 0, false);
?>
</div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/components/sorting.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/components/sorting.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-sort-container">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");
}?>

<?php $_smarty_tpl->_assignInScope('curl', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids"));
$_smarty_tpl->_assignInScope('sorting', fn_get_companies_sorting(''));
$_smarty_tpl->_assignInScope('sorting_orders', fn_get_companies_sorting_orders(''));
$_smarty_tpl->_assignInScope('pagination_id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>

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

<div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_pref'=>"company-"), 0, true);
?>
</div>
</div>
<?php }
}
}
