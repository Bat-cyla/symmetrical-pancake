<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:53:39
  from '/app/www/design/backend/templates/components/context_menu/status_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac8273d690c4_85073016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12c7b933e60719090d155bb2ad58fae4bf054318' => 
    array (
      0 => '/app/www/design/backend/templates/components/context_menu/status_selector.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
  ),
),false)) {
function content_66ac8273d690c4_85073016 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('selected'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--check-items">
    <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler"
           type="checkbox"
           checked
           data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]"
           data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
    />
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
        <span data-ca-longtap-selected-counter="true">0</span> <span class="mobile-hide"><?php echo $_smarty_tpl->__("selected");?>
</span> <span class="caret mobile-hide"></span>
    </span>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true,'check_statuses'=>$_smarty_tpl->tpl_vars['statuses']->value,'is_check_all_shown'=>(($tmp = $_smarty_tpl->tpl_vars['params']->value['is_check_all_shown'] ?? null)===null||$tmp==='' ? false ?? null : $tmp),'elms_container'=>$_smarty_tpl->tpl_vars['elms_container']->value), 0, false);
?>
</li><?php }
}
