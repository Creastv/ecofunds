<?php
$title = get_field( 'title' );
$process = get_field( 'process' );

?>
<div class="b-process">
    <div class="b-process__wraper">
        <?php if($title) { ?>
        <div class="b-process__col text-center">
            <h2 class="section-h"><?php echo $title; ?></h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="84.996" height="84.997" viewBox="0 0 84.996 84.997">
                <path id="Shape_23_copy_6" data-name="Shape 23 copy 6" d="M1912.35,2028.84v-10.451l-10.942-10.942-5.226,5.226L1880.507,1997l-15.676,15.676-5.226-5.226-10.942,10.942v10.451l-10.654,10.654,10.654,10.654V2060.6l10.942,10.943,5.226-5.226,15.676,15.677,15.676-15.677,5.226,5.226,10.942-10.943v-10.452l10.655-10.654Zm0,6.616,4.038,4.038-4.038,4.039Zm-10.451-5.225,9.264,9.264-9.264,9.264Zm9.467,10.451v18.528l-9.263-9.264Zm-9.263-11.638,9.263-9.264v18.528Zm-.2-1.186v-18.528l9.264,9.264Zm-31.352,32.334v-19.511l9.959,9.96,9.959-9.96v19.511l-.2.2-9.756,9.756-9.756-9.756Zm10.654-31.148,9.265-9.264v18.528Zm9.061,10.451-9.265,9.264v-18.528Zm-9.756-11.146-9.756-9.755,9.756-9.756,9.756,9.756Zm-.7.7-9.264,9.264V2019.78Zm.2,1.187v18.528l-9.265-9.264Zm20.7,19.715-9.265,9.264v-18.528Zm-9.06-10.452,9.263-9.264v18.528Zm-.2-1.187V2019.78l9.265,9.264Zm-10.942-30.86-10.451,10.452-1.917-1.918,12.368-12.368,12.368,12.368-1.917,1.918Zm-20.207,21.6,9.264-9.264v18.528Zm9.061-10.45-9.264,9.264v-18.528Zm-9.264,11.637,9.264,9.264-9.264,9.264Zm9.467,10.451v18.528l-9.264-9.264Zm.492,20.411,10.451,10.451,10.451-10.451,1.917,1.917-12.368,12.368-12.368-12.368Zm21.6-.7,9.263-9.264v18.528Zm9.263-32.539-9.263-9.264,9.263-9.264Zm-20.409-29.471,14.981,14.981-1.917,1.917-13.063-13.064-13.064,13.064-1.917-1.917Zm-21.393,31.844v18.528l-9.264-9.264Zm-9.468,8.077V2019.78l9.265,9.264Zm9.468-28.978v18.528l-9.264-9.264Zm-10.451,34.2-4.039-4.039,4.039-4.038Zm-9.264-4.039,9.264-9.264v3.835l-5.429,5.429,5.429,5.43v3.835Zm10.247,1.187,9.265,9.265-9.265,9.264Zm9.468,10.451v18.528l-9.264-9.264Zm.983,0,9.264,9.264-9.264,9.264Zm20.41,29.47-14.981-14.982,1.917-1.917,13.064,13.064,13.063-13.064,1.918,1.917Zm21.393-10.942v-18.528l9.264,9.264Zm10.451-24.737,5.429-5.43-5.429-5.429v-3.835l9.264,9.264-9.264,9.264Z" transform="translate(-1838.009 -1996.997)" fill="#5f021f" />
            </svg>

        </div>
        <?php } ?>
        <div class="b-process__col">
            <?php if($process) { ?>

            <?php if ( !wp_is_mobile() ) : ?>
            <div class="steps steps--center-line d-sm-none">
                <div class="left">
                    <?php  $count = 0; foreach($process as $step) { ?>
                    <?php if ($count % 2 == 0) { ?>
                    <div class="step">
                        <div class="step__wraper">
                            <h3><?php echo $step['step_name']; ?></h3>
                            <?php echo $step['step_desc']; ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php  $count ++; } ?>
                </div>
                <div class="right">
                    <?php  $count = 0; foreach($process as $step) { ?>
                    <?php if ($count % 2 !== 0) { ?>
                    <div class="step">
                        <div class="step__wraper">
                            <h3><?php echo $step['step_name']; ?></h3>
                            <?php echo $step['step_desc']; ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php  $count ++; } ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if ( wp_is_mobile() ) : ?>
            <div class="steps steps--left-line d-lg-block">
                <div class="midel">
                    <?php foreach($process as $step) { ?>
                    <div class="step">
                        <div class="step__wraper">
                            <h3><?php echo $step['step_name']; ?></h3>
                            <?php echo $step['step_desc']; ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php endif; ?>
            <?php } ?>
        </div>
    </div>
</div>
