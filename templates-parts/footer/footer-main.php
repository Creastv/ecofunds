<?php 
$maenuOne = get_field('menus', 'options');
$menuTwo = get_field('menus_two', 'options');
$menuThree = get_field('menus_three', 'options');
?>

<div class="f__menus">
    <div class="f__menus__wraper">
        <?php if($maenuOne) { ?>
        <div class="f__menus__col">
            <?php if($maenuOne['title_one']) { ?>
            <p><?php echo $maenuOne['title_one']; ?></p>
            <?php } else { ?>
            <span class="space"></span>
            <?php } ?>
            <?php echo $maenuOne['menu']; ?>
        </div>
        <?php } ?>

        <?php if($menuTwo) { ?>
        <div class="f__menus__col">
            <?php if($menuTwo['title']) { ?>
            <p><?php echo $menuTwo['title']; ?></p>
            <?php } else { ?>
            <span class="space"></span>
            <?php } ?>
            <?php echo $menuTwo['menu']; ?>
        </div>
        <?php } ?>

        <?php if($menuThree) { ?>
        <div class="f__menus__col">
            <?php if($menuThree['title']) { ?>
            <p><?php echo $menuThree['title']; ?></p>
            <?php } else { ?>
            <span class="space"></span>
            <?php } ?>
            <?php echo $menuThree['menu']; ?>
        </div>
        <?php } ?>

    </div>
</div>
