<?php
/* Smarty version 4.1.1, created on 2024-08-05 08:22:33
  from '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_card/graph.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b0619927e682_74857993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e865e8353f7bc30975a69ccddc7d5e8601851b32' => 
    array (
      0 => '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_card/graph.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b0619927e682_74857993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('previous_period','current_period','current_previous_period'));
if ($_smarty_tpl->tpl_vars['graph']->value && $_smarty_tpl->tpl_vars['graph']->value['content']) {
echo smarty_function_script(array('src'=>"js/tygh/backend/dashboard/graph.js"),$_smarty_tpl);?>
<div class="analytics-card-graph" data-ca-analytics-card="graph" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['graph']->value['id'], ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-is-day="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_day']->value, ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-previous-period-text="<?php echo htmlspecialchars((string) mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->__("previous_period"), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-current-period-text="<?php echo htmlspecialchars((string) mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->__("current_period"), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-current-previous-period-text="<?php echo htmlspecialchars((string) mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->__("current_previous_period",array("[date]"=>"MMM d, yyyy")), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-content="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['graph']->value['content']), ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-graph__view spinner" data-ca-analytics-card="graphView"></div></div><?php }
}
}
