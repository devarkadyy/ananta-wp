<?php
$image = get_sub_field('briefcase-block_img');
?>
<div class="briefcase__inner">
    <div class="briefcase__item">
        <div class="briefcase__desc">
            <h2 class="briefcase__title title-h2">
                <?php echo get_sub_field('briefcase-block_title')?>
            </h2>
            <p class="briefcase-block_text text">
                <?php echo get_sub_field('briefcase-block_text')?>
            </p>
        </div>
    </div>
    <div class="briefcase__item">
        <div class="briefcase__photo">
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']?>" class="briefcase__photo--img">
        </div>
    </div>
</div>