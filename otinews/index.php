<?php 
    get_header();
?>

<article id="article-content" class="content">

    <?php
        if( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part('template-parts/content', 'archive');
            endwhile;
        endif;
    ?>

    <?php 
    the_posts_pagination();
?>
</article>


<?php 
    get_footer();
?>