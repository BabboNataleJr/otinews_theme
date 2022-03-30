<div class="navbar-header col-md-3 align-self-center">
    <a href="/" class="navbar-brand" id="navbar-brand-name">
        <?php _e(strtoupper(get_bloginfo('name')), 'otinews');?>
    </a>
    <div class="menu__sotto__titolo">
        <div class="navbar navbar-expand-lg">
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
</div>