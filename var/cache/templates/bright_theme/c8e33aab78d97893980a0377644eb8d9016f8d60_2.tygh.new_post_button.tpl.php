<?php
/* Smarty version 4.1.1, created on 2024-08-06 10:01:36
  from '/app/www/design/themes/responsive/templates/addons/discussion/views/discussion/components/new_post_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b1ca50d1e2f0_19688488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e33aab78d97893980a0377644eb8d9016f8d60' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/discussion/views/discussion/components/new_post_button.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 4,
  ),
),false)) {
function content_66b1ca50d1e2f0_19688488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','sign_in','write_review','sign_in','sign_in','write_review'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['show_container']->value) {?>
<div class="ty-discussion-post__buttons buttons-container">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['locate_to_review_tab']->value) {?>
    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=discussion#discussion"))));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
}?>

<?php $_smarty_tpl->_assignInScope('is_product_and_post_after_purchase_enabled', $_smarty_tpl->tpl_vars['object_type']->value == smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT") && $_smarty_tpl->tpl_vars['settings']->value['discussion']['products']['product_review_after_purchase'] == "Y");
$_smarty_tpl->_assignInScope('is_company_and_post_after_purchase_enabled', $_smarty_tpl->tpl_vars['object_type']->value == smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::COMPANY") && $_smarty_tpl->tpl_vars['settings']->value['discussion']['companies']['company_only_buyers'] == "Y");
if (!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && ($_smarty_tpl->tpl_vars['is_product_and_post_after_purchase_enabled']->value || $_smarty_tpl->tpl_vars['is_company_and_post_after_purchase_enabled']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('but_id', "opener_discussion_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php $_smarty_tpl->_assignInScope('target_id', "new_discussion_post_login_form_popup");?>

    <?php $_smarty_tpl->_assignInScope('but_href', fn_url("discussion.get_user_login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)));?>

    <?php if ($_smarty_tpl->tpl_vars['style']->value == "text") {?>
        <a id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-discussion__review-write" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("sign_in");?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_href']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
    <?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->__("sign_in"),'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-btn__primary",'but_rel'=>"nofollow"), 0, false);
?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_assignInScope('but_id', "opener_new_post_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php $_smarty_tpl->_assignInScope('but_href', fn_url("discussion.get_new_post_form?object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)."&object_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&post_redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)));?>
    <?php $_smarty_tpl->_assignInScope('target_id', "new_post_dialog_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php if ($_smarty_tpl->tpl_vars['style']->value == "text") {?>
        <a id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-discussion__review-write cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_href']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("write_review");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->tpl_vars['name']->value,'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-btn__primary",'but_rel'=>"nofollow"), 0, true);
?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['show_container']->value) {?>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/components/new_post_button.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/components/new_post_button.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_container']->value) {?>
<div class="ty-discussion-post__buttons buttons-container">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['locate_to_review_tab']->value) {?>
    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=discussion#discussion"))));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
}?>

<?php $_smarty_tpl->_assignInScope('is_product_and_post_after_purchase_enabled', $_smarty_tpl->tpl_vars['object_type']->value == smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT") && $_smarty_tpl->tpl_vars['settings']->value['discussion']['products']['product_review_after_purchase'] == "Y");
$_smarty_tpl->_assignInScope('is_company_and_post_after_purchase_enabled', $_smarty_tpl->tpl_vars['object_type']->value == smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::COMPANY") && $_smarty_tpl->tpl_vars['settings']->value['discussion']['companies']['company_only_buyers'] == "Y");
if (!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && ($_smarty_tpl->tpl_vars['is_product_and_post_after_purchase_enabled']->value || $_smarty_tpl->tpl_vars['is_company_and_post_after_purchase_enabled']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('but_id', "opener_discussion_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php $_smarty_tpl->_assignInScope('target_id', "new_discussion_post_login_form_popup");?>

    <?php $_smarty_tpl->_assignInScope('but_href', fn_url("discussion.get_user_login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)));?>

    <?php if ($_smarty_tpl->tpl_vars['style']->value == "text") {?>
        <a id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-discussion__review-write" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("sign_in");?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_href']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
    <?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->__("sign_in"),'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-btn__primary",'but_rel'=>"nofollow"), 0, true);
?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_assignInScope('but_id', "opener_new_post_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php $_smarty_tpl->_assignInScope('but_href', fn_url("discussion.get_new_post_form?object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)."&object_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&post_redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)));?>
    <?php $_smarty_tpl->_assignInScope('target_id', "new_post_dialog_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php if ($_smarty_tpl->tpl_vars['style']->value == "text") {?>
        <a id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-discussion__review-write cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_href']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("write_review");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->tpl_vars['name']->value,'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-btn__primary",'but_rel'=>"nofollow"), 0, true);
?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['show_container']->value) {?>
</div>
<?php }
}
}
}
