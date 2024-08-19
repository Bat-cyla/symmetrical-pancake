<?php
/* Smarty version 4.1.1, created on 2024-08-14 09:05:48
  from '/app/www/design/backend/templates/views/addons/components/detailed_page/sidebar/addon_support.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bc493ca23cc4_35138341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2113f166e0aa28d5a07b6035fb04e117833fe96' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/detailed_page/sidebar/addon_support.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/support/contact_developer.tpl' => 1,
  ),
),false)) {
function content_66bc493ca23cc4_35138341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('addons.support'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons_detailed:sidebar_support"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons_detailed:sidebar_support"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['addon']->value['support'] || $_smarty_tpl->tpl_vars['addon']->value['identified']) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("addons.support");?>
</h6>

        <?php if ($_smarty_tpl->tpl_vars['addon']->value['identified']) {?>
            <div class="control-group">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/support/contact_developer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon']->value['support'], 'support');
$_smarty_tpl->tpl_vars['support']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['support']->value) {
$_smarty_tpl->tpl_vars['support']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['support']->value['url']) {?>
                <div class="control-group">
                    <p>
                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['support']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                            <?php echo $_smarty_tpl->tpl_vars['support']->value['text'];?>

                        </a>
                    </p>
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons_detailed:sidebar_support"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
