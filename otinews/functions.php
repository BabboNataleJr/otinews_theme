<?php

    /**
     * Add theme funcitonality
     */
    function otinews_add_theme_support(){
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbanails' );
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
     * Add Menu Support
     */
    function otinews_menu_config()
    {
        $locations = array(
            'otinews-header-menu'       => 'Otinews Header Menu',
            'otinews-footer-menu'       => 'Otinews Footer Menu'
        );
        register_nav_menus( $locations );
    }

    add_action( 'init', 'otinews_menu_config' );


    /**
     * Add Widget support
     * Per sidebar e footer
     */
    function otinews_widget_area()
    {
        $footer_bar_options = array(
            'before_title'              => '<h2>',
            'after_title'               => '</h2>',
            'before_widget'             => '',
            'after_widget'              => '',
            'name'                      => 'Footer Widget Area',
            'id'                        => 'footer-bar-1',
            'description'               => 'Footer Widget Area'
        );
        register_sidebar($footer_bar_options);
    }

    add_action('widgets_init', 'otinews_widget_area');