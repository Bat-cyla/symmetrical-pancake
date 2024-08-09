<?php
/* Smarty version 4.1.1, created on 2024-08-08 15:37:01
  from '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/checkout/product_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4bbeda48dc1_50703714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b17a823c5c2a6ce5873a834214ff078cb761d7dc' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/reward_points/hooks/checkout/product_info.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4bbeda48dc1_50703714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points','points_lowercase','reward_points','points_lowercase','price_in_points','points_lowercase','reward_points','points_lowercase'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['configuration']) {?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['price']) {?>
    <div class="ty-reward-points__product-info">
        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</strong>
        <span class="ty-control-group__item" id="price_in_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['display_price']));?>
</span>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['reward']) {?>
    <div class="ty-reward-points__product-info">
        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("reward_points");?>
:</strong>
        <span class="ty-control-group__item" id="reward_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['reward']));?>
</span>
    </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/product_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/product_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['configuration']) {?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['price']) {?>
    <div class="ty-reward-points__product-info">
        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</strong>
        <span class="ty-control-group__item" id="price_in_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['display_price']));?>
</span>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['reward']) {?>
    <div class="ty-reward-points__product-info">
        <strong class="ty-control-group__label"><?php echo $_smarty_tpl->__("reward_points");?>
:</strong>
        <span class="ty-control-group__item" id="reward_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['reward']));?>
</span>
    </div>
    <?php }
}
}
}
}
