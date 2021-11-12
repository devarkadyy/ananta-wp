<?php
$link = get_sub_field('home_slider_btn');
$image = get_sub_field('home_slider_photo');
?>
<div class="home-slider__inner">
    <div class="home-sliders">
        <div class="home-sliders__item">
            <div class="home-sliders__item--inner">
                <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt'] ?>" class="home-sliders__item--photo">
            </div>
            <div class="home-sliders__item--inner">
                <h1 class="home-sliders__item--title">
                    <?php echo get_sub_field('home_slider_title')?>
                </h1>
                <div class="home-sliders__item--text">
                    <?php echo get_sub_field('home_slider_text')?>
                </div>
                <a href="<?php echo $link['url']?>" class="home-sliders__item--btn">
                    <?php echo $link['title']?>
                </a>
            </div>
        </div>
    </div>
</div>