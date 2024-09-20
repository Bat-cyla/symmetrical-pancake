<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:16
  from '/app/www/design/themes/responsive/templates/addons/hybrid_auth/hooks/profiles/account_update.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065ce84748_17233503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9436c50221cf06b2d35998554ab9eb0465387966' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/hybrid_auth/hooks/profiles/account_update.post.tpl',
      1 => 1726744066,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:addons/hybrid_auth/views/auth/components/login_buttons.tpl' => 2,
  ),
),false)) {
function content_66ec065ce84748_17233503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.link_provider','hybrid_auth.text_link_provider','hybrid_auth.linked_provider','hybrid_auth.not_linked_provider','hybrid_auth.link_provider','hybrid_auth.text_link_provider','hybrid_auth.linked_provider','hybrid_auth.not_linked_provider'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['providers_list']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"hybrid_auth:account_update"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"hybrid_auth:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("hybrid_auth.link_provider")), 0, false);
?>
            <p><?php echo $_smarty_tpl->__("hybrid_auth.text_link_provider");?>
</p>

            <div class="clearfix ty-hybrid-auth__icon-container" id="hybrid_providers">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['providers_list']->value, 'provider_data');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
                    <?php if (in_array($_smarty_tpl->tpl_vars['provider_data']->value['provider'],$_smarty_tpl->tpl_vars['linked_providers']->value)) {?>
                        <div class="ty-hybrid-auth__icon ty-float-left">
                            <a class="cm-unlink-provider ty-hybrid-auth__remove" data-idp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider_id'], ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle"),$_smarty_tpl);?>
</a>
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("hybrid_auth.linked_provider");?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"/>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div class="ty-hybrid-auth__icon ty-float-left">&nbsp;</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['providers_list']->value, 'provider_data');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
                    <?php if (!in_array($_smarty_tpl->tpl_vars['provider_data']->value['provider'],$_smarty_tpl->tpl_vars['linked_providers']->value)) {?>
                        <div class="ty-hybrid-auth__icon ty-float-left">
                            <a class="cm-link-provider ty-link-unlink-provider" data-idp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider_id'], ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-plus-circle ty-hybrid-auth__add"),$_smarty_tpl);?>

                                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("hybrid_auth.not_linked_provider");?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"/>
                            </a>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <!--hybrid_providers--></div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"hybrid_auth:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/hybrid_auth/views/auth/components/login_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/profiles/account_update.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/profiles/account_update.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['providers_list']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"hybrid_auth:account_update"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"hybrid_auth:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("hybrid_auth.link_provider")), 0, true);
?>
            <p><?php echo $_smarty_tpl->__("hybrid_auth.text_link_provider");?>
</p>

            <div class="clearfix ty-hybrid-auth__icon-container" id="hybrid_providers">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['providers_list']->value, 'provider_data');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
                    <?php if (in_array($_smarty_tpl->tpl_vars['provider_data']->value['provider'],$_smarty_tpl->tpl_vars['linked_providers']->value)) {?>
                        <div class="ty-hybrid-auth__icon ty-float-left">
                            <a class="cm-unlink-provider ty-hybrid-auth__remove" data-idp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider_id'], ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle"),$_smarty_tpl);?>
</a>
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("hybrid_auth.linked_provider");?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"/>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div class="ty-hybrid-auth__icon ty-float-left">&nbsp;</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['providers_list']->value, 'provider_data');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
                    <?php if (!in_array($_smarty_tpl->tpl_vars['provider_data']->value['provider'],$_smarty_tpl->tpl_vars['linked_providers']->value)) {?>
                        <div class="ty-hybrid-auth__icon ty-float-left">
                            <a class="cm-link-provider ty-link-unlink-provider" data-idp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider_id'], ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-plus-circle ty-hybrid-auth__add"),$_smarty_tpl);?>

                                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("hybrid_auth.not_linked_provider");?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"/>
                            </a>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <!--hybrid_providers--></div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"hybrid_auth:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/hybrid_auth/views/auth/components/login_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }
}
}
}
}
