<?php
get_header();
if ( have_posts() ) : ?>
<div class="posts-wraper">
    <?php while ( have_posts() ) : the_post(); 
    get_template_part( 'templates-parts/content/content', 'index' ); 
    endwhile; ?>
    <?php if(paginate_links()) { ?>
    <div class="go-pagination">
        <?php pagination_bars(); ?>
    </div>
    <?php } ?>
</div>
<?php else :
    echo "<h1 class='text-center'>Nic nie znaleziono</h1> ";
endif;
get_footer();
