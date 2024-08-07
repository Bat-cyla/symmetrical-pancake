<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:14:50
  from '/app/www/design/backend/templates/addons/rus_boxberry/hooks/order_management/shipping_method.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac795a7a25f6_31453380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f29f982582d93dd0b219d0a81c20f7f51baed50' => 
    array (
      0 => '/app/www/design/backend/templates/addons/rus_boxberry/hooks/order_management/shipping_method.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_66ac795a7a25f6_31453380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('rus_boxberry.pickuppoint'));
echo smarty_function_script(array('src'=>"js/addons/rus_boxberry/boxberry.js"),$_smarty_tpl);?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_groups']->value, 'group', false, 'group_key');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings'] && !$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['shippings'], 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value] == $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>

                <?php $_smarty_tpl->_assignInScope('shipping_id', $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']);?>
                <?php $_smarty_tpl->_assignInScope('pickup_data', $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['pickup_data']);?>

                <?php if ($_smarty_tpl->tpl_vars['pickup_data']->value) {?>
                    <div class="control-group">
                        <div class="control-label">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("rus_boxberry.pickuppoint")), 0, true);
?>
                        </div>
                    </div>

                    <div class="strong">
                        <input type="hidden" class="cm-submit cm-ajax cm-skip-validation"
                               name="boxberry_selected_point[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['point_id'], ENT_QUOTES, 'UTF-8');?>
"
                               data-ca-dispatch="dispatch[order_management.update_shipping]">
                        <a class="select_pvz_link" href="#"
                           data-boxberry-open="true"
                           data-boxberry-token="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['apiKeyWidget'], ENT_QUOTES, 'UTF-8');?>
"
                           data-boxberry-city="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['package_info']['location']['city'], ENT_QUOTES, 'UTF-8');?>
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
                        ><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pickup_data']->value['full_address'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__('rus_boxberry.select_pickup_point') ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                    </div>
                <?php }?>

            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>






<?php }
}
