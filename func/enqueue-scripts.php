<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function enqueue_scripts() {

     if(is_singular('projects')){
   
    wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
    wp_enqueue_script( 'go-isotope-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'go-fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'go-mieszkania-init',  get_template_directory_uri().'/src/js/go-mieszkania.js', array( 'jquery' ), '1.0.0', true ); wp_enqueue_script('go-form-realizacje-js', get_template_directory_uri() .'/templates-parts/parts/forms/form-realizacje.js',  array(), '20130456', true );
    } 

    // if(!get_page_template_slug( $post->ID ) == 'page-home.php' || !get_page_template_slug( $post->ID ) == 'page-contact.php') {
    //  wp_enqueue_script('go-paralex', get_template_directory_uri().'/src/js/jquery.paroller.min.js', array( 'jquery' ),'3', true );
      wp_enqueue_script('go-main', get_template_directory_uri().'/src/js/go-main.js', array( 'jquery' ),'3', true );
    // } else {
        // wp_enqueue_script('go-main', get_template_directory_uri().'/src/js/home-page.js', array( 'jquery' ),'3', true );        
    // }
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
