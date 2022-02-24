<?php
/*
Template Name: Medigarde-rh page des Specialistes
Template Post Type: post, page
*/
?>

<?php get_header(); ?>

<main>
        <header> <!--Diaporama actualité-->
            <img class="header__img" src="<?php bloginfo('template_directory');?>/assets/img/medecin.jpg" alt="actualité">
            <div class="header__bande">
                <h1>Nouveauté</h1>
                <h2>Votre nouvelle plateforme en ligne</h2>
            </div>
            <h3 class="slogan">"Notre vocation est de vous aider à accomplir la votre." </h3>
            <p>Une phrase d'accroche comme "vous êtesun professionne de la santé, ou un établissement de santé, médico-social, vous êtes au bon endroit." ...<p>
        </header>

        <!--SECTION SERVICES-->
        <section class="container services">
            <h2>Nos services</h2>
            <!--first service-->
            <div class="services__card">
                <div class="services__card__img">
                    <img class="card__img__placement" src="<?php bloginfo('template_directory');?>/assets/img/entretien.jpg" alt="placement">
                </div>
                <div class="services__card__description">
                    <div class="card__description__placement">
                        <h3>Placement CDD/CDI</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor rem saepe, asperiores suscipit architecto numquam repellendus minima minus. Nisi iure possimus sapiente expedita nulla inventore repellat autem vel, vero blanditiis.</p>
                    </div>                
                </div>
            </div><!--end services__card-->

            <!--second service-->
            <div class="services__card">
                <div class="services__card__img">
                    <img class="card__img__vacation" src="<?php bloginfo('template_directory');?>/assets/img/vacation.jpg" alt="vacation">
                </div>
                <div class="services__card__description">
                    <div class="card__description__vacation">
                        <h3>Vacation</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor rem saepe, asperiores suscipit architecto numquam repellendus minima minus. Nisi iure possimus sapiente expedita nulla inventore repellat autem vel, vero blanditiis.</p>
                    </div>
                </div>
            </div><!--end services__card-->

            <!--CTA offres-->
            <div class="container__cta">
                <a class="cta_offers" href="#">Voir toutes les offres</a> 
            </div>
        </section> <!--end section services-->

        <!--section Mutualisation-->
        <section class="container mutualisation">
            <img class="logo_desk Lmut" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="Logo Medigarde">
            <h2 class="mutualisation__title">Mutualisation</h2>
            <div class="mutualisation__container">
                <img class="mutualisation__img" src="<?php bloginfo('template_directory');?>/assets/img/poignets.jpg" alt="mutualisation">
                <p class="mutualisation__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, consequuntur optio. Ut atque nobis aperiam quod impedit eos ipsam. Quisquam, alias. Ab sit iste quos atque suscipit quae nobis voluptates.</p>
            </div>
            
        </section><!--end section mutualisation-->
    

        <!--SECTION PRESENTATION-->
        <section class="presentation">
            <h2 class="presentation__title">Chiffres clés pour les entreprises</h2>
            <div class="presentation__counter">
                <div class="presentation__counter__element">
                    <p class="counter__number">25</p>
                    <h4>Offres disponibles</h4>
                </div>
                <div class="presentation__counter__element">
                    <p class="counter__number">100</p>
                    <h4>Etablissements partenaires</h4>
                </div>
                <div class="presentation__counter__element">
                    <p class="counter__number">35</p>
                    <h4>collaborateurs</h4>
                </div>
            </div> <!--end presentation__counter-->
        
            <div class="presentation__description">
                <img class="presentation__description__img" src="<?php bloginfo('template_directory');?>/assets/img/etablissements.jpg" alt="siège Médigarde">
                <p class="presentation__description__des">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati omnis officiis perspiciatis autem quidem eveniet minus sapiente molestias assumenda, maxime neque, earum quisquam, a quas vero! Laborum temporibus quia sed!</p>
            </div><!--end presentations__description-->
            <img class="logo_desk Ldescription" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="Logo Medigarde">
        </section> <!--end section presentation-->
    
         <!--SECTION VALEURS-->
         <section class="valeurs">
            <h2 class="valeurs__title">Nos valeurs</h2>
            <div class="valeurs__container">
                <div class="valeurs__valeur">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/icones/local.png" alt="icone valeur">
                    <h4>Valeur 1</h4>
                    <p>développement sur la valeur</p>
                </div> <!--end valeurs__valeur-->
                <div class="valeurs__valeur">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/icones/puzzle.png" alt="icone valeur">
                    <h4>Valeur 2</h4>
                    <p>développement sur la valeur</p>
                </div> <!--end valeurs__valeur-->
                <div class="valeurs__valeur">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/icones/check.png" alt="icone valeur">
                    <h4>Valeur 3</h4>
                    <p>développement sur la valeur</p>
                </div> <!--end valeurs__valeur-->
            </div>
        </section><!--end section valeurs-->

        <!--section Formulaire-->
        <section class="container form">
            <h2 class="form__title" >Se faire recontacter</h2>
            <!--Affiche le formulaire du plugin grâce au shortcode créé-->
            <?php echo do_shortcode("[medigarde_contact_form]"); ?>
        </section><!--end section form-->

<?php get_footer() ?>