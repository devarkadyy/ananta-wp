<div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p class="breadcrumb">', '</p>');
    }
    ?>
</div>
<div class="contact">
    <div class="container">
        <?php get_template_part('sections/contact'); ?>
    </div>
</div>