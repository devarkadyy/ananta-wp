<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ananta
 */

?>
<?php $params = array(
    'posts_per_page' => 5
);
$posts = get_posts($params);
$post_id = get_the_ID();
$post_tags = get_the_tags($post_id);
?>
<div class="articles">
    <article class="article">
        <a href="<?php the_permalink(); ?>">
            <div class="article__item">
                <?php the_post_thumbnail(); ?>
            </div>
        </a>
        <div class="article__item">
            <div class="article__item--desc">
                <div class="article__item--inner">
                      <span class="article__item--date">
                      <?php the_date('Y.m.d') ?>
                  </span>
                    <span class="article__item--tag">
                     <?php foreach ($post_tags as $post_tag) : ?>
                         <a href="<?php get_term_link($post_tag->term_id) ?>" class="article__item--link">
                             #<?php echo $post_tag->name ?>
                         </a>
                     <?php endforeach; ?>
                  </span>
                </div>
                <h3 class="article__item--title">
                    <?php the_title(); ?>
                </h3>
                <p class="article__item--text">
                    <?php the_excerpt(); ?>
                </p>
                <a href="<?php echo the_permalink(); ?>" class="article__item--link"> Читати далі </a>
            </div>
        </div>
    </article>

</div>


