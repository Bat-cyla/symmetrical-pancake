<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/views/product_features/components/variants_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c19887a03_31933195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57a43be0304db251c8a13b87ae44b921eacfc3aa' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_features/components/variants_add.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/colorpicker.tpl' => 1,
    'tygh:buttons/multiple_buttons.tpl' => 1,
    'tygh:common/attach_images.tpl' => 1,
  ),
),false)) {
function content_66aa1c19887a03_31933195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','position_short','variant','type_to_create','information','image','description','page_title','url','meta_description','meta_keywords'));
echo smarty_function_script(array('src'=>"js/tygh/backend/variants_add.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('highlight_variants_add', (($tmp = $_smarty_tpl->tpl_vars['highlight_variants_add']->value ?? null)===null||$tmp==='' ? (!!$_smarty_tpl->tpl_vars['id']->value && ($_smarty_tpl->tpl_vars['num']->value !== 0)) ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_variants_add', (($tmp = $_smarty_tpl->tpl_vars['show_variants_add']->value ?? null)===null||$tmp==='' ? (!$_smarty_tpl->tpl_vars['id']->value || ($_smarty_tpl->tpl_vars['num']->value === 0)) ?? null : $tmp));
$_smarty_tpl->_assignInScope('var', array());
$_smarty_tpl->_assignInScope('num', ((($tmp = $_smarty_tpl->tpl_vars['num']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp))+1);?>

<tbody class="hover
        <?php if ($_smarty_tpl->tpl_vars['highlight_variants_add']->value) {?>well<?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['show_variants_add']->value) {?>hidden<?php }?>"
    data-ca-variants-list="containerAdd"
    id="box_add_variants_for_existing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <tr>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:variants_list_clone"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:variants_list_clone"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <td class="cm-extended-feature <?php if ($_smarty_tpl->tpl_vars['feature_type']->value != smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>hidden<?php }?>" data-th="&nbsp;">
                <span id="on_extra_feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combination-features-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="icon-caret-right"></span></span>
                <span id="off_extra_feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combination-features-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="icon-caret-down"></span></span>
            </td>
            <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                <input type="text" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="" size="4" class="input-micro" /></td>
            <td data-th="<?php echo $_smarty_tpl->__("variant");?>
">
                <div class="input-prepend input-prepend--full">
                    <div class="colorpicker--wrapper">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cp_name'=>"feature_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."][color]",'cp_id'=>"feature_value_color_picker_".((string)$_smarty_tpl->tpl_vars['num']->value),'cp_value'=>"#ffffff",'show_picker'=>true,'cp_meta'=>"js-feature-variant-conditional-column",'cp_attrs'=>array("data-ca-column-for-feature-style"=>smarty_modifier_enum("ProductFeatureStyles::COLOR"),"data-ca-column-for-filter-style"=>smarty_modifier_enum("ProductFilterStyles::COLOR"))), 0, false);
?>
                    </div>
                    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variant]" placeholder="<?php echo $_smarty_tpl->__("type_to_create");?>
" value="" class="input-full cm-feature-value <?php if ($_smarty_tpl->tpl_vars['feature_type']->value === smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {?>cm-value-decimal<?php }?>">
                </div>
            </td>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:variants_list_clone"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <td data-th="&nbsp;">&nbsp;</td>
        <td class="right" data-th="&nbsp;">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"add_variants_for_existing_".((string)$_smarty_tpl->tpl_vars['id']->value),'tag_level'=>2), 0, false);
?>
        </td>
    </tr>
    <tr <?php if ($_smarty_tpl->tpl_vars['feature_type']->value != smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>class="hidden"<?php }?> id="extra_feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
">
        <td colspan="6" data-th="<?php echo $_smarty_tpl->__("information");?>
">

            <div class="control-group">
                <label class="control-label" for="elm_image_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("image");?>
</label>
                <div class="controls">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"variant_image",'image_key'=>$_smarty_tpl->tpl_vars['num']->value,'hide_titles'=>true,'no_detailed'=>true,'image_object_type'=>"feature_variant",'image_type'=>"V",'image_pair'=>'','prefix'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
</label>
                <div class="controls">
                <textarea id="elm_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"></textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_page_title_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("page_title");?>
</label>
                <div class="controls">
                <input type="text" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][page_title]" id="elm_page_title_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" size="55" value="" class="input-large" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_url_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("url");?>
</label>
                <div class="controls">
                <input type="text" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][url]" id="elm_url_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" size="55" value="" class="input-large" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_meta_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("meta_description");?>
</label>
                <div class="controls">
                <textarea name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][meta_description]" id="elm_meta_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" cols="55" rows="2" class="input-textarea-long"></textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_meta_keywords_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("meta_keywords");?>
</label>
                <div class="controls">
                <textarea name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][meta_keywords]" id="elm_meta_keywords_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" cols="55" rows="2" class="input-textarea-long"></textarea>
                </div>
            </div>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:extended_feature"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:extended_feature"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:extended_feature"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </td>
    </tr>
</tbody>
<?php }
}
