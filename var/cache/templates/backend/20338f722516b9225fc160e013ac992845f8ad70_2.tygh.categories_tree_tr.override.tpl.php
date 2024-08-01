<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:37
  from '/app/www/design/backend/templates/addons/vendor_plans/hooks/categories/categories_tree_tr.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd5548746_14511644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20338f722516b9225fc160e013ac992845f8ad70' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_plans/hooks/categories/categories_tree_tr.override.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab5bd5548746_14511644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','disabled'));
if ($_smarty_tpl->tpl_vars['category']->value['disabled']) {?>
    <tbody>
    <tr class="<?php if ($_smarty_tpl->tpl_vars['category']->value['level'] > 0) {?>multiple-table-row <?php }?>cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['category']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>(($tmp = $_smarty_tpl->tpl_vars['category']->value['level'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"shift"),$_smarty_tpl);?>

        <td width="5%">&nbsp;</td>
        <td width="8%">&nbsp;</td>
        <td width="54%">
            <span style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['category']->value['has_children'] || $_smarty_tpl->tpl_vars['category']->value['subcategories']) {
if ($_smarty_tpl->tpl_vars['show_all']->value) {?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>" /><span class="icon-caret-right"> </span></span><?php } else { ?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="icon-caret-down cm-combination" onclick="if (!Tygh.$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
').children().get(0)) Tygh.$.ceAjax('request', '<?php echo fn_url("categories.manage?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']));?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
'<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)"><span class="icon-caret-right"> </span></span><?php }?><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value || !$_smarty_tpl->tpl_vars['show_all']->value) {?> hidden<?php }?>"><span class="icon-caret-down"></span></span><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['category']->value['status'] == "N") {?>&nbsp;<span class="small-note">-&nbsp;[<?php echo $_smarty_tpl->__("disabled");?>
]</span><?php }?></span>
        </td>
        <td width="12%" class="center">&nbsp;</td>
        <td width="5%" class="center">&nbsp;</td>
        <td width="10%" class="right">&nbsp;</td>
    </tr>
    </tbody>
<?php }
}
}
