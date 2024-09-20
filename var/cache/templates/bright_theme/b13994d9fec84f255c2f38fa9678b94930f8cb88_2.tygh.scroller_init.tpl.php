<?php
/* Smarty version 4.1.1, created on 2024-09-19 14:09:53
  from '/app/www/design/themes/responsive/templates/common/scroller_init.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66ec068158f676_23378003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b13994d9fec84f255c2f38fa9678b94930f8cb88' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/common/scroller_init.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ec068158f676_23378003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','next','prev_page','next'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
');

        $('.ty-float-left:contains(.ty-scroller-list),.ty-float-right:contains(.ty-scroller-list)').css('width', '100%');

        var item = <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            // default setting of carousel
            itemsDesktop = 4,
            itemsDesktopSmall = 3,
            itemsTablet = 2,
            itemsMobile = <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item_quantity_responsive']->value["mobile"] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        var desktop = [1199, itemsDesktop],
            desktopSmall = [979, itemsDesktopSmall],
            tablet = [768, itemsTablet],
            mobile = [479, itemsMobile];

        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
        function outsideNav () {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").hide();
            } else {
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").show();
            }
        }
        function afterInit () {
            outsideNav.apply(this);
            $.ceEvent('trigger', 'ce.scroller.afterInit', [this]);
        }
        function afterUpdate () {
            outsideNav.apply(this);
            $.ceEvent('trigger', 'ce.scroller.afterUpdate', [this]);
        }
        <?php } else { ?>
        function afterInit () {
            $.ceEvent('trigger', 'ce.scroller.afterInit', [this]);
        }
        function afterUpdate () {
            $.ceEvent('trigger', 'ce.scroller.afterUpdate', [this]);
        }
        <?php }?>
        function beforeInit () {
            $.ceEvent('trigger', 'ce.scroller.beforeInit', [this]);
        }
        function beforeUpdate () {
            $.ceEvent('trigger', 'ce.scroller.beforeUpdate', [this]);
        }

        if (elm.length) {
            elm.owlCarousel({
                direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: item,
                itemsDesktop: desktop,
                itemsDesktopSmall: desktopSmall,
                itemsTablet: tablet,
                itemsMobile: mobile,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['scroll_per_page'] == "Y") {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['not_scroll_automatically'] == "Y") {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['pause_delay']*(($tmp = 1000 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                <?php }?>
                lazyLoad: true,
                slideSpeed: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "N") {?>
                navigation: true,
                navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
'],
                <?php }?>
                pagination: false,
                beforeInit: beforeInit,
                afterInit: afterInit,
                beforeUpdate: beforeUpdate,
                afterUpdate: afterUpdate
            });
            <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>

              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.prev');
              });
              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.next');
              });
            <?php }?>

        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/scroller_init.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/scroller_init.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
');

        $('.ty-float-left:contains(.ty-scroller-list),.ty-float-right:contains(.ty-scroller-list)').css('width', '100%');

        var item = <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            // default setting of carousel
            itemsDesktop = 4,
            itemsDesktopSmall = 3,
            itemsTablet = 2,
            itemsMobile = <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item_quantity_responsive']->value["mobile"] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        var desktop = [1199, itemsDesktop],
            desktopSmall = [979, itemsDesktopSmall],
            tablet = [768, itemsTablet],
            mobile = [479, itemsMobile];

        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
        function outsideNav () {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").hide();
            } else {
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").show();
            }
        }
        function afterInit () {
            outsideNav.apply(this);
            $.ceEvent('trigger', 'ce.scroller.afterInit', [this]);
        }
        function afterUpdate () {
            outsideNav.apply(this);
            $.ceEvent('trigger', 'ce.scroller.afterUpdate', [this]);
        }
        <?php } else { ?>
        function afterInit () {
            $.ceEvent('trigger', 'ce.scroller.afterInit', [this]);
        }
        function afterUpdate () {
            $.ceEvent('trigger', 'ce.scroller.afterUpdate', [this]);
        }
        <?php }?>
        function beforeInit () {
            $.ceEvent('trigger', 'ce.scroller.beforeInit', [this]);
        }
        function beforeUpdate () {
            $.ceEvent('trigger', 'ce.scroller.beforeUpdate', [this]);
        }

        if (elm.length) {
            elm.owlCarousel({
                direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: item,
                itemsDesktop: desktop,
                itemsDesktopSmall: desktopSmall,
                itemsTablet: tablet,
                itemsMobile: mobile,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['scroll_per_page'] == "Y") {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['not_scroll_automatically'] == "Y") {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['pause_delay']*(($tmp = 1000 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                <?php }?>
                lazyLoad: true,
                slideSpeed: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "N") {?>
                navigation: true,
                navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
'],
                <?php }?>
                pagination: false,
                beforeInit: beforeInit,
                afterInit: afterInit,
                beforeUpdate: beforeUpdate,
                afterUpdate: afterUpdate
            });
            <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>

              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.prev');
              });
              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.next');
              });
            <?php }?>

        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
