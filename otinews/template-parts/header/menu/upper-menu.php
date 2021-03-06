<div class="row upper__menu__row">
    <nav class="navbar navbar-expand-lg">
        <input class="navbar-toggler" id="button__opener" type="checkbox" data-bs-toggle="collapse"
            data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
            aria-label="Toggle navigation">
        <label class="navbar-toggler-icon" for="button__opener" id="label__button__opener">
            <div class="line line__uno"></div>
            <div class="line line__due"></div>
            <div class="line line__tre"></div>
        </label>

        <div class="col-md-4"></div>
        <div class="upper__date col-md-3">
            <?php _e(strtoupper(date('j M Y')), 'otinews');?>
        </div>
        <?php 
            $args = array(
                'theme_location'            => 'otinews-upper-title-menu',
                'depth'                     => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'                 => 'div',
                'container_class'           => 'collapse navbar-collapse menu__wrapper',
                'container_id'              => 'navbarText',
                'menu_class'                => 'navbar-nav text-uppercase upper__menu',
                'fallback_cb'               => 'WP_Bootstrap_Navwalker::fallback',
                'walker'                    => new WP_Bootstrap_Navwalker(),
            );
            get_template_part('template-parts/header/menu/menu', '', $args); 
        ?>
    </nav>
</div>