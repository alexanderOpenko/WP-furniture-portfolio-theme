<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body>
    <?php
    wp_body_open();
    ?>

    <header>
        <h3 class="logo">
            LITVINENKO
        </h3>

        <nav class="header_nav-menu">
            <?php wp_nav_menu(
                array('theme_menu' => 'header Menu')
            ); ?>
        </nav>
    </header>