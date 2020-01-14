<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Première ligne

session_start();
$_SESSION['couleur'] = "rouge";

echo "Voici la couleur que j'ai choisie :<br><br>
<a href='index2.php'>Cliquez ici pour connaître la couleur choisie</a>";
/*
- Dans le fichier index.php, vous allez démarrer une session,
et créer une variable de session appelée couleur ayant pour valeur "rouge"
- Vous allez créer un fichier index2.php
et afficher la valeur de la variable de session couleur
*/







