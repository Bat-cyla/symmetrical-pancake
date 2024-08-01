<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:37
  from '/app/www/design/backend/templates/views/categories/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd5370661_61805836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cab7018578d97b53a4d99dfde072538b6c752ac' => 
    array (
      0 => '/app/www/design/backend/templates/views/categories/manage.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/categories/components/categories_tree.tpl' => 1,
    'tygh:views/categories/components/categories_select_fields.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66ab5bd5370661_61805836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_items','text_select_fields2edit_note','cancel','modify_selected','select_fields_to_edit','bulk_category_addition','add_category','total','categories','products','active_categories','hidden_categories','disabled_categories','categories'));
echo smarty_function_script(array('src'=>"js/tygh/backend/categories_bulk_edit.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
    <?php $_smarty_tpl->_assignInScope('direction', "right");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('direction', "left");
}?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_assignInScope('storefront_id', $_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('storefront_id', (($tmp = $_REQUEST['s_storefront'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);
$_smarty_tpl->_assignInScope('hide_inputs', fn_check_form_permissions(''));?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="category_tree_form" id="category_tree_form">
    <div class="items-container">
    <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
        <div data-ca-longtap>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:context_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:context_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"context_menu.context_menu",'object'=>"categories",'form'=>"category_tree_form"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>"categories",'form'=>"category_tree_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>"categories",'form'=>"category_tree_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:context_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <div class="table-wrapper">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('header'=>"1",'parent_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'st_result_ids'=>"categories_stats",'st_return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url'],'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, false);
?>
            </div>
        </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
    <?php }?>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "select_fields_to_edit", null, null);?>

    <p><?php echo $_smarty_tpl->__("text_select_fields2edit_note");?>
</p>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/categories_select_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="buttons-container">
        <a class="cm-dialog-closer cm-inline-dialog-closer tool-link btn bulkedit-unchanged"><?php echo $_smarty_tpl->__("cancel");?>
</a>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("modify_selected"),'but_name'=>"dispatch[categories.store_selection]",'but_role'=>"submit-button",'but_disabled'=>true,'but_meta'=>"bulkedit-disable-edit-button",'but_target_form'=>"category_tree_form"), 0, false);
?>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"select_fields_to_edit",'text'=>$_smarty_tpl->__("select_fields_to_edit"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'select_fields_to_edit')), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->_assignInScope('href', "categories.m_add");?>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <?php $_smarty_tpl->_assignInScope('href', ((string)$_smarty_tpl->tpl_vars['href']->value)."?s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value));?>
        <?php }?>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("bulk_category_addition"),'href'=>$_smarty_tpl->tpl_vars['href']->value), true);?>
</li>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


    <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[categories.m_update]",'but_role'=>"submit-button",'but_target_form'=>"category_tree_form",'but_meta'=>"bulkedit-disable-save-button"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->_assignInScope('tool_href', "categories.add");?>
    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->_assignInScope('tool_href', ((string)$_smarty_tpl->tpl_vars['tool_href']->value)."?s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value));?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>$_smarty_tpl->tpl_vars['tool_href']->value,'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_category"),'icon'=>"icon-plus"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="sidebar-row" id="categories_stats">
        <h6><?php echo $_smarty_tpl->__("total");?>
</h6>
        <ul class="unstyled sidebar-stat">
            <li><?php echo $_smarty_tpl->__("categories");?>
 <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['categories_stats']->value['categories_total'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("products");?>
 <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['categories_stats']->value['products_total'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("active_categories");?>
 <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['categories_stats']->value['categories_active'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("hidden_categories");?>
 <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['categories_stats']->value['categories_hidden'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("disabled_categories");?>
 <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['categories_stats']->value['categories_disabled'], ENT_QUOTES, 'UTF-8');?>
</span></li>
        </ul>
    <!--categories_stats--></div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("categories"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>true,'select_storefront'=>true,'selected_storefront_id'=>$_smarty_tpl->tpl_vars['storefront_id']->value), 0, false);
}
}
