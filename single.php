<?php
get_header();
while ( have_posts() ) : the_post();		
	if(is_post_type('projects')){
        get_template_part( 'templates-parts/content/content', 'single-project' ); 
    } else {
        get_template_part( 'templates-parts/content/content', 'single' );
    }
endwhile;
get_footer();
