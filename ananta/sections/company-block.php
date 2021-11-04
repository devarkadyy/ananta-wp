<?php
$image = get_sub_field('company-block_img_1');
$image2 = get_sub_field('company-block_img_2');
?>
<div class="company-block__inner">
    <div class="company-block__wrap">
        <div class="company-block__content">
            <div class="container">
                <div class="company-block__bg">
                <div class="company-block__desc">
                    <h2 class="company-block__desc--title">
                       <?php echo get_sub_field('company-block_title')?>
                    </h2>
                    <div class="company-block__desc--text">
                        <?php echo get_sub_field('company-block_text')?>
                    </div>
                </div>
                </div>
            </div>
            <div class="company-block__image--wrap">
                <div class="company-block__image">
                    <img src= " <?php echo $image2['url'] ?>" alt="<?php echo $image2['alt']?>" class="company-block__image--img">
                </div>
            </div>

        </div>
        <div class="company-block__photo">
            <img src= " <?php echo $image['url'] ?>" alt="<?php echo $image['alt']?>" class="company-block__photo--img">
        </div>
    </div>


</div>