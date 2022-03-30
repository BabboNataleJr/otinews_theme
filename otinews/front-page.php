<?php 
    get_header();
?>

<div class="container-fluid border border-dark">

    <div id="article-content" class="content row py-5">

        <?php
            if( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part('template-parts/contents/content', 'frontpage');
                endwhile;
            endif;
        ?>

    </div>

</div>

<?php 
    get_footer();
?>