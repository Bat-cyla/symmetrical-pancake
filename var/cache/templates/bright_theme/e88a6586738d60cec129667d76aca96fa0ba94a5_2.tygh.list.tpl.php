<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:15:03
  from '/app/www/design/themes/responsive/templates/views/promotions/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49aa741e909_84856671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e88a6586738d60cec129667d76aca96fa0ba94a5' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/promotions/list.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66b49aa741e909_84856671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('avail_till','text_no_active_promotions','active_promotions','avail_till','text_no_active_promotions','active_promotions'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('images', array_filter(array_column($_smarty_tpl->tpl_vars['promotions']->value,"image")));
$_smarty_tpl->_assignInScope('image', end($_smarty_tpl->tpl_vars['images']->value));?>

<?php if (!empty($_smarty_tpl->tpl_vars['image']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('promotion_image_height', $_smarty_tpl->tpl_vars['image']->value['icon']['image_y']);?>
    <?php $_smarty_tpl->_assignInScope('promotion_image_width', $_smarty_tpl->tpl_vars['image']->value['icon']['image_x']);
}?>

<div class="grid-list ty-grid-promotions">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"promotions:promotion_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"promotions:promotion_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['promotions']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotions']->value, 'promotion', false, 'promotion_id');
$_smarty_tpl->tpl_vars['promotion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promotion_id']->value => $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"promotions:list_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"promotions:list_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['promotion_id']->value !== "chains") {?>
                    <div class="ty-column3">
                        <div class="ty-grid-list__item ty-grid-promotions__item">
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['image']) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['promotion']->value['image'],'image_id'=>"promotion_image",'class'=>"ty-grid-promotions__image"), 0, true);
?>
                            <?php }?>
                        <div class="ty-grid-promotions__content">
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                                <div class="ty-grid-list__available">
                                    <?php echo $_smarty_tpl->__("avail_till");?>
: <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                                </div>
                            <?php }?>
                            <?php if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['company_name']->value || $_smarty_tpl->tpl_vars['promotion']->value['company_id'])) {?>
                                    <div class="ty-grid-promotions__company">
                                        <a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-grid-promotions__company-link">
                                            <?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['promotion']->value['company_id']), ENT_QUOTES, 'UTF-8');
}?>
                                        </a>
                                    </div>
                                <?php }?>
                                <h2 class="ty-grid-promotions__header"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
                                <?php if ($_smarty_tpl->tpl_vars['promotion']->value['detailed_description'] || $_smarty_tpl->tpl_vars['promotion']->value['short_description']) {?>
                                    <div class="ty-wysiwyg-content ty-grid-promotions__description">
                                        <?php echo (($tmp = $_smarty_tpl->tpl_vars['promotion']->value['detailed_description'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['promotion']->value['short_description'] ?? null : $tmp);?>

                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"promotions:list_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <p class="ty-mlr-s ty-no-items"><?php echo $_smarty_tpl->__("text_no_active_promotions");?>
</p>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"promotions:promotion_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("active_promotions");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/promotions/list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/promotions/list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('images', array_filter(array_column($_smarty_tpl->tpl_vars['promotions']->value,"image")));
$_smarty_tpl->_assignInScope('image', end($_smarty_tpl->tpl_vars['images']->value));?>

<?php if (!empty($_smarty_tpl->tpl_vars['image']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('promotion_image_height', $_smarty_tpl->tpl_vars['image']->value['icon']['image_y']);?>
    <?php $_smarty_tpl->_assignInScope('promotion_image_width', $_smarty_tpl->tpl_vars['image']->value['icon']['image_x']);
}?>

<div class="grid-list ty-grid-promotions">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"promotions:promotion_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"promotions:promotion_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['promotions']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotions']->value, 'promotion', false, 'promotion_id');
$_smarty_tpl->tpl_vars['promotion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promotion_id']->value => $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"promotions:list_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"promotions:list_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['promotion_id']->value !== "chains") {?>
                    <div class="ty-column3">
                        <div class="ty-grid-list__item ty-grid-promotions__item">
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['image']) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['promotion']->value['image'],'image_id'=>"promotion_image",'class'=>"ty-grid-promotions__image"), 0, true);
?>
                            <?php }?>
                        <div class="ty-grid-promotions__content">
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                                <div class="ty-grid-list__available">
                                    <?php echo $_smarty_tpl->__("avail_till");?>
: <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                                </div>
                            <?php }?>
                            <?php if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['company_name']->value || $_smarty_tpl->tpl_vars['promotion']->value['company_id'])) {?>
                                    <div class="ty-grid-promotions__company">
                                        <a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-grid-promotions__company-link">
                                            <?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['promotion']->value['company_id']), ENT_QUOTES, 'UTF-8');
}?>
                                        </a>
                                    </div>
                                <?php }?>
                                <h2 class="ty-grid-promotions__header"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
                                <?php if ($_smarty_tpl->tpl_vars['promotion']->value['detailed_description'] || $_smarty_tpl->tpl_vars['promotion']->value['short_description']) {?>
                                    <div class="ty-wysiwyg-content ty-grid-promotions__description">
                                        <?php echo (($tmp = $_smarty_tpl->tpl_vars['promotion']->value['detailed_description'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['promotion']->value['short_description'] ?? null : $tmp);?>

                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"promotions:list_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <p class="ty-mlr-s ty-no-items"><?php echo $_smarty_tpl->__("text_no_active_promotions");?>
</p>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"promotions:promotion_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("active_promotions");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
