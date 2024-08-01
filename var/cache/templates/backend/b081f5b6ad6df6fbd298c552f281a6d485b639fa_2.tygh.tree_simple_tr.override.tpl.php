<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:30
  from '/app/www/design/backend/templates/addons/vendor_plans/hooks/categories/tree_simple_tr.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bce733668_77541145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b081f5b6ad6df6fbd298c552f281a6d485b639fa' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_plans/hooks/categories/tree_simple_tr.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab5bce733668_77541145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','disabled'));
if ($_smarty_tpl->tpl_vars['cur_cat']->value['disabled']) {?>
    <tr class="<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['level'] > 0) {?> multiple-table-row <?php }?>cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['category']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"shift"),$_smarty_tpl);?>

        <td width="<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['level'] > 0) {?>4%<?php } else { ?>1%<?php }?>">&nbsp;</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children'] || $_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
                <?php echo smarty_function_math(array('equation'=>"x+10",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo smarty_function_math(array('equation'=>"x+21",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

            <?php }?>
            <span class="nowrap" style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_shift']->value, ENT_QUOTES, 'UTF-8');?>
px;">
            <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children'] || $_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']) {?>
                <?php if ($_smarty_tpl->tpl_vars['show_all']->value) {?>
                    <span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if ((isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])) || $_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>"><span class="icon-caret-right"></span></span>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['except_id']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('_except_id', "&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value));?>
                    <?php }?>
                    <span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if (((isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])))) {?>hidden<?php }?>" onclick="if (!$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
').children().length) Tygh.$.ceAjax('request', '<?php echo fn_url("categories.picker?category_id=".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id'])."&random=".((string)$_smarty_tpl->tpl_vars['random']->value)."&display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value).((string)$_smarty_tpl->tpl_vars['_except_id']->value));?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
'<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)"><span class="icon-caret-right"> </span></span>
                <?php }?>
                <span title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination-cat cm-uncheck <?php if (!(isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])) && (!$_smarty_tpl->tpl_vars['expand_all']->value || !$_smarty_tpl->tpl_vars['show_all']->value)) {?>hidden<?php }?>"><span class="icon-caret-down"></span></span>
            <?php }?>
            <span id="category_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['status'] == "N") {?>&nbsp;<span class="small-note">-&nbsp;[<?php echo $_smarty_tpl->__("disabled");?>
]</span><?php }?>
            </span>
        </td>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <td class="right">&nbsp;</td>
        <?php }?>
    </tr>
<?php }
}
}
