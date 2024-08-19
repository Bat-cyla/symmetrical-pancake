<?php
/* Smarty version 4.1.1, created on 2024-08-14 09:06:01
  from '/app/www/design/backend/templates/views/addons/components/addons/addon_supplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bc4949ef2728_43300286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d478aa17175de7f541050bbaffd541d708b4de' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/addons/addon_supplier.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bc4949ef2728_43300286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('verified_developer','addon_has_admin_review'));
$_smarty_tpl->_assignInScope('show_supplier_link', (($tmp = $_smarty_tpl->tpl_vars['show_supplier_link']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['a']->value['supplier']) {?>
    <div class="addons-addon-supplier">
        <?php if ($_smarty_tpl->tpl_vars['show_supplier_link']->value) {?>
            <a href="<?php echo htmlspecialchars((string) fn_url("addons.manage&supplier=".((string)$_smarty_tpl->tpl_vars['a']->value['supplier'])), ENT_QUOTES, 'UTF-8');?>
" class="addons-addon-supplier__name addons-addon-supplier__name--link row-status">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>

            </a>
        <?php } else { ?>
            <span class="addons-addon-supplier__name row-status">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>

            </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['identified'] || $_smarty_tpl->tpl_vars['a']->value['is_core_addon']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-ok addons-addon-supplier__identified addons-addon-supplier__identified--".((string)(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'))),'title'=>$_smarty_tpl->__("verified_developer")),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['personal_review']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comment addons-addon-supplier__has-admin-review",'title'=>$_smarty_tpl->__("addon_has_admin_review")),$_smarty_tpl);?>

        <?php }?>
    </div>
<?php }
}
}
