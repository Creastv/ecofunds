<?php
$galeria = get_field( 'zdjecia_nowe', get_the_id() );
?>
<article id="post-<?php the_ID(); ?>" class="single-post hentry">
    <div class="header-slider">
        <div class="swiper slider">
            <div class="swiper-wrapper">
                <?php if($galeria){ ?>
                <?php  $i = 0; foreach($galeria as $dodaj_zdjecie) {  ?>
                <?php $i++; ?>
                <?php if( $i > 3 ): ?>
                <?php break; ?>
                <?php endif; ?>
                <?php  foreach($dodaj_zdjecie as $img) { ?>
                <div class="swiper-slide">
                    <div class="slide-wraper">
                        <?php echo wp_get_attachment_image($img[0]['zdjecie'], 'full' ); ?>
                    </div>
                </div>
                <?php } } ?>
                <?php } else { ?>
                <div class="swiper-slide">
                    <div class="slide-wraper">
                        <?php echo the_post_thumbnail('full'); ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="slide-wraper__content">
            <div class="container-fluid">
                <div class="row">
                    <div class="page-title">
                        <div class="page-title__left">
                            <svg width="105.8px" height="105.8px" id="Warstwa_1" data-name="Warstwa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 95.8 95.8">
                            <path fill="#FFFFFF" d="M47.9,95.8C21.49,95.8,0,74.31,0,47.9S21.49,0,47.9,0s47.9,21.49,47.9,47.9-21.49,47.9-47.9,47.9ZM47.9,.64C21.84,.64,.64,21.84,.64,47.9s21.2,47.26,47.26,47.26,47.26-21.2,47.26-47.26S73.96,.64,47.9,.64Z"/>
                            <path fill="#FFFFFF" d="M91.22,67.6c-19.62,39.62-71.54,34.69-86.62,.05,15.72,29.99,63.36,26.12,53.21,19.7C13.51,57.89,51.2,15.59,78.35,21.65c.49,7.81-1.26,13.56-2.71,18.83,1.3-.77,3.55-2.44,4.97-3.52,.03,.44-2.03,2.4-2.26,2.65-.85,.82-3.68,3.8-3.68,3.8,0,0-6.5,20.28-20.62,27.5,.99-1.39,3.7-4.26,5.23-6.65,.92-1.43,1.03-1.75,.61-3.34-1.66-6.42-3.22-12.87-4.81-19.31-.12-.5-.21-1.02,.08-1.67,2.47,6.35,4.95,12.71,7.63,19.59,1.83-2.7,5.31-6.5,6.67-11.67,.1-.39-3.47-9.55-3.35-9.82,.04-.1,.12-.27,.12-.27l4.06,8.23s5.47-14.95,4.88-21.11c-4.69,.11-8.86,1.22-12.93,2.72-14.51,5.33-33.82,29.66-4.23,54.14,13.6,10.08,27.03-2.41,33.22-14.14Zm-8.92-38.53c3.97,39.46-22.27,50.18-22.27,50.18,0,0,2.36,2.33,3.77,3.62,5.12-1.74,29.25-19.68,18.5-53.8ZM34.64,61.38c-.95-.65-1.97-1.38-2.75-2.08-.96-.85-1.11-1.07-1.14-2.31-.11-5.03-.29-10.06-.45-15.08-.01-.39-.06-.79-.4-1.2-.5,5.15-1,10.29-1.54,15.86-1.89-1.59-5.21-3.65-7.27-7.15-.15-.26,.57-7.68,.43-7.85-.05-.06-.14-.17-.14-.17l-1.28,6.84s-7.06-9.79-7.9-14.4c3.45-.89,6.72-.93,10-.67,4.6,.36,10.33,2.71,14.6,6.88,0,0,.45-1.05,1.72-2.35-8.04-7.48-20.56-10.29-29.31-5.57,6.01,16.64,14.68,26.49,25.04,30.17,.13-.3,.26-.61,.39-.91Zm1.85,7.85c-10.29-4.5-25.63-13.78-28.64-30.88,.28,23.56,22.02,34.22,33.28,38.34,0,0-2.98-2.62-4.65-7.46Z"/>
                            </svg>
                            <span></span>
                        </div>
                        <div class="page-title__right">
                            <h1 class="page-title__title"><?php the_title(); ?></h1>
                            <?php if ( get_field( 'desc' ) ) { ?>
                            <p class="desc"><?php echo get_field( 'desc' ); ?></p>
                            <?php } ?>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-down">
            <svg class="scroll-down__bg" xmlns="http://www.w3.org/2000/svg" width="209.998" height="60.997" viewBox="0 0 209.998 60.997">
                <path id="Shape_698" data-name="Shape 698" d="M1934.612,614.4a60.463,60.463,0,0,0-104.262-4.865,15.692,15.692,0,0,0-1.432,2.283A60.571,60.571,0,0,1,1776,643h210A60.517,60.517,0,0,1,1934.612,614.4Z" transform="translate(-1775.999 -581.999)" fill="#fff" />
            </svg>
            <span class="scroll-down__ani"></span>
        </div>
        <div class="go__bg"></div>
        <div class="go__bg__two"></div>
    </div>
    <?php if(wp_is_mobile() && !$galeria) { ?>
    <div class="img">
        <?php echo the_post_thumbnail('medium'); ?>
    </div>
    <?php } ?>
    <?php the_content(); ?>

    <?php if($galeria){ ?>
    <div class="realization-gallery">
        <?php foreach($galeria as $dodaj_zdjecie) { 
        foreach($dodaj_zdjecie as $img) { ?>
                <div class="wr">
                    <a data-fancybox="gallery" href="<?php echo wp_get_attachment_image_url( $img[0]['zdjecie'], 'full' ); ?>">
                        <?php echo wp_get_attachment_image($img[0]['zdjecie'], 'medium_large' ); ?>
                    </a>
                </div>
                <?php }
} ?>
    </div>
    <?php } ?>
</article>
