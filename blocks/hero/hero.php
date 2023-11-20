<?php
$bg = get_field( 'background_image' );
$hedline = get_field( 'hedline' );
$des = get_field( 'desc' );

$btnMain = get_field( 'main_link' );
$btnRevers = get_field( 'rev_link' );
if ($btnMain) {
    $btnMain_url = $btnMain['url'];
    $btnMain_title = $btnMain['title'];
    $btnMain_target = $btnMain['target'] ? $btnMain['target'] : '_self';
}
if ($btnRevers) {
    $$btnRevers_url = $btnRevers['url'];
    $btnRevers_title = $btnRevers['title'];
    $btnRevers_target = $btnRevers['target'] ? $btnRevers['target'] : '_self';
}
?>


<div class="b-hero" style="background-image:url(<?php echo $bg; ?>)">
    <div class="container">
        <div class="row">
            <div class="b-hero__wraper">
                <div class="b-hero__col text-center">
                    <?php if ($hedline) { ?>
                    <h1><?php echo $hedline; ?></h1>
                    <?php } ?>
                    <img src="<?php echo get_template_directory_uri() ?>/blocks/hero/badge.png">
                    <?php if ($des) { ?>
                    <p><?php echo $des; ?></p>
                    <?php } ?>
                    <div class="b-hero__buttons">
                        <?php if($btnMain) { ?>
                        <a class="btn header-contact__btn" href="<?php echo esc_url( $btnMain_url ); ?>" target="<?php echo esc_attr( $btnMain_target ); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="9" viewBox="0 0 18 9">
                                <path id="Shape_1" data-name="Shape 1" d="M2448,301.6a3.56,3.56,0,0,1-.249.313q-1.954,1.95-3.914,3.9c-.217.215-.429.244-.619.086a.39.39,0,0,1-.072-.532,1.586,1.586,0,0,1,.174-.2q1.547-1.542,3.094-3.08c.048-.048.093-.1.167-.176h-15.988a1.293,1.293,0,0,1-.295-.029.388.388,0,0,1-.3-.384.393.393,0,0,1,.3-.384,1.355,1.355,0,0,1,.3-.03q7.865,0,15.73,0h.257c-.075-.079-.12-.13-.168-.177l-3.155-3.143c-.208-.207-.242-.42-.1-.6a.4.4,0,0,1,.56-.078,1.738,1.738,0,0,1,.182.164q1.927,1.916,3.853,3.834a3.39,3.39,0,0,1,.248.314Z" transform="translate(-2429.999 -296.999)" fill="#fff" />
                            </svg>
                            <span> <?php echo esc_html( $btnMain_title ); ?></span>
                        </a>
                        <?php } ?>

                        <?php if($btnRevers) { ?>
                        <a class="btn-revers header-contact__btn" href="<?php echo esc_url( $btnRevers_url ); ?>" target="<?php echo esc_attr( $btnRevers_target ); ?>">
                            <?php echo esc_html( $btnRevers_title ); ?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="scroll-down">
                <svg class="scroll-down__bg" xmlns="http://www.w3.org/2000/svg" width="209.998" height="60.997" viewBox="0 0 209.998 60.997">
                    <path id="Shape_698" data-name="Shape 698" d="M1934.612,614.4a60.463,60.463,0,0,0-104.262-4.865,15.692,15.692,0,0,0-1.432,2.283A60.571,60.571,0,0,1,1776,643h210A60.517,60.517,0,0,1,1934.612,614.4Z" transform="translate(-1775.999 -581.999)" fill="#fff" />
                </svg>
                <span class="scroll-down__ani"></span>
            </div>
        </div>
    </div>
    <div class="go__bg"></div>
    <div class="go__bg__two"></div>
</div>
