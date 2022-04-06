<div class="container">
    <?php get_template_part('template-parts/singlepost/title', 'thumbnail')?>
    <div class="content row">
        <div class="col-md-2"></div>
        <div class="col-md-5 single__post__content__wrapper">
            <header class="content-header">
                <?php get_template_part('template-parts/singlepost/content', 'header')?>
            </header>
            <div class="single__content">
                <?php
                    the_content();
                ?>
            </div>
        </div>
        <div class="col-md-5 row">
            <div class="col-md-1"></div>
            <div class="col">
                <?php get_template_part( 'template-parts/contents/content', 'tags' )?>
            </div>
        </div>
    </div>
</div>