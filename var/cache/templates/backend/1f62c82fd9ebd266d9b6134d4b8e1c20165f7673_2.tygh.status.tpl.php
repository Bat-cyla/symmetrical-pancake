<?php
/* Smarty version 4.1.1, created on 2024-08-15 08:59:09
  from '/app/www/design/backend/templates/views/orders/components/context_menu/status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bd992da48091_69240649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f62c82fd9ebd266d9b6134d4b8e1c20165f7673' => 
    array (
      0 => '/app/www/design/backend/templates/views/orders/components/context_menu/status.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/notify_checkboxes.tpl' => 1,
  ),
),false)) {
function content_66bd992da48091_69240649 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('status','change_to_status'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--status dropleft-mod">
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("status");?>
 <span class="caret mobile-hide"></span></span>

    <ul class="dropdown-menu">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_status_descr']->value, 'status_name', false, 'status');
$_smarty_tpl->tpl_vars['status_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->do_else = false;
?>
            <li>
                <a class="cm-ajax cm-post cm-ajax-send-form"
                    href="<?php echo htmlspecialchars((string) fn_url("orders.m_update?status=".((string)$_smarty_tpl->tpl_vars['status']->value)), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-id="pagination_contents"
                    data-ca-target-form="#orders_list_form"
                >
                    <?php echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->tpl_vars['status_name']->value));?>

                </a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"multiple",'id'=>"select",'notify_customer_status'=>true,'notify_department_status'=>true,'notify_vendor_status'=>true,'name_prefix'=>"notify"), 0, false);
?>
    </ul>
</li>
<?php }
}
