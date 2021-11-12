<?php
$image = get_sub_field('product_img');
$image2 = get_sub_field('product_img_2');
$link = get_sub_field('product_link');
$link2 = get_sub_field('product_link_2');
?>
<div class="product__inner">
   <div class="product__item">
      <div class="product__desc">
          <div class="product__title title-h2">
              <?php echo get_sub_field('product_title'); ?>
          </div>
          <div class="product__text text ">
              <?php echo get_sub_field('product_text'); ?>
          </div>
          <a href="<?php echo $link['url'];?>" class="product__link link"><?php echo $link['title'];?></a>
      </div>
   </div>
    <div class="product__item">
        <div class="product__photo">
            <img src= "<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>" class="product__photo--img">
        </div>
    </div>
</div>
<div class="product__inner--reverse">
    <div class="product__item--reverse">
        <div class="product__desc--reverse">
            <div class="product__title title-h2">
                <?php echo get_sub_field('product_title_2'); ?>
            </div>
            <div class="product__text text ">
                <?php echo get_sub_field('product_text_2'); ?>
            </div>
            <a href="<?php echo $link2['url'];?>" class="product__link link"><?php echo $link2['title'];?></a>
        </div>
    </div>
    <div class="product__item--reverse">
        <div class="product__photo--reverse">
            <img src= "<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']?>" class="product__photo--img">
        </div>
    </div>
</div>
