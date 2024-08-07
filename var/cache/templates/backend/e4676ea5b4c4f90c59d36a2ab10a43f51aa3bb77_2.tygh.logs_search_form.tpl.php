<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:01:25
  from '/app/www/design/backend/templates/views/logs/components/logs_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab8725511334_06239890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4676ea5b4c4f90c59d36a2ab10a43f51aa3bb77' => 
    array (
      0 => '/app/www/design/backend/templates/views/logs/components/logs_search_form.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_66ab8725511334_06239890 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','user','type','action','all','all'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="logs_form" method="get">
    <input type="hidden" name="object" value="<?php echo htmlspecialchars((string) $_REQUEST['object'], ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'extra'=>'','display'=>"form",'button'=>"false"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>

    <div class="group form-horizontal">
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("user");?>
:</label>
            <div class="controls">
                <input type="text" name="q_user" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['q_user'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("type");?>
/<?php echo $_smarty_tpl->__("action");?>
:</label>
            <div class="controls">
                <select id="q_type" name="q_type" onchange="fn_logs_build_options();">
                    <option value=""<?php if (!$_smarty_tpl->tpl_vars['search']->value['q_type']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['log_types']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['type'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['search']->value['q_type'] == $_smarty_tpl->tpl_vars['o']->value['type']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                &nbsp;&nbsp;
                <select id="q_action" class="hidden" name="q_action">
                </select>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"logs:search_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"logs:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"logs:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'dispatch'=>"logs.manage",'view_type'=>"logs"), 0, false);
?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    var types = new Array();
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['log_types']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
    types['<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['type'], ENT_QUOTES, 'UTF-8');?>
'] = new Array();
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['o']->value['actions'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    types['<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['type'], ENT_QUOTES, 'UTF-8');?>
']['<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
'] = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
';
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    Tygh.tr('all', '<?php echo strtr((string)$_smarty_tpl->__("all"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');

    
    function fn_logs_build_options(current_action)
    {
        var elm_t = Tygh.$('#q_type');
        var elm_a = Tygh.$('#q_action');

        elm_a.html('<option value="">' + Tygh.tr('all') + '</option>');

        for (var action in types[elm_t.val()]) {
            elm_a.append('<option value="' + action + '"' + (current_action && current_action == action ? ' selected="selected"' : '') + '>' + types[elm_t.val()][action] + '</option>');
        }

        Tygh.$('#q_action').toggleBy((Tygh.$('option', elm_a).length == 1));
    }
    

    Tygh.$(document).ready(function() <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        fn_logs_build_options('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['q_action'], ENT_QUOTES, 'UTF-8');?>
');
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</form>
</div>
<?php }
}
