<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:37
  from '/app/www/design/backend/templates/views/categories/components/categories_tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd547bb10_60280974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '456b7afba67ac2b1add16e4517feb777834db569' => 
    array (
      0 => '/app/www/design/backend/templates/views/categories/components/categories_tree.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:views/categories/components/categories_tree.tpl' => 2,
  ),
),false)) {
function content_66ab5bd547bb10_60280974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('position_short','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','name','products','status','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','disabled','add_product','edit','category_deletion_side_effects','delete'));
if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
<div class="hidden" id="cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_tree']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('comb_id', "cat_".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']));?>

    <?php if ($_smarty_tpl->tpl_vars['category']->value['storefront_categories'] !== smarty_modifier_enum("YesNo::YES")) {?>
        <div class="longtap-selection" data-ca-bulkedit-component="tableWrapper">
    <?php }?>
    <table class="table table-tree table-middle table--relative table--overflow-hidden">
        <?php if ($_smarty_tpl->tpl_vars['header']->value && !$_smarty_tpl->tpl_vars['parent_id']->value) {?>
            <?php $_smarty_tpl->_assignInScope('header', '');?>
            <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
                <tr>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:categories_tree_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:categories_tree_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <th class="mobile-hide table__check-items-column">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>fn_get_default_status_filters('',true),'is_check_disabled'=>$_smarty_tpl->tpl_vars['hide_inputs']->value,'meta'=>"table__check-items"), 0, true);
