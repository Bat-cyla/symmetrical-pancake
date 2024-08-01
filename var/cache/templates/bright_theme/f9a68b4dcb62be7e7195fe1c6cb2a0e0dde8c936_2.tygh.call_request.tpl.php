<?php
/* Smarty version 4.1.1, created on 2024-07-31 15:00:57
  from '/app/www/design/themes/responsive/templates/addons/call_requests/blocks/call_request.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa2779141692_64024971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9a68b4dcb62be7e7195fe1c6cb2a0e0dde8c936' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/call_requests/blocks/call_request.tpl',
      1 => 1722424116,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
  ),
),false)) {
function content_66aa2779141692_64024971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('call_request.work_time','call_requests.request_call','call_requests.request_call','call_request.work_time','call_requests.request_call','call_requests.request_call'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-cr-phone-number-link">
    <div class="ty-cr-phone"><span><bdi><span class="ty-cr-phone-prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone_number']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone_number']->value['postfix'], ENT_QUOTES, 'UTF-8');?>
</bdi></span><span class="ty-cr-work"><?php echo $_smarty_tpl->__("call_request.work_time");?>
</span></div>
    <div class="ty-cr-link">
        <?php $_smarty_tpl->_assignInScope('obj_prefix', "block");?>
        <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['block']->value['snapping_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>

        <?php if ($_REQUEST['company_id']) {?>
            <?php $_smarty_tpl->_assignInScope('href', "call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('href', "call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>$_smarty_tpl->tpl_vars['href']->value,'link_text'=>$_smarty_tpl->__("call_requests.request_call"),'title'=>$_smarty_tpl->__("call_requests.request_call"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'content'=>''), 0, false);
?>
    </div>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/blocks/call_request.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/blocks/call_request.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-cr-phone-number-link">
    <div class="ty-cr-phone"><span><bdi><span class="ty-cr-phone-prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone_number']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone_number']->value['postfix'], ENT_QUOTES, 'UTF-8');?>
</bdi></span><span class="ty-cr-work"><?php echo $_smarty_tpl->__("call_request.work_time");?>
</span></div>
    <div class="ty-cr-link">
        <?php $_smarty_tpl->_assignInScope('obj_prefix', "block");?>
        <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['block']->value['snapping_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>

        <?php if ($_REQUEST['company_id']) {?>
            <?php $_smarty_tpl->_assignInScope('href', "call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('href', "call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>$_smarty_tpl->tpl_vars['href']->value,'link_text'=>$_smarty_tpl->__("call_requests.request_call"),'title'=>$_smarty_tpl->__("call_requests.request_call"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'content'=>''), 0, true);
?>
    </div>
</div><?php }
}
}
