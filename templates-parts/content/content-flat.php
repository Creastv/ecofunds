<?php 
$excerpt = get_field('excerpt');
$pdf = get_field('pdf');
$doc = get_field('doc');
?>
<article id="post-<?php the_ID(); ?> " <?php post_class('l-real'); ?>>
    <a href="<?php the_permalink(); ?>">
        <div class="img">
            <?php if(has_post_thumbnail()) {?>
            <?php the_post_thumbnail('l-post'); ?>
            <?php } else { ?>
            <img src="<?php bloginfo('template_url'); ?>/src/img/thumbnail.png" alt="<?php the_title(); ?>" />
            <?php } ?>
            <div class="bg">
                <div class="con">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33.015" height="32.985" viewBox="0 0 33.015 32.985">
                        <g id="Icon_feather-link" data-name="Icon feather-link" transform="translate(-1.493 -1.508)">
                            <path id="Path_42" data-name="Path 42" d="M15,19.5a7.5,7.5,0,0,0,11.31.81l4.5-4.5A7.5,7.5,0,1,0,20.2,5.2L17.625,7.77" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                            <path id="Path_43" data-name="Path 43" d="M21,16.5a7.5,7.5,0,0,0-11.31-.81l-4.5,4.5A7.5,7.5,0,1,0,15.8,30.8L18.36,28.23" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                        </g>
                    </svg>
                    <span>Zobacz szczegóły<br> realizacji</span>
                </div>
            </div>
        </div>
        <h2 class=" title-page"><?php the_title(); ?></h2>
    </a>
</article>
