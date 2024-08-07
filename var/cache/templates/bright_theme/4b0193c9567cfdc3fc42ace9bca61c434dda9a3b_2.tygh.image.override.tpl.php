<?php
/* Smarty version 4.1.1, created on 2024-08-02 10:12:27
  from '/app/www/design/themes/responsive/templates/addons/cp_addons_manager/hooks/common/image.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac86db35b572_04352447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b0193c9567cfdc3fc42ace9bca61c434dda9a3b' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_addons_manager/hooks/common/image.override.tpl',
      1 => 1722517426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac86db35b572_04352447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_image','no_image'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (fn_cp_am_check_template("common:image.override","hooks")) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"common:image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cp_img_class", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cp_image:img_class"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cp_image:img_class"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"cp_image:img_class"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cp_img_extra", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cp_image:img_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cp_image:img_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"cp_image:img_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cp_img_main", null, null);?>
    <?php if (!$_smarty_tpl->tpl_vars['cp_am_new_img']->value) {?>
        <img class="ty-pict <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['valign']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value && !$_smarty_tpl->tpl_vars['no_lazyOwl']->value) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>ty-spinner<?php }?> cm-image <?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cp_img_class'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['obj_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) {?>id="det_img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>data-ca-image-path="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cp_image:img_src"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cp_image:img_src"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>data-<?php }?>src="<?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/spacer.gif<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');
}?>"<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cp_image:img_src"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <?php if ($_smarty_tpl->tpl_vars['image_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo fn_cp_am_render_tag_attrs($_smarty_tpl->tpl_vars['image_additional_attrs']->value);?>
 <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cp_img_extra');?>
 />
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('image_attributes', (($tmp = $_smarty_tpl->tpl_vars['image_additional_attrs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
        <?php if ($_smarty_tpl->tpl_vars['obj_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['id'] = "det_img_".((string)$_smarty_tpl->tpl_vars['obj_id']->value);
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['image_data']->value['width'] && !$_smarty_tpl->tpl_vars['image_attributes']->value['width']) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['width'] = $_smarty_tpl->tpl_vars['image_data']->value['width'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['image_data']->value['height'] && !$_smarty_tpl->tpl_vars['image_attributes']->value['height']) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['height'] = $_smarty_tpl->tpl_vars['image_data']->value['height'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-image-path"] = $_smarty_tpl->tpl_vars['image_data']->value['image_path'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>
            <?php $_smarty_tpl->_assignInScope('image_initial_src', ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/icons/spacer.gif");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('image_initial_src', $_smarty_tpl->tpl_vars['image_data']->value['image_path']);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-src"] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php } else { ?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['src'] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['image_onclick']->value) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['onclick'] = $_smarty_tpl->tpl_vars['image_onclick']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <img class="ty-pict <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['valign']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value && !$_smarty_tpl->tpl_vars['no_lazyOwl']->value) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>ty-spinner<?php }?> cm-image <?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cp_img_class'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['obj_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) {?>id="det_img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>data-ca-image-path="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cp_image:img_src"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cp_image:img_src"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>data-<?php }?>src="<?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/spacer.gif<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');
}?>"<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cp_image:img_src"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <?php if ($_smarty_tpl->tpl_vars['image_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes']->value);?>
 <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cp_img_extra');?>
 />
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?>
    <a id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'] && $_smarty_tpl->tpl_vars['image_id']->value) {?>data-ca-image-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>cm-previewer ty-previewer<?php }?>" data-ca-image-width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images']->value['detailed']['image_x'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images']->value['detailed']['image_y'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'UTF-8');?>
" <?php echo fn_cp_am_render_tag_attrs($_smarty_tpl->tpl_vars['image_link_additional_attrs']->value);
}?>>
<?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cp_image:img_main"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cp_image:img_main"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cp_img_main');?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cp_image:img_main"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?>
            <svg class="ty-pict__container" aria-hidden="true" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" viewBox="0 0 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" style="max-height: 100%; max-width: 100%; position: absolute; top: 0; left: 50%; transform: translateX(-50%); z-index: -1;">
                <rect fill="transparent" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
"></rect>
            </svg>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['show_no_image']->value) {?>
    <span class="ty-no-image" style="height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; "><i class="ty-no-image__icon ty-icon-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></span>
<?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['images']->value['detailed_id']) {?>
        <span class="ty-previewer__icon hidden-phone"></span>
    <?php }?>
</a>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"common:image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_addons_manager/hooks/common/image.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_addons_manager/hooks/common/image.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (fn_cp_am_check_template("common:image.override","hooks")) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"common:image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cp_img_class", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cp_image:img_class"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cp_image:img_class"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"cp_image:img_class"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cp_img_extra", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cp_image:img_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cp_image:img_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"cp_image:img_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cp_img_main", null, null);?>
    <?php if (!$_smarty_tpl->tpl_vars['cp_am_new_img']->value) {?>
        <img class="ty-pict <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['valign']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value && !$_smarty_tpl->tpl_vars['no_lazyOwl']->value) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>ty-spinner<?php }?> cm-image <?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cp_img_class'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['obj_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) {?>id="det_img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>data-ca-image-path="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cp_image:img_src"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cp_image:img_src"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>data-<?php }?>src="<?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/spacer.gif<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');
}?>"<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cp_image:img_src"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <?php if ($_smarty_tpl->tpl_vars['image_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo fn_cp_am_render_tag_attrs($_smarty_tpl->tpl_vars['image_additional_attrs']->value);?>
 <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cp_img_extra');?>
 />
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('image_attributes', (($tmp = $_smarty_tpl->tpl_vars['image_additional_attrs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
        <?php if ($_smarty_tpl->tpl_vars['obj_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['id'] = "det_img_".((string)$_smarty_tpl->tpl_vars['obj_id']->value);
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['image_data']->value['width'] && !$_smarty_tpl->tpl_vars['image_attributes']->value['width']) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['width'] = $_smarty_tpl->tpl_vars['image_data']->value['width'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['image_data']->value['height'] && !$_smarty_tpl->tpl_vars['image_attributes']->value['height']) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['height'] = $_smarty_tpl->tpl_vars['image_data']->value['height'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-image-path"] = $_smarty_tpl->tpl_vars['image_data']->value['image_path'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>
            <?php $_smarty_tpl->_assignInScope('image_initial_src', ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/icons/spacer.gif");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('image_initial_src', $_smarty_tpl->tpl_vars['image_data']->value['image_path']);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-src"] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php } else { ?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['src'] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['image_onclick']->value) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['onclick'] = $_smarty_tpl->tpl_vars['image_onclick']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);?>
        <?php }?>
        <img class="ty-pict <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['valign']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value && !$_smarty_tpl->tpl_vars['no_lazyOwl']->value) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>ty-spinner<?php }?> cm-image <?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cp_img_class'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['obj_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) {?>id="det_img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>data-ca-image-path="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cp_image:img_src"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cp_image:img_src"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>data-<?php }?>src="<?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/spacer.gif<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');
}?>"<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cp_image:img_src"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <?php if ($_smarty_tpl->tpl_vars['image_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes']->value);?>
 <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cp_img_extra');?>
 />
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?>
    <a id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'] && $_smarty_tpl->tpl_vars['image_id']->value) {?>data-ca-image-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>cm-previewer ty-previewer<?php }?>" data-ca-image-width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images']->value['detailed']['image_x'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images']->value['detailed']['image_y'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'UTF-8');?>
" <?php echo fn_cp_am_render_tag_attrs($_smarty_tpl->tpl_vars['image_link_additional_attrs']->value);
}?>>
<?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cp_image:img_main"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cp_image:img_main"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cp_img_main');?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cp_image:img_main"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?>
            <svg class="ty-pict__container" aria-hidden="true" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" viewBox="0 0 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" style="max-height: 100%; max-width: 100%; position: absolute; top: 0; left: 50%; transform: translateX(-50%); z-index: -1;">
                <rect fill="transparent" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
"></rect>
            </svg>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['show_no_image']->value) {?>
    <span class="ty-no-image" style="height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; "><i class="ty-no-image__icon ty-icon-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></span>
<?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['images']->value['detailed_id']) {?>
        <span class="ty-previewer__icon hidden-phone"></span>
    <?php }?>
</a>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"common:image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
