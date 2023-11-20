<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function enqueue_scripts() {
    if(!get_page_template_slug( $post->ID ) == 'page-home.php' || !get_page_template_slug( $post->ID ) == 'page-contact.php') {
     wp_enqueue_script('go-main', get_template_directory_uri().'/src/js/go-main.js', array( 'jquery' ),'3', true );
    } else {
        wp_enqueue_script('go-main', get_template_directory_uri().'/src/js/home-page.js', array( 'jquery' ),'3', true );        
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
