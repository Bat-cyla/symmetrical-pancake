<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:31
  from '/app/www/design/themes/responsive/templates/buttons/add_to_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e1037d4e08_03634125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc32ce9c71cfdda1c50f1cd2a2082c3ae71ba0e0' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/buttons/add_to_cart.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 4,
  ),
),false)) {
function content_66b5e1037d4e08_03634125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','sign_in_to_buy','text_login_to_add_to_cart','add_to_cart','sign_in_to_buy','text_login_to_add_to_cart'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"buttons:add_to_cart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "allow_shopping" || $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp),'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_meta'=>"ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer"), 0, false);
?>
    <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "login_form") {?>
            <?php $_smarty_tpl->_assignInScope('login_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('login_url', "auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value));?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->__("sign_in_to_buy"),'but_href'=>$_smarty_tpl->tpl_vars['login_url']->value,'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_name'=>''), 0, true);
?>
        <p><?php echo $_smarty_tpl->__("text_login_to_add_to_cart");?>
</p>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('show_buy_now', $_smarty_tpl->tpl_vars['show_buy_now']->value ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/add_to_cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/add_to_cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"buttons:add_to_cart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "allow_shopping" || $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp),'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_meta'=>"ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer"), 0, true);
?>
    <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "login_form") {?>
            <?php $_smarty_tpl->_assignInScope('login_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('login_url', "auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value));?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->__("sign_in_to_buy"),'but_href'=>$_smarty_tpl->tpl_vars['login_url']->value,'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_name'=>''), 0, true);
?>
        <p><?php echo $_smarty_tpl->__("text_login_to_add_to_cart");?>
</p>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('show_buy_now', $_smarty_tpl->tpl_vars['show_buy_now']->value ,false ,2);
}
}
}
