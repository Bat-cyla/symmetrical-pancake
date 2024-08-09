<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:15
  from '/app/www/design/themes/responsive/templates/views/checkout/components/steps/payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eebbc75c3_55976002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d8028b9659b07c6a3866efe2592baf3c78b9108' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/steps/payment.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/payments/payment_methods.tpl' => 2,
  ),
),false)) {
function content_66b49eebbc75c3_55976002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__step litecheckout__container cm-save-fields" id="litecheckout_step_payment">
    <div class="litecheckout__section">
        <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->__('block_payment_methods');?>
</h2>
                </div>
            </div>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('payment_id'=>$_smarty_tpl->tpl_vars['cart']->value['payment_id'],'payment_methods'=>$_smarty_tpl->tpl_vars['payment_methods']->value,'order_id'=>$_smarty_tpl->tpl_vars['order_id']->value,'auth'=>$_smarty_tpl->tpl_vars['auth']->value,'iframe_mode'=>(($tmp = $_smarty_tpl->tpl_vars['iframe_mode']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)), 0, false);
?>
    </div>
<!--litecheckout_step_payment--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/steps/payment.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/steps/payment.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__step litecheckout__container cm-save-fields" id="litecheckout_step_payment">
    <div class="litecheckout__section">
        <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->__('block_payment_methods');?>
</h2>
                </div>
            </div>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('payment_id'=>$_smarty_tpl->tpl_vars['cart']->value['payment_id'],'payment_methods'=>$_smarty_tpl->tpl_vars['payment_methods']->value,'order_id'=>$_smarty_tpl->tpl_vars['order_id']->value,'auth'=>$_smarty_tpl->tpl_vars['auth']->value,'iframe_mode'=>(($tmp = $_smarty_tpl->tpl_vars['iframe_mode']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)), 0, true);
?>
    </div>
<!--litecheckout_step_payment--></div>
<?php }
}
}
