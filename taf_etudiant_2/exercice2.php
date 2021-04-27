<?php 
/*
* : Point: Générer deux points puis calculer et afficher la
* distance entre les deux points.Un point est caractérisé par son abscisse et
* son Ordonnée.
*/
define("MIN", -50);
define("MAX", 50);
$pointAX = rand(MIN, MAX);
$pointAY = rand(MIN, MAX);
$pointBX = rand(MIN, MAX);
$pointBY = rand(MIN, MAX);
$distance = sqrt(pow(($pointBX- $pointAX),2) + pow(($pointBY- $pointAY),2));
echo("La distance entre le point A({$pointAX},{$pointAY}) et le point B({$pointBX},{$pointBY}) est : {$distance}");
