<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:42
  from '/app/www/design/backend/templates/views/block_manager/components/import_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bdaa7e5f6_50959644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd95a0f9e631a83e0ab5bcb166a16195e236fc2eb' => 
    array (
      0 => '/app/www/design/backend/templates/views/block_manager/components/import_layout.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_66ab5bdaa7e5f6_50959644 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('create_new_layout','update_current_layout','clean_up_all_locations_on_import','override_by_dispatch','import'));
?>
<div class="install-addon">

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="import_locations" enctype="multipart/form-data">

    <div class="install-addon-wrapper">
        <img class="install-addon-banner" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151" height="141" />

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"filename[0]",'allowed_ext'=>"xml"), 0, false);
?>

    </div>

    <div class="control-group">
        <div class="controls">
            <label class="radio" for="sw_import_style_options_suffix_create">
            <input type="radio" id="sw_import_style_options_suffix_create" name="import_style" value="create" checked="checked" class="cm-switch-availability cm-switch-visibility cm-switch-inverse" />
            <?php echo $_smarty_tpl->__("create_new_layout");?>
</label>

            <label class="radio" for="sw_import_style_options_suffix_update">
            <input type="radio" id="sw_import_style_options_suffix_update" name="import_style" value="update" class="cm-switch-availability cm-switch-visibility"/>
            <?php echo $_smarty_tpl->__("update_current_layout");?>
</label>

            <input type="hidden" name="clean_up" value="N" />
            <input type="hidden" name="override_by_dispatch" value="N" />

            <div class="hidden shift-left" id="import_style_options">
                <label class="checkbox" for="elm_clean_up_export">
                <input id="elm_clean_up_export" type="checkbox" name="clean_up" value="Y" disabled />
                <?php echo $_smarty_tpl->__("clean_up_all_locations_on_import");?>
</label>
                <label class="checkbox" for="elm_override_by_dispatch">
                <input id="elm_override_by_dispatch" type="checkbox" name="override_by_dispatch" value="Y" checked="checked" disabled />
                <?php echo $_smarty_tpl->__("override_by_dispatch");?>
</label>
            </div>
        </div>
    </div>

    <div class="buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("import"),'but_name'=>"dispatch[block_manager.import_layout]",'cancel_action'=>"close"), 0, false);
?>
    </div>
</form>

</div>
<?php }
}
