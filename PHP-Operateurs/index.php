<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

/*

- Sans modifier les deux tableaux de la 5ème ligne,
vérifier que la condition $arr1 est identique à $arr2
*/


// Première ligne
echo 10*5;

//Deuxième ligne
echo 10/2;

//Troisième ligne
$a = 3;
$b = 3;
if($a === $b)
{
    echo "<br><br>a est identique à b";
}

//Quatrième ligne
$a = 5;
$b = 6;
if($a != $b)
{
    echo"<br><br>a n'est pas identique à b";
}


//Cinquième ligne
$arr1 = ["poire", "pomme"];
$arr2 = ["pomme", "poire"];
if($arr1 != $arr2)
{
    echo "<br><br>les tableaux ont le même contenu";
}

