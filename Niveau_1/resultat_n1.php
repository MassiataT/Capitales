<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Résultat</title>
</head>

<body>
    <div class="container">
        <?php
        var_dump($_POST['tab']);
        ?>
    </div>

    <footer>
        <form action="../index.php" method="get">
            <input type="submit" value="Accueil">
        </form>
        <form action="./controller_niveau_1.php" method="get">
            <input type="submit" value="Recommancer">
        </form>
    </footer>

</body>

<!-- <script src="./script_n1.js"></script> -->

</html>