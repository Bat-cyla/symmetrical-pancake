<?php
/* Smarty version 4.1.1, created on 2024-07-31 15:00:54
  from '/app/www/design/backend/templates/views/addons/components/addons/addon_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa2776876e72_47445091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a7855d2a5fb7b959178c9484c32fef42ba8b77a' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/addons/addon_status.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/rating/enjoying_addon_notification.tpl' => 1,
  ),
),false)) {
function content_66aa2776876e72_47445091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('upgrade','refresh','disable','uninstall'));
$_smarty_tpl->_assignInScope('show_addon_status', (($tmp = $_smarty_tpl->tpl_vars['show_addon_status']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['show_addon_status']->value) {?>
    <?php $_smarty_tpl->_assignInScope('target_id', "addons_list,header_navbar,header_subnav,addons_counter,elm_developer_pages,elm_all_dev_pages");?>
    <?php $_smarty_tpl->_assignInScope('c_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);?>

    <div>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['status'] !== smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
            <div class="hidden-tools">

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                <?php if (!$_smarty_tpl->tpl_vars['is_storefront_admin']->value) {?>
                    <?php if (!$_smarty_tpl->tpl_vars['a']->value['is_core_addon'] && $_smarty_tpl->tpl_vars['a']->value['identified'] && !$_smarty_tpl->tpl_vars['a']->value['personal_review'] && !$_smarty_tpl->tpl_vars['a']->value['hide_post_review']) {?>
                        <li class="dropdown__item wrap-normal">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['a']->value,'id'=>"addons_write_review_manage_".((string)$_smarty_tpl->tpl_vars['a']->value['addon']),'is_big_heading'=>false), 0, false);
?>
                        </li>
                        <li class="divider"></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['upgrade_available']) {?>
                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("upgrade"),'href'=>"upgrade_center.manage",'class'=>"text-success"), true);?>
</li>
                        <li class="divider"></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['refresh_url']) {?>
                        <li>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("refresh"),'href'=>$_smarty_tpl->tpl_vars['a']->value['refresh_url'],'method'=>"POST"), true);?>

                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
                        <li>
                            <a class="cm-ajax cm-post cm-ajax-full-render"
                                data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                href="<?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ObjectStatuses::DISABLED"), ENT_QUOTES, 'UTF-8');
$_prefixVariable21=ob_get_clean();
echo htmlspecialchars((string) fn_url("addons.update_status?id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&status=".$_prefixVariable21."&redirect_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['c_url']->value)))), ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-event="ce.update_object_status_callback"
                            >
                                <?php echo $_smarty_tpl->__("disable");?>

                            </a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['delete_url']) {?>
                        <?php $_smarty_tpl->_assignInScope('btn_delete_data', array("data-ca-target-id"=>"addons_list,header_navbar,header_subnav"));?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['a']->value['confirmation_deleting']))) {?>
                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['btn_delete_data']) ? $_smarty_tpl->tpl_vars['btn_delete_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-confirm-text"] = $_smarty_tpl->tpl_vars['a']->value['confirmation_deleting'];
$_smarty_tpl->_assignInScope('btn_delete_data', $_tmp_array);?>
                        <?php }?>

                        <li>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm text-error",'text'=>$_smarty_tpl->__("uninstall"),'data'=>$_smarty_tpl->tpl_vars['btn_delete_data']->value,'href'=>$_smarty_tpl->tpl_vars['a']->value['delete_url'],'method'=>"POST"), true);?>

                        </li>
                    <?php }?>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'icon'=>($_smarty_tpl->tpl_vars['a']->value['upgrade_available'] ? "icon-cloud-download" : "icon-cog")), true);?>


            </div>
        <?php }?>
    </div>
<?php }
}
}
