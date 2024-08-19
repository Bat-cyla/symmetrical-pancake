<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:15:27
  from '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/components/correct_permissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac797fb85cf4_91735877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bae880da07c609de3855b4afa7eb4a6b2289995' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/components/correct_permissions.tpl',
      1 => 1722517426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_66ac797fb85cf4_91735877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('non_writable_directories','recheck'));
?>
<div id="addon_upload_container">
    <?php if ($_smarty_tpl->tpl_vars['non_writable']->value) {?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="addon_upload_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
        <input type="hidden" name="result_ids" value="addon_upload_container" />
        <input type="hidden" name="addon_extract_path" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon_extract_path']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="addon_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon_name']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) fn_url("cp_addons_manager.manage"), ENT_QUOTES, 'UTF-8');?>
" />
        
    	<div class="control-group" id="non_writable_dirs">
            <strong class="text-error"><?php echo $_smarty_tpl->__("non_writable_directories");?>
:</strong>
            <ol class="text-error">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['non_writable']->value, 'perm', false, 'dir');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dir']->value => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
                <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dir']->value, ENT_QUOTES, 'UTF-8');?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <!--non_writable_dirs--></div>

        <div>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("recheck"),'but_name'=>"dispatch[cp_addons_manager.recheck]"), 0, false);
?>
        </div>
        <hr>
    </form>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {
            $.ceEvent('one', 'ce.commoninit', function () {
                $.scrollToElm($('#non_writable_dirs'));
            });
        })(Tygh, Tygh.$);
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
<!--addon_upload_container--></div>
<?php }
}
