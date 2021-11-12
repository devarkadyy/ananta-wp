<div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p class="breadcrumb">', '</p>');
    }
    ?>
</div>
<section class="text-block-career">
    <div class="container">
        <?php
        if (have_rows('two_text_desc')):
            while (have_rows('two_text_desc')) : the_row();
                if (get_row_layout() == 'two_text_desc-info'):
                    ?>
                    <?php get_template_part('sections/text', 'block-career'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
