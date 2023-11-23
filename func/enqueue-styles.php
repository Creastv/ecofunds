<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function enqueue_styles() {
    wp_enqueue_style( 'go-style', get_stylesheet_uri() );
	wp_enqueue_style( 'go-custome-style', get_template_directory_uri().'/src/css/go-main.min.css' );  
	 if(is_singular('projects')){
	wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
	wp_enqueue_style( 'go-fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', '', '4.0' );
	}
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
