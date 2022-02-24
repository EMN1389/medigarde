/*feuille de JS Medigarde*/ 
window.onload = function() {

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
    option.addEventListener('mouseover', changeEtape);
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

/****
* Bouton switch form h/f
**/

/*écouteur d'évenèmentbouton switch form H/F */ 
let btnswitch = document.querySelector('.switch_men');
let para = document.querySelector('.monsieur');
btnswitch.addEventListener('click', swicthwomen);

/*Fonction bouton switch */
function swicthwomen() {
    if (para.textContent != 'Madame') {
        para.textContent = 'Madame';
    }
        else {
            para.textContent = 'Monsieur';
        }
}

/****
 * * Counter Chiffres Section Presentation
 */

 number = document.querySelectorAll(".counter__number");
 countStart = 0;
 countEnd = 0;
 counter = 0;
 
 countEnd0 = number[0].textContent;
 countEnd1 = number[1].textContent;
 countEnd2 = number[2].textContent;
 interv = setInterval(count, 8);
 for (i = 0; i < number.length; i++) {
 if (Number(number[i].textContent) > countEnd) {
 countEnd = number[i].textContent;
 }
 }
 
 function count() {
 console.log(counter);
 if (counter <= countEnd0) {
 number[0].textContent = counter;
 }
 if (counter <= countEnd1) {
 number[1].textContent = counter;
 }
 if (counter <= countEnd2) {
 number[2].textContent = counter;
 }
 if (counter == countEnd) {
 clearInterval(interv);
 }
 counter++
 }

 /****
 * * Slider Avis
 */

  let photoAvis = document.querySelector('.avis__photo1');
  let folderPhoto= photoAvis.dataset.folder;
  let photos = ["avis1","avis2","avis3"];
  let avisText= document.querySelector('.avis__texte');
  let avis =["avis1 text Lorem exemple", "avis2 text Lorem exemple", "avis3 text Lorem exemple"];
  let pointeur = 0; 
  let timer;
  let avancer = document.querySelector('.avis__arrow__right'); 
  let reculer = document.querySelector('.avis__arrow__left');
 
     //les écouteurs d'évènements
     avancer.addEventListener('click', nextPhoto);
     reculer.addEventListener('click', backPhoto);
     photoAvis.addEventListener('mouseover', stopAvis); 
     photoAvis.addEventListener('mouseout', startAvis); 
  
 //faire avancer les photos vers la droite avec la flèche
 function nextPhoto(){
     let photoAvis = document.querySelector('.avis__photo1');
     if(pointeur === photos.length -1){
         pointeur = 0;
     }
     else{
         pointeur ++; 
     }
     photoAvis.style.backgroundImage='url('+folderPhoto+'/assets/img/'+photos[pointeur]+'.jpg)';
     // console.log(photos[pointeur]);
     avisText.innerHTML=avis[pointeur];
 }
 
 function backPhoto(){
     let photosAvis = document.querySelector('.avis__photo1');
     if(pointeur === 0){
         pointeur = photos.length -1;
     }
     else{
         pointeur --;
     }
     photoAvis.style.backgroundImage='url('+folderPhoto+'/assets/img/'+photos[pointeur]+'.jpg)';
     avisText.innerHTML=avis[pointeur];
 }
 
  //démarrer le carusel
 function startAvis(){
     timer = setInterval(nextPhoto, 5000);
 }
 //arrêté le carusel
 function stopAvis(){
     clearInterval(timer);
 }

} //!\\ end Windows.onload




