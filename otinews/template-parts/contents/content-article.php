<div class="container">
    <header class="content-header">
        <div class="meta-data-post">
            <span class="date">
                <?php 
                    the_date(); 
                ?>
            </span>
            <?php 
                the_tags('<span class="tag">', '</span><span class="tag">', '</span>');
            ?>
            <span class="comments">
                <?php 
                    comments_number();
                ?>
            </span>
        </div>
    </header>
    <h1><?php _e(strtoupper(the_title()), 'otinews')?></h1>
    <a href="<?php _e(the_permalink(), 'otinews') ?>">
        <?php if(has_post_thumbnail()){
            the_post_thumbnail( 'medium' );
        }?>
    </a>
    <?php
        the_content();
        comments_template();
    ?>
</div>