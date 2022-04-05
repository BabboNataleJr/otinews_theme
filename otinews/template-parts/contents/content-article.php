<div class="container">
    <div class="post__title_and__thumbnail"
        style="background-image: url('<?php _e(get_the_post_thumbnail_url( get_the_ID() ));?>')">
        <a href="<?php _e(the_permalink(), 'otinews') ?>">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="title col-md-8">
                    <h1><?php _e(strtoupper(the_title()), 'otinews')?></h1>
                </div>
                <div class="col-md-2"></div>
            </div>
        </a>
    </div>
    <header class="content-header">
        <?php get_template_part('template-parts/singlepost/content', 'header')?>
    </header>
    <div class="content">
        <?php
        the_content();
    ?>
    </div>
</div>