<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:41
  from '/app/www/design/themes/responsive/templates/views/checkout/components/profile_fields/s_country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e10d6b6031_51605619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0378e9285fad727daf495b3a45e39f80cc106f50' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/checkout/components/profile_fields/s_country.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b5e10d6b6031_51605619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('select_country','country','select_country','country'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:location_country"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:location_country"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="litecheckout__field litecheckout__field--auto">
    <select data-ca-lite-checkout-field="user_data.s_country"
            class="cm-country cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
            data-ca-lite-checkout-element="country"
            data-ca-lite-checkout-last-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_country'], ENT_QUOTES, 'UTF-8');?>
"
            required
            id="litecheckout_country"
    >
        <option disabled data-ca-rebuild-states="skip" <?php if (!$_smarty_tpl->tpl_vars['user_data']->value['s_country']) {?>selected<?php }?>><?php echo $_smarty_tpl->__("select_country");?>
</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country'] == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>
            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label class="litecheckout__label cm-required" for="litecheckout_country"><?php echo $_smarty_tpl->__("country");?>
: </label>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:location_country"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields/s_country.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/profile_fields/s_country.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:location_country"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:location_country"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="litecheckout__field litecheckout__field--auto">
    <select data-ca-lite-checkout-field="user_data.s_country"
            class="cm-country cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
            data-ca-lite-checkout-element="country"
            data-ca-lite-checkout-last-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_country'], ENT_QUOTES, 'UTF-8');?>
"
            required
            id="litecheckout_country"
    >
        <option disabled data-ca-rebuild-states="skip" <?php if (!$_smarty_tpl->tpl_vars['user_data']->value['s_country']) {?>selected<?php }?>><?php echo $_smarty_tpl->__("select_country");?>
</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country'] == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>
            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label class="litecheckout__label cm-required" for="litecheckout_country"><?php echo $_smarty_tpl->__("country");?>
: </label>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:location_country"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
