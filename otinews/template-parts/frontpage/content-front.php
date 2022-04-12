    <div class="col-md-2"></div>
    <div class="col-md-6 front__posts">
        <!-- Middle Row -->
        <?php $post_id = $args->ID?>
        <div class="front-content row">
            <div class="post__thumbnail col-md-4">
                <a href="<?php _e(get_permalink($post_id),'otinews'); ?>">
                    <?php if(has_post_thumbnail( $post_id )){
                        _e(get_the_post_thumbnail( $post_id, 'thumbnail' ), 'otinews');
                    }?>
                </a>
            </div>
            <div class="post__info col-md-8 align-self-center">
                <h4><?php _e(get_the_title($args), 'otinews')?></h4>
                <p>
                    <a href="/">
                        <?php
                            $category_object = get_the_category( $post_id );
                            $category_name = $category_object[0]->name;
                            _e(strtoupper($category_name),'otinews');
                        ?>
                    </a>
                    <?php 
                        $date = substr($args->post_date, 0, 10);
                        $formatted_date = date('d M Y', strtotime($date));
                        _e(strtoupper($formatted_date), 'otinews'); 
                    ?>
                </p>
                <p>
                    <?php
                        _e(get_the_excerpt( $args ), 'otinews');
                    ?>
                </p>
                <a href="<?php _e(get_permalink($args),'otinews'); ?>">
                    <?php _e('Leggi tutto ->','otinews');?>
                </a>
            </div>

        </div>
        <!-- End Middle Row -->
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-2 front__pubblicita"></div>
    <div class="col-md-1"></div>