<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:17
  from '/app/www/design/themes/responsive/templates/addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065d32a0d3_18852315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e24a8f6087fc479927a81eb080196255c6d087a0' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec065d32a0d3_18852315 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__dotd.more','ab__dotd.less','ab__dotd.more','ab__dotd.less'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__dotd: {current_dispatch: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',current_promotion_id: <?php echo htmlspecialchars((string) (($tmp = $_REQUEST['promotion_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,max_height: '<?php echo htmlspecialchars((string) strtr((string)(($tmp = intval($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['max_height']) ?? null)===null||$tmp==='' ? 250 ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',more: '<?php echo strtr((string)$_smarty_tpl->__("ab__dotd.more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',less: '<?php echo strtr((string)$_smarty_tpl->__("ab__dotd.less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',plural_formula: '<?php echo fn_ab__dotd_get_plural_rule();?>
',}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__deal_of_the_day/func.js"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__dotd: {current_dispatch: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',current_promotion_id: <?php echo htmlspecialchars((string) (($tmp = $_REQUEST['promotion_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,max_height: '<?php echo htmlspecialchars((string) strtr((string)(($tmp = intval($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['max_height']) ?? null)===null||$tmp==='' ? 250 ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',more: '<?php echo strtr((string)$_smarty_tpl->__("ab__dotd.more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',less: '<?php echo strtr((string)$_smarty_tpl->__("ab__dotd.less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',plural_formula: '<?php echo fn_ab__dotd_get_plural_rule();?>
',}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__deal_of_the_day/func.js"),$_smarty_tpl);
}
}
}
