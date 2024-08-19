<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:53:39
  from '/app/www/design/backend/templates/views/languages/translations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac8273bfc7c8_51886135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3efabe7d1050819921d6f734be54e509b713fab' => 
    array (
      0 => '/app/www/design/backend/templates/views/languages/translations.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:buttons/update_for_all.tpl' => 1,
    'tygh:common/table_tools_list.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:buttons/multiple_buttons.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:views/languages/components/langvars_search_form.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66ac8273bfc7c8_51886135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('value','language_variable','value','language_variable','restore_default','delete','no_data','language_variable','value','language_variable','value','tools','new_language_variable','add_language_variable','on_site_live_editing','translations'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<div id="content_translations">

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="language_variables_form" id="language_variables_form">
<input type="hidden" name="q" value="<?php echo htmlspecialchars((string) $_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
$_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

<?php if ($_smarty_tpl->tpl_vars['lang_data']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "languages_translations", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-middle table--relative table-responsive" width="100%">
                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                    <tr>
                        <th width="1%">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <input type="checkbox"
                                   class="bulkedit-toggler hide"
                                   data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                   data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <th width="60%"><?php echo $_smarty_tpl->__("value");?>
</th>
                        <th width="33%"><?php echo $_smarty_tpl->__("language_variable");?>
</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lang_data']->value, 'var', false, 'key');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
                    <tr class="cm-row-item cm-longtap-target"
                        data-ca-longtap-action="setCheckBox"
                        data-ca-longtap-target="input.cm-item"
                        data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <td data-th="">
                            <input type="checkbox" name="names[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item hide">
                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("value");?>
">
                            <textarea name="lang_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][value]" rows="3" class="span7"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['value'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("language_variable");?>
">
                            <input type="hidden" name="lang_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                            <p class="lang-name"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></p>
                        </td>
                        <td>
                            <?php if (fn_allowed_for("ULTIMATE") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>true,'object_id'=>$_smarty_tpl->tpl_vars['key']->value,'name'=>"lang_data[".((string)$_smarty_tpl->tpl_vars['key']->value)."][overwrite]",'component'=>"languages.".((string)$_smarty_tpl->tpl_vars['key']->value)), 0, true);
?>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
                            <?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                                <a class="btn cm-confirm cm-post" href="<?php echo htmlspecialchars((string) fn_url("languages.delete_variable?name=".((string)$_smarty_tpl->tpl_vars['var']->value['name'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("restore_default");?>
">
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-undo"),$_smarty_tpl);?>

                                </a>
                            <?php } else { ?>
                                <a class="btn cm-confirm cm-post" href="<?php echo htmlspecialchars((string) fn_url("languages.delete_variable?name=".((string)$_smarty_tpl->tpl_vars['var']->value['name'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("delete");?>
">
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash"),$_smarty_tpl);?>

                                </a>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <div class="hidden-tools">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_tools_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>$_smarty_tpl->tpl_vars['var']->value['name'],'tools_list'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items')), 0, true);
?>
                            </div>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"language_variables_form",'object'=>"languages_translations",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'languages_translations'),'is_check_all_shown'=>true), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }
$_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</form>

<?php if ($_smarty_tpl->tpl_vars['lang_data']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_button", null, null);?>
        <?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_button'), ENT_QUOTES, 'UTF-8');?>

        <span class="cm-tab-tools tab-tools btn-group" id="tools_translations_save_button">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[languages.m_update_variables]",'but_role'=>"action",'but_target_form'=>"language_variables_form",'but_meta'=>"cm-submit"), 0, false);
?>
        </span>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_langvar", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="lang_add_var">
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
" />

<div class="table-responsive-wrapper">
    <table class="table table--relative table-responsive">
    <thead>
        <tr class="cm-first-sibling">
            <th width="40%"><?php echo $_smarty_tpl->__("language_variable");?>
</th>
            <th width="50%"><?php echo $_smarty_tpl->__("value");?>
</th>
            <th width="10%">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <tr id="box_new_lang_tag" valign="top">
            <td data-th="<?php echo $_smarty_tpl->__("language_variable");?>
">
                <input type="text"
                       size="30"
                       name="new_lang_data[0][name]"
                       value="<?php if (!is_array($_smarty_tpl->tpl_vars['search']->value['name'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
                />
            </td>
            <td data-th="<?php echo $_smarty_tpl->__("value");?>
">
                <textarea name="new_lang_data[0][value]" cols="48" rows="2"></textarea></td>
            <td data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"new_lang_tag"), 0, false);
?></td>
        </tr>
    </tbody>
    </table>
</div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[languages.update_variables]",'cancel_action'=>"close"), 0, false);
?>
</div>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

</div>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popups');?>


<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/languages/components/langvars_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_langvar",'text'=>$_smarty_tpl->__("new_language_variable"),'title'=>$_smarty_tpl->__("add_language_variable"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_langvar'),'act'=>"general",'icon'=>"icon-plus"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("on_site_live_editing"),'href'=>fn_url("customization.update_mode?type=live_editor&status=enable"),'target'=>"_blank",'method'=>"POST"), true);?>
</li>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_button');?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("translations"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'select_languages'=>true), 0, false);
}
}
