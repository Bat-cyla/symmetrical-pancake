<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:17
  from '/app/www/design/themes/responsive/templates/addons/ab__scroll_to_top/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065d33cf98_46141180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a2aafba5ccfdfbfa50bd951e133b8475c299c4d' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/ab__scroll_to_top/hooks/index/scripts.post.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec065d33cf98_46141180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            ab__stt: {
                settings: <?php echo json_encode($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']);?>
,
                units: '<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['units'] ?? null)===null||$tmp==='' ? 'px' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                transition: <?php echo htmlspecialchars((string) intval((($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['transition'] ?? null)===null||$tmp==='' ? 600 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__scroll_to_top/common.js"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__scroll_to_top/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__scroll_to_top/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            ab__stt: {
                settings: <?php echo json_encode($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']);?>
,
                units: '<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['units'] ?? null)===null||$tmp==='' ? 'px' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                transition: <?php echo htmlspecialchars((string) intval((($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['transition'] ?? null)===null||$tmp==='' ? 600 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__scroll_to_top/common.js"),$_smarty_tpl);
}
}
}
