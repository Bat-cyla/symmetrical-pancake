<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:41
  from '/app/www/design/backend/templates/addons/yml_export/hooks/categories/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd9537659_71377494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f2467a50739e48f4b47dec28a48d2c9677c199c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/yml_export/hooks/categories/tabs_content.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/yml_export/common/yml_categories_selector.tpl' => 1,
  ),
),false)) {
function content_66ab5bd9537659_71377494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('yml2_offer_type','yml2_offer_feature_common_model','yml2_product_field_','yml2_product_field_','yml2_model','tt_addons_yml_export_hooks_products_detailed_content_post_yml2_model','yml2_offer_feature_common_typeprefix','yml2_product_field_','yml2_product_field_','yml2_type_prefix','tt_addons_yml_export_hooks_products_detailed_content_post_yml2_type_prefix'));
if (($_smarty_tpl->tpl_vars['category_data']->value)) {?>
    <div id="content_yml">
        <div id="yml2_addon" class="in collapse">

            <?php echo smarty_function_script(array('src'=>"js/addons/yml_export/yml_tab_categories.js"),$_smarty_tpl);?>


            <div class="control-group">
                <label for="yml2_offer_type" class="control-label"><?php echo $_smarty_tpl->__("yml2_offer_type");?>
:</label>
                <input id="yml2_parent_offer_val" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offer_type_parent_category']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                <input id="yml2_offer_type_val" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['yml2_offer_type'], ENT_QUOTES, 'UTF-8');?>
"/>
                <div class="controls">
                    <select name="category_data[yml2_offer_type]" id="yml2_offer_type">
                            <?php if (!empty($_smarty_tpl->tpl_vars['offer_type_parent_category']->value)) {?>
                                <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_offer_type'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.parent_category',array('[default]'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['offer_type_parent_name']->value)));?>
</option>
                            <?php }?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yml2_offer_types']->value, 'offer_name', false, 'offer_type');
$_smarty_tpl->tpl_vars['offer_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['offer_type']->value => $_smarty_tpl->tpl_vars['offer_name']->value) {
$_smarty_tpl->tpl_vars['offer_name']->do_else = false;
?>
                                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offer_type']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['yml2_offer_type'] == $_smarty_tpl->tpl_vars['offer_type']->value) {?>selected="selected"<?php }?>>
                                    <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['offer_name']->value);?>

                                </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>

            <div id="yml2_model_select_div" class="control-group yml_export">
                <label for="yml2_model_select" class="control-label "><?php echo $_smarty_tpl->__("yml2_offer_feature_common_model");?>
:</label>
                <?php if (!empty($_smarty_tpl->tpl_vars['yml2_parent_model_select']->value)) {?>
                    <input id="yml2_parent_model_category" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['yml2_parent_model_select']->value[0], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['yml2_parent_model_select']->value[1], ENT_QUOTES, 'UTF-8');?>
"/>
                <?php } else { ?>
                    <input id="yml2_parent_model_category" type="hidden" value=""/>
                <?php }?>
                <input id="yml2_model_category" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['yml2_model_category']->value, ENT_QUOTES, 'UTF-8');?>
