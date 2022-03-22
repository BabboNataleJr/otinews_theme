<?php

    function otinews_load_scripts()
    {
        $version = wp_get_theme()->get( 'Version' );
        // Theme Main Style
        wp_enqueue_style('otinews-theme-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    }

    add_action('wp_enqueue_scripts', 'otinews_load_scripts');

    function otinews_menu_config()
    {
        register_nav_menus( array(
            'otinews-header-menu'      => 'Otinews Header Menu',
            'otinews-footer-menu'      => 'Otinews Footer Menu'
        ) )
    }