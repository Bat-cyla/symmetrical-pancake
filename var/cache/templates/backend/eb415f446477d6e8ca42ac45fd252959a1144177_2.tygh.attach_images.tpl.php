<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/common/attach_images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c1996f820_06370553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb415f446477d6e8ca42ac45fd252959a1144177' => 
    array (
      0 => '/app/www/design/backend/templates/common/attach_images.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:common/fileuploader.tpl' => 2,
    'tygh:components/append_language.tpl' => 1,
  ),
),false)) {
function content_66aa1c1996f820_06370553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_thumbnail_manual_loading','popup_larger_image','delete_image_pair','thumbnail','remove','no_image','alt_text','remove','no_image','alt_text'));
?>

<?php if (!defined("SMARTY_ATTACH_IMAGES_LOADED")) {
$_smarty_tpl->_assignInScope('tmp', define("SMARTY_ATTACH_IMAGES_LOADED",true));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.delete_image', function(r, p) {
        if (r.deleted == true) {
            $('#' + p.result_ids).closest('a').replaceWith('<div class="no-image"><span class="cs-icon glyph-image" title="' + _.tr('no_image') + '"></span></div>');
            $('a[data-ca-target-id=' + p.result_ids + ']').hide();
        }
    });

    $.ceEvent('on', 'ce.delete_image_pair', function(r, p) {
        if (r.deleted == true) {
            $('#' + p.result_ids).remove();
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if (!$_smarty_tpl->tpl_vars['original_image']->value) {?>
    <?php $_smarty_tpl->_assignInScope('thumbnail_width', "85");
}
$_smarty_tpl->_assignInScope('_plug', explode(".",''));
$_smarty_tpl->_assignInScope('key', (($tmp = $_smarty_tpl->tpl_vars['image_key']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp));
$_smarty_tpl->_assignInScope('object_id', (($tmp = $_smarty_tpl->tpl_vars['image_object_id']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp));
$_smarty_tpl->_assignInScope('name', (($tmp = $_smarty_tpl->tpl_vars['image_name']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('object_type', (($tmp = $_smarty_tpl->tpl_vars['image_object_type']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('type', (($tmp = $_smarty_tpl->tpl_vars['image_type']->value ?? null)===null||$tmp==='' ? "M" ?? null : $tmp));
$_smarty_tpl->_assignInScope('pair', (($tmp = $_smarty_tpl->tpl_vars['image_pair']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_plug']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('suffix', (($tmp = $_smarty_tpl->tpl_vars['image_suffix']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?> 
<input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_image_data<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][pair_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pair']->value['pair_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-image-field" />
<input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_image_data<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['type']->value ?? null)===null||$tmp==='' ? "M" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="cm-image-field" />
<input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_image_data<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-image-field" />

<div id="box_attach_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="attach-images">
    <?php if ($_smarty_tpl->tpl_vars['no_thumbnail']->value && !$_smarty_tpl->tpl_vars['pair']->value['icon']) {?>
        <span class="desc"><?php echo $_smarty_tpl->__("text_thumbnail_manual_loading",array("[id]"=>"sw_load_thumbnail_".((string)$_smarty_tpl->tpl_vars['name']->value).((string)$_smarty_tpl->tpl_vars['suffix']->value).((string)$_smarty_tpl->tpl_vars['key']->value),"[class]"=>"cm-combination"));?>
</span>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['hide_titles']->value) {?>
        <?php if (!'hide_desc') {?>
        <div class="desc">
            <span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['detailed_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("popup_larger_image") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->tpl_vars['detailed_text']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['detailed_text']->value, ENT_QUOTES, 'UTF-8');
}?>
            :</span>
        </div>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"attach_images:thumbnail"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"attach_images:thumbnail"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="upload-box clearfix <?php if ($_smarty_tpl->tpl_vars['no_thumbnail']->value && !$_smarty_tpl->tpl_vars['pair']->value['icon']) {?>hidden<?php }?>" id="load_thumbnail_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['delete_pair']->value && $_smarty_tpl->tpl_vars['pair']->value['pair_id']) {?>
            <div class="float-right">
                <a data-ca-target-id="box_attach_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url("image.delete_image_pair?pair_id=".((string)$_smarty_tpl->tpl_vars['pair']->value['pair_id'])."&object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)), ENT_QUOTES, 'UTF-8');?>
" class="cm-confirm cm-post cm-ajax cm-tooltip pull-right" data-ca-event="ce.delete_image_pair" title="<?php echo $_smarty_tpl->__("delete_image_pair");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove",'icon_text'=>''),$_smarty_tpl);?>
</a>
            </div>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_titles']->value) {?>
            <h5>
                <span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['icon_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("thumbnail") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['icon_text']->value) {?><span class="small-note"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon_text']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
            </h5>
        <?php }?>

        <div class="pull-left image-wrap">
            <?php if ($_smarty_tpl->tpl_vars['pair']->value['image_id']) {?>
            <?php if (!(fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['object_type']->value == "category")) {?>
                <a data-ca-target-id="image_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pair']->value['image_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url("image.delete_image?pair_id=".((string)$_smarty_tpl->tpl_vars['pair']->value['pair_id'])."&image_id=".((string)$_smarty_tpl->tpl_vars['pair']->value['image_id'])."&object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)), ENT_QUOTES, 'UTF-8');?>
" class="image-delete cm-confirm cm-post cm-ajax delete cm-delete-image-link cm-tooltip" data-ca-event="ce.delete_image" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove-sign",'icon_text'=>''),$_smarty_tpl);?>
</a>
            <?php }?>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['hide_images']->value) {?>
                <div class="image">
                    <?php if ($_smarty_tpl->tpl_vars['pair']->value['image_id']) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['pair']->value['icon'],'image_id'=>$_smarty_tpl->tpl_vars['pair']->value['image_id'],'image_width'=>85), 0, false);
?>
                    <?php } else { ?>
                        <div class="no-image"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-image",'title'=>$_smarty_tpl->__("no_image"),'icon_text'=>''),$_smarty_tpl);?>
</div>
                    <?php }?>
                </div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['hide_alt']->value) {?>
                <div class="image-alt clear">
                    <div class="input-prepend">
                    <span class="add-on label-info cm-tooltip cm-hide-with-inputs" title="<?php echo $_smarty_tpl->__("alt_text");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comment",'icon_text'=>''),$_smarty_tpl);?>
</span>
                    <input type="text" id="alt_icon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_image_data<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][image_alt]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pair']->value['icon']['alt'], ENT_QUOTES, 'UTF-8');?>
" class="cm-image-field" />
                    </div>
                </div>
            <?php }?>
        </div>
        <div class="image-upload cm-hide-with-inputs">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."_image_icon".((string)$_smarty_tpl->tpl_vars['suffix']->value)."[".((string)$_smarty_tpl->tpl_vars['key']->value)."]",'is_image'=>true), 0, false);
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"attach_images:options_for_icon"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"attach_images:options_for_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"attach_images:options_for_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"attach_images:thumbnail"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php if (!$_smarty_tpl->tpl_vars['no_detailed']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"attach_images:detailed"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"attach_images:detailed"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['detailed_title']->value) {?>
        <h5><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['detailed_title']->value, ENT_QUOTES, 'UTF-8');?>
