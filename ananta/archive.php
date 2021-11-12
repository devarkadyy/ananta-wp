<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ananta
 */

get_header();
?>
	<main>
        <div class="container">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p class="breadcrumb">', '</p>');
            }
            ?>
            <h1 class="title-h1">
                <?php echo single_cat_title(); ?>
            </h1>
            <div class="articles">


		<?php if ( have_posts() ) : ?>

			<?php

			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'news' );

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
            </div>
	</main>

<?php

get_footer();
