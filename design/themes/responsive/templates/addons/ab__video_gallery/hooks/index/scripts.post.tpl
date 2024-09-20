<script>
    (function (_, $) {
        _.ab__video_gallery = {
            settings: {
                on_thumbnail_click: '{$addons.ab__video_gallery.on_thumbnail_click}',
                theme_name: '{fn_get_theme_path('[theme]')}',
                controls: '{$addons.ab__video_gallery.controls}',
                loop: '{$addons.ab__video_gallery.repeat}',
            },
            players: { },
            youtube_api_loaded: false,
            vimeo_api_loaded: false,
        };
    })(Tygh, Tygh.$);
</script>
{script src="js/addons/ab__video_gallery/func.js"}