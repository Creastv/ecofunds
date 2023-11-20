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



?>

<div class="b-img-s">
    <div class="b-img-s__wraper <?php echo $po; ?>">
        <div class="b-img-s__col ">
            <?php if($title) { ?> <<?php echo $tag; ?> class="section-h"> <?php echo $title; ?></<?php echo $tag; ?>><?php } ?>
            <?php if($desc) { ?> <?php echo $desc; ?> <?php } ?>
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
