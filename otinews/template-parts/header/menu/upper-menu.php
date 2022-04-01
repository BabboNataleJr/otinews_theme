<div class="row">
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="col-md-4"></div>
        <div class="date col-md-3">
            <?php _e(strtoupper(date('j M Y')), 'otinews');?>
        </div>
        <?php
            wp_nav_menu( array(
            'theme_location'            => 'otinews-upper-title-menu',
            'depth'                     => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'                 => 'div',
            'container_class'           => 'collapse navbar-collapse',
            'container_id'              => 'navbarText',
            'menu_class'                => 'navbar-nav text-uppercase',
            'fallback_cb'               => 'WP_Bootstrap_Navwalker::fallback',
            'walker'                    => new WP_Bootstrap_Navwalker(),
                ) 
            );
        ?>
    </nav>
</div>