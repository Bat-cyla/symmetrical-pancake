<?php
/* Smarty version 4.1.1, created on 2024-08-01 12:56:41
  from '/app/www/design/backend/templates/addons/discussion/views/discussion_manager/components/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab5bd9602542_33868691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01c2b7fc4659325185b3daf3362c1f23e66b3524' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/views/discussion_manager/components/post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/calendar.tpl' => 1,
    'tygh:addons/discussion/views/discussion_manager/components/rate.tpl' => 1,
    'tygh:addons/discussion/views/discussion_manager/components/stars.tpl' => 1,
  ),
),false)) {
function content_66ab5bd9602542_33868691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('approved','disapprove','not_approved','approve','approved','not_approved','delete','ip_address'));
$_smarty_tpl->_assignInScope('current_redirect_url', rawurlencode((string)fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=discussion")));?>
<div class="summary">
    <input type="text" name="posts[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
][name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
" size="40" class="input-hidden">

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:update_post"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:update_post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['type']->value == "C" || $_smarty_tpl->tpl_vars['type']->value == "B") {?>
            <textarea name="posts[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
][message]" cols="80" rows="5" class="input-hidden"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:update_post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<div class="tools">
    <div class="pull-left">
        <?php if (fn_check_view_permissions("discussion.m_delete")) {?>
            <?php $_smarty_tpl->_assignInScope('d_url', fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=discussion")));?>
            <input type="hidden" name="d_redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['d_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="checkbox" name="delete_posts[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
]" id="delete_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
"  class="pull-left cm-item" value="Y">
        <?php }?>
        <div class="pull-left post__statuses cm-statuses">
            <?php if (fn_check_view_permissions("discussion.update")) {?>
                <span class="cm-status-a <?php if ($_smarty_tpl->tpl_vars['post']->value['status'] == "D") {?>hidden<?php }?>">
                    <span class="label label-success"><?php echo $_smarty_tpl->__("approved");?>
</span>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'id'=>"premoderation_disapprove",'title'=>$_smarty_tpl->__("disapprove"),'icon'=>"icon-thumbs-down",'icon_first'=>true,'class'=>"btn post__btn-status-switch cm-status-switch",'data'=>array("data-ca-status"=>"D","data-ca-post-id"=>$_smarty_tpl->tpl_vars['post']->value['post_id'])), true);?>

                </span>
                <span class="cm-status-d <?php if ($_smarty_tpl->tpl_vars['post']->value['status'] == "A") {?>hidden<?php }?>">
                    <span class="label label-important"><?php echo $_smarty_tpl->__("not_approved");?>
</span>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'id'=>"premoderation_disapprove",'title'=>$_smarty_tpl->__("approve"),'icon'=>"icon-thumbs-up",'icon_first'=>true,'class'=>"btn post__btn-status-switch cm-status-switch",'data'=>array("data-ca-status"=>"A","data-ca-post-id"=>$_smarty_tpl->tpl_vars['post']->value['post_id'])), true);?>

                </span>
            <?php } else { ?>
                <span class="cm-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['post']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['status'] == "A") {?>
                        <span class="label label-success"><?php echo $_smarty_tpl->__("approved");?>
</span>
                    <?php } else { ?>
                        <span class="label label-important"><?php echo $_smarty_tpl->__("not_approved");?>
</span>
                    <?php }?>
                </span>
            <?php }?>
            <?php if (fn_check_view_permissions("discussion.delete")) {?>
                <?php ob_start();
echo $_smarty_tpl->__("delete");
$_prefixVariable5=ob_get_clean();
ob_start();
echo htmlspecialchars((string) fn_url("discussion.delete?post_id=".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value)), ENT_QUOTES, 'UTF-8');
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'icon'=>"icon-trash",'title'=>$_prefixVariable5,'class'=>"btn post__btn-delete cm-confirm",'method'=>"POST",'href'=>$_prefixVariable6), true);?>

            <?php }?>
        </div>
    </div>


    <div class="pull-right">
        <span class="muted">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_date_holder_".((string)$_smarty_tpl->tpl_vars['post']->value['post_id']),'date_name'=>"posts[".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])."][date]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['post']->value['timestamp'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'date_meta'=>"post-date",'show_time'=>true,'time_name'=>"posts[".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])."][time]",'meta_class'=>"review-date"), 0, false);
?>
            /
            <?php echo $_smarty_tpl->__("ip_address");?>
:&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['ip_address'], ENT_QUOTES, 'UTF-8');?>

        </span>

        <?php if (($_smarty_tpl->tpl_vars['type']->value == "R" || $_smarty_tpl->tpl_vars['type']->value == "B") && $_smarty_tpl->tpl_vars['post']->value['rating_value'] > 0) {?>
            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rate_id'=>"rating_".((string)$_smarty_tpl->tpl_vars['post']->value['post_id']),'rate_value'=>$_smarty_tpl->tpl_vars['post']->value['rating_value'],'rate_name'=>"posts[".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])."][rating_value]"), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['post']->value['rating_value']), 0, false);
?>
            <?php }?>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['show_object_link']->value) {?>
        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['post']->value['object_data']['url']), ENT_QUOTES, 'UTF-8');?>
" class="post-object" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['object_data']['description'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['object_data']['description'], ENT_QUOTES, 'UTF-8');?>
</a>
    <?php }?>
</div>
<?php }
}
