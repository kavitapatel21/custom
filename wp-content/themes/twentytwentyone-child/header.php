<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Lava Landing Page HTML Template</title>
    <!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/custompost.css ?>">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            Lava
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- *** Menu Start *** -->
                        <ul class="nav">
                            <?php
                            $menu = '2';
                            $args = array(
                                'order'                  => 'ASC',
                                'orderby'                => 'menu_order',
                                'post_type'              => 'nav_menu_item',
                                'post_status'            => 'publish',
                                'output'                 => ARRAY_A,
                                'output_key'             => 'menu_order',
                                'nopaging'               => true,
                                'update_post_term_cache' => false
                            );
                            $items = wp_get_nav_menu_items($menu, $args);
                            foreach ($items as $item) { ?>
                                <?php
                                $has_child = false;
                                foreach ($items as $check) {
                                    if ($check->menu_item_parent == $item->ID) {
                                        $has_child = true;
                                    }
                                } ?>
                                <?php if($item->menu_item_parent == 0) { ?>
                                    <li class="<?php echo ($has_child == true) ? 'submenu' : 'scroll-to-section'; ?> ">
                                        <a href="<?php echo $item->url; ?>" class="menu-item"><?php echo $item->title; ?></a>
                                        <?php if ($has_child == true) { ?>
                                            <ul>
                                                <?php foreach ($items as $citem) {
                                                    if ($citem->menu_item_parent == $item->ID) { ?>

                                                        <li><a href="<?php echo $citem->url; ?>" class="menu-item"><?php echo $citem->title; ?></a></li>
                                                <?php }
                                                } ?>
                                            </ul>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- *** Menu End *** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">