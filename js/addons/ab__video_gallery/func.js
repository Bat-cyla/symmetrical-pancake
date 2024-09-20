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
(function (_, $) {
function ab__toggle_video(video_id, event) {
const player = _.ab__video_gallery.players[video_id];
if (player !== void(0)) {
if (player.type === 'Y' && typeof player.player.pauseVideo === 'function') {
if (event === 'play') {
player.player.playVideo();
} else {
player.player.pauseVideo();
}
} else if (player.type === 'V' && typeof player.player.pause === 'function') {
if (event === 'play') {
player.player.play();
} else {
player.player.pause();
}
} else if (player.type === 'R' && typeof player.player.pause === 'function') {
if (event === 'play') {
player.player.play();
} else {
player.player.pause();
}
} else {
$.ceEvent('trigger', 'ab__vg.toggle_custom_player', [video_id, player, event]);
}
}
}
function ab__vg_on_state_change (event) {
$.ceEvent('trigger', 'ab__vg.on_state_change', [this, ...arguments]);
}
$.ceEvent('on', 'ce.dialogshow', function(d) {
if (/ab__vg_video_/.test(d.attr('id'))) {
$('.ab__vg_loading', $(d)).trigger('click');
}
const video = $('iframe,video', d);
if (video.length) {
video.each(function() {
ab__toggle_video((this.getAttribute('id') || this.getAttribute('data-id') || $(this).parent().get(0).getAttribute('id')), 'play');
});
}
});
$.ceEvent('on', 'ce.dialogclose', function(d) {
const video = $('iframe,video', d);
if (video.length) {
video.each(function() {
ab__toggle_video((this.getAttribute('id') || this.getAttribute('data-id') || $(this).parent().get(0).getAttribute('id')), 'pause');
});
}
});

$.ceEvent('on', 'ce.product_image_gallery.ready', function () {
const elem = $('.cm-thumbnails-mini.active');
if (elem.length) {
const c_id = elem.data('caGalleryLargeId'),
pos = elem.data('caImageOrder') || 0;
if (c_id !== undefined) {
$('#' + c_id).closest('.cm-preview-wrapper').trigger('owl.goTo', pos);
}
const gallery = elem.closest('.owl-carousel');
if (gallery.length) {
for (let i=2; i<pos; i++) {
gallery.trigger('owl.next');
}
}
}
});

$.ceEvent('on', 'ce.product_image_gallery.image_changed', function () {
$('iframe.ab__vg-image_gallery_video,video.ab__vg-image_gallery_video,.ab__vg-image_gallery_video iframe,video').each(function() {
ab__toggle_video(this.id || $(this).parent().get(0).getAttribute('id'));
});
});
$(_.doc).on('click', '.ab__vg_loading', function() {
init_video($(this));
});
$(_.doc).on('click', '.ab__vg-image_gallery_video.cm-dialog-opener', function() {
const id = $(this).data('caTargetId');
if (id !== undefined) {
$('#' + id + ' .ab__vg_loading').trigger('click');
}
});
function init_video(elem) {
let video_id, video_type, video_path;
[video_id, video_type, video_path] = prepare_video(elem);
if (video_type === 'Y') {
if (_.ab__video_gallery.youtube_api_loaded === false) {
window.onYouTubeIframeAPIReady = function() {
_.ab__video_gallery.youtube_api_loaded = true;
add_youtube_listeners(elem, video_id, video_path, video_type);
};
$.getScript('https://www.youtube.com/iframe_api');
} else {
add_youtube_listeners(elem, video_id, video_path, video_type);
}
} else if (video_type === 'V') {
if (_.ab__video_gallery.vimeo_api_loaded === false) {
$.getScript('https://player.vimeo.com/api/player.js', function () {
_.ab__video_gallery.vimeo_api_loaded = true;
add_vimeo_listeners(elem, video_id, video_path, video_type);
});
} else {
add_vimeo_listeners(elem, video_id, video_path, video_type);
}
} else if (video_type === 'R') {
add_resource_player_listeners(elem, video_id, video_path, video_type);
} else {
const video = add_custom_player_listeners(elem, video_id);
$.ceEvent('trigger', 'ab__vg.load_custom_player', [video_type, video, video_id]);
}
}
function prepare_video(elem) {
let image = elem.find('img');
if (!image.length) {
image = elem.find('div[data-ab-vg-video-type]');
}
const video_id = elem.attr('id') || elem.attr('data-id'),
video_type = image.data('abVgVideoType') || elem.data('abVgVideoType'),
video_path = image.data('abVgVideoPath') || elem.data('abVgVideoPath');
elem.removeClass('ab__vg_loading');
return [video_id, video_type, video_path];
}
function add_youtube_listeners(video_elem, video_id, video_path, video_type) {
_.ab__video_gallery.players[video_id] = {
player: new YT.Player(video_id, {
videoId: video_path,
playerVars: {
autoplay: 1,
controls: +(_.ab__video_gallery.settings.controls === 'Y'),
loop: +(_.ab__video_gallery.settings.loop === 'Y'),
playlist: video_path,
hl: _.cart_language,
rel: 0,
enablejsapi: 1,
origin: window.location.href,
},
events: {
'onStateChange': ab__vg_on_state_change.bind({ video_id: video_id, video_type: video_type }),
onError({ target }) {
const { errorCode } = target.getVideoData()
errorCode === "auth" && target.stopVideo().playVideo()
}
}
}),
type: video_type
};
}
function add_vimeo_listeners(video_elem, video_id, video_path, video_type) {
const player = _.ab__video_gallery.players[video_id] = {
player: new Vimeo.Player($('#' + video_id).get(0), {
id: video_path,
loop: +(_.ab__video_gallery.settings.loop === 'Y'),
}),
type: video_type
};
video_elem.find('img').remove();
player.player.on('play', ab__vg_on_state_change.bind({ video_id: video_id, video_type: video_type, event: 'play' }));
player.player.on('pause', ab__vg_on_state_change.bind({ video_id: video_id, video_type: video_type, event: 'pause' }));
player.player.getVideoTitle().then(function(title) {
const video = $(player.player.element);
$.each(video_elem.data(), function(i, val) {
if (i != 'src') {
video.attr(i, val);
}
});
ab__toggle_video(video_id, 'play');
});
}
function add_resource_player_listeners(video_elem, video_id, video_path, video_type) {
const video = $('<video></video>');
video.attr('id', video_id);
video.addClass(video_elem.attr('class'));
video.attr('controls', '');
if ((_.ab__video_gallery.settings.loop === 'Y')) {
video.attr('loop', '');
}
$.each(video_elem.data(), function(i, val) {
video.attr(i, val);
});
video.removeClass('ab__vg_video_player');
const video_wrapper = $('<div class="ab__vg_video_player"></div>');
video_wrapper.append(video);
video_elem.replaceWith(video_wrapper);
const player = _.ab__video_gallery.players[video_id] = {
player: video.get(0),
type: video_type
}
player.player.addEventListener('loadeddata', function() {
player.player.play();
});
}
function add_custom_player_listeners(video_elem, video_id) {
const video_path = video_elem.data('src');
video = $('<iframe></iframe>');
video.attr('id', video_id);
video.addClass(video_elem.attr('class'));
$.each(video_elem.data(), function(i, val) {
video.attr(i, val);
});
video_elem.replaceWith(video);
return video;
}
})(Tygh, Tygh.$);