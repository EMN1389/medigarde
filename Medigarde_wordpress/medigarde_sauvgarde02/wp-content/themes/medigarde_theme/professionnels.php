<?php
/*
Template Name: Medigarde-rh page des Professionnels
Template Post Type: post, page
*/
?>

<?php get_header(); ?>

<main>
        <header> <!--Diaporama actualité-->
            <img class="header__img" src="<?php bloginfo('template_directory');?>/assets/img/infirmiere.png" alt="actualité">
            <div class="header__bande">
                <h1>Nouveauté</h1>
                <h2>Votre nouvelle plateforme en ligne</h2>
            </div>
            <h3 class="slogan">"Notre vocation est de vous aider à accomplir la votre."" </h3>
            <p>Une phrase d'accroche comme "vous êtesun professionne de la santé, ou un établissement de santé, médico-social, vous êtes au bon endroit." ...</p>
        </header>

        <!--section listePro-->
        <section class="container listePro">
            <h2>Liste des pofessionnels recrutés</h2>
            <div class="listePro__container">
                <div class="listePro__section">
                    <h3>Section</h3>
                    <ul>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                    </ul>
                </div> <!--end section1-->
                <div class="listePro__section">
                    <h3>Section</h3>
                    <ul>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                    </ul>
                </div><!--end section2-->
                <div class="listePro__section">
                    <h3>Section</h3>
                    <ul>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                        <li>Profession</li>
                    </ul>
                </div><!--end section3-->              
            </div>
            <img class="logo_desk Lliste" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="logo medigarde">
        </section> <!--end section ListePro-->

        <!--SECTION SERVICES-->
        <section class="container services">
            <h2>Nos services</h2>
            <!--first service-->
            <div class="services__card">
                <div class="services__card__img">
                    <img class="card__img__placement" src="<?php bloginfo('template_directory');?>/assets/img/entretien.jpg" alt="Placement professionnel">
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
            <img class="logo_desk Lservice" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="Logo Medigarde">
            <img class="services__schema" src="<?php bloginfo('template_directory');?>/assets/img/schema.png" alt="fonctionnement vacations">
        </section> <!--end section services-->

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

        <!--SECTION CANDIDATER-->
        <section class="candidater">
            <h2 class="candidater__title">Comment candidater chez nous?</h2>           
            <div>
                <p class="candidater__descr open" id="descr1">1. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam laboriosam distinctio excepturi placeat, hic, veniam recusandae exercitationem </p>
                <p class="candidater__descr" id="descr2">2. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam laboriosam distinctio excepturi placeat, hic, veniam recusandae exercitationem </p>
                <p class="candidater__descr" id="descr3">3. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam laboriosam distinctio excepturi placeat, hic, veniam recusandae exercitationem </p>
                <p class="candidater__descr" id="descr4" >4. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam laboriosam distinctio excepturi placeat, hic, veniam recusandae exercitationem </p>
            </div>
            <div class="candidater__circle">
                <img data-set='1' class="candidater__circle__top circle" src="<?php bloginfo('template_directory');?>/assets/img/icones/dominos.png" alt="icone dominos">
                <img data-set='2' class="candidater__circle__right circle" src="<?php bloginfo('template_directory');?>/assets/img/icones/fichier.png" alt="icone fichier">
                <img data-set='3' class="candidater__circle__bottom circle"src="<?php bloginfo('template_directory');?>/assets/img/icones/telephone.png" alt="icone telephone">
                <img data-set='4' class="candidater__circle__left circle"src="<?php bloginfo('template_directory');?>/assets/img/icones/meeting.png" alt="icone entretien">
            </div>
            <div>
                <p class="candidater__etape etape1 active">Etape 1</p>
            </div>
        </section> <!--end section candidater-->
 
        <!--section Formulaire-->
        <section class="container form">
            <h2 class="form__title">Formulaire de candidature</h2>
            <!--Affiche le formulaire du plugin grâce au shortcode créé-->
            <?php echo do_shortcode("[medigarde_contact_form]"); ?>
            
        </section><!--end section form-->


<?php get_footer() ?>
