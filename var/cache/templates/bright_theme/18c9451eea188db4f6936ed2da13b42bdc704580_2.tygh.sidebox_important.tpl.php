<?php
/* Smarty version 4.1.1, created on 2024-08-06 10:01:34
  from '/app/www/design/themes/responsive/templates/blocks/wrappers/sidebox_important.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b1ca4e56f9f1_70251138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18c9451eea188db4f6936ed2da13b42bdc704580' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/wrappers/sidebox_important.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b1ca4e56f9f1_70251138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="ty-sidebox-important<?php if ((isset($_smarty_tpl->tpl_vars['hide_wrapper']->value))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>">
        <h3 class="ty-sidebox-important__title<?php if ($_smarty_tpl->tpl_vars['header_class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header_class']->value, ENT_QUOTES, 'UTF-8');
}?>">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:sidebox_important_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:sidebox_important_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title');?>

            <?php } else { ?>
                <span class="ty-sidebox__title-wrapper"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:sidebox_important_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </h3>
        <div class="ty-sidebox-important__body"><?php echo (($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
</div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/sidebox_important.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/wrappers/sidebox_important.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="ty-sidebox-important<?php if ((isset($_smarty_tpl->tpl_vars['hide_wrapper']->value))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>">
        <h3 class="ty-sidebox-important__title<?php if ($_smarty_tpl->tpl_vars['header_class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header_class']->value, ENT_QUOTES, 'UTF-8');
}?>">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:sidebox_important_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:sidebox_important_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title');?>

            <?php } else { ?>
                <span class="ty-sidebox__title-wrapper"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:sidebox_important_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </h3>
        <div class="ty-sidebox-important__body"><?php echo (($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
</div>
    </div>
<?php }
}
}
}
