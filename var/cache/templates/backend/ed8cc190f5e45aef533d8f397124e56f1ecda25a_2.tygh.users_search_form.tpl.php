<?php
/* Smarty version 4.1.1, created on 2024-08-15 11:18:51
  from '/app/www/design/backend/templates/views/profiles/components/users_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdb9ebf1bd62_58546351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed8cc190f5e45aef533d8f397124e56f1ecda25a' => 
    array (
      0 => '/app/www/design/backend/templates/views/profiles/components/users_search_form.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_vendor.tpl' => 1,
    'tygh:common/products_to_search.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_66bdb9ebf1bd62_58546351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.array_to_fields.php','function'=>'smarty_function_array_to_fields',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','person_name','phone','email','usergroup','not_a_member','tax_exempt','yes','no','phone','city','country','select_country','company','state','select_state','address','zip_postal_code','ordered_products'));
if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<?php }?>
<form name="user_search_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php if ($_REQUEST['redirect_url']) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['selected_section']->value != '') {?>
<input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['user_type']) {?>
<input type="hidden" name="user_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['user_type'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
    <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback"),'escape'=>array("data_id")),$_smarty_tpl);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);
echo $_smarty_tpl->tpl_vars['extra']->value;?>

<div class="sidebar-field">
    <label for="elm_name"><?php echo $_smarty_tpl->__("person_name");?>
</label>
    <div class="break">
        <input type="text" name="name" id="elm_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['search']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <div class="sidebar-field">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php } else { ?>
    <div class="sidebar-field">
        <label for="elm_phone"><?php echo $_smarty_tpl->__("phone");?>
</label>
        <div class="break">
            <input type="text" name="phone" id="elm_phone" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['phone'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
<?php }?>
<div class="sidebar-field">
    <label for="elm_email"><?php echo $_smarty_tpl->__("email");?>
</label>
    <div class="break">
        <input type="text" name="email" id="elm_email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>
    <div class="row-fluid">
        <div class="group span6 form-horizontal">
            <div class="control-group">
                <label class="control-label" for="elm_usergroup_id"><?php echo $_smarty_tpl->__("usergroup");?>
</label>
                <div class="controls">
                <select name="usergroup_id" id="elm_usergroup_id">
                    <option value="<?php echo htmlspecialchars((string) (defined('ALL_USERGROUPS') ? constant('ALL_USERGROUPS') : null), ENT_QUOTES, 'UTF-8');?>
"> -- </option>
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['search']->value['usergroup_id'] === "0") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("not_a_member");?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usergroups']->value, 'usergroup');
$_smarty_tpl->tpl_vars['usergroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['usergroup_id'] == $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_tax_exempt"><?php echo $_smarty_tpl->__("tax_exempt");?>
</label>
                <div class="controls">
                <select name="tax_exempt" id="elm_tax_exempt">
                    <option value="">--</option>
                    <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['tax_exempt'] == smarty_modifier_enum("YesNo::YES")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
                    <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['tax_exempt'] == smarty_modifier_enum("YesNO::NO")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
                </select>
                </div>
            </div>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:search_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <div class="group span6 form-horizontal">
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['search']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR")) {?>
        <div class="control-group">
            <label class="control-label" for="elm_phone"><?php echo $_smarty_tpl->__("phone");?>
</label>
            <div class="controls">
                <input type="text" name="phone" id="elm_phone" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['phone'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <?php }?>
        <div class="control-group">
            <label class="control-label" for="elm_city"><?php echo $_smarty_tpl->__("city");?>
</label>
            <div class="controls">
                <input type="text" name="city" id="elm_city" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['city'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <div class="control-group">
            <label for="srch_country" class="control-label"><?php echo $_smarty_tpl->__("country");?>
</label>
            <div class="controls">
            <select id="srch_country" name="country" class="cm-country cm-location-search">
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['country'] == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_company"><?php echo $_smarty_tpl->__("company");?>
</label>
            <div class="controls">
                <input type="text" name="company" id="elm_company" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['company'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <div class="control-group">
            <label for="srch_state" class="control-label"><?php echo $_smarty_tpl->__("state");?>
</label>
            <div class="controls">
                <select id="srch_state" class="cm-state cm-location-search hidden" name="state_code">
                    <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                </select>
                <input class="cm-state cm-location-search" type="text" id="srch_state_d" name="state" maxlength="64" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['state'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_address"><?php echo $_smarty_tpl->__("address");?>
</label>
            <div class="controls">
                <input type="text" name="address" id="elm_address" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['address'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_zipcode"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
            <div class="controls">
                <input type="text" name="zipcode" id="elm_zipcode" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

    </div>
</div>

<div class="group">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("ordered_products");?>
</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/products_to_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placement'=>"right"), 0, false);
?>
        </div>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"users",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0, false);
?>

</form>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
</div></div>
<?php } else { ?>
</div><hr>
<?php }
}
}
