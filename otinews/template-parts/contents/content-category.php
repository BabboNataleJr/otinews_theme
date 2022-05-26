    <span class="tags__title h4">
        <?php _e(strtoupper('NEWS'), 'otinews');?>
    </span>
    <div class="right__category__menu__wrapper">
        <?php
            $args = array(
            'theme_location' => 'otinews-bottom-title-menu',
            'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container' => '',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'navbar-nav text-uppercase right__category__menu',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
            );
            get_template_part('template-parts/header/menu/menu', '', $args)
        ?>
    </div>