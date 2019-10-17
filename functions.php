<?php
    //invocando al menu
    if (function_exists('register_nav_menus')) {
        register_nav_menus(array('principal' => 'Menu Principal'));
    }
    
    //clases para llamar a la a
    // add_filter('nav_menu_link_attributres', 'anclas', 10, 3);

    // function anclas(){
    //     $class = 'nav-link';
    //     $atts['class'] = $class;
    //     return $atts;
    // }

    //agregada la imagen destacada
    if ( function_exists( 'add_theme_support' )) {
        add_theme_support('post-thumbnails');
        //set_post_thumbnail_size(500, 350, true)//dimensiones por defecto

        //additional images sizes
        //delete the next line if you do not need additional image sizes
        //add_image_size('category-thumb', 300, 99990);//300 pixels wide (and unlimited height)
    }



?>