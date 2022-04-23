<div class="meta-data-post">
    <div class="top-bar">
        <?php 
            $category_name = get_the_category( get_the_ID() )[0]->name;
            _e(strtoupper($category_name), 'otinews')
        ?>
    </div>
    <div class="intestazione__articolo">
        <span>
            <img src="<?php _e(get_site_icon_url(32));?>" alt="">
        </span>
        <span class="single__post__author">
            <?php
                _e(strtoupper('di ' . get_the_author())); 
            ?>
        </span>
        <span class="date">
            <?php 
                the_date('d M Y'); 
            ?>
        </span>
    </div>
    <div class="post__thumbnail__single">
        <a href="<?php _e(the_permalink(), 'otinews'); ?>">
            <?php if(has_post_thumbnail( get_the_ID() )){
                the_post_thumbnail('large');
            }?>
        </a>
    </div>
</div>