<div class="post__title_and__thumbnail"
    style="background-image: url('<?php _e(get_the_post_thumbnail_url( get_the_ID() ));?>')">
    <div class="row align-content-center thumbanil__image__post">
        <div class="col-md-1"></div>
        <div class="single__post__title col-md-9">
            <h1 class="post__title"><?php _e(strtoupper(the_title()), 'otinews')?></h1>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>