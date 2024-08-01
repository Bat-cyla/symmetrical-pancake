<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:42
  from '/app/www/design/backend/templates/views/block_manager/components/export_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bdaa611e3_33100603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2835dba95ac8e55e40f7affa6c5be20ca0372d7' => 
    array (
      0 => '/app/www/design/backend/templates/views/block_manager/components/export_layout.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_66ab5bdaa611e3_33100603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','block_manager.layout_pages','output','direct_download','server','screen','filename','export'));
?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit " name="export_locations">
<input type="hidden" id="s_layout" name="s_layout" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" />
<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">

<div class="control-group cm-no-hide-input">
    <label for="locations_ids" class="control-label"><?php echo $_smarty_tpl->__("block_manager.layout_pages");?>
</label>
    <div class="controls">
        <div class="scroll-y">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'location', false, 'location_id');
$_smarty_tpl->tpl_vars['location']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['location_id']->value => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->do_else = false;
?>
                    <label for="location_export_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox"><input id="location_export_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="location_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" checked="checked" class="cm-item" />
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['name'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
)</label>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"links"), 0, false);
?>
    </div>
</div>

<div class="control-group">
    <label for="output" class="control-label"><?php echo $_smarty_tpl->__("output");?>
</label>
    <div class="controls">
    <select name="output" id="output">
        <option value="D"><?php echo $_smarty_tpl->__("direct_download");?>
</option>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <option value="S"><?php echo $_smarty_tpl->__("server");?>
</option>
        <?php }?>
        <option value="C"><?php echo $_smarty_tpl->__("screen");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="filename"><?php echo $_smarty_tpl->__("filename");?>
</label>
    <div class="controls">
        <input type="text" name="filename" id="filename" size="50" value="layouts_<?php echo htmlspecialchars((string) smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%m%d%Y"), ENT_QUOTES, 'UTF-8');?>
.xml" />
    </div>
</div>

</div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("export"),'but_name'=>"dispatch[block_manager.export_layout]",'cancel_action'=>"close"), 0, false);
?>
</div>
</form><?php }
}
