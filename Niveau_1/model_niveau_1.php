<?php
require("../connexion_bdd.php");

// Pays et leurs capitales au hasard
$nombre = [];
$i = 0;
while ($i < 10) {
    $alea = rand(1, 196);
    if (!in_array($alea, $nombre)) {
        $nombre[] = $alea;
        $i++;
    }
}
$liste = '';
foreach ($nombre as $key => $value) {
    if ($key == 9) {
        $liste .= $value;
    } else {
        $liste .= $value . ', ';
    }
}
$premiersPays = $db->prepare('SELECT Nom_français, Capitale FROM liste WHERE id IN (' . $liste . ')');
$premiersPays->execute();
$listepays = $premiersPays->fetchAll();

// var_dump($listepays);

// récuperer trois capitales au hasard
$z = 1;
$tableaucapitales = [];
while ($z <= 10) {
    $nombre2 = [];
    $x = 0;
    while ($x < 3) {
        $alea2 = rand(1, 196);
        if (!in_array($alea2, $nombre2)) {
            $nombre2[] = $alea2;
            $x++;
        }
    }
    $liste2 = '';
    foreach ($nombre2 as $key2 => $value2) {
        if ($key2 == 2) {
            $liste2 .= $value2;
        } else {
            $liste2 .= $value2 . ', ';
        }
    }
    $capitaleshasard = $db->prepare('SELECT Capitale FROM liste WHERE id IN (' . $liste2 . ')');
    $capitaleshasard->execute();
    $listecapitaleshasard = $capitaleshasard->fetchAll();
    $z++;
    array_push($tableaucapitales, $listecapitaleshasard);
}
// var_dump($tableaucapitales);
// echo "<br><br>";
// verif
// recuperer les bonnes capitales
// $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// if ($url == "http://localhost:8080/Niveau_1/resultat_n1.php") {
$test = [];
foreach ($_POST as $key => $value) {
    array_push($test, trim(str_replace("_", " ", $key), " "));
}
$listetest = '';
foreach ($test as $key1 => $value1) {
    if ($key1 == 9) {
        $listetest .= '"' . $value1 . '"';
    } else {
        $listetest .= '"' . $value1 . '", ';
    }
}
$verif = $db->prepare('SELECT Nom_français, Capitale FROM liste WHERE Nom_français IN (' . $listetest . ')');
$verif->execute();
$correct = $verif->fetchAll();
// }
