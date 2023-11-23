<?php
$top = get_field( 'subtitle_top' );
$title = get_field( 'title' );
$bottom = get_field( 'subtitle_tbottom' );

$form = get_field( 'form' );
?>
<div class="b-form-contact">
    <div class="container">
        <div class="row">
            <?php if ($top) { ?>
            <?php echo $top; ?>
            <?php } ?>
            <?php if ($title) { ?>
            <h2 class="section-h text-center"> <?php echo $title; ?></h2>
            <?php } ?>
            <?php if ($bottom) { ?>
            <?php echo $bottom; ?>
            <?php } ?>
             <?php echo do_shortcode('[contact-form-7 id="1ea992e" title="Formularz kontaktowy"]');?>
        </div>
    </div>
</div>
