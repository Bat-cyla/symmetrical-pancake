<?php
/* Smarty version 4.1.1, created on 2024-08-02 10:13:16
  from '/app/www/design/themes/responsive/templates/addons/hybrid_auth/hooks/auth_info/extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac870c8da451_95181546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84dcf1adaa6f006f0ea965627648fddc75bf0faa' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/hybrid_auth/hooks/auth_info/extra.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac870c8da451_95181546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.connect_social_title','hybrid_auth.text_connect_social','hybrid_auth.specify_email_title','hybrid_auth.text_specify_email','hybrid_auth.connect_social_title','hybrid_auth.text_connect_social','hybrid_auth.specify_email_title','hybrid_auth.text_specify_email'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth") {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "connect_social") {?>
    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.connect_social_title");?>
</h4>
    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_connect_social");?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "specify_email") {?>
        <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.specify_email_title");?>
</h4>
        <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_specify_email");?>
</div>
    <?php }
}?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/auth_info/extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/auth_info/extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth") {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "connect_social") {?>
    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.connect_social_title");?>
</h4>
    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_connect_social");?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "specify_email") {?>
        <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.specify_email_title");?>
</h4>
        <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_specify_email");?>
</div>
    <?php }
}?>

<?php }
}
}
