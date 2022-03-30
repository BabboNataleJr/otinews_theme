<div class="brand-icon col-md-4 text-center align-self-center">
    <?php
            if(function_exists('the_custom_logo')){
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
        ?>

    <a href="/" class="">
        <img src="<?php echo $logo[0]?>" alt="logo">
    </a>
</div>