<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:15
  from '/app/www/design/themes/responsive/templates/addons/rus_boxberry/hooks/checkout/shipping_method.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49eeb92c706_84589618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aec9ba364c0399e539dd6c492b05aca81ec86e2c' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/rus_boxberry/hooks/checkout/shipping_method.post.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b49eeb92c706_84589618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('rus_boxberry.select_pickup_point','rus_boxberry.select_pickup_point'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'] && $_smarty_tpl->tpl_vars['shipping']->value['module'] == 'rus_boxberry') {?>
    <?php $_smarty_tpl->_assignInScope('shipping_id', $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']);?>

    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_code'] == 'boxberry_self' || $_smarty_tpl->tpl_vars['shipping']->value['service_code'] == 'boxberry_self_prepaid') {?>
	<div class="litecheckout__group litecheckout__group--center">
        <div class="litecheckout__item litecheckout__item--fill">
            <label for="selected_point_id" class="cm-required"><?php echo $_smarty_tpl->__('rus_boxberry.pickup_point');?>
:</label>
            <input id="selected_point_id" type="hidden" name="boxberry_selected_point[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['point_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['pickup_data']['address']) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['pickup_data']['address'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['pickup_data']['full_address'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
        </div>
        <div class="litecheckout__item">
            <a class="ty-btn__secondary ty-btn select_pvz_link" href="#"
                data-boxberry-open="true"
                data-boxberry-token="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['apiKeyWidget'], ENT_QUOTES, 'UTF-8');?>
"
                data-boxberry-city="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['package_info']['location']['city'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['package_info']['location']['state_descr'], ENT_QUOTES, 'UTF-8');?>
"
                data-boxberry-weight="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_weight'], ENT_QUOTES, 'UTF-8');?>
"
                data-boxberry-target-start="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_target_start'], ENT_QUOTES, 'UTF-8');?>
"
                data-paymentsum="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_paymentsum'], ENT_QUOTES, 'UTF-8');?>
"
                data-ordersum="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_ordersum'], ENT_QUOTES, 'UTF-8');?>
"
                data-boxberry-point-input="boxberry_selected_point[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                data-boxberry-point-full-name-input="boxberry_selected_point_full_name[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
            ><?php echo $_smarty_tpl->__("rus_boxberry.select_pickup_point");?>
</a>
        </div>
    </div>
    <?php echo smarty_function_script(array('src'=>"js/addons/rus_boxberry/boxberry.js",'cookie-name'=>"boxberry"),$_smarty_tpl);?>

    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_boxberry/hooks/checkout/shipping_method.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_boxberry/hooks/checkout/shipping_method.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'] && $_smarty_tpl->tpl_vars['shipping']->value['module'] == 'rus_boxberry') {?>
    <?php $_smarty_tpl->_assignInScope('shipping_id', $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']);?>

    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_code'] == 'boxberry_self' || $_smarty_tpl->tpl_vars['shipping']->value['service_code'] == 'boxberry_self_prepaid') {?>
	<div class="litecheckout__group litecheckout__group--center">
        <div class="litecheckout__item litecheckout__item--fill">
            <label for="selected_point_id" class="cm-required"><?php echo $_smarty_tpl->__('rus_boxberry.pickup_point');?>
:</label>
            <input id="selected_point_id" type="hidden" name="boxberry_selected_point[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['point_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['pickup_data']['address']) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['pickup_data']['address'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['pickup_data']['full_address'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
        </div>
        <div class="litecheckout__item">
            <a class="ty-btn__secondary ty-btn select_pvz_link" href="#"
                data-boxberry-open="true"
                data-boxberry-token="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['apiKeyWidget'], ENT_QUOTES, 'UTF-8');?>
"
                data-boxberry-city="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['package_info']['location']['city'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['package_info']['location']['state_descr'], ENT_QUOTES, 'UTF-8');?>
"
                data-boxberry-weight="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_weight'], ENT_QUOTES, 'UTF-8');?>
"
                data-boxberry-target-start="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_target_start'], ENT_QUOTES, 'UTF-8');?>
"
                data-paymentsum="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_paymentsum'], ENT_QUOTES, 'UTF-8');?>
"
                data-ordersum="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_ordersum'], ENT_QUOTES, 'UTF-8');?>
"
                data-boxberry-point-input="boxberry_selected_point[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                data-boxberry-point-full-name-input="boxberry_selected_point_full_name[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
            ><?php echo $_smarty_tpl->__("rus_boxberry.select_pickup_point");?>
</a>
        </div>
    </div>
    <?php echo smarty_function_script(array('src'=>"js/addons/rus_boxberry/boxberry.js",'cookie-name'=>"boxberry"),$_smarty_tpl);?>

    <?php }
}
}
}
}
