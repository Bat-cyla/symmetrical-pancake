<?php
/* Smarty version 4.1.1, created on 2024-08-15 11:11:31
  from '/app/www/design/themes/responsive/templates/common/period_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdb833c09b61_48599350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66143839dc5ec1ec39e3225d6d34c6569936715f' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/common/period_selector.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/calendar.tpl' => 4,
  ),
),false)) {
function content_66bdb833c09b61_48599350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('period','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','custom','select_dates','period','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','custom','select_dates'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-period">
    <div class="ty-control-group ty-period__wrapper">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("period");?>
</label>
        <select class="ty-period__select" name="period" id="period_selects">
            <option value="A" <?php if ($_smarty_tpl->tpl_vars['period']->value == "A" || !$_smarty_tpl->tpl_vars['period']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
            <optgroup label="=============">
                <option value="D" <?php if ($_smarty_tpl->tpl_vars['period']->value == "D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_day");?>
</option>
                <option value="W" <?php if ($_smarty_tpl->tpl_vars['period']->value == "W") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_week");?>
</option>
                <option value="M" <?php if ($_smarty_tpl->tpl_vars['period']->value == "M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_month");?>
</option>
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['period']->value == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_year");?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="LD" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yesterday");?>
</option>
                <option value="LW" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_week");?>
</option>
                <option value="LM" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_month");?>
</option>
                <option value="LY" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_year");?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="HH" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_24hours");?>
</option>
                <option value="HW" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>7));?>
</option>
                <option value="HM" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>30));?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="C" <?php if ($_smarty_tpl->tpl_vars['period']->value == "C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("custom");?>
</option>
            </optgroup>
        </select>
    </div>

    <div class="ty-control-group ty-period__select-date calendar">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("select_dates");?>
</label>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"f_date",'date_name'=>"time_from",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['time_from'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), 0, false);
?>
        <span class="ty-period__dash">&#8211;</span>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"t_date",'date_name'=>"time_to",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['time_to'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), 0, true);
?>
    </div>

    <?php echo smarty_function_script(array('src'=>"js/tygh/period_selector.js"),$_smarty_tpl);?>

    <?php echo '<script'; ?>
>
    Tygh.$(document).ready(function()<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        Tygh.$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects').cePeriodSelector(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

            from: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
f_date',
            to: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
t_date'
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
    <?php echo '</script'; ?>
>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/period_selector.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/period_selector.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-period">
    <div class="ty-control-group ty-period__wrapper">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("period");?>
</label>
        <select class="ty-period__select" name="period" id="period_selects">
            <option value="A" <?php if ($_smarty_tpl->tpl_vars['period']->value == "A" || !$_smarty_tpl->tpl_vars['period']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
            <optgroup label="=============">
                <option value="D" <?php if ($_smarty_tpl->tpl_vars['period']->value == "D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_day");?>
</option>
                <option value="W" <?php if ($_smarty_tpl->tpl_vars['period']->value == "W") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_week");?>
</option>
                <option value="M" <?php if ($_smarty_tpl->tpl_vars['period']->value == "M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_month");?>
</option>
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['period']->value == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_year");?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="LD" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yesterday");?>
</option>
                <option value="LW" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_week");?>
</option>
                <option value="LM" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_month");?>
</option>
                <option value="LY" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_year");?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="HH" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_24hours");?>
</option>
                <option value="HW" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>7));?>
</option>
                <option value="HM" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>30));?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="C" <?php if ($_smarty_tpl->tpl_vars['period']->value == "C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("custom");?>
</option>
            </optgroup>
        </select>
    </div>

    <div class="ty-control-group ty-period__select-date calendar">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("select_dates");?>
</label>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"f_date",'date_name'=>"time_from",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['time_from'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), 0, true);
?>
        <span class="ty-period__dash">&#8211;</span>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"t_date",'date_name'=>"time_to",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['time_to'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), 0, true);
?>
    </div>

    <?php echo smarty_function_script(array('src'=>"js/tygh/period_selector.js"),$_smarty_tpl);?>

    <?php echo '<script'; ?>
>
    Tygh.$(document).ready(function()<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        Tygh.$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects').cePeriodSelector(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

            from: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
f_date',
            to: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
t_date'
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
    <?php echo '</script'; ?>
>
</div>
<?php }
}
}
