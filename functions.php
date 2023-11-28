<?php
add_theme_support('post-thumbnails');
add_image_size( 'galery', 220, 220, array( 'center', 'center' ) );
add_image_size( 'sm-icon', 28, 28, array( 'center', 'center' ) );
add_image_size( 'l-post', 450, 338, array( 'center', 'center' ) );
add_image_size( 'l-post-single', 900, 500, array( 'center', 'center' ) );

if ( ! function_exists( 'go_register_nav_menu' ) ) {
    function go_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'go' ),
			'secundary_menu' => __( 'footer Menu', 'go' ),
        ) );
    }
    add_action( 'after_setup_theme', 'go_register_nav_menu', 0 );
}
require get_template_directory() . '/blocks/blocks.php';
require_once get_template_directory() . '/func/enqueue-styles.php';
require_once get_template_directory() . '/func/enqueue-scripts.php';
require get_template_directory() . '/func/clean-up.php';
require get_template_directory() . '/func/cpt.php';
require get_template_directory() . '/func/login-form.php';


// gutenberg editor
function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_template_directory_uri().'/src/css/go-admin.min.css');
}
add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);
// Paginacja
function pagination_bars() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


function filter_plugin_updates( $value ) {
	$plugins = array(
	  'advanced-custom-fields-pro/acf.php'
	);
	foreach( $plugins as $plugin ) {
	  if ( isset( $value->response[$plugin] ) ) {
		unset( $value->response[$plugin] );
	  }
	}
	return $value;
}

// colors
function ka_override_MCE_options($init)
  {
    $custom_colors = '
          "ad8641", "Main color",
          "061322", "Black",
          "252323", "Light black",
          "f4f4f4", "Gray",
          "d7d7d7", "Gary dark",
          "c6ced3", "Light",
      ';
    // build color grid palette
    $init['textcolor_map'] = '[' . $custom_colors . ']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 1;

    return $init;
  }
  add_filter('tiny_mce_before_init', 'ka_override_MCE_options');

// Excerpt changing 3 dots
  Function new_excerpt_more( $more ) {
	return ' ';
}
add_filter('excerpt_more', 'new_excerpt_more');

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => 'Eco Funds settings',
    'menu_title' => 'Eco Funds settings',
    'parent_slug' => 'themes.php',
  ));
  acf_add_options_page(array(
    'page_title' => 'Extras',
    'menu_title' => 'Extras',
    'parent_slug' => 'themes.php',
  ));
}




function custom_redirect() {        
    global $post;
   $term = get_queried_object(); 
   $projects = get_terms( 'cat-projects', 'orderby=count' );

    if (  (is_singular('projects') || $post->post_type == 'projects' || $term->taxonomy == 'cat-projects') && ! is_user_logged_in() ) {
      wp_redirect( home_url() ); 
      exit();
    }    
  }

  add_action("template_redirect","custom_redirect");


  add_role('projekty', 'Projekty', array(
  'read' => true,
  'create_posts' => false,
  'edit_posts' => false,
  'edit_others_posts' => false,
  'publish_posts' => false,
  'manage_categories' => false,
  ));


function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) 
        return true;
    return false;
}


