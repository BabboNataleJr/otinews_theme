<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>

<body>

    <header>
        <h1 class="page_title" id="page_title" align="center"><?php the_title()?></h1>
        <nav>
            <a href="/" class="">
                <?php echo get_bloginfo('name')?>
            </a>
            <?php
                if(function_exists('the_custom_logo')){
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
            ?>
            <a href="/" class="">
                <img src="<?php echo $logo[0]?>" alt="logo">
            </a>

            <div id="otinews-header-menu-conteiner" class="navigation">
                <?php
                    wp_nav_menu( array(
                    'menu'              =>  'otinews-header-menu',
                    'container'         =>  '',
                    'theme_location'    =>  'otinews-header-menu',
                    'items_wrap'        =>  '<ul id="" class=""></ul>'
                    ) );
                ?>
            </div>
        </nav>
    </header>