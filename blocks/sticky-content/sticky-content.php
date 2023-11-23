<?php
$title = get_field( 'title' );
$tag = get_field( 'tag');
$desc = get_field( 'desc' );
$galery = get_field( 'galery' );
$count = count( $galery );


?>

<div class="b-sticky-gsallery">
    <div class="b-sticky-gsallery__wraper <?php echo $po; ?>">
        <div class="b-sticky-gsallery__col ">
            <?php if($title) { ?> <<?php echo $tag; ?> class="section-h"> <?php echo $title; ?></<?php echo $tag; ?>><?php } ?>
            <?php if($desc) { ?> <div class="desc"> <?php echo $desc; ?></div> <?php } ?>
        </div>
        <div class="b-sticky-gsallery__col">
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
