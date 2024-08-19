<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:25:09
  from '/app/www/design/themes/responsive/templates/addons/discussion/views/discussion/block_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e075ccc847_04881407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ac83879e49d7bdb0fe420c5289238cd0e07490' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/discussion/views/discussion/block_view.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:addons/discussion/views/discussion/components/stars.tpl' => 2,
    'tygh:addons/discussion/views/discussion/components/new_post_button.tpl' => 2,
    'tygh:common/scroller_init.tpl' => 2,
  ),
),false)) {
function content_66b5e075ccc847_04881407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),4=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_data','write_review','new_post','write_review','no_data','write_review','new_post','write_review'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST));?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['type'] != "D") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>

    <div id="posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>
        <div class="ty-mb-l">
            <div class="ty-scroller-discussion-list">
                <div id="scroll_list_discussion" class="owl-carousel ty-scroller-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                        <div class="ty-discussion-post__content ty-scroller-discussion-list__item">

                            <a href="<?php echo htmlspecialchars((string) fn_url("discussion.view?thread_id=".((string)$_smarty_tpl->tpl_vars['discussion']->value['thread_id'])."&post_id=".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])), ENT_QUOTES, 'UTF-8');?>
#post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                                <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">

                                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "C" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
                                    <div class="ty-discussion-post__message"><?php echo nl2br(smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['message'],100));?>
</div>
                                    <?php }?>

                                    <span class="ty-caret-bottom"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                                
                                </div>
                            </a>

                            <span class="ty-discussion-post__author"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <span class="ty-discussion-post__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "R" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B" && $_smarty_tpl->tpl_vars['post']->value['rating_value'] > 0) {?>
                                <div class="clearfix ty-discussion-post__rating">
                                    <a href="<?php echo htmlspecialchars((string) fn_url("discussion.view?thread_id=".((string)$_smarty_tpl->tpl_vars['discussion']->value['thread_id'])."&post_id=".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])), ENT_QUOTES, 'UTF-8');?>
#post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0, true);
?>
                                    </a>
                                </div>
                            <?php }?>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    <!--posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->tpl_vars['object_type']->value == "P") {?>
        <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("write_review"));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("new_post"));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] !== smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type']), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('block', array("block_id"=>"discussion","properties"=>array("item_quantity"=>2,"scroll_per_page"=>"Y","not_scroll_automatically"=>"Y","outside_navigation"=>true)));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block'=>$_smarty_tpl->tpl_vars['block']->value), 0, false);
?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/block_view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/block_view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST));?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['type'] != "D") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, true);
?>

    <div id="posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>
        <div class="ty-mb-l">
            <div class="ty-scroller-discussion-list">
                <div id="scroll_list_discussion" class="owl-carousel ty-scroller-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                        <div class="ty-discussion-post__content ty-scroller-discussion-list__item">

                            <a href="<?php echo htmlspecialchars((string) fn_url("discussion.view?thread_id=".((string)$_smarty_tpl->tpl_vars['discussion']->value['thread_id'])."&post_id=".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])), ENT_QUOTES, 'UTF-8');?>
#post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                                <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">

                                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "C" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
                                    <div class="ty-discussion-post__message"><?php echo nl2br(smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['message'],100));?>
</div>
                                    <?php }?>

                                    <span class="ty-caret-bottom"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                                
                                </div>
                            </a>

                            <span class="ty-discussion-post__author"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <span class="ty-discussion-post__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "R" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B" && $_smarty_tpl->tpl_vars['post']->value['rating_value'] > 0) {?>
                                <div class="clearfix ty-discussion-post__rating">
                                    <a href="<?php echo htmlspecialchars((string) fn_url("discussion.view?thread_id=".((string)$_smarty_tpl->tpl_vars['discussion']->value['thread_id'])."&post_id=".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])), ENT_QUOTES, 'UTF-8');?>
#post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0, true);
?>
                                    </a>
                                </div>
                            <?php }?>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    <!--posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->tpl_vars['object_type']->value == "P") {?>
        <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("write_review"));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("new_post"));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] !== smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type']), 0, true);
?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('block', array("block_id"=>"discussion","properties"=>array("item_quantity"=>2,"scroll_per_page"=>"Y","not_scroll_automatically"=>"Y","outside_navigation"=>true)));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block'=>$_smarty_tpl->tpl_vars['block']->value), 0, true);
?>

<?php }
}
}
}
