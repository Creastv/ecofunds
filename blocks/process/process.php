<?php
$title = get_field( 'title' );
$process = get_field( 'process' );

?>
<div class="b-process">
    <div class="b-process__wraper">
        <?php if($title) { ?>
        <div class="b-process__col text-center">
            <h2 class="section-h"><?php echo $title; ?></h2>
            <svg id="logo--small" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="67.776" height="67.774" viewBox="0 0 67.776 67.774">
                <defs>
                    <linearGradient id="linear-gradient" x1="0.25" y1="0.067" x2="0.75" y2="0.933" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#ffcc39"/>
                    <stop offset="0.25" stop-color="#92611c"/>
                    <stop offset="0.5" stop-color="#ffca3a"/>
                    <stop offset="0.75" stop-color="#9b691e"/>
                    <stop offset="1" stop-color="#f2bb36"/>
                    </linearGradient>
                </defs>
                <path id="Path_738" data-name="Path 738" d="M3350.967-765.979a33.926,33.926,0,0,0-33.888,33.888,33.926,33.926,0,0,0,33.888,33.887,33.927,33.927,0,0,0,33.888-33.887A33.927,33.927,0,0,0,3350.967-765.979Zm0,.453a33.473,33.473,0,0,1,33.435,33.435,33.231,33.231,0,0,1-4.8,17.247c-4.9,7.065-13.148,12.877-21.488,6.7-20.93-17.32-7.273-34.534,3-38.3a27.869,27.869,0,0,1,9.149-1.922c.42,4.355-3.452,14.932-3.452,14.932l-2.874-5.822-.085.191c-.085.19,2.444,6.671,2.372,6.946-.964,3.659-3.427,6.348-4.722,8.256l-5.4-13.858a1.665,1.665,0,0,0-.056,1.179c1.126,4.557,2.23,9.119,3.4,13.663a2.216,2.216,0,0,1-.435,2.366c-1.086,1.689-3,3.717-3.7,4.7,9.991-5.1,14.589-19.453,14.589-19.453s2-2.107,2.606-2.687c.165-.178,1.619-1.558,1.6-1.873-1,.76-2.595,1.945-3.516,2.487,1.029-3.73,2.263-7.795,1.919-13.324-19.205-4.287-45.873,25.641-14.529,46.484,6.812,4.3-23.157,6.99-35.754-10.853a33.228,33.228,0,0,1-4.694-17.057A33.473,33.473,0,0,1,3350.967-765.526Zm24.337,20.113c7.6,24.143-9.466,36.836-13.092,38.064-.995-.913-2.666-2.561-2.666-2.561S3378.114-717.493,3375.3-745.413Zm-51.709,2.156c6.192-3.333,15.049-1.352,20.735,3.943a6.161,6.161,0,0,0-1.219,1.663,17.5,17.5,0,0,0-10.328-4.87,21.182,21.182,0,0,0-7.073.475c.588,3.266,5.586,10.191,5.586,10.191l.9-4.84.1.122c.1.121-.414,5.371-.305,5.557,1.455,2.473,3.805,3.93,5.141,5.057.384-3.942.739-7.583,1.093-11.223a1.265,1.265,0,0,1,.283.849c.113,3.557.245,7.114.321,10.672a1.679,1.679,0,0,0,.8,1.638,20.907,20.907,0,0,0,1.948,1.468l-.276.643C3333.978-724.52,3327.849-731.485,3323.595-743.257Zm19.3,26.256a13.239,13.239,0,0,0,3.289,5.279c-7.967-2.918-23.352-10.461-23.548-27.128C3324.758-726.751,3335.609-720.184,3342.892-717Z" transform="translate(-3317.079 765.979)" fill="url(#linear-gradient)"/>
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
