<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:16
  from '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/hooks/profiles/my_account_menu.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065c3ba0b1_01591855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4163ed319a11833611662896feced1f0e97815f4' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_otp_registration/hooks/profiles/my_account_menu.override.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec065c3ba0b1_01591855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('profile_details','downloads','orders','view_comparison_list','profile_details','downloads','orders','view_comparison_list'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:my_account_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php if ($_smarty_tpl->tpl_vars['user_info']->value['firstname'] || $_smarty_tpl->tpl_vars['user_info']->value['lastname']) {?>
            <?php $_smarty_tpl->_assignInScope('login_info', ((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['user_info']->value['phone']) {?>
            <?php $_smarty_tpl->_assignInScope('login_info', $_smarty_tpl->tpl_vars['user_info']->value['phone']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('login_info', $_smarty_tpl->tpl_vars['user_info']->value['email']);?>
        <?php }?>
        <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['login_info']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_edp'] == "Y") {?>
        <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("orders.downloads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("downloads");?>
</a></li>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['firstname'] || $_smarty_tpl->tpl_vars['user_data']->value['lastname']) {?>
        <li class="ty-account-info__item  ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</li>
    <?php } elseif ($_smarty_tpl->tpl_vars['user_info']->value['phone']) {?>
        <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name">+<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</li>
    <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['email']) {?>
        <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</li>
    <?php }?>
    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
        <?php $_smarty_tpl->_assignInScope('compared_products', fn_get_comparison_products(''));?>
        <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("view_comparison_list");
if ($_smarty_tpl->tpl_vars['compared_products']->value) {?> (<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_otp_registration/hooks/profiles/my_account_menu.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_otp_registration/hooks/profiles/my_account_menu.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:my_account_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php if ($_smarty_tpl->tpl_vars['user_info']->value['firstname'] || $_smarty_tpl->tpl_vars['user_info']->value['lastname']) {?>
            <?php $_smarty_tpl->_assignInScope('login_info', ((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['user_info']->value['phone']) {?>
            <?php $_smarty_tpl->_assignInScope('login_info', $_smarty_tpl->tpl_vars['user_info']->value['phone']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('login_info', $_smarty_tpl->tpl_vars['user_info']->value['email']);?>
        <?php }?>
        <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['login_info']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_edp'] == "Y") {?>
        <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("orders.downloads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("downloads");?>
</a></li>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['firstname'] || $_smarty_tpl->tpl_vars['user_data']->value['lastname']) {?>
        <li class="ty-account-info__item  ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</li>
    <?php } elseif ($_smarty_tpl->tpl_vars['user_info']->value['phone']) {?>
        <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name">+<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</li>
    <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['email']) {?>
        <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</li>
    <?php }?>
    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
        <?php $_smarty_tpl->_assignInScope('compared_products', fn_get_comparison_products(''));?>
        <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("view_comparison_list");
if ($_smarty_tpl->tpl_vars['compared_products']->value) {?> (<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
