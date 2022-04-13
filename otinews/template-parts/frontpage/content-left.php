<div class="col-md-1"></div>
<div class="col-md-5 left__column">
    <div class="post__thumbnail__left">
        <a href="<?php _e(get_the_permalink($args->ID), 'otinews'); ?>">
            <?php if(has_post_thumbnail($args->ID)){
                _e(get_the_post_thumbnail( $args->ID, 'thumbnail' ), 'otinews');
            }?>
        </a>

        <div class="post__info">
            <p class="category__name">
                <?php 
                    $category_object = get_the_category( $args->ID );
                    $category_name = $category_object[0]->name;
                    _e(strtoupper($category_name),'otinews');
                ?>
            </p>
            <h4 class="post__title" id="post__title">
                <?php _e(get_the_title($args->ID), 'otinews');?>
            </h4>
            <p>
                <?php
                    $date = substr($args->post_date, 0, 10);
                    $formatted_date = date('d M Y', strtotime($date));
                    _e(strtoupper($formatted_date), 'otinews'); 
                ?>
            </p>

        </div>
    </div>
</div>