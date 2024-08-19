<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:48
  from '/app/www/design/backend/templates/addons/discussion/hooks/orders/customer_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde3a08e5f96_67261358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be240cb635b01185fbae8e2f2d20ee9fd3c1d61b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/hooks/orders/customer_info.post.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_66bde3a08e5f96_67261358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('discussion','discussion_title_order','available','disabled','enabled','enabled','disabled'));
if (($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR") || $_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) && $_smarty_tpl->tpl_vars['config']->value['discussion']['enable_order_communication']) {?>

<?php $_smarty_tpl->_assignInScope('discussion', fn_get_discussion($_smarty_tpl->tpl_vars['order_info']->value['order_id'],"O"));?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("discussion")), 0, false);
?>

<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("discussion_title_order");?>
</label>
    <div class="controls">
        <?php if (fn_check_view_permissions("discussion.add")) {?>
            <input type="hidden" name="discussion[object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="discussion[object_type]" value="O" />
            <select name="discussion[type]">
                <?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['order_initiate'] == smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['discussion']->value) {?><option selected="selected" value=""><?php echo $_smarty_tpl->__("available");?>
</option><?php }?>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("disabled");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION")) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("enabled");?>
</option>
            </select>
        <?php } else { ?>
            <span class="shift-input"><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION")) {
echo $_smarty_tpl->__("enabled");
} else {
echo $_smarty_tpl->__("disabled");
}?></span>
        <?php }?>
    </div>
</div>
<?php }
}
}
