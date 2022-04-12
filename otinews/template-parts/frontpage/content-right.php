<div class="col-md-6">
    <div class="post__thumbnail__right">
        <a href="<?php _e(get_the_permalink($args->ID), 'otinews'); ?>">
            <?php 
                if(has_post_thumbnail($args->ID)){
                    _e(get_the_post_thumbnail( $args->ID, 'thumbnail', array(
                        'class'         => "post__thumbnail__media__images__right"
                    ) ), 'otinews');
                }
            ?>
        </a>
        <div class="post__info post__info__right">
            <p class="category__name category__name__right">
                <?php
                    $category_object = get_the_category( $args->ID );
                    $category_name = $category_object[0]->name;
                    _e(strtoupper($category_name),'otinews');
                ?>
            </p>
            <h7 class="post__title post__title__right">
                <?php _e(get_the_title($args->ID), 'otinews'); ?>
            </h7>
        </div>
    </div>
</div>