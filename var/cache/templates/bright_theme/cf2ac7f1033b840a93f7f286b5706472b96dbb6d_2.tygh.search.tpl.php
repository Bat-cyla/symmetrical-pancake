<?php
/* Smarty version 4.1.1, created on 2024-08-15 11:11:31
  from '/app/www/design/themes/responsive/templates/views/orders/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bdb833bafcd5_19594176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf2ac7f1033b840a93f7f286b5706472b96dbb6d' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/orders/search.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/orders/components/orders_search_form.tpl' => 2,
    'tygh:common/section.tpl' => 2,
    'tygh:common/pagination.tpl' => 4,
    'tygh:common/status.tpl' => 2,
    'tygh:common/price.tpl' => 2,
    'tygh:buttons/button.tpl' => 6,
  ),
),false)) {
function content_66bdb833bafcd5_19594176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('search_options','id','status','customer','date','total','actions','print_invoice','re_order','search_products','text_no_orders','orders','search_options','id','status','customer','date','total','actions','print_invoice','re_order','search_products','text_no_orders','orders'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "section", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section_title'=>$_smarty_tpl->__("search_options"),'section_content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'section'),'class'=>"ty-search-form",'collapse'=>true), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
if ($_smarty_tpl->tpl_vars['search']->value['sort_order'] == "asc") {?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");?>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="ty-table ty-orders-search">
    <thead>
        <tr>
            <th><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "order_id") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("customer");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "customer") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "date") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <th><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=total&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("total");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "total") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th class="ty-orders-search__header ty-orders-search__header--actions"><?php echo $_smarty_tpl->__("actions");?>
</th>
        </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
        <tr>
            <td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><strong>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
            <td class="ty-orders-search__item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['o']->value['status'],'display'=>"view"), 0, true);
?></td>
            <td class="ty-orders-search__item">
                <ul class="ty-orders-search__user-info">
                    <li class="ty-orders-search__user-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</li>
                    <li  class="ty-orders-search__user-mail"><a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['o']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                </ul>
            </td>
            <td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['o']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a></td>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <td class="ty-orders-search__item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['o']->value['total']), 0, true);
?></td>
            <td class="ty-orders-search__item ty-orders-search__item--actions">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"cm-new-window ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->__("print_invoice"),'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-print"), 0, true);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->__("re_order"),'but_href'=>"orders.reorder?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-cw"), 0, true);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->__("search_products"),'but_href'=>"products.search?search_performed=Y&order_ids=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-search"), 0, true);
?>
            </td>
        </tr>
    <?php
}
if ($_smarty_tpl->tpl_vars['o']->do_else) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6">
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_orders");?>
</p>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("orders");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "section", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section_title'=>$_smarty_tpl->__("search_options"),'section_content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'section'),'class'=>"ty-search-form",'collapse'=>true), 0, true);
?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
if ($_smarty_tpl->tpl_vars['search']->value['sort_order'] == "asc") {?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");?>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<table class="ty-table ty-orders-search">
    <thead>
        <tr>
            <th><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "order_id") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("customer");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "customer") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "date") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <th><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=total&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("total");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "total") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th class="ty-orders-search__header ty-orders-search__header--actions"><?php echo $_smarty_tpl->__("actions");?>
</th>
        </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
        <tr>
            <td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><strong>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
            <td class="ty-orders-search__item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['o']->value['status'],'display'=>"view"), 0, true);
?></td>
            <td class="ty-orders-search__item">
                <ul class="ty-orders-search__user-info">
                    <li class="ty-orders-search__user-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</li>
                    <li  class="ty-orders-search__user-mail"><a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['o']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                </ul>
            </td>
            <td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['o']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a></td>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <td class="ty-orders-search__item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['o']->value['total']), 0, true);
?></td>
            <td class="ty-orders-search__item ty-orders-search__item--actions">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"cm-new-window ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->__("print_invoice"),'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-print"), 0, true);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->__("re_order"),'but_href'=>"orders.reorder?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-cw"), 0, true);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->__("search_products"),'but_href'=>"products.search?search_performed=Y&order_ids=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-search"), 0, true);
?>
            </td>
        </tr>
    <?php
}
if ($_smarty_tpl->tpl_vars['o']->do_else) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6">
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_orders");?>
</p>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("orders");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
