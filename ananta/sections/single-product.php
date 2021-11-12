<?php
$link = get_field('single_product_link');
$btn = get_field('single_product_btn');
?>
<div class="single-product__inner">
    <div class="single-product__item">
        <div class="single-product__photo">
            <?php the_post_thumbnail('', ['class' => 'single-product__photo--img']); ?>

        </div>
    </div>
    <div class="single-product__item">
        <h2 class="single-product__title title-h2">
            <?php the_title(); ?>
        </h2>
        <div class="single-product__text text">
            <?php the_content(); ?>
        </div>
        <div class="single-product__link--box">
        <a href="<?php echo $link['url']?>" class="single-product__link link">
            <?php echo $link['title'] ?>
        </a>
        </div>
        <div class="single-product__link--box">
        <a href="<?php echo $btn['url'] ?>" class="single-product__btn">
            <?php echo $btn['title'] ?>
        </a>
        </div>
    </div>
</div>
