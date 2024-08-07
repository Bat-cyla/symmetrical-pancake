<?php
/* Smarty version 4.1.1, created on 2024-08-06 10:10:44
  from '/app/www/design/backend/templates/addons/gdpr/hooks/profiles/list_extra_links.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b1cc74a458c2_21870012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4e9f45611975ff7576bb852ef4ae9a27feecd3f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/gdpr/hooks/profiles/list_extra_links.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b1cc74a458c2_21870012 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('gdpr.text_anonymize_question','gdpr.anonymize'));
if ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "C" && $_smarty_tpl->tpl_vars['user']->value['anonymized'] != "Y") {?>
    <li><?php ob_start();
echo $_smarty_tpl->__("gdpr.text_anonymize_question");
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("gdpr.anonymize"),'href'=>"profiles.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_prefixVariable4),'method'=>"POST"), true);?>
</li>
<?php }
}
}
