<?php
try {
    $db = new PDO('mysql:host=127.0.0.1:3306;dbname=pays;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
