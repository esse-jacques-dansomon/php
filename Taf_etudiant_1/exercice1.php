<?php 
/* 
* Générer deux nombres entiers puis les afficher dans l'ordre
* croissant et dans l’ordre décroissant
*/
define("MIN",-50);
define("MAX", 50);
$nombre1 = rand(MIN, MAX);
$nombre2 = rand(MIN, MAX);

//Ordre croissant 
if($nombre1 > $nombre2)
{
    echo("Ordre Croissant : {$nombre2}, {$nombre1} <br>");
    echo("Ordre Decroissant : {$nombre1}, {$nombre2} <br>");
}
elseif($nombre1 < $nombre2)
{
    echo("Ordre Croissant : {$nombre1}, {$nombre2} <br>");
    echo("Ordre Decroissant : {$nombre2}, {$nombre1} <br>");
}else 
{
    echo ("on a une égalité {$nombre1}, {$nombre2} <br>");
}