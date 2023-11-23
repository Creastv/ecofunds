<?php
$title = get_field( 'title' );
$tag = get_field( 'tag');
$desc = get_field( 'desc' );
$nums = get_field( 'numbers' );
$list = get_field( 'list' );
$desc2 = get_field( 'desc2' );
$galery = get_field( 'galery' );
$count = count( $galery );
$position = get_field( 'galery_position' );
$po = "";
if (!$position) {
    $po = "right";
}

$link = get_field('link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
$class_name = 'b-img-s';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr( $class_name ); ?>">
    <div class="b-img-s__wraper <?php echo $po; ?>">
        <div class="b-img-s__col ">
            <?php if($title) { ?> <<?php echo $tag; ?> class="section-h"> <?php echo $title; ?></<?php echo $tag; ?>><?php } ?>
            <?php if($desc) { ?> <div class="desc"> <?php echo $desc; ?></div> <?php } ?>
            <?php if($link) : ?>
                <div class="btn_wrap">
                 <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="9" viewBox="0 0 18 9">
                        <path id="Shape_1" data-name="Shape 1" d="M2448,301.6a3.56,3.56,0,0,1-.249.313q-1.954,1.95-3.914,3.9c-.217.215-.429.244-.619.086a.39.39,0,0,1-.072-.532,1.586,1.586,0,0,1,.174-.2q1.547-1.542,3.094-3.08c.048-.048.093-.1.167-.176h-15.988a1.293,1.293,0,0,1-.295-.029.388.388,0,0,1-.3-.384.393.393,0,0,1,.3-.384,1.355,1.355,0,0,1,.3-.03q7.865,0,15.73,0h.257c-.075-.079-.12-.13-.168-.177l-3.155-3.143c-.208-.207-.242-.42-.1-.6a.4.4,0,0,1,.56-.078,1.738,1.738,0,0,1,.182.164q1.927,1.916,3.853,3.834a3.39,3.39,0,0,1,.248.314Z" transform="translate(-2429.999 -296.999)" fill="#fff"></path>
                    </svg>
                    <?php echo esc_html( $link_title ); ?>
                </a>
                </div>
            <?php endif; ?>
            <?php if($nums) { ?>
            <div class="nums">
                <?php foreach($nums as $num) { ?>
                <div class="nums__item">
                    <span class="nums__item__num"><?php echo $num['number']; ?><?php if($num['prefix']) { ?><small> <?php echo $num['prefix']; ?></small><?php } ?></span>
                    <?php if($num['desc']) { ?>
                    <span class="nums__item__desc"><?php echo $num['desc']; ?></span>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <?php } ?>

            <?php if($list) { ?>
            <ul class="list">
                <?php foreach($list as $item) { ?>
                <li class="list__item">
                    <span></span>
                    <p><?php echo $item['item']; ?></p>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>

            <?php if($desc2) { ?> <?php echo $desc2; ?> <?php } ?>

        </div>
        <div class="b-img-s__col">
            <div class="galery">
                <?php if($count > 1 ) { ?>
                <ul>
                    <?php } ?>
                    <?php foreach( $galery as $img ): ?>

                    <?php if($count == 1 ) { ?>
                    <div class="img">
                        <?php echo wp_get_attachment_image( $img, 'medium_large'); ?>
                    </div>
                    <?php } else { ?>

                    <li>
                        <div class="item" style="background-image:url(<?php echo wp_get_attachment_url($img, 'medium'); ?>);"></div>

                    </li>

                    <?php } ?>

                    <?php endforeach; ?>

                    <?php if($count > 1 ) { ?>
                </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
