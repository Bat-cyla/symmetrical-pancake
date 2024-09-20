<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:16
  from '/app/www/design/themes/responsive/templates/addons/newsletters/hooks/profiles/account_update.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065cd8d275_72672407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fd67de32aa27a2e4bcd2a9aea1b42b02e5aea68' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/newsletters/hooks/profiles/account_update.pre.tpl',
      1 => 1726744066,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
  ),
),false)) {
function content_66ec065cd8d275_72672407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_signup_for_subscriptions','mailing_lists','text_signup_for_subscriptions','mailing_lists'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['page_mailing_lists']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mailing_lists", null, null);?>
        <?php $_smarty_tpl->_assignInScope('show_newsletters_content', false);?>

        <div class="ty-newsletters">

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"newsletters:profile_email_subscription"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"newsletters:profile_email_subscription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <p><?php echo $_smarty_tpl->__("text_signup_for_subscriptions");?>
</p>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"newsletters:profile_email_subscription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_mailing_lists']->value, 'list');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['list']->value['show_on_registration']) {?>
                    <?php $_smarty_tpl->_assignInScope('show_newsletters_content', true);?>
                <?php }?>
                <input id="all_profile_mailing_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" type="hidden" name="all_mailing_lists[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" />

                <div class="ty-newsletters__item<?php if (!$_smarty_tpl->tpl_vars['list']->value['show_on_registration']) {?> hidden<?php }?>">
                    <input id="profile_mailing_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="mailing_lists[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?> class="checkbox" /><label for="profile_mailing_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['object'], ENT_QUOTES, 'UTF-8');?>
</label>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['show_newsletters_content']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("mailing_lists")), 0, false);
?>

        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mailing_lists');?>

    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/hooks/profiles/account_update.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/newsletters/hooks/profiles/account_update.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['page_mailing_lists']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mailing_lists", null, null);?>
        <?php $_smarty_tpl->_assignInScope('show_newsletters_content', false);?>

        <div class="ty-newsletters">

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"newsletters:profile_email_subscription"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"newsletters:profile_email_subscription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <p><?php echo $_smarty_tpl->__("text_signup_for_subscriptions");?>
</p>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"newsletters:profile_email_subscription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_mailing_lists']->value, 'list');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['list']->value['show_on_registration']) {?>
                    <?php $_smarty_tpl->_assignInScope('show_newsletters_content', true);?>
                <?php }?>
                <input id="all_profile_mailing_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" type="hidden" name="all_mailing_lists[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" />

                <div class="ty-newsletters__item<?php if (!$_smarty_tpl->tpl_vars['list']->value['show_on_registration']) {?> hidden<?php }?>">
                    <input id="profile_mailing_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="mailing_lists[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?> class="checkbox" /><label for="profile_mailing_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['object'], ENT_QUOTES, 'UTF-8');?>
</label>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['show_newsletters_content']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("mailing_lists")), 0, true);
?>

        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mailing_lists');?>

    <?php }
}
}
}
}