</span></h5>
    <?php }?>
    <div class="upload-box clearfix">
        <div class="pull-left image-wrap">
            <?php if (!$_smarty_tpl->tpl_vars['hide_images']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['pair']->value['detailed_id']) {?>
                    <?php if (!(fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['object_type']->value == "category")) {?>
                        <a data-ca-target-id="image_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pair']->value['detailed_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url("image.delete_image?pair_id=".((string)$_smarty_tpl->tpl_vars['pair']->value['pair_id'])."&image_id=".((string)$_smarty_tpl->tpl_vars['pair']->value['detailed_id'])."&object_type=detailed"), ENT_QUOTES, 'UTF-8');?>
" class="image-delete cm-confirm cm-post cm-tooltip cm-ajax delete cm-delete-image-link" data-ca-event="ce.delete_image" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove-sign",'icon_text'=>''),$_smarty_tpl);?>
</a>
                    <?php }?>
                <?php }?>
                <div class="image">
                    <?php if ($_smarty_tpl->tpl_vars['pair']->value['detailed_id']) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['pair']->value['detailed'],'image_id'=>$_smarty_tpl->tpl_vars['pair']->value['detailed_id'],'image_width'=>85), 0, true);
?>
                    <?php } else { ?>
                        <div class="no-image"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-image",'title'=>$_smarty_tpl->__("no_image"),'icon_text'=>''),$_smarty_tpl);?>
</div>
                    <?php }?>
                </div>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['hide_alt']->value) {?>
                <div class="image-alt">
                    <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value,'simple_tooltip'=>true), 0, false);
$_smarty_tpl->assign('append_language', ob_get_clean());
?>
                    <?php $_smarty_tpl->_assignInScope('show_append_language', trim($_smarty_tpl->tpl_vars['append_language']->value) ? true : false);?>
                    <div class="input-prepend <?php if ($_smarty_tpl->tpl_vars['show_append_language']->value) {?>input-append input-group<?php }?>">
                        <span class="add-on label-info cm-tooltip cm-hide-with-inputs" title="<?php echo $_smarty_tpl->__("alt_text");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comment",'icon_text'=>''),$_smarty_tpl);?>
</span>
                        <input type="text" id="alt_det_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_image_data<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][detailed_alt]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pair']->value['detailed']['alt'], ENT_QUOTES, 'UTF-8');?>
" class="cm-image-field" />
                        <?php if ($_smarty_tpl->tpl_vars['show_append_language']->value) {?>
                            <?php echo $_smarty_tpl->tpl_vars['append_language']->value;?>

                        <?php }?>
                    </div>
                </div>
            <?php }?>
        </div>

        <div class="image-upload cm-hide-with-inputs">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."_image_detailed".((string)$_smarty_tpl->tpl_vars['suffix']->value)."[".((string)$_smarty_tpl->tpl_vars['key']->value)."]",'is_image'=>true), 0, true);
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"attach_images:options_for_detailed"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"attach_images:options_for_detailed"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"attach_images:options_for_detailed"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>

    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"attach_images:detailed"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
</div>
<?php }
}
