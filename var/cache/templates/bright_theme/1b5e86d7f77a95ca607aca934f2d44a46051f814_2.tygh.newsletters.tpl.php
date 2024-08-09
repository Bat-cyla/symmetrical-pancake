<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:16
  from '/app/www/design/themes/responsive/templates/addons/newsletters/blocks/lite_checkout/newsletters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eec1e8f64_07634043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b5e86d7f77a95ca607aca934f2d44a46051f814' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/newsletters/blocks/lite_checkout/newsletters.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b49eec1e8f64_07634043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_signup_for_subscriptions','text_signup_for_subscriptions'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mailing_lists", null, null);?>
    <?php $_smarty_tpl->_assignInScope('show_newsletters_content', false);?>
    <div class="subscription-container" id="subsciption_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_mailing_lists']->value, 'list');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['list']->value['show_on_checkout']) {?>
                <?php $_smarty_tpl->_assignInScope('show_newsletters_content', true);?>
            <?php }?>
            <input type="hidden" name="all_mailing_lists[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="ty-newsletters__item<?php if (!$_smarty_tpl->tpl_vars['list']->value['show_on_checkout']) {?> hidden<?php }?>">
                <label for="fake_subscribe_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <input type="checkbox"
                           id="subscribe_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"
                           name="mailing_lists[]"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?>
                           class="checkbox cm-news-subscribe hidden"
                    />
                    <input type="checkbox"
                           id="fake_subscribe_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-target-id="subscribe_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?>
                           class="checkbox"
                           data-ca-lite-checkout-element="newsletter-toggler"
                    />
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['object'], ENT_QUOTES, 'UTF-8');?>

                </label>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <!--subsciption_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['show_newsletters_content']->value) {?>
    <div class="litecheckout__group litecheckout__newsletters">
        <div class="litecheckout__item litecheckout__item--full">
            <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("text_signup_for_subscriptions") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
        </div>
        <div class="litecheckout__item litecheckout__item--full">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mailing_lists');?>

        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/blocks/lite_checkout/newsletters.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/newsletters/blocks/lite_checkout/newsletters.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mailing_lists", null, null);?>
    <?php $_smarty_tpl->_assignInScope('show_newsletters_content', false);?>
    <div class="subscription-container" id="subsciption_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_mailing_lists']->value, 'list');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['list']->value['show_on_checkout']) {?>
                <?php $_smarty_tpl->_assignInScope('show_newsletters_content', true);?>
            <?php }?>
            <input type="hidden" name="all_mailing_lists[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="ty-newsletters__item<?php if (!$_smarty_tpl->tpl_vars['list']->value['show_on_checkout']) {?> hidden<?php }?>">
                <label for="fake_subscribe_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <input type="checkbox"
                           id="subscribe_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"
                           name="mailing_lists[]"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?>
                           class="checkbox cm-news-subscribe hidden"
                    />
                    <input type="checkbox"
                           id="fake_subscribe_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-target-id="subscribe_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?>
                           class="checkbox"
                           data-ca-lite-checkout-element="newsletter-toggler"
                    />
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['object'], ENT_QUOTES, 'UTF-8');?>

                </label>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <!--subsciption_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['show_newsletters_content']->value) {?>
    <div class="litecheckout__group litecheckout__newsletters">
        <div class="litecheckout__item litecheckout__item--full">
            <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("text_signup_for_subscriptions") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
        </div>
        <div class="litecheckout__item litecheckout__item--full">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mailing_lists');?>

        </div>
    </div>
<?php }
}
}
}
