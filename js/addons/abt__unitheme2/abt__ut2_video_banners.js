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
let observer;
document.addEventListener('DOMContentLoaded', function () {
observer = new IntersectionObserver((entries) => {
entries.forEach((entry) => {
let videoElem = entry.target;
if (!entry.isIntersecting && !videoElem.paused && videoElem.currentTime > 0) {
videoElem.pause();
} else if (entry.isIntersecting && videoElem.paused) {
videoElem.play();
}
})
}, {});
})
$.ceEvent('on', 'ce.commoninit', function (context) {
$('video.ut2-banner__video', context).each((k, i) => {
observer.observe(i);
});
});
}(Tygh, Tygh.$));