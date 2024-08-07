<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:01:25
  from '/app/www/design/backend/templates/views/logs/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab872540d820_30980909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c3b4ddd7b9a8c6f77d84012023252b54f3d2e3' => 
    array (
      0 => '/app/www/design/backend/templates/views/logs/manage.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/logs/components/logs_search_form.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66ab872540d820_30980909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('content','user','ip','time','content','backtrace','user','ip','time','no_data','settings','phpinfo','backup_restore','clean_logs','clean_old_logs','logs'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"logs:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"logs:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"logs.manage",'view_type'=>"logs"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/logs/components/logs_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"logs:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['logs']->value) {?>
<div class="table-responsive-wrapper">
    <table class="table table--relative table-responsive">
    <thead>
        <tr>
            <th><?php echo $_smarty_tpl->__("content");?>
</th>
            <th><?php echo $_smarty_tpl->__("user");?>
</th>
            <th><?php echo $_smarty_tpl->__("ip");?>
</th>
            <th><?php echo $_smarty_tpl->__("time");?>
</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'log');
$_smarty_tpl->tpl_vars['log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('_type', "log_type_".((string)$_smarty_tpl->tpl_vars['log']->value['type']));?>
    <?php $_smarty_tpl->_assignInScope('_action', "log_action_".((string)$_smarty_tpl->tpl_vars['log']->value['action']));?>
    <tr>
        <td width="70%" class="wrap" data-th="<?php echo $_smarty_tpl->__("content");?>
">
            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['_type']->value);
if ($_smarty_tpl->tpl_vars['log']->value['action']) {?>&nbsp;(<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['_action']->value);?>
)<?php }?><br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['log']->value['content'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['v']->value && $_smarty_tpl->tpl_vars['k']->value != 'ip_address' && $_smarty_tpl->tpl_vars['k']->value != 'id') {?>
                <strong><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['k']->value);?>
:</strong> <span><bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</bdi></span><br />
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php if ($_smarty_tpl->tpl_vars['log']->value['backtrace']) {?>
            <p><a onclick="Tygh.$('#backtrace_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['log']->value['log_id'], ENT_QUOTES, 'UTF-8');?>
').toggle(); return false;" class="underlined"><span><?php echo $_smarty_tpl->__("backtrace");?>
&rsaquo;&rsaquo;</span></a></p>
            <div id="backtrace_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['log']->value['log_id'], ENT_QUOTES, 'UTF-8');?>
" class="notice-box hidden">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['log']->value['backtrace'], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['file'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['v']->value['function']) {?>&nbsp;(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['function'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>:&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['line'], ENT_QUOTES, 'UTF-8');?>
<br />
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php } else { ?>
                &nbsp;
            <?php }?>
        </td>
        <td data-th="<?php echo $_smarty_tpl->__("user");?>
">
            <?php if ($_smarty_tpl->tpl_vars['log']->value['user_id']) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['log']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['log']->value['lastname'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['log']->value['firstname'] || $_smarty_tpl->tpl_vars['log']->value['lastname']) {?>&nbsp;<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['log']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php } else { ?>
                &mdash;
            <?php }?>
        </td>
        <td data-th="<?php echo $_smarty_tpl->__("ip");?>
">
            <?php if ($_smarty_tpl->tpl_vars['log']->value['content']['ip_address']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['log']->value['content']['ip_address'], ENT_QUOTES, 'UTF-8');
} else { ?>&mdash;<?php }?>
        </td>
        <td data-th="<?php echo $_smarty_tpl->__("time");?>
">
            <span class="nowrap"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
        </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"logs:tools"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"logs:tools"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("settings"),'href'=>"settings.manage?section_id=Logging"), true);?>
</li>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'target'=>"_blank",'text'=>$_smarty_tpl->__("phpinfo"),'href'=>"tools.phpinfo"), true);?>
</li>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("backup_restore"),'href'=>"datakeeper.manage"), true);?>
</li>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("clean_logs"),'href'=>"logs.clean",'class'=>"cm-confirm",'method'=>"POST"), true);?>
</li>
        <?php if (intval($_smarty_tpl->tpl_vars['settings']->value['Logging']['log_lifetime'])) {?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("clean_old_logs",array(intval($_smarty_tpl->tpl_vars['settings']->value['Logging']['log_lifetime']))),'href'=>"logs.clean.old",'class'=>"cm-confirm",'method'=>"POST"), true);?>
</li>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"logs:tools"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("logs"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
