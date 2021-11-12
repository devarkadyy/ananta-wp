<?php
/*
Template Name: Single product
Template Post Type:  object
*/
?>

<?php get_header()?>

<?php


while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content-single', 'product' );

endwhile;
?>
<?php get_footer()?>
