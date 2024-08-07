<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:15:27
  from '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/components/list_tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac797fba39e5_94307198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11db183ebeda1918498308185b1e4483547fda0d' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/components/list_tools.tpl',
      1 => 1722517426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac797fba39e5_94307198 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('cp_addon_status_on','cp_addon_status_on','cp_addon_status_off','cp_addon_status_not_installed','cp_am_settings','cp_am_settings','settings','cp_am_settings','cp_am_documentation','cp_am_documentation_not_exists'));
?>
<div class="cp-addon-tools clearfix" id="cp_addon_tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['is_am']->value) {?>
        <span class="cp-am-tool cp-am-tooltip" title="<?php echo $_smarty_tpl->__("cp_addon_status_on");?>
">
            <i class="cp-am-icon cp-am-icon-is-on"></i>
        </span>
    <?php } elseif ($_smarty_tpl->tpl_vars['addon']->value['status']) {?>
        <?php if ($_smarty_tpl->tpl_vars['addon']->value['status'] == "A") {?>
            <a href="<?php echo htmlspecialchars((string) fn_url("addons.update_status?id=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon_name'])."&status=D&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" class="cp-am-tool cp-am-tooltip cm-ajax cm-post" title="<?php echo $_smarty_tpl->__("cp_addon_status_on");?>
" data-ca-target-id="cp_addon_tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
">
                <i class="cp-am-icon cp-am-icon-is-on"></i>
            </a>
        <?php } else { ?>
            <a href="<?php echo htmlspecialchars((string) fn_url("addons.update_status?id=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon_name'])."&status=A&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" class="cp-am-tool cp-am-tooltip cm-ajax cm-post" title="<?php echo $_smarty_tpl->__("cp_addon_status_off");?>
" data-ca-target-id="cp_addon_tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
">
                <i class="cp-am-icon cp-am-icon-is-off"></i>
            </a>
        <?php }?>
    <?php } else { ?>
        <span class="cp-am-tool cp-am-tooltip" title="<?php echo $_smarty_tpl->__("cp_addon_status_not_installed");?>
">
            <i class="cp-am-icon cp-am-icon-is-off cp-am-icon-disabled"></i>
        </span>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_settings']) {?>
        <?php if ($_smarty_tpl->tpl_vars['addon']->value['separate'] || version_compare((defined('PRODUCT_VERSION') ? constant('PRODUCT_VERSION') : null),"4.13",">")) {?>
            <a href="<?php echo htmlspecialchars((string) fn_url("addons.update?addon=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon_name'])), ENT_QUOTES, 'UTF-8');?>
" class="cp-am-tool cp-am-tooltip" title="<?php echo $_smarty_tpl->__("cp_am_settings");?>
">
                <i class="cp-am-icon cp-am-icon-settings"></i>
            </a>
        <?php } else { ?>
            <a href="<?php echo htmlspecialchars((string) fn_url("addons.update?addon=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon_name'])."&return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-ajax cp-am-tool cp-am-tooltip" data-ca-target-id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("cp_am_settings");?>
"  data-ca-dialog-title="<?php echo $_smarty_tpl->__("settings");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['current_name'], ENT_QUOTES, 'UTF-8');?>
">
                <i class="cp-am-icon cp-am-icon-settings"></i>
            </a>
        <?php }?>
    <?php } else { ?>
        <span href="" class="cp-am-tool cp-am-tooltip" title="<?php echo $_smarty_tpl->__("cp_am_settings");?>
">
            <i class="cp-am-icon cp-am-icon-settings cp-am-icon-disabled"></i>
        </span>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['addon']->value['documentation_link']) {?>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['documentation_link'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="cp-am-tool cp-am-tooltip" title="<?php echo $_smarty_tpl->__("cp_am_documentation");?>
">
            <i class="cp-am-icon cp-am-icon-question"></i>
        </a>
    <?php } else { ?>
        <span class="cp-am-tool cp-am-tooltip" title="<?php echo $_smarty_tpl->__("cp_am_documentation_not_exists");?>
">
            <i class="cp-am-icon cp-am-icon-question cp-am-icon-disabled"></i>
        </a>
    <?php }?>
<!--cp_addon_tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
