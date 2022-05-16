<div class="col-md-6 thumbnail__template__page__wrapper">

    <div class="page__title__wrapper">
        <h1 class="page__title"><?php _e(the_title(), 'otinews')?></h1>
    </div>
    <div class="page__post__thumbnail__wrapper"
        style='background: url("<?php _e(get_the_post_thumbnail_url());?>") no-repeat center/cover'>
        <!-- <?php the_post_thumbnail(); ?> -->
    </div>
    <div class="page__content">
        <?php the_content();?>
    </div>

</div>