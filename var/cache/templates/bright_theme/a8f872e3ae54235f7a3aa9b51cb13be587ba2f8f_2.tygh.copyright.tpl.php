<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:17
  from '/app/www/design/themes/responsive/templates/blocks/static_templates/copyright.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065d12e292_58416349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8f872e3ae54235f7a3aa9b51cb13be587ba2f8f' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/static_templates/copyright.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec065d12e292_58416349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('powered_by','copyright_shopping_cart','powered_by','copyright_shopping_cart'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><p class="bottom-copyright">
    &copy;
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'] && smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y") != $_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']) {?>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'UTF-8');?>
 -
    <?php }?>
    
    <?php echo htmlspecialchars((string) smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y"), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
. &nbsp;<?php echo $_smarty_tpl->__("powered_by");?>
 <a class="bottom-copyright" href="<?php echo htmlspecialchars((string) fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['product_url'],"utm_source=Powered+by&utm_medium=referral&utm_campaign=footer&utm_content=".((string)$_smarty_tpl->tpl_vars['config']->value['current_host'])), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("copyright_shopping_cart",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</a>
</p><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/copyright.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/copyright.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><p class="bottom-copyright">
    &copy;
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'] && smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y") != $_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']) {?>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'UTF-8');?>
 -
    <?php }?>
    
    <?php echo htmlspecialchars((string) smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y"), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
. &nbsp;<?php echo $_smarty_tpl->__("powered_by");?>
 <a class="bottom-copyright" href="<?php echo htmlspecialchars((string) fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['product_url'],"utm_source=Powered+by&utm_medium=referral&utm_campaign=footer&utm_content=".((string)$_smarty_tpl->tpl_vars['config']->value['current_host'])), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("copyright_shopping_cart",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</a>
</p><?php }
}
}
