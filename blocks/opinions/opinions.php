<?php
$title = get_field('title_opi', 'options');
$opinions = get_field( 'opinions', 'options');
$resumen = get_field( 'resume_opi', 'options');

$titleMain = get_field('title');
?>

<div class="b-opi">
    <div class="b-opi__wraper">
        <div class="b-opi__col">
            <?php if($titleMain){ ?>
            <h2 class="section-h"> <?php echo $titleMain; ?></h2>
            <?php } else { ?>
            <?php if ($title) { ?>
            <h2 class="section-h"> <?php echo $title; ?></h2>
            <?php } ?>
            <?php } ?>
            <?php if ($resumen) { ?>
            <div class="b-opi__resumen ">
                <?php foreach($resumen as $res){ ?>
                <div class="b-opi__resumen__item">
                    <?php if ($res['logo']) { ?>
                    <?php  echo wp_get_attachment_image( $res['logo'], 'sm-icon' ); ?>
                    <?php } ?>
                    <?php if ($res['number']) {?>
                    <span><?php echo $res['number']; ?></span>
                    <?php } ?>
                    <?php if ($res['vote']) {?>
                    <small><?php echo $res['vote']; ?></small>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <div class="b-opi__col">
            <?php if($opinions) { ?>
            <div class="b-opi__opinions__wraper">
                <div class="swiper opinions">
                    <div class="swiper-wrapper">
                        <?php foreach ($opinions as $person ) { ?>
                        <div class="swiper-slide">
                            <div class="b-opi__opinions__item">
                                <div class="top">
                                    <div class="left">
                                        <?php if ($person['name']) {?>
                                        <span><?php echo $person['name']; ?></span>
                                        <?php } ?>
                                        <img class="stars" src="<?php echo get_template_directory_uri() ?>/src/img/stars-<?php echo $person['stars'];  ?>.png" alt="stars-<?php echo $person['stars'];  ?>" />
                                    </div>
                                    <?php if ($person['logo']) { ?>
                                    <?php  echo wp_get_attachment_image( $person['logo'], 'sm-icon' ); ?>
                                    <?php } ?>
                                </div>
                                <div class="bottom">
                                    <p><?php echo $person['opinion']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="arrows">
                <div class="nav">
                    <div class="sw-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34.129" height="17.064" viewBox="0 0 34.129 17.064">
                            <path id="Shape_1_copy" data-name="Shape 1 copy" d="M1642,4647.335a6.219,6.219,0,0,1,.472-.593q3.705-3.7,7.421-7.389c.41-.409.814-.465,1.174-.164a.742.742,0,0,1,.136,1.011,3.206,3.206,0,0,1-.331.372l-5.865,5.839c-.092.091-.177.187-.317.334h.457q14.928,0,29.858,0a2.387,2.387,0,0,1,.56.057.735.735,0,0,1,.565.726.743.743,0,0,1-.566.729,2.489,2.489,0,0,1-.559.057q-14.912,0-29.825,0h-.488c.142.15.228.245.318.335q2.991,2.982,5.981,5.961c.394.393.458.795.189,1.145a.748.748,0,0,1-1.061.149,3.686,3.686,0,0,1-.344-.311q-3.656-3.633-7.3-7.271a6.626,6.626,0,0,1-.47-.593Z" transform="translate(-1642 -4639)" fill="#5f021f" />
                        </svg>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="3" viewBox="0 0 4 3">
                        <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="2" cy="1.5" rx="2" ry="1.5" fill="#5f021f" />
                    </svg>

                    <div class="sw-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34.128" height="17.064" viewBox="0 0 34.128 17.064">
                            <path id="Shape_1_copy_2" data-name="Shape 1 copy 2" d="M1711.128,4647.728a6.524,6.524,0,0,1-.473.593q-3.7,3.7-7.42,7.389c-.41.408-.815.462-1.173.163a.739.739,0,0,1-.137-1.009,2.9,2.9,0,0,1,.329-.372q2.932-2.921,5.867-5.841c.09-.091.175-.186.316-.335h-30.316a2.487,2.487,0,0,1-.559-.057.733.733,0,0,1-.564-.727.742.742,0,0,1,.565-.728,2.5,2.5,0,0,1,.56-.058q14.912,0,29.825,0h.487c-.142-.15-.228-.246-.319-.336l-5.981-5.959c-.394-.393-.458-.8-.189-1.146a.747.747,0,0,1,1.06-.148,3.338,3.338,0,0,1,.346.312q3.654,3.631,7.3,7.271a6.3,6.3,0,0,1,.471.593Z" transform="translate(-1677 -4638.998)" fill="#5f021f" />
                        </svg>

                    </div>
                </div>
                <div class="scroll">
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</div>
