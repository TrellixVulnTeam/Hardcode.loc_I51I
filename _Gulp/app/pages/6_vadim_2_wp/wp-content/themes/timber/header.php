<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'description' ); ?></title>
    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->

    <?php wp_head(); ?>

</head>

<body>
    <header class="header" style="background-image: url(<?php the_field('top_bg')?>);">
        <div class="header__inner">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo.png" alt="logo">
            <h2 class="header__name"><?php the_field('header__name')?></h2>
            <a href="tel:<?php the_field('phone')?>" class="phone"><?php the_field('phone')?></a>
            <h1 class="header__title"><?php the_field('header__title')?></h1>
            <div class="header__img"><img src="<?php the_field('header__img')?>" alt="present"></div>
        </div>
    </header>