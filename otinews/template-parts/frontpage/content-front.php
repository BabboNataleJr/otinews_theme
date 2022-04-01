<div class="row border border-dark">
    <?php foreach($args as $post_a): ?>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php _e($post_a->guid, 'otinews'); ?>">
                    <?php if(has_post_thumbnail( $post_a->ID )){
                        _e(get_the_post_thumbnail( $post_a->ID, 'medium' ), 'otinews');
                    }?>
                </a>
            </div>

            <div class="col-md-5 align-self-center">
                <h4><?php _e($post_a->post_title, 'otinews')?></h4>
                <p>
                    <a href="/">
                        <?php
                            $date = substr($post_a->post_date, 0, 10);
                            $formatted_date = date('d M Y', strtotime($date));
                            _e(strtoupper($formatted_date), 'otinews'); 
                        ?>
                    </a>
                    <?php 
                        $category_object = get_the_category( $post_a->ID );
                        $category_name = $category_object[0]->name;
                        _e(strtoupper($category_name),'otinews');
                    ?>
                </p>
            </div>

        </div>
    </div>
    <div class="col-md-2"></div>
    <?php endforeach; ?>

</div>