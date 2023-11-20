<?php
/**
*
* Template name: Home
* Template Post Type:  page
*/
get_header();

$title = get_field('title');
$desc = get_field('desc');
$bg = get_field('background_image');
$contact = get_field("contact");
$cta = get_field("cta");

$link = $cta['link'];
if($link){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}

while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" class="hentry">
    <div class="wraper-bg">
        <div class="bg" style="background-image:url(<?php echo $bg; ?>);">
            <div class="bg-wraper">
                <div class="container">
                    <div class="row cont">
                        <div class="cont__wraper">
                            <div class="title">
                                <?php if($title) { ?>
                                <h1><i><?php echo $title; ?></i></h1>
                                <?php } ?>
                                <?php if($desc) { ?>
                                <p><i><?php echo $desc; ?></i></p>
                                <?php } ?>
                            </div>
                            <?php if($contact) { ?>
                            <div class="contact">
                                <?php echo $contact; ?>
                            </div>
                            <?php } ?>

                            <div class="cta">
                                <div class="cta__left">
                                    <?php if($cta['headline']) { ?>
                                    <span><?php echo $cta['headline']; ?></span>
                                    <?php } ?>
                                    <?php if($cta['phone']) { ?>
                                    <a href="tel:<?php echo $cta['phone']; ?>"><?php echo $cta['phone']; ?></a>
                                    <?php } ?>
                                </div>
                                <div class="cta__right">
                                    <?php if($link) { ?>
                                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                        <span><?php echo esc_html( $link_title ); ?></span>
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22.9px" height="22.8px" viewBox="0 0 22.9 22.8" style="enable-background:new 0 0 22.9 22.8;" xml:space="preserve">
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#E6C17C" d="M11.6,0H9l10.4,10.4H0v1.9h19.4L9,22.8h2.6l11.4-11.4L11.6,0z" />
                                        </svg>
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<?php endwhile;
get_footer();
