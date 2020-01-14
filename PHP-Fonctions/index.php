<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

/*
- Compléter la troisième ligne pour afficher le premier paramètre de ma fonction
maFonctionParam
- Compléter la troisième ligne de code pour que la fonction maFonctionParam
retourne le deuxieme paramètre
- Appeler cette fonction

*/

// Première ligne

function maFonction()
{
    echo "Hello World!";
}

//Deuxième ligne

maFonction();

echo "<br>";

//Troisième ligne

function maFonctionParam($fname, $lname) {
    echo $fname;
    echo $lname;
}

maFonctionParam("oui ","non");




