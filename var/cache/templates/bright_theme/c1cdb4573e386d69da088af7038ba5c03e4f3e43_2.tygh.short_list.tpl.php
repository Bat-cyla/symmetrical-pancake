<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:05
  from '/app/www/design/themes/responsive/templates/blocks/products/short_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49ee124c160_75677230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1cdb4573e386d69da088af7038ba5c03e4f3e43' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/products/short_list.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_list_templates/short_list.tpl' => 2,
  ),
),false)) {
function content_66b49ee124c160_75677230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'no_sorting'=>"Y",'no_pagination'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/short_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/short_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'no_sorting'=>"Y",'no_pagination'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value), 0, true);
}
}
}
