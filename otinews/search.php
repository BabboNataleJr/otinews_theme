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
                if($_GET['s'] != "") : ?>
                    <div class="search__pagination__links row">
                        <div class="col-md-2"></div>
                        <div class="col-md-6 text-center search__pagination__bar">
                            <?php otinews_pagination_bar();?>
                        </div>
                    </div>
                <?php
                endif;
            endif;
        ?>

    </div>
</div>

<?php 
?>
</div>


<?php 
    get_footer();
?>