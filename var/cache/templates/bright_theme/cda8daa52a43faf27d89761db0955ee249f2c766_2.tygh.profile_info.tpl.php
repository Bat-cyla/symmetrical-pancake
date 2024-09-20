<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:16
  from '/app/www/design/themes/responsive/templates/blocks/static_templates/profile_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065ced5af8_18866096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cda8daa52a43faf27d89761db0955ee249f2c766' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/static_templates/profile_info.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66ec065ced5af8_18866096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_profile_benefits','text_profile_details','text_profile_benefits','text_profile_details'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] === 'profiles') {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'add') {?>
    <div class="ty-account-benefits">
        <?php echo $_smarty_tpl->__("text_profile_benefits");?>

    </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == 'update') {?>
        <div class="ty-account-detail">
            <div>
                <?php echo $_smarty_tpl->__("text_profile_details");?>

            </div>
            <div class="ty-account-detail__image">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>array("image_path"=>((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/profile_details.png","image_x"=>183,"image_y"=>206)), 0, false);
?>
            </div>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/profile_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/profile_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] === 'profiles') {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'add') {?>
    <div class="ty-account-benefits">
        <?php echo $_smarty_tpl->__("text_profile_benefits");?>

    </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == 'update') {?>
        <div class="ty-account-detail">
            <div>
                <?php echo $_smarty_tpl->__("text_profile_details");?>

            </div>
            <div class="ty-account-detail__image">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>array("image_path"=>((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/profile_details.png","image_x"=>183,"image_y"=>206)), 0, true);
?>
            </div>
        </div>
    <?php }
}
}
}
}
