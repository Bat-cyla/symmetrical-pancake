<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:21:21
  from '/app/www/design/backend/templates/views/addons/components/detailed_page/tabs/addon_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac7ae1dbc2e1_84012112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '994ed0ace3a2abd372d11fe6ccdafe06ebe08ce1' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/detailed_page/tabs/addon_settings.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac7ae1dbc2e1_84012112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
?>
<div class="hidden" data-ca-addons="tabsSetting" id="content_settings">

    <div class="tabs cm-j-tabs <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['subsections']->value) == 1) {?>hidden<?php } else { ?>cm-track<?php }?>" data-ca-addons="tabsSettingNested" data-ca-tabs-input-name>
        <ul class="nav nav-tabs">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subsections']->value, 'subs', false, 'section');
$_smarty_tpl->tpl_vars['subs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['subs']->value) {
$_smarty_tpl->tpl_vars['subs']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('tab_id', ((string)$_smarty_tpl->tpl_vars['_addon']->value)."_".((string)$_smarty_tpl->tpl_vars['section']->value));?>
                <li class="cm-js <?php if ($_REQUEST['selected_sub_section'] === $_smarty_tpl->tpl_vars['tab_id']->value) {?>active<?php }?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
"><a><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subs']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_addon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
_form" id="update_addon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
_form" class=" form-edit form-horizontal" enctype="multipart/form-data">

            <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="selected_sub_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_sub_section'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="addon" value="<?php echo htmlspecialchars((string) $_REQUEST['addon'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="storefront_id" value="<?php echo htmlspecialchars((string) $_REQUEST['storefront_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_REQUEST['return_url']) {?>
                <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'field_item', false, 'section');
$_smarty_tpl->tpl_vars['field_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['field_item']->value) {
$_smarty_tpl->tpl_vars['field_item']->do_else = false;
?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "separate_section", null, null);?>
                    <div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" class="settings cm-hide-save-button">
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "header_first", null, null);?>false<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"settings.settings_section",'allow_global_individual_settings'=>true,'subsection'=>$_smarty_tpl->tpl_vars['field_item']->value,'section_name'=>$_smarty_tpl->tpl_vars['_addon']->value,'html_id_prefix'=>"addon_option",'html_name'=>"addon_data[options]",'class'=>"setting-wide"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"settings.settings_section",'allow_global_individual_settings'=>true,'subsection'=>$_smarty_tpl->tpl_vars['field_item']->value,'section_name'=>$_smarty_tpl->tpl_vars['_addon']->value,'html_id_prefix'=>"addon_option",'html_name'=>"addon_data[options]",'class'=>"setting-wide"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"settings.settings_section",'allow_global_individual_settings'=>true,'subsection'=>$_smarty_tpl->tpl_vars['field_item']->value,'section_name'=>$_smarty_tpl->tpl_vars['_addon']->value,'html_id_prefix'=>"addon_option",'html_name'=>"addon_data[options]",'class'=>"setting-wide"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php if ($_smarty_tpl->tpl_vars['subsections']->value[$_smarty_tpl->tpl_vars['section']->value]['type'] == "SEPARATE_TAB") {?>
                    <?php $_smarty_tpl->_assignInScope('sep_sections', ((string)$_smarty_tpl->tpl_vars['sep_sections']->value)." ".((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'separate_section')));?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'separate_section');?>

                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </form>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subsections']->value, 'subs', false, 'section');
$_smarty_tpl->tpl_vars['subs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['subs']->value) {
$_smarty_tpl->tpl_vars['subs']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['subsections']->value[$_smarty_tpl->tpl_vars['section']->value]['type'] == "SEPARATE_TAB") {?>
                <?php echo $_smarty_tpl->tpl_vars['sep_sections']->value;?>

            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons:addon_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons:addon_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons:addon_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

<!--content_settings--></div>
<?php }
}
