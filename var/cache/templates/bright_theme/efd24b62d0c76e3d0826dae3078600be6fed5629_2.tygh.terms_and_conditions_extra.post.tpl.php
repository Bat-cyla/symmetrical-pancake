<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:16
  from '/app/www/design/themes/responsive/templates/addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eec14e928_03904486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efd24b62d0c76e3d0826dae3078600be6fed5629' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b49eec14e928_03904486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_terms.checkout_terms_and_conditions_name','vendor_terms.checkout_terms_and_conditions','vendor_terms.checkout_terms_and_conditions_name','vendor_terms.checkout_terms_and_conditions'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['vendor_terms']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vendor_terms']->value, 'vendor');
$_smarty_tpl->tpl_vars['vendor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vendor']->value) {
$_smarty_tpl->tpl_vars['vendor']->do_else = false;
?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <label for="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-check-agreement checkbox"><input type="checkbox" id="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" name="agreements[]" value="Y" class="cm-agreement checkbox"  <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
');"<?php }?>/><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "vendor_terms_href", null, null);?><a id="sw_elm_vendor_terms_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions_name");?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><span><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions",array("[vendor]"=>$_smarty_tpl->tpl_vars['vendor']->value['company'],"[terms_href]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'vendor_terms_href')));?>
</span></label>
        </div>
        <div class="hidden" id="elm_vendor_terms_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['vendor']->value['terms'];?>

        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['vendor_terms']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vendor_terms']->value, 'vendor');
$_smarty_tpl->tpl_vars['vendor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vendor']->value) {
$_smarty_tpl->tpl_vars['vendor']->do_else = false;
?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <label for="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-check-agreement checkbox"><input type="checkbox" id="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" name="agreements[]" value="Y" class="cm-agreement checkbox"  <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
');"<?php }?>/><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "vendor_terms_href", null, null);?><a id="sw_elm_vendor_terms_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions_name");?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><span><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions",array("[vendor]"=>$_smarty_tpl->tpl_vars['vendor']->value['company'],"[terms_href]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'vendor_terms_href')));?>
</span></label>
        </div>
        <div class="hidden" id="elm_vendor_terms_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['vendor']->value['terms'];?>

        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
