<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Niveau 1</title>
</head>

<body>


    <div id="intro" class="container">

        <h1>On commence doucement avec le niveau 1 !</h1>

        <p>
            Voici les règles de ce niveau : <br>
            Il y aura 10 pays pour lesquels il faudra deviner les capitales, à côté de chacuns de ces pays il y aura une liste de 3 capitales , il faudra donc deviner la bonne réponse parmis ces 3 choix.<br>
            A la fin vous obtiendrez une note sur 10.<br><br>
            C'est parti !
        </p>

        <button class="boutons demarrer">Démarrer</button>

    </div>

    <div id="jeu2" class="container">
        <h1>Quizz : trouvez la bonne capitale de ces 10 pays !</h1>

        <form action="" method="post">
            <?php
            for ($i = 0; $i < 10; $i++) {
                $i2 = $i + 1;
                echo '<div class="question question' . $i2 . '">';
                $tableau = [];
                echo "<h2 class=\"texte\">Question " . $i2 . " :</h2>";
                echo "<p class=\"texte\">Quelle est la capitale de : " . $listepays[$i]["Nom_français"] . "</p>";
                array_push($tableau, $listepays[$i]["Capitale"]);
                $aleat1 = $tableaucapitales[$i];
                foreach ($aleat1 as $key => $value) {
                    array_push($tableau, $value['Capitale']);
                }
                shuffle($tableau);
                echo '<div class="quiz">';
                foreach ($tableau as $value) {
                    echo '<div class="' . $value . ' reponse">';
                    echo '<p>' . $value . '</p>';
                    echo '</div>';
                }
                echo '</div>';
                echo '<input type="button" value="Suivant" class="boutons suivant suivant' . $i2 . '">';
                echo '<div class="erreur"></div>';
                echo '</div>';
            }
            ?>
            <input type="button" value="Résultat" id="resultatn1" class="boutons">

        </form>
    </div>

    <div class="container resultatn1">

    </div>

    <footer>
        <form action="../index.php" method="get">
            <input type="submit" value="Accueil">
        </form>
    </footer>

</body>

<!-- <script src="../script.js"></script> -->
<script src="./script_n1.js"></script>

</html>