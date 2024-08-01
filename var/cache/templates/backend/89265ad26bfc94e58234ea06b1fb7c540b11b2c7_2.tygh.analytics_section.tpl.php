<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:09:01
  from '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1b4da0b822_81316312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89265ad26bfc94e58234ea06b1fb7c540b11b2c7' => 
    array (
      0 => '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_section.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/analytics_section/analytics_data/get_analytics_data.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_card/analytics_card.tpl' => 3,
  ),
),false)) {
function content_66aa1b4da0b822_81316312 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_section_title','no_data'));
$_smarty_tpl->_assignInScope('show_analytics_section', (($tmp = $_smarty_tpl->tpl_vars['show_analytics_section']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_analytics_section']->value) {
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_data/get_analytics_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('order_statuses'=>$_smarty_tpl->tpl_vars['order_statuses']->value,'orders'=>$_smarty_tpl->tpl_vars['orders']->value), 0, false);
?><section class="analytics-section"><h2 class="analytics-section__title"><?php echo $_smarty_tpl->__("dashboard.analytics_section_title");?>
</h2><div class="analytics-section__content"><?php if ($_smarty_tpl->tpl_vars['analytics_data']->value['primary'] || $_smarty_tpl->tpl_vars['analytics_data']->value['secondary'] || $_smarty_tpl->tpl_vars['analytics_data']->value['tertiary']) {?><div class="analytics-section__column analytics-section__column--primary"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['analytics_data']->value['primary'], 'analytics_card');
$_smarty_tpl->tpl_vars['analytics_card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['analytics_card']->value) {
$_smarty_tpl->tpl_vars['analytics_card']->do_else = false;
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_card/analytics_card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="analytics-section__column analytics-section__column--secondary"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['analytics_data']->value['secondary'], 'analytics_card');
$_smarty_tpl->tpl_vars['analytics_card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['analytics_card']->value) {
$_smarty_tpl->tpl_vars['analytics_card']->do_else = false;
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_card/analytics_card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="analytics-section__column analytics-section__column--tertiary"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['analytics_data']->value['tertiary'], 'analytics_card');
$_smarty_tpl->tpl_vars['analytics_card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['analytics_card']->value) {
$_smarty_tpl->tpl_vars['analytics_card']->do_else = false;
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_card/analytics_card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php } else { ?><div class="analytics-section__no-items no-items"><?php echo $_smarty_tpl->__("no_data");?>
</div><?php }?></div></section><?php }
}
}
