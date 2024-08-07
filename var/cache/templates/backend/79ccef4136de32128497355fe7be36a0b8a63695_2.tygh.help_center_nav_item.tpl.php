<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:01:25
  from '/app/www/design/backend/templates/addons/help_center/templates/help_center_nav_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab8725d0ff58_08942513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79ccef4136de32128497355fe7be36a0b8a63695' => 
    array (
      0 => '/app/www/design/backend/templates/addons/help_center/templates/help_center_nav_item.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab8725d0ff58_08942513 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php echo '<script'; ?>
 type="text/template" data-ca-help-center="navItem" data-no-defer="true" data-no-execute="§"
        ><li id="help_center_${data.id}_${data.suffix}" class="help-center-nav-item ${data.isShow ? 'active' : ''} ${data.isDisabled ? 'disabled' : ''} ${data.url ? '': 'cm-js'}">
            ${data.url
                ? `<a href="${data.url}" target="_blank" class="help-center-nav-item__btn help-center-nav-item__btn--link">`
                : `<button type="button" class="help-center-nav-item__btn
                    ${data.new ? 'help-center-icon-before help-center-nav-item__btn--new' : ''}
                    ${data.external ? 'help-center-icon help-center-nav-item__btn--external' : ''}
                " ${data.isDisabled ? 'data-ca-stop-event-propagation="true"' : ''}>`
            }
                <span class="cs-icon help-center-nav-item__icon ${data.icon ? data.icon : 'icon-file-text'}"></span>
                <span class="cs-icon help-center-nav-item__text"
                    data-ca-help-center-blocks-counter="${data.blocks_counter_text ? data.blocks_counter_text : ''}"
                >${data.name}</span>
            ${data.url
                ? '</a>'
                : '</button>'
            }
    </li><?php echo '</script'; ?>
>

<?php }
}
