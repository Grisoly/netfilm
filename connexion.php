<?php
    // Code PHP
    // Connexion PHP BDD MySQL
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=netfilm;charset=utf8','root','');
        echo 'Connection reussie';
    } catch (Exception $e) {
        die('Erreur:' . $e->getMessage());
    }
?>