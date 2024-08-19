<?php
/* Smarty version 4.1.1, created on 2024-08-15 15:05:58
  from '/app/www/design/backend/templates/views/sales_reports/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdef26df9367_07412826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '816da2efdeb660858078c415c6119387ba9c175f' => 
    array (
      0 => '/app/www/design/backend/templates/views/sales_reports/view.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/sales_reports/components/table.tpl' => 1,
    'tygh:views/sales_reports/components/amchart_pie.tpl' => 1,
    'tygh:views/sales_reports/components/amchart_bar.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:views/sales_reports/components/sales_reports_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66bdef26df9367_07412826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_data','no_data','no_data','manage_reports','edit_report','reports'));
echo smarty_function_script(array('src'=>"js/lib/amcharts/amcharts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/amcharts/pie.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/amcharts/serial.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['report']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['report']->value['tables']) {?>
                    <?php $_smarty_tpl->_assignInScope('table_id', $_smarty_tpl->tpl_vars['table']->value['table_id']);?>
                    <?php $_smarty_tpl->_assignInScope('table_prefix', "table_".((string)$_smarty_tpl->tpl_vars['table_id']->value));?>
                    <div id="content_table_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php if (!$_smarty_tpl->tpl_vars['table']->value['elements'] || $_smarty_tpl->tpl_vars['table']->value['empty_values'] == "Y") {?>
                            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['table']->value['type'] == "T") {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/sales_reports/components/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['table']->value['type'] == "P") {?>
                            <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
pie"><?php $_smarty_tpl->_subTemplateRender("tygh:views/sales_reports/components/amchart_pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('chart_data'=>$_smarty_tpl->tpl_vars['new_array']->value['pie_data'],'chart_id'=>$_smarty_tpl->tpl_vars['table_prefix']->value), 0, false);
?><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
pie--></div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['table']->value['type'] == "B") {?>
                            <div id="div_scroll_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="reports-graph-scroll">
                                <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
bar"><?php $_smarty_tpl->_subTemplateRender("tygh:views/sales_reports/components/amchart_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('chart_data'=>$_smarty_tpl->tpl_vars['new_array']->value['column_data'],'chart_id'=>$_smarty_tpl->tpl_vars['table_prefix']->value), 0, false);
?><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
bar--></div>
                            </div>
                        <?php }?>
                    <!--content_table_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

                <?php } else { ?>
                    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>"table_".((string)$_smarty_tpl->tpl_vars['table_id']->value),'track'=>true), 0, false);
?>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <!--content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("manage_reports"),'href'=>"sales_reports.manage"), true);?>
</li>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit_report"),'href'=>"sales_reports.update?report_id=".((string)$_smarty_tpl->tpl_vars['report_id']->value)."&selected_section=tables"), true);?>
</li>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/sales_reports/components/sales_reports_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['report']->value['period'],'search'=>$_smarty_tpl->tpl_vars['report']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("reports"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
