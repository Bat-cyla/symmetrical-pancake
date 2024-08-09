<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:00
  from '/app/www/design/themes/responsive/templates/views/checkout/components/cart_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbecd8c758_82143159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ab5dd6c976faae7f317223811e27fd63b0b496f' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/cart_content.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/continue_shopping.tpl' => 4,
    'tygh:buttons/update_cart.tpl' => 2,
    'tygh:buttons/proceed_to_checkout.tpl' => 4,
    'tygh:views/checkout/components/cart_items.tpl' => 2,
    'tygh:views/checkout/components/checkout_totals.tpl' => 2,
    'tygh:buttons/clear_cart.tpl' => 2,
  ),
),false)) {
function content_66b4bbecd8c758_82143159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cart_contents','or_use','cart_contents','or_use'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('result_ids', "cart*,checkout*");?>

<div id="checkout_form_wrapper">
<form name="checkout_form" class="cm-check-changes cm-ajax cm-ajax-full-render" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" id="checkout_form">
<input type="hidden" name="redirect_mode" value="cart" />
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />

<h1 class="ty-mainbox-title"><?php echo $_smarty_tpl->__("cart_contents");?>
</h1>

<div class="buttons-container ty-cart-content__top-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_top_left_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_left_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_left_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <div class="ty-float-right ty-cart-content__right-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_top_right_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_right_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart",'but_meta'=>"ty-btn--recalculate-cart hidden hidden-phone hidden-tablet",'but_name'=>"dispatch[checkout.update]"), 0, false);
?>
            <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_right_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/cart_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('disable_ids'=>"button_cart"), 0, false);
?>

</form>
<!--checkout_form_wrapper--></div>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/checkout_totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"cart"), 0, false);
?>

<div class="buttons-container ty-cart-content__bottom-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_bottom_left_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_left_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/clear_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.clear",'but_role'=>"text",'but_meta'=>"cm-confirm ty-cart-content__clear-button"), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_left_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <div class="ty-float-right ty-cart-content__right-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_bottom_right_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_right_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                <?php $_smarty_tpl->_assignInScope('link_href', "checkout.checkout");?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_right_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['checkout_add_buttons']->value) {?>
    <div class="ty-cart-content__payment-methods payment-methods" id="payment-methods">
        <span class="ty-cart-content__payment-methods-title payment-metgods-or"><?php echo $_smarty_tpl->__("or_use");?>
</span>
        <table class="ty-cart-content__payment-methods-block">
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['checkout_add_buttons']->value, 'checkout_add_button');
$_smarty_tpl->tpl_vars['checkout_add_button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['checkout_add_button']->value) {
$_smarty_tpl->tpl_vars['checkout_add_button']->do_else = false;
?>
                    <td class="ty-cart-content__payment-methods-item"><?php echo $_smarty_tpl->tpl_vars['checkout_add_button']->value;?>
</td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
    </table>
    <!--payment-methods--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/cart_content.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/cart_content.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('result_ids', "cart*,checkout*");?>

<div id="checkout_form_wrapper">
<form name="checkout_form" class="cm-check-changes cm-ajax cm-ajax-full-render" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" id="checkout_form">
<input type="hidden" name="redirect_mode" value="cart" />
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />

<h1 class="ty-mainbox-title"><?php echo $_smarty_tpl->__("cart_contents");?>
</h1>

<div class="buttons-container ty-cart-content__top-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_top_left_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_left_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0, true);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_left_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <div class="ty-float-right ty-cart-content__right-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_top_right_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_right_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart",'but_meta'=>"ty-btn--recalculate-cart hidden hidden-phone hidden-tablet",'but_name'=>"dispatch[checkout.update]"), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_right_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/cart_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('disable_ids'=>"button_cart"), 0, true);
?>

</form>
<!--checkout_form_wrapper--></div>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/checkout_totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"cart"), 0, true);
?>

<div class="buttons-container ty-cart-content__bottom-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_bottom_left_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_left_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/clear_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.clear",'but_role'=>"text",'but_meta'=>"cm-confirm ty-cart-content__clear-button"), 0, true);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_left_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <div class="ty-float-right ty-cart-content__right-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_bottom_right_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_right_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                <?php $_smarty_tpl->_assignInScope('link_href', "checkout.checkout");?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_right_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['checkout_add_buttons']->value) {?>
    <div class="ty-cart-content__payment-methods payment-methods" id="payment-methods">
        <span class="ty-cart-content__payment-methods-title payment-metgods-or"><?php echo $_smarty_tpl->__("or_use");?>
</span>
        <table class="ty-cart-content__payment-methods-block">
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['checkout_add_buttons']->value, 'checkout_add_button');
$_smarty_tpl->tpl_vars['checkout_add_button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['checkout_add_button']->value) {
$_smarty_tpl->tpl_vars['checkout_add_button']->do_else = false;
?>
                    <td class="ty-cart-content__payment-methods-item"><?php echo $_smarty_tpl->tpl_vars['checkout_add_button']->value;?>
</td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
    </table>
    <!--payment-methods--></div>
<?php }
}
}
}
