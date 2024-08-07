<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:01:26
  from '/app/www/design/backend/templates/addons/vendor_debt_payout/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab87264cb169_72258840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '382cf1fd9488254567ff64c7f15e2249d97227bd' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_debt_payout/hooks/index/scripts.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab87264cb169_72258840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.error_refill_amount_lower_than_zero'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            error_refill_amount_lower_than_zero: '<?php echo strtr((string)$_smarty_tpl->__("vendor_debt_payout.error_refill_amount_lower_than_zero"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
