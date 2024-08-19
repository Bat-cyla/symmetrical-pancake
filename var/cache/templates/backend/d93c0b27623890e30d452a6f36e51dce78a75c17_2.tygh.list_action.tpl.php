<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:15:27
  from '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/components/list_action.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac797fc00096_79069631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd93c0b27623890e30d452a6f36e51dce78a75c17' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/components/list_action.tpl',
      1 => 1722517426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac797fc00096_79069631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('cp_am_can_install_avail_version','cp_versions_history','cp_am_need_reinstall','cp_upgrade_tooltip_text','cp_upgrade_to','or','cp_update_via_uc','cp_install','cp_am_installed_avail_version','cp_versions_history','cp_no_license_for_domains','cp_domains_error_reasons','error','cp_am_contact_us','cp_am_subscribe_exists','cp_am_prolong_subscr','cp_am_subscribe_expired','cp_am_buy_subscr'));
?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="cp_addon_action_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="license_key" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['license_key'], ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="result_ids" value="addon_upload_container">
    <?php $_smarty_tpl->_assignInScope('has_error', false);?>
    <?php if ($_smarty_tpl->tpl_vars['addon']->value['domain_without_licenses'] || $_smarty_tpl->tpl_vars['addon']->value['domain_without_validation'] || $_smarty_tpl->tpl_vars['addon']->value['error_messages']) {?>
        <?php $_smarty_tpl->_assignInScope('has_error', true);?>
    <?php }?>
    <div class="cp-addon-action-wrap clearfix">
        <?php if (version_compare($_smarty_tpl->tpl_vars['addon']->value['installed_version'],$_smarty_tpl->tpl_vars['addon']->value['version']) < 0) {?>
            <div class="cp-addon-action-title"><?php echo $_smarty_tpl->__("cp_am_can_install_avail_version");?>
</div>
            <div class="cp-version-link">
                <a class="cp-am-link cm-dialog-opener cm-dialog-auto-size cm-ajax" href="<?php echo htmlspecialchars((string) fn_url("cp_addons_manager.version_info&package_id=".((string)$_smarty_tpl->tpl_vars['addon']->value['package_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo $_smarty_tpl->__("cp_versions_history");?>
" data-ca-target-id="content_versions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['package_id'], ENT_QUOTES, 'UTF-8');?>
"><span class="cp-am-version">v<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['version'], ENT_QUOTES, 'UTF-8');?>
</span></a>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['has_error']->value) {?>
            <div class="cp-addon-action-buttons">
                <?php if ($_smarty_tpl->tpl_vars['addon']->value['status']) {?>
                    <?php if (!$_smarty_tpl->tpl_vars['addon']->value['versions']['current']) {?>
                        <?php $_smarty_tpl->_assignInScope('inst_link', (($tmp = $_smarty_tpl->tpl_vars['extra']->value['install_instruction'] ?? null)===null||$tmp==='' ? "#" ?? null : $tmp));?>
                        <div class="cp-addon-reinstall-text">
                            <?php echo $_smarty_tpl->__("cp_am_need_reinstall",array("[link]"=>$_smarty_tpl->tpl_vars['inst_link']->value));?>

                        </div>
                    <?php } else { ?>
                        <?php if (!$_smarty_tpl->tpl_vars['is_am']->value) {?>
                            <a class="cp-am-btn cp-am-blue cm-submit cm-ajax cp-am-tooltip" title="<?php echo $_smarty_tpl->__("cp_upgrade_tooltip_text");?>
" data-ca-dispatch="dispatch[cp_addons_manager.upgrade]" data-ca-target-form="cp_addon_action_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_upgrade_to");?>
&nbsp;v<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['version'], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php }?>
                        <div class="cp-uc-link-wrap">
                            <?php if (!$_smarty_tpl->tpl_vars['is_am']->value) {?><span><?php echo $_smarty_tpl->__("or");?>
</span><?php }?>
                            <a class="cp-uc-link" target="_blank" href="<?php echo htmlspecialchars((string) fn_url("upgrade_center.refresh"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_update_via_uc");?>
</a>
                        </div>
                    <?php }?>
                <?php } else { ?>
                    <a class="cp-am-btn cp-am-blue cm-submit cm-ajax" data-ca-dispatch="dispatch[cp_addons_manager.install]" data-ca-target-form="cp_addon_action_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_install");?>
