<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne

// Compléter la première ligne de code pour vérifier que a est supérieur à b (hello world sera affiché)
$a = 50;
$b = 10;

if($a>$b)
{
    echo "Hello World!";
}


//Deuxieme ligne
// Compléter la seconde ligne de code pour vérifier que a est différent de b (hello world2 sera affiché)

if($a!=$b)
{
    echo "<br><br>Hello World2";
}

//Troisieme ligne
// Compléter la troisième ligne de code pour afficher Oui si a est égal à b ou non si ce n'est pas le cas

if($a===$b)
{
    echo "<br><br>Oui";
}
else
{
    echo "<br><br>Non";
}

//Quatrième ligne
// Compléter la quatrième ligne de code pour afficher "1" si a est égal à b,
// afficher "2" si a est supérieur à b sinon afficher "3"

echo"<br><br>";
 if ($a === $b)
 {
    echo "1";
 }
 else if ($a > $b)
 {
    echo "2";
 }
 else
     {
    echo "3";
     }


//Cinquième ligne
// Compléter la 5ème ligne pour afficher "Hello" si la variable color vaut "red"
// ou "welcome" si la variable color vaut "green"

$color = "red";
echo"<br><br>";

switch ($color) {
    case "red":
        echo "Hello";
        break;
    case "green":
        echo "Welcome";
        break;
}

