<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:41
  from '/app/www/design/backend/templates/views/categories/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd904c859_99878634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37cadef17a2bab5a474273b536efa38061501992' => 
    array (
      0 => '/app/www/design/backend/templates/views/categories/update.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 3,
    'tygh:pickers/categories/picker.tpl' => 1,
    'tygh:components/append_language.tpl' => 5,
    'tygh:views/storefronts/components/picker/picker.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:common/attach_images.tpl' => 1,
    'tygh:common/select_usergroups.tpl' => 1,
    'tygh:common/calendar.tpl' => 1,
    'tygh:common/view_tools.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:views/categories/components/categories_links_tree.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66ab5bd904c859_99878634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('information','location','root_level','location','root_level','name','storefront','all_storefronts','description','edit_content_on_site','images','text_category_icon','text_category_detailed_image','seo_meta_data','page_title','meta_description','meta_keywords','availability','usergroups','to_all_subcats','position','creation_date','product_details_view','use_custom_view','product_columns','available_views','default_category_view','add_subcategory','add_product','preview','view_products','category_deletion_side_effects','delete_this_category','categories','new_category'));
echo smarty_function_script(array('src'=>"js/tygh/backend/category_parent_selector.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
    <?php $_smarty_tpl->_assignInScope('direction', "right");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('direction', "left");
}?>

<?php if ($_smarty_tpl->tpl_vars['category_data']->value['category_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['category_data']->value['category_id']);?>
    <?php $_smarty_tpl->_assignInScope('is_trash', $_smarty_tpl->tpl_vars['category_data']->value['is_trash'] == 'Y');
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('view_uri', fn_get_preview_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl->tpl_vars['category_data']->value,$_smarty_tpl->tpl_vars['auth']->value['user_id']));
}?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_assignInScope('storefront_id', (($tmp = $_smarty_tpl->tpl_vars['category_data']->value['storefront_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id ?? null : $tmp));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('storefront_id', (($tmp = $_smarty_tpl->tpl_vars['category_data']->value['storefront_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["storefront.switcher.selected_storefront_id"] ?? null : $tmp));
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('hide_inputs', fn_check_form_permissions(''));?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === "update" && !$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
    <?php $_smarty_tpl->_assignInScope('input_append', "input-append");?>
    <?php $_smarty_tpl->_assignInScope('input_append_wysiwyg', "input-append input-append--wysiwyg");
}?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="category_update_form" class="form-horizontal form-edit<?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?> cm-hide-inputs<?php }?>" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="category_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

<div id="content_detailed">

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"information"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("information"),'target'=>"#acc_information"), 0, false);
?>
        <div id="acc_information" class="collapsed in">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"parent_id"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"parent_id"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group" id="parent_category_selector">
                    <?php if (fn_show_picker("categories",(defined('CATEGORY_THRESHOLD') ? constant('CATEGORY_THRESHOLD') : null))) {?>
                        <label class="control-label cm-required" for="elm_category_parent_id"><?php echo $_smarty_tpl->__("location");?>
:</label>
                        <div class="controls">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"location_category",'input_name'=>"category_data[parent_id]",'item_ids'=>(($tmp = $_smarty_tpl->tpl_vars['category_data']->value['parent_id'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("root_level"),'display_input_id'=>"elm_category_parent_id",'except_id'=>$_smarty_tpl->tpl_vars['id']->value,'extra_url'=>"&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)), 0, false);
?>
                                                    </div>
                    <?php } else { ?>
                        <label class="control-label" for="elm_category_parent_id"><?php echo $_smarty_tpl->__("location");?>
:</label>

                        <div class="controls">
                        <select name="category_data[parent_id]" id="elm_category_parent_id">
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['parent_id'] == "0") {?>selected="selected"<?php }?>>- <?php echo $_smarty_tpl->__("root_level");?>
 -</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_plain_categories_tree(0,false,(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'',$_smarty_tpl->tpl_vars['storefront_id']->value), 'cat', false, NULL, 'categories', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['cat']->value['store']) {?>
                                    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] : null)) {?>
                                        </optgroup>
                                    <?php }?>
                                    <optgroup label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php } else { ?>
                                    <?php if (strpos($_smarty_tpl->tpl_vars['cat']->value['id_path'],((string)$_smarty_tpl->tpl_vars['category_data']->value['id_path'])."/") === false && $_smarty_tpl->tpl_vars['cat']->value['category_id'] != $_smarty_tpl->tpl_vars['id']->value || !$_smarty_tpl->tpl_vars['id']->value) {?>
                                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['disabled']) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['category_data']->value['parent_id'] == $_smarty_tpl->tpl_vars['cat']->value['category_id']) {?>selected="selected"<?php }?>><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['cat']->value['level']),htmlspecialchars((string)$_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8', true));?>
</option>
                                    <?php }?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        </div>
                    <?php }?>
                <!--parent_category_selector--></div>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"parent_id"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"category"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"category"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group">
                    <label for="elm_category_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                    <div class="controls">
                        <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <input type="text"
                                name="category_data[category]"
                                id="elm_category_name"
                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
