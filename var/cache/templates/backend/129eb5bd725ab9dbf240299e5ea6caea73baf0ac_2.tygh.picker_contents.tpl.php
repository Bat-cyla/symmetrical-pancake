<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:30
  from '/app/www/design/backend/templates/pickers/categories/picker_contents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bce657e53_31164247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '129eb5bd725ab9dbf240299e5ea6caea73baf0ac' => 
    array (
      0 => '/app/www/design/backend/templates/pickers/categories/picker_contents.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/categories/components/categories_tree_simple.tpl' => 1,
    'tygh:buttons/add_close.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
  ),
),false)) {
function content_66ab5bce657e53_31164247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.to_relative_url.php','function'=>'smarty_modifier_to_relative_url',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_items_updated','tip.quick_select_and_close_category_selector','no_categories_available','manage_categories','choose'));
if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
    <?php $_smarty_tpl->_assignInScope('direction', "right");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('direction', "left");
}?>

<?php ob_start();
echo htmlspecialchars((string) rand(0,1024), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('form_id', "cat_form_".$_prefixVariable1);?>

<?php if (!$_REQUEST['extra']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    _.tr('text_items_updated', '<?php echo strtr((string)$_smarty_tpl->__("text_items_updated"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
    var display_type = '<?php echo strtr((string)$_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
    var selectedCategories = {};
    var isTristateCheckbox = '<?php echo htmlspecialchars((string) $_REQUEST['is_tristate_checkbox'], ENT_QUOTES, 'UTF-8');?>
';

    $.ceEvent('on', 'ce.formpost_categories_form', function(frm, elm) {
        var categories = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                if (display_type != 'radio') {
                    categories[id] = {
                        category: $('#category_' + id).text(),
                        path_items: ''
                    };
                    var parent = $(this).closest('.table-tree').parent().prev('.table-tree');
                    while (parent.length > 0) {
                        var path_id = $('.cm-item', parent).first().val();
                        if (path_id) {
                            var path_name = $('#category_' + path_id).text();
                            categories[id]['path_items'] =
                                '<a class="ty-breadcrumbs__a" target="_blank" href="<?php echo htmlspecialchars((string) fn_url("categories.update&category_id="), ENT_QUOTES, 'UTF-8');?>
'+path_id+'">'+path_name+'</a> / ' +
                                    categories[id]['path_items'];
                        }
                        parent = parent.parent().prev('.table-tree');
                    }
                }
                else {
                    categories[id] = $('#category_' + id).text()
                }
            });

            if (display_type != 'radio') {
                
                $.cePicker('add_js_item', frm.data('caResultId'), categories, 'c', {
                    '{category_id}': '%id',
                    '{category}': '%item.category',
                    '{path_items}': '%item.path_items'
                });
                
            } else {
                
                $.cePicker('add_js_item', frm.data('caResultId'), categories, 'c', {
                    '{category_id}': '%id',
                    '{category}': '%item'
                });
                
            }
        }

        if (!isTristateCheckbox) {
            //delete unselected categories
            var removableCategories = {};
            for (var catId in selectedCategories) {
                if (!(catId in categories) && $('#content_<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 #input_cat_' + catId).length) {
                    removableCategories[catId] = selectedCategories[catId];
                }
            }

            if (display_type != 'radio') {
                
                    $.cePicker('delete_js_items', frm.data('caResultId'), removableCategories, 'c');
                
            }
        } else {
            // for bulkedit category picker
            var isAddedCategories = $('#content_<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 input[type="checkbox"]:checked').length > 0;
            for (var catId in selectedCategories) {
                var $checkbox = $('#content_<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 #input_cat_' + catId);

                if ($checkbox.length) {
                    selectedCategories[catId] = {
                        checked: $checkbox.prop('checked'),
                        readonly: $checkbox.prop('readonly'),
                        indeterminate: $checkbox.prop('indeterminate')
                    }
                }
            }

            $.ceEvent('trigger', 'ce.formpost_categories_form_update', [frm.data('caResultId'), selectedCategories, isAddedCategories]);
        }


        if (display_type != 'radio') {
            $.ceNotification('show', {
                type: 'N',
                title: _.tr('notice'),
                message: _.tr('text_items_updated'),
                message_state: 'I'
            });
        }

        return false;
    });

    $('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
').on('click', '.cm-click-and-close', function (e) {
        // skip, if event path contains 'hide'-button
        let flag = false;
        $(e.originalEvent.path).each((i, elm) => {
            flag = flag || $(elm).is('[data-ca-categories-hide-target]');
        });
        if (flag) {
            return;
        }

        // skip, if content hidden or not loaded
        if ($(this).hasClass('cm-click-and-close-forced')) {
            let {
                caTargetCombinationContainer,
                caTargetCombinationExpander,
                caTargetCombinationFetchUrl,
                caTargetCombinationFetchId
            } = $(this).data();

            if (caTargetCombinationContainer) {
                // if content is not loaded
                if (!$(caTargetCombinationContainer).children().length) {
                    $.ceAjax(
                        'request',
                        caTargetCombinationFetchUrl,
                        { result_ids: caTargetCombinationFetchId }
                    );
                    return;
                } else {
                    // if content loaded, but container with content is hidden
                    if (!$(caTargetCombinationContainer).is(':visible')) {
                        return;
                    }
                }
            }
        }

        // process, if got metakeys or got forced flag
        if ((e.metaKey || e.ctrlKey) || $(this).hasClass('cm-click-and-close-forced')) {
            if ($(e.target).closest('[data-ca-categories-expand-target], [data-ca-categories-hide-target]').length) {
                return;
            }
            let { caTargetCheckbox } = $(this).data();

            if (caTargetCheckbox && !$(caTargetCheckbox).is(e.target)) {
                let _target = $(caTargetCheckbox);
                _target.prop('checked', !_target.prop('checked'));
            }

            setTimeout(() => $('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
 .cm-process-items.cm-dialog-closer').click(), 100);

            if (caTargetCheckbox && !$(caTargetCheckbox).is(e.target)) {
                e.preventDefault();
                return false;
            }
        }
    });

    $.ceEvent('on', 'ce.commoninit', function (context) {
        if (display_type !== 'radio' && context && $(context).find('.category-tree-wrapper').length) {
            selectCategories();

            if (isTristateCheckbox) {
                $(context).find('.cm-item').addClass('cm-tristate tristate-checkbox-cursor');
            }
        }
    });

    $.ceEvent('on', 'ce.dialog.before_open', function () {
        if (display_type !== 'radio') {
            selectCategories();
        }
    });

    function selectCategories () {
        var categoriesPickerValue;

        if (isTristateCheckbox) {
            // for bulkedit category picker
            var $container = $('.object-categories-add--bulk-edit');

            if ($container.length) {
                var categoriesPickerValue = $container.find(' .select2__category-status-checkbox:checked, .select2__category-status-checkbox:indeterminate').map(function () {
                    var $self = $(this);

                    return {
                        id: $self.data('caCategoryId'),
                        checked: $self.prop('checked'),
                        readonly: $self.prop('readonly'),
                        indeterminate: $self.prop('indeterminate')
                    }
                }).get();
            }
        } else if ($('[data-ca-object-picker-extended-picker-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
"]').length) {
            categoriesPickerValue = $('[data-ca-object-picker-extended-picker-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
"]').val();
        } else if ($('[data-ca-picker-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
"]').length) {
            // FIXME: Fix when object selector will replaced with object picker
            categoriesPickerValue = $('[data-ca-picker-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
"]').val();
        } else {
            categoriesPickerValue = $('#<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 .cm-picker-value').val();
        }

        if (categoriesPickerValue && categoriesPickerValue.length > 0) {
            categories = Array.isArray(categoriesPickerValue) ? categoriesPickerValue : categoriesPickerValue.split(',');

            $('#content_<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 [name="categories_form"] .cm-item').prop('checked', false);

            // for bulkedit category picker
            if (isTristateCheckbox) {
                $('#content_<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 [name="categories_form"] .cm-item').prop('readonly', false);
                $('#content_<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 [name="categories_form"] .cm-item').prop('indeterminate', false);

                for (var i in categories) {
                    var $checkbox = $('#content_<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 #input_cat_' + categories[i].id);

                    $checkbox.prop('checked', categories[i].checked)
                             .prop('readonly', categories[i].readonly)
                             .prop('indeterminate', categories[i].indeterminate);

                    selectedCategories[categories[i].id] = {};
                }
            } else {
                for (var i in categories) {
                    var $checkbox = $('#content_<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 #input_cat_' + categories[i]);

                    $checkbox.prop('checked', true);
                    selectedCategories[categories[i]] = categories[i];
                }
            }
        }

    }

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<form id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) fn_url(smarty_modifier_to_relative_url($_REQUEST['extra'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="categories_form">

<div class="items-container multi-level">
    <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/categories_tree_simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('header'=>true,'checkbox_name'=>(($tmp = $_REQUEST['checkbox_name'] ?? null)===null||$tmp==='' ? "categories_ids" ?? null : $tmp),'parent_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'display'=>$_REQUEST['display'],'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'radio_class'=>"hidden",'is_tristate_checkbox'=>(($tmp = $_REQUEST['is_tristate_checkbox'] ?? null)===null||$tmp==='' ? false ?? null : $tmp)), 0, false);
?>

        <?php if ($_REQUEST['display'] != "radio") {?>
            <br />
            <p class="text-center mobile-hide quick-select-protip"><?php echo $_smarty_tpl->__("tip.quick_select_and_close_category_selector");?>
</p>
        <?php }?>
    <?php } else { ?>
        <p class="no-items center">
            <?php echo $_smarty_tpl->__("no_categories_available");?>

            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url("categories.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("manage_categories");?>
.</a>
            <?php }?>
        </p>
    <?php }?>
</div>

<div class="buttons-container buttons-container--hidden-cancel">
    <?php if ($_REQUEST['display'] === "radio") {?>
        <?php $_smarty_tpl->_assignInScope('but_close_text', $_smarty_tpl->__("choose"));?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_meta'=>"cm-dialog-closer btn-primary cm-form-dialog-closer"), 0, false);
?>
    <?php }?>
</div>

</form>
<?php }
}
