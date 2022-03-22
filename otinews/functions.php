<?php

    /**
     * Add theme funcitonality
     */
    function otinews_add_theme_support(){
        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme' , 'otinews_add_theme_support' );


    /**
     * Load the scripts (style and javscript)
     */
    function otinews_load_scripts()
    {
        $version = wp_get_theme()->get( 'Version' );

        //CSS Enqueuer
        // Theme Main Style
        wp_enqueue_style('otinews-theme-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');

        //JS Enqueuer
        //Theme Main JS
        wp_enqueue_script('otinews-theme-script', get_template_directory_uri() . '/assets/js/main.js', array(), $version, 'all', true);
    }

    add_action('wp_enqueue_scripts', 'otinews_load_scripts');
    
    /**
     * Add Some Configuration
     */
    function otinews_menu_config()
    {
        $locations = array(
            'otinews-header-menu'      => 'Otinews Header Menu',
            'otinews-footer-menu'      => 'Otinews Footer Menu'
        );
        register_nav_menus( $locations );
    }

    add_action( 'init', 'otinews_menu_config' );