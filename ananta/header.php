<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ananta
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo( 'stylesheet_directory' ); ?>/assets/css/fonts.css" />

    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="burger__wrap">
            <div class="burger"></div>
        </div>
        <div class="header__logo">
            <?php the_custom_logo(); ?>
        </div>
        <div class="header-inner__wrap">

            <?php bem_menu('menu-1', 'header-inner'); ?>
            <ul class="header-inner__lang">
                <li class="header-inner__lang--item">
                    Ua
                </li>
                <li class="header-inner__lang--item">
                    Ru
                </li>
                <li class="header-inner__lang--item">
                    En
                </li>
            </ul>
            <div class="header-inner__search">
                <img src="http://ananta/wp-content/uploads/2021/10/search.png" alt="search" class="header-inner__search--img">
            </div>
        </div>

    </header>



