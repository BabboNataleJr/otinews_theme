<nav class="navbar navbar-expand-lg col-md-7 footer__menu">
    <div class="col-md-2">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer/footer-logotipo.svg">
    </div>
    <div class="col-md-1"></div>
    <div class="col">
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
    </div>
</nav>