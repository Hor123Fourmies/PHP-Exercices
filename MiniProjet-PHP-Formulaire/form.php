<?php


$fname = $_GET['fname'];
echo $fname;

if($fname === "James")
{
    echo "Bond, $fname Bond";
}
else
{
    echo "Bonjour $fname";
}