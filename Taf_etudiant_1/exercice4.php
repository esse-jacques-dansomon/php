<?php 
/**
 * soit l'équation ax 2+bx+c=0,générer la valeur de a , de b et de c
 * puis donner les solution de l'équation ci dessus.
 */

define("MIN", -50); 
define("MAX", 50); 

$a = rand(MIN, MAX);
$b = rand(MIN, MAX);
$c = rand(MIN, MAX);

echo("L'equation est sous forme : {$a}x² + {$b}x + {$c} <br>");

$dicriminant = ($b*$b) - (4*$a*$c) ; 

if($dicriminant > 0 )
{
    echo ("Nous avons deux solutions : x1 et x2 <br>") ;
    echo("x1 = ". ((-$b - sqrt($dicriminant))/2*$a) ) . " <br>";
    echo("x1 = ". ((-$b + sqrt($dicriminant))/2*$a)) . " <br>";

}
elseif($dicriminant == 0)
{
    echo("Solution double x = ".  -$b/2*$a); PHP_EOL;
}
else
{
    echo ("Pas de solution "), PHP_EOL;
}