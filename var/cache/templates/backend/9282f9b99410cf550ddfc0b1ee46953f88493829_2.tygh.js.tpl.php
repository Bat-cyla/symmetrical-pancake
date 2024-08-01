<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/pickers/categories/js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c1975b617_11425864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9282f9b99410cf550ddfc0b1ee46953f88493829' => 
    array (
      0 => '/app/www/design/backend/templates/pickers/categories/js.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_name.tpl' => 2,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_66aa1c1975b617_11425864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('position_short','name','edit','remove','add_categories','remove','remove','remove'));
if ($_smarty_tpl->tpl_vars['category_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('category_data', fn_get_category_data($_smarty_tpl->tpl_vars['category_id']->value,(defined('DESCR_SL') ? constant('DESCR_SL') : null),'',false,true,false,true));?>
    <?php $_smarty_tpl->_assignInScope('category', (($tmp = $_smarty_tpl->tpl_vars['category_data']->value['category'] ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."category".((string)$_smarty_tpl->tpl_vars['rdelim']->value) ?? null : $tmp));?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && ($_smarty_tpl->tpl_vars['owner_company_id']->value && $_smarty_tpl->tpl_vars['owner_company_id']->value != $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['category_data']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['category_data']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
        <?php $_smarty_tpl->_assignInScope('show_only_name', true);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['owner_company_id']->value && $_smarty_tpl->tpl_vars['owner_company_id']->value != $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php $_smarty_tpl->_assignInScope('hide_delete_button', true);?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_assignInScope('category', rawurldecode($_smarty_tpl->tpl_vars['default_name']->value));
}
if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?><td width="5%" data-th="<?php echo $_smarty_tpl->__("position_short");?>
"><input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-micro"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> /></td><?php }?>
        <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
            <?php if (!$_smarty_tpl->tpl_vars['show_only_name']->value) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8');?>
</a>
            <?php } else { ?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8');?>
 <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['category_data']->value), 0, false);
?>
            <?php }?>
        </td>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"category_picker:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"category_picker:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"category_picker:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <td width="5%" class="nowrap" data-th="&nbsp;">
        <?php if (!$_smarty_tpl->tpl_vars['view_only']->value || $_smarty_tpl->tpl_vars['show_only_name']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category_id']->value)), true);?>
</li>
                <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value) {?>
                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['category_id']->value)."', 'c'); return false;"), true);?>
</li>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <div class="hidden-tools">
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

            </div>
        <?php }?>
        </td>
    </tr>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>
        <span <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
        <?php if (!$_smarty_tpl->tpl_vars['first_item']->value && $_smarty_tpl->tpl_vars['single_line']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">,&nbsp;&nbsp;</span><?php }?>

        <div class="input-append">
        <input class="cm-picker-value-description <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> size="10" name="category_name" readonly="readonly" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 id="appendedInputButton">
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['runtime']->value['controller'] != "companies") {?>
        <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            <?php $_smarty_tpl->_assignInScope('_but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_categories") ?? null : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('_but_role', "add");?>
            <?php $_smarty_tpl->_assignInScope('_but_icon', "icon-plus");?>
        <?php } else { ?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus",'assign'=>'_but_text'),$_smarty_tpl);?>

            <?php $_smarty_tpl->_assignInScope('_but_role', "icon");?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("categories.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&company_ids=".((string)$_smarty_tpl->tpl_vars['company_ids']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_icon'=>$_smarty_tpl->tpl_vars['_but_icon']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>((string)$_smarty_tpl->tpl_vars['but_meta']->value)." cm-dialog-opener add-on btn cm-dialog-destroy-on-close"), 0, false);
?>
        <?php }?>
        </div>
        </span>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('default_category', ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."category".((string)$_smarty_tpl->tpl_vars['rdelim']->value));?>
        <?php $_smarty_tpl->_assignInScope('default_category_id', ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."category_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value));?>
        <?php $_smarty_tpl->_assignInScope('default_category_path_items', ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."path_items".((string)$_smarty_tpl->tpl_vars['rdelim']->value));?>
        <?php if ($_smarty_tpl->tpl_vars['first_item']->value || !$_smarty_tpl->tpl_vars['category_id']->value) {?>
            <p class="cm-js-item cm-clone hidden">
                <?php if ($_smarty_tpl->tpl_vars['hide_input']->value != "Y") {?>
                    <label class="radio inline-block" for="category_rb_category_id">
                        <input id="category_rb_category_id" type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['radio_input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_category_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    </label>
                <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_active_path']->value) {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_category_path_items']->value, ENT_QUOTES, 'UTF-8');?>

                        <a target="_blank" href="<?php echo htmlspecialchars((string) fn_url("categories.update&category_id=".((string)$_smarty_tpl->tpl_vars['default_category_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_category']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php } else { ?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_category']->value, ENT_QUOTES, 'UTF-8');?>

                    <?php }?>
                    <a class="icon-remove-sign cm-tooltip hand hidden" onclick="Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_category_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'c'); return false;" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
            </p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['category_id']->value) {?>
        <div class="cm-js-item <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
>
            <?php if ($_smarty_tpl->tpl_vars['hide_input']->value != "Y") {?>
                <label class="radio inline-block" for="category_radio_button_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input id="category_radio_button_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['main_category']->value == $_smarty_tpl->tpl_vars['category_id']->value) {?>checked<?php }?> type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['radio_input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                </label>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_active_path']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_data']->value['path_names'], 'path_name', false, 'path_id', 'path_names', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path_id']->value => $_smarty_tpl->tpl_vars['path_name']->value) {
$_smarty_tpl->tpl_vars['path_name']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['total'];
?>
                    <a target="_blank" class="<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['last'] : null)) {?>ty-breadcrumbs__a<?php } else { ?>ty-breadcrumbs__current<?php }?>" href="<?php echo htmlspecialchars((string) fn_url("categories.update&category_id=".((string)$_smarty_tpl->tpl_vars['path_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path_name']->value, ENT_QUOTES, 'UTF-8');?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['last'] : null)) {?> / <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8');?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['category_data']->value['company_id']) {
$_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['category_data']->value,'simple'=>true), 0, true);
}?>

            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && ($_smarty_tpl->tpl_vars['category_data']->value['company_id'] == $_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['runtime']->value['company_id'] == $_smarty_tpl->tpl_vars['owner_company_id']->value))) {?>
                    <a onclick="Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'c'); return false;" class="icon-remove-sign cm-tooltip hand hidden" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
                <?php }?>
            <?php } else { ?>
                <a onclick="Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'c'); return false;" class="icon-remove-sign cm-tooltip hand hidden" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
            <?php }?>
        </div>
        <?php }?>
    <?php }
}
}
}
