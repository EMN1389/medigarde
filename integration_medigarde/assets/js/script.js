/*feuille de JS Medigarde*/ 


/******
 * Menu Burger 
 **/
/*les écouteurs d'évènement pour ouvrir et fermer le menu burger mobile*/ 
let burger = document.querySelector('.icon__bars'); 
burger.addEventListener('click', openMenu);
let close = document.querySelector('.nav__menu__close'); 
close.addEventListener('click', closeMenu);
let menu = document.querySelector('.nav__menu'); 

/*Fonction pour ouvrir le menu latéral en version mobile*/
function openMenu(){
    let menu = document.querySelector('.nav__menu'); 
    let close = document.querySelector('.nav__menu__close'); 
        menu.style.display="flex"; 
        close.style.display="block"; 
}
/*Fonction pour fermer le menu latéral en version mobile*/ 
function closeMenu(){
    let menu = document.querySelector('.nav__menu'); 
    let close = document.querySelector('.nav__menu__close'); 
        menu.style.display='none'; 
        close.style.display='none'; 
}

/******
 * Schéma Candidater 
 **/

/*ecouteur d'évènement sur le mot Etape dans le schema candidater */ 
document.querySelectorAll('.circle').forEach(option =>{
    option.addEventListener('click', changeEtape);
})

/*Fonction pour changer Etape dans le schema Candidater*/
function changeEtape(){
    let num = this.dataset.set; 
    // console.log(num);

    let etape = document.querySelector('.candidater__etape'); 
    etape.textContent ='Etape ' + num;

    let descriptions = document.querySelectorAll('.candidater__descr'); 
    descriptions.forEach(description => {
        description.classList.remove('open'); 
        if (description.id =='descr'+ num){
            description.classList.toggle('open');
        }
    });
}



