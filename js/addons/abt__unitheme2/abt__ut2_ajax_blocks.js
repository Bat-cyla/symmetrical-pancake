/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2023   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and accept    *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
(function(_, $) {
let is_any_block_loading = false
function load_blocks () {
let $wrappers = $('.cm-ut2-block-loader:not(.ut2-block-loaded):not(.ut2-block-loading)'),
window_height = $(window).height(),
scroll_top = $(window).scrollTop(),
additional_margin = parseInt(_.abt__ut2?.settings.general.block_loader_additional_margin) || 100;
if ($wrappers.length) {
$wrappers.each(function () {
let $wrapper = $(this);
let $block = $(this).find('[class^=cm-block-loader]');
let block_top = $(this).offset().top;
if (!is_any_block_loading && $block !== undefined && !$('html').hasClass('dialog-is-open') && scroll_top + window_height + additional_margin > block_top && scroll_top - window_height - additional_margin < block_top) {
is_any_block_loading = true;
$wrapper.addClass('ut2-block-loading');
setTimeout(function () {
$block.ceBlockLoader();
$wrapper.addClass('ut2-block-loaded');
$wrapper.removeClass('ut2-block-loading');
is_any_block_loading = false;
load_blocks ();
}, 500);
}
});
}
}
$(window).scroll(load_blocks);
$(document).ready(load_blocks);
$.ceEvent('on', 'ce.tab.init', load_blocks);
}(Tygh, Tygh.$));