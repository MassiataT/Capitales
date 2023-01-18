<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Niveau 2</title>
</head>

<body>

    <div id="intro" class="container">

        <h1>Un peu plus compliqué avec le niveau 2 !</h1>

        <p>
            Voici les règles de ce niveau : <br>
            Il y aura 10 pays pour lesquels il faudra deviner les capitales, à côté de chacuns de ces pays il y aura une liste de 10 capitales qui correspondent a ces pays. Le but du jeu est d'associer les bons pays aux bonnes capitales. <br>
            A la fin vous obtiendrez une note sur 10. <br><br>
            C'est parti !
        </p>

        <button class="boutons demarrer">Démarrer</button>

    </div>

    <div id="jeu1" class="container">
        <h2>Associez les pays aux bonnes capitales !</h2>
        <form action="./resultat_n2.php" method="post">
            <?php
            $capitales = [];
            foreach ($listepays as $value2) {
                array_push($capitales, $value2);
            };
            shuffle($capitales);
            foreach ($listepays as $key => $value) {
                echo '<label for="' . $value["Nom_français"] . '">' . $value["Nom_français"] . '</label>';
                echo '<select name="' . $value["Nom_français"] . '" class="capitales">';

                foreach ($capitales as $value3) {
                    echo '<option name="choix[]" value="' . $value3["Capitale"] . '">' . $value3["Capitale"] . '</option>';
                };
                echo '</select><br>';
            };
            ?>
            <input type="submit" value="Résultat" class="boutons resultat">
        </form>

    </div>

    <footer>
        <form action="../index.php" method="get" class="footer">
            <input type="submit" value="Accueil">
        </form>
    </footer>

</body>

<script src="../script.js"></script>

</html>