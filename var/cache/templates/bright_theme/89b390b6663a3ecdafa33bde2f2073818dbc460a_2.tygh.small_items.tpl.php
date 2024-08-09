<?php
/* Smarty version 4.1.1, created on 2024-08-08 14:13:16
  from '/app/www/design/themes/responsive/templates/blocks/list_templates/small_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b4a84c4d0e92_09213249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b390b6663a3ecdafa33bde2f2073818dbc460a' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/list_templates/small_items.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66b4a84c4d0e92_09213249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><ul class="ty-template-small">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
    <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
    <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_small_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_small_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <li class="ty-template-small__item clearfix">
        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

            <div class="ty-template-small__item-img">
                <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'no_ids'=>true), 0, true);
?></a>
            </div>
            <div class="ty-template-small__item-description">
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number'] == "Y") {
echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
.&nbsp;<?php }?>
                <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?><bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi>

                <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                <div class="ty-template-small__item-price">
                    <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);?>
&nbsp;<?php }?>

                    <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>

                </div>
                <?php }?>

                <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value))) {?>
                    <div class="ty-template-small__item-rating">
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>

                    </div>
                <?php }?>

                <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value))) {?><p><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>
</p><?php }?>
            </div>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </li>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_small_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/small_items.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/small_items.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><ul class="ty-template-small">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
    <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
    <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_small_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_small_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <li class="ty-template-small__item clearfix">
        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

            <div class="ty-template-small__item-img">
                <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'no_ids'=>true), 0, true);
?></a>
            </div>
            <div class="ty-template-small__item-description">
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number'] == "Y") {
echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
.&nbsp;<?php }?>
                <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?><bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi>

                <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                <div class="ty-template-small__item-price">
                    <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);?>
&nbsp;<?php }?>

                    <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>

                </div>
                <?php }?>

                <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value))) {?>
                    <div class="ty-template-small__item-rating">
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>

                    </div>
                <?php }?>

                <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value))) {?><p><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>
</p><?php }?>
            </div>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </li>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_small_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
}
