<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:01
  from '/app/www/design/themes/responsive/templates/buttons/update_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbed154464_17710412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beec220389774faa0ad8ae4413c6e48208dd2438' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/buttons/update_cart.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66b4bbed154464_17710412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('recalculate','recalculate'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
    <?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->tpl_vars['but_text']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->__("recalculate"));
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_meta'=>"ty-btn__tertiary ".((string)$_smarty_tpl->tpl_vars['but_meta']->value),'but_role'=>"action"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/update_cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/update_cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
    <?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->tpl_vars['but_text']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->__("recalculate"));
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_meta'=>"ty-btn__tertiary ".((string)$_smarty_tpl->tpl_vars['but_meta']->value),'but_role'=>"action"), 0, true);
}
}
}
