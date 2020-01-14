<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Compléter le code ci-dessous pour afficher la longueur de la chaine de caractères

 echo strlen("google");

 echo "<br><br>"; //Décommentez les <br> pour tester l'affichage lorsque vous aurez plusieurs instructions


 // Compléter le code ci-dessous pour inverser la chaine de caractères

echo strrev("anticonstitutionellement");

// Et si vous testiez également avec votre prénom ?

echo"<br><br>";



// Compléter le code ci-dessous pour remplacer le mot ok par non
$oldtxt = "Ok Google!";
$newtxt = ("Non Google");

echo $newtxt;
echo"<br><br>";
echo str_replace("Ok", "Non", "Ok Google");