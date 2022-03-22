<?php

function otinews_load_script(){

    $version = wp_get_theme()-> wp_get_option('Version');
    wp_enqueue_style( '', '', array(), $version, '' )

}