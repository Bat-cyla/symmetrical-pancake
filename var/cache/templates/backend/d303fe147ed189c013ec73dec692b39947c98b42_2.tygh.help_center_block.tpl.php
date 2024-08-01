<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:08:56
  from '/app/www/design/backend/templates/addons/help_center/templates/help_center_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1b48249d40_85640871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd303fe147ed189c013ec73dec692b39947c98b42' => 
    array (
      0 => '/app/www/design/backend/templates/addons/help_center/templates/help_center_block.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66aa1b48249d40_85640871 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php echo '<script'; ?>
 type="text/template" data-ca-help-center="block" data-no-defer="true" data-no-execute="§"
        ><article class="help-center-block" ${data.id ? `id="help_center_${data.section_id}_${data.id}_${data.suffix}"` : ''}>
            ${data.url
                ? `<a href="${data.url}" ${data.new_tab ? 'target="_blank"' : ''} class="help-center-block__inner help-center-block__inner--link
                    ${data.youtube_id || data.image_url || data.status_text ? '' : 'help-center-icon help-center-block__inner--open-icon'}
                    ${data.external_click_id ? 'cm-external-click' : ''}
                    ${data.class ? data.class : ''}"
                    ${data.external_click_id ? 'data-ca-external-click-id="' + data.external_click_id + '"' : ''}
                >`
                : `<div class="help-center-block__inner ${data.class ? data.class : ''}">`
            }
                ${data.youtube_id
                    ? `<div class="help-center-block__video-wrapper">
                        <img src="${data.youtube_thumbnail_url}" class="help-center-block__video" alt="${data.name}"/>
                    </div>`
                    : ''
                }
                ${data.image_url
                    ? `<div class="help-center-block__image-wrapper">
                        <img src="${data.image_url}" class="help-center-block__image" alt="${data.name}"/>
                    </div>`
                    : ''
                }
                ${data.preheader ? `<div class="help-center-block__preheader">${data.preheader}</div>` : ''}
                ${data.name || data.status_text ? '<div class="help-center-block__title-wrapper">' : ''}
                    ${data.name ? `<h3 class="help-center-block__title ${data.new ? 'help-center-icon-before help-center-block__title--new' : ''} ${data.class ? data.class : ''}">${data.name}</h3>` : ''}
                    ${data.status_text ? `<div class="help-center-block__status help-center-block__status--${data.status}">${data.status_text}</div>` : ''}
                ${data.name || data.status_text ? '</div>' : ''}
                ${data.description ? `<div class="help-center-block__description">${data.description}</div>` : ''}
                ${data.html ? `<div class="help-center-block__html">${data.html}</div>` : ''}
                ${data.read_more ? `<div class="help-center-block__read-more">${data.read_more}</div>` : ''}
                ${data.action_url || data.action_secondary_url ? `<div class="help-center-block__actions">
                    ${data.action_url ? `<a href="${data.action_url}" class="help-center-btn help-center-btn--primary" target="_blank">${data.action_name}</a>`
                        : ''
                    }
                    ${data.action_secondary_url ? `<a href="${data.action_secondary_url}" class="help-center-btn" target="_blank">${data.action_secondary_name}</a>`
                        : ''
                    }
                </div>`
                    : ''
                }
            ${data.url
                ? `</a>`
                : '</div>'
            }
    </article><?php echo '</script'; ?>
>

<?php }
}
