<div class="row page__ultimi__articoli">
    <a href="<?php _e(the_permalink()) ?>" class="page__ultimi__articoli__permalink">
        <div class="col-md-12 page__ultimi__articoli__thumbnail__wrapper">
            <?php if(has_post_thumbnail()){
                        the_post_thumbnail( 'otinews', array(
                            'class' => 'img-fluid'
                            ) 
                        );
                    } ?>
        </div>
        <div class="col-md-12 page__ultimi__articoli__meta__info">
            <h6 class="page__ultimi__articoli__title">
                <?php _e(otinews_custom_trim(8, 'title', '&nbsp;&hellip;'), 'otinews')?>
            </h6>
            <p class="page__ultimi__articoli__excerpt">
                <?php _e(otinews_custom_trim(10, 'excerpt', '&nbsp;&hellip;'), 'otinews')?>
            </p>
        </div>
    </a>

</div>