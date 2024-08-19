<?php
/* Smarty version 4.1.1, created on 2024-08-09 15:10:29
  from '/app/www/design/themes/responsive/templates/views/checkout/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b607359d5508_98650163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d332e772ff944dfbc7a02947ce39768729d105' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/cart.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/cart_content.tpl' => 2,
    'tygh:buttons/continue_shopping.tpl' => 2,
  ),
),false)) {
function content_66b607359d5508_98650163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_cart_empty','text_cart_empty'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/cart_content.js"),$_smarty_tpl);?>


<div id="cart_main">
    <?php if (!fn_cart_is_empty($_smarty_tpl->tpl_vars['cart']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_cart_empty");?>
</p>

        <div class="buttons-container wrap">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"submit"), 0, false);
?>
        </div>
    <?php }?>
<!--cart_main--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/cart_content.js"),$_smarty_tpl);?>


<div id="cart_main">
    <?php if (!fn_cart_is_empty($_smarty_tpl->tpl_vars['cart']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_cart_empty");?>
</p>

        <div class="buttons-container wrap">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"submit"), 0, true);
?>
        </div>
    <?php }?>
<!--cart_main--></div>
<?php }
}
}
