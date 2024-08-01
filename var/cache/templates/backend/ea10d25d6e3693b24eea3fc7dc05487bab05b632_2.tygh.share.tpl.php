<?php
/* Smarty version 4.1.1, created on 2024-07-31 14:09:43
  from '/app/www/design/backend/templates/common/share.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66aa1b77ef3909_55874518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea10d25d6e3693b24eea3fc7dc05487bab05b632' => 
    array (
      0 => '/app/www/design/backend/templates/common/share.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66aa1b77ef3909_55874518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('share.congratulations_first_order','share.first_order_tweet','share.installation_tweet','share.installation_tweet'));
if ($_smarty_tpl->tpl_vars['mode']->value == "notification") {?>
    <?php echo $_smarty_tpl->__("share.congratulations_first_order");?>

<?php }?>

<?php $_smarty_tpl->_assignInScope('url', fn_url('',"C"));
$_smarty_tpl->_assignInScope('tweet_text', $_smarty_tpl->__("share.first_order_tweet",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))));?>

<ul class="inline social-share">
    <li><a href="#" class="uibutton large confirm" onclick=" window.open('https://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
&p[images][0]=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logos']->value['theme']['image']['http_image_path'], ENT_QUOTES, 'UTF-8');?>
&p[title]=<?php if ($_smarty_tpl->tpl_vars['mode']->value == "notification") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tweet_text']->value, ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__("share.installation_tweet",array('[product_name]'=>$_smarty_tpl->tpl_vars['product_name']->value));
}?>', 'facebook-share-dialog', 'width=626,height=436'); return false;"> Share on Facebook</a></li>
    <li><a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-text="<?php if ($_smarty_tpl->tpl_vars['mode']->value == "notification") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tweet_text']->value, ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__("share.installation_tweet",array('[product_name]'=>$_smarty_tpl->tpl_vars['product_name']->value));
}?>" data-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" data-via="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['resources']['twitter'], ENT_QUOTES, 'UTF-8');?>
" data-size="large">Tweet</a>
        
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </li>
</ul>
<?php }
}
