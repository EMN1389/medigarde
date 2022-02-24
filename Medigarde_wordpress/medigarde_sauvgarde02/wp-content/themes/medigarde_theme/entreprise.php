<?php
/*
Template Name: Medigarde-rh page des Etablissements
Template Post Type: post, page
*/
?>

<?php get_header(); ?>
 
    <header> <!--Diaporama actualité-->
        <img class="header__img" src="<?php bloginfo('template_directory');?>/assets/img/etablissementssante.jpg" alt="actualité_photo">
        <div class="header__bande">
            <h1>Nouveauté</h1>
            <h2>Votre nouvelle plateforme en ligne</h2>
        </div>
        <p class="container">Une phrase d'accroche comme "vous êtesun professionne de la santé, ou un établissement de santé, médico-social, vous êtes au bon endroit." ...</p>       
    </header>

<main>
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
                    <h2>Placement CDD/CDI</h2>
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
                    <h2>Vacation</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor rem saepe, asperiores suscipit architecto numquam repellendus minima minus. Nisi iure possimus sapiente expedita nulla inventore repellat autem vel, vero blanditiis.</p>
                </div>
            </div>
        </div><!--end services__card-->
    </section> <!--end section services-->

    <!--SECTION PRESENTATION-->
    <section class="presentation">
        <h2 class="presentation__title">Présentation de Médigarde</h2>
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

        <div class="presentation__description">
            <img class="presentation__description__img" src="<?php bloginfo('template_directory');?>/assets/img/etablissements.jpg" alt="Siège de Médigarde">
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
            <!--Affiche le formulaire du plugin grâce au shortcode créé-->
            <?php echo do_shortcode("[medigarde_contact_formPro]"); ?>
    </section><!--end section form-->
    
<?php get_footer() ?>