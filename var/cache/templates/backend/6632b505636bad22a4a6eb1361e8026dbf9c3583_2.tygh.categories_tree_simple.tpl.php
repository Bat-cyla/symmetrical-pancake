<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:30
  from '/app/www/design/backend/templates/views/categories/components/categories_tree_simple.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bce6b23a7_93853894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6632b505636bad22a4a6eb1361e8026dbf9c3583' => 
    array (
      0 => '/app/www/design/backend/templates/views/categories/components/categories_tree_simple.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:views/categories/components/categories_tree_simple.tpl' => 2,
  ),
),false)) {
function content_66ab5bce6b23a7_93853894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','categories','products','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','disabled'));
$_smarty_tpl->_assignInScope('rnd_value', rand());
$_smarty_tpl->_assignInScope('random', (($tmp = $_smarty_tpl->tpl_vars['random']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['rnd_value']->value ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
<div class="hidden" id="cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['random']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_tree']->value, 'cur_cat');
$_smarty_tpl->tpl_vars['cur_cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cur_cat']->value) {
$_smarty_tpl->tpl_vars['cur_cat']->do_else = false;
$_smarty_tpl->_assignInScope('cat_id', $_smarty_tpl->tpl_vars['cur_cat']->value['category_id']);
$_smarty_tpl->_assignInScope('comb_id', "cat_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id'])."_".((string)$_smarty_tpl->tpl_vars['random']->value));
$_smarty_tpl->_assignInScope('title_id', "category_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id']));?>

<div class="table-wrapper category-tree-wrapper">
    <table width="100%" class="table table-tree table-middle table--relative">
    <?php if ($_smarty_tpl->tpl_vars['header']->value && !$_smarty_tpl->tpl_vars['parent_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('header', '');?>
    <thead>
    <tr>
        <th>
        <?php if ($_smarty_tpl->tpl_vars['display']->value != "radio") {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
        </th>
        <th width="84%">
            <?php if ($_smarty_tpl->tpl_vars['show_all']->value) {?>
            <div class="pull-left">
                <span id="on_cat" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations-cat <?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>"><span class="icon-caret-right"> </span></span>
                <span id="off_cat" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations-cat <?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>"><span class="icon-caret-down"> </span></span>
            </div>
            <?php }?>
            <?php echo $_smarty_tpl->__("categories");?>

        </th>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <th class="right"><?php echo $_smarty_tpl->__("products");?>
</th>
        <?php }?>
    </tr>
    </thead>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('level', (($tmp = $_smarty_tpl->tpl_vars['cur_cat']->value['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('has_children', $_smarty_tpl->tpl_vars['cur_cat']->value['has_children'] || $_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:tree_simple_tr"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:tree_simple_tr"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <tr id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
_container"
        class="<?php if ($_smarty_tpl->tpl_vars['category']->value['status'] || $_smarty_tpl->tpl_vars['cur_cat']->value['status']) {?>cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower((($tmp = $_smarty_tpl->tpl_vars['category']->value['status'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cur_cat']->value['status'] ?? null : $tmp), 'UTF-8'), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['has_children']->value) {?> cm-click-on-visible<?php } else { ?> cm-toggle-checked<?php }
if (!$_smarty_tpl->tpl_vars['cur_cat']->value['storefront_categories']) {?> cm-click-and-close<?php }?> <?php if ($_smarty_tpl->tpl_vars['display']->value == "radio") {?>row-actionable cm-click-and-close-forced<?php }?>"
        <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
        data-ca-target="[data-ca-categories-expand-target]"
        data-ca-search-inner
        data-ca-search-inner-container="#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
_container"
        data-ca-target-checkbox="#input_cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
"

        <?php if ($_smarty_tpl->tpl_vars['display']->value == "radio") {?>
        data-ca-target-combination-container="#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-combination-expander="#on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-combination-fetch-url="<?php echo fn_url("categories.picker?category_id=".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id'])."&random=".((string)$_smarty_tpl->tpl_vars['random']->value)."&display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value).((string)$_smarty_tpl->tpl_vars['_except_id']->value));?>
"
        data-ca-target-combination-fetch-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>

        <?php } else { ?>
        data-ca-target="#input_cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
    >
           <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"shift"),$_smarty_tpl);?>

        <td class="left first-column" width="5%">
            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['storefront_categories']) {?>
                &nbsp;
                <?php $_smarty_tpl->_assignInScope('comb_id', "comp_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['storefront_id'])."_".((string)$_smarty_tpl->tpl_vars['random']->value));?>
                <?php $_smarty_tpl->_assignInScope('title_id', "c_company_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['company_id']));?>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['display']->value == "radio") {?>
                <input type="radio"
                       id="input_cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
"
                       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                       value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" 
                       class="cm-item <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['radio_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                />
                <?php } else { ?>
                <input type="checkbox" 
                       id="input_cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" 
                       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
]" 
                       value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" 
                       class="cm-item<?php if ($_smarty_tpl->tpl_vars['is_tristate_checkbox']->value) {?> cm-tristate tristate-checkbox-cursor<?php }?>"
                />
                <?php }?>
            <?php }?>
        </td>
        <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children'] || $_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
            <?php echo smarty_function_math(array('equation'=>"x+10",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

        <?php } else { ?>
            <?php echo smarty_function_math(array('equation'=>"x+21",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

        <?php }?>
        <td style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_shift']->value, ENT_QUOTES, 'UTF-8');?>
px;">
            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children'] || $_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
                <?php if ($_smarty_tpl->tpl_vars['show_all']->value) {?>
                    <span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
"
                          id="on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                          class="hand cm-combination-cat cm-uncheck <?php if ((isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])) || $_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>"
                          data-ca-categories-expand-target
                    >
                        <span class="icon-caret-right <?php if ($_smarty_tpl->tpl_vars['display']->value == "radio") {?> icon-caret--big<?php }?>"></span>
                    </span>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['except_id']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('_except_id', "&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value));?>
                    <?php }?>
                    <span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
"
                          id="on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                          class="hand cm-combination-cat cm-uncheck <?php if (((isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])))) {?>hidden<?php }?>" 
                          <?php if ($_smarty_tpl->tpl_vars['display']->value != "radio") {?>
                          onclick="if (!Tygh.$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
').children().length) Tygh.$.ceAjax('request', '<?php echo fn_url("categories.picker?category_id=".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id'])."&random=".((string)$_smarty_tpl->tpl_vars['random']->value)."&display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value).((string)$_smarty_tpl->tpl_vars['_except_id']->value));?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
'<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)"
                          <?php }?>
                          data-ca-categories-expand-target
                    >
                        <span class="icon-caret-right<?php if ($_smarty_tpl->tpl_vars['display']->value == "radio") {?> icon-caret--big<?php }?>"></span>
                    </span>
                <?php }?>
                <span title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
"
                      id="off_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                      class="hand cm-combination-cat cm-uncheck <?php if (!(isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])) && (!$_smarty_tpl->tpl_vars['expand_all']->value || !$_smarty_tpl->tpl_vars['show_all']->value)) {?>hidden<?php }?>"
                      data-ca-categories-expand-target
                      data-ca-categories-hide-target
                >
                    <span class="icon-caret-down <?php if ($_smarty_tpl->tpl_vars['display']->value == "radio") {?> icon-caret--big<?php }?>"></span>
                </span>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['storefront_categories']) {?>
                <span id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php } else { ?>
                <label id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="inline-label" for="input_cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['cur_cat']->value['has_children'] && !$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?> style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: 6px;"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
</label>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['status'] == "N") {?>&nbsp;<span class="small-note">-&nbsp;[<?php echo $_smarty_tpl->__("disabled");?>
]</span><?php }?>
        </td>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <td class="right">
            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['storefront_categories']) {?>
                &nbsp;
            <?php } else { ?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['product_count'], ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;&nbsp;
            <?php }?>
        </td>
        <?php }?>
    </tr>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:tree_simple_tr"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </table>
</div>

<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children'] || $_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
    <div<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> class="hidden"<?php }?> id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/categories_tree_simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories_tree'=>$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories'],'parent_id'=>false,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, true);
?>
    <?php }?>
    <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['parent_id']->value) {?><!--cat_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['random']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
