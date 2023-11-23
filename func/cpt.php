<?php 
//////////////////////////////////////////////////////////////offers
function go_post_types_projekty() {

	$labels = array(
		'name'               => 'Projekty',
		'singular_name'      => 'Projekty',
		'menu_name'          => 'Projekty',
		'name_admin_bar'     => 'Projekty',
		'all_items'          => 'Projekty',
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
		"rewrite"             => array( "slug" => "projects", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', ),
		// , 'editor' 
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

	
    register_post_type( 'projects', $args );

}
add_action( 'init', 'go_post_types_projekty' );


  
add_action( 'init', 'go_taxonomy_style', 0 );
  
function go_taxonomy_style() {
  $labels = array(
    'name' => _x( 'Kategorie', 'go' ),
    'singular_name' => _x( 'kategoria', 'go' ),
    'search_items' =>  __( 'Search Kategorie' ),
    'all_items' => __( 'All Kategorie' ),
    'parent_item' => __( 'Parent Subject' ),
    'parent_item_colon' => __( 'Parent Subject:' ),
    'edit_item' => __( 'Edit Subject' ), 
    'update_item' => __( 'Update Subject' ),
    'add_new_item' => __( 'Add New Subject' ),
    'new_item_name' => __( 'New Subject Name' ),
    'menu_name' => __( 'Kategorie' ),
  );    
  
  register_taxonomy('cat-projects',array('projects'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'cat-projects' ),
  ));
  
}

function remove_my_post_type($post_link, $post, $leavename) {
    if ($post->post_type != 'projects' || $post->post_status != 'publish') {
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
        $query->set('post_type', array('post', 'projects', 'page'));
	}
	if( (is_category() || is_tag()) && $query->is_archive() && empty( 
        $query->query_vars['suppress_filters'] ) ) {
        $query->set( 'post_type', array(
           'post', 'projects'
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
