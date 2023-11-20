<?php 
//////////////////////////////////////////////////////////////offers
function go_post_types_mieszkania() {

	$labels = array(
		'name'               => 'Mieszkania',
		'singular_name'      => 'Mieszkania',
		'menu_name'          => 'Mieszkania',
		'name_admin_bar'     => 'Mieszkania',
		'all_items'          => 'Mieszkania',
	);

	$args = array( 
	    'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "mieszkania", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', ),
		// , 'editor' 
		 'taxonomies' => array('category'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'category_description' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => true,
            'menu_position' => 5,
            'show_in_rest' => true,
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments', 'post-formats'
            ),
            'has_archive' => true
	);

	
    register_post_type( 'mieszkania', $args );

}
add_action( 'init', 'go_post_types_mieszkania' );

function remove_my_post_type($post_link, $post, $leavename) {
    if ($post->post_type != 'mieszkania' || $post->post_status != 'publish') {
        return $post_link;
    }
    $post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);
    return $post_link;
}
add_filter('post_type_link', 'remove_my_post_type', 10, 3);

function set_my_post($query) {
    if(isset($query->query['post_type'])){
        return;
    }
    if (!empty($query->query['name'])) {
        $query->set('post_type', array('post', 'mieszkania', 'page'));
	}
	if( (is_category() || is_tag()) && $query->is_archive() && empty( 
        $query->query_vars['suppress_filters'] ) ) {
        $query->set( 'post_type', array(
           'post', 'mieszkania'
        ));
    }
}
add_action('pre_get_posts', 'set_my_post');

// //////////////////////////////////////////////////////////////Projects
// function go_post_types_projects() {

// 	$labels = array(
// 		'name'               => 'Projects',
// 		'singular_name'      => 'Project',
// 		'menu_name'          => 'Projects',
// 		'name_admin_bar'     => 'Projects',
// 		'all_items'          => 'Projects',
// 	);

// 	$args = array( 
// 	    'public' => true,
// 		'has_archive' => false,
// 		'show_in_rest' => true,
// 		'hierarchical'      => true,
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'publicly_queryable' => true,
// 		'show_in_rest' => true,
// 		"rewrite"             => array( "slug" => "Projects", "with_front" => true ),
// 		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
// 		// , 'editor' 
// 	);
//     register_post_type( 'projects', $args );

// }
// add_action( 'init', 'go_post_types_projects' );
