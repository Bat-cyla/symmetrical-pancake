<?php
/* Smarty version 4.1.1, created on 2024-08-02 10:12:27
  from '/app/www/design/themes/responsive/templates/addons/geo_maps/blocks/customer_location.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ac86dbb50cf4_70141014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59a710bdd74eecdf13db571f34e3baa7aa5852ca' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/geo_maps/blocks/customer_location.tpl',
      1 => 1722513958,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
  ),
),false)) {
function content_66ac86dbb50cf4_70141014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.your_city','geo_maps.select_your_city','geo_maps.your_city','geo_maps.select_your_city'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps']['status'] == "A") {?>
    <?php $_smarty_tpl->_assignInScope('block_id', (($tmp = $_smarty_tpl->tpl_vars['block']->value['snapping_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp));?>
    <div class="ty-geo-maps__geolocation"
         data-ca-geo-map-location-is-location-detected="<?php if ((($tmp = $_smarty_tpl->tpl_vars['location_detected']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>true<?php } else { ?>false<?php }?>"
         data-ca-geo-map-location-element="location_block"
         id="geo_maps_location_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "geo_maps_location_popup_opener", null, null);?>
            <span data-ca-geo-map-location-element="location" class="ty-geo-maps__geolocation__location"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['location']->value['city'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("geo_maps.your_city") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"geo_maps.customer_geolocation",'link_text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'geo_maps_location_popup_opener'),'link_text_meta'=>"ty-geo-maps__geolocation__opener-text",'link_icon'=>"ty-icon-location-arrow",'link_icon_first'=>true,'link_meta'=>"ty-geo-maps__geolocation__opener",'text'=>$_smarty_tpl->__("geo_maps.select_your_city"),'id'=>"geo_maps_location_dialog_".((string)$_smarty_tpl->tpl_vars['block_id']->value),'content'=>''), 0, false);
?>
    <!--geo_maps_location_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/blocks/customer_location.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/blocks/customer_location.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps']['status'] == "A") {?>
    <?php $_smarty_tpl->_assignInScope('block_id', (($tmp = $_smarty_tpl->tpl_vars['block']->value['snapping_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp));?>
    <div class="ty-geo-maps__geolocation"
         data-ca-geo-map-location-is-location-detected="<?php if ((($tmp = $_smarty_tpl->tpl_vars['location_detected']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>true<?php } else { ?>false<?php }?>"
         data-ca-geo-map-location-element="location_block"
         id="geo_maps_location_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "geo_maps_location_popup_opener", null, null);?>
            <span data-ca-geo-map-location-element="location" class="ty-geo-maps__geolocation__location"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['location']->value['city'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("geo_maps.your_city") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"geo_maps.customer_geolocation",'link_text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'geo_maps_location_popup_opener'),'link_text_meta'=>"ty-geo-maps__geolocation__opener-text",'link_icon'=>"ty-icon-location-arrow",'link_icon_first'=>true,'link_meta'=>"ty-geo-maps__geolocation__opener",'text'=>$_smarty_tpl->__("geo_maps.select_your_city"),'id'=>"geo_maps_location_dialog_".((string)$_smarty_tpl->tpl_vars['block_id']->value),'content'=>''), 0, true);
?>
    <!--geo_maps_location_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
}
