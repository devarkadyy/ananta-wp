<?php
$image = get_sub_field('photo');
$url = $image['url'];
$alt = $image['alt'];
?>
<div class="home-grid__item">
    <a href="#" class="home-grid__item--link">
        <div class="home-grid__item--photo">
            <img src="<?php echo esc_url($url) ?>" alt="<?php echo $alt; ?>" class="home-grid__item--img">
        </div>
        <div class="home-grid__item--desc">
            <h3 class="home-grid__item--title">
                <?php echo get_sub_field('title') ?>
            </h3>
            <p class="home-grid__item--text">
                <?php echo get_sub_field('text') ?>
            </p>
    </a>
</div>