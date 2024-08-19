<?php
/* Smarty version 4.1.1, created on 2024-08-14 09:05:48
  from '/app/www/design/backend/templates/buttons/helpdesk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66bc493c4963a4_36201527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e5f0643aa81c4fc725830c5040649045ba9bf81' => 
    array (
      0 => '/app/www/design/backend/templates/buttons/helpdesk.tpl',
      1 => 1723194964,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bc493c4963a4_36201527 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('helpdesk_account.sign_in'));
$_smarty_tpl->_assignInScope('btn_text', (($tmp = $_smarty_tpl->tpl_vars['btn_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("helpdesk_account.sign_in") ?? null : $tmp));
$_smarty_tpl->_assignInScope('btn_href', (($tmp = $_smarty_tpl->tpl_vars['btn_href']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["helpdesk.connect_url"] ?? null : $tmp));?>
<a class="btn btn-primary <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['btn_class']->value, ENT_QUOTES, 'UTF-8');?>
"
   href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['btn_href']->value), ENT_QUOTES, 'UTF-8');?>
"
>
    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_1439_21472)">
            <path d="M15 5.10759V13.1026C15 14.0624 14.214 14.8401 13.2438 14.8401H5.16263C4.19241 14.8401 3.4064 14.0624 3.4064 13.1026V5.10759C3.4064 4.14771 4.19241 3.37008 5.16263 3.37008H13.2438C14.214 3.37008 15 4.14771 15 5.10759ZM1.75623 0C0.786007 0 0 0.777626 0 1.73751C0 2.69739 0.786007 3.47502 1.75623 3.47502C2.72646 3.47502 3.51247 2.69739 3.51247 1.73751C3.51247 0.777626 2.72646 0 1.75623 0Z" fill="white"/>
        </g>
        <defs>
            <clipPath id="clip0_1439_21472">
                <rect width="15" height="15" fill="white"/>
            </clipPath>
        </defs>
    </svg>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['btn_text']->value, ENT_QUOTES, 'UTF-8');?>

</a>
<?php }
}
