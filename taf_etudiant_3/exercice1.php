<?php 
/**
 * Écrire un script qui génère un nombre supérieur à 10 000 puis affiche dans:
 * ●une table HTML , les valeurs sont inférieures à la moyenne du tableau
 * ● une table HTML ,les valeurs supérieures à la moyenne.
 */
set_time_limit(10_000);
define("MIN", 10_000) ;
define("Max", 100_000) ;

$nombre = rand(MIN, MAX);
?>
<table>
<tr>
<?php
for($i=0; $i<$nombre; $i++)
{
?>
<td> </td> 
<?php
}
?>
<tr>
<table>


