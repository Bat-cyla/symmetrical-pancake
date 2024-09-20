<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:47
  from '/app/www/design/backend/templates/addons/ab__addons_manager/hooks/index/actions.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec063fe24fd2_33357858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8f4c71f01be642be964da43399987e2347ad7e9' => 
    array (
      0 => '/app/www/design/backend/templates/addons/ab__addons_manager/hooks/index/actions.pre.tpl',
      1 => 1726723206,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__addons_manager/views/ab__am/components/menu.tpl' => 2,
  ),
),false)) {
function content_66ec063fe24fd2_33357858 (Smarty_Internal_Template $_smarty_tpl) {
if (((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']) == 'addons.update' && $_REQUEST['addon'] && preg_match('/^ab[t]?__/',$_REQUEST['addon'])) {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__addons_manager/views/ab__am/components/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_REQUEST['addon']), 0, false);
$_smarty_tpl->_assignInScope('adv_buttons', trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')) ,false ,2);
} elseif (((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']) == 'addons.manage' && $_REQUEST['supplier'] && $_REQUEST['supplier'] == 'AlexBranding') {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__addons_manager/views/ab__am/components/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>'ab__addons_manager'), 0, true);
$_smarty_tpl->_assignInScope('adv_buttons', trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')) ,false ,2);
}
}
}
