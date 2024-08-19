<?php
/* Smarty version 4.1.1, created on 2024-08-15 08:59:09
  from '/app/www/design/backend/templates/common/products_to_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bd992d2c9278_78342918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfce5da1a421f99847e85dab525a0a3fb1bcba93' => 
    array (
      0 => '/app/www/design/backend/templates/common/products_to_search.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/products/picker.tpl' => 1,
  ),
),false)) {
function content_66bd992d2c9278_78342918 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('add','or_saved_search'));
if ($_smarty_tpl->tpl_vars['search']->value['p_ids']) {?>
    <?php $_smarty_tpl->_assignInScope('product_ids', explode(",",$_smarty_tpl->tpl_vars['search']->value['p_ids']));
}?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"added_products",'but_text'=>$_smarty_tpl->__("add"),'item_ids'=>$_smarty_tpl->tpl_vars['product_ids']->value,'input_name'=>"p_ids",'type'=>"links",'no_container'=>true,'picker_view'=>true), 0, false);
?>
    <?php $_smarty_tpl->_assignInScope('views', fn_get_views("products"));?>
    <?php if ($_smarty_tpl->tpl_vars['views']->value) {?>
    <?php echo $_smarty_tpl->__("or_saved_search");?>
:&nbsp;
    <select name="product_view_id">
        <option value="0">--</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f']->value['view_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_view_id'] == $_smarty_tpl->tpl_vars['f']->value['view_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <?php }
}
}
