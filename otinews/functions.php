<?php

    /**
     * Add theme funcitonality
     */
    function otinews_add_theme_support(){
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails', array( 'post', 'page', 'service'));
        //Add the customizer support
        require_once get_template_directory() . '/inc/customizer/customizer.php';
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
        wp_enqueue_style('otinews-bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
        wp_enqueue_style('otinews-theme-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');

        //JS Enqueuer
        //Theme Main JS
        wp_enqueue_script('otinews-bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', 'all', true);
        wp_enqueue_script('otinews-theme-script', get_template_directory_uri() . '/assets/js/main.js', array(), $version, 'all', true);
    }

    add_action('wp_enqueue_scripts', 'otinews_load_scripts');
    
    /**
     * Register the menu and their locations
     */
    function otinews_menu_config()
    {
        $theme_domain = wp_get_theme()->get( 'Text Domain' );
        $locations = array(
            'otinews-header-menu'           => __('Otinews Header Menu', "$theme_domain"),
            'otinews-footer-menu'           => __('Otinews Footer Menu', "$theme_domain"),
            'otinews-upper-title-menu'      => __( 'Navwalker Menu above the logo', "$theme_domain"),
            'otinews-bottom-title-menu'     => __( 'Navwalker Menu under the logo', "$theme_domain"),
        );
        register_nav_menus( $locations );
    }

    /**
     * Register Custom Navigation Walker
     * And add menu support
     */
    function register_navwalker(){
        require_once get_template_directory() . '/inc/navwalker/class-wp-bootstrap-navwalker.php';
        otinews_menu_config();
    }
    add_action( 'after_setup_theme', 'register_navwalker' );


    /**
     * Add Widget support
     * For sidebar e footer
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