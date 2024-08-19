<?php
/* Smarty version 4.1.1, created on 2024-08-15 15:05:58
  from '/app/www/design/backend/templates/views/sales_reports/components/sales_reports_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdef26e7b002_67222003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32bd6086edd8287bd21e4446d22e7a5b70bf38cb' => 
    array (
      0 => '/app/www/design/backend/templates/views/sales_reports/components/sales_reports_search_form.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_66bdef26e7b002_67222003 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title'));
?>
<div class="sidebar-row">
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="report_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
        <input type="hidden" name="report_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="selected_section" value="">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['period']->value,'display'=>"form"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_adv_link'=>true,'simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'not_saved'=>true,'dispatch'=>"sales_reports.set_report_view"), 0, false);
?>
</form>
</div><?php }
}
