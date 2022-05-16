<?php
get_header();
?>

<div class="container-fluid page__container">
    <div class="row page__row">
        <div class="col-md-2"></div>
        <?php if(has_post_thumbnail()):
            get_template_part('template-parts/page/thumbnail', 'template');
        else : ?>

        <div class="col-md-6 page__wrapper">
            <?php
                if( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        get_template_part('template-parts/contents/content', 'page');
                    endwhile;
                endif;
            ?>
        </div>

        <?php endif; ?>

        <div class="col-md-2 ultimi__articoli">
            <div class="page__ultimi__articoli__super__title">
                <h4 class="ultimi__articoli__super__title">Ultimi articoli</h4>
            </div>
            <?php
                $args = array(
                    'post_type'     => 'post',
                    'category_name' => 'new, important'
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part('template-parts/page/ultimi', 'articoli');
                    }
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>
        </div>
        <!-- <div class="col-md-1"></div> -->

    </div>
</div>

<?php
get_footer();
?>