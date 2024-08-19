<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:15:27
  from '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac797fb5d4d1_43347419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83979c3b7b7b650b920986574c5ece7dbb8bd366' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/manage.tpl',
      1 => 1722517426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/cp_addons_manager/views/cp_addons_manager/components/correct_permissions.tpl' => 1,
    'tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_tools.tpl' => 3,
    'tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_info.tpl' => 3,
    'tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_action.tpl' => 3,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66ac797fb5d4d1_43347419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_sublist_of_items','collapse_sublist_of_items','no_data','cart_power','cp_my_addons'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <div class="cp-addons-manage" id="addons_list_reload">

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/correct_permissions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
        <?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
        
        <div class="table-responsive-wrapper">
        <?php if ($_smarty_tpl->tpl_vars['addons_list']->value) {?>
            <table class="table table-middle table-responsive">
                                <?php if ($_smarty_tpl->tpl_vars['extra']->value['am_id'] && $_smarty_tpl->tpl_vars['addons_list']->value[$_smarty_tpl->tpl_vars['extra']->value['am_id']]) {?>
                    <?php $_smarty_tpl->_assignInScope('addon', $_smarty_tpl->tpl_vars['addons_list']->value[$_smarty_tpl->tpl_vars['extra']->value['am_id']]);?>
                    <tr>
                        <td class="right" width="4%">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['addons_list']->value[$_smarty_tpl->tpl_vars['extra']->value['am_id']],'c_url'=>$_smarty_tpl->tpl_vars['c_url']->value,'is_am'=>true), 0, false);
?>
                        </td>
                        <td>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['addons_list']->value[$_smarty_tpl->tpl_vars['extra']->value['am_id']]), 0, false);
?>
                        </td>
                        <td class="left cp-addon-right-wrap" width="40%">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['addons_list']->value[$_smarty_tpl->tpl_vars['extra']->value['am_id']],'without_subscr'=>true,'is_am'=>true,'extra'=>$_smarty_tpl->tpl_vars['extra']->value,'key'=>$_smarty_tpl->tpl_vars['extra']->value['am_id']), 0, false);
?>
                        </td>
                    </tr>
                <?php }?>
                                <?php $_smarty_tpl->_assignInScope('in_sets', array());?>
                <?php $_smarty_tpl->_assignInScope('set_expand_all', true);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sets']->value, 'set', false, 'set_id');
$_smarty_tpl->tpl_vars['set']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['set_id']->value => $_smarty_tpl->tpl_vars['set']->value) {
$_smarty_tpl->tpl_vars['set']->do_else = false;
?>
                    <tr>
                        <td colspan="3">
                            <div class="cp-addon-set-name-wrap">
                                <span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_cp_addon_set_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['set_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if ($_smarty_tpl->tpl_vars['set_expand_all']->value) {?>hidden<?php }?>">
                                    <span class="cp-caret-icon icon-caret-right"></span>
                                    <span class="cp-addon-set-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['set']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </span>
                                <span title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_cp_addon_set_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['set_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if (!$_smarty_tpl->tpl_vars['set_expand_all']->value) {?>hidden<?php }?>">
                                    <span class="cp-caret-icon icon-caret-down"></span>
                                    <span class="cp-addon-set-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['set']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </span>
                            </div>
                            <div class="cp-addon-set-wrap <?php if (!$_smarty_tpl->tpl_vars['set_expand_all']->value) {?>hidden<?php }?>" id="cp_addon_set_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['set_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <table class="table table-middle table-responsive">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['set']->value['addon_ids'], 'addon_id');
$_smarty_tpl->tpl_vars['addon_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon_id']->value) {
$_smarty_tpl->tpl_vars['addon_id']->do_else = false;
?>
                                        <?php if (!$_smarty_tpl->tpl_vars['addons_list']->value[$_smarty_tpl->tpl_vars['addon_id']->value]) {?>
                                            <?php continue 1;?>
                                        <?php }?>
                                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['in_sets']) ? $_smarty_tpl->tpl_vars['in_sets']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['addon_id']->value;
$_smarty_tpl->_assignInScope('in_sets', $_tmp_array);?>
                                        <?php $_smarty_tpl->_assignInScope('addon', $_smarty_tpl->tpl_vars['addons_list']->value[$_smarty_tpl->tpl_vars['addon_id']->value]);?>
                                        <tr>
                                            <td class="right" width="4%">
                                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['addon']->value,'c_url'=>$_smarty_tpl->tpl_vars['c_url']->value), 0, true);
?>
                                            </td>
                                            <td>
                                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['addon']->value), 0, true);
?>
                                            </td>
                                            <td class="left cp-addon-right-wrap" width="40%">
                                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['addon']->value,'key'=>$_smarty_tpl->tpl_vars['addon_id']->value), 0, true);
?>
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </table>
                            <!--cp_addon_set_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['set_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons_list']->value, 'addon', false, 'key');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['extra']->value['am_id'] || smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['in_sets']->value)) {?>
                        <?php continue 1;?>
                    <?php }?>
                    <tr>
                        <td class="right" width="4%">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['addon']->value,'c_url'=>$_smarty_tpl->tpl_vars['c_url']->value), 0, true);
?>
                        </td>
                        <td>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['addon']->value), 0, true);
?>
                        </td>
                        <td class="left cp-addon-right-wrap" width="40%">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/list_action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['addon']->value), 0, true);
?>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
        </div>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        </form>
    <!--addons_list_reload--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "title", null, null);
echo $_smarty_tpl->__("cart_power");?>
: <?php echo $_smarty_tpl->__("cp_my_addons");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>false,'no_sidebar'=>true), 0, false);
}
}
