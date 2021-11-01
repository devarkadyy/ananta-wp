<?php
$image = get_sub_field('about-info_img');
$image2 = get_sub_field('about-info_img_2');
$link = get_sub_field('about-info_link');
?>
<div class="about-home__photo--items">
    <div class="about-home__photo--box">
        <div class="about-home__photo--item">
            <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo $image['alt']; ?>"
                 class="about-home__photo--img">
        </div>
        <div class="about-home__photo--item">
            <img src="<?php echo esc_url($image2['url']) ?>" alt="<?php echo $image2['alt']; ?>"
                 class="about-home__photo--img">
        </div>
    </div>
    <div class="about-home__desc">
        <h3 class="about-home__sub-title sub-title">
            <?php echo get_sub_field('about-info_sub-title') ?>
        </h3>
        <h2 class="about-home__title title">
            <?php echo get_sub_field('about-info_title') ?>
        </h2>
        <p class="about-home__text text">
            <?php echo get_sub_field('about-info_text') ?>
        </p>
        <a href="<?php echo $link['url'] ?>" class="about-home__link link">
            <?php echo $link['title'] ?>
        </a>
    </div>
</div>