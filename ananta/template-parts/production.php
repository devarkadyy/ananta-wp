<div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p class="breadcrumb">', '</p>');
    }
    ?>
</div>
<section class="product">
    <div class="container custom-container">
    <?php
    if (have_rows('product')):
        while (have_rows('product')) : the_row();
            if (get_row_layout() == 'product-info'):
                ?>
                <?php get_template_part('sections/product'); ?>
            <?php endif;
        endwhile;
    endif;
    ?>
    </div>
</section>


