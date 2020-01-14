<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */


// Première ligne

echo date("l");

echo "<br>";

echo date("Y.m.j");
echo "<br>";
$timestamp1 = mktime(0, 0, 0, 12, 10, 2018);
echo date ('Y.m.j', $timestamp1);
echo "<br>";

echo date("H:i:s");
echo "<br>";
$timestamp2 = mktime(11, 35, 07, 0, 0, 0);
echo date ("H:i:s", $timestamp2);
