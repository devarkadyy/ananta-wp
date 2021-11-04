<?php $photos = get_sub_field('custom-slider_img'); ?>
<div class="production-slider__inner">
        <div class="slider">
            <?php foreach ( $photos as $photo):?>
                <div class="slider__item">
                    <img src= "<?php echo $photo['url'] ?>" alt="<?php echo $photo['alt']?>" class="slider__item--img">
                </div>
            <?php endforeach;?>
        </div>
    <div class="production-slider__text">
        <?php echo get_sub_field('')?>
    </div>
</div>
