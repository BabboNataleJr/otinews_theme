<?php 
    get_header();
?>

<div class="container">

    <article id="article-content" class="content row py-5">

        <?php
        if( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part('template-parts/content', 'frontpage');
            endwhile;
        endif;
    ?>

    </article>

</div>

<?php 
    get_footer();
?>