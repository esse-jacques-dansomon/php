<?php 
/* 
* Générer deux nombres entiers puis les afficher dans l'ordre
* croissant et dans l’ordre décroissant
*/
define("MIN",-50);
define("MAX", 50);
$nombre1 = rand(MIN, MAX);
$nombre2 = rand(MIN, MAX);
$nombre3 = rand(MIN, MAX);


if( $nombre1 > $nombre2 && $nombre1>$nombre3 )
{
    echo("Ordre Croissant :{$nombre3}, {$nombre2}, {$nombre1} <br>");
    echo("Ordre Decroissant : {$nombre1}, {$nombre2}, {$nombre3} <br>");

}
elseif($nombre1 > $nombre3 && $nombre1 > $nombre2) 
{
    echo("Ordre Croissant :{$nombre2}, {$nombre3}, {$nombre1} <br>");
    echo("Ordre Decroissant : {$nombre1}, {$nombre2}, {$nombre3} <br>");
}
elseif($nombre2 > $nombre1 && $nombre2 > $nombre3) 
{
    echo("Ordre Croissant :{$nombre3}, {$nombre2}, {$nombre1} <br>");
    echo("Ordre Decroissant : {$nombre2}, {$nombre1}, {$nombre3} <br>");
}
elseif($nombre2 > $nombre3 && $nombre2> $nombre1) 
{
    echo("Ordre Croissant :{$nombre1}, {$nombre3}, {$nombre2} <br>");
    echo("Ordre Decroissant : {$nombre2}, {$nombre3}, {$nombre1} <br>");
}
elseif($nombre3 > $nombre1 && $nombre3> $nombre2) 
{
    echo("Ordre Croissant :{$nombre2}, {$nombre1}, {$nombre3} <br>");
    echo("Ordre Decroissant : {$nombre3}, {$nombre1}, {$nombre2} <br>");
}
else
{
    echo("Ordre Decroissant :{$nombre2}, {$nombre1}, {$nombre3} <br>");
    echo("Ordre Decroissant : {$nombre3}, {$nombre1}, {$nombre2} <br>");   
}