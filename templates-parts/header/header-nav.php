<nav class="navbar__navigation js-navbar__navigation">
    <?php 
	// if ( wp_is_mobile() ) : 
		// $navLocation = 'mobile_menu';
	// else : 
		$navLocation = 'primary_menu';
	// endif; 
	if ( wp_is_mobile() ) :
		
		$contact = get_field('contact', 'options');
		$link = $contact['button'];

		if( $link ){
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
		}

		if($contact['phone_no']){
		$phoneMobile = '<li class="phone-mobile"> <a href="tel:' . $contact['phone_no'] . '" >
		  <svg xmlns="http://www.w3.org/2000/svg" width="21.999" height="21.999" viewBox="0 0 21.999 21.999">
            <path id="Shape_2" data-name="Shape 2" d="M2184.538,313c-.487-.1-.981-.185-1.461-.316a13.554,13.554,0,0,1-3.194-1.393,28.8,28.8,0,0,1-7.274-6.128,23.5,23.5,0,0,1-3.366-4.929,11.219,11.219,0,0,1-1.192-3.623,3.7,3.7,0,0,1,.49-2.658.555.555,0,0,1,.061-.088c.827-.822,1.629-1.671,2.491-2.456a2.088,2.088,0,0,1,2.452-.02,3.577,3.577,0,0,1,.46.384q1.426,1.414,2.843,2.837a2.078,2.078,0,0,1,.231,2.786,1.875,1.875,0,0,1-.856.622,2.1,2.1,0,0,0-1.469,1.64,2.4,2.4,0,0,0,.228,1.332,8.4,8.4,0,0,0,2.019,2.927,9.055,9.055,0,0,0,3,2.075,2.195,2.195,0,0,0,2.2-.191,2.143,2.143,0,0,0,.757-1.039,2,2,0,0,1,3.171-.835c1.178,1.064,2.266,2.226,3.381,3.358a1.684,1.684,0,0,1,.451,1.109.662.662,0,0,0,.039.14v.086a1.426,1.426,0,0,0-.041.184,2.178,2.178,0,0,1-.643,1.39c-.641.654-1.3,1.3-1.942,1.945a2.494,2.494,0,0,1-.98.637c-.282.094-.577.151-.865.225Z" transform="translate(-2168 -291)" fill="#5f021f" />
           </svg><span>
			 ' . $contact['phone_no'] . '</span> </a> </li>';
		}
		if($link){
		$linkMobile = '<li  class="phone-mobile btn"><a href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">
			
			<span>' . esc_html( $link_title ) . '</span>
			</a></li>';
			
		 }

    endif;
    $temp_menu = wp_nav_menu(array(
    'theme_location' => $navLocation,
    'menu_id' => 'header-nav-list',
    'menu_class' => 'header-nav-list',
    'container' => false,
    'echo' => false,
    'items_wrap' => '<ul id="%1$s" class="%2$s js-header-nav-list " itemscope itemtype="https://www.schema.org/SiteNavigationElement">%3$s ' . $phoneMobile . ' ' . $linkMobile . ' ' .$swicher. '</ul>',
    ));
   $temp_menu = str_replace("<a", "<a itemprop='url' ", $temp_menu); // We set an attribute for menu items through replacement

	preg_match_all("~<a (.*?)>(.*)</a>~", $temp_menu, $matchesz); // Find all the "a" tags through the regular expression to search for the "span" tag
	foreach($matchesz[0] as $value){
		// We are looking for a nested tag "span" in the current tag "a"
		if(strpos($value, "<span") === false){  // If the current "a" tag doesn't have a "span" nested tag, use a regular expression to wrap the content of the "a" tag in a "span" and set the markup attribute to it
			$temp_value = preg_replace("~<a (.*?)>(.*)</a>~", "<a $1><span itemprop='name'>$2</span></a>", $value);

			$temp_menu = str_replace($value, $temp_value, $temp_menu);
		}else{ // If the "span" tag is found, replace it with a markup attribute
			$temp_value = str_replace("<span", "<span itemprop='name'", $value);

			$temp_menu = str_replace($value, $temp_value, $temp_menu);
		}
	}
	echo $temp_menu; ?>
</nav>
