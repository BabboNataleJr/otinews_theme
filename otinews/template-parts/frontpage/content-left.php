<div class="col-md-1"></div>
<div class="col-md-4">
    <div class="post-thumbnail">
        <a href="<?php _e($args->guid, 'otinews'); ?>">
            <?php if(has_post_thumbnail( $args->ID )){
                _e(get_the_post_thumbnail( $args->ID, 'medium' ), 'otinews');
            }?>
        </a>
    </div>
    <p>
        <?php 
            $category_object = get_the_category( $args->ID );
            $category_name = $category_object[0]->name;
            _e(strtoupper($category_name),'otinews');
        ?>
    </p>
    <h4 class="title" id="post-title">
        <?php _e($args->post_title, 'otinews')?>
    </h4>
    <p><?php
            $date = substr($args->post_date, 0, 10);
            $formatted_date = date('d M Y', strtotime($date));
            _e(strtoupper($formatted_date), 'otinews'); 
        ?>
    </p>
    <?php 
        // echo get_the_post_thumbnail( $args[0]->ID, 'medium' );
        // var_dump($args[0])
    ?>
</div>