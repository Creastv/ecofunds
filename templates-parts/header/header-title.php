<?php 
if(is_home() && !is_front_page()){
    $id= 14;
} else{
     $id = get_the_ID();
};
$desc = get_field( 'desc', $id );
?>

<?php if(!is_single()){ ?>
<div class="page-title">
    <div class="page-title__left">
       <svg xmlns="http://www.w3.org/2000/svg" width="95.052" height="95.053" viewBox="0 0 95.052 95.053">
		<g id="Group_133" data-name="Group 133" transform="translate(-1781.609 157.201)">
			<g id="Group_132" data-name="Group 132" transform="translate(1781.609 -157.201)">
			<path id="Path_182" data-name="Path 182" d="M1829.135-62.148a47.58,47.58,0,0,1-47.526-47.526,47.58,47.58,0,0,1,47.526-47.526,47.581,47.581,0,0,1,47.527,47.526A47.581,47.581,0,0,1,1829.135-62.148Zm0-94.418a46.945,46.945,0,0,0-46.891,46.892,46.945,46.945,0,0,0,46.891,46.892,46.945,46.945,0,0,0,46.892-46.892A46.945,46.945,0,0,0,1829.135-156.566Z" transform="translate(-1781.609 157.201)" fill="rgba(255,255,255,0.42)"/>
			</g>
			<path id="Path_183" data-name="Path 183" d="M1874.745-78.1c-19.468,39.309-70.984,34.418-85.944.048,15.6,29.761,62.868,25.912,52.8,19.55-43.96-29.232-6.558-71.2,20.375-65.192.483,7.753-1.247,13.455-2.69,18.686,1.291-.76,3.525-2.422,4.931-3.488.027.441-2.013,2.377-2.245,2.626-.847.814-3.655,3.769-3.655,3.769s-6.449,20.125-20.46,27.283c.984-1.383,3.669-4.228,5.192-6.6.91-1.415,1.018-1.737.61-3.317-1.647-6.374-3.195-12.772-4.774-19.162a2.341,2.341,0,0,1,.078-1.654c2.454,6.3,4.909,12.609,7.566,19.436,1.816-2.676,5.27-6.447,6.622-11.579.1-.386-3.446-9.476-3.327-9.742l.12-.268,4.031,8.166s5.43-14.834,4.842-20.942a39.137,39.137,0,0,0-12.832,2.7c-14.4,5.285-33.554,29.427-4.2,53.718C1855.276-54.069,1868.6-66.458,1874.745-78.1Zm-8.852-38.229c3.942,39.157-22.1,49.791-22.1,49.791s2.345,2.311,3.74,3.592C1852.618-64.672,1876.555-82.475,1865.893-116.333ZM1818.6-84.276a29.27,29.27,0,0,1-2.733-2.06,2.357,2.357,0,0,1-1.126-2.3c-.106-4.99-.29-9.979-.45-14.967a1.771,1.771,0,0,0-.4-1.191c-.5,5.105-.994,10.211-1.532,15.74-1.875-1.58-5.17-3.624-7.211-7.092-.154-.261.57-7.624.428-7.794l-.142-.171-1.266,6.788s-7.009-9.713-7.833-14.292a29.687,29.687,0,0,1,9.919-.667,24.548,24.548,0,0,1,14.484,6.83,8.639,8.639,0,0,1,1.71-2.332c-7.974-7.426-20.4-10.205-29.08-5.53,5.966,16.51,14.562,26.278,24.841,29.936Q1818.407-83.826,1818.6-84.276Zm1.836,7.789c-10.215-4.465-25.433-13.674-28.412-30.642.274,23.375,21.851,33.954,33.025,38.045A18.566,18.566,0,0,1,1820.437-76.487Z" transform="translate(-2.627 -12.024)" fill="rgba(255,255,255,0.42)"/>
		</g>
		</svg>

        <span></span>
    </div>
    <div class="page-title__right">
        <?php } else { ?>
        <div class="page-title  page-title--post ">
            <div class="page-title__center">
                <?php } ?>

                <h1 class="page-title__title">
                    <?php if ( is_category() ) :
					single_cat_title();					
					elseif (is_404()) :
						_e( '404', 'go');
					elseif (is_page() ) :
						the_title();
					elseif (is_single() ) :
					    the_title();
					elseif ( is_tag() ) :
						single_tag_title();
					elseif ( is_author() ) :
						the_post();
						printf( __( '%s', 'go' ), get_the_author() );
						rewind_posts();
					elseif ( is_day() ) :
						printf( __( 'Dzień: %s', 'go' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Miesiąc: %s', 'go' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Rok: %s', 'go' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
					elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
						_e( 'Asides', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
						_e( 'Images', 'go');
					elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
						_e( 'Videos', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
						_e( 'Quotes', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
						_e( 'Links', 'go' );
					else :
						_e( 'Blog', 'go' );
				endif; ?>
                </h1>
                <?php if(is_single() && function_exists('rank_math_the_breadcrumbs')) { ?>
                <?php rank_math_the_breadcrumbs(); ?>
                <?php } ?>
                <?php if($desc) { ?>
                <div class="desc">
                    <p><?php echo $desc; ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
