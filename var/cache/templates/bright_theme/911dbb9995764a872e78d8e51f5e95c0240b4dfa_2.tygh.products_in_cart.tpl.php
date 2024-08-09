<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:16
  from '/app/www/design/themes/responsive/templates/blocks/checkout/products_in_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eec267311_02120477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '911dbb9995764a872e78d8e51f5e95c0240b4dfa' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/checkout/products_in_cart.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/price.tpl' => 2,
    'tygh:common/options_info.tpl' => 2,
  ),
),false)) {
function content_66b49eec267311_02120477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="checkout_info_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
    <ul class="ty-order-products__list order-product-list">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_checkout:cart_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_checkout:cart_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_products']->value, 'product', false, 'key', 'cart_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_checkout:cart_products"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_checkout:cart_products"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']) {?>
                    <li class="ty-order-products__item">
                        <bdi><a class="litecheckout__order-products-p" href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a></bdi>
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']),'but_meta'=>"ty-order-products__item-delete delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0, true);
?>
                        <?php }?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <div class="ty-order-products__price">
                            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price']), 0, true);
?>
                        </div>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'no_block'=>true), 0, true);
?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_checkout:product_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_checkout:product_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_checkout:product_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </li>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_checkout:cart_products"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_checkout:cart_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </ul>
<!--checkout_info_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/checkout/products_in_cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/checkout/products_in_cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="checkout_info_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
    <ul class="ty-order-products__list order-product-list">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_checkout:cart_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_checkout:cart_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_products']->value, 'product', false, 'key', 'cart_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_checkout:cart_products"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_checkout:cart_products"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']) {?>
                    <li class="ty-order-products__item">
                        <bdi><a class="litecheckout__order-products-p" href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a></bdi>
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']),'but_meta'=>"ty-order-products__item-delete delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0, true);
?>
                        <?php }?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <div class="ty-order-products__price">
                            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price']), 0, true);
?>
                        </div>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'no_block'=>true), 0, true);
?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_checkout:product_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_checkout:product_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_checkout:product_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </li>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_checkout:cart_products"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_checkout:cart_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </ul>
<!--checkout_info_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
