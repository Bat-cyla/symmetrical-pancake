<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:03
  from '/app/www/design/backend/templates/views/products/components/picker/item_extended.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e0e77079e7_64586922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2601e6d27ab6dc897ae4eea4ac9be721fee60c5' => 
    array (
      0 => '/app/www/design/backend/templates/views/products/components/picker/item_extended.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b5e0e77079e7_64586922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
$_smarty_tpl->_assignInScope('show_secondary', (($tmp = $_smarty_tpl->tpl_vars['show_secondary']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_simple_product', (($tmp = $_smarty_tpl->tpl_vars['show_simple_product']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_in_stock', (($tmp = $_smarty_tpl->tpl_vars['show_in_stock']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>


    ${data.image && data.image.image_path
    ? `<img src="${data.image.image_path}" width="${data.image.width}" height="${data.image.height}" alt="${data.image.alt}" class="object-picker__products-image"/>`
        : `<div class="no-image object-picker__products-image object-picker__products-image--no-image" style="width: ${data.image_width}px; height: ${data.image_height}px;"> <span class="cs-icon glyph-image"></span></div>`
    }

<div class="object-picker__products-content">
    <div class="object-picker__products-main">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:object_picker_products_main"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:object_picker_products_main"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="object-picker__products-name">
                <?php if ($_smarty_tpl->tpl_vars['type']->value === "result") {?>
                    <div class="object-picker__name-content">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 
                        
                            ${data.product ? data.product : data.text}
                         
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

                    </div>
                <?php } else { ?>
                    <a href="${data.url}" class="object-picker__products-name-content object-picker__products-name-content--link"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.product} <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                <?php }?>
            </div>

            <div class="object-picker__products-labels">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:object_picker_products_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:object_picker_products_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    
                        ${data.product_code
                            ? `<div class="object-picker__products-product-code"><span class="object-picker__products-product-code-label">${data.product_code}</span></div>`
                            : ``
                        }
                    
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:object_picker_products_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>

            
                ${data.company_name
                    ? `<div class="object-picker__products-company-name">${data.company_name}</div>`
                    : ``
                }
            
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:object_picker_products_main"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <?php if (!$_smarty_tpl->tpl_vars['show_simple_product']->value || $_smarty_tpl->tpl_vars['show_in_stock']->value || $_smarty_tpl->tpl_vars['show_secondary']->value) {?>
    <div class="object-picker__products-secondary">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:object_picker_products_secondary"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:object_picker_products_secondary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if (!$_smarty_tpl->tpl_vars['show_simple_product']->value) {?>
            
                ${data.price_formatted
                    ? `<div class="object-picker__products-price">${data.price_formatted}</div>`
                    : ``
                }
            
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['show_in_stock']->value) {?>
            
                ${data.amount_text
                    ? `<div class="object-picker__products-in-stock">${data.amount_text}</div>`
                    : ``
                }
            
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:object_picker_products_secondary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <?php }?>
</div><?php }
}
