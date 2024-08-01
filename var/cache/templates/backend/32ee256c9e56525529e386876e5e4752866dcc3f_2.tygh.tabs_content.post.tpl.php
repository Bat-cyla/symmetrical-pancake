<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:41
  from '/app/www/design/backend/templates/addons/reward_points/hooks/categories/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd94f38a7_79259146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32ee256c9e56525529e386876e5e4752866dcc3f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/reward_points/hooks/categories/tabs_content.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_66ab5bd94f38a7_79259146 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('earned_points','override_g_points','usergroup','amount','amount_type','usergroup','amount','amount_type','absolute','points_lower','percent'));
?>
<div class="hidden" id="content_reward_points">
    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("earned_points"),'target'=>"#reward_points_categories_hook"), 0, false);
?>
    <div id="reward_points_categories_hook" class="in collapse">
        <fieldset>
            <input type="hidden" name="category_data[is_op]" value="N">
            <label for="rp_is_op" class="checkbox">
                <input type="checkbox" name="category_data[is_op]" id="rp_is_op" value="Y" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['is_op'] == "Y") {?>checked="checked"<?php }?> onclick="Tygh.$.disable_elms([<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reward_usergroups']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>'earned_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
',<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reward_usergroups']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>'points_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
',<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>], !this.checked);">
                <?php echo $_smarty_tpl->__("override_g_points");?>

            </label>
        <br>
        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative table-responsive">
            <thead class="cm-first-sibling">
            <tr>
                <th width="20%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
                <th width="40%"><?php echo $_smarty_tpl->__("amount");?>
</th>
                <th width="40%"><?php echo $_smarty_tpl->__("amount_type");?>
</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reward_usergroups']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('m_id', $_smarty_tpl->tpl_vars['m']->value['usergroup_id']);?>
                <?php $_smarty_tpl->_assignInScope('point', $_smarty_tpl->tpl_vars['reward_points']->value[$_smarty_tpl->tpl_vars['m_id']->value]);?>
                <tr>
                    <td data-th="<?php echo $_smarty_tpl->__("usergroup");?>
">
                        <input type="hidden" name="category_data[reward_points][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][usergroup_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td data-th="<?php echo $_smarty_tpl->__("amount");?>
">
                        <input type="text" id="earned_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="category_data[reward_points][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['point']->value['amount'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['is_op'] != "Y") {?>disabled="disabled"<?php }?>></td>
                    <td data-th="<?php echo $_smarty_tpl->__("amount_type");?>
">
                        <select id="points_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="category_data[reward_points][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount_type]" <?php if ($_smarty_tpl->tpl_vars['object_type']->value == (defined('CATEGORY_REWARD_POINTS') ? constant('CATEGORY_REWARD_POINTS') : null) && $_smarty_tpl->tpl_vars['category_data']->value['is_op'] != 'Y') {?>disabled="disabled"<?php }?> class="input-xlarge">
                            <option value="A" <?php if ($_smarty_tpl->tpl_vars['point']->value['amount_type'] == "A") {?>selected<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->__("points_lower");?>
)</option>
                            <option value="P" <?php if ($_smarty_tpl->tpl_vars['point']->value['amount_type'] == "P") {?>selected<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
                        </select>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
            </table>
        </div>
        </fieldset>
    </div>
</div><?php }
}
