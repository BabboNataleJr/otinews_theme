<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>

<body>

    <header class="header">
        <div class="container-fluid">

            <!-- Top Bar -->
            <?php get_template_part('template-parts/header/top', 'bar'); ?>

            <!-- Upper Menu -->
            <?php get_template_part('template-parts/header/menu/upper', 'menu');?>
            <!-- Header del sito con il logo -->
            <?php get_template_part('template-parts/header/header', 'logo'); ?>
            <!-- Bottom Menu-->
            <?php get_template_part('template-parts/header/menu/bottom', 'menu');?>
        </div>

        <!-- <h1 class="page_title" id="page_title" align="center"><?php _e(the_title(), 'otinews')?></h1> -->
    </header>