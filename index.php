<?php
get_header();
if ( have_posts() ) : ?>

<?php
$term = get_queried_object(); 
$styles = get_terms( 'cat-projects', 'orderby=count' );

$classActive = '';
if(is_post_type('projects')) {
    if($term->taxonomy !== 'cat-projects') { 
         $classActive = "active";
    }
   
}
?>
<?php if(is_post_type('projects') || $term->taxonomy == 'cat-projects' || is_category( get_cat_ID( 'projects')  )) { ?>
<div class="terms-style">
    <h2 class="text-center"><?php echo _e('Sprawdź aktualne oferty Inwestycyjne', 'go'); ?></h2>
    <ul class="terms-style__nav">
        <li class="<?php echo $classActive; ?>"><a href="<?php echo get_post_type_archive_link('projects'); ?>"> Wszystkie style</a></li>
        <?php foreach($styles as $style) { ?>
        <li class=" <?php echo $style->name == $term->name ? 'active' : false;  ?>"><a href="<?php echo get_term_link( $style ); ?>"><?php echo $style->name; ?></a></li>
        <?php } ?>
    </ul>
    <?php if($term->taxonomy == 'style') { ?>
    <div class="terms-style__con">
        <h1><?php echo $term->name; ?></h1>
        <p><?php echo $term->description; ?></p>
    </div>
    <?php } ?>
</div>
<?php  }; ?>
<h2 class="section-h"><?php echo _e('Portfel Inwestycyjny', 'go'); ?></h2>
<p><?php echo _e('Poniższe oferty Inwestycyjne są aktualizowane, odśwież stronę aby sprawdzić bieżące oferty.', 'go'); ?></p>
<br>
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
