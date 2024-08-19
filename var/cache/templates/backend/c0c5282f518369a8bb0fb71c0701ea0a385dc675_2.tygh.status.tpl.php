<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:03
  from '/app/www/design/backend/templates/views/order_management/components/status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e0e7b050a5_32953488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0c5282f518369a8bb0fb71c0701ea0a385dc675' => 
    array (
      0 => '/app/www/design/backend/templates/views/order_management/components/status.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 1,
  ),
),false)) {
function content_66b5e0e7b050a5_32953488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('status'));
if (fn_check_view_permissions("orders.update_status","POST")) {?>
<div class="control-group">
	<div class="control-label"><h4 class="subheader"><?php echo $_smarty_tpl->__("status");?>
</h4></div>
	<div class="controls">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"order_management:order_status"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"order_management:order_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		  <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_wrap'=>true,'style'=>"field",'items'=>$_smarty_tpl->tpl_vars['order_statuses']->value,'select_container_name'=>"order_status",'selected_key'=>(($tmp = $_smarty_tpl->tpl_vars['cart']->value['order_status'] ?? null)===null||$tmp==='' ? "O" ?? null : $tmp)), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"order_management:order_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	</div>
</div>
<?php }
}
}
