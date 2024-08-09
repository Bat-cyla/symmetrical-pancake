<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:04
  from '/app/www/design/themes/responsive/templates/addons/product_bundles/blocks/product_bundles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49ee0698278_48987149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a79667fc15146c30423cd9db5cc6da0db2337a25' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/product_bundles/blocks/product_bundles.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b49ee0698278_48987149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['product_bundles']['show_bundles'] === "in_a_product_tab") {?>
    <?php $_smarty_tpl->_assignInScope('show_on_tab', false);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['block_id'] === $_smarty_tpl->tpl_vars['block']->value['block_id']) {?>
            <?php $_smarty_tpl->_assignInScope('show_on_tab', true);?>
            <?php $_smarty_tpl->_assignInScope('show_in_popup', ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup'] === smarty_modifier_enum("YesNo::YES")));?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/blocks/product_bundles.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/blocks/product_bundles.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['product_bundles']['show_bundles'] === "in_a_product_tab") {?>
    <?php $_smarty_tpl->_assignInScope('show_on_tab', false);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['block_id'] === $_smarty_tpl->tpl_vars['block']->value['block_id']) {?>
            <?php $_smarty_tpl->_assignInScope('show_on_tab', true);?>
            <?php $_smarty_tpl->_assignInScope('show_in_popup', ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup'] === smarty_modifier_enum("YesNo::YES")));?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
