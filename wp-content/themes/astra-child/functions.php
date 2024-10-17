<?php
// Enqueue styles from the parent theme and child theme
function astra_child_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue child theme styles
    wp_enqueue_style('astra-child-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array('astra-parent-style'));

    // Enqueue additional CSS files
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array('astra-child-style'));
    wp_enqueue_style('bootstrap-icons', get_stylesheet_directory_uri() . '/assets/css/vender/bootstrap.min.css', array('astra-child-style'));
    // Uncomment to use external CDN styles
    // wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
    wp_enqueue_style('fontawesome-icons', get_stylesheet_directory_uri() . '/assets/css/vender/fontawesome-icons.css', array('astra-child-style'));
    wp_enqueue_style('owl-carousel-css', get_stylesheet_directory_uri() . '/assets/css/vender/owl.carousel.min.css', array('astra-child-style'));
    wp_enqueue_style('owl-theme-css', get_stylesheet_directory_uri() . '/assets/css/vender/owl.theme.default.min.css', array('astra-child-style'));
}

// Enqueue JavaScript files in the footer
function astra_child_enqueue_scripts() {
    // jQuery is included with WordPress, so we enqueue it
    wp_enqueue_script('jquery');

    // Enqueue JavaScript files
    wp_enqueue_script('jquery-3.7.0.min', get_stylesheet_directory_uri() . '/assets/js/vender/jquery-3.7.0.min.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri() . '/assets/js/vender/jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script('popper', get_stylesheet_directory_uri() . '/assets/js/vender/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-bundle', get_stylesheet_directory_uri() . '/assets/js/vender/bootstrap.bundle.min.js', array('jquery', 'popper'), null, true);
    wp_enqueue_script('moment', get_stylesheet_directory_uri() . '/assets/js/vender/moment.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_stylesheet_directory_uri() . '/assets/js/vender/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}

// Hook to load styles and scripts
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');
add_action('wp_enqueue_scripts', 'astra_child_enqueue_scripts');


?>


