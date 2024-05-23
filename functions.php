<?php 
// Theme Supports
add_theme_support('post-thumbnails');

// Load style and script files
function tikka_load_scripts(){
   // Enqueue stylesheets files
   wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css',[], '5.3.2', 'all');
   wp_enqueue_style( 'fonts', get_template_directory_uri().'/assets/fonts/fonts.css',[], null, 'all');
   wp_enqueue_style( 'font-awesome-all', get_template_directory_uri().'/assets/fontawesome-6.5.1/all.min.css',[], "6.5.1", 'all');
   wp_enqueue_style( 'font-awesome-min', get_template_directory_uri().'/assets/fontawesome-6.5.1/fontawesome.min.css',[], "6.5.1", 'all');
   wp_enqueue_style( 'owl-carousel-main', get_template_directory_uri().'/assets/css/owl.carousel.min.css',[], "2.3.4", 'all');
   wp_enqueue_style( 'owl-carousel-theme-default', get_template_directory_uri().'/assets/css/owl.theme.default.min.css',[], "2.3.4", 'all');
   wp_enqueue_style( 'scroll-top', get_template_directory_uri().'/assets/css/scroll-to-top.css',[], null, 'all');
   wp_enqueue_style( 'aos-css', get_template_directory_uri().'/assets/css/aos.css',[], null, 'all');
   wp_enqueue_style( 'magnific', get_template_directory_uri().'/assets/css/magnific.min.css',[], null, 'all');
   wp_enqueue_style( 'mobile-menu', get_template_directory_uri().'/assets/css/mobile-menu.css',[], null, 'all');
   wp_enqueue_style( 'main-stylesheet', get_template_directory_uri().'/assets/css/style.css',[], null, 'all');
   wp_enqueue_style( 'responsive-stylesheet', get_template_directory_uri().'/assets/css/responsive.css',[], null, 'all');

   // Enqueue script files
   // wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/js/jquery/jquery-3.7.1.min.js', [], '3.7.1', true );
   wp_enqueue_script( 'jquery');
   wp_enqueue_script( 'popper-js', get_template_directory_uri().'/assets/js/popper/popper.min.js', [], null, true );
   wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap/bootstrap.min.js', [], '5.3.2', true );
   wp_enqueue_script( 'counter', get_template_directory_uri().'/assets/js/plugins/counter.js', [], null, true );
   wp_enqueue_script( 'magnific', get_template_directory_uri().'/assets/js/plugins/magnific.min.js', [], null, true );
   wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/assets/js/plugins/owl.carousel.min.js', [], '2.3.4', true );
   wp_enqueue_script( 'custome-counter', get_template_directory_uri().'/assets/js/counter-custom.js', [], null, true );
   wp_enqueue_script( 'video-popup', get_template_directory_uri().'/assets/js/video-popup.js', array('jquery'), null, true );
   wp_enqueue_script( 'aos-js', get_template_directory_uri().'/assets/js/plugins/aos.js', array('jquery'), null, true );
   wp_enqueue_script( 'main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), null, true );

};
add_action('wp_enqueue_scripts', 'tikka_load_scripts');