// Récupère le bouton burger et la liste du menu dans le HTML
//je declare deux variable
const burger   = document.getElementById('burger-btn');
const navListe = document.getElementById('nav-liste');

// Au clic sur le burger, ajoute ou enlève la classe "ouvert" sur le menu
burger.addEventListener('click', function() {
    if (navListe.classList.contains('ouvert')) {
        navListe.classList.remove('ouvert'); //  remove =fermer
    } else {
        navListe.classList.add('ouvert');    //  add = ouvre
    }
});