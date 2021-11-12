<div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p class="breadcrumb">', '</p>');
    }
    ?>
</div>
<section class="single-product">
    <div class="container">
    <?php get_template_part('sections/single', 'product'); ?>
    </div>
</section>
<section class="related-content">
    <div class="container">
        <?php get_template_part('sections/related', 'content'); ?>
    </div>
</section>