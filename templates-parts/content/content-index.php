<?php 
$excerpt = get_field('excerpt');
$pdf = get_field('pdf');
$doc = get_field('doc');
?>
<article id="post-<?php the_ID(); ?> " <?php post_class('l-post'); ?>>
    <a href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()) {?>
        <?php the_post_thumbnail('l-post'); ?>
        <?php } else { ?>
        <img src="<?php bloginfo('template_url'); ?>/src/img/thumbnail.png" alt="<?php the_title(); ?>" />
        <?php } ?>
    </a>
    <div class="l-post__title">
        <a href="<?php the_permalink(); ?>">
            <h2 class=" title-page"><?php the_title(); ?>
            </h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="34.022" height="17.021" viewBox="0 0 34.022 17.021">
                <path id="Shape_1" data-name="Shape 1" d="M1611.855,1102.494a6.442,6.442,0,0,1-.471.592q-3.694,3.69-7.4,7.37c-.41.408-.812.462-1.17.162a.739.739,0,0,1-.136-1.007,3.028,3.028,0,0,1,.329-.371q2.923-2.914,5.848-5.826c.09-.089.175-.185.315-.332h-.455q-14.882,0-29.764,0a2.426,2.426,0,0,1-.557-.056.733.733,0,0,1-.563-.725.742.742,0,0,1,.564-.726,2.479,2.479,0,0,1,.557-.057q14.866,0,29.732,0h.486c-.141-.15-.227-.245-.317-.335l-5.963-5.945c-.392-.392-.456-.794-.188-1.142a.746.746,0,0,1,1.057-.149,3.462,3.462,0,0,1,.344.311q3.643,3.622,7.281,7.251a6.38,6.38,0,0,1,.47.592Z" transform="translate(-1577.833 -1093.787)" fill="#ad8641" />
            </svg>
        </a>
    </div>
</article>
