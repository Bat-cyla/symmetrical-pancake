<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:25:09
  from '/app/www/design/themes/bright_theme/templates/blocks/static_templates/my_account_links_advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e075f2dfd3_08069831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b266f2bc0677868b0c040142eb843bdc35a6a12b' => 
    array (
      0 => '/app/www/design/themes/bright_theme/templates/blocks/static_templates/my_account_links_advanced.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b5e075f2dfd3_08069831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('profile_details','sign_in','create_account','orders','wishlist','comparison_list','profile_details','sign_in','create_account','orders','wishlist','comparison_list'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><ul id="account_info_links_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-account-info__links">
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <li><a href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
<?php } else { ?>
    <li><a href="<?php echo htmlspecialchars((string) fn_url("auth.login_form"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sign_in");?>
</a></li>
    <li><a href="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_account");?>
</a></li>
<?php }?>
    <li><a href="<?php echo htmlspecialchars((string) fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist'] && $_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == 'A') {?>
        <li><a href="<?php echo htmlspecialchars((string) fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("wishlist");?>
</a></li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
    <li><a href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("comparison_list");?>
</a></li>
    <?php }?>
<!--account_info_links_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></ul><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/my_account_links_advanced.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/my_account_links_advanced.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><ul id="account_info_links_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-account-info__links">
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <li><a href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
<?php } else { ?>
    <li><a href="<?php echo htmlspecialchars((string) fn_url("auth.login_form"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sign_in");?>
</a></li>
    <li><a href="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_account");?>
</a></li>
<?php }?>
    <li><a href="<?php echo htmlspecialchars((string) fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist'] && $_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == 'A') {?>
        <li><a href="<?php echo htmlspecialchars((string) fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("wishlist");?>
</a></li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
    <li><a href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("comparison_list");?>
</a></li>
    <?php }?>
<!--account_info_links_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></ul><?php }
}
}
