<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:17
  from '/app/www/design/themes/responsive/templates/addons/ab__fast_navigation/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065d37dfb6_56275078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b5d1faedc08d1bfea54fd277f1c9513e57cc2c0' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/ab__fast_navigation/hooks/index/scripts.post.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec065d37dfb6_56275078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__fn.show_more','ab__fn.show_more'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function ( _, $ ) {
        $.extend(_, {
            ab__fn: {
                settings: {
                    load_by_ajax: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__fast_navigation']['load_by_ajax'], ENT_QUOTES, 'UTF-8');?>
'
                },
                blocks: { },
                scrollers_settings: { },
            }
        });

        _.tr({
            "ab__fn.delimeter_text": '<?php echo strtr((string)$_smarty_tpl->__("ab__fn.show_more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__fast_navigation/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__fast_navigation/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function ( _, $ ) {
        $.extend(_, {
            ab__fn: {
                settings: {
                    load_by_ajax: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__fast_navigation']['load_by_ajax'], ENT_QUOTES, 'UTF-8');?>
'
                },
                blocks: { },
                scrollers_settings: { },
            }
        });

        _.tr({
            "ab__fn.delimeter_text": '<?php echo strtr((string)$_smarty_tpl->__("ab__fn.show_more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
