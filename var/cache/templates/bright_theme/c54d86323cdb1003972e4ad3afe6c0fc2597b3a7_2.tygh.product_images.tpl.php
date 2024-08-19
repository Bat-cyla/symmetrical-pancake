<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:32
  from '/app/www/design/themes/responsive/templates/views/products/components/product_images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e10493aa70_79099538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54d86323cdb1003972e4ad3afe6c0fc2597b3a7' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/products/components/product_images.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 12,
    'tygh:common/previewer.tpl' => 2,
  ),
),false)) {
function content_66b5e10493aa70_79099538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('th_size', (($tmp = $_smarty_tpl->tpl_vars['thumbnails_size']->value ?? null)===null||$tmp==='' ? 35 ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'] || $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->_assignInScope('image_pair_var', $_smarty_tpl->tpl_vars['product']->value['main_pair']);
} elseif ($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']) {?>
    <?php $_smarty_tpl->_assignInScope('image_pair_var', reset($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']));
}?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']) {?>
    <?php $_smarty_tpl->_assignInScope('image_id', $_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('image_id', $_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id']);
}?>

<?php if (!$_smarty_tpl->tpl_vars['preview_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('preview_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
}?>

<div class="ty-product-img cm-preview-wrapper" id="product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value),'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'link_class'=>"cm-image-previewer",'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0, false);
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {?>
                <?php $_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['image_id']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['detailed_id']);?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'link_class'=>"cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value),'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0, true);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery'] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('image_counter', 0);?>
        <input type="hidden" name="no_cache" value="1" />
        <div class="ty-center ty-product-bigpicture-thumbnails_gallery"><div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block"><div class="ty-product-thumbnails owl-carousel cm-image-gallery" id="images_preview_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-gallery-item cm-thumbnails-mini active ty-product-thumbnails__item" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0, true);
?></a></div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
$_smarty_tpl->_assignInScope('image_counter', $_smarty_tpl->tpl_vars['image_counter']->value+1);
if ($_smarty_tpl->tpl_vars['image_pair']->value) {?><div class="cm-item-gallery ty-float-left"><?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['image_id']);
} else {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['detailed_id']);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0, true);
?></a></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div>
            </div>
        </div>
        
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('image_counter', 0);?>
        <div class="ty-product-thumbnails ty-center cm-image-gallery" id="images_preview_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_width']->value, ENT_QUOTES, 'UTF-8');?>
px;">
            <?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-thumbnails-mini active ty-product-thumbnails__item" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0, true);
?></a><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
$_smarty_tpl->_assignInScope('image_counter', $_smarty_tpl->tpl_vars['image_counter']->value+1);
if ($_smarty_tpl->tpl_vars['image_pair']->value) {
if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id'] == 0) {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['detailed_id']);
} else {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['image_id']);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-thumbnails-mini ty-product-thumbnails__item" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0, true);
?></a><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
        </div>
    <?php }
}?>


<?php $_smarty_tpl->_subTemplateRender("tygh:common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_images"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_images"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_images.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_images.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('th_size', (($tmp = $_smarty_tpl->tpl_vars['thumbnails_size']->value ?? null)===null||$tmp==='' ? 35 ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'] || $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->_assignInScope('image_pair_var', $_smarty_tpl->tpl_vars['product']->value['main_pair']);
} elseif ($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']) {?>
    <?php $_smarty_tpl->_assignInScope('image_pair_var', reset($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']));
}?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']) {?>
    <?php $_smarty_tpl->_assignInScope('image_id', $_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('image_id', $_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id']);
}?>

<?php if (!$_smarty_tpl->tpl_vars['preview_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('preview_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
}?>

<div class="ty-product-img cm-preview-wrapper" id="product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value),'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'link_class'=>"cm-image-previewer",'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0, true);
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {?>
                <?php $_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['image_id']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['detailed_id']);?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'link_class'=>"cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value),'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0, true);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery'] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('image_counter', 0);?>
        <input type="hidden" name="no_cache" value="1" />
        <div class="ty-center ty-product-bigpicture-thumbnails_gallery"><div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block"><div class="ty-product-thumbnails owl-carousel cm-image-gallery" id="images_preview_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-gallery-item cm-thumbnails-mini active ty-product-thumbnails__item" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0, true);
?></a></div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
$_smarty_tpl->_assignInScope('image_counter', $_smarty_tpl->tpl_vars['image_counter']->value+1);
if ($_smarty_tpl->tpl_vars['image_pair']->value) {?><div class="cm-item-gallery ty-float-left"><?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['image_id']);
} else {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['detailed_id']);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0, true);
?></a></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div>
            </div>
        </div>
        
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('image_counter', 0);?>
        <div class="ty-product-thumbnails ty-center cm-image-gallery" id="images_preview_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_width']->value, ENT_QUOTES, 'UTF-8');?>
px;">
            <?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-thumbnails-mini active ty-product-thumbnails__item" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0, true);
?></a><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
$_smarty_tpl->_assignInScope('image_counter', $_smarty_tpl->tpl_vars['image_counter']->value+1);
if ($_smarty_tpl->tpl_vars['image_pair']->value) {
if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id'] == 0) {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['detailed_id']);
} else {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['image_id']);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-thumbnails-mini ty-product-thumbnails__item" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0, true);
?></a><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
        </div>
    <?php }
}?>


<?php $_smarty_tpl->_subTemplateRender("tygh:common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_images"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_images"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
