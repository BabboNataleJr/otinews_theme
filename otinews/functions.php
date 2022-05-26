<?php

    /**
     * Add theme funcitonality
     */
    function otinews_add_theme_support(){
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails', array( 'post', 'page', 'service'));
        add_theme_support( 'custom-header' );
        //Add the customizer support
        require_once get_template_directory() . '/inc/customizer/customizer.php';
    }

    add_action( 'after_setup_theme' , 'otinews_add_theme_support' );

    function mytheme_custom_excerpt_length( $length ) {
        return 50;
    }
    add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


    /**
     * Load the scripts (style and javscript)
     */
    function otinews_load_scripts()
    {
        $version = wp_get_theme()->get( 'Version' );

        //CSS Enqueuer
        // Theme Main Style
        wp_enqueue_style('otinews-theme-bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
        wp_enqueue_style('otinews-theme-fontawesome-icon', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '6.1.1', 'all');
        wp_enqueue_style('otinews-theme-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');

        //JS Enqueuer
        //Theme Main JS
        wp_enqueue_script('otinews-bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', 'all', true);
        wp_enqueue_script('otinews-theme-script', get_template_directory_uri() . '/main.js', array(), $version, 'all', true);
    }

    add_action('wp_enqueue_scripts', 'otinews_load_scripts');
    
    /**
     * Register the menu and their locations
     */
    function otinews_menu_config()
    {
        $theme_domain = wp_get_theme()->get( 'Text Domain' );
        $locations = array(
            'otinews-upper-title-menu'      => __( 'Navwalker Menu above the logo (used in the footer also)', "$theme_domain"),
            'otinews-bottom-title-menu'     => __( 'Navwalker Menu under the logo (for the categories)', "$theme_domain"),
        );
        register_nav_menus( $locations );
    }

    /**
     * Register Custom Navigation Walker
     * And add menu support
     */
    function otinews_register_navwalker(){
        require_once get_template_directory() . '/inc/navwalker/class-wp-bootstrap-navwalker.php';
        otinews_menu_config();
    }
    add_action( 'after_setup_theme', 'otinews_register_navwalker' );


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
        
        $footer_bar_options['name'] = 'Footer Social Icon Area';
        $footer_bar_options['description'] = 'Insert the social icon you want to see on the screen';
        $footer_bar_options['id'] = 'social-icon-widget';
        register_sidebar($footer_bar_options);
        
        $footer_bar_options['name'] = 'Footer Widget Area 3';
        $footer_bar_options['description'] = 'Footer Widget Area 3';
        $footer_bar_options['id'] = 'footer-bar-3';
        register_sidebar($footer_bar_options);
        
        $footer_bar_options['name'] = 'Newsletter Widget';
        $footer_bar_options['description'] = 'Insert the text you want on the newsletter';
        $footer_bar_options['id'] = 'newsletter-widget';
        register_sidebar($footer_bar_options);
    }

    add_action('widgets_init', 'otinews_widget_area');


    function otinews_pagination_bar() {
        global $wp_query;
    
        $total_pages = $wp_query->max_num_pages;
    
        if ($total_pages > 1){
            $current_page = max(1, get_query_var('paged'));
    
            echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => '/page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
            ));
        }
    }

    function otinews_pagination_same_category($current_post){
        $post_id = $current_post->ID; // current post ID
        $cat = get_the_category(); 
        $current_cat_id = $cat[0]->cat_ID; // current category ID 

        $args = array( 
            'category' => $current_cat_id,
            'orderby'  => 'post_date',
            'order'    => 'DESC'
        );
        $posts = get_posts( $args );
        // get IDs of posts retrieved from get_posts
        $ids = array();
        foreach ( $posts as $thepost ) {
            $ids[] = $thepost->ID;
        }
        // get and echo previous and next post in the same category
        $thisindex = array_search( $post_id, $ids );
        $previd    = isset( $ids[ $thisindex - 1 ] ) ? $ids[ $thisindex - 1 ] : false;
        $nextid    = isset( $ids[ $thisindex + 1 ] ) ? $ids[ $thisindex + 1 ] : false;
        ?>

<div class="col-md-6 single__prev__post text-center">
    <?php if ($previd ) { ?>
    <a class="single__pagination__link link__prev" rel="prev" href="<?php echo get_permalink($previd) ?>">
        <?php _e(get_the_title($previd), 'otinews');?> </a>
    <?php } ?>
</div>
<div class="col-md-6 single__next__post text-center">
    <?php if ($nextid ) { ?>
    <a class="single__pagination__link link__next" rel="next" href="<?php echo get_permalink($nextid) ?>">
        <?php _e(get_the_title($nextid),'otinews');?>
    </a>
    <?php } ?>
</div>
<?php
    }



    function otinews_add_file_types_to_uploads($file_types){
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types = array_merge($file_types, $new_filetypes );
        return $file_types;
    }
    
    add_filter('upload_mimes', 'otinews_add_file_types_to_uploads');

    function otinews_custom_header_setup() {
        $defaults = array(
            // Default Header Image to display
            'default-image'         => get_template_directory_uri() . '/assets/images/header/inNEWS.jpg',
            // Display the header text along with the image
            'header-text'           => false,
            // Header text color default
            'default-text-color'        => '000',
            // Header image width (in pixels)
            'width'             => 1000,
            // Header image height (in pixels)
            'height'            => 198,
            // Header image random rotation default
            'random-default'        => false,
            // Enable upload of image file in admin 
            'uploads'       => false,
            // function to be called in theme head section
            'wp-head-callback'      => 'wphead_cb',
            //  function to be called in preview page head section
            'admin-head-callback'       => 'adminhead_cb',
            // function to produce preview markup in the admin screen
            'admin-preview-callback'    => 'adminpreview_cb',
            );
    }
    add_action( 'after_setup_theme', 'otinews_custom_header_setup' );


    function otinews_custom_trim($limit, $getThe, $markup) {
        $dictionary = array(
            'content'           => get_the_content(),
            'excerpt'           => get_the_excerpt(),
            'title'             => get_the_title()
        );
        return wp_trim_words($dictionary[$getThe], $limit, $markup);
    }