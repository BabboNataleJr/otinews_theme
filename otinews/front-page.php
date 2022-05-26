<?php 
    get_header();

    $paged                              = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

    $args = array(
        'post_type'                     =>   'post',
    );

    $postes                             =   new WP_Query($args);
    $i                                  =   0;
    $post_data                          =   array();
    $post_data['position']['left']      =   array();
    $post_data['position']['right']     =   array();
    $non_duplicare                      =   array();
?>

<?php
    if($postes->have_posts()) : 
        while ($postes->have_posts()) :
            $postes->the_post();
            $post_id                    =   get_the_ID(); // or use the post id if you already have i
            $category_object            =   get_the_category($post_id);
            $category_name              =   strtolower($category_object[0]->slug);
            switch($category_name) :
                case 'top': 
                    $post_data['position']['left'][]        =   $postes->posts[$i];
                    $non_duplicare[]                        =   $postes->posts[$i]->ID;
                    break;
                case 'in_evidenza':
                    $post_data['position']['right'][]       =   $postes->posts[$i];
                    $non_duplicare[]                        =   $postes->posts[$i]->ID;
                    break;
            endswitch;
            
            $i++;
        endwhile;
        wp_reset_postdata();
    endif;
?>

<div class="container-fluid">
    <div id="article-content" class="row justify-content-center">
        <div class="row justify-content-center front__page__left__right__wrapper">
            <!-- Left -->
            <?php 
                get_template_part('template-parts/frontpage/content', 'left', $post_data['position']['left'][0]);
            ?>

            <!-- Right -->
            <div class="col-md-6 col-lg-5 right__column">
                <div class="row g-3">
                    <?php
                        foreach($post_data['position']['right'] as $posted){
                            get_template_part('template-parts/frontpage/content', 'right', $posted);
                        } 
                    ?>
                </div>
            </div>
            <div class="col-md-1 right__last__space"></div>

        </div>

        <!-- Front -->
        <div class="row front__page__front__post__from__blog">
            <?php 
                if( have_posts() ) :
                    ?>
            <div class="col-0 col-md-1 col-lg-2"></div>
            <div class="col-lg-6 col-md-8 col-12 front__posts">
                <?php
                    while( have_posts()) : 
                        the_post();
                        if ( in_array( $post->ID, $non_duplicare ) ) continue;
                        get_template_part('template-parts/frontpage/content', 'front'); 
                    endwhile;
                ?>
            </div>
            <div class="col-md-2 front__widget__wrapper">
                <?php dynamic_sidebar( 'newsletter-widget'); ?>
            </div>
            <div class="col-md-1"></div>
            <div class="front__pagination__links row">
                <div class="col-md-2"></div>
                <div class="col-md-6 text-center front__pagination__bar">
                    <?php otinews_pagination_bar();?>
                </div>
            </div>
            <?php
                endif;
            ?>

        </div>
    </div>

</div>

<?php 
    get_footer();
?>