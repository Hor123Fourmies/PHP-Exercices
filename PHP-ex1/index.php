<?php

//echo "texte";

$texte = "texte";
echo $texte;
echo "<br><br>";

$objets = array("verre","assiette","couteau","fourchette");
echo $objets[1];

for ($i=0; $i<3;$i++){
    echo $objets[$i]." ";
}
?>

<ul></ul>

<?php

foreach ($objets as $i){
    echo $i." ";
}