<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:15
  from '/app/www/design/themes/responsive/templates/addons/store_locator/hooks/checkout/shipping_method.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eeb952d63_31879939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7eb5170b3a894795a1ee7847778373978824bc7' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/store_locator/hooks/checkout/shipping_method.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/store_locator/views/checkout/components/shippings/list_pickup.tpl' => 2,
  ),
),false)) {
function content_66b49eeb952d63_31879939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.select_pickup_item','lite_checkout.select_pickup_item'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'] && $_smarty_tpl->tpl_vars['shipping']->value['module'] == "store_locator") {?>

    <?php echo smarty_function_script(array('src'=>"js/addons/store_locator/pickup.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_assignInScope('store_count', smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']));?>
    <?php $_smarty_tpl->_assignInScope('shipping_id', $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']);?>
    <?php $_smarty_tpl->_assignInScope('old_store_id', $_smarty_tpl->tpl_vars['select_store']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]);?>

    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']) {?>
        <?php $_smarty_tpl->_assignInScope('display_type', $_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('display_type', "ML");?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('store_locations', $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']);?>

    <?php if ($_smarty_tpl->tpl_vars['display_type']->value != "L") {?>
        <?php $_smarty_tpl->_assignInScope('display_pickup_map', true);?>
    <?php }?>

    <div class="litecheckout__item">
        <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->__("lite_checkout.select_pickup_item");?>
</h2>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:store_locator_pickup_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:store_locator_pickup_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/views/checkout/components/shippings/list_pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:store_locator_pickup_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/checkout/shipping_method.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/hooks/checkout/shipping_method.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'] && $_smarty_tpl->tpl_vars['shipping']->value['module'] == "store_locator") {?>

    <?php echo smarty_function_script(array('src'=>"js/addons/store_locator/pickup.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_assignInScope('store_count', smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']));?>
    <?php $_smarty_tpl->_assignInScope('shipping_id', $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']);?>
    <?php $_smarty_tpl->_assignInScope('old_store_id', $_smarty_tpl->tpl_vars['select_store']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]);?>

    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']) {?>
        <?php $_smarty_tpl->_assignInScope('display_type', $_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('display_type', "ML");?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('store_locations', $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']);?>

    <?php if ($_smarty_tpl->tpl_vars['display_type']->value != "L") {?>
        <?php $_smarty_tpl->_assignInScope('display_pickup_map', true);?>
    <?php }?>

    <div class="litecheckout__item">
        <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->__("lite_checkout.select_pickup_item");?>
</h2>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:store_locator_pickup_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:store_locator_pickup_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/views/checkout/components/shippings/list_pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:store_locator_pickup_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
