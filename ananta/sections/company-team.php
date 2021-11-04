<?php
$image = get_sub_field('team_photo');
?>
<h2 class="team__title title-h2">
    <?php echo get_sub_field('team_title')?>
</h2>
<div class="team__inner">
    <div class="team__item">
        <div class="team__desc">
            <div class="team__text">
                <?php echo get_sub_field('team_text_left') ?>
            </div>
        </div>
    </div>
    <div class="team__item">
        <div class="team__desc">
            <div class="team__text">
                <?php echo get_sub_field('team_text_right')?>
            </div>
        </div>
    </div>
</div>
<div class="team__photo">
    <img src= "<?php echo $image['url'] ?>" alt="<?php echo $image['alt']?>" class="team__photo--img">
</div>