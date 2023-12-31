<?php 
$img = get_field('img');
$title = get_field('title');
$desc = get_field('desc');
$numbers = get_field('numbers');

?>

<div class="b-num">
    <div class="b-num__wraper">
        <div class="b-num__col">
            <div class="img" style="background-image: url(<?php echo $img; ?>);"></div>
        </div>
        <div class="b-num__col">
            <?php if($title){ ?>
            <h2 class="section-h"><?php echo $title?></h2>
            <?php } ?>
            <?php if($desc){ ?>
            <?php echo $desc; ?>
            <?php } ?>
            <?php if($numbers){ ?>
            <div class="nums">
                <?php foreach($numbers as $num) { ?>
                <div class="num-itam">
                    <span>
                        <?php echo $num['number']; ?>
                        <small> <?php if($num['prefix']) { ?> <?php echo $num['prefix']; ?><?php } ?></small>
                    </span>
                    <p><?php echo $num['desc']; ?></p>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
                <svg  id="bg-numbers"  data-name="Warstwa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 152.5 339.74">
                <defs>
                    <style>
                    .cls-1 {
                        fill: none;
                    }

                    .cls-2 {
                        fill: #9e9e9e;
                    }
                    </style>
                </defs>
                <path class="cls-1" d="M17,310.6c-6.1-4.06-11.76-8.18-17-12.36v27.77c19.4-1.93,28.38-8.22,17-15.41Z"/>
                <path class="cls-1" d="M90.26,76.23c1.74,27.87-4.48,48.37-9.67,67.18,4.64-2.73,12.68-8.71,17.73-12.54,.09,1.59-7.24,8.54-8.07,9.44-3.04,2.93-13.14,13.55-13.14,13.55,0,0-23.18,72.35-73.56,98.09,3.54-4.97,13.19-15.2,18.67-23.71,3.27-5.09,3.66-6.24,2.19-11.93-5.92-22.91-11.48-45.92-17.16-68.89-.44-1.8-.75-3.63,.28-5.95,8.82,22.67,17.65,45.33,27.2,69.88,6.53-9.62,18.95-23.18,23.81-41.63,.37-1.39-12.39-34.07-11.96-35.02,.16-.35,.43-.96,.43-.96l14.49,29.36s19.52-53.33,17.41-75.29c-16.73,.38-31.62,4.37-46.13,9.69-10.76,3.95-22.25,10.83-32.77,20.02v156.87c5.25,5.39,11.12,10.81,17.66,16.22,42.05,31.16,83.62,1.86,108.34-33.77,15.36-25.41,24.22-55.17,24.22-86.96C150.22,83.12,84.35,11.47,0,2.3V98.78c27.27-19.56,60.53-29.19,90.26-22.55Zm14.09,26.48c38.33,121.72-47.73,185.73-66.01,191.92-5.02-4.61-13.45-12.91-13.45-12.91,0,0,93.62-38.23,79.45-179Z"/>
                <path class="cls-2" d="M24.9,281.71s8.43,8.31,13.45,12.91c18.28-6.19,104.33-70.19,66.01-191.92,14.17,140.77-79.45,179-79.45,179Z"/>
                <path class="cls-2" d="M152.5,169.87C152.5,81.86,85.61,9.19,0,0V2.3C84.35,11.47,150.22,83.12,150.22,169.87c0,31.79-8.86,61.55-24.22,86.96-24.72,35.62-66.29,64.92-108.34,33.77-6.54-5.41-12.41-10.83-17.66-16.22v23.86c5.25,4.18,10.91,8.3,17,12.36,11.38,7.19,2.4,13.48-17,15.41v13.74c85.61-9.19,152.5-81.86,152.5-169.87Z"/>
                <path class="cls-2" d="M78.9,87.79c2.12,21.96-17.41,75.29-17.41,75.29l-14.49-29.36s-.27,.62-.43,.96c-.43,.96,12.33,33.63,11.96,35.02-4.86,18.45-17.28,32.01-23.81,41.63-9.56-24.55-18.38-47.21-27.2-69.88-1.03,2.32-.72,4.15-.28,5.95,5.68,22.97,11.24,45.98,17.16,68.89,1.47,5.68,1.08,6.84-2.19,11.93-5.48,8.52-15.13,18.74-18.67,23.71,50.37-25.73,73.56-98.09,73.56-98.09,0,0,10.1-10.62,13.14-13.55,.83-.9,8.17-7.85,8.07-9.44-5.05,3.83-13.09,9.81-17.73,12.54,5.19-18.81,11.41-39.3,9.67-67.18-29.72-6.64-62.99,2.99-90.26,22.55v18.73c10.52-9.2,22.01-16.08,32.77-20.02,14.51-5.33,29.4-9.32,46.13-9.69Z"/>
                </svg>
        </div>
    </div>
</div>
