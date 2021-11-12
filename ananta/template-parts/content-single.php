<div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p class="breadcrumb">', '</p>');
    }
    ?>
    <div class="single__title title-h2">
        <?php the_title();?>
    </div>
    <div class="single__content text">
        <?php the_content();?>
    </div>
</div>
