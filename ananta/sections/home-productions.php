<?php
$image = get_sub_field('production-info_img');
$image2 = get_sub_field('production-info_img_2');
$link = get_sub_field('production-info_link');
?>
<div class="production-home__photo--items">
    <div class="production-home__photo--box">
        <div class="production-home__photo--item">
            <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo $image['alt']?>" class="production-home__photo--img">
        </div>
        <div class="production-home__photo--item">
            <img src="<?php echo esc_url($image2['url']) ?>" alt="<?php echo $image2['alt']?>" class="production-home__photo--img">
        </div>
    </div>
    <div class="production-home__desc">
        <h3 class="production-home__sub-title sub-title">
            <?php echo get_sub_field('production-info_sub-title') ?>
        </h3>
        <h2 class="production-home__title title">
            <?php echo get_sub_field('production-info_title')?>
        </h2>
        <p class="production-home__text text">
            <?php echo get_sub_field('production-info_text') ?>
        </p>
        <a href=" <?php echo $link['url'] ?>" class="production-home__link link">
            <?php echo $link['title'] ?>
        </a>
    </div>
</div>