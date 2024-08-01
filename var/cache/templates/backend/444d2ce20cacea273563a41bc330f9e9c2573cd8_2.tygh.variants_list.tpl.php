<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/views/product_features/components/variants_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c197f4095_65558885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '444d2ce20cacea273563a41bc330f9e9c2573cd8' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_features/components/variants_list.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 3,
    'tygh:views/product_features/components/variants_add.tpl' => 1,
    'tygh:common/colorpicker.tpl' => 1,
    'tygh:buttons/multiple_buttons.tpl' => 1,
    'tygh:common/attach_images.tpl' => 1,
  ),
),false)) {
function content_66aa1c197f4095_65558885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_variant','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','position_short','variant','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','position_short','variant','information','image','description','page_title','url','meta_description','meta_keywords'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "control_toolbar", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value && !fn_check_form_permissions('') && $_smarty_tpl->tpl_vars['allow_save']->value) {?>
        <div class="control-toolbar cm-toggle-button">
            <div class="control-toolbar__btns">
                <div class="control-toolbar__btns-right">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"button",'text'=>$_smarty_tpl->__("add_variant"),'icon_first'=>true,'icon'=>"icon-plus icon__open-rotate",'class'=>"btn variants-list__btn-add",'data'=>array("data-ca-variants-list"=>"btnAdd","data-ca-variants-list-is-show-add-variants"=>"false")), true);?>

                </div>
            </div>
        </div>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (is_array($_smarty_tpl->tpl_vars['feature_variants']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"content_tab_feature_variants_".((string)$_smarty_tpl->tpl_vars['id']->value),'pagination_class'=>$_smarty_tpl->tpl_vars['hide_inputs_class']->value,'extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'control_toolbar')), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>"content_tab_feature_variants_".((string)$_smarty_tpl->tpl_vars['id']->value),'pagination_class'=>$_smarty_tpl->tpl_vars['hide_inputs_class']->value,'extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'control_toolbar')), 0, true);
?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('variants_ids', array_keys($_smarty_tpl->tpl_vars['feature_variants']->value));
}?>

<?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'control_toolbar')) && !$_smarty_tpl->tpl_vars['show_pagination_open']->value && $_smarty_tpl->tpl_vars['feature_variants']->value) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'control_toolbar');?>

<?php }?>

    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['variants_ids']->value) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['variants_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" name="feature_data[original_var_ids]">
    <?php }?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive table--well" width="100%">
        <thead>
        <tr class="cm-first-sibling">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:variants_list_head"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:variants_list_head"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <th class="cm-extended-feature <?php if ($_smarty_tpl->tpl_vars['feature_type']->value != smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>hidden<?php }?>">
                    <div name="plus_minus" id="on_st_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combinations-features-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
 icon-caret-right"></div><div name="minus_plus" id="off_st_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations-features-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
 icon-caret-down"></div>
                </th>
                <th width="5%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                <th width="50%"><?php echo $_smarty_tpl->__("variant");?>
</th>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:variants_list_head"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        </thead>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_add.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature_type'=>$_smarty_tpl->tpl_vars['feature_type']->value,'id'=>$_smarty_tpl->tpl_vars['id']->value,'num'=>smarty_modifier_count($_smarty_tpl->tpl_vars['feature_variants']->value)), 0, false);
?>

        <tbody class="hover" id="box_feature_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature_variants']->value, 'var', false, NULL, 'fe_f', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fe_f']->value['iteration']++;
?>
        <?php $_smarty_tpl->_assignInScope('num', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_fe_f']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fe_f']->value['iteration'] : null));?>
        <tr>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:variants_list_body"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:variants_list_body"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <td width="2%" class="cm-extended-feature <?php if ($_smarty_tpl->tpl_vars['feature_type']->value != smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>hidden<?php }?>" data-th="&nbsp;">
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
                <td width="5%" data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                    <input type="hidden" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variant_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="4" class="input-micro input-hidden"/></td>
                <td data-th="<?php echo $_smarty_tpl->__("variant");?>
">
                    <div class="input-prepend input-prepend--full">
                        <div class="colorpicker--wrapper">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cp_name'=>"feature_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."][color]",'cp_id'=>"feature_value_color_picker_".((string)$_smarty_tpl->tpl_vars['num']->value),'cp_value'=>$_smarty_tpl->tpl_vars['var']->value['color'],'show_picker'=>true,'cp_meta'=>"js-feature-variant-conditional-column colorpicker--hidden",'cp_attrs'=>array("data-ca-column-for-feature-style"=>smarty_modifier_enum("ProductFeatureStyles::COLOR"),"data-ca-column-for-filter-style"=>smarty_modifier_enum("ProductFilterStyles::COLOR"))), 0, true);
?>
                        </div>
                        <input type="text" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variant]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden cm-feature-value product-feature__input-variant <?php if ($_smarty_tpl->tpl_vars['feature_type']->value == smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {?>cm-value-decimal<?php }?>">
                    </div>
                </td>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:variants_list_body"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <td data-th="&nbsp;">&nbsp;</td>
            <td class="right nowrap" data-th="&nbsp;">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"feature_variants_".((string)$_smarty_tpl->tpl_vars['var']->value['variant_id']),'tag_level'=>"3",'only_delete'=>"Y"), 0, true);
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
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"variant_image",'image_key'=>$_smarty_tpl->tpl_vars['num']->value,'hide_titles'=>true,'no_detailed'=>true,'image_object_type'=>"feature_variant",'image_type'=>"V",'image_pair'=>$_smarty_tpl->tpl_vars['var']->value['image_pair'],'prefix'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="elm_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
</label>
                    <div class="controls">
                    <!--processForm-->
                    <textarea id="elm_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
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
" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['page_title'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
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
" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
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
" cols="55" rows="2" class="input-textarea-long"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['meta_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
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
" cols="55" rows="2" class="input-textarea-long"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['meta_keywords'], ENT_QUOTES, 'UTF-8');?>
</textarea>
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
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
        </table>
    </div>
<?php if (is_array($_smarty_tpl->tpl_vars['feature_variants']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"content_tab_feature_variants_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0, true);
}
}
}
