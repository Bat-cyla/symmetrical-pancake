<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:00
  from '/app/www/design/themes/responsive/templates/addons/call_requests/hooks/products/add_to_cart.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49edcf41869_85297131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8ad9f3fdf0003c96435a04582e27bccf9269df9' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/call_requests/hooks/products/add_to_cart.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66b49edcf41869_85297131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->tpl_vars['hide_form']->value && $_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click'] == smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "allow_shopping") && (($tmp = $_smarty_tpl->tpl_vars['show_buy_now']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
    <?php $_smarty_tpl->_assignInScope('is_not_required_option', true);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['product_options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['option']->value['required'] === smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->_assignInScope('is_not_required_option', false);?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if (($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] == smarty_modifier_enum("YesNo::NO") || $_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount'] == smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty']) || $_smarty_tpl->tpl_vars['product']->value['tracking'] == smarty_modifier_enum("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->tpl_vars['product']->value['is_edp'] == smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"call_requests:call_request_button"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"call_requests:call_request_button"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value || ($_smarty_tpl->tpl_vars['is_not_required_option']->value || $_smarty_tpl->tpl_vars['details_page']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'link_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__text ty-cr-product-button cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->tpl_vars['product']->value['product_id'],"data-ca-dialog-purpose"=>"call_request")), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>"text",'but_id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"btn ty-btn ty-btn__text ty-cr-product-button"), 0, false);
?>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"call_requests:call_request_button"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/products/add_to_cart.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/hooks/products/add_to_cart.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->tpl_vars['hide_form']->value && $_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click'] == smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "allow_shopping") && (($tmp = $_smarty_tpl->tpl_vars['show_buy_now']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
    <?php $_smarty_tpl->_assignInScope('is_not_required_option', true);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['product_options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['option']->value['required'] === smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->_assignInScope('is_not_required_option', false);?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if (($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] == smarty_modifier_enum("YesNo::NO") || $_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount'] == smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty']) || $_smarty_tpl->tpl_vars['product']->value['tracking'] == smarty_modifier_enum("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->tpl_vars['product']->value['is_edp'] == smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"call_requests:call_request_button"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"call_requests:call_request_button"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value || ($_smarty_tpl->tpl_vars['is_not_required_option']->value || $_smarty_tpl->tpl_vars['details_page']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'link_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__text ty-cr-product-button cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->tpl_vars['product']->value['product_id'],"data-ca-dialog-purpose"=>"call_request")), 0, true);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>"text",'but_id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"btn ty-btn ty-btn__text ty-cr-product-button"), 0, true);
?>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"call_requests:call_request_button"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
}
}
