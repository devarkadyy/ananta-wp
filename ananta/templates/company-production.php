<?php
/*
Template Name: Production company
*/
?>

<?php get_header()?>

<?php


while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'production' );

    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

endwhile;
?>
<?php get_footer()?>
