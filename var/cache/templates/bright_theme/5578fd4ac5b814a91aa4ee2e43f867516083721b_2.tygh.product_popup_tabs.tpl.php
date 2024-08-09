<?php
/* Smarty version 4.1.1, created on 2024-08-08 13:33:03
  from '/app/www/design/themes/responsive/templates/views/tabs/components/product_popup_tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b49edfed3455_23100543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5578fd4ac5b814a91aa4ee2e43f867516083721b' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/tabs/components/product_popup_tabs.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b49edfed3455_23100543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.render_block.php','function'=>'smarty_function_render_block',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popupsbox", null, null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab', false, 'tab_id');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab_id']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup'] == "Y" && $_smarty_tpl->tpl_vars['tab']->value['status'] == "A") {?>
            <?php $_smarty_tpl->_assignInScope('product_tab_id', "product_tab_".((string)$_smarty_tpl->tpl_vars['tab']->value['tab_id']));?>
            <?php $_smarty_tpl->_assignInScope('tab_content_capture', "tab_content_capture_".((string)$_smarty_tpl->tpl_vars['tab_id']->value));?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value, null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_type'] == 'B') {?>
                    <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['tab']->value['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_type'] == 'T') {?>
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tab']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab_id'=>$_smarty_tpl->tpl_vars['product_tab_id']->value,'force_ajax'=>true), 0, true);
?>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value))) {?>
                <li class="ty-popup-tabs__item"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-popup ty-popup-tabs__icon"),$_smarty_tpl);?>
<a id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener" data-ca-target-id="content_block_popup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <div id="content_block_popup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
" data-ca-keep-in-place="true">
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value);?>

                </div>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popupsbox_content", null, null);?>
    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popupsbox'))) {?>
        <ul class="ty-popup-tabs">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popupsbox');?>

        </ul>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/tabs/components/product_popup_tabs.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/tabs/components/product_popup_tabs.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popupsbox", null, null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab', false, 'tab_id');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab_id']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup'] == "Y" && $_smarty_tpl->tpl_vars['tab']->value['status'] == "A") {?>
            <?php $_smarty_tpl->_assignInScope('product_tab_id', "product_tab_".((string)$_smarty_tpl->tpl_vars['tab']->value['tab_id']));?>
            <?php $_smarty_tpl->_assignInScope('tab_content_capture', "tab_content_capture_".((string)$_smarty_tpl->tpl_vars['tab_id']->value));?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value, null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_type'] == 'B') {?>
                    <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['tab']->value['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_type'] == 'T') {?>
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tab']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab_id'=>$_smarty_tpl->tpl_vars['product_tab_id']->value,'force_ajax'=>true), 0, true);
?>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value))) {?>
                <li class="ty-popup-tabs__item"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-popup ty-popup-tabs__icon"),$_smarty_tpl);?>
<a id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener" data-ca-target-id="content_block_popup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <div id="content_block_popup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
" data-ca-keep-in-place="true">
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value);?>

                </div>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popupsbox_content", null, null);?>
    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popupsbox'))) {?>
        <ul class="ty-popup-tabs">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popupsbox');?>

        </ul>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
