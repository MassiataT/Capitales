<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultat</title>
</head>

<body>
    <div class="container resultatbody">
        <?php
        include "./model_niveau_2.php";

        $vrai = 0;
        foreach ($_POST as $pays => $reponse) {
            $pays = trim(str_replace("_", " ", $pays), " ");
            foreach ($correct as $key1 => $correction) {
                if ($pays == trim($correction["Nom_français"], " ")) {
                    if ($reponse == $correction["Capitale"]) {
                        // icone
                        echo '<div class="icones">';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#14c100" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>';
                        echo "<p>Correct ! La capitale de " . $pays . " est bien " . $correction['Capitale'] . ".</p><br>";
                        echo '</div>';
                        $vrai += 1;
                    } else {
                        // icone
                        echo '<div class="icones">';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#d43400" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>';
                        echo "<p>Trompé ! La capitale de " . $pays . " n'est pas " . $reponse . " mais " . $correction['Capitale'] . ".</p><br>";
                        echo '</div>';
                    }
                }
            }
        }

        echo '<h1 id="score">';
        echo "Score : " . $vrai . "/10";
        echo '</h1>';
        ?>

        <footer class="niveaux niveau2">
            <form action="../index.php" method="get">
                <input type="submit" value="Accueil" class="boutons">
            </form>
            <form action="./controller_niveau_2.php" method="get">
                <input type="submit" value="Recommancer" class="boutons recommancer">
            </form>
        </footer>
    </div>

</body>

<script src="../script.js"></script>

</html>