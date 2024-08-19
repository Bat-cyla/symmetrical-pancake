<?php
/* Smarty version 4.1.1, created on 2024-08-14 09:05:48
  from '/app/www/design/backend/templates/views/addons/components/detailed_page/tabs/addon_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bc493c739b94_22534985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdc24b43c0245aa92a7541bc03c7b2e531e6ac9c' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/detailed_page/tabs/addon_update.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
  ),
),false)) {
function content_66bc493c739b94_22534985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('addons.latest_version','version','addons.upgrade_to_version','addons.upgrade_to_version','release_date','release_date','compatibility','addon_is_compatible','addon_required_version','addons.upgrade_to_product_version','what_is_new','addons.latest_available_for_installation_version','version','addons.upgrade_to_version','addons.upgrade_to_version','release_date','compatibility','addon_is_compatible','addon_required_version','what_is_new'));
if ($_smarty_tpl->tpl_vars['actual_change_log']->value || $_smarty_tpl->tpl_vars['latest_change_log']->value) {?>
    <div class="hidden cm-hide-save-button" id="content_upgrades">
        <div class="form-horizontal form-edit">

                        <?php if ($_smarty_tpl->tpl_vars['actual_change_log']->value) {?>
                <?php $_smarty_tpl->_assignInScope('version_compare', version_compare((defined('PRODUCT_VERSION') ? constant('PRODUCT_VERSION') : null),$_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility']));?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("addons.latest_version"),'target'=>"#addon_actual_version"), 0, false);
?>
                <div id="addon_actual_version" class="collapse in collapse-visible">
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("version");?>
:</label>
                        <div class="controls">
                            <div class="spaced-child">
                                <p class="inline-block">
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['actual_change_log']->value['version'], ENT_QUOTES, 'UTF-8');?>

                                </p>
                                <?php if ($_smarty_tpl->tpl_vars['version_compare']->value >= 0&$_smarty_tpl->tpl_vars['addon']->value['marketplace']['upgrade_available']) {?>
                                    <?php ob_start();
echo htmlspecialchars((string) fn_url("upgrade_center.manage"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'class'=>"btn",'text'=>$_smarty_tpl->__("addons.upgrade_to_version",array("[version]"=>$_smarty_tpl->tpl_vars['actual_change_log']->value['version'])),'href'=>$_prefixVariable3), true);?>

                                <?php } else { ?>
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"button",'class'=>"btn disabled",'text'=>$_smarty_tpl->__("addons.upgrade_to_version",array("[version]"=>$_smarty_tpl->tpl_vars['actual_change_log']->value['version']))), true);?>

                                <?php }?>
                            </div>
                        </div>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['actual_change_log']->value['available_since']) {?>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("release_date");?>
:</label>
                            <div class="controls">
                                <p><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['actual_change_log']->value['available_since'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</p>
                            </div>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['actual_change_log']->value['timestamp']) {?>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("release_date");?>
:</label>
                            <div class="controls">
                                <p><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['actual_change_log']->value['timestamp'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</p>
                            </div>
                        </div>
                    <?php }?>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("compatibility");?>
:</label>
                        <div class="controls">
                            <div class="spaced-child">
                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] || $_smarty_tpl->tpl_vars['version_compare']->value >= 0) {?>
                                    <p class="inline-block">
                                        <?php echo $_smarty_tpl->__("addon_is_compatible",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>

                                    </p>
                                <?php } elseif ($_smarty_tpl->tpl_vars['version_compare']->value < 0) {?>
                                    <p class="inline-block">
                                        <?php echo $_smarty_tpl->__("addon_required_version",array("[version]"=>$_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility']));?>

                                    </p>
                                    <?php ob_start();
echo htmlspecialchars((string) fn_url("upgrade_center.manage"), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'class'=>"btn",'text'=>$_smarty_tpl->__("addons.upgrade_to_product_version",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null),"[version]"=>$_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility'])),'href'=>$_prefixVariable4), true);?>

                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['actual_change_log']->value['readme']) {?>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("what_is_new");?>
:</label>
                            <div class="controls">
                                <?php echo $_smarty_tpl->tpl_vars['actual_change_log']->value['readme'];?>

                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['latest_change_log']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("addons.latest_available_for_installation_version"),'target'=>"#addon_latest_version"), 0, true);
?>
                <div id="addon_latest_version" class="collapse in collapse-visible">
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("version");?>
:</label>
                        <div class="controls">
                            <div class="spaced-child">
                                <p class="inline-block">
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['latest_change_log']->value['version'], ENT_QUOTES, 'UTF-8');?>

                                </p>
                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['marketplace']['upgrade_available']) {?>
                                    <?php ob_start();
echo htmlspecialchars((string) fn_url("upgrade_center.manage"), ENT_QUOTES, 'UTF-8');
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'class'=>"btn",'text'=>$_smarty_tpl->__("addons.upgrade_to_version",array("[version]"=>$_smarty_tpl->tpl_vars['latest_change_log']->value['version'])),'href'=>$_prefixVariable5), true);?>

                                <?php } else { ?>
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'class'=>"btn disabled",'text'=>$_smarty_tpl->__("addons.upgrade_to_version",array("[version]"=>$_smarty_tpl->tpl_vars['latest_change_log']->value['version']))), true);?>

                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("release_date");?>
:</label>
                        <div class="controls">
                            <p>
                                <?php if ($_smarty_tpl->tpl_vars['latest_change_log']->value['available_since']) {?>
                                    <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['latest_change_log']->value['available_since'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['latest_change_log']->value['timestamp'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                            </p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("compatibility");?>
:</label>
                        <div class="controls">
                            <p>
                                <?php $_smarty_tpl->_assignInScope('version_compare', version_compare((defined('PRODUCT_VERSION') ? constant('PRODUCT_VERSION') : null),$_smarty_tpl->tpl_vars['compatibility']->value));?>
                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] || $_smarty_tpl->tpl_vars['version_compare']->value <= 0) {?>
                                    <?php echo $_smarty_tpl->__("addon_is_compatible",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['version_compare']->value > 0) {?>
                                    <?php echo $_smarty_tpl->__("addon_required_version",array("[version]"=>$_smarty_tpl->tpl_vars['compatibility']->value));?>

                                <?php }?>
                            </p>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['latest_change_log']->value['readme']) {?>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("what_is_new");?>
:</label>
                            <div class="controls">
                                <?php echo $_smarty_tpl->tpl_vars['latest_change_log']->value['readme'];?>

                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
        </div>
    <!--content_updates--></div>
<?php }
}
}