?>
                        <input type="checkbox"
                            class="bulkedit-toggler hide"
                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="13%" class="mobile-hide table__first-column">
                        <?php echo $_smarty_tpl->__("position_short");?>

                    </th>
                    <th width="60%">
                        <?php if ($_smarty_tpl->tpl_vars['show_all']->value && !$_REQUEST['b_id']) {?>
                            <div class="pull-left">
                                <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="on_cat" class="cm-combinations<?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>"><span class="icon-caret-right"> </span></span>
                                <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="off_cat" class="cm-combinations<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>"><span class="icon-caret-down"> </span></span>
                            </div>
                        <?php }?>
                        &nbsp;<?php echo $_smarty_tpl->__("name");?>

                    </th>
                    <th width="12%" class="center">
                        <?php echo $_smarty_tpl->__("products");?>

                    </th>
                    <th width="5%" class="center mobile-hide">&nbsp;</th>
                    <th width="10%" class="right mobile-hide">
                        <?php echo $_smarty_tpl->__("status");?>

                    </th>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:categories_tree_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </tr>
            </thead>
        <?php }?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:categories_tree_tr"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:categories_tree_tr"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <tr class="<?php if ($_smarty_tpl->tpl_vars['category']->value['level'] > 0) {?>multiple-table-row <?php }?> <?php if ($_smarty_tpl->tpl_vars['category']->value['status']) {?>cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['category']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php }?>cm-longtap-target longtap-selection"
            <?php if ($_smarty_tpl->tpl_vars['category']->value['storefront_categories'] !== smarty_modifier_enum("YesNo::YES")) {?>
                data-ca-longtap-action="setCheckBox"
                data-ca-longtap-target="input.cm-item"
                data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        >
            <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>(($tmp = $_smarty_tpl->tpl_vars['category']->value['level'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"shift"),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['category']->value['storefront_categories']) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:company_categories_tree_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:company_categories_tree_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_assignInScope('comb_id', "comp_".((string)$_smarty_tpl->tpl_vars['category']->value['storefront_id']));?>
                <td class="mobile-hide table__check-items-cell">
                    &nbsp;</td>
                <td width="13%" class="mobile-hide table__first-column">
                    &nbsp;</td>
                <td width="60%">
                    <span class="categories-company" style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['show_all']->value) {?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>"><span class="icon-caret-right"></span> </span><?php } else { ?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination" onclick="if (!Tygh.$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
').children().get(0)) Tygh.$.ceAjax('request', '<?php echo fn_url("categories.manage?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']));?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
'<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)"> <span class="icon-caret-right"></span></span><?php }?><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value || !$_smarty_tpl->tpl_vars['show_all']->value) {?> hidden<?php }?>"><span class="icon-caret-down"></span></span><span class="row-status"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span></span>
                </td>
                <td width="12%" class="center">
                    &nbsp;</td>
                <td width="10%" class="center mobile-hide">
                    &nbsp;</td>
                <td width="10%" class="right mobile-hide">
                    &nbsp;</td>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:company_categories_tree_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:categories_tree_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:categories_tree_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <td class="mobile-hide table__check-items-cell">
                    <input type="checkbox" name="category_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" class="hide checkbox cm-item<?php if ($_smarty_tpl->tpl_vars['category']->value['status']) {?> cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['category']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
}?>" /></td>
                <td width="13%" class="mobile-hide table__first-column">
                    <input type="text" name="categories_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro input-hidden" <?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?>disabled="disabled"<?php }?> /></td>
                <td width="60%">
                    <span style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['category']->value['has_children'] || $_smarty_tpl->tpl_vars['category']->value['subcategories']) {
if ($_smarty_tpl->tpl_vars['show_all']->value) {?><a href="#" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>" ><span class="icon-caret-right"> </span></a><?php } else { ?><a href="#" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination"><span class="icon-caret-right" onclick="if (!Tygh.$('#cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
').children().get(0)) Tygh.$.ceAjax('request', '<?php echo fn_url("categories.manage?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']));?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
'<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)"> </span></a><?php }?><a href="#" alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value || !$_smarty_tpl->tpl_vars['show_all']->value) {?> hidden<?php }?>" ><span class="icon-caret-down"> </span></a><?php }?><a class="row-status <?php if ($_smarty_tpl->tpl_vars['category']->value['status'] == "N") {?> manage-root-item-disabled<?php }
if (!$_smarty_tpl->tpl_vars['category']->value['subcategories']) {?> normal<?php }?>" href="<?php echo htmlspecialchars((string) fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['category']->value['has_children'] && !$_smarty_tpl->tpl_vars['category']->value['subcategories']) {?> style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: 14px;"<?php }?> ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['category']->value['status'] == "N") {?>&nbsp;<span class="small-note">-&nbsp;[<?php echo $_smarty_tpl->__("disabled");?>
]</span><?php }?></span>
                </td>
                <td width="12%" class="center">
                    <a href="<?php echo htmlspecialchars((string) fn_url("products.manage?cid=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
" class="badge"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['product_count'], ENT_QUOTES, 'UTF-8');?>
</a>
                </td>
                <td width="10%" class="center mobile-hide">
                    <div class="hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("add_product"),'href'=>"products.add?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), true);?>
</li>
                            <?php if (!$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
                            <li class="divider"></li>
                            <?php }?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), true);?>
</li>
                            <li><?php ob_start();
echo $_smarty_tpl->__("category_deletion_side_effects");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_prefixVariable1),'text'=>$_smarty_tpl->__("delete"),'href'=>"categories.delete?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']),'method'=>"POST"), true);?>
</li>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items')), true);?>

                    </div>
                </td>
                <td width="10%" class="nowrap right mobile-hide">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['category']->value['category_id'],'status'=>$_smarty_tpl->tpl_vars['category']->value['status'],'hidden'=>true,'object_id_name'=>"category_id",'table'=>"categories",'non_editable'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, true);
?>
                </td>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:categories_tree_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
        </tr>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:categories_tree_tr"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </table>
    
    <?php if ($_smarty_tpl->tpl_vars['category']->value['has_children'] || $_smarty_tpl->tpl_vars['category']->value['subcategories']) {?>
        <div class="<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['category']->value['subcategories']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories_tree'=>$_smarty_tpl->tpl_vars['category']->value['subcategories'],'parent_id'=>false,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, true);
?>
            <?php }?>
        <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['category']->value['storefront_categories'] !== smarty_modifier_enum("YesNo::YES")) {?>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?><!--cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
