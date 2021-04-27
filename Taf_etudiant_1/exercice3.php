<?php 
/**
 * soit l'équation ax+b=0,générer la valeur de a et de b puis donner
 * les solution de l'équation ci dessus.
 */
define("MIN",-50);
define("MAX", 50);
$a = rand(MIN, MAX);
$b = rand(MIN, MAX);
if($a != 0 && $b!= 0 )
{
    echo ("la solution de l'equation : {$a}x +{$b} = 0 est : x = ".-$b/$a), PHP_EOL;
}
elseif($b === 0)
{
    echo("la solution de l'equation : {$a}x +{$b} = 0 est : x = 0");
}
else{
    echo ("la solution de l'equation : {$a}x +{$b} = 0 est : impossible");
}