<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>

<body>

    <header class="">
        <div class="container-fluid">
            <!-- Top Bar -->
            <div id="top-bar" class="row bg-light border">
                <div class="search col-md-4 col-sm-">
                </div>
                <div class="search col-md-3 col-sm-12">
                    <p>Search</p>
                </div>
                <div class="widget col-md-3 col-sm-12">
                    <p>Widget per icone social</p>
                </div>
            </div>
            <!-- Navigation Menu -->
            <div class="row border">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="col-md-4"></div>
                    <div class="date col-md-3">
                        <?php _e(date('jS F Y'), 'otinews');?>
                    </div>
                    <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'otinews-navwalker-menu',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'callapse navbar-collapse',
                            'container_id'    => 'navbarText',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                            ) 
                        );
                    ?>
                </nav>
            </div>
            <!-- Header del sito con il logo -->
            <div class="row border">
                <div class="brand-icon col-md-4 text-center">
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
                <!-- <div class="col-md-2"></div> -->
                <div class="navbar-header col-md-3 align-self-center">
                    <a href="/" class="navbar-brand fs-1">
                        <?php _e(strtoupper(get_bloginfo('name')), 'otinews');?>
                    </a>
                    <div class="nuovo-menu">
                        <div class="navbar navbar-expand-lg navbar-light">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'  => 'otinews-navwalker-menu',
                                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'navbar-nav',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker(),
                                    ) 
                                );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <h1 class="page_title" id="page_title" align="center"><?php _e(the_title(), 'otinews')?></h1> -->
    </header>