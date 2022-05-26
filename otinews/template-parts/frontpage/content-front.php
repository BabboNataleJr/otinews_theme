    <!-- Middle Row -->
    <?php 
            $post_id = get_the_ID();
            $category_object = get_the_category( $post_id );
            $category_name = $category_object[0]->name;
            $category_id = get_cat_ID( "$category_name" );
            $category_link = get_category_link( $category_id );
        ?>
    <div class="front-content row">
        <div class="post__thumbnail__front col-md-5">
            <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail( $post_id )){
                        the_post_thumbnail('thumbnail');
                    }?>
            </a>
        </div>
        <div class="post__info col-md-7 align-self-center">
            <h4 class="content__front__post__title"><?php the_title();?></h4>
            <div class="content__front__metadata">
                <a href="<?php _e($category_link);?>" class="category__link">
                    <?php
                            _e(strtoupper($category_name),'otinews');
                        ?>
                </a>
                <span class="content__date">
                    <?php 
                            $date = substr(get_the_date(), 0, 10);
                            $formatted_date = date('d M Y', strtotime($date));
                            _e(strtoupper($formatted_date), 'otinews'); 
                        ?>
                </span>
            </div>
            <div class="content__front__excerpt">
                <?php
                        the_excerpt();
                    ?>
            </div>
            <div class="content__front__permalink__wrapper">
                <a href=" <?php the_permalink(); ?>" class="content__front__permalink">
                    <?php _e('Leggi tutto ->','otinews');?>
                </a>
            </div>
        </div>

    </div>
    <!-- End Middle Row -->

    <!-- <div class="col-md-0 col-lg-1 col-0"></div> -->