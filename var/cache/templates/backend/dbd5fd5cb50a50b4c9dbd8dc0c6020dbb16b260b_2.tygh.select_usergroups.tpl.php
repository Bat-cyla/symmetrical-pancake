<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:41
  from '/app/www/design/backend/templates/common/select_usergroups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd92e2981_04348646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbd5fd5cb50a50b4c9dbd8dc0c6020dbb16b260b' => 
    array (
      0 => '/app/www/design/backend/templates/common/select_usergroups.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab5bd92e2981_04348646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),4=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
if (!empty($_smarty_tpl->tpl_vars['usergroup_ids']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('ug_ids', explode(",",$_smarty_tpl->tpl_vars['usergroup_ids']->value));
}
$_smarty_tpl->_assignInScope('show_default', (($tmp = $_smarty_tpl->tpl_vars['show_default']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"usergroups:select_usergroups"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"usergroups:select_usergroups"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="0" <?php echo $_smarty_tpl->tpl_vars['input_extra']->value;?>
/>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "usergroups_list", null, null);
$_smarty_tpl->_assignInScope('usergroups_default', fn_get_default_usergroups());
if ($_smarty_tpl->tpl_vars['show_default']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usergroups_default']->value, 'usergroup');
$_smarty_tpl->tpl_vars['usergroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?><li><a>
        <?php } else { ?><label class="checkbox <?php if (!$_smarty_tpl->tpl_vars['list_mode']->value) {?>inline<?php }?>" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>
        <input type="checkbox" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if (($_smarty_tpl->tpl_vars['ug_ids']->value && smarty_modifier_in_array($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],$_smarty_tpl->tpl_vars['ug_ids']->value)) || (!$_smarty_tpl->tpl_vars['ug_ids']->value && $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'] == (defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null))) {?> checked="checked"<?php }?> <?php if ((!$_smarty_tpl->tpl_vars['ug_ids']->value || ($_smarty_tpl->tpl_vars['ug_ids']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['ug_ids']->value) == 1 && smarty_modifier_in_array($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],$_smarty_tpl->tpl_vars['ug_ids']->value))) && $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'] == (defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null)) {?> disabled="disabled"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['input_extra']->value;?>
 onclick="fn_switch_default_box(this, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((string) (defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null), ENT_QUOTES, 'UTF-8');?>
);" />
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>


        <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?></a></li>
        <?php } else { ?></label>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usergroups']->value, 'usergroup');
$_smarty_tpl->tpl_vars['usergroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?><li><a>
    <?php } else { ?><label class="checkbox <?php if (!$_smarty_tpl->tpl_vars['list_mode']->value) {?>inline<?php }?>" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

        <input type="checkbox" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['ug_ids']->value && smarty_modifier_in_array($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],$_smarty_tpl->tpl_vars['ug_ids']->value)) {?> checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['input_extra']->value;?>
 onclick="fn_switch_default_box(this, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((string) (defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null), ENT_QUOTES, 'UTF-8');?>
);" />
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>


    <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?></a></li>
    <?php } else { ?></label>
    <?php }?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"usergroups:select_usergroups"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?>
    <div class="btn-group">
    <a class="btn-text dropdown-toggle" data-toggle="dropdown">
    <?php if ($_smarty_tpl->tpl_vars['ug_ids']->value) {?>
        <?php $_smarty_tpl->_assignInScope('ug_count', smarty_modifier_count($_smarty_tpl->tpl_vars['ug_ids']->value));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('ug_count', smarty_modifier_count($_smarty_tpl->tpl_vars['ug_ids']->value));?>
    <?php }?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-user"),$_smarty_tpl);?>

            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
 <span class="cm-ug-amount">(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ug_count']->value, ENT_QUOTES, 'UTF-8');?>
)</span>
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'usergroups_list');?>

    </ul>
    </div>
<?php } else { ?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'usergroups_list');?>

<?php }?>

<?php if (!defined("SMARTY_USERGROUPS_LOADED")) {?>
    <?php $_smarty_tpl->_assignInScope('tmp', define("SMARTY_USERGROUPS_LOADED",true));?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
        
        function fn_switch_default_box(holder, prefix, default_id)
        {
            var $ = Tygh.$;
            var p = $(holder).parents(':not(li,a,label,ul):first');

            var default_box = $('input[id^=' + prefix + '_' + default_id + ']', p);
            var checked_groups = $('input[id^=' + prefix + '_][type=checkbox]:checked', p).not(default_box).not(holder).length + (holder.checked ? 1 : 0);

            default_box.prop('disabled', (checked_groups == 0));
            if (checked_groups == 0) {
                default_box.prop('checked', true);
            }

            fn_calculate_usergroups(p);
            return true;
        }

        function fn_calculate_usergroups(holder)
        {
            var $ = Tygh.$;
            if ($(holder).length) {
                var note = $('.cm-ug-amount', $(holder));
            } else {
                var note = $('.cm-ug-amount');
            }

            note.each(function(){
                var p = $(this).parents(':not(li,a,label,ul):first');
                var total_checked = $('input[type=checkbox]:checked', p).length;
                $(this).html('(' + total_checked + ')');
            });

        }
        
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
