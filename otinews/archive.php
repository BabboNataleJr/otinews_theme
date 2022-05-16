<?php 
    get_header();
?>

<div class="container-fluid">
    <div class="row front__page__front__post__from__blog">
        <?php
            if( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part('template-parts/contents/content', 'archive');
                endwhile;
                otinews_pagination_bar();
            endif;
        ?>

    </div>

    <?php 
?>
</div>


<?php 
    get_footer();
?>