"
                                class="input-large"
                                <?php if ($_smarty_tpl->tpl_vars['is_trash']->value) {?>readonly="readonly"<?php }?>
                            />
                            <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, false);
?>
                        </div>
                    </div>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"category"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"storefront_id"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"storefront_id"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("storefront");?>
:</label>
                        <div class="controls">
                            <input type="hidden" name="category_data[storefront_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"category_data[storefront_id]",'picker_id'=>"elm_category_storefront_id",'item_ids'=>array($_smarty_tpl->tpl_vars['storefront_id']->value),'show_advanced'=>false,'show_empty_variant'=>fn_allowed_for("MULTIVENDOR"),'empty_variant_text'=>$_smarty_tpl->__("all_storefronts"),'allow_clear'=>true,'disabled'=>$_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['category_data']->value['parent_id'] || $_smarty_tpl->tpl_vars['hide_inputs']->value || $_smarty_tpl->tpl_vars['runtime']->value['company_id'] || (!$_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['storefront_id']->value && fn_allowed_for("MULTIVENDOR")),'select_class'=>"cm-no-hide-input"), 0, false);
?>
                        </div>
                    </div>
                <?php } elseif (fn_allowed_for("ULTIMATE")) {?>
                    <input type="hidden" name="category_data[storefront_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id, ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"storefront_id"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"description"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group">
                    <label class="control-label" for="elm_category_descr"><?php echo $_smarty_tpl->__("description");?>
:</label>
                    <div class="controls">
                        <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_wysiwyg']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <textarea id="elm_category_descr"
                                name="category_data[description]"
                                cols="55"
                                rows="8"
                                class="input-large cm-wysiwyg input-textarea-long"
                            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value,'simple_tooltip'=>true), 0, true);
?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                            <?php ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['view_uri']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
ob_start();
if (fn_allowed_for("ULTIMATE")) {
echo "&switch_company_id=";
echo (string)$_smarty_tpl->tpl_vars['category_data']->value['company_id'];
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=live_editor&status=enable&frontend_url=".$_prefixVariable1.$_prefixVariable2,'but_text'=>$_smarty_tpl->__("edit_content_on_site"),'but_role'=>"action",'but_meta'=>"btn-default btn-live-edit cm-post",'but_target'=>"_blank"), 0, false);
?>
                        <?php }?>
                    </div>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"status"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"category_data[status]",'id'=>"elm_category_status",'obj'=>$_smarty_tpl->tpl_vars['category_data']->value,'hidden'=>true), 0, false);
?>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"images"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"images"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("images");?>
:</label>
                    <div class="controls">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"category_main",'image_object_type'=>"category",'image_pair'=>$_smarty_tpl->tpl_vars['category_data']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'icon_text'=>$_smarty_tpl->__("text_category_icon"),'detailed_text'=>$_smarty_tpl->__("text_category_detailed_image"),'no_thumbnail'=>true), 0, false);
?>
                    </div>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"images"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("seo_meta_data"),'target'=>"#acc_seo"), 0, true);
?>
        <div id="acc_seo" class="collapsed in">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"page_title"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"page_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group">
                    <label class="control-label" for="elm_category_page_title"><?php echo $_smarty_tpl->__("page_title");?>
:</label>
                    <div class="controls">
                        <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <input type="text"
                                name="category_data[page_title]"
                                id="elm_category_page_title"
                                size="55"
                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['page_title'], ENT_QUOTES, 'UTF-8');?>
