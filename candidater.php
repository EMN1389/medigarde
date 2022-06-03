<?php
/*
Template Name: Medigarde-rh page des Candidatures
Template Post Type: post, page
*/
?>

<?php get_header(); ?>
<?php $intro = get_field('intro'); ?>
<?php $service = get_field('service'); ?>
<?php $presentation = get_field('presentation'); ?>
<?php $equipe = get_field('equipe'); ?>

<main>
        <header> <!--Diaporama actualité-->
            <img class="header__img" src="<?php bloginfo('template_directory');?>/assets/img/ordinateur.jpg" alt="nouvelle plateforme">
            <div class="header__bande">
                <h1>Nouveauté</h1>
                <h2>Votre nouvelle plateforme en ligne</h2>
            </div>
            <h3 class="slogan">"Notre vocation est de vous aider à accomplir la votre." </h3>
        </header>

    
<?php get_footer() ?>