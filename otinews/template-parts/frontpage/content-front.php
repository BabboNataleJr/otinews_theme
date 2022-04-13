    <div class="col-md-2"></div>
    <div class="col-md-6 front__posts">
        <!-- Middle Row -->
        <?php $post_id = get_the_ID();?>
        <div class="front-content row">
            <div class="post__thumbnail col-md-4">
                <a href="<?php the_permalink(); ?>">
                    <?php if(has_post_thumbnail( $post_id )){
                        the_post_thumbnail('thumbnail');
                    }?>
                </a>
            </div>
            <div class="post__info col-md-8 align-self-center">
                <h4><?php the_title();?></h4>
                <p>
                    <a href="/">
                        <?php
                            $category_object = get_the_category( $post_id );
                            $category_name = $category_object[0]->name;
                            _e(strtoupper($category_name),'otinews');
                        ?>
                    </a>
                    <?php 
                        $date = substr(get_the_date(), 0, 10);
                        $formatted_date = date('d M Y', strtotime($date));
                        _e(strtoupper($formatted_date), 'otinews'); 
                    ?>
                </p>
                <p>
                    <?php
                        the_excerpt();
                    ?>
                </p>
                <a href="<?php the_permalink(); ?>">
                    <?php _e('Leggi tutto ->','otinews');?>
                </a>
            </div>

        </div>
        <!-- End Middle Row -->
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-2 front__pubblicita"></div>
    <div class="col-md-1"></div>