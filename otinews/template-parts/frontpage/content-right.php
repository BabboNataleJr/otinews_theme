<div class="col-md-6">
    <?php 
        $category_object = get_the_category( $args->ID );
        $category_name = $category_object[0]->name;
        $category_id = get_cat_ID( "$category_name" );
        $category_link = get_category_link( $category_id );
    ?>
    <div class="post__thumbnail post__thumbnail__right">
        <a href="<?php _e(get_the_permalink($args->ID), 'otinews'); ?>">
            <?php 
                if(has_post_thumbnail($args->ID)){
                    _e(get_the_post_thumbnail( $args->ID, 'large', array(
                        'class'         => "post__thumbnail__media__images__right"
                    ) ), 'otinews');
                }
            ?>
        </a>
        <div class="post__info post__info__right">
            <p class="category__name category__name__right">
                <a href="<?php _e($category_link);?>" class="category__link">
                    <?php
                        _e(strtoupper($category_name),'otinews');
                    ?>
                </a>
            </p>
            <h7 class="post__title post__title__right">
                <?php _e(get_the_title($args->ID), 'otinews'); ?>
            </h7>
        </div>
    </div>
</div>