<?php

$contact = get_field('contact_footer', 'options');
?>

<?php if($contact) : ?>
<div class="f__contact">
    <div class="f__contact__left">
        <?php if($contact['title']) { ?>
        <p><?php echo $contact['title'];?></p>
        <?php } ?>
        <?php if($contact['name']) { ?>
        <h4><?php echo $contact['name'];?></h4>
        <?php } ?>
        <?php if($contact['work_position']) { ?>
        <span><?php echo $contact['work_position'];?></span>
        <?php } ?>
        <br>
        <?php if($contact['phone_no']) { ?>
        <a href="tel:<?php echo $contact['phone_no'];?>"><?php echo $contact['phone_no'];?></a>
        <?php } ?>
        <?php if($contact['email']) { ?>
        <a href="mailto:<?php echo $contact['email'];?>"><?php echo $contact['email'];?></a>
        <?php } ?>
    </div>
    <div class="f__contact__right">
        <div class="img">
            <?php echo wp_get_attachment_image( $contact['avatar'] ); ?>
        </div>
    </div>
</div>
<?php endif;?>
