<nav class="navbar navbar-expand-lg col-md-6 footer__menu">
    <?php get_template_part('template-parts/header/brand', 'logo'); ?>
    <div class="col-md-1"></div>
    <?php 
        $args = array(
            'theme_location'            => 'otinews-upper-title-menu',
            'depth'                     => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'                 => 'div',
            'container_class'           => 'collapse navbar-collapse',
            'container_id'              => 'navbarText',
            'menu_class'                => 'navbar-nav text-uppercase',
            'fallback_cb'               => 'WP_Bootstrap_Navwalker::fallback',
            'walker'                    => new WP_Bootstrap_Navwalker(),
        );
        get_template_part('template-parts/header/menu/menu', '', $args); 
    ?>
</nav>