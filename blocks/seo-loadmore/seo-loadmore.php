<?php ?>
<?php
$id = 'seo-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$classes = 'go-seo-loadmore ';
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
?>
<div id="<?php echo $id; ?>" class="<?php echo esc_attr($classes); ?>" >
   <div class="go-seo-loadmore__wraper">
    <?php the_field('tresc'); ?>
   </div>
   <div class="btn__wrap text-center">
    <a href="#" class="btn-revers btn-acorderon"><?php _e('Czytaj więcej', 'go'); ?></a>
    </div>
</div>
