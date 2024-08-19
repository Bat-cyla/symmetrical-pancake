<?php
/* Smarty version 4.1.1, created on 2024-08-15 14:16:48
  from '/app/www/design/backend/templates/views/orders/components/promotions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bde3a09047e7_15154025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c911aa68e09bc6990c66d73e07ae401cc7ec7941' => 
    array (
      0 => '/app/www/design/backend/templates/views/orders/components/promotions.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_66bde3a09047e7_15154025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('coupon_code','details','promotion_bonus_','deleted'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotions']->value, 'promotion', false, 'promotion_id', 'pfe', array (
));
$_smarty_tpl->tpl_vars['promotion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promotion_id']->value => $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->do_else = false;
?>

<?php if ($_smarty_tpl->tpl_vars['promotion']->value['name']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['promotion']->value['name']), 0, true);
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['promotions'][$_smarty_tpl->tpl_vars['promotion_id']->value]['bonuses'], 'bonus', false, 'bonus_name');
$_smarty_tpl->tpl_vars['bonus']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bonus_name']->value => $_smarty_tpl->tpl_vars['bonus']->value) {
$_smarty_tpl->tpl_vars['bonus']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['bonus_name']->value == "give_coupon") {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("coupon_code");?>
</label>
        <div class="controls">
            <a href="<?php echo htmlspecialchars((string) fn_url("promotions.update?promotion_id=".((string)$_smarty_tpl->tpl_vars['bonus']->value['value'])."&selected_section=conditions"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bonus']->value['coupon_code'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
    </div>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"promotions:details_link"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"promotions:details_link"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <p><a href="<?php echo htmlspecialchars((string) fn_url("promotions.update?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("details");?>
</a></p>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"promotions:details_link"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
    <p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value['bonuses'], 'deleted_bonus');
$_smarty_tpl->tpl_vars['deleted_bonus']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deleted_bonus']->value) {
$_smarty_tpl->tpl_vars['deleted_bonus']->do_else = false;
?>
        <span><?php echo $_smarty_tpl->__("promotion_bonus_".((string)$_smarty_tpl->tpl_vars['deleted_bonus']->value['bonus']));?>
</span>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> (<?php echo $_smarty_tpl->__("deleted");?>
)</p>
<?php }?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
