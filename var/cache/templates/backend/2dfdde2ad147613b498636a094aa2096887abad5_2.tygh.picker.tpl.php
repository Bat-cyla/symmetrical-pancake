<?php
/* Smarty version 4.1.1, created on 2024-09-20 07:36:02
  from '/app/www/design/backend/templates/pickers/users/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ecfbb21861b1_06381225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dfdde2ad147613b498636a094aa2096887abad5' => 
    array (
      0 => '/app/www/design/backend/templates/pickers/users/picker.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:buttons/button.tpl' => 2,
    'tygh:pickers/users/js.tpl' => 2,
  ),
),false)) {
function content_66ecfbb21861b1_06381225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_users','choose','choose_user','person_name','no_items'));
$_smarty_tpl->_assignInScope('rnd', rand());
$_smarty_tpl->_assignInScope('data_id', (($tmp = $_smarty_tpl->tpl_vars['picker_id']->value ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('view_mode', (($tmp = $_smarty_tpl->tpl_vars['view_mode']->value ?? null)===null||$tmp==='' ? "mixed" ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_but_text', (($tmp = $_smarty_tpl->tpl_vars['show_but_text']->value ?? null)===null||$tmp==='' ? "true" ?? null : $tmp));?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value && !is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('item_ids', explode(",",$_smarty_tpl->tpl_vars['item_ids']->value));
}?>

<?php $_smarty_tpl->_assignInScope('display', (($tmp = $_smarty_tpl->tpl_vars['display']->value ?? null)===null||$tmp==='' ? "checkbox" ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list" && $_smarty_tpl->tpl_vars['view_mode']->value != "single_button") {?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display']->value == "checkbox") {?>
        <?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->__("add_users"));?>
    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value == "radio") {?>
        <?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->__("choose"));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
        <?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->tpl_vars['but_text']->value);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['placement']->value == 'right') {?>
        <div class="clearfix">
            <div class="pull-right">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_but_text']->value) {?>
        <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->tpl_vars['_but_text']->value);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('but_text', '');?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("profiles.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)."&shared_force=".((string)$_smarty_tpl->tpl_vars['shared_force']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener ".((string)$_smarty_tpl->tpl_vars['but_meta']->value),'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0, false);
?>
    
    <?php if ($_smarty_tpl->tpl_vars['placement']->value == 'right') {?>
        </div></div>
    <?php }?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "single_button") {?>
    <?php if ($_smarty_tpl->tpl_vars['user_info']->value) {?>
        <?php $_smarty_tpl->_assignInScope('user_name', ((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']));?>
        <?php $_smarty_tpl->_assignInScope('item_ids', $_smarty_tpl->tpl_vars['user_info']->value['user_id']);?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->__("choose_user"));?>
    <div class="mixed-controls">
    <div class="form-inline">
    <span id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js-item cm-display-radio">

    <div class="input-append">
    <input class="cm-picker-value-description <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> size="10" name="user_name" readonly="readonly" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("profiles.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_role'=>"text",'but_icon'=>"icon-plus",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>((string)$_smarty_tpl->tpl_vars['but_meta']->value)." cm-dialog-opener add-on btn"), 0, true);
?>

    <input id="<?php if ($_smarty_tpl->tpl_vars['input_id']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>u<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids<?php }?>" type="hidden" class="cm-picker-value" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if (is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_ids']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 />

    </div>
    </span>
    </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['view_mode']->value != "button") {?>
    <?php if ($_smarty_tpl->tpl_vars['display']->value != "radio") {?>
        <input id="u<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids" type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" />

        <div class="clearfix"></div>
        <div class="table-responsive-wrapper">
            <table width="100%" class="table table-middle table--relative table-responsive table-responsive-w-titles">
            <thead>
            <tr>
                <th width="100%"><?php echo $_smarty_tpl->__("person_name");?>
</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/users/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."user_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'email'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."email".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'user_name'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."user_name".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'clone'=>true), 0, false);
?>
            <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'user', false, NULL, 'items', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index'];
?>
                <?php $_smarty_tpl->_assignInScope('user_info', fn_get_user_short_info($_smarty_tpl->tpl_vars['user']->value));?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/users/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_id'=>$_smarty_tpl->tpl_vars['user']->value,'email'=>$_smarty_tpl->tpl_vars['user_info']->value['email'],'user_name'=>((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'first_item'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] : null)), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            </tbody>
            <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
            <tr>
                <td colspan="2" data-th="&nbsp;"><p class="no-items"><?php echo (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp);?>
</p></td>
            </tr>
            </tbody>
            </table>
        </div>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>
    <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_but_text']->value, ENT_QUOTES, 'UTF-8');?>
">
    </div>
<?php }
}
}