"
                                class="input-large"
                            />
                            <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, true);
?>
                        </div>
                    </div>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"page_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_description"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group">
                    <label class="control-label" for="elm_category_meta_description"><?php echo $_smarty_tpl->__("meta_description");?>
:</label>
                    <div class="controls">
                        <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <textarea name="category_data[meta_description]"
                                id="elm_category_meta_description"
                                cols="55"
                                rows="4"
                                class="input-large"
                            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['meta_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, true);
?>
                        </div>
                    </div>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_keywords"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_keywords"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group">
                    <label class="control-label" for="elm_category_meta_keywords"><?php echo $_smarty_tpl->__("meta_keywords");?>
:</label>
                    <div class="controls">
                        <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <textarea name="category_data[meta_keywords]"
                                id="elm_category_meta_keywords"
                                cols="55"
                                rows="4"
                                class="input-large"
                            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['meta_keywords'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, true);
?>
                        </div>
                    </div>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_keywords"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("availability"),'target'=>"#acc_availability"), 0, true);
?>
        <div id="acc_availability">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"usergroup_ids"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"usergroup_ids"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("usergroups");?>
:</label>
                        <div class="controls">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"ug_id",'name'=>"category_data[usergroup_ids]",'usergroups'=>fn_get_usergroups(array("type"=>"C","status"=>array("A","H")),(defined('DESCR_SL') ? constant('DESCR_SL') : null)),'usergroup_ids'=>$_smarty_tpl->tpl_vars['category_data']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>false), 0, false);
?>
                            <label class="checkbox" for="usergroup_to_subcats"><?php echo $_smarty_tpl->__("to_all_subcats");?>

                                <input id="usergroup_to_subcats" type="checkbox" name="category_data[usergroup_to_subcats]" value="Y" />
                            </label>
                        </div>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"usergroup_ids"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"position"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"position"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group">
                    <label class="control-label" for="elm_category_position"><?php echo $_smarty_tpl->__("position");?>
:</label>
                    <div class="controls">
                        <input type="text" name="category_data[position]" id="elm_category_position" size="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-short" />
                    </div>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"position"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"timestamp"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"timestamp"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="control-group">
                    <label class="control-label" for="elm_category_creation_date"><?php echo $_smarty_tpl->__("creation_date");?>
:</label>
                    <div class="controls">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_category_creation_date",'date_name'=>"category_data[timestamp]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['category_data']->value['timestamp'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, false);
