<div class="container">
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p class="breadcrumb">','</p>' );
    }
    ?>
</div>
<section class="company-profile">
        <?php
        if (have_rows('company-profile')):
            while (have_rows('company-profile')) : the_row();
                if (get_row_layout() == 'profile-info'):
                    ?>
                    <?php get_template_part('sections/company', 'profile'); ?>
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
<section class="text-block">
    <div class="container">
        <?php
        if (have_rows('profile_content')):
            while (have_rows('profile_content')) : the_row();
                if (get_row_layout() == 'profile_content-info'):
                    ?>
                    <?php get_template_part('sections/text', 'block'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
<section class="two-photo">
    <div class="container">
        <?php
        if (have_rows('profile_content')):
            while (have_rows('profile_content')) : the_row();
                if (get_row_layout() == 'two_photo'):
                    ?>
                    <?php get_template_part('sections/company', 'two-photo'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
<section class="medicines">
    <div class="container">
        <?php
        if (have_rows('profile_content')):
            while (have_rows('profile_content')) : the_row();
                if (get_row_layout() == 'medicines-info'):
                    ?>
                    <?php get_template_part('sections/company', 'medicines'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
<section class="text-block">
    <div class="container">
        <?php
        if (have_rows('profile_content')):
            while (have_rows('profile_content')) : the_row();
                if (get_row_layout() == 'text_block'):
                    ?>
                    <?php get_template_part('sections/text', 'block'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
<section class="two-photo">
    <div class="container">
        <?php
        if (have_rows('profile_content')):
            while (have_rows('profile_content')) : the_row();
                if (get_row_layout() == 'two_photo_2'):
                    ?>
                    <?php get_template_part('sections/company', 'two-photo'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
<section class="briefcase">
    <div class="container">
        <?php
        if (have_rows('profile_content')):
            while (have_rows('profile_content')) : the_row();
                if (get_row_layout() == 'briefcase-block'):
                    ?>
                    <?php get_template_part('sections/company', 'briefcase'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
<section class="text-block">
    <div class="container">
        <?php
        if (have_rows('profile_content')):
            while (have_rows('profile_content')) : the_row();
                if (get_row_layout() == 'two_text_info'):
                    ?>
                    <?php get_template_part('sections/text', 'block'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
<section class="team">
    <div class="container">
        <?php
        if (have_rows('profile_content')):
            while (have_rows('profile_content')) : the_row();
                if (get_row_layout() == 'team'):
                    ?>
                    <?php get_template_part('sections/company', 'team'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
