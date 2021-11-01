<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ananta
 */

?>
    <footer class="footer">
        <div class="container">
            <div class="footer-inner__wrap">
                <?php bem_menu('Footer', 'footer-inner'); ?>
                <div class="footer-inner__desc">
                    <div class="footer-inner__desc--logo">
                        <img src="http://ananta/wp-content/uploads/2021/10/logo-footer.png" alt="" class="footer-inner__desc--img">
                    </div>
                    <div class="footer-inner__desc--copy">
                        © Ananta Medicare Ltd.  2007 — 2021
                        Всі права захищені. Матеріали, відмічені знаком ® публікуються на правах реклами
                    </div>
                    <ul class="footer-inner__desc--socials">
                        <li class="footer-inner__desc--item">
                            <a href="<?php echo get_theme_mod('facebook')?>" class="footer-inner__desc--link">
                                <img src="http://ananta/wp-content/uploads/2021/10/facebook.png" alt="" class="footer-inner__desc--social">
                            </a>
                        </li>
                        <li class="footer-inner__desc--item">
                            <a href="<?php echo get_theme_mod('facebook')?>" class="footer-inner__desc--link">
                                <img src="http://ananta/wp-content/uploads/2021/10/facebook.png" alt="" class="footer-inner__desc--social">
                            </a>
                        </li>
                        <li class="footer-inner__desc--item">
                            <a href="<?php echo get_theme_mod('facebook')?>" class="footer-inner__desc--link">
                                <img src="http://ananta/wp-content/uploads/2021/10/facebook.png" alt="" class="footer-inner__desc--social">
                            </a>
                        </li>
                        <li class="footer-inner__desc--item">
                            <a href="<?php echo get_theme_mod('facebook')?>" class="footer-inner__desc--link">
                                <img src="http://ananta/wp-content/uploads/2021/10/facebook.png" alt="" class="footer-inner__desc--social">
                            </a>
                        </li>
                        <li class="footer-inner__desc--item">
                            <a href="<?php echo get_theme_mod('facebook')?>" class="footer-inner__desc--link">
                                <img src="http://ananta/wp-content/uploads/2021/10/facebook.png" alt="" class="footer-inner__desc--social">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>

</body>
</html>
