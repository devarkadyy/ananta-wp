<?php
/*
Template Name: Pharmacovigilance template
*/
?>

<?php get_header()?>

<?php


while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'pharmacovigilance' );


endwhile;
?>
<?php get_footer()?>
