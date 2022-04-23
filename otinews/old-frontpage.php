<?php 
    get_header();
    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
    $args = array(
        'post_type'                     => 'post',
        'post_per_page'                 => 10,
        'paged'                         => $paged
    );

    $blog_posts                         = new WP_Query($args);
    $i                                  = 0;
    // $post_data                          = array();
    // $post_data['position']['left']      = array();
    // $post_data['position']['right']     = array();
    // $post_data['position']['front']     = array();

    if ($blog_posts->have_posts()) :
        while ($blog_posts->have_posts()) :
            // $blog_posts->the_post();
            // $post_id                    = get_the_ID(); // or use the post id if you already have it
            // $category_object            = get_the_category($post_id);
            // $category_name              = strtolower($category_object[0]->name);
        endwhile;
?>

<div class="container-fluid">
    <div id="article-content" class="row justify-content-center">
        <div class="row justify-content-center front__page__left__right__wrapper">
            <!-- Left -->
            <?php get_template_part('template-parts/frontpage/content', 'left'); ?>

            <!-- Right -->
            <?php get_template_part('template-parts/frontpage/content', 'right'); ?>
        </div>

        <!-- Front -->
        <?php get_template_part('template-parts/frontpage/content', 'front'); ?>

        <div class="row pagination__row">
            <?php otinews_pagination_bar();?>
        </div>

    </div>

</div>

<?php 
            wp_reset_postdata();
        endif;
    get_footer();
?>