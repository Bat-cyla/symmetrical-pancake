<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:35:23
  from '/app/www/design/backend/templates/views/profiles/components/profiles_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab8f1b2c66b4_86320642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '615beea7862fd3e409692400d18123a2004e0bf2' => 
    array (
      0 => '/app/www/design/backend/templates/views/profiles/components/profiles_account.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
  ),
),false)) {
function content_66ab8f1b2c66b4_86320642 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('user_account_information','email','password','confirm_password','tax_exempt','language'));
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("user_account_information")), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['uid']->value == 1 || (fn_check_user_type_admin_area($_smarty_tpl->tpl_vars['user_data']->value) && $_smarty_tpl->tpl_vars['user_data']->value['user_id'] && defined("RESTRICTED_ADMIN")) || $_smarty_tpl->tpl_vars['user_data']->value['is_root'] == "Y" || $_smarty_tpl->tpl_vars['auth']->value['is_root'] == "Y" || $_smarty_tpl->tpl_vars['user_data']->value['user_id'] == $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <input type="hidden" name="user_data[status]" value="A" />
    <input type="hidden" name="user_data[user_type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['user_type'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div class="control-group">
    <label for="email" class="control-label cm-required cm-email"><?php echo $_smarty_tpl->__("email");?>
:</label>
    <div class="controls">
        <input type="text" id="email" name="user_data[email]" class="input-large" size="32" maxlength="128" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label for="password1" class="control-label cm-required"><?php echo $_smarty_tpl->__("password");?>
:</label>
    <div class="controls">
        <input type="password" id="password1" name="user_data[password1]" class="input-large cm-autocomplete-off" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>            <?php }?>" />
    </div>
</div>

<div class="control-group">
    <label for="password2" class="control-label cm-required"><?php echo $_smarty_tpl->__("confirm_password");?>
:</label>
    <div class="controls">
        <input type="password" id="password2" name="user_data[password2]" class="input-large cm-autocomplete-off" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>            <?php }?>" />
    </div>
</div>

<?php if (($_smarty_tpl->tpl_vars['uid']->value != 1 || defined("RESTRICTED_ADMIN")) && $_smarty_tpl->tpl_vars['user_data']->value['user_id'] != $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['user_data']->value['is_root'] != "Y" || !fn_check_user_type_admin_area($_smarty_tpl->tpl_vars['user_data']->value) || !$_smarty_tpl->tpl_vars['user_data']->value['user_id'] || ($_smarty_tpl->tpl_vars['user_data']->value['company_id'] && !$_smarty_tpl->tpl_vars['auth']->value['company_id'])) {?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"user_data[status]",'id'=>"user_data",'obj'=>$_smarty_tpl->tpl_vars['user_data']->value,'hidden'=>false,'display'=>$_smarty_tpl->tpl_vars['display']->value), 0, false);
?>

        <?php $_smarty_tpl->_assignInScope('_u_type', (($tmp = $_REQUEST['user_type'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value['user_type'] ?? null : $tmp));?>

        <input type="hidden" name="user_data[user_type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_u_type']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <div class="control-group">
            <label class="control-label" for="tax_exempt"><?php echo $_smarty_tpl->__("tax_exempt");?>
:</label>
            <input type="hidden" name="user_data[tax_exempt]" value="N" />
            <div class="controls">
                <input id="tax_exempt" type="checkbox" name="user_data[tax_exempt]" value="Y" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['tax_exempt'] == "Y") {?>checked="checked"<?php }?> />
            </div>
        </div>

    <?php }
}?>

<div class="control-group">
    <label class="control-label" for="user_language"><?php echo $_smarty_tpl->__("language");?>
</label>
    <div class="controls">
    <select name="user_data[lang_code]" id="user_language">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'lang_code');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang_code']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['lang_code']->value == $_smarty_tpl->tpl_vars['user_data']->value['lang_code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    </div>
</div>
<?php }
}
