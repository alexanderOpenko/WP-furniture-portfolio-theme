<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body>
    <?php
    wp_body_open();
    ?>

    <header data-toggle>
        <?php
        function header_menu()
        {
            $menu = wp_nav_menu(
                array('theme_menu' => 'header Menu')
            );

            print "<nav class='menu'>$menu</nav>";
        }
        ?>

        <div class='desktop_header'>
            <h3 class="logo">
                LITVINENKO
            </h3>

            <div class="desktop_header_nav-menu large_visible_low_hidden">
                <?php header_menu() ?>
            </div>

            <div class='toggle_menu large_hidden_low_visible' data-toggle-target data-type='accordion'>
            <div class='burger_menu'>
                <?php
                echo icons('burger');
                ?>
            </div>

            <div class='close_icon hidden'>
                <?php
                echo icons('close');
                ?>
            </div>
            </div>
        </div>

        <div class='mobile_menu' data-toggle-item>
            <div class="header_nav-menu">
                <?php header_menu() ?>
            </div>
        </div>
    </header>