<div class="row border border-dark">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="<?php _e(the_permalink()) ?>">
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail( 'otinews', array(
                            'class' => 'img-fluid'
                            ) 
                        );
                    } ?>
                </a>
            </div>
            <div class="col-md-5 align-self-center">
                <h4><?php _e(the_title(), 'otinews')?></h4>
                <p>
                    <a href="/">
                        <?php _e(strtoupper($args['category_name']), 'otinews'); ?>
                    </a>
                    <?php _e(strtoupper(date('j M Y')), 'otinews'); ?>
                </p>
                <?php _e(the_excerpt(), 'otinews')?>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>

</div>