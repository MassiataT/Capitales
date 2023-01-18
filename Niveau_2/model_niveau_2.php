<?php
require("../connexion_bdd.php");

// Pays au hasard
$nombre = [];
$i = 0;
while ($i < 10) { 
    $alea = rand(1,196);
    if (!in_array($alea, $nombre)) {
        $nombre[] = $alea;
        $i++;
    }
}

// récuperer la liste des capitales
$liste = '';
foreach ($nombre as $key => $value) {
    if ($key == 9) {
        $liste .= $value;
    } else {
        $liste .= $value . ', ';
    }
}
$premiersPays = $db->prepare('SELECT Nom_français, Capitale FROM liste WHERE id IN ('. $liste . ')');
$premiersPays->execute();
$listepays = $premiersPays->fetchAll();

// verif
// recuperer les capitales de bons pays si on est sur la page resultats
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if ($url == "http://localhost:8080/Niveau_2/resultat_n2.php" ) {
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
}
