<?php
/* Smarty version 4.1.1, created on 2024-08-14 09:05:48
  from '/app/www/design/backend/templates/views/addons/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bc493c452738_35472228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e47e89c537212be1ad96050c336d43674356a27' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/update.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:buttons/helpdesk.tpl' => 2,
    'tygh:views/addons/components/detailed_page/tabs/addon_general.tpl' => 1,
    'tygh:views/addons/components/detailed_page/tabs/addon_settings.tpl' => 1,
    'tygh:views/addons/components/detailed_page/tabs/addon_information.tpl' => 1,
    'tygh:views/addons/components/detailed_page/tabs/addon_update.tpl' => 1,
    'tygh:views/addons/components/detailed_page/tabs/addon_subscription.tpl' => 1,
    'tygh:views/addons/components/detailed_page/tabs/addon_reviews.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:views/addons/components/detailed_page/sidebar/detailed_page_sidebar.tpl' => 1,
    'tygh:views/addons/components/detailed_page/header/addon_header_buttons.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66bc493c452738_35472228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('activate','helpdesk_account.activate_free_license_message','helpdesk_account.signed_out_message.marketplace_single_addon'));
$_smarty_tpl->_assignInScope('_addon', $_REQUEST['addon']);
echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/addons/update.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>fn_get_all_states(1)), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);
if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && !$_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id'] && $_smarty_tpl->tpl_vars['addon']->value['marketplace_id']) {?>
    <?php if (fn_allowed_for("ULTIMATE:FREE") && $_smarty_tpl->tpl_vars['is_activated_free']->value !== smarty_modifier_enum("YesNo::YES")) {?>
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['is_root'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['auth']->value['company_id'] && $_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number']) {?>
            <div class="well well-small help-block">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('btn_class'=>"pull-right cm-ajax",'btn_text'=>$_smarty_tpl->__("activate"),'btn_href'=>"helpdesk_connector.activate_license_mail_request"), 0, false);
?>
                <p><?php echo $_smarty_tpl->__("helpdesk_account.activate_free_license_message");?>
</p>
            </div>
        <?php }?>
    <?php } else { ?>
        <div class="well well-small help-block">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('btn_class'=>"pull-right"), 0, true);
?>
            <p><?php echo $_smarty_tpl->__("helpdesk_account.signed_out_message.marketplace_single_addon");?>
</p>
        </div>
    <?php }
}?>

<div id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/tabs/addon_general.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/tabs/addon_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/tabs/addon_information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/tabs/addon_update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/tabs/addon_subscription.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/tabs/addon_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0, false);
?>

<!--content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/detailed_page_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/header/addon_header_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['addon']->value['name'],'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>($_prefixVariable1),'buttons'=>($_prefixVariable2),'select_storefront'=>$_smarty_tpl->tpl_vars['select_storefront']->value,'show_all_storefront'=>$_smarty_tpl->tpl_vars['show_all_storefront']->value,'storefront_switcher_param_name'=>"storefront_id"), 0, false);
}
}
