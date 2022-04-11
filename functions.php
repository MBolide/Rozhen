<?php

function load_stylesheets(){
    wp_register_style('font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap', array(),1,all);
    wp_enqueue_style('font');

    //bootstrap.min css
    wp_register_style('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');


    //Icon Font Css
    wp_register_style('themify', get_template_directory_uri() . '/plugins/themify/css/themify-icons.css', array(), 1, 'all');
    wp_enqueue_style('themify');

    wp_register_style('fontawesome', get_template_directory_uri() . '/plugins/fontawesome/css/all.css', array(), 1, 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('magnific-popup', get_template_directory_uri() . '/plugins/magnific-popup/dist/magnific-popup.css', array(), 1, 'all');
    wp_enqueue_style('magnific-popup');


    //Owl Carousel CSS
    wp_register_style('slick', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick.css', array(), 1, 'all');
    wp_enqueue_style('slick');

    wp_register_style('slick-theme', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick-theme.css', array(), 1, 'all');
    wp_enqueue_style('slick-theme');


    //Stylesheet
    wp_register_style('styles', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');




//Load Scripts

function add_js(){
    wp_register_script('jquery', get_template_directory_uri() . '/plugins/jquery/jquery.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('contact', get_template_directory_uri() . '/js/contact.js', array(), 1, 1, 1);
    wp_enqueue_script('contact');

    //Bootstrap
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array(), 1, 1, 1);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');


    //Magnific Popup
    wp_register_script('magnific-popup', get_template_directory_uri() . '/plugins/magnific-popup/dist/jquery.magnific-popup.min.js', array(), 1, 1, 1);
    wp_enqueue_script('magnific-popup');


    //Slick slider
    wp_register_script('slick', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick.min.js', array(), 1, 1, 1);
    wp_enqueue_script('slick');



    //Google Map
    wp_register_script('map', get_template_directory_uri() . '/plugins/google-map/map.js', array(), 1, 1, 1);
    wp_enqueue_script('map');

    wp_register_script('apiMap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap', array(), 1, 1, 1);
    wp_enqueue_script('apiMap');


    //Custom
    wp_register_script('custom', get_template_directory_uri() . '/js/script.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');

}

add_action('wp_enqueue_scripts', 'add_js');

//Add image sized
add_image_size('post_image', 1100, 550, false);
add_image_size('thumb_image', 500, 250, false);
add_image_size('small_image', 500, 250, true);


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/*Menus */
add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'mobile-menu' => 'Mobile Menu',
    )
    );

//Custom Image Sizes
add_image_size('blog-large', 800, 400, true);

add_image_size('blog-small', 300, 200, true);
?>

