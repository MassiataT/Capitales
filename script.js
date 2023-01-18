// redirige vers les différents niveaux
function Niveau1() {
    document.location.href="./Niveau_1/controller_niveau_1.php"; 
}

function Niveau2() {
    document.location.href="./Niveau_2/controller_niveau_2.php"; 
}

function Niveau3() {
    document.location.href="./Niveau_3/vue_niveau_3.php"; 
}

// Afficher le jeu et masquer l'introduction
var btn = document.querySelector('.demarrer');
var intro = document.querySelector("#intro");
var jeu = document.querySelector("#jeu1");
btn.addEventListener('click', function() {
    intro.style.display = "none";
    jeu.style.display = "block";
});

