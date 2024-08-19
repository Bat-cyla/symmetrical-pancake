<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:31
  from '/app/www/design/themes/responsive/templates/addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e103e80319_51551502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1529c5a9699a4ea9cc5548beaab080f182d65065' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/wishlist/views/wishlist/components/add_to_wishlist.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66b5e103e80319_51551502 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_to_wishlist','add_to_wishlist','add_to_wishlist','add_to_wishlist'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('wishlist_button_type', (($tmp = $_smarty_tpl->tpl_vars['wishlist_button_type']->value ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_id', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_id']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_name', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_name']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_name']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_title', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_wishlist") ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_role', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_onclick', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_onclick']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_onclick']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_href', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_href']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_href']->value ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['wishlist_button_type']->value == "icon") {?>
    <?php $_smarty_tpl->_assignInScope('but_icon', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_icon']->value ?? null)===null||$tmp==='' ? "ty-icon-heart" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_text']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__tertiary ty-btn-icon ty-add-to-wish" ?? null : $tmp));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('but_icon', $_smarty_tpl->tpl_vars['wishlist_but_icon']->value === true ? "ty-icon-heart" : $_smarty_tpl->tpl_vars['wishlist_but_icon']->value);?>
    <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_wishlist") ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__text ty-add-to-wish" ?? null : $tmp));
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/views/wishlist/components/add_to_wishlist.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('wishlist_button_type', (($tmp = $_smarty_tpl->tpl_vars['wishlist_button_type']->value ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_id', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_id']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_name', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_name']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_name']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_title', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_wishlist") ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_role', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_onclick', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_onclick']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_onclick']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_href', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_href']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_href']->value ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['wishlist_button_type']->value == "icon") {?>
    <?php $_smarty_tpl->_assignInScope('but_icon', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_icon']->value ?? null)===null||$tmp==='' ? "ty-icon-heart" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_text']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__tertiary ty-btn-icon ty-add-to-wish" ?? null : $tmp));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('but_icon', $_smarty_tpl->tpl_vars['wishlist_but_icon']->value === true ? "ty-icon-heart" : $_smarty_tpl->tpl_vars['wishlist_but_icon']->value);?>
    <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_wishlist") ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__text ty-add-to-wish" ?? null : $tmp));
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0, true);
}
}
}