&nbsp;v<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['version'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php }?>
            </div>
            <?php }?>
        <?php } else { ?>
            <div class="cp-addon-action-title"><?php echo $_smarty_tpl->__("cp_am_installed_avail_version");?>
</div>
            <div class="cp-version-link">
                <a class="cp-am-link cm-dialog-opener cm-dialog-auto-size cm-ajax" href="<?php echo htmlspecialchars((string) fn_url("cp_addons_manager.version_info&package_id=".((string)$_smarty_tpl->tpl_vars['addon']->value['package_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo $_smarty_tpl->__("cp_versions_history");?>
" data-ca-target-id="content_versions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['package_id'], ENT_QUOTES, 'UTF-8');?>
"><span class="cp-am-version">v<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['installed_version'], ENT_QUOTES, 'UTF-8');?>
</span></a>
            </div>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['addon']->value['extra_info']) {?>
        <div class="cp-addon-extra-info clearfix">
            <?php if (is_array($_smarty_tpl->tpl_vars['addon']->value['extra_info'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon']->value['extra_info'], 'extra_info_item');
$_smarty_tpl->tpl_vars['extra_info_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extra_info_item']->value) {
$_smarty_tpl->tpl_vars['extra_info_item']->do_else = false;
?>
                    <div class="cp-extra-info-item"><?php echo $_smarty_tpl->tpl_vars['extra_info_item']->value;?>
</div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['addon']->value['extra_info'];?>

            <?php }?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['has_error']->value) {?>
        <div class="cp-addon-error-wrap clearfix">
            <?php $_smarty_tpl->_assignInScope('error_domains', array());?>
            <?php if ($_smarty_tpl->tpl_vars['addon']->value['domain_without_licenses']) {?>
                <?php $_smarty_tpl->_assignInScope('error_domains', $_smarty_tpl->tpl_vars['addon']->value['domain_without_licenses']);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['addon']->value['domain_without_validation']) {?>
                <?php $_smarty_tpl->_assignInScope('error_domains', fn_array_merge($_smarty_tpl->tpl_vars['error_domains']->value,$_smarty_tpl->tpl_vars['addon']->value['domain_without_validation']));?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['error_domains']->value) {?>
            <div class="cp-addon-error">
                <div class="cp-addon-error-title">
                    <?php echo $_smarty_tpl->__("cp_no_license_for_domains");?>
&nbsp;<span class="cp-am-tooltip" title="<?php echo $_smarty_tpl->__("cp_domains_error_reasons");?>
"><i class="cp-am-icon cp-am-icon-question"></i></span>
                </div>
                <div class="cp-addon-error-message-item">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error_domains']->value, 'domain');
$_smarty_tpl->tpl_vars['domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->do_else = false;
?>
                            <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['domain']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['addon']->value['error_messages']) {?>
            <div class="cp-addon-error">
                <div class="cp-addon-error-title"><?php echo $_smarty_tpl->__("error");?>
</div>
                <div class="cp-addon-error-message-item">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon']->value['error_messages'], 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
            <?php }?>
            <a class="cp-am-btn cp-am-red" target="_blank" href="<?php echo htmlspecialchars((string) fn_url("cp_addons_manager.support"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_am_contact_us");?>
</a>
        </div>
    <?php }?>
    
    <?php if (!$_smarty_tpl->tpl_vars['without_subscr']->value) {?>
        <div class="cp-addon-subscr-wrap clearfix">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "valid_date", null, null);?>
                <span class="strong"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['addon']->value['valid_till'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            
            <?php if ($_smarty_tpl->tpl_vars['addon']->value['license_active'] == "Y") {?>
                <div class="cp-addon-subscr-title">
                    <span class="cp-addon-subscr-exists"><?php echo $_smarty_tpl->__("cp_am_subscribe_exists",array("[date]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'valid_date')));?>
</span>
                </div>
                                <div class="cp-addon-subscr-buttons">
                    <a class="cp-am-btn cp-am-green" target="_blank" href="<?php echo htmlspecialchars((string) fn_url("cp_addons_manager.prolongate&product_id=".((string)$_smarty_tpl->tpl_vars['addon']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_am_prolong_subscr");?>
</a>
                </div>
            <?php } else { ?>
                <div class="cp-addon-subscr-title">
                    <span class="cp-addon-subscr-expired"><?php echo $_smarty_tpl->__("cp_am_subscribe_expired",array("[date]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'valid_date')));?>
</span>
                </div>
                                <div class="cp-addon-subscr-buttons">
                    <a class="cp-am-btn cp-am-red" target="_blank" href="<?php echo htmlspecialchars((string) fn_url("cp_addons_manager.prolongate&product_id=".((string)$_smarty_tpl->tpl_vars['addon']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cp_am_buy_subscr");?>
</a>
                </div>
            <?php }?>
        </div>
    <?php }?>
</form>
<?php }
}
