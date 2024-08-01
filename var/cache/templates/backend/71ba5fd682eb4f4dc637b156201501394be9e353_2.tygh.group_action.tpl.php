<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/components/context_menu/items/group_action.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c193c9f87_56471490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71ba5fd682eb4f4dc637b156201501394be9e353' => 
    array (
      0 => '/app/www/design/backend/templates/components/context_menu/items/group_action.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66aa1c193c9f87_56471490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),));
?>

<li <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']);?>

    <?php if (!$_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']['class']) {?>
        class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['menu_item_class'], ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <a <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['action_attributes']);?>

            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']['class']) {?>
                class="cm-process-items cm-submit <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['action_class'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']["data-ca-target-form"]) {?>
                data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']["data-ca-dispatch"]) {?>
                data-ca-dispatch="dispatch[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
]"
            <?php }?>
    >
        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>

    </a>
</li>
<?php }
}
