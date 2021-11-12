<?php
/*
Template Name: Career template
*/
?>

<?php get_header()?>

<?php


while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/content', 'career' );

endwhile;
?>
<?php get_footer()?>
