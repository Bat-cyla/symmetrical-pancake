<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:17
  from '/app/www/design/themes/responsive/templates/addons/ab__search_motivation/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec065d3511b8_18338850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02a933261dbd2004a80f7c2c8c014f840c73b494' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/ab__search_motivation/hooks/index/scripts.post.tpl',
      1 => 1726744065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec065d3511b8_18338850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "products" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "search")) {
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            'ab__sm.random_char': '<?php echo strtr((string)$_smarty_tpl->__('ab__sm.random_char'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });

        $.extend(_, {
            ab__sm: {
                phrases: <?php echo json_encode((fn_ab__search_motivation_get_phrases('')),(defined('JSON_UNESCAPED_UNICODE') ? constant('JSON_UNESCAPED_UNICODE') : null));?>
,
                delay: <?php echo htmlspecialchars((string) intval((($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__search_motivation']['delay'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp))*1000, ENT_QUOTES, 'UTF-8');?>
,
            }
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__search_motivation/lib/theater.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/ab__search_motivation/func.js"),$_smarty_tpl);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__search_motivation/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__search_motivation/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "products" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "search")) {
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            'ab__sm.random_char': '<?php echo strtr((string)$_smarty_tpl->__('ab__sm.random_char'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });

        $.extend(_, {
            ab__sm: {
                phrases: <?php echo json_encode((fn_ab__search_motivation_get_phrases('')),(defined('JSON_UNESCAPED_UNICODE') ? constant('JSON_UNESCAPED_UNICODE') : null));?>
,
                delay: <?php echo htmlspecialchars((string) intval((($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__search_motivation']['delay'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp))*1000, ENT_QUOTES, 'UTF-8');?>
,
            }
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__search_motivation/lib/theater.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/ab__search_motivation/func.js"),$_smarty_tpl);?>

<?php }
}
}
}
