<?php
/*
Template Name: Medical representative
*/
?>

<?php get_header()?>

<?php

while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'medical-representative' );

endwhile;
?>
<?php get_footer()?>
