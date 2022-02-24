<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medigarde-rh</title>

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 

<?php wp_head() ?>
</head>
<body>
    <nav>
        <div class="icon__bars">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <a class="nav___logo__container" href="#">
            <img class="logo"src="<?php bloginfo('template_directory');?>/assets/img/logo.png" alt="logo_Médigarde-rh">
        </a>
        <ul class="nav__menu open">
            <?php
                wp_nav_menu( array(
                'theme_location' => 'my-menu',
                'container_class' => 'medigardeLinks' ) );
            ?>
            <div class="nav__menu__close">
                <img src="<?php bloginfo('template_directory');?>/assets/img/x.png" alt="x for close">
            </div>
        </ul>            
    </nav>

    <main>
        <header> <!--Diaporama actualité-->
            <img class="header__img" src="<?php bloginfo('template_directory');?>/assets/img/ordinateur.jpg" alt="nouvelle plateforme">
            <div class="header__bande">
                <h1>Nouveauté</h1>
                <h2>Votre nouvelle plateforme en ligne</h2>
            </div>
            <h3 class="slogan">"Notre vocation est de vous aider à accomplir la votre."" </h3>
        </header>