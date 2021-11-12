<?php
/*
Template Name: Product category
Template Post Type:  object, objectcat
*/
?>
<?php get_header()?>

<?php
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/product', 'category');

endwhile;
?>

<?php get_footer()?>


