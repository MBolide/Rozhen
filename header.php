<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Martina Bilyanska">
    <title>Solar and Space Weather Research</title>
    <?php wp_head(); ?>

</head>

<body>


    <!-- Header Start -->

    <header class="navigation">
        <nav class="navbar navbar-expand-lg py-2 px-5" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="<?php bloginfo('template_directory');?>/images/logoTransp.png" alt="Logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-bar',
                        )
                )
                ?>
                </div>
            </div>
        </nav>
    </header>

    <!-- Header Close -->