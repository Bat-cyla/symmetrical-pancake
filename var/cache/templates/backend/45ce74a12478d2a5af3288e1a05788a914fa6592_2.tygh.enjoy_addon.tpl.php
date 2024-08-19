<?php
/* Smarty version 4.1.1, created on 2024-08-14 09:05:48
  from '/app/www/design/backend/templates/views/addons/components/detailed_page/sidebar/enjoy_addon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bc493c9fa633_59132506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ce74a12478d2a5af3288e1a05788a914fa6592' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/detailed_page/sidebar/enjoy_addon.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/rating/enjoying_addon_notification.tpl' => 1,
  ),
),false)) {
function content_66bc493c9fa633_59132506 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] && $_smarty_tpl->tpl_vars['addon']->value['identified'] && !$_smarty_tpl->tpl_vars['personal_review']->value) {?>
    <div class="sidebar-row marketplace">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"addons_write_review_sidebar"), 0, false);
?>
    </div>
<?php }
}
}
