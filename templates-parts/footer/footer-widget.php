<?php 
$widget = get_field('dodatkowe_pole', 'options');
?>
<?php if($widget) : ?>
<div class="wide-container">
<?php echo $widget; ?>
</div>
<?php endif; ?>