<div class="col-md-5 right__column">
    <div class="row g-3">
        <?php foreach($args as $post_a) : ?>
        <div class="col-md-6">
            <div class="post__thumbnail__right">
                <a href="<?php _e(get_the_permalink($post_a), 'otinews'); ?>">
                    <?php if(has_post_thumbnail( $post_a->ID )){
                    _e(get_the_post_thumbnail( $post_a->ID, 'thumbnail', array(
                        'class'         => "post__thumbnail__media__images__right"
                        )), 'otinews');
                }?>
                </a>
                <div class="post__info post__info__right">
                    <p class="category__name category__name__right">
                        <?php
                            $category_object = get_the_category( $post_a->ID );
                            $category_name = $category_object[0]->name;
                            _e(strtoupper($category_name),'otinews');
                        ?>
                    </p>
                    <h7 class="post__title post__title__right">
                        <?php _e(get_the_title($post_a), 'otinews'); ?>
                    </h7>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<div class="col-md-1"></div>