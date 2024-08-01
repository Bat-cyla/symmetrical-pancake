<?php
/* Smarty version 4.1.1, created on 2024-07-31 15:37:34
  from '/app/www/design/themes/responsive/templates/common/company_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa300e7bfee7_29628992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a94ee24319a0d9d9e05853f8042e51ac4da5e481' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/common/company_data.tpl',
      1 => 1722424108,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66aa300e7bfee7_29628992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('more','product_s','more','product_s'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company']->value['company_id'] ?? null : $tmp));?>

<?php if (((isset($_smarty_tpl->tpl_vars['hide_links']->value)) && !(isset($_smarty_tpl->tpl_vars['show_links']->value)))) {?>
    <?php $_smarty_tpl->_assignInScope('show_links', !$_smarty_tpl->tpl_vars['hide_links']->value);
} elseif (((isset($_smarty_tpl->tpl_vars['show_links']->value)) && !(isset($_smarty_tpl->tpl_vars['hide_links']->value)))) {?>
    <?php $_smarty_tpl->_assignInScope('hide_links', !$_smarty_tpl->tpl_vars['show_links']->value);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_name']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['show_links']->value) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-title"><?php }
echo $_smarty_tpl->tpl_vars['company']->value['company'];
if (!$_smarty_tpl->tpl_vars['show_links']->value) {?></strong><?php } else { ?></a><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['show_trunc_name']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['show_links']->value) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company']->value['company']), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['company']->value['company'],45,"...",true);
if (!$_smarty_tpl->tpl_vars['show_links']->value) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "vendor_rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:vendor_rating"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:vendor_rating"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:vendor_rating"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "vendor_rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:data_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:data_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:data_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_descr']->value) {?>
        <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company']->value['company_description']),1024);
if ($_smarty_tpl->tpl_vars['show_links']->value && fn_strlen($_smarty_tpl->tpl_vars['company']->value['company_description']) > 1024) {?> <a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more");?>
</a><?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "products_count_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_products_count']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['show_links']->value) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-total-products"><?php }
echo $_smarty_tpl->tpl_vars['company']->value['products_count'];?>
  <?php echo $_smarty_tpl->__("product_s");
if (!$_smarty_tpl->tpl_vars['show_links']->value) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "products_count_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "address_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_address']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['company']->value['address'];?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "address_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "city_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_city']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['company']->value['city'];?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "city_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "country_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_country']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['company']->value['country'];?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "country_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "location_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_location']->value) {?>
        <?php echo trim($_smarty_tpl->tpl_vars['company']->value['city']);
if (trim($_smarty_tpl->tpl_vars['company']->value['city']) && trim($_smarty_tpl->tpl_vars['company']->value['country'])) {?>, <?php }
echo trim($_smarty_tpl->tpl_vars['company']->value['country']);?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "location_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "location_full_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_location_full']->value) {?>
        <?php echo trim($_smarty_tpl->tpl_vars['company']->value['city']);
if (trim($_smarty_tpl->tpl_vars['company']->value['city']) && trim($_smarty_tpl->tpl_vars['company']->value['state'])) {?>, <?php }?> <?php echo htmlspecialchars((string) fn_get_state_name($_smarty_tpl->tpl_vars['company']->value['state'],$_smarty_tpl->tpl_vars['company']->value['country']), ENT_QUOTES, 'UTF-8');?>
 <?php echo trim($_smarty_tpl->tpl_vars['company']->value['zipcode']);?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "location_full_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_logo']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_links']->value) {?><a class="ty-company-image-wrapper" href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['company']->value['logos']['theme']['image'],'image_width'=>"120",'class'=>"ty-company-image"), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['show_links']->value) {?></a><?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:company_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/company_data.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/company_data.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company']->value['company_id'] ?? null : $tmp));?>

<?php if (((isset($_smarty_tpl->tpl_vars['hide_links']->value)) && !(isset($_smarty_tpl->tpl_vars['show_links']->value)))) {?>
    <?php $_smarty_tpl->_assignInScope('show_links', !$_smarty_tpl->tpl_vars['hide_links']->value);
} elseif (((isset($_smarty_tpl->tpl_vars['show_links']->value)) && !(isset($_smarty_tpl->tpl_vars['hide_links']->value)))) {?>
    <?php $_smarty_tpl->_assignInScope('hide_links', !$_smarty_tpl->tpl_vars['show_links']->value);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_name']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['show_links']->value) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-title"><?php }
echo $_smarty_tpl->tpl_vars['company']->value['company'];
if (!$_smarty_tpl->tpl_vars['show_links']->value) {?></strong><?php } else { ?></a><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['show_trunc_name']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['show_links']->value) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company']->value['company']), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['company']->value['company'],45,"...",true);
if (!$_smarty_tpl->tpl_vars['show_links']->value) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "vendor_rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:vendor_rating"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:vendor_rating"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:vendor_rating"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "vendor_rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:data_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:data_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:data_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_descr']->value) {?>
        <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company']->value['company_description']),1024);
if ($_smarty_tpl->tpl_vars['show_links']->value && fn_strlen($_smarty_tpl->tpl_vars['company']->value['company_description']) > 1024) {?> <a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more");?>
</a><?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "products_count_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_products_count']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['show_links']->value) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-total-products"><?php }
echo $_smarty_tpl->tpl_vars['company']->value['products_count'];?>
  <?php echo $_smarty_tpl->__("product_s");
if (!$_smarty_tpl->tpl_vars['show_links']->value) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "products_count_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "address_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_address']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['company']->value['address'];?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "address_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "city_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_city']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['company']->value['city'];?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "city_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "country_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_country']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['company']->value['country'];?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "country_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "location_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_location']->value) {?>
        <?php echo trim($_smarty_tpl->tpl_vars['company']->value['city']);
if (trim($_smarty_tpl->tpl_vars['company']->value['city']) && trim($_smarty_tpl->tpl_vars['company']->value['country'])) {?>, <?php }
echo trim($_smarty_tpl->tpl_vars['company']->value['country']);?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "location_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "location_full_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_location_full']->value) {?>
        <?php echo trim($_smarty_tpl->tpl_vars['company']->value['city']);
if (trim($_smarty_tpl->tpl_vars['company']->value['city']) && trim($_smarty_tpl->tpl_vars['company']->value['state'])) {?>, <?php }?> <?php echo htmlspecialchars((string) fn_get_state_name($_smarty_tpl->tpl_vars['company']->value['state'],$_smarty_tpl->tpl_vars['company']->value['country']), ENT_QUOTES, 'UTF-8');?>
 <?php echo trim($_smarty_tpl->tpl_vars['company']->value['zipcode']);?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "location_full_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_logo']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_links']->value) {?><a class="ty-company-image-wrapper" href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['company']->value['logos']['theme']['image'],'image_width'=>"120",'class'=>"ty-company-image"), 0, true);
?>
        <?php if ($_smarty_tpl->tpl_vars['show_links']->value) {?></a><?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:company_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
