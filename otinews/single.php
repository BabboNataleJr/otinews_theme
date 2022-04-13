<?php 
    get_header();
?>

<article id="article-content" class="content">

    <?php
        if( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part('template-parts/contents/content', 'article');
            endwhile;
            otinews_pagination_same_category($post);
        endif;
    ?>

</article>


<?php 
    get_footer();
?>