<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:09:01
  from '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_card/analytics_card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1b4dc38d90_71179259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4904c9fef1defc2ee42976b3a7e77d2ba1d447c0' => 
    array (
      0 => '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_card/analytics_card.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_card/graph.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_card/bar_chart.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_card/resource_list.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_card/resource_list_tabs.tpl' => 1,
  ),
),false)) {
function content_66aa1b4dc38d90_71179259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.view'));
if ($_smarty_tpl->tpl_vars['analytics_card']->value) {?><div class="analytics-card" data-ca-analytics-card="main" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
"id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card__inner"><?php if ($_smarty_tpl->tpl_vars['analytics_card']->value['preheader']) {?><div class="analytics-card__preheader <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['analytics_card']->value['is_selected_date']) {?>cm-date-range__selected-date-text<?php }?>"><?php echo $_smarty_tpl->tpl_vars['analytics_card']->value['preheader'];?>
</div><?php }
if ($_smarty_tpl->tpl_vars['analytics_card']->value['title'] || $_smarty_tpl->tpl_vars['analytics_card']->value['title_button']) {?><div class="analytics-card__header"><?php if ($_smarty_tpl->tpl_vars['analytics_card']->value['title']) {?><h3 class="analytics-card__title"><?php echo $_smarty_tpl->tpl_vars['analytics_card']->value['title'];?>
</h3><?php }
if ($_smarty_tpl->tpl_vars['analytics_card']->value['title_button']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['analytics_card']->value['title_button']['href']), ENT_QUOTES, 'UTF-8');?>
" class="analytics-card__title-button"><?php echo $_smarty_tpl->tpl_vars['analytics_card']->value['title_button']['name'];?>
</a><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['analytics_card']->value['number'] || $_smarty_tpl->tpl_vars['analytics_card']->value['dynamics_number']) {?><div class="analytics-card__numbers"><?php if ($_smarty_tpl->tpl_vars['analytics_card']->value['number']) {?><div class="analytics-card__number"><?php echo $_smarty_tpl->tpl_vars['analytics_card']->value['number'];?>
</div><?php }
if ($_smarty_tpl->tpl_vars['analytics_card']->value['number_dynamics']) {
$_smarty_tpl->_assignInScope('number_dynamics_text', $_smarty_tpl->tpl_vars['analytics_card']->value['number_dynamics']);
if (is_numeric($_smarty_tpl->tpl_vars['analytics_card']->value['number_dynamics']) && $_smarty_tpl->tpl_vars['analytics_card']->value['number_dynamics'] >= 0) {
$_smarty_tpl->_assignInScope('number_dynamics_class', "analytics-card__number-dynamics--positive");
$_smarty_tpl->_assignInScope('number_dynamics_text', ((string)$_smarty_tpl->tpl_vars['analytics_card']->value['number_dynamics'])."%");
} elseif (is_numeric($_smarty_tpl->tpl_vars['analytics_card']->value['number_dynamics']) && $_smarty_tpl->tpl_vars['analytics_card']->value['number_dynamics'] < 0) {
$_smarty_tpl->_assignInScope('number_dynamics_class', "analytics-card__number-dynamics--negative");
$_smarty_tpl->_assignInScope('number_dynamics_text', ((string)(abs($_smarty_tpl->tpl_vars['analytics_card']->value['number_dynamics'])))."%");
}?><div class="analytics-card__number-dynamics <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['number_dynamics_class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['number_dynamics_text']->value;?>
</div><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['analytics_card']->value['content']) {?><div class="analytics-card__content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['analytics_card']->value['content'], 'content_item');
$_smarty_tpl->tpl_vars['content_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->do_else = false;
?><div class="analytics-card__content-item"><?php echo $_smarty_tpl->tpl_vars['content_item']->value;?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
if ($_smarty_tpl->tpl_vars['analytics_card']->value['buttons']) {?><div class="analytics-card__buttons"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['analytics_card']->value['buttons'], 'button', false, 'button_key');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button_key']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>(($tmp = $_smarty_tpl->tpl_vars['button']->value['role'] ?? null)===null||$tmp==='' ? "action" ?? null : $tmp),'but_id'=>((string)$_smarty_tpl->tpl_vars['analytics_card']->value['id'])."_".((string)((($tmp = $_smarty_tpl->tpl_vars['button']->value['id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['button_key']->value ?? null : $tmp))),'but_text'=>(($tmp = $_smarty_tpl->tpl_vars['button']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("dashboard.view") ?? null : $tmp),'but_href'=>(($tmp = $_smarty_tpl->tpl_vars['button']->value['href'] ?? null)===null||$tmp==='' ? "index.index" ?? null : $tmp),'but_meta'=>"analytics-card__button ".((string)$_smarty_tpl->tpl_vars['button']->value['class'])), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_card/graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graph'=>$_smarty_tpl->tpl_vars['analytics_card']->value['graph']), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_card/bar_chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bar_chart'=>$_smarty_tpl->tpl_vars['analytics_card']->value['bar_chart']), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_card/resource_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource_list'=>$_smarty_tpl->tpl_vars['analytics_card']->value['resource_list']), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_card/resource_list_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource_list_tabs'=>$_smarty_tpl->tpl_vars['analytics_card']->value['resource_list_tabs']), 0, false);
if ($_smarty_tpl->tpl_vars['analytics_card']->value['scripts']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['analytics_card']->value['scripts'], 'script_path');
$_smarty_tpl->tpl_vars['script_path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['script_path']->value) {
$_smarty_tpl->tpl_vars['script_path']->do_else = false;
echo smarty_function_script(array('src'=>$_smarty_tpl->tpl_vars['script_path']->value),$_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
