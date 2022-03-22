<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>

<body>

    <?php
        wp_nav_menu( array(
            'menu'                  =>  'otinews-header-menu',
            'container'             =>  '',
            'theme_location'        =>  'otinews-header-menu',
            'items_wrap'            =>  '<ul id="" class=""></ul>'
        ) );
    ?>

    <header>
        <h1 class="page_title" id="page_title" align="center"><?php the_title()?></h1>
    </header>