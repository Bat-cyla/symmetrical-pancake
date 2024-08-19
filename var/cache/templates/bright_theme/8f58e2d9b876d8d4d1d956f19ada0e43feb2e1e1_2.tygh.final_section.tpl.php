<?php
/* Smarty version 4.1.1, created on 2024-08-14 14:15:23
  from '/app/www/design/themes/responsive/templates/views/checkout/components/final_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bc91cb5ea352_80124136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f58e2d9b876d8d4d1d956f19ada0e43feb2e1e1' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/final_section.tpl',
      1 => 1723633768,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/place_order.tpl' => 2,
    'tygh:buttons/continue_shopping.tpl' => 2,
  ),
),false)) {
function content_66bc91cb5ea352_80124136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_place_order', false);?>

<?php if (fn_allow_place_order($_smarty_tpl->tpl_vars['cart']->value,$_smarty_tpl->tpl_vars['auth']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('show_place_order', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['recalculate']->value && !$_smarty_tpl->tpl_vars['cart']->value['amount_failed']) {?>
    <?php $_smarty_tpl->_assignInScope('show_place_order', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['show_place_order']->value) {?>

    <div class="clearfix <?php if (!$_smarty_tpl->tpl_vars['is_payment_step']->value) {?> checkout__block ty-checkout-block-terms<?php }?>">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:final_section_customer_notes"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:final_section_customer_notes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:final_section_customer_notes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <input type="hidden" name="update_steps" value="1" />
    
    <?php if (!$_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <div class="litecheckout__item litecheckout__item--full litecheckout__submit-order">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/place_order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[checkout.place_order]",'but_role'=>"big",'but_id'=>"litecheckout_place_order"), 0, false);
?>
        </div>
    <?php }?>

<?php } else { ?>

    <div class="litecheckout__item litecheckout__submit-order">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"action"), 0, false);
?>
    </div>
    
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/final_section.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/final_section.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_place_order', false);?>

<?php if (fn_allow_place_order($_smarty_tpl->tpl_vars['cart']->value,$_smarty_tpl->tpl_vars['auth']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('show_place_order', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['recalculate']->value && !$_smarty_tpl->tpl_vars['cart']->value['amount_failed']) {?>
    <?php $_smarty_tpl->_assignInScope('show_place_order', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['show_place_order']->value) {?>

    <div class="clearfix <?php if (!$_smarty_tpl->tpl_vars['is_payment_step']->value) {?> checkout__block ty-checkout-block-terms<?php }?>">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:final_section_customer_notes"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:final_section_customer_notes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:final_section_customer_notes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <input type="hidden" name="update_steps" value="1" />
    
    <?php if (!$_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <div class="litecheckout__item litecheckout__item--full litecheckout__submit-order">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/place_order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[checkout.place_order]",'but_role'=>"big",'but_id'=>"litecheckout_place_order"), 0, true);
?>
        </div>
    <?php }?>

<?php } else { ?>

    <div class="litecheckout__item litecheckout__submit-order">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"action"), 0, true);
?>
    </div>
    
<?php }
}
}
}
