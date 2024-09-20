<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:49
  from '/app/www/design/backend/templates/addons/cp_otp_registration/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec06416f0b58_67528473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3127f65016df4edaae23ed2d50ddbb771fa146af' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_otp_registration/hooks/index/scripts.post.tpl',
      1 => 1726116858,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec06416f0b58_67528473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "profiles") {?>
    <?php echo htmlspecialchars((string) fn_print_r($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['auth_by_email']), ENT_QUOTES, 'UTF-8');?>

    <?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
 type="text/javascript">
        (function (_, $) {
            $.ceEvent('on', 'ce.commoninit', function(context) {
                <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['auth_by_email'] == "make_required") {?>
                $('label[for="email"]').addClass('cm-required');
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_otp_registration']['phone_optional'] == "Y") {?>
                $('label[for="phone"]').removeClass('cm-required');
                <?php }?>
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php }
}
