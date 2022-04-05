<div class="row front-page-content-front">
    <div class="col-md-3"></div>
    <div class="col-md-6 front__posts">
        <!-- Middle Row -->
        <?php foreach($args as $post_a): ?>
        <div class="front-content row">
            <div class="post__thumbnail col-md-4">
                <a href="<?php _e(get_permalink($post_a),'otinews'); ?>">
                    <?php if(has_post_thumbnail( $post_a->ID )){
                        _e(get_the_post_thumbnail( $post_a->ID, 'thumbnail' ), 'otinews');
                    }?>
                </a>
            </div>
            <div class="post__info col-md-8 align-self-center">
                <h4><?php _e(get_the_title($post_a), 'otinews')?></h4>
                <p>
                    <a href="/">
                        <?php
                            $category_object = get_the_category( $post_a->ID );
                            $category_name = $category_object[0]->name;
                            _e(strtoupper($category_name),'otinews');
                        ?>
                    </a>
                    <?php 
                        $formatted_date = get_the_date('d M Y', $post_a);
                        _e(strtoupper($formatted_date), 'otinews');
                        
                    ?>
                </p>
                <p>
                    <?php
                        _e(get_the_excerpt( $post_a ), 'otinews');
                    ?>
                </p>
                <a href="<?php _e(get_permalink($post_a),'otinews'); ?>">
                    <?php _e('Leggi tutto ->','otinews');?>
                </a>
            </div>

        </div>
        <?php endforeach; ?>
        <!-- End Middle Row -->
    </div>
    <div class="col-md-3"></div>


</div>