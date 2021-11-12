<div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p class="breadcrumb">', '</p>');
    }
    ?>
</div>
<section class="product-category">
    <div class="container">
        <?php get_template_part('sections/product-category', 'content'); ?>
    </div>
</section>
