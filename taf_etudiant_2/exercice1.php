<?php
/**
 * Générer deux nombres puis faire leur permutation.On
 *affichera les deux nombres avant et après permutations.
 */

define("MIN", -50);
define("MAX", 50);

$nombre1 = rand(MIN, MAX);
$nombre2 = rand(MIN, MAX);

echo("Le nombre 1 est  : {$nombre1}<br>");
echo("Le nombre 2 est  : {$nombre2}<br>");

echo("Apres permutations");
$save = $nombre1;
$nombre1 = $nombre2 ;
$nombre2 = $save;

echo("Le nombre 1 est  : {$nombre1}<br>");
echo("Le nombre 2 est  : {$nombre2}<br>");