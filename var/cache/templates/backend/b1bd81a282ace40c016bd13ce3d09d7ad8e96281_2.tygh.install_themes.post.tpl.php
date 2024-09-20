<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:08:47
  from '/app/www/design/backend/templates/addons/abt__unitheme2/hooks/themes/install_themes.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec063f437bc6_10738476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1bd81a282ace40c016bd13ce3d09d7ad8e96281' => 
    array (
      0 => '/app/www/design/backend/templates/addons/abt__unitheme2/hooks/themes/install_themes.post.tpl',
      1 => 1726724127,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec063f437bc6_10738476 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['theme_name']->value == 'abt__unitheme2') {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker');?>

<hr>
<div class="abt-ut2-doc"><?php echo $_smarty_tpl->__('abt__ut2.clone_theme');?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
