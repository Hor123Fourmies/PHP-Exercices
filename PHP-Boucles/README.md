Consignes :

- Compléter la première ligne de code pour afficher $i tant que la variable i est inférieure à 6
- Compléter la seconde ligne de code pour afficher $i tant que la variable i est inférieure à 6
- Compléter la troisième ligne pour créer une boucle qui va de 0 à 9
- Compléter la quatrième ligne pour boucler sur les éléments du tableau $colors



Théorie :

En php, les boucles existent également, elles fonctionnent exactement comme en javascript, 
on exécute un bloc de code tant que la condition est vraie ou un certain nombre de fois.

Différentes instructions existent :


- while : On exécute le bloc de code tant que la condition est vraie

while(condition)
{
//code à exécuter
}

Exemple :

$x = 1;

while($x <= 5) {
    echo "Le nombre est: $x <br>";
    $x++;
}

Dans cet exemple, x est défini à 1, une boucle est créée : 
tant que x est inférieur ou égal à 5, on exécute le bloc de code.
Dans ce bloc, on augmente x de 1 à chaque fois que le bloc est exécuté


- do ... while : On exécute le bloc une première fois 
puis tant que la condition est vraie , on exécute à nouveau le bloc

do {
//du code à exécuter
}
while(condition);

Exemple :

$x = 1;

do {
    echo "Le nombre est: $x <br>";
    $x++;
} while ($x <= 5);



- for : On exécute le bloc un nombre de fois défini à l'avance

for(variable;test;increment)
{
//code à exécuter
}

Exemple :

for ($x = 0; $x <= 10; $x++) {
    echo "x vaut: $x <br>";
}


- foreach : Boucle pour parcourir un tableau

foreach($tableau as $valeur)
{
//code
}

Exemple :

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}


