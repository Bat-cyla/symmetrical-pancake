<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:41
  from '/app/www/design/backend/templates/views/categories/components/categories_links_tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd9847a98_75775484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '523ea8bb5800f0207712c7b3f8b71a31f5631631' => 
    array (
      0 => '/app/www/design/backend/templates/views/categories/components/categories_links_tree.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/categories/components/categories_links_tree.tpl' => 2,
  ),
),false)) {
function content_66ab5bd9847a98_75775484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items'));
?>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_tree']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('shift', 14*(($tmp = $_smarty_tpl->tpl_vars['category']->value['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "category_subtitle", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['company_categories']) {?>
            <?php $_smarty_tpl->_assignInScope('expanded', $_smarty_tpl->tpl_vars['category']->value['company_id'] == $_smarty_tpl->tpl_vars['category_data']->value['company_id']);?>
            <?php $_smarty_tpl->_assignInScope('comb_id', "comp_".((string)$_smarty_tpl->tpl_vars['category']->value['company_id']));?>
            <strong class="row-status"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('expanded', smarty_modifier_in_array($_smarty_tpl->tpl_vars['category']->value['category_id'],$_smarty_tpl->tpl_vars['runtime']->value['active_category_ids']));?>
            <?php $_smarty_tpl->_assignInScope('comb_id', "cat_".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']));?>
            <?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['category']->value['disabled']) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <a class="row-status <?php if ($_smarty_tpl->tpl_vars['category']->value['status'] == "N") {?> manage-root-item-disabled<?php }
if (!$_smarty_tpl->tpl_vars['category']->value['subcategories']) {?> normal<?php }?>" href="<?php echo htmlspecialchars((string) fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['category']->value['subcategories']) {?> style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: 14px;"<?php }?> ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php }?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <li <?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>class="active"<?php }?> style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;">
    <div class="link"><?php if ($_smarty_tpl->tpl_vars['category']->value['subcategories']) {?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if ($_smarty_tpl->tpl_vars['expanded']->value) {?> hidden<?php }?>" ><span class="icon-caret-right"> </span></span><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if (!$_smarty_tpl->tpl_vars['expanded']->value) {?> hidden<?php }?>" ><span class="icon-caret-down"> </span></span><?php }
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'category_subtitle');?>
</div>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['category']->value['subcategories']) {?>
        <li class="<?php if (!$_smarty_tpl->tpl_vars['expanded']->value) {?> hidden<?php }?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['category']->value['subcategories']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/categories_links_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories_tree'=>$_smarty_tpl->tpl_vars['category']->value['subcategories'],'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, true);
?>
            <?php }?>
        <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
--></li>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
