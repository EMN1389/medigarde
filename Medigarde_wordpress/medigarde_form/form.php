<?php
/*
Plugin Name: Formulaire Medigarde-rh
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
            echo'<form id="form" action="'.$_SERVER['REQUEST_URI'] .'" method="post" enctype="multipart/form-data">'; /*end echo*/
            echo'<div class="form__btnswitch">
                <label class="switch">'; /*end echo*/
            echo '<input type="checkbox" name="sexe" class="switch_men" value="' . ( isset( $_POST["cf-sexe"] ) ? esc_attr( $_POST["cf-sexe"] ) : '' ) . '">'; /*end echo*/
            echo '<span class="slider round"></span>
                </label>
                <!--switch p avec JS-->
                <p class="monsieur">Monsieur</p>
            </div>
            
            <div class="form__champs">'; /*end echo*/
            echo '<input class="input__name" type="text" name="name"  id="name" placeholder="Nom" required value="' . ( isset( $_POST["name"] ) ? esc_attr( $_POST["name"] ) :'' ) . '" >'; /*end echo*/
            echo '<input class="input__firstname" type="text" name="firstname" placeholder="Prénom" required value="' . ( isset( $_POST["firstname"] ) ? esc_attr( $_POST["firstname"] ) :'' ) . '">'; /*end echo*/
            echo '<input class="input__cd" pattern="[0-9]{5}" type="text" maxlength="5" placeholder="Code postal" name="postal" id="postal" value="'. ( isset( $_POST["postal"] ) ? esc_attr( $_POST["postal"] ) :'' ) . '" >'; /*end echo*/
            echo '<input class="input__tel" pattern="0[1-9][0-9]{8}" type="text" maxlength="10" name="tel" id="tel" placeholder="N° Téléphone" value="' . ( isset( $_POST["tel"] ) ? esc_attr( $_POST["tel"] ) :'' ) .'">'; /*end echo*/
            echo '<input class="input__mail" type="email" name="email" id="email" placeholder="Email" required value="'. ( isset( $_POST["email"] ) ? esc_attr( $_POST["email"] ) :'' ) .'" >'; /*end echo*/
            echo '<select class="input__pro" name="pro" id="pro" value="' . ( isset( $_POST["pro"] ) ? esc_attr( $_POST["pro"] ) :'' ) . '">'; /*end echo*/
                echo'<option value="option1">Infirmière</option>
                    <option value="option2">Aide Soignante</option>
                    <option value="option3">Educateur spécialisé</option>
                    <option value="option4">autre</option>
                </select>
            </div>'; /*end echo*/
                echo'<svg class="upload" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>';  /*end echo*/
                echo'<label>Téléverser son CV</label>';
                echo'<input class="up__input" type="file" name="myfile">'; /*end echo*/ 
                echo'</div>
                <div class="form__container go">
                    <input class="form__btn__send" type="submit" name="submitted" value="candidater" id="button-submit">
                </div>
            </form>
        </section>'; /*end echo*/
        echo '<div id="snackbar">';
        echo '<p>Votre candidature a bien été envoyé, nous vous recontacterons dès que possible.</p>';
        echo '</div>';
}


//Vérification pour envoi
function deliver_mail() {

    //Si le bouton de submit est cliqué, envoie l'email
    if ( isset( $_POST['submitted']) && !empty( $_POST["name"]) && !empty($_POST["firstname"]) && !empty($_POST["mail"])) {

        //Dispose les valeurs
        
        $sexe = wp_check_invalid_utf8($_POST["sexe"]);
        $name = sanitize_text_field( $_POST["name"] );
        $firstname = sanitize_text_field( $_POST["firstname"] );
        $postal = sanitize_text_field( $_POST["postal"] );
        $tel = sanitize_text_field( $_POST["tel"] );
        $email = sanitize_email( $_POST["email"] );
        $pro = sanitize_text_field( $_POST["pro"] );
        $file = wp_handle_upload($_POST["myfile"]);
        

        //Récupère l'adresse e-mail de l'administrateur du site/blog
        $to = get_option( 'admin_email' );
            
    
        $headers = "De: $name <$email>" . "\r\n";

        // Si l'email suit tout le processus d'envoi, on obtient un message de succès.
        if (mail($to, "candidature", "hunvgihj", $headers) ) { ///(mail($to, $subject, $message, $headers) en local/ou en dehors du contexte wordpress)
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

    //Crée le shortcode [medigarde_contact_form]
    function cf_shortcode() {
        ob_start(); //Démarrer la mémoire tampon
        deliver_mail();
        html_form_code();
       
        return ob_get_clean();//Efface la mémoire tampon
    }
    add_shortcode('medigarde_contact_form', 'cf_shortcode');

?>