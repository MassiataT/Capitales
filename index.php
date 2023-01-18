<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Capitales</title>
</head>

<body>

    <div class="container debut">
        <h1>Les capitales</h1>

        <p>
            Connaissez vous bien les capitales de tous les pays du monde ? <br>Testez vous et voyons voir !
        </p>

        <p>
            Si vous voulez vous raffraichir la mémoir avant de vous tester voici un lien :<br> <a href="https://fr.wikipedia.org/wiki/Liste_des_capitales_du_monde"> Liste des capitales du monde </a>
        </p>

        <div class="niveaux">
            <button class="boutons" onclick="Niveau1()">Niveau 1</button>
            <button class="boutons" onclick="Niveau2()">Niveau 2</button>
            <button class="boutons" onclick="Niveau3()">Niveau 3</button>
        </div>

    </div>

</body>

<script src="./script.js"></script>

</html>