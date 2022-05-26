<div class="container">
    <?php get_template_part('template-parts/singlepost/title', 'thumbnail')?>
    <div class="single__content row">
        <div class="col-md-1"></div>
        <div class="col-md-7 single__post__content__wrapper">
            <header class="content-header">
                <?php get_template_part('template-parts/singlepost/content', 'header')?>
            </header>
            <div class="single__content">
                <?php
                    the_content();
                ?>
            </div>
            <div class="content__article__single__social__icons">
                <?php 
                    dynamic_sidebar( 'social-icon-widget' )
                ?>
            </div>
            <div class="single__article__pagination__links row">
                <?php otinews_pagination_same_category($post);?>
            </div>
        </div>
        <div class="col-md-4 row">
            <div class="col-md-1"></div>
            <div class="col">
                <?php get_template_part( 'template-parts/contents/content', 'category' )?>
            </div>
        </div>
    </div>
</div>