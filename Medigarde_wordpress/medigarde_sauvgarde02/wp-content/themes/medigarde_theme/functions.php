<?php 
/*les fonctions*/ 

/*Fonction Chargement de la feuille de style */
function medigarde_enqueue_assets(){

    /*css principal - mobile first*/ 
    wp_enqueue_style( 'medigarde_main-css' , get_template_directory_uri() );

    wp_enqueue_style('style', get_template_directory_uri(). '/style.css');
    wp_enqueue_style('style_desktop', get_template_directory_uri(). '/style_desktop.css');
}

/*Fonction chargement de la feuille de script */

function addjs(){
    wp_enqueue_style('medigarde_main-js', get_template_directory_uri() );
    wp_enqueue_script('script_medigarde', get_template_directory_uri().'/assets/js/script.js');
}

/* Fonction afficher le tag du titre*/ 
function theme_medigarde (){
    add_theme_support('title-tag');
}

/* Fonction chargement du menu*/
function wpb_custom_principal_menu() {
    register_nav_menu('my-menu',__( 'principal medigarde' ));
}

/*les actions*/ 
/*chargement des feuilles de style*/ 
add_action ('wp_enqueue_scripts', 'medigarde_enqueue_assets');
/*chargement de la feuille de script*/ 
add_action ('wp_enqueue_scripts', 'addjs');
/*afficher le tag du titre*/ 
add_action('after_setup_theme', 'theme_medigarde');
/*chargement du menu*/ 
add_action( 'init', 'wpb_custom_principal_menu' );

