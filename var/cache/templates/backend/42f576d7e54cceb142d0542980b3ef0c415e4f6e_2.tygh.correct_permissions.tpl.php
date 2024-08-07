<?php
/* Smarty version 4.1.1, created on 2024-08-01 16:02:37
  from '/app/www/design/backend/templates/views/addons/components/correct_permissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ab876d8da9b7_43673044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f576d7e54cceb142d0542980b3ef0c415e4f6e' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/correct_permissions.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_66ab876d8da9b7_43673044 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('non_writable_directories','recheck','ftp_server_options','host','login','password','ftp_directory','cancel','upload_via_ftp'));
?>
<div id="addon_upload_container">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="addon_upload_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
            <input type="hidden" name="result_ids" value="addon_upload_container" />
            <input type="hidden" name="addon_extract_path" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon_extract_path']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="addon_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon_name']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['return_url']->value), ENT_QUOTES, 'UTF-8');?>
" />
        	<div class="control-group">
	            <strong class="text-error"><?php echo $_smarty_tpl->__("non_writable_directories");?>
:</strong>
	            <ol class="text-error">
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['non_writable']->value, 'perm', false, 'dir');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dir']->value => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
                    <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dir']->value, ENT_QUOTES, 'UTF-8');?>
</li>
	            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	            </ol>
                <div><?php echo $_smarty_tpl->__('text_set_write_permissions_for_dirs');?>
</div>
            </div>

            <div><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("recheck"),'but_name'=>"dispatch[addons.recheck..".((string)$_smarty_tpl->tpl_vars['dispatch_extra']->value)."]"), 0, false);
?></div>
            <hr>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("ftp_server_options")), 0, false);
?>
            <div class="control-group">
            	<label for="host" class="control-label"><?php echo $_smarty_tpl->__("host");?>
:</label>
		        <div class="controls">
		            <input id="host" type="text" name="ftp_access[ftp_hostname]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ftp_access']->value['ftp_hostname'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
		        </div>
            </div>

            <div class="control-group">
            	<label for="login" class="control-label"><?php echo $_smarty_tpl->__("login");?>
:</label>
		        <div class="controls">
		            <input id="login" type="text" name="ftp_access[ftp_username]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ftp_access']->value['ftp_username'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
		        </div>
            </div>

            <div class="control-group">
            	<label for="password" class="control-label"><?php echo $_smarty_tpl->__("password");?>
:</label>
		        <div class="controls">
		            <input id="password" type="password" name="ftp_access[ftp_password]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ftp_access']->value['ftp_password'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
		        </div>
		    </div>

		    <div class="control-group">
            	<label for="base_path" class="control-label"><?php echo $_smarty_tpl->__("ftp_directory");?>
:</label>
		        <div class="controls">
		            <input id="base_path" type="text" name="ftp_access[ftp_directory]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ftp_access']->value['ftp_directory'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
		        </div>
		    </div>

            <div class="buttons-container">
                <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("upload_via_ftp"),'but_name'=>"dispatch[addons.recheck.ftp_upload.".((string)$_smarty_tpl->tpl_vars['dispatch_extra']->value)."]"), 0, true);
?>
            </div>
    </form>
<!--addon_upload_container--></div>
<?php }
}
