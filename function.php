<?php 

// Load style and script files
function tikka_load_scripts(){
   // Stylesheet files
   wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css',[], '5.3.2', 'all');
};
add_action('wp_enqueue_scripts', 'tikka_load_scripts');