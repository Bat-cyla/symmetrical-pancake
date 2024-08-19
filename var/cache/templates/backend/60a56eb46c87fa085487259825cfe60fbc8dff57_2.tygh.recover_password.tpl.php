<?php
/* Smarty version 4.1.1, created on 2024-08-06 17:20:31
  from '/app/www/design/backend/templates/views/auth/recover_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b2312f898e98_20589945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60a56eb46c87fa085487259825cfe60fbc8dff57' => 
    array (
      0 => '/app/www/design/backend/templates/views/auth/recover_password.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66b2312f898e98_20589945 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('recover_password','text_recover_password_notice','email','reset_password','press_continue_to_recover_password','continue'));
?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
          method="post"
          name="recover_form"
          class="signin-modal__form cm-skip-check-items cm-check-changes"
    >
        <div class="modal-header">
            <h4 class="signin-modal__form-header"><?php echo $_smarty_tpl->__("recover_password");?>
</h4>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['action']->value == "request") {?>
            <div class="modal-body">
                <p><?php echo $_smarty_tpl->__("text_recover_password_notice");?>
</p>
                <label class="signin-modal__form-header" for="user_login"><?php echo $_smarty_tpl->__("email");?>
:</label>
                <input type="text"
                       name="user_email"
                       id="user_login"
                       size="20"
                       value=""
                       class="signin-modal__form-field"
                />
            </div>
            <div class="modal-footer signin-modal__footer">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("reset_password"),'but_name'=>"dispatch[auth.recover_password]",'but_role'=>"button_main"), 0, false);
?>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "recover") {?>
            <input type="hidden"
                   name="ekey"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ekey']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
            <div class="modal-body">
                <p><?php echo $_smarty_tpl->__("press_continue_to_recover_password");?>
</p>
            </div>
            <div class="modal-footer signin-modal__footer">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("continue"),'but_name'=>"dispatch[auth.recover_password]",'but_role'=>"button_main"), 0, true);
?>
            </div>
        <?php }?>
    </form>
</div><?php }
}
