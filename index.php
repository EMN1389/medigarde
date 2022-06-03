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

 <!--SECTION TARGET-->
    <section class="target container">
        <!--btn pro-->
        <div class="target__cards"> 
            <div class="target__cards__pro">
                <img class="target__cards__img" src="<?php bloginfo('template_directory');?>/assets/img/professionnels.png" alt="professionnels">
                <a href="https://emilien.promo-91.codeur.online/medigarde/"><div class="target__cards__filter"></div></a>
                <a class="cards__a cat1" href="https://emilien.promo-91.codeur.online/medigarde/professionnels-de-la-sante/">Professionnel de la santé</a>
            </div>
            <!--btn pro spé-->
            <div class="target__cards__spe"> 
                <img class="target__cards__img" src="<?php bloginfo('template_directory');?>/assets/img/specialisé.jpg" alt="spécialiste">
                <a href="https://emilien.promo-91.codeur.online/medigarde/professions-specialises/"><div class="target__cards__filter"></div></a>
                <a class="cards__a cat2" href="https://emilien.promo-91.codeur.online/medigarde/professions-specialises/">Professionnel specialiste</a>
            </div>
            <!--btn etablissement-->
            <div class="target__cards__ets"> 
                <img class="target__cards__img" src="<?php bloginfo('template_directory');?>/assets/img/etablissements.jpg" alt="établisements">
                <a href="https://emilien.promo-91.codeur.online/medigarde/etablissements-de-sante/"><div class="target__cards__filter"></div></a>
                <a class="cards__a cat3" href="https://emilien.promo-91.codeur.online/medigarde/etablissements-de-sante/">Etablissement medical paramedical medico social</a>
            </div>
        </div>
        <img class="logo_desk Ltarget" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="logo mediGarde-RH">
    </section> <!--end section target-->
        
        <!--SECTION SERVICES-->
    <section class="container services" id="services">
        <h2>Nos services</h2>
        <!--first service-->
        <div class="services__card">
            <div class="services__card__img">
                <img class="card__img__placement" src="<?php bloginfo('template_directory');?>/assets/img/entretien.png" alt="placement pro">
            </div>
            <div class="services__card__description">
                <div class="card__description__placement">
                    <h3>Placement CDD/CDI</h3>
                    <p><?php echo $service['service__placement__texte'];?></p>
                </div>                
            </div>
        </div><!--end services__card-->

        <img class="logo_desk Lservice" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="Logo Medigarde">

        <!--second service-->
        <div class="services__card">
            <div class="services__card__img">
                <img class="card__img__vacation" src="<?php bloginfo('template_directory');?>/assets/img/vacation.png" alt="vacation">
            </div>
            <div class="services__card__description">
                <div class="card__description__vacation">
                    <h3>Vacation</h3>
                    <p><?php echo $service['service__vacation__texte']; ?></p>
                    <img class="services__schema" src="<?php bloginfo('template_directory');?>/assets/img/schema.png" alt="fonctionnement vacations">
                </div>
            </div>
        </div><!--end services__card-->

        <!--CTA offres-->
        <div class="container__cta">
            <a class="cta_offers" href="https://emilien.promo-91.codeur.online/medigarde/offres/">Voir toutes les offres</a> 
        </div>
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
                <h3>collaborateurs</h>
            </div>
        </div> <!--end presentation__counter-->

        <div class="presentation__description">
            <img class="presentation__description__img" src="<?php bloginfo('template_directory');?>/assets/img/etablissements.jpg" alt="siège Médigarde">
            <p class="presentation__description__des"><?php echo $presentation['presentation__texte']; ?></p>
        </div><!--end presentations__description-->
        <img class="logo_desk Ldescription" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="Logo Medigarde">
    </section> <!--end section presentation-->

    <!--SECTION VALEURS-->
    <section class="valeurs">
        <h2 class="valeurs__title">Nos valeurs</h2>
        <div class="valeurs__container">
            <div class="valeurs__valeur">
                <img src="<?php bloginfo('template_directory');?>/assets/img/icones/local.png" alt="valeur">
                <h4>Valeur 1</h4>
                <p>développement sur la valeur</p>
            </div> <!--end valeurs__valeur-->
            <div class="valeurs__valeur">
                <img src="<?php bloginfo('template_directory');?>/assets/img/icones/puzzle.png" alt="valeur">
                <h4>Valeur 2</h4>
                <p>développement sur la valeur</p>
            </div> <!--end valeurs__valeur-->
            <div class="valeurs__valeur">
                <img src="<?php bloginfo('template_directory');?>/assets/img/icones/check.png" alt="valeur">
                <h4>Valeur 3</h4>
                <p>développement sur la valeur</p>
            </div> <!--end valeurs__valeur-->
        </div>
    </section><!--end section valeurs-->

        <!--SECTION TEAM-->
    <section class="container team">
        <h2 class="team__title">Notre équipe </h2>
        <div class="team__container">
            <div class="team__container">
                <img class="team__img" src="<?php bloginfo('template_directory');?>/assets/img/equipe.png" alt="equipe Médigarde">
                <p class="team__p"><?php echo $equipe['equipe__texte']; ?></p>
            </div>
        </div>
        <img class="logo_desk Lteam" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="logo medigarde">                       
    </section> <!--end section Team-->

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
            <img data-set='3' class="candidater__circle__bottom circle" src="<?php bloginfo('template_directory');?>/assets/img/icones/telephone.png" alt="icone telephone">
            <img data-set='4' class="candidater__circle__left circle" src="<?php bloginfo('template_directory');?>/assets/img/icones/meeting.png" alt="icone entretien">
        </div>
        <div>
            <p class="candidater__etape etape1 active">Etape 1</p>
        </div>
    </section> <!--end section candidater-->

         <!--section Formulaire-->
         <!-- <section class="form container">
            <h2 class="form__title" >Formulaire de candidature</h2> -->
             <!-- [forminator_form id="124"] ? -->
             <!-- wp:forminator/forms {"module_id":"124"} -->
            <!-- <div class="forminator-guttenberg"></div> -->
            <!-- /wp:forminator/forms -->
        <!-- </section>end section form -->


    <!--SECTION APPLI-->
    <section class="appli">
        <h2>Télécharger l'application mobile</h2>
        <div class="appli__container">
            <img class="appli__img" src= "<?php bloginfo('template_directory');?>/assets/img/article_appli.png" alt="application_Medigarde">  
        </div>
    </section> <!--end section appli-->

    <!--SECTION AVIS-->
    <section class="avis">
        <div class="avis__filter">
            <!--flèche de gauche-->
            <div class="avis__arrow__left">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </div>

            <!--avis-->
            <div class="avis__first">
                <div class="avis__photo1" data-folder="<?php bloginfo('template_directory');?>"></div>
                    <div class="avis__container">
                        <h5>Avis de Mme. nom</h5>
                        <p class="avis__texte">"Avis 1 exemple"</p>
                    </div>
                    <!--flèche de droite-->
                    <div class="avis__arrow__right">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </div>
                <div>
            </div>
        </div>
    </section> <!--end section Avis -->
        
    <!--SECTION COLLAB-->
    <section class="collab">
        <h2 class="collab__title">Partenaires</h2>
            <ul class="collab__ul">
                <li><img class="collab__logo" src="<?php bloginfo('template_directory');?>/assets/img/polemploi.png" alt="poleemploi"></li>
                <li><img class="collab__logo" src="<?php bloginfo('template_directory');?>/assets/img/bpi.png" alt="bpi"></li>
                <li><img class="collab__logo" src="<?php bloginfo('template_directory');?>/assets/img/bge.jpg" alt="bge"></li>
                <li><img class="collab__logo" src="<?php bloginfo('template_directory');?>/assets/img/regionbgfc.jpg" alt="regionbgfc"></li>
                <li><img class="collab__logo" src="<?php bloginfo('template_directory');?>/assets/img/elsan.jpg" alt="elsan"></li>
            </ul> 
    </section><!--end section collab-->


<?php get_footer() ?>