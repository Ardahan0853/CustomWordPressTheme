<?php 

function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

    wp_register_style('oswald-font', 'https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap', array(), null, 'all');
    wp_enqueue_style('oswald-font');

    wp_register_style('anton-font', 'https://fonts.googleapis.com/css2?family=Anton&display=swap', array(), null, 'all');
    wp_enqueue_style('anton-font');
    
    wp_register_style('onest-font', 'https://fonts.googleapis.com/css2?family=Onest&display=swap', array(), null, 'all');
    wp_enqueue_style('onest-font');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js(){
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);

    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');
?>