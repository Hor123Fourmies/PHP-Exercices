<?php

// echo "formulaire envoyé";

echo $_POST ['couleur'];

if($_POST ['couleur']=="Bleu")
{
    echo "<body bgcolor='blue'>";
}

else if ($_POST ['couleur']=="Vert")
{
    echo "<body bgcolor='green'>";
}

else if ($_POST ['couleur']=="Jaune")
{
    echo "<body bgcolor='yellow'>";
}

else if ($_POST ['couleur']=="Rouge")
{
    echo "<body bgcolor='red'>";
}

else if ($_POST ['couleur']=="Violet")
{
    echo "<body bgcolor='purple'>";
}

else if ($_POST ['couleur']=="Orange")
{
    echo "<body bgcolor='orange'>";
}