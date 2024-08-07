<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:21:22
  from '/app/www/design/backend/templates/views/addons/components/detailed_page/sidebar/addon_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac7ae21cdf81_79668796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ae0b47c13961c2457c2f94b64af7da69fa49b72' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/detailed_page/sidebar/addon_status.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/addons/addon_icon.tpl' => 1,
    'tygh:common/switcher.tpl' => 1,
    'tygh:views/addons/components/addons/addon_favorite.tpl' => 1,
  ),
),false)) {
function content_66ac7ae21cdf81_79668796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('status','active','addons.disabled','addons.disabled','addons.not_installed','favorites','version','upgrade','available','license_expires','never','developer','core_addon','verified'));
?>
<div class="sidebar-row">

        <div class="shift-button" id="addon_icon">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['addon']->value,'icon_large'=>true), 0, false);
?>
    <!--addon_icon--></div>

            <div class="control-group sidebar__stats" id="addon_status">
            <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("status");?>
:</label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['addon_install_datetime']->value && $_smarty_tpl->tpl_vars['addon']->value['snapshot_correct']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['is_storefront_admin']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['addon']->value['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
                            <?php echo $_smarty_tpl->__("active");?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("addons.disabled");?>

                        <?php }?>
                    <?php } else { ?>
                        <?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)"addons.update&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->_assignInScope('submit_url', "addons.update_status?id=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])."&return_url=".$_prefixVariable9);?>
                        <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ObjectStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable10 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ObjectStatuses::DISABLED"), ENT_QUOTES, 'UTF-8');
$_prefixVariable11 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>"company-switch-storefront-status-button storefront__status",'checked'=>$_smarty_tpl->tpl_vars['addon']->value['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE"),'extra_attrs'=>array("data-ca-submit-url"=>$_smarty_tpl->tpl_vars['submit_url']->value,"data-ca-opened-status"=>$_prefixVariable10,"data-ca-closed-status"=>$_prefixVariable11,"data-ca-result-ids"=>"addon_icon,addon_status")), 0, false);
?>
                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['addon_install_datetime']->value && !$_smarty_tpl->tpl_vars['addon']->value['snapshot_correct']) {?>
                    <?php echo $_smarty_tpl->__("addons.disabled");?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("addons.not_installed");?>

                <?php }?>
        </div>
    <!--addon_status--></div>

        <div class="control-group sidebar__stats" id="addon_favorite">
        <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("favorites");?>
:</label>
        <div class="controls sidebar__controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_favorite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('a'=>$_smarty_tpl->tpl_vars['addon']->value,'result_ids'=>"addon_favorite",'detailed'=>true), 0, false);
?>
        </div>
    <!--addon_favorite--></div>

        <div class="control-group sidebar__stats">
        <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("version");?>
:</label>
        <div class="controls sidebar__controls">
            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon_version']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
    </div>

        <?php if ($_smarty_tpl->tpl_vars['addon']->value['marketplace']['upgrade_available']) {?>
        <div class="control-group sidebar__stats">
            <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("upgrade");?>
:</label>
            <div class="controls sidebar__controls">
                <p class="text-success">
                    <?php echo $_smarty_tpl->__("available");?>

                </p>
            </div>
        </div>
    <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] && (isset($_smarty_tpl->tpl_vars['license_expires']->value))) {?>
    <div class="control-group sidebar__stats">
        <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("license_expires");?>
:</label>
        <div class="controls sidebar__controls">
            <?php if ($_smarty_tpl->tpl_vars['license_expires']->value === "0") {?>
                <p><?php echo $_smarty_tpl->__("never");?>
</p>
            <?php } else { ?>
                <p><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['license_expires']->value,$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
        </div>
    </div>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] || $_smarty_tpl->tpl_vars['addon']->value['identified']) {?>
        <div class="control-group sidebar__stats">
            <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("developer");?>
:</label>
            <div class="controls sidebar__controls">
                <?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon']) {?>
                    <p><?php echo $_smarty_tpl->__("core_addon");?>
</p>
                <?php } else { ?>
                    <p class="text-success"><?php echo $_smarty_tpl->__("verified");?>
</p>
                <?php }?>
            </div>
        </div>
    <?php }?>
</div>
<?php }
}
