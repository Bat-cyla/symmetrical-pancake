<?php
/* Smarty version 4.1.1, created on 2024-08-02 09:21:22
  from '/app/www/design/backend/templates/views/addons/components/detailed_page/tabs/addon_information.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac7ae20689e8_72847976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bc36021f877321d642781770d4b23fe2db14ba0' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/detailed_page/tabs/addon_information.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac7ae20689e8_72847976 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('name','developer','show_all_developer_addons','developer_page','category','addons.other_category','show_all_category_addons','compatibility','addons.mve_ult_or_plus_required','addons.ult_required','addon_is_compatible','addon_required_version','unknown','languages','addons.no_information','addon_id'));
?>
<div class="hidden cm-hide-save-button" id="content_information">
    <div class="form-horizontal form-edit">

                <div class="control-group">
            <label class="control-label" for="addon_name"><?php echo $_smarty_tpl->__("name");?>
:</label>
            <div class="controls">
                <p id="addon_name"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['addon']->value['name'] ?? null)===null||$tmp==='' ? "–" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
        </div>

                <div class="control-group">
            <label class="control-label" for="addon_developer"><?php echo $_smarty_tpl->__("developer");?>
:</label>
            <div class="controls">
                <p class="spaced-child" id="addon_developer">
                    <span>
                        <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['addon']->value['supplier'] ?? null)===null||$tmp==='' ? "–" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                    </span>
                    <a href="<?php echo htmlspecialchars((string) fn_url("addons.manage&supplier=".((string)$_smarty_tpl->tpl_vars['addon']->value['supplier'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("show_all_developer_addons");?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['addon']->value['supplier_page']) {?>
                        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['addon']->value['supplier_page']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("developer_page");?>
</a>
                    <?php }?>
                </p>
            </div>
        </div>

                <?php if ($_smarty_tpl->tpl_vars['addon']->value['category']) {?>
            <div class="control-group">
                <label class="control-label" for="addon_category"><?php echo $_smarty_tpl->__("category");?>
:</label>
                <div class="controls">
                    <p class="spaced-child">
                        <span id="addon_category">
                            <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['addon']->value['category_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("addons.other_category") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                        </span>
                        <a href="<?php echo htmlspecialchars((string) fn_url("addons.manage&category_id=".((string)$_smarty_tpl->tpl_vars['addon']->value['category'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("show_all_category_addons",array("[category]"=>mb_strtolower($_smarty_tpl->tpl_vars['addon']->value['category_name'], 'UTF-8')));?>
</a>
                    </p>
                </div>
            </div>
        <?php }?>


                <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("compatibility");?>
:</label>
            <div class="controls">
                <?php if (!$_smarty_tpl->tpl_vars['addon']->value['snapshot_correct']) {?>
                    <?php if (fn_allowed_for("MULTIVENDOR") && fn_check_addon_snapshot($_smarty_tpl->tpl_vars['addon']->value['addon'],"plus")) {?>
                        <p class="text-warning"><?php echo $_smarty_tpl->__("addons.mve_ult_or_plus_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>
                    <?php } else { ?>
                        <p class="text-warning"><?php echo $_smarty_tpl->__("addons.ult_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>
                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] || $_smarty_tpl->tpl_vars['version_compare']->value) {?>
                    <p><?php echo $_smarty_tpl->__("addon_is_compatible",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>
                <?php } elseif ($_smarty_tpl->tpl_vars['compatibility']->value && !$_smarty_tpl->tpl_vars['version_compare']->value) {?>
                    <p class="text-warning"><?php echo $_smarty_tpl->__("addon_required_version",array("[version]"=>$_smarty_tpl->tpl_vars['compatibility']->value));?>
</p>
                <?php } else { ?>
                    <p class="muted"><?php echo $_smarty_tpl->__("unknown");?>
</p>
                <?php }?>
            </div>
        </div>

                <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("languages");?>
:</label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['addon_languages']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon_languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['language']->value['variant']))) {?>
                            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php } else { ?>
                            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                    <p class="muted"><?php echo $_smarty_tpl->__("addons.no_information");?>
</p>
                <?php }?>
            </div>
        </div>

                <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("addon_id");?>
:</label>
            <div class="controls">
                <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['addon'], ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
        </div>
    
    </div>
<!--content_information--></div>
<?php }
}
