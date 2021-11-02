<?php
$image = get_sub_field('two_photo_1');
$image2 = get_sub_field('two_photo_2');
?>
<div class="two-photo__inner">
    <div class="two-photo__item">
        <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" class="two-photo__item--img">
    </div>
    <div class="two-photo__item">
        <img src="<?php echo $image2['url']?>" alt="<?php echo $image2['alt']?>" class="two-photo__item--img">
    </div>
</div>