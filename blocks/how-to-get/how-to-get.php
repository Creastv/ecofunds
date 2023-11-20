<?php
$desc = get_field( 'address' );
$link = get_field( 'link' );

if( $link ){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}

?>

<div class="b-how-to-get">
    <div class="b-how-to-get__wraper">
        <div class="b-how-to-get__col">
            <?php if ($desc) { ?>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="14.989" height="20" viewBox="0 0 14.989 20">
                    <path id="Shape_697_copy" data-name="Shape 697 copy" d="M1791.389,782a35.034,35.034,0,0,1-3.2-3.541,25.1,25.1,0,0,1-3.025-4.674,11.029,11.029,0,0,1-1.082-3.342,7.166,7.166,0,0,1,1.034-4.842,7.334,7.334,0,0,1,5.245-3.506,7.508,7.508,0,0,1,8.154,10.088,19.026,19.026,0,0,1-2.464,4.633,36.383,36.383,0,0,1-4.23,5c-.063.063-.13.122-.2.183Zm.116-15.933a3.436,3.436,0,1,0,3.437,3.439A3.438,3.438,0,0,0,1791.506,766.066Z" transform="translate(-1784.011 -761.999)" fill="#5f021f" />
                </svg>
                <?php echo $desc; ?>
            </p>
            <?php }?>
        </div>
        <div class="b-how-to-get__col">
            <?php if ($link) { ?>
            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
            </a>
            <?php } ?>
        </div>
    </div>
</div>
