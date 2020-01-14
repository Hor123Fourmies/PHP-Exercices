Consignes :

- Compléter la première ligne de code pour afficher le résultat de 10 multiplié par 5
- Compléter la seconde ligne de code pour afficher le résultat de 10 divisé par 2
- Compléter la troisième ligne de code pour vérifier 
que la condition a est identique à b (définir les variables)
- Compléter la quatrième ligne de code pour vérifier 
que la condition a n'est pas identique à b
- Sans modifier les deux tableaux de la 5ème ligne, 
vérifier que la condition $arr1 est identique à $arr2


Théorie :

En php, comme en javascript, il existe de nombreux opérateurs :

- Les opérateurs arithmétiques (pour réaliser des opérations mathématiques)


    + Pour additionner deux valeurs
    - Pour soustraire deux valeurs
    * Multiplier deux valeurs
    / Division
    % Modulo
    + ** Exponentiel (On le trouve également sous la forme d'une fonction php native : 
    pow($nombre1,$nombre2)


- Les opérateurs pour assigner des valeurs

```
    $x=$y : Assigne la valeur de y à x
    $x +=$y : Addition ( s'écrit aussi : $x=$x+$y )
    $x -=$y : Soustraction ( s'écrit aussi : $x=$x-$y )
    $x *=$y : Multiplication ( s'écrit aussi : $x=$x*$y )
    $x /=$y : Division ( s'écrit aussi : $x=$x/$y )
    $x %=$y : Modulo ( s'écrit aussi : $x=$x%$y )
```



- Les opérateurs utilisés dans les conditions, pour comparer deux valeurs entre elles

```
    == Vérifie que deux valeurs sont identiques ( $x==$y )
    === Vérifie que deux valeurs sont identiques et du même type ( $x===$y )
    != Vérifie que deux valeurs sont différentes ( $x!=$y )
    <> Vérifie que deux valeurs sont différentes ( $x <> $y ) 
=> Cette forme est très peu utilisée
    !== Vérifie que deux valeurs sont différentes 
et que les types de valeurs sont également différentes ( $x!==$y )
    > Supérieur à ( $x>$y )
    < Inférieur à ( $x<$y )
    >= Supérieur ou égal
    <= Inférieur ou égal
    
```    

    Ces opérateurs sont similaires à ceux utilisés en javascript, 
    mais php n'applique pas de conversion de type pour ==
    ou != contrairement à javascript.


- Les opérateurs pour incrémenter/décrémenter les variables

```
    ++$x : Incrémente x de 1, puis retourne la valeur de $x
    $x++ : Retourne la valeur de $x puis incrémente de 1
    --$x : Décrémente x de 1, puis retourne la valeur de $x
    $x-- : Retourne la valeur de $x, puis décrémente de 1
    
```

- Les opérateurs logiques (pour combiner plusieurs conditions)

```
    "and" ou "&&" ( $x==1 and $y==1 ) 
La condition est vraie si $x est égal à 1 et si $y est égal à 1
    "or" ou "||" ( $x==1 || $y==1 ) 
La condition est vraie si $x est égal à 1 OU si $y est égal à 1
    "xor" ( $x==1 xor $y == 1 ) 
La condition est vraie si $x est égal à 1 ou si $y est égal à 1 
mais pas si les deux variables sont égales à 1
    "!" ( !$x ) 
La condition est vraie si $x ne vaut pas true (utilisé pour les valeurs booléennes)
```

- Les opérateurs pour les chaines de caractères

```
    "." Concatenation : $txt1.$txt2 , 
Fusionne deux chaines de caractères (équivalent en js : "chose"+"truc")
    ".=" Ajout à la fin : $txt .=$txt2 , 
Ajoutera le contenu textuel de $txt2 à la fin de $txt1
```

- Les opérateurs spécifiques pour les tableaux

```
    "+" Fusionne deux tableaux
    "==" Vérifie que deux tableaux sont identiques
    "===" Vérifie que deux tableaux sont identiques, 
que leurs valeurs communes ont le même type et que les clefs/valeurs ont le même ordre
    "!=" ou "<>" Vérifie que deux tableaux ne sont pas identiques
```


