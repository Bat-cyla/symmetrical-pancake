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
$.ceEvent('on', 'ce.commoninit', function(context) {
context.find('.cm-ab-load-select-variation-content').click(function(){
var btn = this;
var product_id = btn.getAttribute('data-ca-product-id');
var target_id = 'ut2_select_variation_wrapper_' + product_id;
var existing_target = document.getElementById(target_id);
if (existing_target !== null) {
existing_target.remove();
}
var target = $(`<div id="${target_id}" class="ab-mobile-select-variation-container hidden"></div>`);
target.appendTo('#' + _.container);
$.ceAjax('request', fn_url('products.ut2_select_variation'), {
method: 'get',
hidden: false,
data: {
product_id: product_id,
get_view_content: target_id,
},
callback: function (res) {
if (res.html[target_id] !== undefined && res.html[target_id] !== null) {
target.html(res[target_id]);
btn.classList.add('loaded');
target.addClass('open');
_.abt__ut2.functions.toggleNoScroll(true);
$.ceEvent('trigger', 'ce.commoninit', [target]);

$.ceEvent('trigger', 'ut2_load_select_variation', [target, btn]);
}
}
});
$(document).on('click', '.ab-mobile-select-variation-container .ty-btn__add-to-cart', function () {
$.ceEvent('one', 'ce.ajaxdone', function () {
target.find('.ut2-icon-baseline-close').click();
});
});
});
});
}(Tygh, Tygh.$));