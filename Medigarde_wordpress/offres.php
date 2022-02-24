<?php
/*
Template Name: Medigarde-rh page des Offres
Template Post Type: post, page
*/
?>

<?php get_header(); ?>

<main>
    <section id="emploi"> 

    </section> 
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
            <!--Affiche le formulaire du plugin grâce au shortcode créé-->
            <?php echo do_shortcode("[medigarde_contact_form]"); ?>
        </section><!--end section form-->

    <!--SECTION APPLI-->
    <section class="appli">
        <h2>Télécharger l'application mobile</h2>
        <div class="appli__container">
            <img class="appli__img" src="<?php bloginfo('template_directory');?>/assets/img/article_appli.png" alt="application_Medigarde">  
        </div>
    </section> <!--end section appli-->

<?php get_footer() ?>