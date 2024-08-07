<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:15:27
  from '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/components/release_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac797fbcd169_10304668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5df1cdf9d88946d5c8a859adf098320197674efd' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/components/release_info.tpl',
      1 => 1722517426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac797fbcd169_10304668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('cp_release_date','cp_cscart','cp_multivendor','cp_cscart','multivendor'));
?>
<strong><?php echo $_smarty_tpl->__("cp_release_date");?>
:</strong>
<?php if ($_smarty_tpl->tpl_vars['release']->value['timestamp']) {?>
    <div><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['release']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
<?php } else { ?>
    <div>&mdash;</div>
<?php }?>
<span></span>
<strong><?php echo $_smarty_tpl->__("cp_сompatibility");?>
:</strong>
<?php if ($_smarty_tpl->tpl_vars['release']->value['edition']) {?>
    <div>
        <?php if ($_smarty_tpl->tpl_vars['release']->value['edition'] == "A") {?>
            <?php echo $_smarty_tpl->__("cp_cscart");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("cp_multivendor");?>

        <?php } elseif ($_smarty_tpl->tpl_vars['release']->value['edition'] == "C") {?>
            <?php echo $_smarty_tpl->__("cp_cscart");?>

        <?php } elseif ($_smarty_tpl->tpl_vars['release']->value['edition'] == "M") {?>
            <?php echo $_smarty_tpl->__("multivendor");?>

        <?php }?>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['release']->value['version_from']) {?>
    <div>[v<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['release']->value['version_from'], ENT_QUOTES, 'UTF-8');?>
&nbsp;-&nbsp;v<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['release']->value['version_to'], ENT_QUOTES, 'UTF-8');?>
]</div>
<?php } else { ?>
    <div>&mdash;</div>
<?php }
}
}
