<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:51
  from '/app/www/design/themes/responsive/templates/addons/ab__stickers/hooks/products/product_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec067f315162_99747823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bd5ba890ed513da6c083f612cb97ca8673c4a9a' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/ab__stickers/hooks/products/product_data.post.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec067f315162_99747823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('text_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::TEXT"));
$_smarty_tpl->_assignInScope('graphic_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::GRAPHIC"));
$_smarty_tpl->_assignInScope('pictogram_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::PICTOGRAM"));?>

<?php $_smarty_tpl->_assignInScope('controller_mode', ((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']));?>

<?php $_smarty_tpl->_assignInScope('skip', false);
if ($_smarty_tpl->tpl_vars['controller_mode']->value == "product_features.compare" && $_smarty_tpl->tpl_vars['block']->value['type'] == "main") {?>
    <?php $_smarty_tpl->_assignInScope('skip', true);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['skip']->value === false) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_stickers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_stickers_pre"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                <div class="ab-stickers-wrapper ab-hidden">
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                    <?php $_smarty_tpl->_assignInScope('pos', 'list');?>

                    <?php if ($_REQUEST['dispatch'] == "products.view" && $_smarty_tpl->tpl_vars['block']->value['type'] == "main") {?>
                        <?php $_smarty_tpl->_assignInScope('pos', "detailed_page");?>
                        <?php $_smarty_tpl->_assignInScope('key_1', "display_on_detailed_pages");?>
                        <?php $_smarty_tpl->_assignInScope('key_2', '');?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type'] != "main" && $_smarty_tpl->tpl_vars['block']->value['properties']['template']) {?>
                        <?php $_smarty_tpl->_assignInScope('key_1', "display_on_lists");?>
                        <?php $_smarty_tpl->_assignInScope('key_2', $_smarty_tpl->tpl_vars['block']->value['properties']['template']);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('key_1', "display_on_lists");?>
                        <?php $_smarty_tpl->_assignInScope('key_2', $_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value);?>
                    <?php }?>

                    <?php $_smarty_tpl->_assignInScope('current_position', "output_position_".((string)$_smarty_tpl->tpl_vars['pos']->value));?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['ab__stickers'], 'position');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
$__foreach_position_20_saved = $_smarty_tpl->tpl_vars['position'];
?>
                        <?php $_smarty_tpl->_assignInScope('pos_counter', 0);?>
                        <div class="ab-stickers-container ab-stickers-container__<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->key, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_output_type"], ENT_QUOTES, 'UTF-8');?>
-filling">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'sticker');
$_smarty_tpl->tpl_vars['sticker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sticker']->key => $_smarty_tpl->tpl_vars['sticker']->value) {
$_smarty_tpl->tpl_vars['sticker']->do_else = false;
$__foreach_sticker_21_saved = $_smarty_tpl->tpl_vars['sticker'];
?>
                                <?php $_smarty_tpl->_assignInScope('view_type', $_smarty_tpl->tpl_vars['sticker']->value[$_smarty_tpl->tpl_vars['key_1']->value]);?>
                                <?php if ($_smarty_tpl->tpl_vars['key_2']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('view_type', $_smarty_tpl->tpl_vars['view_type']->value[$_smarty_tpl->tpl_vars['key_2']->value]);?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['pos_counter']->value < $_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_max_count"]) {?>
                                    <?php $_smarty_tpl->_assignInScope('pos_counter', $_smarty_tpl->tpl_vars['pos_counter']->value+1);?>
                                    <div class="ab-sticker-<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['view_type']->value ?? null)===null||$tmp==='' ? "full_size" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['graphic_style']->value) {?> small-image-size-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size'], ENT_QUOTES, 'UTF-8');?>
 full-image-size-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size'], ENT_QUOTES, 'UTF-8');
}?>" data-ab-sticker-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->key, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['sticker']->value['placeholders']) {?> data-placeholders='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['placeholders'], ENT_QUOTES, 'UTF-8');?>
'<?php }?>></div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['sticker'] = $__foreach_sticker_21_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['position'] = $__foreach_position_20_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                </div>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('capture_name', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value, null, null);?>
    <?php if (trim(strip_tags($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, "ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)),"<div>"))) {?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, "ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('real_product_id', 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
    <?php $_smarty_tpl->_assignInScope('real_product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
} elseif ($_REQUEST['product_id']) {?>
    <?php $_smarty_tpl->_assignInScope('real_product_id', $_REQUEST['product_id']);
}?>

<?php if ($_smarty_tpl->tpl_vars['is_allow_add_common_products_to_cart_list']->value && $_smarty_tpl->tpl_vars['real_product_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('real_capture_name', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['real_product_id']->value));?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['real_capture_name']->value, null, null);?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/products/product_data.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/hooks/products/product_data.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('text_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::TEXT"));
$_smarty_tpl->_assignInScope('graphic_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::GRAPHIC"));
$_smarty_tpl->_assignInScope('pictogram_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::PICTOGRAM"));?>

<?php $_smarty_tpl->_assignInScope('controller_mode', ((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']));?>

<?php $_smarty_tpl->_assignInScope('skip', false);
if ($_smarty_tpl->tpl_vars['controller_mode']->value == "product_features.compare" && $_smarty_tpl->tpl_vars['block']->value['type'] == "main") {?>
    <?php $_smarty_tpl->_assignInScope('skip', true);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['skip']->value === false) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_stickers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_stickers_pre"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                <div class="ab-stickers-wrapper ab-hidden">
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                    <?php $_smarty_tpl->_assignInScope('pos', 'list');?>

                    <?php if ($_REQUEST['dispatch'] == "products.view" && $_smarty_tpl->tpl_vars['block']->value['type'] == "main") {?>
                        <?php $_smarty_tpl->_assignInScope('pos', "detailed_page");?>
                        <?php $_smarty_tpl->_assignInScope('key_1', "display_on_detailed_pages");?>
                        <?php $_smarty_tpl->_assignInScope('key_2', '');?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type'] != "main" && $_smarty_tpl->tpl_vars['block']->value['properties']['template']) {?>
                        <?php $_smarty_tpl->_assignInScope('key_1', "display_on_lists");?>
                        <?php $_smarty_tpl->_assignInScope('key_2', $_smarty_tpl->tpl_vars['block']->value['properties']['template']);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('key_1', "display_on_lists");?>
                        <?php $_smarty_tpl->_assignInScope('key_2', $_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value);?>
                    <?php }?>

                    <?php $_smarty_tpl->_assignInScope('current_position', "output_position_".((string)$_smarty_tpl->tpl_vars['pos']->value));?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['ab__stickers'], 'position');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
$__foreach_position_22_saved = $_smarty_tpl->tpl_vars['position'];
?>
                        <?php $_smarty_tpl->_assignInScope('pos_counter', 0);?>
                        <div class="ab-stickers-container ab-stickers-container__<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->key, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_output_type"], ENT_QUOTES, 'UTF-8');?>
-filling">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'sticker');
$_smarty_tpl->tpl_vars['sticker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sticker']->key => $_smarty_tpl->tpl_vars['sticker']->value) {
$_smarty_tpl->tpl_vars['sticker']->do_else = false;
$__foreach_sticker_23_saved = $_smarty_tpl->tpl_vars['sticker'];
?>
                                <?php $_smarty_tpl->_assignInScope('view_type', $_smarty_tpl->tpl_vars['sticker']->value[$_smarty_tpl->tpl_vars['key_1']->value]);?>
                                <?php if ($_smarty_tpl->tpl_vars['key_2']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('view_type', $_smarty_tpl->tpl_vars['view_type']->value[$_smarty_tpl->tpl_vars['key_2']->value]);?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['pos_counter']->value < $_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_max_count"]) {?>
                                    <?php $_smarty_tpl->_assignInScope('pos_counter', $_smarty_tpl->tpl_vars['pos_counter']->value+1);?>
                                    <div class="ab-sticker-<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['view_type']->value ?? null)===null||$tmp==='' ? "full_size" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['graphic_style']->value) {?> small-image-size-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size'], ENT_QUOTES, 'UTF-8');?>
 full-image-size-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size'], ENT_QUOTES, 'UTF-8');
}?>" data-ab-sticker-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->key, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['sticker']->value['placeholders']) {?> data-placeholders='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['placeholders'], ENT_QUOTES, 'UTF-8');?>
'<?php }?>></div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['sticker'] = $__foreach_sticker_23_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['position'] = $__foreach_position_22_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                </div>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('capture_name', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value, null, null);?>
    <?php if (trim(strip_tags($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, "ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)),"<div>"))) {?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, "ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('real_product_id', 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
    <?php $_smarty_tpl->_assignInScope('real_product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
} elseif ($_REQUEST['product_id']) {?>
    <?php $_smarty_tpl->_assignInScope('real_product_id', $_REQUEST['product_id']);
}?>

<?php if ($_smarty_tpl->tpl_vars['is_allow_add_common_products_to_cart_list']->value && $_smarty_tpl->tpl_vars['real_product_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('real_capture_name', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['real_product_id']->value));?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['real_capture_name']->value, null, null);?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
}
