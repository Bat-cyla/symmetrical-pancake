<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:21:22
  from '/app/www/design/backend/templates/views/addons/components/detailed_page/sidebar/detailed_page_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac7ae2154124_75374882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '390b2705338a86b3e4aa7e30920256d709f22211' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/detailed_page/sidebar/detailed_page_sidebar.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/detailed_page/sidebar/addon_status.tpl' => 1,
    'tygh:views/addons/components/detailed_page/sidebar/enjoy_addon.tpl' => 1,
    'tygh:views/addons/components/detailed_page/sidebar/addon_market_info.tpl' => 1,
    'tygh:views/addons/components/detailed_page/sidebar/addon_support.tpl' => 1,
  ),
),false)) {
function content_66ac7ae2154124_75374882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons_detailed:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons_detailed:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/addon_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/enjoy_addon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/addon_market_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/addon_support.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons_detailed:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
