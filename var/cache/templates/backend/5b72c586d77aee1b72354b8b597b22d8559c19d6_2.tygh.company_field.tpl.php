<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/views/companies/components/company_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c19562535_64859771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b72c586d77aee1b72354b8b597b22d8559c19d6' => 
    array (
      0 => '/app/www/design/backend/templates/views/companies/components/company_field.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/ajax_select_object.tpl' => 1,
  ),
),false)) {
function content_66aa1c19562535_64859771 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('owner_company'));
$_smarty_tpl->_assignInScope('required', (($tmp = $_smarty_tpl->tpl_vars['required']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && (!$_smarty_tpl->tpl_vars['selected']->value || fn_allowed_for("MULTIVENDOR")) && !$_smarty_tpl->tpl_vars['disable_company_picker']->value) {?>
    <?php $_smarty_tpl->_assignInScope('selected', $_smarty_tpl->tpl_vars['runtime']->value['company_id']);
}
$_smarty_tpl->_assignInScope('company_field_name', (($tmp = $_smarty_tpl->tpl_vars['company_field_name']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("owner_company") ?? null : $tmp));?>

<?php if (!$_smarty_tpl->tpl_vars['selected']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value || $_smarty_tpl->tpl_vars['force_zero_company_id']->value) {?>
        <?php $_smarty_tpl->_assignInScope('selected', $_smarty_tpl->tpl_vars['required']->value ? '' : "0");?>
    <?php } else { ?>
        <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE") && !empty($_smarty_tpl->tpl_vars['auth']->value['storefront_id'])) {?>
            <?php $_smarty_tpl->_assignInScope('selected', fn_get_default_company_id_for_storefront($_smarty_tpl->tpl_vars['auth']->value['storefront_id']));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('selected', fn_get_default_company_id());?>
        <?php }?>
    <?php }
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "c_body", null, null);?>
    <input type="hidden" class="cm-no-failed-msg" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "company_id" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['disable_company_picker']->value) {?>
            <div class="text-type-value"><?php echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['selected']->value,$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value), ENT_QUOTES, 'UTF-8');?>
</div>
        <?php } else { ?>
            <div class="text-type-value ajax-select-wrap <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('url_extra', "&show_all=Y&default_label=".((string)$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value));?>
                    <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('url_extra', ((string)$_smarty_tpl->tpl_vars['url_extra']->value)."&search=Y");?>
                    <?php }?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_url'=>"companies.get_companies_list?onclick=".((string)$_smarty_tpl->tpl_vars['onclick']->value).((string)$_smarty_tpl->tpl_vars['url_extra']->value),'text'=>fn_get_company_name($_smarty_tpl->tpl_vars['selected']->value,$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value),'result_elm'=>(($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "company_id" ?? null : $tmp),'id'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_selector",'js_action'=>$_smarty_tpl->tpl_vars['js_action']->value), 0, false);
?>
            </div>
        <?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?>
        <div class="control-group">
            <label class="control-label <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>cm-required<?php }?>" for="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "company_id" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_field_name']->value, ENT_QUOTES, 'UTF-8');?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'c_body');?>

                <?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?>
                    <p class="muted description"><?php echo $_smarty_tpl->tpl_vars['tooltip']->value;?>
</p>
                <?php }?>
            </div>
        </div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'c_body');?>

    <?php }
} else { ?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'c_body');?>

<?php }
}
}
