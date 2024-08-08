<?php
/* Smarty version 4.1.1, created on 2024-08-08 08:43:24
  from '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b45afcb58b42_55325674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '780b37c9aaace1e866c46447cbbf9eb3585adedd' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_addons_manager/views/cp_addons_manager/all.tpl',
      1 => 1722517426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/cp_addons_manager/views/cp_addons_manager/components/release_info.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66b45afcb58b42_55325674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('cp_go_to_cartpower','cp_display_avail_addons','cp_avail_for_store','cp_not_avail_for_store','free','cp_receive','cp_am_buy','cp_am_documentation','cp_ask_question','cp_view_demo','no_data','cart_power','cp_all_addons'));
echo smarty_function_script(array('src'=>"js/addons/cp_addons_manager/previewers/magnific.previewer.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
<div class="cp-all-addons" id="cp_all_addons_reload">
    <?php $_smarty_tpl->_assignInScope('c_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);?>

    <?php if ($_smarty_tpl->tpl_vars['addon_sections']->value) {?>
    <div class="cp-addon-sections-wrap">
        <div class="cp-addon-section-items">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon_sections']->value, 'section', false, 'section_key');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section_key']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('section_selected', false);?>
                <?php if ($_REQUEST['section'] == $_smarty_tpl->tpl_vars['section_key']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('section_selected', true);?>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['section_selected']->value) {?>
                    <a class="cp-wrap-link" href="<?php echo htmlspecialchars((string) fn_query_remove($_smarty_tpl->tpl_vars['c_url']->value,"section"), ENT_QUOTES, 'UTF-8');?>
&section=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php }?>
                <div class="cp-addon-section-item <?php if ($_smarty_tpl->tpl_vars['section_selected']->value) {?>cp-selected<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['section_selected']->value) {?>
                         <a class="cp-clear-section" href="<?php echo htmlspecialchars((string) fn_query_remove($_smarty_tpl->tpl_vars['c_url']->value,"section"), ENT_QUOTES, 'UTF-8');?>
">
                            <i class="cp-am-icon-fail"></i>
                         </a>
                    <?php }?>
                    <div class="cp-addon-section-icon">
                        <?php if ($_smarty_tpl->tpl_vars['section']->value['image']) {?>
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value['image'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>
                    </div>
                    <div class="cp-addon-section-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
                </div>
                <?php if (!$_smarty_tpl->tpl_vars['section_selected']->value) {?>
                    </a>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <?php }?>

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="addons_form">
        <div class="cp-addons-top-wrap">
            <a href="<?php echo htmlspecialchars((string) (defined('CP_ADDONS_ENDPOINT') ? constant('CP_ADDONS_ENDPOINT') : null), ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="cp-store-link">
                <?php echo $_smarty_tpl->__("cp_go_to_cartpower");?>

            </a>
            <div class="cp-list-changer-wrap">
                <?php if ($_REQUEST['only_avail'] != "Y") {
$_smarty_tpl->_assignInScope('check_avail', "Y");
} else {
$_smarty_tpl->_assignInScope('check_avail', "N");
}?>
                <a href="<?php echo htmlspecialchars((string) fn_url("cp_addons_manager.all?only_avail=".((string)$_smarty_tpl->tpl_vars['check_avail']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <i class="cp-am-icon-<?php if ($_smarty_tpl->tpl_vars['check_avail']->value == "Y") {?>unchecked<?php } else { ?>checked<?php }?>"></i>
                    <span><?php echo $_smarty_tpl->__("cp_display_avail_addons");?>
</span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['addons_list']->value) {?>
            <div class="cp-addons-left-block">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons_list']->value, 'addon', false, 'key', 'cp_addons_list', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_cp_addons_list']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cp_addons_list']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_cp_addons_list']->value['index'];
?>
                <?php $_smarty_tpl->_assignInScope('is_selected', false);?>
                <?php if ($_REQUEST['selected'] == $_smarty_tpl->tpl_vars['key']->value || !$_REQUEST['selected'] && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_cp_addons_list']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cp_addons_list']->value['first'] : null)) {?>
                    <?php $_smarty_tpl->_assignInScope('is_selected', true);?>
                <?php }?>
                
                <div class="cp-list-addon-item" id="cp_list_item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php if (!$_smarty_tpl->tpl_vars['is_selected']->value) {?>
                        <a class="cp-am-select-item"  data-ca-url="<?php echo htmlspecialchars((string) fn_query_remove($_smarty_tpl->tpl_vars['c_url']->value,"selected"), ENT_QUOTES, 'UTF-8');?>
"|fn_url}" data-ca-selected="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="cp_all_addons_reload">
                    <?php }?>
                    <div class="cp-list-addon-info-wrap <?php if ($_smarty_tpl->tpl_vars['is_selected']->value) {?>cp-selected<?php }?>">
                        <div class="cp-list-addon-icon">
                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['image']) {?>
                                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['image'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php }?>
                        </div>
                        <div class="cp-list-addon-title-wrap">
                            <span class="cp-list-addon-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['product'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        
                        <div class="cp-list-addon-info">    
                            <div class="cp-list-addon-description"><?php echo $_smarty_tpl->tpl_vars['addon']->value['short_description'];?>
</div>
                            
                            <div class="cp-addon-avail-wrap">
                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['is_avail'] == "Y") {?>
                                    <div class="cp-addon-avail-info"><i class="cp-am-icon-success"></i><span><?php echo $_smarty_tpl->__("cp_avail_for_store");?>
</span></div>
                                <?php } else { ?>
                                    <div class="cp-addon-avail-info cp-not-avail"><i class="cp-am-icon-fail"></i><span><?php echo $_smarty_tpl->__("cp_not_avail_for_store");?>
</span></div>
                                <?php }?>
                                <div class="cp-addon-release-info">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/cp_addons_manager/views/cp_addons_manager/components/release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('release'=>$_smarty_tpl->tpl_vars['addon']->value), 0, true);
?>
                                </div>
                            </div>
                            
                            <?php $_smarty_tpl->_assignInScope('is_free', false);?>
                            <?php if (!$_smarty_tpl->tpl_vars['addon']->value['price'] || $_smarty_tpl->tpl_vars['addon']->value['price'] == 0.0) {?>
                                <?php $_smarty_tpl->_assignInScope('is_free', true);?>
                            <?php }?>
                            <div class="cp-list-addon-bottom">
                                <div class="cp-addon-price-wrap">
                                    <?php if ($_smarty_tpl->tpl_vars['is_free']->value) {?>
                                        <span class="cp-price cp-free"><?php echo $_smarty_tpl->__("free");?>
</span>
                                    <?php } else { ?>
                                        <span class="cp-old-price">
                                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['str_list_price']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['addon']->value['str_list_price'];?>

                                            <?php }?>
                                        </span>
                                        <span class="cp-price">
                                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['str_price']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['addon']->value['str_price'];?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars((string) sprintf("%.2f",$_smarty_tpl->tpl_vars['addon']->value['price']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['currency'], ENT_QUOTES, 'UTF-8');?>

                                            <?php }?>
                                        </span>
                                    <?php }?>
                                </div>
                                <div class="cp-addon-buttons">
                                    <?php if ($_smarty_tpl->tpl_vars['is_selected']->value) {?>
                                        <a class="cp-am-buy-btn" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['is_free']->value) {
echo $_smarty_tpl->__("cp_receive");
} else {
echo $_smarty_tpl->__("cp_am_buy");
}?></a>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['is_selected']->value) {?>
                        </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['is_selected']->value) {?>
                        <div class="cp-addons-main-info cp-am-check-height">
                            <div class="cp-addon-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['product'], ENT_QUOTES, 'UTF-8');?>
</div>
                                                        
                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['video']) {?>
                                <div class="cp-addon-video"><?php echo $_smarty_tpl->tpl_vars['addon']->value['video'];?>
</div>
                            <?php }?>
                            
                            <div class="cp-addon-images">
                                <div class="cp-addon-images-wrap">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon']->value['addon_images'], 'image_data', false, 'img_key');
$_smarty_tpl->tpl_vars['image_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['img_key']->value => $_smarty_tpl->tpl_vars['image_data']->value) {
$_smarty_tpl->tpl_vars['image_data']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['image_data']->value) {?>
                                    <a id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['img_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="preview[images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
]">
                                        <img class="cm-image" id="det_img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['img_key']->value, ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" />
                                    </a>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                            
                            <div class="cp-addon-extra-buttons">
                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['documentation_link']) {?>
                                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['documentation_link'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="cp-am-btn cp-documentation-btn">
                                        <?php echo $_smarty_tpl->__("cp_am_documentation");?>

                                    </a>
                                <?php }?>
                                <a class="cp-am-btn cp-contact-btn <?php if (!$_smarty_tpl->tpl_vars['addon']->value['documentation_link']) {?>cp-full<?php }?>" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['url'], ENT_QUOTES, 'UTF-8');?>
?ask_question=Y" target="_blank">
                                    <?php echo $_smarty_tpl->__("cp_ask_question");?>

                                </a>
                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['cp_demo_link']) {?>
                                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['cp_demo_link'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="cp-am-btn cp-demo-btn">
                                        <i class="cp-am-icon-web-design"></i><span><?php echo $_smarty_tpl->__("cp_view_demo");?>
</span>
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="cp-am-height-block"></div>
            
                    <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    </form>
<!--cp_all_addons_reload--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "title", null, null);
echo $_smarty_tpl->__("cart_power");?>
: <?php echo $_smarty_tpl->__("cp_all_addons");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>false,'no_sidebar'=>true), 0, false);
}
}
