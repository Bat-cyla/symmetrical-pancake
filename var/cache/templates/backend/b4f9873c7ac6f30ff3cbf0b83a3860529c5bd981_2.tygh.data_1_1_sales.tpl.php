<?php
/* Smarty version 4.1.1, created on 2024-08-20 11:56:31
  from '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_data/data_1_1_sales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66c45a3fbb5ac5_64282406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f9873c7ac6f30ff3cbf0b83a3860529c5bd981' => 
    array (
      0 => '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_data/data_1_1_sales.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_66c45a3fbb5ac5_64282406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.sales','dashboard.view_reports'));
if (!empty($_smarty_tpl->tpl_vars['orders_stat']->value['orders_total']) || !empty($_smarty_tpl->tpl_vars['graphs']->value)) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['orders_stat']->value['orders_total']['totally_paid']), 0, false);
$_smarty_tpl->assign('totally_paid', ob_get_clean());
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "date_range_selected_date", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] === "month_first") {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_from']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_to']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_from']->value,"%d %b %Y"), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_to']->value,"%d %b %Y"), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('data_1_1_sales', array('id'=>"analytics_card_sales",'preheader'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'date_range_selected_date'),'is_selected_date'=>true,'title'=>$_smarty_tpl->__("dashboard.analytics_card.sales"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.view_reports"),'href'=>"sales_reports.view"),'number'=>$_smarty_tpl->tpl_vars['totally_paid']->value,'number_dynamics'=>$_smarty_tpl->tpl_vars['orders_stat']->value['diff']['sales'],'graph'=>array()));
if (!empty($_smarty_tpl->tpl_vars['graphs']->value)) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_1_1_sales']) ? $_smarty_tpl->tpl_vars['data_1_1_sales']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['graph']['content'] = array();
$_smarty_tpl->_assignInScope('data_1_1_sales', $_tmp_array);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graphs']->value, 'graph', false, 'chart', 'graphs', array (
));
$_smarty_tpl->tpl_vars['graph']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chart']->value => $_smarty_tpl->tpl_vars['graph']->value) {
$_smarty_tpl->tpl_vars['graph']->do_else = false;
if ($_smarty_tpl->tpl_vars['chart']->value === "dashboard_statistics_sales_chart") {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graph']->value, 'data', false, 'date', 'graph', array (
));
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['date']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_1_1_sales']) ? $_smarty_tpl->tpl_vars['data_1_1_sales']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['graph']['content'][] = array('date'=>$_smarty_tpl->tpl_vars['date']->value,'prev'=>$_smarty_tpl->tpl_vars['data']->value['prev'],'cur'=>$_smarty_tpl->tpl_vars['data']->value['cur']);
$_smarty_tpl->_assignInScope('data_1_1_sales', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->_assignInScope('data_1_1_sales', $_smarty_tpl->tpl_vars['data_1_1_sales']->value ,false ,2);
}
}
}
