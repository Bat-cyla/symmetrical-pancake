class="{if $settings.abt__ut2.general.top_sticky_panel.enable[$settings.abt__device] == "YesNo::YES"|enum} sticky-top-panel {/if}
{if $settings.abt__ut2.general.sticky_panel.enable_sticky_panel[$settings.abt__device] == "YesNo::YES"|enum} sticky-bottom-panel {/if}
{if $settings.abt__ut2.category.show_sticky_panel_filters_and_categories[$settings.abt__device] == "YesNo::YES"|enum} sticky-fc-panel{/if}"