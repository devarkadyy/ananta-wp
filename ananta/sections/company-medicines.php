<?php
$image = get_sub_field('medicines-info_img_1');
$image2 = get_sub_field('medicines-info_img_2');
?>
<div class="medicines__inner">
    <div class="medicines__item">
        <div class="medicines__photos">
            <div class="medicines__photo">
                <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" class="medicines__photo--img">
            </div>
            <div class="medicines__photo">
                <div class="medicines__photo--inner">
                    <img src="<?php echo $image2['url']?>" alt="<?php echo $image2['alt']?>" class="medicines__photo--img">

                </div>
            </div>
        </div>
    </div>
        <div class="medicines__item">
            <div class="medicines__desc">
                <h2 class="medicines__title title-h2">
                    <?php echo get_sub_field('medicines-info_title')?>
                </h2>
                <p class="medicines__text">
                    <?php echo get_sub_field('medicines-info_text')?>
                </p>
            </div>
        </div>
    </div>
