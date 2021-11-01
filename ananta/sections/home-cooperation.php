<?php
$image = get_sub_field('cooperation-info_img');
$link = get_sub_field('cooperation-info_link');
?>
<div class="cooperation-home__inner">
    <div class="cooperation-home__inner--desc">
        <div class="cooperation-home__inner--desc-wrap">
            <h3 class="cooperation-home__inner--sub-title sub-title">
                <?php echo get_sub_field('cooperation-info_sub-title') ?>
            </h3>
            <h2 class="cooperation-home__inner--title title">
                <?php echo get_sub_field('cooperation-info_title') ?>
            </h2>
            <p class="cooperation-home__inner--text text">
                <?php echo get_sub_field('cooperation-info_text') ?>
            </p>
            <a href="<?php echo $link['url']; ?>" class="cooperation-home__inner--link link"><?php echo $link['title'] ?></a>
        </div>
    </div>
    <div class="cooperation-home__inner--absolute">
   <div class="cooperation-home__inner--photo">
       <img src= "<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" class="cooperation-home__inner--img">
   </div>
    </div>
</div>