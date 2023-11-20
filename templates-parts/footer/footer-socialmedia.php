<?php
$sm = get_field('social_media', 'options');
$desc = get_field('footer_description', 'options');
?>

<?php if($sm) :?>
<div class="f__socialmedia">
    <?php if($desc) { ?>
    <span><?php echo $desc; ?></span>
    <?php } ?>
    <ul>
        <?php foreach($sm as $s ){ ?>
        <li><a href="<?php echo $s['link']; ?>" target="_blank"><?php echo $s['ikon']; ?></a></li>
        <?php } ?>
    </ul>
</div>
<?php endif;?>
