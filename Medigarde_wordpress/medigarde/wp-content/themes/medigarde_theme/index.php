<?php get_header(); ?>
<?php $intro = get_field('intro');?>

 <!--SECTION TARGET-->
 <section class="container target">
            <p><p>
            <div class="target__cards"> <!--btn pro-->
                <div class="target__cards__pro">
                    <a href="#"><img class="target__cards__img" src="<?php bloginfo('template_directory');?>/assets/img/professionnels.jpg" alt="illustration des professionnels du médical, médico-social et paramédical"></a>
                    <div class="target__cards__filter"></div>
                    <a class="cards__a cat1" href="#">Professionnel de la santé</a>
                </div>
                <div class="target__cards__spe"> <!--btn pro spé-->
                    <a href="#"><img class="target__cards__img" src="<?php bloginfo('template_directory');?>/assets/img/specialisé.jpg" alt="illustration des professionnels spécialiste"></a>
                    <div class="target__cards__filter"></div>
                    <a class="cards__a cat2" href="#">Professionnel specialiste</a>
                </div>
                <div class="target__cards__ets"> <!--btn etablissement-->
                    <a href="#"><img class="target__cards__img" src="<?php bloginfo('template_directory');?>/assets/img/etablissements.jpg" alt="illustration des établisements du médical, médico-social et du paramédical"></a>
                    <div class="target__cards__filter"></div>
                    <a class="cards__a cat3" href="#">Etablissement medical paramedical medico social</a>
                </div>
            </div>
            <img class="logo_desk Ltarget" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="logo medigarde">
        </section> <!--end section target-->
        
        <!--SECTION SERVICES-->
        <section class="container services">
            <h1>Nos services</h1>
            <!--first service-->
            <div class="services__card">
                <div class="services__card__img">
                    <img class="card__img__placement" src="<?php bloginfo('template_directory');?>/assets/img/entretien.jpg" alt="photo représentant un placement professionnel">
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
                    <img class="card__img__vacation" src="<?php bloginfo('template_directory');?>/assets/img/vacation.jpg" alt="photo représentant un placement professionnel">
                </div>
                <div class="services__card__description">
                    <div class="card__description__vacation">
                        <h2>Vacation</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor rem saepe, asperiores suscipit architecto numquam repellendus minima minus. Nisi iure possimus sapiente expedita nulla inventore repellat autem vel, vero blanditiis.</p>
                    </div>
                </div>
            </div><!--end services__card-->

            <!--CTA offres-->
            <div class="container__cta">
                <a class="cta_offers" href="#">Voir toutes les offres</a> 
            </div>
            <img class="logo_desk Lservice" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="Logo Medigarde">
            <img class="services__schema" src="<?php bloginfo('template_directory');?>/assets/img/schema.png" alt="schema du fonctionnement des vacations chez Médigarde">
        </section> <!--end section services-->

        <!--SECTION PRESENTATION-->
        <section class="presentation">
            <h1 class="presentation__title">Présentation de Médigarde</h1>
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
                <img class="presentation__description__img" src="<?php bloginfo('template_directory');?>/assets/img/etablissements.jpg" alt="photo du siège de Médigarde">
                <p class="presentation__description__des">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati omnis officiis perspiciatis autem quidem eveniet minus sapiente molestias assumenda, maxime neque, earum quisquam, a quas vero! Laborum temporibus quia sed!</p>
            </div><!--end presentations__description-->
            <img class="logo_desk Ldescription" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="Logo Medigarde">
        </section> <!--end section presentation-->

        <!--SECTION VALEURS-->
        <section class="valeurs">
            <h1 class="valeurs__title">Nos valeurs</h1>
            <div class="valeurs__container">
                <div class="valeurs__valeur">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/icones/local.png" alt="icone représentation la valeur XX">
                    <h4>Valeur 1</h4>
                    <p>développement sur la valeur</p>
                </div> <!--end valeurs__valeur-->
                <div class="valeurs__valeur">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/icones/puzzle.png" alt="icone représentation la valeur XX">
                    <h4>Valeur 2</h4>
                    <p>développement sur la valeur</p>
                </div> <!--end valeurs__valeur-->
                <div class="valeurs__valeur">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/icones/check.png" alt="icone représentation la valeur XX">
                    <h4>Valeur 3</h4>
                    <p>développement sur la valeur</p>
                </div> <!--end valeurs__valeur-->
            </div>
        </section><!--end section valeurs-->

        <!--SECTION TEAM-->
        <section class="container team">
            <h1 class="team__title">Notre équipe </h1>
            <div class="team__container">
                <div class="team__container">
                    <img class="team__img" src="<?php bloginfo('template_directory');?>/assets/img/equipe.jpg" alt="photo de l'équipe de Médigarde">
                    <p class="team__p">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, dicta repellendus voluptas incidunt nisi praesentium voluptatum! Nam quisquam voluptate distinctio accusantium! Harum nemo perspiciatis ut labore? Tempora nostrum dolorum voluptatem!
                    </p>
                </div>
            </div>
            <img class="logo_desk Lteam" src="<?php bloginfo('template_directory');?>/assets/img/contours.svg" alt="logo medigarde">                       
        </section> <!--end section Team-->

        <!--SECTION CANDIDATER-->
        <section class="candidater">
            <h1 class="candidater__title">Comment candidater chez nous?</h1>           
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
            <form>

            <div class="form__btnswitch">
                <img class="switch_men" src="<?php bloginfo('template_directory');?>/assets/img/switchM.svg" alt="bouton switch monsieur ou madame"> <!--switch avec JS-->
                <p>Monsieur</p> <!--switch p avec JS-->
            </div>
            
                <label>Nom</label>
                <input class="input__name">
                <label>Prenom</label>
                <input class="input__firstname">
                <label>Code postal</label>
                <input class="input__cd">
                <label>Téléphone</label>
                <input class="input__tel">
                <label>E-mail</label>
                <input class="input__email">
                <label>Profession</label>
                <input class="input__pro">

                <div class="form__container up">
                    <a class= "form__btn__upload" href="#">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/upload.png" alt="icone pour téléverser un fichier">Joindre un CV 
                    </a>
                    
                </div>
                <div class="form__container go">
                    <a class="form__btn__send" href="#">candidater</a>
                </div>
                
            </form>
        </section><!--end section form-->

        <!--SECTION APPLI-->
        <section class="appli">
            <h2>Télécharger notre application mobile</h2>
            <div class="appli__container">
                <div class="appli__mockup">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/mockup.png" alt="mockup de l'application Medigarde">
                </div>
                <div class="appli__description">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. !</p>
                    <ul>
                        <li>Critères</li>
                        <li>Avantages</li>
                        <li>Ce qu'on peut faire avec</li>
                    </ul>
                    <p>Disponible sur Android et Apple Store</p>
                        <div class="appli__store">
                            <img src="<?php bloginfo('template_directory');?>/assets/img/icones/apple.png" alt="icone apple store">
                            <img src="<?php bloginfo('template_directory');?>/assets/img/icones/playstore.png" alt="icone playstore">
                        </div>
                </div>
                
            </div>
        </section> <!--end section appli-->

        <!--SECTION AVIS-->
        <section class="avis">
            <div class="avis__filter"></div>
            <!--1er avis-->
                <div class="avis__first">
                    <div class="avis__photo1"></div>
                    <div class="avis__container">
                        <h5>Avis de Mme. nom</h5>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ea numquam at rerum, laboriosam ipsum."</p>
                    </div>
                    
                </div>
            <!--2eme avis-->
                <div class="avis__first second">
                    <div class="avis__photo2"></div>
                    <div class="avis__container">
                        <h5>Avis de Mme. nom</h5>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ea numquam at rerum, laboriosam ipsum."</p>
                    </div>
                </div>
        </section> <!--end section Avis -->
        
        <!--SECTION COLLAB-->
        <section class="collab">
        <h1 class="collab__title">Partenaires</h1>
            <ul class="collab__ul">
                <li><img class="collab__logo" src="<?php bloginfo('template_directory');?>/assets/img/polemploi.png" alt=""></li>
                <li><img class="collab__logo" src="<?php bloginfo('template_directory');?>/assets/img/bpi.png" alt=""></li>
                <li><img class="collab__logo" src="<?php bloginfo('template_directory');?>/assets/img/bge.jpg" alt=""></li>
                <li><img class="collab__logo" src="<?php bloginfo('template_directory');?>/assets/img/regionbgfc.jpg" alt=""></li>
                <li><img class="collab__logo" src="<?php bloginfo('template_directory');?>/assets/img/elsan.jpg" alt=""></li>
            </ul> 
        </section><!--end section collab-->


<?php get_footer() ?>