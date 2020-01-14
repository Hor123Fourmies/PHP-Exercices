Consignes :

- Compléter la première ligne de code pour vérifier que a est supérieur à b (hello world sera affiché)
- Compléter la seconde ligne de code pour vérifier que a est différent de b ( hllo world2 sera affiché)
- Compléter la troisième ligne de code pour afficher Oui si a est égal à b ou non si ce n'est pas le cas
- Compléter la quatrième ligne de code pour afficher "1" si a est égal à b, afficher "2" si a est supérieur à b sinon afficher "3"
- Compléter la 5ème ligne pour afficher "Hello" si la variable color vaut "red" ou "welcome" si la variable color vaut "green"
- Ajouter ensuite un bloc permettant d'éxécuter du code si la variable color ne vaux ni "red" ou "green"


Théorie :

En php, comme en javascript, vous pouvez écrire des blocs conditionels 
en utilisant if,else,elseif,switch

La bonne nouvelle : Dans les deux langages, 
on écrit ces blocs exactement de la même façon !

La mauvaise nouvelle : Pas de mauvaises nouvelles !


- If :

Execute du code si une condition est vrai :

if($x==1)
{
//Du code executé si la condition est vérifiée
}

Dans cet exemple si la variable x vaut 1, le code du bloc sera exécuté


- if else :

Exécute du code si une condition est vraie, exécute le code contenu dans le bloc else 
si la condition est fausse

if($x==2)
{
//Du code exécuté si la variable x vaut 2
}
else
{
//Du code exécuté si la variable x ne vaut pas 2
}


- if elseif else :

exécute du code si une condition est vraie, exécute un autre bloc de code 
si la condition elseif est vraié, sinon exécute le code contenu dans le bloc else

if($x==1)
{
//Du code exécuté si x vaut 1
}
elseif($x==3)
{
//Du code exécuté si x vaut 3
}
else
{
//Du code exécuté si x ne vaut ni 1 ni 3
}


- switch :

Comme en javascript, un switch exécute des blocs de code en fonction de une ou plusieurs 
conditions

$x=5;
switch($x)
{
case"1":
//du code exécuté si x vaut 1
break;
case"2":
//du code exécuté si x vaut 2
break;
case"machin":
//du code exécuté si x vaut machin
break;
case"5":
//du code exécuté si x vaut 5
break;
default:
//du code exécuté si aucune autre conditions n'est remplie
}


