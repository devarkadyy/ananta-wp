<?php
$image = get_sub_field('company-block_img_1');
$image2 = get_sub_field('company-block_img_2');
?>
<div class="company-block__inner">
    <div class="company-block__inner--items">
        <div class="company-block__inner--item">
            <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" class="company-block__inner--image">
        </div>
        <div class="company-block__inner--item">
            <div class="company-block__inner--desc">
                <h2 class="company-block__inner--title title">
                    <?php echo get_sub_field('company-block_title') ?>
                </h2>
                <p class="company-block__inner--text text">
                    <?php echo get_sub_field('company-block_text') ?>
                </p>
            </div>
        </div>
    </div>
    <div class="company-block__inner--items">
        <div class="company-block__inner--photo">
            <img src="<?php echo $image2['url']?>" alt="<?php echo $image['alt']?>" class="company-block__inner--img">
        </div>
    </div>
</div>