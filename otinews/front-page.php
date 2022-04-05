<?php 
    get_header();
    $args = array(
        'post_type'                     => 'post',
        'posts_per_page'                => '10',
    );

    $blog_posts                         = new WP_Query($args);
    $i                                  = 0;
    $post_data                          = array();
    $post_data['position']['left']      = array();
    $post_data['position']['right']     = array();
    $post_data['position']['front']     = array();

    if ($blog_posts->have_posts()) :
        while ($blog_posts->have_posts()) :
            $blog_posts->the_post();
            $post_id                    = get_the_ID(); // or use the post id if you already have it
            $category_object            = get_the_category($post_id);
            $category_name              = strtolower($category_object[0]->name);
            switch($category_name) :
                case 'new': 
                    $post_data['position']['left'][]        = $blog_posts->posts[$i];
                    break;
                case 'important':
                    $post_data['position']['right'][]       = $blog_posts->posts[$i];
                    break;
                default:
                    $post_data['position']['front'][]       = $blog_posts->posts[$i];
            endswitch;
            $i++;
        endwhile;
        wp_reset_postdata();
    endif;

?>

<div class="container-fluid">
    <hr>
    <div id="article-content" class="row justify-content-center">

        <!-- Left -->
        <?php get_template_part('template-parts/frontpage/content', 'left', $post_data['position']['left'][0]); ?>

        <!-- Right -->
        <?php get_template_part('template-parts/frontpage/content', 'right', $post_data['position']['right']); ?>

        <!-- Front -->
        <hr>
        <?php get_template_part('template-parts/frontpage/content', 'front', $post_data['position']['front']); ?>

    </div>

</div>

<?php 
    get_footer();
?>