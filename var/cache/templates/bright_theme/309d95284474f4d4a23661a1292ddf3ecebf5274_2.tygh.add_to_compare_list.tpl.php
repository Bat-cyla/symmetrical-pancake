<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:31
  from '/app/www/design/themes/responsive/templates/buttons/add_to_compare_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e103eb0098_70399402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '309d95284474f4d4a23661a1292ddf3ecebf5274' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/buttons/add_to_compare_list.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66b5e103eb0098_70399402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_to_comparison_list','add_to_comparison_list','add_to_comparison_list','add_to_comparison_list'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax cm-ajax-full-render");
}?>

<?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
    <?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)(($tmp = $_smarty_tpl->tpl_vars['redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp)));?>
    <?php $_smarty_tpl->_assignInScope('compare_button_type', (($tmp = $_smarty_tpl->tpl_vars['compare_button_type']->value ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_title', (($tmp = $_smarty_tpl->tpl_vars['compare_but_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_href', (($tmp = $_smarty_tpl->tpl_vars['compare_but_href']->value ?? null)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value) ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_role', (($tmp = $_smarty_tpl->tpl_vars['compare_but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_target_id', (($tmp = $_smarty_tpl->tpl_vars['compare_but_target_id']->value ?? null)===null||$tmp==='' ? "comparison_list,account_info*" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_rel', (($tmp = $_smarty_tpl->tpl_vars['compare_but_rel']->value ?? null)===null||$tmp==='' ? "nofollow" ?? null : $tmp));?>

    <?php if ($_smarty_tpl->tpl_vars['compare_button_type']->value == "icon") {?>
        <?php $_smarty_tpl->_assignInScope('but_icon', (($tmp = $_smarty_tpl->tpl_vars['compare_but_icon']->value ?? null)===null||$tmp==='' ? "ty-icon-chart-bar" ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['compare_but_text']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['compare_but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__tertiary ty-btn-icon ty-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) ?? null : $tmp));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('but_icon', $_smarty_tpl->tpl_vars['compare_but_icon']->value === true ? "ty-icon-chart-bar" : $_smarty_tpl->tpl_vars['compare_but_icon']->value);?>
        <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['compare_but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['compare_but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__text ty-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) ?? null : $tmp));?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_target_id'=>$_smarty_tpl->tpl_vars['but_target_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_rel'=>$_smarty_tpl->tpl_vars['but_rel']->value,'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/add_to_compare_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/add_to_compare_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax cm-ajax-full-render");
}?>

<?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
    <?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)(($tmp = $_smarty_tpl->tpl_vars['redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp)));?>
    <?php $_smarty_tpl->_assignInScope('compare_button_type', (($tmp = $_smarty_tpl->tpl_vars['compare_button_type']->value ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_title', (($tmp = $_smarty_tpl->tpl_vars['compare_but_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_href', (($tmp = $_smarty_tpl->tpl_vars['compare_but_href']->value ?? null)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value) ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_role', (($tmp = $_smarty_tpl->tpl_vars['compare_but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_target_id', (($tmp = $_smarty_tpl->tpl_vars['compare_but_target_id']->value ?? null)===null||$tmp==='' ? "comparison_list,account_info*" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_rel', (($tmp = $_smarty_tpl->tpl_vars['compare_but_rel']->value ?? null)===null||$tmp==='' ? "nofollow" ?? null : $tmp));?>

    <?php if ($_smarty_tpl->tpl_vars['compare_button_type']->value == "icon") {?>
        <?php $_smarty_tpl->_assignInScope('but_icon', (($tmp = $_smarty_tpl->tpl_vars['compare_but_icon']->value ?? null)===null||$tmp==='' ? "ty-icon-chart-bar" ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['compare_but_text']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['compare_but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__tertiary ty-btn-icon ty-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) ?? null : $tmp));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('but_icon', $_smarty_tpl->tpl_vars['compare_but_icon']->value === true ? "ty-icon-chart-bar" : $_smarty_tpl->tpl_vars['compare_but_icon']->value);?>
        <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['compare_but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['compare_but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__text ty-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) ?? null : $tmp));?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_target_id'=>$_smarty_tpl->tpl_vars['but_target_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_rel'=>$_smarty_tpl->tpl_vars['but_rel']->value,'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0, true);
}
}
}
}
