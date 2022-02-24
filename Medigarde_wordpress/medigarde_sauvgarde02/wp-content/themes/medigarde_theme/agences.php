<?php
/*
Template Name: Medigarde-rh page des agences
Template Post Type: post, page 
*/
?>

<?php get_header(); ?>

<main>
        <header> <!--Diaporama actualité-->
            <img class="header__img" src="<?php bloginfo('template_directory');?>/assets/img/auxerre.jpg" alt="actualité">
            <div class="header__bande">
                <h1>Nos agences Medigarde</h1>                
            </div>
        </header><!--end header-->
        
        <!--section Auxerre-->
        <section class="auxerre">
            <div class="auxerre__img">
                <img src="<?php bloginfo('template_directory');?>/assets/img/etablissements.jpg" alt="agence Médigarde à Auxerre">
            </div>
            <div class="auxerre__contact">
                <h2>Agence d'Auxerre</h2>
                <p> 2 place jean jaures</p>
                <p>89000 Auxerre</p>
                <p>03.86.81.86.19</p>
            </div>
        </section><!--end section Agence d4Auxerre-->

        <!--Section Agence de Vannes-->
        <section class="vannes">
            <div class="vannes__img">
                <img src="<?php bloginfo('template_directory');?>/assets/img/etablissements.jpg" alt="agence Médigarde à Vannes">
            </div>
            <div class="vannes__contact">
                <h2>Agence de Vannes</h2>
                <p> 2 place jean jaures</p>
                <p>89000 Auxerre</p>
                <p>03.86.81.86.19</p>
            </div>
        </section><!--end section Agence de Vannes-->

        <!--SECTION PRESENTATION-->
        <section class="presentation">
            <h2 class="presentation__title">Présentation de Médigarde</h1>
            <div class="presentation__counter">
                <div class="presentation__counter__element">
                    <p class="counter__number">25</p>
                    <h3>Offres disponibles</h3>
                </div>
                <div class="presentation__counter__element">
                    <p class="counter__number">100</p>
                    <h3>Etablissements partenaires</h3>
                </div>
                <div class="presentation__counter__element">
                    <p class="counter__number">35</p>
                    <h3>collaborateurs</h3>
                </div>
            </div> <!--end presentation__counter-->
            <img class="logo_desk Lcounter" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="Logo Medigarde">
        </section><!--end section presentation-->

<?php get_footer() ?>