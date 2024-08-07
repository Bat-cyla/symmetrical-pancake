<?php
/* Smarty version 4.1.1, created on 2024-08-06 11:09:44
  from '/app/www/design/themes/responsive/templates/views/companies/catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b1da48e47a50_51394708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e95680eac3355fc1e9b2faff8fd845e625c7f9a' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/companies/catalog.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 4,
    'tygh:views/companies/components/sorting.tpl' => 2,
    'tygh:common/company_data.tpl' => 2,
  ),
),false)) {
function content_66b1da48e47a50_51394708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('all_vendors','no_items','all_vendors','no_items'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:catalog"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:catalog"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("all_vendors"));?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['companies']->value) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['company']->value['company_id']);
$_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));
$_smarty_tpl->_subTemplateRender("tygh:common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->tpl_vars['company']->value,'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_vendor_rating'=>true,'show_logo'=>true,'show_links'=>true), 0, true);
?>
<div class="ty-companies">
    <div class="ty-companies__img">
        <?php $_smarty_tpl->_assignInScope('capture_name', "logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>


        <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>

    </div>

    <div class="ty-companies__info">
        <?php $_smarty_tpl->_assignInScope('company_name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['company_name']->value);?>


        <?php $_smarty_tpl->_assignInScope('vendor_rating', "vendor_rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['vendor_rating']->value);?>

        <div>
            <?php $_smarty_tpl->_assignInScope('company_descr', "company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['company_descr']->value);?>

        </div>
    </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('extra_id'=>",vendors_map_container*",'full_render'=>true), 0, true);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:catalog"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/catalog.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/catalog.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:catalog"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:catalog"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("all_vendors"));?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['companies']->value) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['company']->value['company_id']);
$_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));
$_smarty_tpl->_subTemplateRender("tygh:common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->tpl_vars['company']->value,'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_vendor_rating'=>true,'show_logo'=>true,'show_links'=>true), 0, true);
?>
<div class="ty-companies">
    <div class="ty-companies__img">
        <?php $_smarty_tpl->_assignInScope('capture_name', "logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>


        <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>

    </div>

    <div class="ty-companies__info">
        <?php $_smarty_tpl->_assignInScope('company_name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['company_name']->value);?>


        <?php $_smarty_tpl->_assignInScope('vendor_rating', "vendor_rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['vendor_rating']->value);?>

        <div>
            <?php $_smarty_tpl->_assignInScope('company_descr', "company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['company_descr']->value);?>

        </div>
    </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('extra_id'=>",vendors_map_container*",'full_render'=>true), 0, true);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:catalog"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
