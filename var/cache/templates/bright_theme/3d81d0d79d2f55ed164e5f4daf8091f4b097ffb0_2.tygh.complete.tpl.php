<?php
/* Smarty version 4.1.1, created on 2024-08-15 13:50:50
  from '/app/www/design/themes/responsive/templates/views/checkout/complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bddd8a288850_36394923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d81d0d79d2f55ed164e5f4daf8091f4b097ffb0' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/complete.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 8,
    'tygh:buttons/continue_shopping.tpl' => 2,
  ),
),false)) {
function content_66bddd8a288850_36394923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_order_placed_successfully','order_details','order_details','create_account','email','password','confirm_password','create','payment_instructions','payment_instructions','order_details','order_details','view_orders','order','text_order_placed_successfully','order_details','order_details','create_account','email','password','confirm_password','create','payment_instructions','payment_instructions','order_details','order_details','view_orders','order'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-checkout-complete__order-success">
    <p><?php echo $_smarty_tpl->__("text_order_placed_successfully");?>

        <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['child_ids']) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url("orders.search?period=A&order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['child_ids'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order_details");?>
</a>
            <?php } else { ?>
                <a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order_details");?>
</a>
            <?php }?>
        <?php }?>
    </p>
</div>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_create_account_after_order'] == "Y" && !$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<div class="ty-checkout-complete__create-account">
    <h3 class="ty-subheader"><?php echo $_smarty_tpl->__("create_account");?>
</h3>
    <div class="ty-login">
        <form name="order_register_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />

            <div class="ty-control-group">
                <label for="email" class="ty-control-group__label ty-login__filed-label cm-required"><?php echo $_smarty_tpl->__("email");?>
</label>
                <input type="text" id="email" name="user_data[email]" size="32" maxlength="128" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="cm-autocomplete-off ty-login__input cm-focus" />
            </div>

            <div class="ty-control-group">
                <label for="password1" class="ty-control-group__label ty-login__filed-label cm-required cm-password"><?php echo $_smarty_tpl->__("password");?>
</label>
                <input type="password" id="password1" name="user_data[password1]" size="32" maxlength="32" value="" class="cm-autocomplete-off ty-login__input" />
            </div>

            <div class="ty-control-group">
                <label for="password2" class="ty-control-group__label ty-login__filed-label cm-required cm-password"><?php echo $_smarty_tpl->__("confirm_password");?>
</label>
                <input type="password" id="password2" name="user_data[password2]" size="32" maxlength="32" value="" class="cm-autocomplete-off ty-login__input" />
            </div>

            <div class="buttons-container clearfix">
                <p><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[checkout.create_profile]",'but_text'=>$_smarty_tpl->__("create")), 0, false);
?></p>
            </div>
        </form>
        </div>
    </div>
    <div class="ty-checkout-complete__login-info">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_instruction"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions']) {?>
                <div class="ty-login-info">
                    <h4 class="ty-subheader"><?php echo $_smarty_tpl->__("payment_instructions");?>
</h4>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions'];?>

                    </div>
                </div>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php } else { ?>
    <div class="ty-checkout-complete__login-info ty-checkout-complete_width_full">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_instruction"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions']) {?>
                <h4 class="ty-subheader"><?php echo $_smarty_tpl->__("payment_instructions");?>
</h4>
                <div class="ty-wysiwyg-content">
                    <br>
                    <?php echo $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions'];?>

                </div>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:order_confirmation"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:order_confirmation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:order_confirmation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <div class="ty-checkout-complete__buttons buttons-container <?php if (!$_smarty_tpl->tpl_vars['order_info']->value || !$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_create_account_after_order'] == "Y" || $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?> ty-mt-s<?php }?>">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:complete_button"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:complete_button"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ty-checkout-complete__buttons-left">
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['child_ids']) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->__("order_details"),'but_href'=>"orders.search?period=A&order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['child_ids'])), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("order_details"),'but_meta'=>"ty-btn__secondary",'but_href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), 0, true);
?>
                    <?php }?>
                <?php }?>
                &nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->__("view_orders"),'but_href'=>"orders.search"), 0, true);
?>
            </div>
            <div class="ty-checkout-complete__buttons-right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"text",'but_meta'=>"ty-checkout-complete__button-vmid",'but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0, false);
?>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:complete_button"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("order");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/complete.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/complete.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-checkout-complete__order-success">
    <p><?php echo $_smarty_tpl->__("text_order_placed_successfully");?>

        <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['child_ids']) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url("orders.search?period=A&order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['child_ids'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order_details");?>
</a>
            <?php } else { ?>
                <a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order_details");?>
</a>
            <?php }?>
        <?php }?>
    </p>
</div>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_create_account_after_order'] == "Y" && !$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<div class="ty-checkout-complete__create-account">
    <h3 class="ty-subheader"><?php echo $_smarty_tpl->__("create_account");?>
</h3>
    <div class="ty-login">
        <form name="order_register_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />

            <div class="ty-control-group">
                <label for="email" class="ty-control-group__label ty-login__filed-label cm-required"><?php echo $_smarty_tpl->__("email");?>
</label>
                <input type="text" id="email" name="user_data[email]" size="32" maxlength="128" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="cm-autocomplete-off ty-login__input cm-focus" />
            </div>

            <div class="ty-control-group">
                <label for="password1" class="ty-control-group__label ty-login__filed-label cm-required cm-password"><?php echo $_smarty_tpl->__("password");?>
</label>
                <input type="password" id="password1" name="user_data[password1]" size="32" maxlength="32" value="" class="cm-autocomplete-off ty-login__input" />
            </div>

            <div class="ty-control-group">
                <label for="password2" class="ty-control-group__label ty-login__filed-label cm-required cm-password"><?php echo $_smarty_tpl->__("confirm_password");?>
</label>
                <input type="password" id="password2" name="user_data[password2]" size="32" maxlength="32" value="" class="cm-autocomplete-off ty-login__input" />
            </div>

            <div class="buttons-container clearfix">
                <p><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[checkout.create_profile]",'but_text'=>$_smarty_tpl->__("create")), 0, true);
?></p>
            </div>
        </form>
        </div>
    </div>
    <div class="ty-checkout-complete__login-info">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_instruction"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions']) {?>
                <div class="ty-login-info">
                    <h4 class="ty-subheader"><?php echo $_smarty_tpl->__("payment_instructions");?>
</h4>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions'];?>

                    </div>
                </div>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php } else { ?>
    <div class="ty-checkout-complete__login-info ty-checkout-complete_width_full">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_instruction"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions']) {?>
                <h4 class="ty-subheader"><?php echo $_smarty_tpl->__("payment_instructions");?>
</h4>
                <div class="ty-wysiwyg-content">
                    <br>
                    <?php echo $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions'];?>

                </div>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:order_confirmation"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:order_confirmation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:order_confirmation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <div class="ty-checkout-complete__buttons buttons-container <?php if (!$_smarty_tpl->tpl_vars['order_info']->value || !$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_create_account_after_order'] == "Y" || $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?> ty-mt-s<?php }?>">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:complete_button"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:complete_button"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ty-checkout-complete__buttons-left">
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['child_ids']) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->__("order_details"),'but_href'=>"orders.search?period=A&order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['child_ids'])), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("order_details"),'but_meta'=>"ty-btn__secondary",'but_href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), 0, true);
?>
                    <?php }?>
                <?php }?>
                &nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->__("view_orders"),'but_href'=>"orders.search"), 0, true);
?>
            </div>
            <div class="ty-checkout-complete__buttons-right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"text",'but_meta'=>"ty-checkout-complete__button-vmid",'but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0, true);
?>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:complete_button"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("order");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
