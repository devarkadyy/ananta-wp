<div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p class="breadcrumb">', '</p>');
    }
    ?>
</div>
<section class="company-profile">
    <?php
    if (have_rows('company-profile')):
        while (have_rows('company-profile')) : the_row();
            if (get_row_layout() == 'profile-info'):
                ?>
                <?php get_template_part('sections/company', 'profile-custom'); ?>
            <?php endif;
        endwhile;
    endif;
    ?>
</section>
<section class="text-block">
    <div class="container">
        <?php
        if (have_rows('text-block')):
            while (have_rows('text-block')) : the_row();
                if (get_row_layout() == 'text-block-info'):
                    ?>
                    <?php get_template_part('sections/text', 'block'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
<section class="company-block">
    <?php
    if (have_rows('company-block')):
        while (have_rows('company-block')) : the_row();
            if (get_row_layout() == 'company-block-info'):
                ?>
                <?php get_template_part('sections/company', 'block'); ?>
            <?php endif;
        endwhile;
    endif;
    ?>
</section>

