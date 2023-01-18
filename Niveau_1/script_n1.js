// Afficher le jeu et masquer l'introduction
var btn = document.querySelector('.demarrer');
var intro = document.querySelector("#intro");
var jeu = document.querySelector("#jeu2");
btn.addEventListener('click', function() {
    intro.style.display = "none";
    jeu.style.display = "block";
});

// mettre les réponses selectionnées dans un tableau
tab = [];
reponses = document.querySelectorAll(".reponse");
reponses.forEach(reponse => {
    reponse.addEventListener("click", function () {
        if (reponse.classList.contains("checked")) {
            reponse.classList.remove("checked");
            repTab2 = reponse.className.split(" reponse");
            tab = tab.filter((tab) => tab !== repTab2[0])
            // console.log(tab);
        } else {
            reponse.classList.add("checked");
            repTab = reponse.className.split(" reponse");
            tab.push(repTab[0]);
            // console.log(tab);
        }
    });
});
// verifier qu'on ne selectionne qu'une réponse par question
index = 1;
const result = document.querySelector("#resultatn1");
const questions = document.querySelectorAll(".question");
const suivants = document.querySelectorAll(".suivant");
suivants.forEach(boutons => {
    boutons.addEventListener("click", function() {
        // if (boutons.classList.contains("suivant" + index)) {
            if (tab.length !== index) {
                $(".erreur").html("Il ne faut sélectionner qu'une réponse !");
                console.log(index);
            } else {
                $(".erreur").html("");
                questions.forEach(element => {
                    index2 = index + 1;
                    if (element.classList.contains("question" + index2)) {
                        element.style.display = "block";
                        if (index == 9) {
                            const s = document.querySelector(".suivant10");
                            s.style.display = "none";
                            result.style.display = "block";
                        }
                    } 
                    else {
                        element.style.display = "none";
                    }
                });
                index += 1;
            }
        // }
    })
});


// Traitement des réponses et résultat
const resultat = document.querySelector("#resultatn1");
resultat.addEventListener("click", function() {
    if (tab.length < 10 ) {
        console.log("non");
    } else {
        $("#jeu2").css("display", "none");
        $(".resultatn1").css("display", "block");
        $(".resultatn1").append("<ul>");
        n = 0;
        for (let y = 0; y < 10; y++) {
            if (tab[y] == tabCapitales[y]) {
                $(".resultatn1").append("<li>Correct ! La capitale de " + tabpays[y] + " est bien "+ tab[y] + ".</li>");
                $(".resultatn1").append("<br>");
                n++;
            } else {
                $(".resultatn1").append("<li>Trompé ! La capitale de " + tabpays[y] + " n'est pas "+ tab[y] + " mais " + tabCapitales[y] + ".</li>");
                $(".resultatn1").append("<br>");
            }
        }
    }
    $(".resultatn1").append("<p class=\"score\">Score : " + n + "/10</p>");
    if (n < 4) {
        $(".score").css("color", "red");
    } else if (n > 3 && n < 7) {
        $(".score").css("color", "orange");
    } else {
        $(".score").css("color", "#0FB926");
    }
    $(".resultatn1").append("</ul>");
})

// $(document).ready(function(){
//     const resultat = document.querySelector("#resultatn1");
//     resultat.addEventListener("click", function() {
//         $.ajax({
//             type: 'POST',
//             url: './controller_niveau_1.php',
//             data: {rep: tab},
//             // dataType: 'json',
//             error:function(msg, string){
//                 alert( "Error !: " + string );
//             },
//             success:function(data){
//                 $(".resultatn1").css("display", "block");
//                 // $(".resultatn1").html(tab + "");
//                 console.log(tab, tabCapitales);
//             }
//         })
        
//     })
// }); 
