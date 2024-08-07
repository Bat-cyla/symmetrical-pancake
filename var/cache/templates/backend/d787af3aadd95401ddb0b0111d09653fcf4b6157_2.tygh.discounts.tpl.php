<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:14:50
  from '/app/www/design/backend/templates/views/order_management/components/discounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac795a38f5f3_06648285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd787af3aadd95401ddb0b0111d09653fcf4b6157' => 
    array (
      0 => '/app/www/design/backend/templates/views/order_management/components/discounts.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac795a38f5f3_06648285 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('discounts','discount_coupon_code'));
?>
<div class="orders-discounts">
	<h4><?php echo $_smarty_tpl->__("discounts");?>
</h4>
	<div class="orders-discount">
	    <input type="text" name="coupon_code" placeholder="<?php echo $_smarty_tpl->__("discount_coupon_code");?>
" id="coupon_code" class="input-text-large" size="30" value="" />
	</div>
</div><?php }
}
