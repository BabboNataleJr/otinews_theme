<?php 
    get_header();

    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

    $args = array(
        'posts_per_page'                =>   5,
        'post_type'                     =>   'post',
        'paged'                         =>   $paged
    );

    $postes                             =   new WP_Query($args);
    $post_data                          =   array();
    $non_duplicare                      =   array();
    $i                                  =   0;
?>

<?php
    if($postes->have_posts()) : 
        while ($postes->have_posts()) :
            $postes->the_post();
            $non_duplicare[]            =   $postes->posts[$i]->ID;
            $post_data[]                =   $postes->posts[$i];
            $i++;
        endwhile;
        wp_reset_postdata();
        // var_dump($post_data[0]);
    endif;
?>

<?php 
    if(is_paged()) : 
        get_template_part('index');
?>

<?php 
    else :
?>
<div class="container-fluid">
    <div id="article-content" class="row justify-content-center">
        <div class="row justify-content-center front__page__left__right__wrapper">
            <!-- Left -->
            <?php 
                get_template_part('template-parts/frontpage/content', 'left', $post_data[0]);
                array_shift($post_data);
            ?>

            <!-- Right -->
            <div class="col-md-5 right__column">
                <div class="row g-3">
                    <?php
                        foreach($post_data as $posted){
                            get_template_part('template-parts/frontpage/content', 'right', $posted);
                        } 
                    ?>
                </div>
            </div>
            <div class="col-md-1"></div>

        </div>


        <div class="row front__page__front__post__from__blog">
            <?php 
                if( have_posts() ) :
                    while( have_posts()) : 
                        the_post();
                        if ( in_array( $post->ID, $non_duplicare ) ) continue;
                        get_template_part('template-parts/frontpage/content', 'front'); 
                    endwhile;
                    pagination_bar();
                endif;
            ?>

        </div>
    </div>

</div>

<?php 
    endif;
    get_footer();
?>