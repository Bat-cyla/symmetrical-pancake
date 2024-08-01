<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:12:25
  from '/app/www/design/backend/templates/common/advanced_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1c19d26027_21174178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e44e5d7ad5fa5e09bd4f20f182f2c2acba58d6c' => 
    array (
      0 => '/app/www/design/backend/templates/common/advanced_search.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/search.tpl' => 3,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_66aa1c19d26027_21174178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('object_exists','advanced_search','advanced_search','save_this_search_as','name','name','save','cancel','advanced_search_options'));
echo smarty_function_script(array('src'=>"js/tygh/advanced_search.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
Tygh.tr('object_exists', '<?php echo strtr((string)$_smarty_tpl->__("object_exists"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<input type="hidden" name="is_search" value="Y" />
<?php $_smarty_tpl->_assignInScope('a_id', sprintf("s_%s",fn_crc32($_smarty_tpl->tpl_vars['dispatch']->value)));
$_smarty_tpl->_assignInScope('views', fn_get_views((($tmp = $_smarty_tpl->tpl_vars['view_type']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)));?>

<?php if (!$_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['simple_search']->value) {?>
    <div id="simple_search_common">
        <div id="simple_search">
            <?php echo $_smarty_tpl->tpl_vars['simple_search']->value;?>

        </div>
    </div>
    <?php }?>
    <div class="sidebar-field advanced-search-field">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]",'method'=>"GET",'but_meta'=>"advanced-search-field__search"), 0, false);
?>
        <?php if (!$_smarty_tpl->tpl_vars['no_adv_link']->value) {?>
            <a class="advanced-search cm-dialog-opener" id="adv_search_opener" data-ca-target-id="adv_search" href="#"><?php echo $_smarty_tpl->__("advanced_search");?>
</a>
        <?php }?>
    </div>

<div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="hidden adv-search" id="adv_search" title="<?php echo $_smarty_tpl->__("advanced_search");?>
">
        <?php if ($_smarty_tpl->tpl_vars['simple_search']->value) {?>
            <div class="group" id="simple_search_popup"></div>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['advanced_search']->value;?>


        <div class="modal-footer buttons-container">
            <?php if (!$_smarty_tpl->tpl_vars['not_saved']->value) {?>
                <div class="pull-left">
                    <?php if (strpos($_REQUEST['dispatch'],".picker") === false) {?>
                    <span class="pull-left"><?php echo $_smarty_tpl->__("save_this_search_as");?>
</span>
                    <div class="input-append">
                    <input type="text" id="view_name" name="new_view" value="<?php if ($_smarty_tpl->tpl_vars['search']->value['view_id'] && $_smarty_tpl->tpl_vars['views']->value[$_smarty_tpl->tpl_vars['search']->value['view_id']]) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['views']->value[$_smarty_tpl->tpl_vars['search']->value['view_id']]['name'], ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__("name");
}?>" title="<?php echo $_smarty_tpl->__("name");?>
" class="input-medium cm-hint" />
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("save"),'but_id'=>"adv_search_save",'but_role'=>"advanced-search"), 0, false);
?>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
            <div class="pull-right">
                <a class="cm-dialog-closer cm-cancel tool-link btn bulkedit-unchanged" data-dismiss="modal"><?php echo $_smarty_tpl->__("cancel");?>
</a>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]",'but_role'=>"submit",'method'=>"GET"), 0, true);
?>
            </div>
        </div>
    </div>
</div>

<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['simple_search']->value;?>

    <div class="sidebar-field in-popup">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]"), 0, true);
?>
    <?php if (trim($_smarty_tpl->tpl_vars['advanced_search']->value) != '') {?>
        <a id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination cm-save-state" title="<?php echo $_smarty_tpl->__("advanced_search_options");?>
">
            <?php ob_start();
if ($_COOKIE[$_smarty_tpl->tpl_vars['a_id']->value]) {
echo " hidden";
}
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_chevron_down', "icon-chevron-down cm-combination cm-save-state".$_prefixVariable7);?>
            <?php ob_start();
if (!$_COOKIE[$_smarty_tpl->tpl_vars['a_id']->value]) {
echo " hidden";
}
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_chevron_up', "icon-chevron-up cm-combination cm-save-state".$_prefixVariable8);?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_chevron_down']->value,'id'=>"on_".((string)$_smarty_tpl->tpl_vars['a_id']->value)),$_smarty_tpl);?>

            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_chevron_up']->value,'id'=>"off_".((string)$_smarty_tpl->tpl_vars['a_id']->value)),$_smarty_tpl);?>

        </a>
    <?php }?>
    </div>
    <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="search-advanced <?php if (!$_COOKIE[$_smarty_tpl->tpl_vars['a_id']->value]) {?>hidden<?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['advanced_search']->value;?>

    </div>
<?php }
}
}
