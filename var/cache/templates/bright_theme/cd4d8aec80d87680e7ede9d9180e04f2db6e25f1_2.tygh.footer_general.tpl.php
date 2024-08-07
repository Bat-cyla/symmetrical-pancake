<?php
/* Smarty version 4.1.1, created on 2024-08-02 10:12:31
  from '/app/www/design/themes/responsive/templates/blocks/wrappers/footer_general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac86df645064_52770609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd4d8aec80d87680e7ede9d9180e04f2db6e25f1' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/wrappers/footer_general.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac86df645064_52770609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['sidebox_wrapper']->value ?? null)===null||$tmp==='' ? "ty-footer" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['hide_wrapper']->value))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>">
        <h2 class="ty-footer-general__header <?php if ($_smarty_tpl->tpl_vars['header_class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header_class']->value, ENT_QUOTES, 'UTF-8');
}?> cm-combination" id="sw_footer-general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:footer_general_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:footer_general_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title');?>

            <?php } else { ?>
                <span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:footer_general_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-footer-menu__icon-open"),$_smarty_tpl);?>

        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-footer-menu__icon-hide"),$_smarty_tpl);?>

        </h2>
        <div class="ty-footer-general__body" id="footer-general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
</div>
    </div>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/footer_general.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/wrappers/footer_general.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['sidebox_wrapper']->value ?? null)===null||$tmp==='' ? "ty-footer" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['hide_wrapper']->value))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>">
        <h2 class="ty-footer-general__header <?php if ($_smarty_tpl->tpl_vars['header_class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header_class']->value, ENT_QUOTES, 'UTF-8');
}?> cm-combination" id="sw_footer-general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:footer_general_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:footer_general_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title');?>

            <?php } else { ?>
                <span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:footer_general_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-footer-menu__icon-open"),$_smarty_tpl);?>

        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-footer-menu__icon-hide"),$_smarty_tpl);?>

        </h2>
        <div class="ty-footer-general__body" id="footer-general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
</div>
    </div>

<?php }
}
}
}
