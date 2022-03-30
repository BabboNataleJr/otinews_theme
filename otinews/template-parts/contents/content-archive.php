<div class="container">
    <div class="post">
        <div class="media">
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" class="post-media">
            <div class="post-body">
                <h3 class="post-title">
                    <a href="<?php the_permalink();?>">
                        <?php
                            the_title();
                        ?>
                    </a>
                </h3>
                <div class="post-metadata">
                    <span class="meta-post-date">
                        <?php
                            the_date();
                        ?>
                    </span>
                    <span class="meta-post-reading-time">
                        <?php
                            /**
                             * Inserire un plugin che calcola il
                             * tempo di lettura
                             * O eliminare questo span
                             */
                        ?>
                    </span>
                    <span class="meta-post-comments">
                        <?php
                            comments_number();
                        ?>
                    </span>
                </div>
                <div class="intro">
                    <?php
                        the_excerpt();
                    ?>
                </div>
                <a href="<?php the_permalink();?>"
                    class="post-link"><?php _e('Leggi tutto →', wp_get_theme()->get( 'Text Domain' )); ?></a>
            </div>
        </div>
    </div>
</div>