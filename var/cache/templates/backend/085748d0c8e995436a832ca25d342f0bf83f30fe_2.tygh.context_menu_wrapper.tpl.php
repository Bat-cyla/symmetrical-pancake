<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:53:39
  from '/app/www/design/backend/templates/common/context_menu_wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac8273cbd9f1_96803595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '085748d0c8e995436a832ca25d342f0bf83f30fe' => 
    array (
      0 => '/app/www/design/backend/templates/common/context_menu_wrapper.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac8273cbd9f1_96803595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),));
ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? $_prefixVariable1 ?? null : $tmp));
$_smarty_tpl->_assignInScope('class', (($tmp = $_smarty_tpl->tpl_vars['class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('attributes', (($tmp = $_smarty_tpl->tpl_vars['attributes']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_tmp_array = isset($_smarty_tpl->tpl_vars['attributes']) ? $_smarty_tpl->tpl_vars['attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-longtap"] = true;
$_smarty_tpl->_assignInScope('attributes', $_tmp_array);
$_smarty_tpl->_assignInScope('hook', (($tmp = $_smarty_tpl->tpl_vars['hook']->value ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['object']->value).":context_menu" ?? null : $tmp));
$_smarty_tpl->_assignInScope('has_permission', (($tmp = $_smarty_tpl->tpl_vars['has_permission']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('context_menu_class', (($tmp = $_smarty_tpl->tpl_vars['context_menu_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['attributes']->value), ENT_QUOTES, 'UTF-8');?>
>
    <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>$_smarty_tpl->tpl_vars['hook']->value));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>$_smarty_tpl->tpl_vars['hook']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"context_menu.context_menu",'object'=>$_smarty_tpl->tpl_vars['object']->value,'form'=>$_smarty_tpl->tpl_vars['form']->value,'class'=>$_smarty_tpl->tpl_vars['context_menu_class']->value,'context_menu_id'=>"#".((string)$_smarty_tpl->tpl_vars['id']->value),'is_check_all_shown'=>$_smarty_tpl->tpl_vars['is_check_all_shown']->value));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>$_smarty_tpl->tpl_vars['object']->value,'form'=>$_smarty_tpl->tpl_vars['form']->value,'class'=>$_smarty_tpl->tpl_vars['context_menu_class']->value,'context_menu_id'=>"#".((string)$_smarty_tpl->tpl_vars['id']->value),'is_check_all_shown'=>$_smarty_tpl->tpl_vars['is_check_all_shown']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>$_smarty_tpl->tpl_vars['object']->value,'form'=>$_smarty_tpl->tpl_vars['form']->value,'class'=>$_smarty_tpl->tpl_vars['context_menu_class']->value,'context_menu_id'=>"#".((string)$_smarty_tpl->tpl_vars['id']->value),'is_check_all_shown'=>$_smarty_tpl->tpl_vars['is_check_all_shown']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>$_smarty_tpl->tpl_vars['hook']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['items']->value;?>

</div>
<?php }
}
