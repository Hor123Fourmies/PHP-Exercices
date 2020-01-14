<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */


// Première ligne
$i = 1;

while ($i < 6){
    echo $i;
    $i++;
}


//Deuxième ligne
echo"<br><br>";

$i = 1;

 do {
     echo $i;
     $i++;
 } while ($i < 6);

echo"<br><br>";

//Troisième ligne
 for ($i = 0; $i < 10; $i++) {
    echo $i;
}


echo"<br><br>";

//Quatrième ligne
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo $value." ";
}


