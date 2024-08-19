<?php
/* Smarty version 4.1.1, created on 2024-08-15 11:11:31
  from '/app/www/design/themes/responsive/templates/common/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdb833c436e8_73913814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '171b4db40955f9ae1af997afe4e52087f7715317' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/common/calendar.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bdb833c436e8_73913814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('calendar','weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12','calendar','weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('date_format', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] === "month_first" ? "%m/%d/%Y" : "%d/%m/%Y");
$_smarty_tpl->_assignInScope('current_year', smarty_modifier_date_format(time(),"%Y"));?>

<?php $_smarty_tpl->_assignInScope('is_changeable_range', (($tmp = $_smarty_tpl->tpl_vars['is_changeable_range']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('start_range', $_smarty_tpl->tpl_vars['is_changeable_range']->value ? "c-100" : "-100");
$_smarty_tpl->_assignInScope('end_range', $_smarty_tpl->tpl_vars['is_changeable_range']->value ? "c+10" : $_smarty_tpl->tpl_vars['current_year']->value);?>

<?php $_smarty_tpl->_assignInScope('start_year_range', (($tmp = $_smarty_tpl->tpl_vars['start_year_range']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['start_range']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('end_year_range', (($tmp = $_smarty_tpl->tpl_vars['end_year_range']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['end_range']->value ?? null : $tmp));?>

<div class="ty-calendar__block">
    <input type="text" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-calendar__input<?php if ($_smarty_tpl->tpl_vars['date_meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_meta']->value, ENT_QUOTES, 'UTF-8');
}?> cm-calendar" value="<?php if ($_smarty_tpl->tpl_vars['date_val']->value) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_val']->value,((string)$_smarty_tpl->tpl_vars['date_format']->value)), ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 size="10" autocomplete="disabled" />
    <a class="cm-external-focus ty-calendar__link" data-ca-external-focus-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-calendar ty-calendar__button",'title'=>$_smarty_tpl->__("calendar")),$_smarty_tpl);?>

    </a>
        <input type="text" hidden disabled name="fake_mail" aria-hidden="true">
</div>

<?php echo '<script'; ?>
>
(function(_, $) <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    $.ceEvent('on', 'ce.commoninit', function(context) {

        $('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
').datepicker({
            changeMonth: true,
            duration: 'fast',
            changeYear: true,
            numberOfMonths: 1,
            selectOtherMonths: true,
            showOtherMonths: true,

            firstDay: <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_week_format'] == "sunday_first") {?>0<?php } else { ?>1<?php }?>,
            dayNamesMin: ['<?php echo $_smarty_tpl->__("weekday_abr_0");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_1");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_2");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_3");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_4");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_5");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_6");?>
'],
            monthNamesShort: ['<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_1"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_2"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_3"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_4"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_5"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_6"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_7"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_8"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_9"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_10"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_11"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_12"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
'],
            yearRange: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['start_year_range']->value, ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['end_year_range']->value, ENT_QUOTES, 'UTF-8');?>
',
            dateFormat: '<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] == "month_first") {?>mm/dd/yy<?php } else { ?>dd/mm/yy<?php }?>'
        });
    });
<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/calendar.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/calendar.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('date_format', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] === "month_first" ? "%m/%d/%Y" : "%d/%m/%Y");
$_smarty_tpl->_assignInScope('current_year', smarty_modifier_date_format(time(),"%Y"));?>

<?php $_smarty_tpl->_assignInScope('is_changeable_range', (($tmp = $_smarty_tpl->tpl_vars['is_changeable_range']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('start_range', $_smarty_tpl->tpl_vars['is_changeable_range']->value ? "c-100" : "-100");
$_smarty_tpl->_assignInScope('end_range', $_smarty_tpl->tpl_vars['is_changeable_range']->value ? "c+10" : $_smarty_tpl->tpl_vars['current_year']->value);?>

<?php $_smarty_tpl->_assignInScope('start_year_range', (($tmp = $_smarty_tpl->tpl_vars['start_year_range']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['start_range']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('end_year_range', (($tmp = $_smarty_tpl->tpl_vars['end_year_range']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['end_range']->value ?? null : $tmp));?>

<div class="ty-calendar__block">
    <input type="text" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-calendar__input<?php if ($_smarty_tpl->tpl_vars['date_meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_meta']->value, ENT_QUOTES, 'UTF-8');
}?> cm-calendar" value="<?php if ($_smarty_tpl->tpl_vars['date_val']->value) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_val']->value,((string)$_smarty_tpl->tpl_vars['date_format']->value)), ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 size="10" autocomplete="disabled" />
    <a class="cm-external-focus ty-calendar__link" data-ca-external-focus-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-calendar ty-calendar__button",'title'=>$_smarty_tpl->__("calendar")),$_smarty_tpl);?>

    </a>
        <input type="text" hidden disabled name="fake_mail" aria-hidden="true">
</div>

<?php echo '<script'; ?>
>
(function(_, $) <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    $.ceEvent('on', 'ce.commoninit', function(context) {

        $('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
').datepicker({
            changeMonth: true,
            duration: 'fast',
            changeYear: true,
            numberOfMonths: 1,
            selectOtherMonths: true,
            showOtherMonths: true,

            firstDay: <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_week_format'] == "sunday_first") {?>0<?php } else { ?>1<?php }?>,
            dayNamesMin: ['<?php echo $_smarty_tpl->__("weekday_abr_0");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_1");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_2");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_3");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_4");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_5");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_6");?>
'],
            monthNamesShort: ['<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_1"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_2"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_3"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_4"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_5"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_6"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_7"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_8"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_9"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_10"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_11"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("month_name_abr_12"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
'],
            yearRange: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['start_year_range']->value, ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['end_year_range']->value, ENT_QUOTES, 'UTF-8');?>
',
            dateFormat: '<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] == "month_first") {?>mm/dd/yy<?php } else { ?>dd/mm/yy<?php }?>'
        });
    });
<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
