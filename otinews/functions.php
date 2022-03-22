<?php

    function otinews_load_scripts()
    {
        $version = wp_get_theme()->wp_get_option("Version");
        // Theme Main Style
        wp_enqueue_style('theme_style', get_template_directory_uri() . 'style.css', array(), $version, 'all');
    }

    add_action('wp_enqueue_scripts', 'otinews_load_scripts');

    function otinews_menu_config()
    {
        register_nav_menus( array(
            'otinews_header_menu'      => 'otinews Header Menu',
            'otinews_footer_menu'      => 'otinews Footer Menu'
        ) )
    }