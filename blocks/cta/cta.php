<?php
$link = get_field('button_cta');
$link2 = get_field('button_cta_two');
$headline = get_field('headline_cta');
$subhead = get_field('subhead_cta');
$bg = get_field('background_image');
$full = get_field('full_width');

$wraper = "";
$container = "container-fluid";
if($full) {
    $wraper = "wrap-full";
    $container = "container";
}
if( $link ){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
if( $link2 ){
    $link2_url = $link2['url'];
    $link2_title = $link2['title'];
    $link2_target = $link2['target'] ? $link2['target'] : '_self';
}
?>

<div class="b__cta b__cta--fixed <?php echo $wraper; ?>" style="background-image:url(<?php echo $bg; ?>);">
    <div class="<?php echo $container; ?>">
        <div class="row">
            <div class="b__cta__wraper">
                <div class="b__cta__left">
                     <?php echo $subhead ? '<p>' . $subhead . '</p>' : false; ?>
                    <?php echo $headline ? '<p class="h1">' . $headline . '</p>' : false; ?>
                </div>
                 <?php if($link || $link2) { ?>
                <div class="b__cta__right">
                    <?php if($link) { ?>
                    <a class="btn-revers contact__btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="9" viewBox="0 0 18 9">
                            <path id="Shape_1" data-name="Shape 1" d="M2448,301.6a3.56,3.56,0,0,1-.249.313q-1.954,1.95-3.914,3.9c-.217.215-.429.244-.619.086a.39.39,0,0,1-.072-.532,1.586,1.586,0,0,1,.174-.2q1.547-1.542,3.094-3.08c.048-.048.093-.1.167-.176h-15.988a1.293,1.293,0,0,1-.295-.029.388.388,0,0,1-.3-.384.393.393,0,0,1,.3-.384,1.355,1.355,0,0,1,.3-.03q7.865,0,15.73,0h.257c-.075-.079-.12-.13-.168-.177l-3.155-3.143c-.208-.207-.242-.42-.1-.6a.4.4,0,0,1,.56-.078,1.738,1.738,0,0,1,.182.164q1.927,1.916,3.853,3.834a3.39,3.39,0,0,1,.248.314Z" transform="translate(-2429.999 -296.999)" fill="#fff" />
                        </svg>
                        <?php echo esc_html( $link_title ); ?>
                    </a>
                    <?php } ?>
                    <?php if($link2) { ?>
                    <a class="btn-revers contact__btn" href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="9" viewBox="0 0 18 9">
                            <path id="Shape_1" data-name="Shape 1" d="M2448,301.6a3.56,3.56,0,0,1-.249.313q-1.954,1.95-3.914,3.9c-.217.215-.429.244-.619.086a.39.39,0,0,1-.072-.532,1.586,1.586,0,0,1,.174-.2q1.547-1.542,3.094-3.08c.048-.048.093-.1.167-.176h-15.988a1.293,1.293,0,0,1-.295-.029.388.388,0,0,1-.3-.384.393.393,0,0,1,.3-.384,1.355,1.355,0,0,1,.3-.03q7.865,0,15.73,0h.257c-.075-.079-.12-.13-.168-.177l-3.155-3.143c-.208-.207-.242-.42-.1-.6a.4.4,0,0,1,.56-.078,1.738,1.738,0,0,1,.182.164q1.927,1.916,3.853,3.834a3.39,3.39,0,0,1,.248.314Z" transform="translate(-2429.999 -296.999)" fill="#fff" />
                        </svg>
                        <?php echo esc_html( $link2_title ); ?>
                    </a>
                     <?php } ?>
                </div>
                 <?php } ?>

            </div>
        </div>
    </div>
    <span class="go__bg"></span>
    <!-- <span class="go__bg__two"></span> -->
</div>
