<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:53:39
  from '/app/www/design/backend/templates/common/table_tools_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac8273c8ce69_85171532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed552968bf9a2faad2ec6a2f352611be265ef197' => 
    array (
      0 => '/app/www/design/backend/templates/common/table_tools_list.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_66ac8273c8ce69_85171532 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('view','edit'));
if ($_smarty_tpl->tpl_vars['popup']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['skip_check_permissions']->value || fn_check_view_permissions($_smarty_tpl->tpl_vars['href']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value,'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'act'=>$_smarty_tpl->tpl_vars['act']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'link_class'=>$_smarty_tpl->tpl_vars['link_class']->value), 0, false);
?>
    <?php }
} elseif ($_smarty_tpl->tpl_vars['href']->value) {
$_smarty_tpl->_assignInScope('_href', fn_url($_smarty_tpl->tpl_vars['href']->value));
if (!fn_check_view_permissions($_smarty_tpl->tpl_vars['_href']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('link_text', $_smarty_tpl->__("view"));
}?>

<?php if ($_smarty_tpl->tpl_vars['act']->value == "link") {?>
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['link_extra']->value;?>
 class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-tooltip"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
<?php } else { ?>
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['link_extra']->value;?>
 class="icon-edit <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-tooltip" title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['link_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("edit") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"></a>
<?php }?>

<?php }
if ($_smarty_tpl->tpl_vars['skip_check_permissions']->value || fn_check_view_permissions($_smarty_tpl->tpl_vars['tools_list']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['tools_list']->value;?>

<?php }
}
}
