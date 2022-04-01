<div class="row">
    <div class="col-md-4"></div>
    <div class="navbar navbar-expand-lg col">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'otinews-bottom-title-menu',
                'depth'             => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'         => '',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'navbar-nav text-uppercase',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
                ) 
            );
        ?>
    </div>
</div>