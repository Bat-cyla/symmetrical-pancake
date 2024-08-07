<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:01:24
  from '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab8724161df1_06158430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feb8d3ba77a4538a225e4a6434848a2377f13b53' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/index/styles.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab8724161df1_06158430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/vendor_data_premoderation/styles.less"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['addon']->value['addon'] == "vendor_data_premoderation") {?>
    <?php echo smarty_function_style(array('src'=>"addons/vendor_data_premoderation/vendor_data_premoderation.less"),$_smarty_tpl);?>

<?php }
}
}
