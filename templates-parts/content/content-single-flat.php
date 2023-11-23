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
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="105.8px" height="105.8px" viewBox="0 0 105.8 105.8" style="enable-background:new 0 0 105.8 105.8;" xml:space="preserve">
                            <path fill="#FFFFFF" d="M92.5,39.6v-13L78.9,13l-6.5,6.5L52.9,0L33.4,19.5L26.9,13L13.3,26.6v13L0,52.9l13.3,13.3v13l13.6,13.6l6.5-6.5
                    l19.5,19.5l19.5-19.5l6.5,6.5l13.6-13.6v-13l13.3-13.3L92.5,39.6z M92.5,47.9l5,5l-5,5V47.9z M79.5,41.4L91,52.9L79.5,64.4V41.4z
                    M91.3,54.4v23.1L79.8,65.9L91.3,54.4z M79.8,39.9l11.5-11.5v23.1L79.8,39.9z M79.5,38.4V15.3L91,26.9L79.5,38.4z M40.5,78.6V54.4
                    l12.4,12.4l12.4-12.4v24.3L65,78.9L52.9,91L40.7,78.9L40.5,78.6z M53.7,39.9l11.5-11.5v23.1L53.7,39.9z M65,52.9L53.5,64.4V41.4
                    L65,52.9z M52.9,39L40.7,26.9l12.1-12.1L65,26.9L52.9,39z M52,39.9L40.5,51.4V28.4L52,39.9z M52.3,41.4v23.1L40.7,52.9L52.3,41.4z
                    M78,65.9L66.5,77.4V54.4L78,65.9z M66.8,52.9l11.5-11.5v23.1L66.8,52.9z M66.5,51.4V28.4L78,39.9L66.5,51.4z M52.9,13l-13,13
                    l-2.4-2.4L52.9,8.2l15.4,15.4L65.9,26L52.9,13z M27.7,39.9l11.5-11.5v23.1L27.7,39.9z M39,26.9L27.5,38.4V15.3L39,26.9z M27.5,41.4
                    L39,52.9L27.5,64.4V41.4z M39.3,54.4v23.1L27.7,65.9L39.3,54.4z M39.9,79.8l13,13l13-13l2.4,2.4L52.9,97.5L37.5,82.1L39.9,79.8z
                    M66.8,78.9l11.5-11.5v23.1L66.8,78.9z M78.3,38.4L66.8,26.9l11.5-11.5V38.4z M52.9,1.7l18.6,18.6l-2.4,2.4L52.9,6.5L36.6,22.8
                    l-2.4-2.4L52.9,1.7z M26.3,41.4v23.1L14.7,52.9L26.3,41.4z M14.5,51.4V28.4L26,39.9L14.5,51.4z M26.3,15.3v23.1L14.7,26.9L26.3,15.3
                    z M13.3,57.9l-5-5l5-5V57.9z M1.7,52.9l11.5-11.5v4.8l-6.8,6.8l6.8,6.8v4.8L1.7,52.9z M14.5,54.4L26,65.9L14.5,77.4V54.4z
                    M26.3,67.4v23.1L14.7,78.9L26.3,67.4z M27.5,67.4L39,78.9L27.5,90.4V67.4z M52.9,104L34.2,85.4l2.4-2.4l16.3,16.3L69.1,83l2.4,2.4
                    L52.9,104z M79.5,90.4V67.4L91,78.9L79.5,90.4z M92.5,59.6l6.8-6.8l-6.8-6.8v-4.8L104,52.9L92.5,64.4V59.6z" />
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