"/>

                <div class="controls">
                    <select id="yml2_mode_select" name="category_data[yml2_model_select]">
                        <?php if (!empty($_smarty_tpl->tpl_vars['yml2_parent_model_select']->value)) {?>

                            <?php if ($_smarty_tpl->tpl_vars['yml2_parent_model_select']->value[0] == 'product') {?>
                                <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_model_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.parent_category',array('[default]'=>$_smarty_tpl->__("yml2_product_field_".((string)$_smarty_tpl->tpl_vars['yml2_parent_model_select']->value[1]))));?>
</option>
                            <?php } else { ?>
                                <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_model_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.parent_category',array('[default]'=>$_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['yml2_parent_model_select']->value[1]]['description']));?>
</option>
                            <?php }?>
                        <?php } elseif (!empty($_smarty_tpl->tpl_vars['category_data']->value['parent_id'])) {?>
                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_model_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.use_parent_category_value');?>
</option>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['yml2_model_select']->value['product_fields']))) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yml2_model_select']->value['product_fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                                <option value="product.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['yml2_model_select']->value['type'] == 'product' && $_smarty_tpl->tpl_vars['yml2_model_select']->value['value'] == $_smarty_tpl->tpl_vars['field']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_product_field_".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <option value="" disabled>---</option>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['yml2_model_select']->value['feature_types'])) && !in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],$_smarty_tpl->tpl_vars['yml2_model_select']->value['feature_types'])) {?>
                            <?php } else { ?>
                                <option value="feature.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['yml2_model_select']->value['type'] == 'feature' && $_smarty_tpl->tpl_vars['yml2_model_select']->value['value'] == $_smarty_tpl->tpl_vars['feature']->value['feature_id']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>

            <div id="yml2_model" class="control-group">
                <label for="yml2_model" class="control-label"><?php echo $_smarty_tpl->__("yml2_model");?>
:</label>
                <div class="controls">
                    <input type="text" name="category_data[yml2_model]" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['yml2_model'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" <?php if ((!empty($_smarty_tpl->tpl_vars['yml2_model_category']->value))) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['yml2_model_category']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/>
                    <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_yml_export_hooks_products_detailed_content_post_yml2_model");?>
</p>
                </div>
            </div>

            <div id="yml2_type_prefix_select_div" class="control-group yml_export">
                <label for="yml2_type_prefix_select" class="control-label "><?php echo $_smarty_tpl->__("yml2_offer_feature_common_typeprefix");?>
:</label>
                <?php if (!empty($_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value)) {?>
                    <input id="yml2_parent_type_prefix_select" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value[0], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value[1], ENT_QUOTES, 'UTF-8');?>
"/>
                <?php } else { ?>
                    <input id="yml2_parent_type_prefix_select" type="hidden" value=""/>
                <?php }?>

                <div class="controls">
                    <select id="yml2_type_prefix_select" name="category_data[yml2_type_prefix_select]">
                        <?php if (!empty($_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value)) {?>

                            <?php if ($_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value[0] == 'product') {?>
                                <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_type_prefix_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.parent_category',array('[default]'=>$_smarty_tpl->__("yml2_product_field_".((string)$_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value[1]))));?>
</option>
                            <?php } else { ?>
                                <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_type_prefix_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.parent_category',array('[default]'=>$_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value[1]]['description']));?>
</option>
                            <?php }?>
                        <?php } elseif (!empty($_smarty_tpl->tpl_vars['category_data']->value['parent_id'])) {?>
                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_type_prefix_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.use_parent_category_value');?>
</option>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['product_fields']))) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['product_fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                                <option value="product.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['type'] == 'product' && $_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['value'] == $_smarty_tpl->tpl_vars['field']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_product_field_".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <option value="" disabled>---</option>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['feature_types'])) && !in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],$_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['feature_types'])) {?>
                            <?php } else { ?>
                                <option value="feature.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['type'] == 'feature' && $_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['value'] == $_smarty_tpl->tpl_vars['feature']->value['feature_id']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>

            <div id="yml2_type_prefix"  class="control-group">
                <label for="yml2_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml2_type_prefix");?>
:</label>
                <div class="controls">
                    <input type="text" name="category_data[yml2_type_prefix]" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['yml2_type_prefix'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" <?php if ((!empty($_smarty_tpl->tpl_vars['yml2_type_prefix_category']->value))) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['yml2_type_prefix_category']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
                    <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_yml_export_hooks_products_detailed_content_post_yml2_type_prefix");?>
</p>
                </div>
            </div>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/yml_export/common/yml_categories_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"category_data[yml2_market_category]",'value'=>$_smarty_tpl->tpl_vars['category_data']->value['yml2_market_category']), 0, false);
?>
        </div>
    </div>
<?php }
}
}
