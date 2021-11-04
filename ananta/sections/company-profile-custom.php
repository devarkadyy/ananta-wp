<?php
$image = get_sub_field('profile-info_img');

?>
<div class="company-profile__inner center">
    <div class="company-profile__wrap">
        <div class="container">
            <div class="company-profile__desc">
                <h3 class="company-profile__sub-title sub-title">
                    <?php echo get_sub_field('profile-info_sub-title') ?>
                </h3>
                <h1 class="company-profile__title title title-h1">
                    <?php echo get_sub_field('profile-info_title') ?>
                </h1>
                <div class="company-profile__text">
                    <?php echo get_sub_field('profile-info_text') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="company-profile__photo">
        <img src= "<?php echo  $image['url']?>" alt="<?php echo $image['alt']?>" class="company-profile__img">
    </div>
</div>

