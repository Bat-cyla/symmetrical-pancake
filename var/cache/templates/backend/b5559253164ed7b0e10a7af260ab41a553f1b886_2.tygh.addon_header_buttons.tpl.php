<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:21:22
  from '/app/www/design/backend/templates/views/addons/components/detailed_page/header/addon_header_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac7ae2286e22_16185698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5559253164ed7b0e10a7af260ab41a553f1b886' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/detailed_page/header/addon_header_buttons.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save.tpl' => 2,
    'tygh:views/addons/components/addons/addon_license_required.tpl' => 1,
  ),
),false)) {
function content_66ac7ae2286e22_16185698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('refresh','uninstall','addons.install','addons.activate','addons.install'));
if ($_smarty_tpl->tpl_vars['addon']->value['snapshot_correct'] && $_smarty_tpl->tpl_vars['addon_install_datetime']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons_detailed:action_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons_detailed:action_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if (!$_smarty_tpl->tpl_vars['is_storefront_admin']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['addon']->value['refresh_url']) {?>
                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'method'=>"POST",'text'=>$_smarty_tpl->__("refresh"),'href'=>((string)$_smarty_tpl->tpl_vars['addon']->value['refresh_url'])), true);?>
</li>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('line', fn_is_lang_var_exists(((string)$_smarty_tpl->tpl_vars['_addon']->value).".confirmation_deleting"));?>
                <?php if ($_smarty_tpl->tpl_vars['line']->value) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['btn_delete_data']) ? $_smarty_tpl->tpl_vars['btn_delete_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-confirm-text"] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['_addon']->value).".confirmation_deleting");
$_smarty_tpl->_assignInScope('btn_delete_data', $_tmp_array);?>
                <?php }?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm text-error",'method'=>"POST",'text'=>$_smarty_tpl->__("uninstall"),'href'=>((string)$_smarty_tpl->tpl_vars['addon']->value['delete_url']),'data'=>$_smarty_tpl->tpl_vars['btn_delete_data']->value), true);?>
</li>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons_detailed:action_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons:action_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons:action_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[addons.update]",'but_role'=>"action",'but_target_form'=>"update_addon_".((string)$_smarty_tpl->tpl_vars['_addon']->value)."_form",'but_meta'=>"cm-submit hidden cm-addons-save-settings"), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[addons.update]",'but_role'=>"action",'but_target_form'=>"update_addon_".((string)$_smarty_tpl->tpl_vars['_addon']->value)."_subs_form",'but_meta'=>"cm-submit hidden cm-addons-save-subscription"), 0, true);
?>

    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons:action_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} elseif ($_smarty_tpl->tpl_vars['addon']->value['snapshot_correct'] && !$_smarty_tpl->tpl_vars['addon_install_datetime']->value && !$_smarty_tpl->tpl_vars['is_storefront_admin']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons:action_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons:action_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)"addons.update&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable12=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'class'=>"btn btn-primary",'method'=>"POST",'text'=>$_smarty_tpl->__("addons.install"),'href'=>"addons.install?addon=".((string)$_smarty_tpl->tpl_vars['_addon']->value)."&return_url=".$_prefixVariable12), true);?>

    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons:action_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} elseif (!$_smarty_tpl->tpl_vars['is_storefront_admin']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_license_required.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('key'=>$_smarty_tpl->tpl_vars['_addon']->value), 0, false);
?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons:action_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons:action_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <a href=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['license_required']->value['href'], ENT_QUOTES, 'UTF-8');?>

            class="btn btn-primary cm-post cm-dialog-opener cm-dialog-auto-size"
            data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['license_required']->value['target_id'], ENT_QUOTES, 'UTF-8');?>

            data-ca-dialog-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['license_required']->value['promo_popup_title'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if ($_smarty_tpl->tpl_vars['addon_install_datetime']->value) {?>
                <?php echo $_smarty_tpl->__("addons.activate");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("addons.install");?>

            <?php }?>
        </a>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons:action_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
