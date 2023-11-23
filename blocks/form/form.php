<?php
$headline = get_field('hedline');
$subhead = get_field('subhead');
$img = get_field('img');
$desc = get_field( 'desc' );
?>

<div class="b-form">
    <div class="container">
        <div class="row">
            <div class="b-form__wraper">
                <div class="b-form__col">
                    <div class="img" style="background-image: url(<?php echo $img; ?>);"></div>
                    <!-- <div class="go__bg"></div>
                    <div class="go_bg__two"></div> -->
                </div>
                <div class="b-form__col">
                    <?php if ($headline) { ?>
                    <h3 class="section-h"><?php echo $headline; ?></h3>
                    <?php } ?>
                    <?php if ($subhead) { ?>
                    <h2 class="subhead-h"><?php echo $subhead; ?></h2>
                    <?php } ?>
                    <?php if ($desc) { ?>
                    <?php echo $desc; ?>
                    <?php } ?>
                    <div class="b-form__form">
                        <div class="form-wraper">
                           <?php echo do_shortcode('[contact-form-7 id="55c70cc" title="Formularz kontaktowy block"]');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
