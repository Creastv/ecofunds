<?php
$img= get_field( 'zdjecie_portretowe' );
$name = get_field( 'imie_i_nazwisko' );
$pos = get_field( 'stanowisko' );
$country = get_field( 'kraj' );
$contact = get_field( 'kontakt' );
$desc = get_field( 'opis' );
?>


<div class="b-person">
    <div class="b-person_wraper">
        <div class="img">
            <?php if($img) : ?>
                <?php echo wp_get_attachment_image( $img, 'full' ); ?>
            <?php else : ?>
                <img src="http://localhost/ecofund/wp-content/uploads/2023/11/zalozyciel.png" alt="">
            <?php endif; ?>
        </div>
        <div class="content">
            <div class="header">
                <h3>
                    <?php echo $name ? $name : false; ?>
                    <?php if($contact['linkedin']) : ?>
                    <a href="<?php echo $contact['linkedin']; ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36.424" height="36.424" viewBox="0 0 36.424 36.424">
                        <g id="Group_153" data-name="Group 153" transform="translate(-103 -28)">
                            <path id="Path_739" data-name="Path 739" d="M103,60.155V32.268a.745.745,0,0,0,.068-.156,4.822,4.822,0,0,1,2.676-3.583,11.717,11.717,0,0,1,1.524-.53h27.887a.718.718,0,0,0,.155.068,4.941,4.941,0,0,1,4.112,4.9q0,13.264,0,26.528a4.939,4.939,0,0,1-4.927,4.927q-13.282,0-26.564,0a4.934,4.934,0,0,1-4.645-3.292C103.174,60.811,103.095,60.48,103,60.155Zm19.382-16.024c0-.317,0-.634,0-.951-.01-.586-.243-.819-.821-.82q-1.547,0-3.093,0c-.636,0-.882.242-.882.875q0,6.738,0,13.476c0,.617.27.881.895.883q1.458,0,2.916,0c.757,0,.972-.214.972-.967,0-2.3-.01-4.6.006-6.9a4.339,4.339,0,0,1,.686-2.424,2.318,2.318,0,0,1,2.258-1.059,2.053,2.053,0,0,1,1.995,1.586,9.356,9.356,0,0,1,.283,2.2c.034,2.228.01,4.456.01,6.684,0,.615.244.861.86.864q1.582.006,3.164,0c.624,0,.891-.266.89-.887,0-2.453.024-4.907-.028-7.36a17.98,17.98,0,0,0-.342-3.168,4.6,4.6,0,0,0-2.525-3.492,6.85,6.85,0,0,0-4.821-.263A4.722,4.722,0,0,0,122.382,44.131ZM115.4,49.966q0-3.323,0-6.646c0-.727-.233-.963-.949-.964q-1.439,0-2.879,0c-.7,0-.96.26-.96.966q0,6.646,0,13.292c0,.7.281.979,1,.98q1.4,0,2.808,0c.724,0,.983-.258.983-.982Q115.4,53.289,115.4,49.966Zm.7-12.023a3.1,3.1,0,0,0-3.076-3.113,3.1,3.1,0,0,0-.056,6.193A3.073,3.073,0,0,0,116.1,37.943Z" fill="#0077b5"/>
                        </g>
                        </svg>
                    </a>
                    <?php endif; ?>
                </h3>
                <?php if($pos) : ?>
                <span class="pos"><?php echo $pos; ?></span>
                <?php endif; ?>
                <?php if($country) : ?>
                <div class="country">
                    <span>
                        <?php _e('kraj: ', 'cr'); ?>
                        
                        <?php echo $country['kraj'] ? $country['kraj'] : false; ?>
                         <?php if( $country['flaga']) : ?>
                            <?php echo  wp_get_attachment_image(  $country['flaga'], 'full' ); ?>
                        <?php endif; ?>
                    </span>
                </div>
                <?php endif; ?>
                <?php if($contact) : ?>
                <div class="contact">
                    <ul>
                        <?php if($contact['adres_e-mail']) : ?>
                        <li><?php _e('e-mail:', 'cr'); ?><a href="mailto:<?php echo $contact['adres_e-mail']; ?>"> <?php echo $contact['adres_e-mail']; ?></a></li>
                        <?php endif; ?>
                         <?php if($contact['nr_telefonu']) : ?>
                        <li><?php _e('tel.:', 'cr'); ?><a href="tel: <?php echo $contact['nr_telefonu']; ?>"> <?php echo $contact['nr_telefonu']; ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if($desc) : ?>
                <div class="desc">
                    <?php echo $desc; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>