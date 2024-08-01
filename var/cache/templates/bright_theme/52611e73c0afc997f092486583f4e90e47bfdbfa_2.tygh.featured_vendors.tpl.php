<?php
/* Smarty version 4.1.1, created on 2024-07-31 15:37:34
  from '/app/www/design/themes/responsive/templates/blocks/vendor_list_templates/featured_vendors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa300e75a698_39554637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52611e73c0afc997f092486583f4e90e47bfdbfa' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/vendor_list_templates/featured_vendors.tpl',
      1 => 1722424108,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/company_data.tpl' => 2,
  ),
),false)) {
function content_66aa300e75a698_39554637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),1=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_location', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['show_location'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y");
$_smarty_tpl->_assignInScope('show_rating', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['show_rating'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y");
$_smarty_tpl->_assignInScope('show_vendor_rating', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['show_vendor_rating'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y");
$_smarty_tpl->_assignInScope('show_products_count', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['show_products_count'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y");?>

<?php $_smarty_tpl->_assignInScope('columns', $_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns']);
$_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['items']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "5" ?? null : $tmp),'assign'=>"splitted_companies"),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "5" ?? null : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>


    <div class="grid-list ty-grid-vendors">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_companies']->value, 'scompanies', false, NULL, 'scomp', array (
));
$_smarty_tpl->tpl_vars['scompanies']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scompanies']->value) {
$_smarty_tpl->tpl_vars['scompanies']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scompanies']->value, 'company', false, NULL, 'scompanies', array (
));
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?><div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['company']->value) {
if ($_smarty_tpl->tpl_vars['company']->value['logos']) {
$_smarty_tpl->_assignInScope('show_logo', true);
} else {
$_smarty_tpl->_assignInScope('show_logo', false);
}
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['company']->value['company_id']);
$_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['company']->value['company_id']));
$_smarty_tpl->_subTemplateRender("tygh:common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->tpl_vars['company']->value,'show_links'=>true,'show_logo'=>$_smarty_tpl->tpl_vars['show_logo']->value,'show_location'=>$_smarty_tpl->tpl_vars['show_location']->value), 0, true);
?><div class="ty-grid-list__item"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:featured_vendors"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:featured_vendors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="ty-grid-list__company-logo"><?php $_smarty_tpl->_assignInScope('logo', "logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['logo']->value);?>
</div><?php $_smarty_tpl->_assignInScope('location', "location_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if ($_smarty_tpl->tpl_vars['show_location']->value && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['location']->value))) {?><div class="ty-grid-list__item-location"><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="company-location"><bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['location']->value);?>
</bdi></a></div><?php }
$_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value) && $_smarty_tpl->tpl_vars['show_rating']->value) {?><div class="grid-list__rating"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>
</div><?php }?><div class="ty-grid-list__group"><?php $_smarty_tpl->_assignInScope('vendor_rating', "vendor_rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['vendor_rating']->value) && $_smarty_tpl->tpl_vars['show_vendor_rating']->value) {?><div class="ty-grid-list__vendor_rating"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['vendor_rating']->value);?>
</div><?php }?><div class="ty-grid-list__total-products"><?php $_smarty_tpl->_assignInScope('products_count', "products_count_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['products_count']->value) && $_smarty_tpl->tpl_vars['show_products_count']->value) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['products_count']->value);
}?></div></div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:featured_vendors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/vendor_list_templates/featured_vendors.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/vendor_list_templates/featured_vendors.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_location', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['show_location'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y");
$_smarty_tpl->_assignInScope('show_rating', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['show_rating'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y");
$_smarty_tpl->_assignInScope('show_vendor_rating', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['show_vendor_rating'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y");
$_smarty_tpl->_assignInScope('show_products_count', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['show_products_count'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y");?>

<?php $_smarty_tpl->_assignInScope('columns', $_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns']);
$_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['items']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "5" ?? null : $tmp),'assign'=>"splitted_companies"),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "5" ?? null : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>


    <div class="grid-list ty-grid-vendors">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_companies']->value, 'scompanies', false, NULL, 'scomp', array (
));
$_smarty_tpl->tpl_vars['scompanies']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scompanies']->value) {
$_smarty_tpl->tpl_vars['scompanies']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scompanies']->value, 'company', false, NULL, 'scompanies', array (
));
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?><div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['company']->value) {
if ($_smarty_tpl->tpl_vars['company']->value['logos']) {
$_smarty_tpl->_assignInScope('show_logo', true);
} else {
$_smarty_tpl->_assignInScope('show_logo', false);
}
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['company']->value['company_id']);
$_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['company']->value['company_id']));
$_smarty_tpl->_subTemplateRender("tygh:common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->tpl_vars['company']->value,'show_links'=>true,'show_logo'=>$_smarty_tpl->tpl_vars['show_logo']->value,'show_location'=>$_smarty_tpl->tpl_vars['show_location']->value), 0, true);
?><div class="ty-grid-list__item"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:featured_vendors"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:featured_vendors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="ty-grid-list__company-logo"><?php $_smarty_tpl->_assignInScope('logo', "logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['logo']->value);?>
</div><?php $_smarty_tpl->_assignInScope('location', "location_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if ($_smarty_tpl->tpl_vars['show_location']->value && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['location']->value))) {?><div class="ty-grid-list__item-location"><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="company-location"><bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['location']->value);?>
</bdi></a></div><?php }
$_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value) && $_smarty_tpl->tpl_vars['show_rating']->value) {?><div class="grid-list__rating"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>
</div><?php }?><div class="ty-grid-list__group"><?php $_smarty_tpl->_assignInScope('vendor_rating', "vendor_rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['vendor_rating']->value) && $_smarty_tpl->tpl_vars['show_vendor_rating']->value) {?><div class="ty-grid-list__vendor_rating"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['vendor_rating']->value);?>
</div><?php }?><div class="ty-grid-list__total-products"><?php $_smarty_tpl->_assignInScope('products_count', "products_count_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['products_count']->value) && $_smarty_tpl->tpl_vars['show_products_count']->value) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['products_count']->value);
}?></div></div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:featured_vendors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}
