<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:15:27
  from '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/components/list_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac797fbb9251_76284948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fe493ded6042709165cb956659d0ca8f20e505e' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/components/list_info.tpl',
      1 => 1722517426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/cp_addons_manager/views/cp_addons_manager/components/release_info.tpl' => 3,
  ),
),false)) {
function content_66ac797fbb9251_76284948 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('cp_am_versions','cp_installed_version','cp_available_version','cp_actual_version'));
?>
<div class="cp-addon-info-wrap">
    <div class="cp-addons-list-title">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['product'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <div class="cp-addons-list-description">
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['addon']->value['short_description'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addon']->value['short_description'] ?? null : $tmp);?>

    </div>
</div>
<div class="cp-versions-info-wrap">
    <div class="cp-versions-title"><?php echo $_smarty_tpl->__("cp_am_versions");?>
:</div>
    <div class="cp-versions">
        <?php if ($_smarty_tpl->tpl_vars['addon']->value['installed_version']) {?>
            <div class="cp-version cp-installed-version">
                <?php echo $_smarty_tpl->__("cp_installed_version");?>
:&nbsp;<span class="strong">v<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['installed_version'], ENT_QUOTES, 'UTF-8');?>
</span>
                <span class="cp-am-tooltip" title="<?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('release'=>$_smarty_tpl->tpl_vars['addon']->value['versions']['current']), 0, false);
?>">
                    <i class="cp-am-icon cp-am-icon-question"></i>
                </span>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['addon']->value['version']) {?>
            <div class="cp-version cp-available-version">
                <?php echo $_smarty_tpl->__("cp_available_version");?>
: <span class="strong">v<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['version'], ENT_QUOTES, 'UTF-8');?>
</span>
                <span class="cp-am-tooltip" title="<?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('release'=>$_smarty_tpl->tpl_vars['addon']->value), 0, true);
?>">
                    <i class="cp-am-icon cp-am-icon-question"></i>
                </span>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['addon']->value['versions']['latest']) {?>
            <div class="cp-version cp-actual-version">
                <?php echo $_smarty_tpl->__("cp_actual_version");?>
: <span class="strong">v<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['versions']['latest']['version'], ENT_QUOTES, 'UTF-8');?>
</span>
                <span class="cp-am-tooltip" title="<?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('release'=>$_smarty_tpl->tpl_vars['addon']->value['versions']['latest']), 0, true);
?>">
                    <i class="cp-am-icon cp-am-icon-question"></i>
                </span>
            </div>
        <?php }?>
    </div>
</div>
<?php }
}
