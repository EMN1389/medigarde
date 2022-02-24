<?php
/*
Plugin Name: Formulaire Etablissement Medigarde-rh
Plugin URI: 
Description: Formulaire de contact [ATTENTION, NE PAS DESACTIVER]
Version: 1.0
Author: N'guyen Emilie
Author URI: 
*/

// Inclure la feuille shortcodes wordpress afin de pouvoir en générer un
require_once( ABSPATH . '/wp-includes/shortcodes.php' );


//Récupère la feuille de style associée au formulaire
function style_form_medigarde() {
    wp_enqueue_style( 'style_form_VR' , '/wp-content/plugins/medigarde_form/form.css' );
}
add_action( 'wp_enqueue_scripts' , 'style_form_medigarde' );

//Crée le formulaire de contact
function html_form_code() {
        echo '<section class="container form">'; /*end echo*/
            echo'<form id="form" action="" method="post"' .$_SERVER['REQUEST_URI'] . '>'; /*end echo*/

            echo'<div class="form__btnswitch">
                <label class="switch">'; /*end echo*/
            echo '<input type="checkbox" class="switch_men"' . ( isset( $_POST["cf-sexe"] ) ? esc_attr( $_POST["cf-sexe"] ) : '' ) . '>'; /*end echo*/
            echo '<span class="slider round"></span>
                </label>
                <!--switch p avec JS-->
                <p class="monsieur">Monsieur</p>
            </div>
            
            <div class="form__champs">'; /*end echo*/
            echo '<input class="input__name" type="text" name="name"  id="name" placeholder="Nom" required' . ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) :'' ) . '>'; /*end echo*/
            echo '<input class="input__firstname" type="text" name="firstname" placeholder="Prénom" required' . ( isset( $_POST["cf-firstname"] ) ? esc_attr( $_POST["cf-firstname"] ) :'' ) . '>'; /*end echo*/
            echo '<input class="input__cd" pattern="[0-9]{5}" type="text" maxlength="5" placeholder="Code postal" name="postal" id="postal"' . ( isset( $_POST["cf-postal"] ) ? esc_attr( $_POST["cf-postal"] ) :'' ) . '>'; /*end echo*/
            echo '<input class="input__tel" pattern="0[1-9][0-9]{8}" type="text" maxlength="10" name="tel" id="tel" placeholder="N° Téléphone"' . ( isset( $_POST["cf-tel"] ) ? esc_attr( $_POST["cf-tel"] ) :'' ) .'>'; /*end echo*/
            echo '<input class="input__mail" type="email" name="email" id="email" placeholder="Email" required'. ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) :'' ) .'>'; /*end echo*/
            echo '<select class="input__pro" name="pro" id="pro"' . ( isset( $_POST["cf-select"] ) ? esc_attr( $_POST["cf-select"] ) :'' ) . '>'; /*end echo*/
                echo'<option value="option1">Infirmière</option>
                    <option value="option2">Aide Soignante</option>
                    <option value="option3">Educateur spécialisé</option>
                    <option value="option4">autre</option>
                </select>
            </div>
                <form class="form__container up" action="upload_file.php" method="post" enctype="multipart/form-data">'; /*end echo*/
                echo'<svg class="upload" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>';  /*end echo*/
                echo'<label>Téléverser son CV</label>';
                echo'<input class="up__input" type="file" name="myfile"'. (isset ($uploadedfile)) . '>'; /*end echo*/ 
                echo'</div>
                <div class="form__container go">
                    <a class="form__btn__send" type="submit" name="cf-submitted" value="envoyer" id="button-submit">se faire recontacter</a>
                </div>
            </form>
        </section>'; /*end echo*/
}


// if ( ! function_exists( 'wp_handle_upload' ) ) {
//     require_once( ABSPATH . 'wp-admin/includes/file.php' );
// }

// $uploadedfile = $_FILES['myfile'];
// $upload_overrides = array( 'test_form' => false );
// $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
// if ( $movefile ) {
// //file is uploaded successfully. do next steps here.
// }


//Vérification pour envoi
function deliver_mail() {

    //Si le bouton de submit est cliqué, envoie l'email
    if ( isset( $_POST['cf-submitted']) && !empty( $_POST["cf-name"]) && !empty($_POST["cf-firstname"]) && !empty($_POST["cf-mail"])) {

        //Dispose les valeurs
        
        $name    = sanitize_text_field( $_POST["cf-name"] );
        $firstname = sanitize_text_field( $_POST["cf-firstname"] );
        $postal = sanitize_text_field( $_POST["cf-postal"] );
        $tel = sanitize_text_field( $_POST["cf-tel"] );
        $email   = sanitize_email( $_POST["cf-email"] );
        // $select = esc_textarea( $_POST["cf-select"] );
        

        //Récupère l'adresse e-mail de l'administrateur du site/blog
        $to = get_option( 'admin_email' );
            
    
        $headers = "De: $name <$email>" . "\r\n";

        // Si l'email suit tout le processus d'envoi, on obtient un message de succès.
        if (mail($to, $name, $email, $headers) ) { ///(mail($to, $subject, $message, $headers) en local/ou en dehors du contexte wordpress)
            echo '<script>
            window.onload = function () {
                let toast = document.querySelector("#snackbar").style.display = "block";
            }
                location.href = "http://localhost/medigarde/#form";
                function removeToast() {
                    let toast = document.querySelector("#snackbar").style.display = "none";
                   }
                   setTimeout(removeToast, 2000);                                                         
            </script>';
        } 

         
    } else {
        '<script>
        window.onload = function () {
            let toast = document.querySelector("#snackbar").style.display = "block";
            let pToast = document.querySelector("#snackbar p");
        }
            location.href = "http://localhost/medigarde/#form";
            toast.style.backgroundColor = "red";
            pToast.innerText = "Une erreur est survenue";
            function removeToast() {
                let toast = document.querySelector("#snackbar").style.display = "none";
               }
               setTimeout(removeToast, 2000);                                                         
        </script>';
    }
}

    //Crée le shortcode [medigarde_contact_formPro]
    function cf_shortcode() {
        ob_start(); //Démarre la mémoire tampon
        deliver_mail();
        html_form_code();
       
        return ob_get_clean();//Efface la mémoire tampon
    }
    add_shortcode( 'medigarde_contact_formPro', 'cf_shortcode' );

?>