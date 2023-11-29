<?php
function register_acf_block_types() {
  //Done
  acf_register_block_type(array(
        'name'              => 'person',
        'title'             => __('Person'),
        'render_template'   => 'blocks/person/person.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'person' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-person',  get_template_directory_uri() . '/blocks/person/person.min.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'wide-container',
        'title'             => __('Szeroki kontener'),
        'render_template'   => 'blocks/wide-container/wide-container.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'wide-container' ),
       'supports'		=> [
          'align'			=> false,
          'anchor'		=> true,
          'customClassName'	=> true,
          'jsx' 			=> true,
        ],
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-wide-container',  get_template_directory_uri() . '/blocks/wide-container/wide-container.min.css' );
      },
    ));
     acf_register_block_type(array(
        'name'              => 'seo-loadmore',
        'title'             => __('Seo - load more'),
        'render_template'   => 'blocks/seo-loadmore/seo-loadmore.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'seo-loadmore' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-seo-loadmore',  get_template_directory_uri() . '/blocks/seo-loadmore/seo-loadmore.min.css' );
          wp_enqueue_script('go-seo-loadmore-js', get_template_directory_uri().'/blocks/seo-loadmore/seo-loadmore.js', array( 'jquery' ),'4', true );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'accordions',
        'title'             => __('Accordions'),
        'render_template'   => 'blocks/accordions/block-accordions.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Accordions' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-accordions',  get_template_directory_uri() . '/blocks/accordions/accordions.min.css' );
          wp_enqueue_script('go-accordions', get_template_directory_uri().'/blocks/accordions/accordions.js', array( 'jquery' ),'4', true );
      },
    ));
     acf_register_block_type(array(
        'name'              => 'cta',
        'title'             => __('CTA'),
        'render_template'   => 'blocks/cta/cta.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'List' ),
      'supports' => array( 'align' =>false ),
     
    ));

    acf_register_block_type(array(
        'name'              => 'get-know',
        'title'             => __('Get to know'),
        'render_template'   => 'blocks/get-know/get-know.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Get to know' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-get-know',  get_template_directory_uri() . '/blocks/get-know/get-know.min.css' );
      },
     
    ));
    // acf_register_block_type(array(
    //     'name'              => 'opinions',
    //     'title'             => __('Opinions'),
    //     'render_template'   => 'blocks/opinions/block-opinions.php',
    //     'category'          => 'formatting',
    //     'icon' => array(
    //       'background' => '#5f031f',
    //       'foreground' => '#fff',
    //       'src' => 'ellipsis',
    //     ),
    //   'mode'            => 'preview', 
    //   'keywords'          => array( 'opinions' ),
    //   'supports' => array( 'align' =>false ),
    //   'enqueue_assets'    => function(){
    //       wp_enqueue_style( 'go-opinions',  get_template_directory_uri() . '/blocks/opinions/opinions.min.css' );
    //       wp_enqueue_script('go-opinions', get_template_directory_uri().'/blocks/opinions/opinions.js', array( 'jquery' ),'4', true );
    //   },
    // ));
    acf_register_block_type(array(
        'name'              => 'numbers',
        'title'             => __('Numbers'),
        'render_template'   => 'blocks/numbers/numbers.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'numbers' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-numbers',  get_template_directory_uri() . '/blocks/numbers/numbers.min.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'compare',
        'title'             => __('Compare'),
        'render_template'   => 'blocks/compare/compare.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'compare' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-compare',  get_template_directory_uri() . '/blocks/compare/compare.min.css' );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'form',
      'title'             => __('Form'),
      'render_template'   => 'blocks/form/form.php',
      'category'          => 'formatting',
      'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'form' ),
      'supports' => array( 'align' =>false ),
    ));

     acf_register_block_type(array(
      'name'              => 'form-contact',
      'title'             => __('Form contact'),
      'render_template'   => 'blocks/form/form.php',
      'category'          => 'formatting',
      'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'form' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-form-contact',  get_template_directory_uri() . '/blocks/form/form-contact.min.css' );
      },
    ));

     acf_register_block_type(array(
      'name'              => 'contact',
      'title'             => __('Contact bar'),
      'render_template'   => 'blocks/contact/contact.php',
      'category'          => 'formatting',
      'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Contact' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-contact',  get_template_directory_uri() . '/blocks/contact/contact.min.css' );
      },
    ));

     acf_register_block_type(array(
      'name'              => 'how-to-get',
      'title'             => __('How to get- bar'),
      'render_template'   => 'blocks/how-to-get/how-to-get.php',
      'category'          => 'formatting',
      'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'how-to-get' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-how-to-get',  get_template_directory_uri() . '/blocks/how-to-get/how-to-get.min.css' );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'img-section',
      'title'             => __('Imagen section'),
      'render_template'   => 'blocks/img-section/img-section.php',
      'category'          => 'formatting',
      'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'img-section' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-img-section',  get_template_directory_uri() . '/blocks/img-section/img-section.min.css', array(), '1.1' );
      },
    ));

     acf_register_block_type(array(
      'name'              => 'sticky-content',
      'title'             => __('Sticky gallery'),
      'render_template'   => 'blocks/sticky-content/sticky-content.php',
      'category'          => 'formatting',
      'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'sticky-content' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-sticky-content',  get_template_directory_uri() . '/blocks/sticky-content/sticky-content.min.css', array(), '1.1' );
      },
    ));

     acf_register_block_type(array(
      'name'              => 'hero',
      'title'             => __('Hero secion'),
      'render_template'   => 'blocks/hero/hero.php',
      'category'          => 'formatting',
      'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Hero' ),
      'supports' => array( 'align' =>false ),
      
      'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-hero',  get_template_directory_uri() . '/blocks/hero/hero.min.css' );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'circle-tabs',
      'title'             => __('Circle tabs'),
      'render_template'   => 'blocks/circle-tabs/circle-tabs.php',
      'category'          => 'formatting',
      'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'circle-tabs' ),
      'supports' => array( 'align' =>false ),
      
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-circle-tabs',  get_template_directory_uri() . '/blocks/circle-tabs/circle-tabs.min.css' );
           wp_enqueue_script('go-circle-js', get_template_directory_uri() .'/blocks/circle-tabs/auto-tabs.js',  array(), '20130456', true );
          wp_enqueue_script('go-circle-init', get_template_directory_uri() .'/blocks/circle-tabs/index.js',  array(), '20130456', true );
      },
    ));

     acf_register_block_type(array(
      'name'              => 'process',
      'title'             => __('Process'),
      'render_template'   => 'blocks/process/process.php',
      'category'          => 'formatting',
      'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'process' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-process',  get_template_directory_uri() . '/blocks/process/process.min.css' );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'opinions',
      'title'             => __('Opinions'),
      'render_template'   => 'blocks/opinions/opinions.php',
      'category'          => 'formatting',
      'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Opinions' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
        wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-opinions', get_template_directory_uri().'/blocks/opinions/opinions.js', array( 'jquery' ),'4', true );
        wp_enqueue_style( 'go-opinions',  get_template_directory_uri() . '/blocks/opinions/opinions.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'container',
        'title'             => __('Container'),
        'render_template'   => 'blocks/container/container.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#5f031f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'mode'            => 'preview', 
        'keywords'          => array( 'container' ),
        'supports'		=> [
          'align'			=> false,
          'anchor'		=> true,
          'customClassName'	=> true,
          'jsx' 			=> true,
        ],
        'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-container',  get_template_directory_uri() . '/blocks/container/container.min.css' );
      },
    ));
}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