?>
                    </div>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"timestamp"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div id="content_views">
    <div id="extra">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product.layout_input",'object'=>"category",'id'=>(($tmp = $_smarty_tpl->tpl_vars['category_data']->value['category_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'value'=>(($tmp = $_smarty_tpl->tpl_vars['category_data']->value['product_details_view'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'input_name'=>"category_data[product_details_view]",'company_id'=>$_smarty_tpl->tpl_vars['category_data']->value['company_id']));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product.layout_input",'object'=>"category",'id'=>(($tmp = $_smarty_tpl->tpl_vars['category_data']->value['category_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'value'=>(($tmp = $_smarty_tpl->tpl_vars['category_data']->value['product_details_view'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'input_name'=>"category_data[product_details_view]",'company_id'=>$_smarty_tpl->tpl_vars['category_data']->value['company_id']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="control-group">
                <label class="control-label" for="elm_details_layout"><?php echo $_smarty_tpl->__("product_details_view");?>
:</label>
                <div class="controls">
                    #INPUT#
                </div>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"product.layout_input",'object'=>"category",'id'=>(($tmp = $_smarty_tpl->tpl_vars['category_data']->value['category_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'value'=>(($tmp = $_smarty_tpl->tpl_vars['category_data']->value['product_details_view'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'input_name'=>"category_data[product_details_view]",'company_id'=>$_smarty_tpl->tpl_vars['category_data']->value['company_id']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <div class="control-group">
            <label class="control-label" for="elm_category_use_custom_templates"><?php echo $_smarty_tpl->__("use_custom_view");?>
:</label>
            <div class="controls">
            <input type="hidden" value="N" name="category_data[use_custom_templates]"/>
            <input type="checkbox" class="cm-toggle-checkbox" value="Y" name="category_data[use_custom_templates]" id="elm_category_use_custom_templates"<?php if ($_smarty_tpl->tpl_vars['category_data']->value['selected_views']) {?> checked="checked"<?php }?> />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_category_product_columns"><?php echo $_smarty_tpl->__("product_columns");?>
:</label>
            <div class="controls">
            <input type="text" name="category_data[product_columns]" id="elm_category_product_columns" size="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['product_columns'], ENT_QUOTES, 'UTF-8');?>
" class="cm-toggle-element" <?php if (!$_smarty_tpl->tpl_vars['category_data']->value['selected_views']) {?>disabled="disabled"<?php }?> />
            </div>
        </div>

        <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,false));?>
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("available_views");?>
:</label>
            <div class="controls">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layouts']->value, 'item', false, 'layout');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <label class="checkbox" for="elm_category_layout_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" class="cm-combo-checkbox cm-toggle-element" name="category_data[selected_views][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_category_layout_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['category_data']->value['selected_views'][$_smarty_tpl->tpl_vars['layout']->value]) || (!$_smarty_tpl->tpl_vars['category_data']->value['selected_views'] && $_smarty_tpl->tpl_vars['item']->value['active'])) {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['category_data']->value['selected_views']) {?>disabled="disabled"<?php }?> /><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8');?>
</label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_category_default_view"><?php echo $_smarty_tpl->__("default_category_view");?>
:</label>
            <div class="controls">
            <select id="elm_category_default_view" class="cm-combo-select cm-toggle-element" name="category_data[default_view]" <?php if (!$_smarty_tpl->tpl_vars['category_data']->value['selected_views']) {?>disabled="disabled"<?php }?>>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layouts']->value, 'item', false, 'layout');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if (($_smarty_tpl->tpl_vars['category_data']->value['selected_views'][$_smarty_tpl->tpl_vars['layout']->value]) || (!$_smarty_tpl->tpl_vars['category_data']->value['selected_views'] && $_smarty_tpl->tpl_vars['item']->value['active'])) {?>
                        <option <?php if ($_smarty_tpl->tpl_vars['category_data']->value['default_view'] == $_smarty_tpl->tpl_vars['layout']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            </div>
        </div>
    </div>
</div>

<div id="content_addons">
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:detailed_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:detailed_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:detailed_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>"categories.update?category_id="), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:update_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:update_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"categories.add?parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&category_data[storefront_id]=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value),'text'=>$_smarty_tpl->__("add_subcategory")), true);?>
</li>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"products.add?category_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'text'=>$_smarty_tpl->__("add_product")), true);?>
</li>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'target'=>"_blank",'text'=>$_smarty_tpl->__("preview"),'href'=>$_smarty_tpl->tpl_vars['view_uri']->value), true);?>
</li>
                <li class="divider"></li>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"products.manage?cid=".((string)$_smarty_tpl->tpl_vars['id']->value),'text'=>$_smarty_tpl->__("view_products")), true);?>
</li>
                <li><?php ob_start();
echo $_smarty_tpl->__("category_deletion_side_effects");
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete_this_category"),'data'=>array("data-ca-confirm-text"=>$_prefixVariable3),'href'=>"categories.delete?category_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"), true);?>
</li>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:update_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit-link",'but_target_form'=>"category_update_form",'but_name'=>"dispatch[categories.update]",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<input type="hidden" name="descr_sl" value="<?php echo htmlspecialchars((string) (defined('DESCR_SL') ? constant('DESCR_SL') : null), ENT_QUOTES, 'UTF-8');?>
" />
</form>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:update_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:update_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("categories");?>
</h6>
        <div class="nested-tree">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/categories_links_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_all'=>false,'categories_tree'=>$_smarty_tpl->tpl_vars['categories_tree']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, false);
?>
        </div>
    </div>
<?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:update_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('selected_storefront_id', $_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('selected_storefront_id', $_smarty_tpl->tpl_vars['storefront_id']->value);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'sidebar_position'=>"left",'title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['category_data']->value['category'] : $_smarty_tpl->__("new_category"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>(bool) $_smarty_tpl->tpl_vars['id']->value,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_storefront'=>fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['category_data']->value['storefront_id'],'show_all_storefront'=>fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['id']->value,'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0, false);
}
}
