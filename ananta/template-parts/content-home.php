<section class="home-slider">
    <?php
    if (have_rows('shome-slider')):
        while (have_rows('shome-slider')) : the_row();?>
                <div class="container">
                    <?php get_template_part('sections/home', 'slider'); ?>
                </div>
            <?php
        endwhile;
    endif;
    ?>
</section>
<section class="home-grid">
    <div class="container">
        <h2 class="home-grid__title">
            <?php the_field('home_title'); ?>
        </h2>
        <div class="home-grid__items">
            <?php if (have_rows('grid_items')):
            while (have_rows('grid_items')) :
            the_row();
            if (get_row_layout() == 'item_grid'):
            ?>
            <?php get_template_part('sections/home', 'grid'); ?>
        </div>
        <?php endif;
        endwhile;
        endif;
        ?>
    </div>
    </div>
</section>
<section class="about-home">
    <div class="container">
        <?php
        if (have_rows('about-home')):
            while (have_rows('about-home')) : the_row();
                if (get_row_layout() == 'about-info'):
                    ?>
                    <?php get_template_part('sections/home', 'about'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
<section class="production-home">
    <div class="container">
        <?php
        if (have_rows('production-home')):
            while (have_rows('production-home')) : the_row();
                if (get_row_layout() == 'production-info'):
                    ?>
                    <?php get_template_part('sections/home', 'productions'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
<section class="cooperation-home">
    <div class="container">
        <?php
        if (have_rows('cooperation-home')):
            while (have_rows('cooperation-home')) : the_row();
                if (get_row_layout() == 'cooperation-info'):
                    ?>
                    <?php get_template_part('sections/home', 'cooperation'); ?>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</section>
