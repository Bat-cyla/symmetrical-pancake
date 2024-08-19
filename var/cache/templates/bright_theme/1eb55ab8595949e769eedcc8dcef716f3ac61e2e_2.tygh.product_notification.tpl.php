<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:36
  from '/app/www/design/themes/responsive/templates/views/checkout/components/product_notification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e108c0ebe7_71767751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eb55ab8595949e769eedcc8dcef716f3ac61e2e' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/product_notification.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 4,
    'tygh:buttons/proceed_to_checkout.tpl' => 2,
    'tygh:common/price.tpl' => 2,
    'tygh:views/products/components/notification.tpl' => 2,
  ),
),false)) {
function content_66b5e108c0ebe7_71767751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('continue_shopping','view_cart','checkout','items_in_cart','cart_subtotal','continue_shopping','view_cart','checkout','items_in_cart','cart_subtotal'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_notification:scripts"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_notification:scripts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('amount', (($tmp = $_smarty_tpl->tpl_vars['amount']->value ?? null)===null||$tmp==='' ? $_SESSION['cart']['amount'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('display_subtotal', (($tmp = $_smarty_tpl->tpl_vars['display_subtotal']->value ?? null)===null||$tmp==='' ? $_SESSION['cart']['display_subtotal'] ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <div class="ty-float-left">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("continue_shopping"),'but_meta'=>"ty-btn__secondary cm-notification-close"), 0, false);
?>
    </div>

    <div class="ty-float-right">
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['checkout_redirect'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__primary",'but_text'=>$_smarty_tpl->__("view_cart"),'but_href'=>"checkout.cart"), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->tpl_vars['proceed_to_checkout_href']->value,'but_text'=>$_smarty_tpl->__("checkout"),'but_meta'=>"ty-btn__primary cm-notification-close"), 0, false);
?>
    <?php }?>
    </div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "info", null, null);?>
    <div class="clearfix"></div>
    <hr class="ty-product-notification__divider" />

    <div class="ty-product-notification__total-info clearfix">
        <div class="ty-product-notification__amount ty-float-left"> <?php echo $_smarty_tpl->__("items_in_cart",array($_smarty_tpl->tpl_vars['amount']->value));?>
</div>
        <div class="ty-product-notification__subtotal ty-float-right">
            <?php echo $_smarty_tpl->__("cart_subtotal");?>
 <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['display_subtotal']->value), 0, false);
?>
        </div>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'product_info'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'info')), 0, false);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_notification:scripts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/product_notification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/product_notification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_notification:scripts"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_notification:scripts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('amount', (($tmp = $_smarty_tpl->tpl_vars['amount']->value ?? null)===null||$tmp==='' ? $_SESSION['cart']['amount'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('display_subtotal', (($tmp = $_smarty_tpl->tpl_vars['display_subtotal']->value ?? null)===null||$tmp==='' ? $_SESSION['cart']['display_subtotal'] ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <div class="ty-float-left">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("continue_shopping"),'but_meta'=>"ty-btn__secondary cm-notification-close"), 0, true);
?>
    </div>

    <div class="ty-float-right">
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['checkout_redirect'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__primary",'but_text'=>$_smarty_tpl->__("view_cart"),'but_href'=>"checkout.cart"), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->tpl_vars['proceed_to_checkout_href']->value,'but_text'=>$_smarty_tpl->__("checkout"),'but_meta'=>"ty-btn__primary cm-notification-close"), 0, true);
?>
    <?php }?>
    </div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "info", null, null);?>
    <div class="clearfix"></div>
    <hr class="ty-product-notification__divider" />

    <div class="ty-product-notification__total-info clearfix">
        <div class="ty-product-notification__amount ty-float-left"> <?php echo $_smarty_tpl->__("items_in_cart",array($_smarty_tpl->tpl_vars['amount']->value));?>
</div>
        <div class="ty-product-notification__subtotal ty-float-right">
            <?php echo $_smarty_tpl->__("cart_subtotal");?>
 <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['display_subtotal']->value), 0, true);
?>
        </div>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'product_info'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'info')), 0, true);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_notification:scripts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
